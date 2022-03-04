<div class = "question wrapper-main">
        <div class = "question__info">
            <img src = "<?php bloginfo('template_url'); ?>/assets/images/questions.png" alt = "">
            <p> Остались вопросы?<br>
                Заполните форму<br>
                и наши менеджеры<br>
                свяжутся с Вами в ближайшее время </p>
        </div>
            <form class = "question__form" name = "questionForm" id = "questionForm" method = "POST" action = "<?php bloginfo('template_url'); ?>/form_question.php">
                <div class = "question__form__item"><label for = "qstName"> Ваше имя* </label> <input type = "text" id = "qstName" name = "qstName"></div>            
                <div class = "question__form__item"><label for = "qstTel"> Ваш телефон* </label> <input type = "text" id = "qstTel" name = "qstTel"></div>         
                <div class = "question__form__item"><label for = "qstComment"> Комментарий </label> <textarea type = "text" id = "qstComment" name = "qstComment"></textarea></div>            
                <div class = "question__form__item"><button class = "question__form__item--btn"> ОТПРАВИТЬ </button></div>
                <div class = "question__form__item"><p class = "question__form__item--text"> Нажимая кнопку “ОТПРАВИТЬ” Вы даете согласие
                    на обработку персональных данных и соглашаетесь
                    с <a class = "policy" href = "#">политикой конфиденциальности</a> </p>
                </div>
            </form>
    </div>

    <div class = "footer">
        <div class = "wrapper-main">
            <div class = "footer__items">
                <div class = "header__contacts footer__items__item">
                    <?php get_template_part( 'template-parts/contacts' ); ?>
                </div> 
                <div class = "footer__items__item">
                <?php get_template_part( 'template-parts/navigation' ); ?>
                </div> 
            </div>

            <div class = "footer__items">
                <div class = " footer__items__item copyright">
                    <img src = "<?php bloginfo('template_url'); ?>/assets/images/pict_copyright.png"> 2020 Все права защищены. Создание сайта студия <span class = "studioname">WhyNot?</span>
                </div>
                <div class = " footer__items__item map">
                    <img src = "<?php bloginfo('template_url'); ?>/assets/images/footer_map.png"> Работаем по всей России 
                </div>
            </div>
        </div>     
    </div>
<? wp_footer(); ?>
</body>
</html>