<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sevntest
 */

get_header();
?>

<main>
            <section>
                <h1 class="title title-blue">Міжнародні рекомендації</h1>
                <div class="rec-list">
                    <img src="img/logo_fda.png" width="171" height="69" alt="FDA">
                    <img src="img/logo_ecdc.png" width="117" height="104" alt="ECDC">
                    <img src="img/logo_who.png" width="134" height="134" alt="WHO">
                </div>
            </section>
            <section class="test">
                <h1 class="title title-blue">Оберіть ваш тест</h1>
                <div class="row">
                    <div class="description">
                        <h3>Експрес-тест для визначення антигену SARS-CoV-2</h3>
                        <div class="test-list">
                            <div class="test-list-item">
                                <p class="section-text">Якісне визначення in vitro антигенів SARS-CoV-2 у зразках
                                    мазка <strong>з горла та носа</strong> </p>
                            </div>
                            <div class="test-list-item">
                                <p class="section-text">Цей тест використовує метод сендвіч імунодетекції</p>
                            </div>
                            <div class="test-list-item">
                                <p class="section-text">Антигени у зразку зв’язуються з кон’югатом колоїдного золота
                                    з детекторними антитілами та утворюються комплекси антиген-антитіло</p>
                            </div>
                        </div>
                    </div>
                    <div class="image">
                        <img src="img/test-banner.png" alt="Test SARS-CoV-2">
                    </div>
                </div>
            </section>
            <section class="feedback row">
                <div class="image">
                    <img src="img/coro-banner-image.png" alt="Covid-19 Banner">
                </div>
                <div class="description">
                    <h1 class="title">Відгуки покупців</h1>
                    <div class="feedback-list">
                        <div class="feedback-list-item">
                            <p class="feedback-text">Тест допоміг швидко визначити наявність вірусу в моєї сім’ї. Без лікарів та черг в поліклініках.</p>
                            <p class="feedback-author">- Віктор Оніщенко</p>
                        </div>
                        <ol class="feedback-list-counter">
                            <li></li>
                            <li class="active"></li>
                            <li></li>
                            <li></li>
                        </ol>
                    </div>
                </div>
            </section>
        </main><!-- #main -->

<?php
get_footer();
