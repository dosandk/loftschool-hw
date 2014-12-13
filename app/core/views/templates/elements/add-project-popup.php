<div class="modal-overlay hide">
    <div class="add-project-popup">
        <header class="add-project-popup-header">
            <div class="display-table parent-width add-project-popup-title">
                <div class="display-table-cell vertical-align-middle">Добавление проекта</div>
                <div class="display-table-cell vertical-align-middle to-right-inline">
                    <span class="project-popup-close-btn">&nbsp;</span>
                </div>
            </div>
        </header>
        <div class="header-bottom-border">&nbsp;</div>

        <div class="project-popup-content">
            <form id="add-project-form" method="post" enctype="multipart/form-data">
                <fieldset class="project-popup-form-fieldset">
                    <div>
                        <label for="project-name" class="add-project-form-label">Название проекта</label>
                    </div>
                    <div class="contact-form-input-wrapper">
                        <input id="project-name" class="contact-form-input" name="projectName" placeholder="Введите название" type="text"/>
                        <div class="error-wrapper"></div>
                    </div>
                </fieldset>
                <fieldset class="project-popup-form-fieldset">
                    <div><label for="project-img" class="add-project-form-label">Картинка проекта</label></div>
                    <div class="contact-form-input-wrapper">
                        <div class="display-table parent-size">
                            <div class="display-table-cell">
                                <input id="project-img-txt" class="contact-form-input" placeholder="Загрузите изображение" readonly type="text"/>
                                <div class="error-wrapper"></div>
                            </div>
                            <div class="display-table-cell download-img-btn-cell">
                                <label for="project-img" class="download-img-btn parent-size vertical-align-middle"></label>
                                <input id="project-img" name="projectImg" class="hide" type="file"/>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="project-popup-form-fieldset">
                    <div><label for="project-url" class="add-project-form-label">
                            <span class="upper-case">url</span> проекта</label>
                    </div>
                    <div class="contact-form-input-wrapper">
                        <input id="project-url" class="contact-form-input" name="projectUrl" placeholder="Добавьте ссылку" type="url"/>
                        <div class="error-wrapper"></div>
                    </div>
                </fieldset>
                <fieldset class="project-popup-form-fieldset">
                    <div>
                        <label for="project-description" class="add-project-form-label">Описание</label>
                    </div>
                    <div class="project-textarea-wrapper">
                        <textarea id="project-description"
                                  class="form-taxtarea project-textarea"
                                  name="projectDescription"
                                  placeholder="Пара слов о Вашем проекте"></textarea>
                        <div class="error-wrapper"></div>
                    </div>
                </fieldset>
                <footer class="project-popup-footer to-center-inline">
                    <input value="Добавить" class="submit-project" type="submit"/>
                </footer>
            </form>
        </div>

    </div>
</div>