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

        self.closeSuccessNotification();
        self.closeErrorNotification();

        self.contactFormValidationInit();
    },
    showSuccessNotification: function () {
        $('.success-notification-popup').fadeIn('slow');
    },
    showErrorNotification: function () {
        $('.project-downloading-error').fadeIn('slow');
    },
    closeSuccessNotification: function() {
        var self = this;

        $('.success-block-close-btn').on('click', function() {
            $(this).parents('.success-notification-popup').fadeOut('slow');
            self.hidePopupOverlay();
        });
    },
    closeErrorNotification: function () {
        $('.error-block-close-btn').on('click', function() {
            $(this).parents('.project-downloading-error').fadeOut('slow');
        });
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
            $('.add-project-popup').fadeIn(500);
            self.addProjectFormValidationInit();
            self.initFileUploader();
        });
    },
    initFileUploader: function() {
        var self = this;

        $('.fileUpload').liteUploader({
            script: 'core/libs/file-uploader/file-uploader.php'
        }).on('lu:success', function (e, response) {
            $('#project-img-txt').trigger('keyup');
        });
    },
    addEventForHideAddProjectPopup: function() {
        var self = this;

        $('.project-popup-close-btn').on('click', function () {
            self.hideAddProjectPopup();
            self.hidePopupOverlay();
        });
    },
    hidePopupOverlay: function() {
        $('.modal-overlay').fadeOut(500);
    },
    hideAddProjectPopup: function() {
        $('.add-project-popup').fadeOut(500);
        $('#add-project-form')[0].reset();
    }
};


app.addProjectFormValidationInit = function () {
    var self = this;

    $('#add-project-form').validate({
        rules: {
            projectName: 'required',
            projectImg: 'required',
            projectImgTxt: 'required',
            projectDescription: 'required',
            projectUrl: {
                required: true,
                url: true
            }
        },
        messages: {
            projectName: "введите название",
            projectImg: "изображение",
            projectImgTxt: "изображение",
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
                data: {
                    projectName: $('#project-name').val(),
                    projectImgTxt: $('#project-img-txt').val().split('\\').pop(),
                    projectUrl: $('#project-url').val(),
                    projectDescription: $('#project-description').val()
                }
            })
                .done(function(data) {
                    self.hideAddProjectPopup();
                    self.showSuccessNotification();

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

app.loginFormValidationInit = function () {
    var self = this;

    $('#login-form').validate({
        rules: {
            userLogin: 'required',
            userPassword: 'required'
        },
        messages: {
            userLogin: "введите логин",
            userPassword: "введите пароль"
        },
        errorPlacement: function(error, element){
            error.appendTo(element.next('.error-wrapper'));
        },
        submitHandler: function(form) {
            $.ajax({
                url: "core/controllers/login.php",
                type: 'POST',
                data: $(form).serialize()
            })
                .done(function(data) {
                    if (data.message === 'ok' && data.redirectUrl) {
                        window.location.href = data.redirectUrl;
                    }
                }).fail(function(error) {
                    //console.log('fail');
                }).always(function() {
                    //console.log('always');
                });
        }
    });
};

app.contactFormValidationInit = function () {
    var self = this;

    $('#contact-form').validate({
        rules: {
            userName: 'required',
            userEmail: {
                required: true,
                email: true
            },
            userMessage: 'required',
            captureCode: 'required'
        },
        messages: {
            userName: 'Введите Ваше имя',
            userEmail: {
                required: 'Введите Ваш email',
                email: 'Введите корректный email'
            },
            userMessage: 'Введите краткое описание',
            captureCode: 'Введите код с картинки'
        },
        errorPlacement: function(error, element){
            error.appendTo(element.next('.error-wrapper'));
        },
        submitHandler: function(form) {
            $.ajax({
                url: "core/controllers/contact.php",
                type: 'POST',
                data: $(form).serialize()
            })
                .done(function(data) {
                    console.log(data);
                    $(form)[0].reset();
                    self.showSuccessNotification();

                }).fail(function(error) {
                    //console.log('fail');
                }).always(function() {
                    //console.log('always');
                });
        }
    });
};