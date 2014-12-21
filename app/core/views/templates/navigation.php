<aside class="left-sidebar screen-mob-min-hide">
    <article class="navigation-wrapper">
        <nav>
            <ul>
                <li class="display-table parent-size navigation-el <?php if ($view == 'about-me') { ?> active <?php } ?>">
                    <a class="display-table-cell vertical-align-middle navigation-link" href="<?= DOMAIN_URL ?>about-me">
                        Обо мне
                    </a>
                </li>
                <li class="display-table parent-size navigation-el <?php if ($view == 'my-works') { ?> active <?php } ?>">
                    <a class="display-table-cell vertical-align-middle navigation-link" href="<?= DOMAIN_URL ?>my-works">
                        Мои работы
                    </a>
                </li>
                <li class="display-table parent-size navigation-el <?php if ($view == 'contacts') { ?> active <?php } ?>">
                    <a class="display-table-cell vertical-align-middle navigation-link" href="<?= DOMAIN_URL ?>contacts">
                        Связаться со мной
                    </a>
                </li>
            </ul>
        </nav>
    </article>
    <article class="contacts-wrapper">
        <div class="contacts-title">Контакты</div>
        <ul>
            <li class="contacts-el mail-el">
                <div class="display-table parent-size">
                    <div class="display-table-cell vertical-align-middle contact-icon-cell">
                        <a class="contact-link" href="mailto:pochta@mail.ru">
                            <span class="contact-icon mail-icon">&nbsp;</span>
                        </a>
                    </div>
                    <div class="display-table-cell vertical-align-middle">
                        <a class="contact-link" href="mailto:pochta@mail.ru">
                            <script type="text/javascript">document.write('dosandkv@gmail.com')</script>
                        </a>
                    </div>
                </div>
            </li>
            <li class="contacts-el phone-el">
                <div class="display-table parent-size">
                    <div class="display-table-cell vertical-align-middle contact-icon-cell">
                        <a class="contact-link" href="tel:+79812342323">
                            <span class="contact-icon phone-icon">&nbsp;</span>
                        </a>
                    </div>
                    <div class="display-table-cell vertical-align-middle">
                        <a class="contact-link" href="tel:+79812342323">
                            <script type="text/javascript">document.write('+79812342323')</script>
                        </a>
                    </div>
                </div>
            </li>
            <li class="contacts-el skype-el">
                <div class="display-table parent-size">
                    <div class="display-table-cell vertical-align-middle contact-icon-cell">
                        <a class="contact-link" href="skype:dosandk?call">
                            <span class="contact-icon skype-icon">&nbsp;</span>
                        </a>
                    </div>
                    <div class="display-table-cell vertical-align-middle">
                        <a class="contact-link" href="skype:dosandk?call">dosandk</a>
                    </div>
                </div>
            </li>
        </ul>
    </article>
</aside>