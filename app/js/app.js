var app = {
    selectors: {
        $addProjectForm: '#add-project-form',
        $modalOverlay: '.modal-overlay'
    },
    initialize: function () {
        var self = this;

        self.addEventsListeners();

        console.log('application was initialized');
    },
    addEventsListeners: function () {
        var self = this;

        self.addEventForHideAddProjectPopup();
        self.showAddProjectPopup();
        self.toggleSubmitBtnStatus();
    },
    contactFormValidationInit: function () {
        var self = this;

        $('#add-project-form').validate({
            rules: {
                projectName: 'required',
                projectImg: 'required',
                projectUrl: {
                    required: true,
                    url: true
                }
            },
            messages: {
                projectName: "введите название",
                projectImg: "изображение",
                projectUrl: {
                    required: "ссылка на проект",
                    url: "Введите корректную ссылку"
                }
            },
            errorPlacement: function(error,element){
                error.appendTo(element.next('.error-wrapper'));
            },
            submitHandler: function(form) {
                $.ajax({
                    url: "core/controllers/add-project.php",
                    type: 'POST',
                    data: $(form).serialize()
                })
                .done(function(data) {
                    console.log('done');

                    console.log(data);
                    self.hideAddProjectPopup();

                }).fail(function(error) {
                    console.log('fail');
                    console.log(error);

                }).always(function() {
                    console.log('always');

                });
            }
        });
    },
    toggleSubmitBtnStatus: function () {
        $('#add-project-form input').on('keyup blur change', function () {
            if ($('#add-project-form').valid()) {
                $('.submit-project').prop('disabled', false).removeClass('disabled');
            } else {
                $('.submit-project').prop('disabled', 'disabled').addClass('disabled');
            }
        });
    },
    showAddProjectPopup: function () {
        var self = this;

        $('.download-project-icon').on('click', function () {
            $('.modal-overlay').removeClass('hide');

            self.contactFormValidationInit();
        });
    },
    addEventForHideAddProjectPopup: function() {
        var self = this;

        $('.project-popup-close-btn').on('click', function () {
            self.hideAddProjectPopup();
        });
    },
    hideAddProjectPopup: function() {
        $('.modal-overlay').addClass('hide');
        $('#add-project-form')[0].reset();
    }
};
