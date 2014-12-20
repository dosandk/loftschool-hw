<article class="my-works">
    <header>
        <h1 class="main-info-title">
            <span class="h1-txt">Мои работы</span>
        </h1>
    </header>

    <div class="gallery">

        <?php foreach($data['projects'] as $project): ?>
            <div class="gallery-item">
                <figure>
                    <img class="project-preview" src="./img/separated/default-project-img-179x125.jpg" alt="<?= $project['description'] ?>"/>
                    <figcaption class="project-info">
                        <div class="project-source">
                            <a target="_blank" href="<?= $project['url'] ?>"><?= $project['url'] ?></a>
                        </div>
                        <div class="project-description">
                            <?= $project['name'] ?> <?= $project['description'] ?>
                        </div>
                    </figcaption>
                </figure>
            </div>
        <?php endforeach ?>

        <?php if (@$_SESSION['auth']) { ?>
            <div id="download-project-btn" class="gallery-item">
                <div class="display-inline-table download-project-btn">
                    <div class="display-table-cell vertical-align-middle to-center-inline">
                        <div class="download-project-icon"></div>
                        <div class="add-project-btn-txt">Добавить проект</div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</article>

<script id="project-template" type="text/template">
    <div class="gallery-item">
        <figure><img class="project-preview" src="./img/separated/default-project-img-179x125.jpg" alt="<%= projectDescription %>"/>
            <figcaption class="project-info">
                <div class="project-source">
                    <a target="_blank" href="<%= projectUrl %>"><%= projectUrl %></a>
                </div>
                <div class="project-description"><%= projectName %> <%= projectDescription %>></div>
            </figcaption>
        </figure>
    </div>
</script>