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
        self.showImgPath();

    },
    showImgPath: function() {
        $('#project-img').on('change', function() {
            $('#project-img-txt').val($('#project-img').val());
        });
    },
    toggleSubmitBtnStatus: function () {
        $('#add-project-form input, textarea').on('keyup blur change', function () {
            if ($('#add-project-form').valid()) {
                $('.submit-project').prop('disabled', false).removeClass('disabled');
            } else {
                $('.submit-project').prop('disabled', 'disabled').addClass('disabled');
            }
        });
    },
    showAddProjectPopup: function () {
        var self = this;

        $('.download-project-btn').on('click', function () {
            $('.modal-overlay').fadeIn(500);

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
        $('.modal-overlay').fadeOut(500);
        $('#add-project-form')[0].reset();
    }
};


app.contactFormValidationInit = function () {
    var self = this;

    $('#add-project-form').validate({
        rules: {
            projectName: 'required',
            projectImg: 'required',
            projectDescription: 'required',
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
            },
            projectDescription: "Введите описание проекта"
        },
        errorPlacement: function(error, element){
            error.appendTo(element.next('.error-wrapper'));
        },
        submitHandler: function(form) {
            $.ajax({
                url: "core/controllers/add-project.php",
                type: 'POST',
                data: $(form).serialize()
            })
                .done(function(data) {
                    self.hideAddProjectPopup();

                    var projectTemplate = _.template($('#project-template').html(), {projectUrl: 'posts', projectDescription: 'projectDescription'});

                    $('#download-project-btn').before(projectTemplate(data));

                }).fail(function(error) {
                    //console.log('fail');
                }).always(function() {
                    //console.log('always');
                });
        }
    });
};