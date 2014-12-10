<article class="my-works">
    <header>
        <h1 class="main-info-title">
            <span class="h1-txt">Мои работы</span>
        </h1>
    </header>

    <div class="gallery">
        <div class="gallery-item">
            <figure>
                <img class="project-preview" src="./img/separated/default-project-img-179x125.jpg" alt=""/>
                <figcaption class="project-info">
                    <div class="project-source">www.site.ru</div>
                    <div class="project-description">
                        Информация о проекте 1 превью 2 строки
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="gallery-item">
            <figure>
                <img class="project-preview" src="./img/separated/default-project-img-179x125.jpg" alt=""/>
                <figcaption class="project-info">
                    <div class="project-source">www.site.ru</div>
                    <div class="project-description">
                        Информация о проекте 1 превью 2 строки
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="gallery-item">
            <figure>
                <img class="project-preview" src="./img/separated/default-project-img-179x125.jpg" alt=""/>
                <figcaption class="project-info">
                    <div class="project-source">www.site.ru</div>
                    <div class="project-description">
                        Информация о проекте 1 превью 2 строки
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="gallery-item">
            <figure>
                <img class="project-preview" src="./img/separated/default-project-img-179x125.jpg" alt=""/>
                <figcaption class="project-info">
                    <div class="project-source">www.site.ru</div>
                    <div class="project-description">
                        Информация о проекте 1 превью 2 строки
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="gallery-item">
            <div class="display-inline-table download-project-btn">
                <div class="display-table-cell vertical-align-middle to-center-inline">
                    <div class="download-project-icon"></div>
                    <div class="add-project-btn-txt">Добавить проект</div>
                </div>
            </div>
        </div>
    </div>
</article>

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
            <form action="">
                <fieldset class="project-popup-form-fieldset">
                    <div>
                        <label for="project-name" class="add-project-form-label">Название проекта</label>
                    </div>
                    <div class="form-input-wrapper">
                        <input id="project-name" class="form-input" placeholder="Введите название" type="text"/>
                    </div>
                </fieldset>
                <fieldset class="project-popup-form-fieldset">
                    <div><label for="project-img" class="add-project-form-label">Картинка проекта</label></div>
                    <div class="form-input-wrapper">
                        <div class="display-table parent-size">
                            <div class="display-table-cell">
                                <input id="project-img" class="form-input" placeholder="Загрузите изображение" type="text"/>
                            </div>
                            <div class="display-table-cell download-img-btn-cell">
                                <button class="download-img-btn parent-size vertical-align-middle"></button>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="project-popup-form-fieldset">
                    <div><label for="project-url" class="add-project-form-label">
                            <span class="upper-case">url</span> проекта</label>
                    </div>
                    <div class="form-input-wrapper">
                        <input id="project-url" class="form-input" placeholder="Добавьте ссылку" type="url"/>
                    </div>
                </fieldset>
                <fieldset class="project-popup-form-fieldset">
                    <div>
                        <label for="project-description" class="add-project-form-label">Описание</label>
                    </div>
                    <div class="form-taxtarea-wrapper project-textarea-wrapper">
                        <textarea id="project-description" class="form-taxtarea project-textarea" placeholder="Пара слов о Вашем проекте"></textarea>
                    </div>
                </fieldset>
                <footer class="project-popup-footer to-center-inline">
                    <input value="Добавить" class="submit-project" type="submit"/>
                </footer>
            </form>
        </div>

    </div>
</div>