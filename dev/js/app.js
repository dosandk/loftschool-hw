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

        self.hideAddProjectPopup();
        self.showAddProjectPopup();
        self.toggleSubmitBtnStatus();
    },
    contactFormValidationInit: function () {
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
                console.error('validate');
                $(form)[0].reset();

                var str = $(form).serialize();

                console.log(str);

                $.ajax({
                    url: "http://vl-shevchuk.ru/core/controllers/add-project.php",
                    type: 'POST',
                    contentType: 'application/json; charset-utf-8',
                    dataType: 'json',
                    data: str
                })
                .done(function(data) {
                    console.error('done');
                    console.log(data);

                }).fail(function(error) {
                    console.error('error');
                    console.log(error);
                }).always(function() {
                    console.log('complete');
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
    hideAddProjectPopup: function() {
        var self = this;

        $('.project-popup-close-btn').on('click', function () {
            $('.modal-overlay').addClass('hide');
            $('#add-project-form')[0].reset();
        });
    }
};
