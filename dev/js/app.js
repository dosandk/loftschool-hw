var app = {
    initialize: function () {
        var self = this;
        self.addEventsListeners();

        console.log('application was initialized');
    },
    addEventsListeners: function () {
        var self = this;
        self.toggleAddProjectPopup();
        self.contactFormValidationInit();
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
            submitHandler: function() {
                console.error('validate');
            }
        });

    },
    toggleAddProjectPopup: function () {
        $('.download-project-icon, .project-popup-close-btn').on('click', function () {
            $('.modal-overlay').toggleClass('hide');
        });
    }
};
