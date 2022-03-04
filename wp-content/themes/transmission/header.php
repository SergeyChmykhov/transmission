<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= wp_get_document_title(); ?></title>
    <? wp_head(); ?>
</head>
<body>
    <div class = "header">
        <div class = "wrapper-main">
            <div class = "header__contacts">
                <?php get_template_part( 'template-parts/contacts' ); ?>
            </div>
            <div class = "header__logonav">
                <div class = "logo"><a href = "/"><img src = "<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt = "логотип"></a></div>
                <?php get_template_part( 'template-parts/navigation' ); ?>
            </div>
            <h1>Автомобильные грузоперевозки по России</h1>
            <div class = "header__services">
                <div class = "services__list">
                    <ul>
                        <li>- Низкие тарифы </li>
                        <li>- Оптимальный маршрут доставки </li>
                        <li>- Индивидуальный подход </li>
                        <li>- Своевременная доставка </li>
                        <li>- Персональный менеджер </li>
                        <li>- Прямая работа с перевозчиком </li>
                        <li>- Документальное сопровождение сделки </li>
                    </ul>
                </div>
                <form name = "serviceForm" id = "serviceForm" method = "POST" action = "<?php bloginfo('template_url'); ?>/form_service_calc.php">
                    <div class = "services__form">
                        <h2> Узнать стоимость перевозки груза</h2>
                        <h3> Доставка грузов от 300 кг</h3> 
                        
                        <div class = "services__form__in"><label for = "clcFrom"> Откуда </label> <input type = "text" id = "clcFrom" name = "clcFrom"></div>            
                        <div class = "services__form__in"><label for = "clcWg"> Вес </label> <input type = "text" id = "clcWg" name = "clcWg"></div>         
                        <div class = "services__form__in"><label for = "clcTo"> Куда </label> <input type = "text" id = "clcTo" name = "clcTo"></div>            
                        <div class = "services__form__in"><label for = "clcVol"> Объём </label> <input type = "text" id = "clcVol" name = "clcVol"></div>            
                        <div class = "services__form__in"><label for = "clcName"> Ваше<br>имя </label> <input type = "text" id = "clcName" name = "clcName"></div>            
                        <div class = "services__form__in"><label for = "clcTel"> Ваш<br>телефон </label> <input type = "text" id = "clcTel" name = "clcTel"></div>                                    
                        <button type = "submit"> Узнать стоимость </button>
                    </div>
                </form>
            </div>
        </div>    
    </div>