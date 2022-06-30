<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Студія Максима Драгана</title>
    <link href="css/main.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <header>
      <div class="upheader">
        <div class="container">
          <div class="upheaderwrap">
            <div class="upheader__logo">
              <div class="upheader__logo-img">
                <img src="img/0002/Logo_header.png" alt="" />
              </div>
              <div class="upheader__logo-text">
                <div class="text__title1">
                  My Studio
                </div>
                <div class="text__title2">
                  Студія Максима Драгана
                </div>
              </div>
            </div>
            <div class="upheader__links">
              <a href="https://mpdragan.blogspot.com">mpdragan.blogspot.com</a>
              <br />
              <a href="https://behance.net/mpdragan">behance.net/mpdragan</a>
            </div>
            <div class="upheader__personaloffice">
              <div class="upheader__personaloffice_1">
<?php
    include('personaloffice/includes/db_connect.php');

    $count_1 = mysqli_query($connection, "SELECT * FROM user");

    $row = mysqli_fetch_array($count_1);
?>  
   <a href="personaloffice/page_personaloffice.php">
<?php  
    echo $row["login"];
?>
    </a><br>
                  
              </div>
              <a href="personaloffice/exit_personaloffice.php">Вийти із кабінету</a>
            </div>
          </div>
        </div>
      </div>

      <div class="wrap_menu">
        <div class="container">
          <div class="wrap__menu_up">
            <div class="menu_up">
              
              <ul>
                <li>
                  <a href="#">Головна</a>
                  <a href="#portfolio">Портфоліо</a>
                  <a href="#about">Про мене</a>
                  <a href="#advantage">Переваги</a>
                  <a href="#services">Послуги</a>
                  <a href="0003_shop/shop.php">Магазин</a>
                  <a href="0004_blog/blog.php">Блог</a>
                </li>
              </ul>
              
              
            </div>
          </div>
        </div>
      </div>

      <div class="first">
        <div class="container">
          <div class="wrap_first">
            <div class="wrap_first__title">Студія<br />Максима Драгана</div>

            <div class="wrap_first__discription">
              Вірність у всьому, а найголовніше у любові
            </div>
          </div>
        </div>
      </div>

      <div class="wrap_menu_down">
        <div class="container">
          <div class="menu_down">
            <ul>
              <li>
                <a href="#">Веб-розробка</a>
                <a href="#">Знімаємо кіно</a>
                <a href="#">Відеокурси</a>
                <a href="#">Виставка картин</a>
                <a href="#">Збірки віршів</a>
                <a href="#">Підручники та книги</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <section class="work" id="portfolio">
      <div class="container">
        <div class="wrap_work">
          <div class="work__block">
            <div class="wrap__title">
              <div class="work__block-title">
                Моя студія займається наступними галузями робіт (моє портфоліо):
              </div>
              <div class="about__box-logo">
                <img src="img/logo_portfolio.png" alt="" />
              </div>

              <div class="portfolio__box-more_1">
                <a href="0001_portfolio/portfolio.html">>></a>
              </div>
            </div>

            <div class="portfolio__box">
              <div class="wrap_row">
                <div class="wrap_row__box-work">
                  0001. Політика, державотворення<br />
                  Верховної Ради<br />
                  Кабінету Міністрів <br />
                </div>

                <div class="wrap_row__box-work">
                  0002. Правознавсто і юристпруденція<br />
                </div>

                <div class="wrap_row__box-work">
                  0003. Економіка та фінанси<br />
                  Сайти Економіки та фінансів<br />
                  Сайт інвестицій, акцій, диведентів <br />
                </div>

                <div class="wrap_row__box-work">
                  0004. Медицина<br />
                  Сайти медицини<br />
                  ПМД<br />
                  Здоров'я людини<br />
                </div>
              </div>

              <div class="wrap_row">
                <div class="wrap_row__box-work">
                  0005. Будівництво Сайти будівництва --- Будуємо дім --- Вибір,
                  купівля та ремонт квартири - столяра - плотника - каменяра -
                  пічника - сварщика - штукатура - плитовщика - електрика -
                  сантехніка - газовщика - тесляра - дизайну інтер'єра <br />
                </div>

                <div class="wrap_row__box-work">
                  0006. Кулінарія.<br />
                  Сайти кулінарії<br />
                  - Сайт приготування їжі та рецептів<br />
                </div>

                <div class="wrap_row__box-work">
                  0007. Ательє пошиву одягу та взуття Сайти Ательє пошиву одягу
                  та взуття Пошив одягу та взуття. - Дитячий, жіночий, чоловічий
                  одяг та взуття. - fashion-дизайн.<br />
                </div>

                <div class="wrap_row__box-work">
                  0008. Веб-розробка <br />

                  Веб-дизайн<br />
                  Верстка <br />
                  Фронтенд <br />
                  Бекенд <br />
                  Графический дизайн <br />
                </div>
              </div>

              <div class="wrap_row">
                <div class="wrap_row__box-work">
                  0009. Програмування <br />

                  Програми <br />
                  Ігри <br />

                  Scratch <br />
                </div>

                <div class="wrap_row__box-work">
                  0010. Електроніка та робототехніка<br />

                  Arduino <br />

                  Системи автоматичного керування<br />
                </div>

                <div class="wrap_row__box-work">
                  0011. Штучний інтелект. Нейронні мережі. Глибоке навчання<br />
                  Керування ДВЗ<br />
                </div>

                <div class="wrap_row__box-work">
                  0012. Живопис та малюнок <br />
                  Картини<br />
                  <a href="paint_gallery">Картинна галерея</a><br />
                </div>
              </div>

              <div class="wrap_row">
                <div class="wrap_row__box-work">
                  0013. Письменство.<br />
                  Підручники та книги.<br />
                  Сайти по поезії та прозі.<br />
                </div>
                <div class="wrap_row__box-work">
                  0014. Музика.<br />
                  Музична школа, філармонія, консерваторія.<br />
                  - написання віршів, пісень, музики.<br />
                  - співу.<br />
                  - танцю.<br />
                </div>
                <div class="wrap_row__box-work">
                  0015. Анімація та кіно.<br />
                  Студія анімації та кіно.<br />
                </div>
                <div class="wrap_row__box-work">
                  0016. Вело-, мото-, авто-, електроінструмент<br />
                </div>
              </div>

              <div class="wrap_row">
                <div class="wrap_row__box-work">
                  0017. Фотографія<br />
                  Сайт по фотографії.<br />
                  Фотографа<br />
                </div>
                <div class="wrap_row__box-work">0018. 3D.<br /></div>
                <div class="wrap_row__box-work">
                  0019. Сільске господарство (фермерство). Лісоводство.<br />
                  01. Біологія, зоологія, ботаніка. 02. Огородництво. 03.
                  Садоводство. 04. Бджільництво. 05. Твариництво. 06.
                  Птахівництво. 07. Вирощування пшениці, гречки, соняшника,
                  проса, овса, ячменю, ржи.
                </div>
                <div class="wrap_row__box-work">
                  0020. Охота та рибальство.<br />
                </div>
              </div>

              <div class="wrap_row">
                <div class="wrap_row__box-work">0021. Математика.<br /></div>
                <div class="wrap_row__box-work">0022. Фізика <br /></div>
                <div class="wrap_row__box-work">0023. Хімія.<br /></div>
                <div class="wrap_row__box-work">0024. Географія.<br /></div>
              </div>

              <div class="wrap_row">
                <div class="wrap_row__box-work">0025. Історія.<br /></div>
                <div class="wrap_row__box-work">0026. Іноземні мови <br /></div>
                <div class="wrap_row__box-work">0027. Православіє. <br /></div>
                <div class="wrap_row__box-work"><br /></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="container">
        <div class="wrap_about">
          <div class="about__block">
            <div class="about__block-title">
              Про мене
            </div>
            <div class="about__block-description">
              "Добрий день. <br />Мене зовуть Максим Драган.<br />
              Я початковий веб-розробник та художник.<br />
              На цьому сайті ви можете ознайомитися з моїм портфоліо,
              <br />послугами студії, відвідати та купити необхідне у магазині,
              та почитати блог, в якому ми пишемо про актуальні та цікаві речі."
            </div>

            <div class="about__block-resume">
              З моїм резюме ви можете ознайомитися за наступним посиланням:
              <a href="0002_resume/resume.html">Моє резюме.</a>
            </div>

            <div class="about__block-form">
              <div class="about__block-form_title">
                Написати мені
              </div>
              <form action="mail.php" method="post">
                <div class="about__block-form_box">
                  <input type="text" placeholder="Ім'я" /><br />
                  <input type="text" placeholder="Пошта" /><br />
                </div>
                <div class="about__block-form_textarea">
                  <textarea
                    name=""
                    id=""
                    cols="20"
                    rows="5"
                    placeholder="Ваше повідомлення..."
                  ></textarea>
                </div>
                <button>Написати мені</button>
              </form>
            </div>
          </div>
          <div class="about__box">
            <div class="about__box-logo">
              <img src="img/logo_i_you.jpg" alt="" />
            </div>
            <div class="about__box-title">
              П<br />р<br />о<br /><br />
              м<br />е<br />н<br />е
            </div>
            <div class="about__box-more">
              <a href="">>></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="advantage" id="advantage">
      <div class="container">
        <div class="wrap_advantage">
          <div class="advantage__box">
            <div class="advantage__box-logo">
              <img src="img/advantage/logo_relevance.png" alt="" />
            </div>
            <div class="advantage__box-title">
              П<br />е<br />р<br />е<br />в<br />а<br />г<br />и
            </div>
            <div class="advantage__box-more">
              <a href="advantage.html">>></a>
            </div>
          </div>

          <div class="advantage__block">
            <div class="advantage__block-title">
              <h2>Переваги</h2>
            </div>

            <div class="advantage__wrap">
              <div class="advantage__wrap-img">
                <img src="img/advantage/relevance.png" alt="" />
              </div>
              <div class="advantage__wrap-title">
                Актуальність.
              </div>
            </div>

            <div class="advantage__wrap">
              <div class="advantage__wrap-img">
                <img src="img/advantage/new.png" alt="" />
              </div>
              <div class="advantage__wrap-title">
                Трендовість. Новизна.
              </div>
            </div>

            <div class="advantage__wrap">
              <div class="advantage__wrap-img">
                <img src="img/advantage/quality.png" alt="" />
              </div>
              <div class="advantage__wrap-title">
                Якість.
              </div>
            </div>

            <div class="advantage__wrap">
              <div class="advantage__wrap-img">
                <img src="img/advantage/true.png" alt="" />
              </div>
              <div class="advantage__wrap-title">
                Вірність справі.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="services" id="services">
      <div class="container">
        <div class="wrap_services">
          <div class="services__block">
            <div class="services__block-title">
              Послуги
            </div>
            <div class="services__content">

              <div class="services__content-left">
                <div class="services__content-left_block">
                  <div class="services__content-left_block_number">1</div>
                  <div class="services__content-left_block_text">Веб-розробка.</div>
                </div>
              </div>

              <div class="services__content-right">
                Веб-дизайн. Верстка. <br>
                Фронтенд. Бекенд.<br>
              </div>

            </div>
            <div class="services__content">

              <div class="services__content-left">
                <div class="services__content-left_block">
                  <div class="services__content-left_block_number">2</div>
                  <div class="services__content-left_block_text">Графічний дизайн.</div>
                </div>
              </div>

              <div class="services__content-right">
                Логотипи. Іконки.<br>
                Ілюстрації. 3D-ілюстрації.<br>
              </div>

            </div>
            <div class="services__content">

              <div class="services__content-left">
                <div class="services__content-left_block">
                  <div class="services__content-left_block_number">3</div>
                  <div class="services__content-left_block_text">Написання картин.</div>
                </div>
              </div>

              <div class="services__content-right">
                Цифровий рисунок. <br>
              </div>

            </div>
            <div class="services__content">

              <div class="services__content-left">
                <div class="services__content-left_block">
                  <div class="services__content-left_block_number">4</div>
                  <div class="services__content-left_block_text">
                    Письменство. <br>
                    Копірайтинг. <br>
                  </div>
                </div>
              </div>

              <div class="services__content-right">
                Написання статей, <br>
                віршів, пісень, музики.<br>
              </div>

            </div>
            <div class="services__content">

              <div class="services__content-left">
                <div class="services__content-left_block">
                  <div class="services__content-left_block_number">5</div>
                  <div class="services__content-left_block_text">3D.</div>
                </div>
              </div>

              <div class="services__content-right">
                
              </div>

            </div>
            <div class="services__content">

              <div class="services__content-left">
                <div class="services__content-left_block">
                  <div class="services__content-left_block_number">6</div>
                  <div class="services__content-left_block_text">Зйомка відео.</div>
                </div>
              </div>

              <div class="services__content-right_button">
                <a href="services.html">Заказати послугу</a>
              </div>

            </div>
          </div>
          <div class="services__box">
            <div class="services__box-logo">
              <h2>П</h2>
            </div>
            <div class="services__box-title">
              П<br />о<br />с<br />л<br />у<br />г<br />и<br />
            </div>
            <div class="services__box-more">
              <a href="services.html">>></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="shop">
      <div class="container">
        <div class="wrap_shop">
          <div class="shop__box">
            <div class="shop__box-logo">
              <img src="img/logo_shop.png" alt="" />
            </div>
            <div class="shop__box-title">
              М<br />а<br />г<br />а<br />з<br />и<br />н<br />
            </div>
            <div class="shop__box-more">
              <a href="0003_shop/shop.html">>></a>
            </div>
          </div>

          <div class="shop__block">
            
            <div class="shop__header">
                <div class="shop__block-title">
                  Магазин
                </div>
                <div class="shop__header-center">
                  <div class="shop__header-center_1">
                    <ul>
                      <li><a href="">Розрахунок</a></li>
                      <li><a href="">Доставлення</a></li>
                      <li><a href="">Гарантія</a></li>
                      <li><a href="">Сервіс</a></li>
                    </ul>
                  </div>
                  <div class="shop__header-center_2">Купуйте найкраще та тільки якісне.</div>
                  <div class="shop__header-center_3">
                    <form action="">
                    <input type="text" class="shop__header-center_3-text" placeholder="Введіть слово пошуку">
                    <input type="submit" class="shop__header-center_3-submit" value="Шукати">
                  </form>
                  </div>
                </div>
                <div class="shop__header-cart">
                 <div class="shop__header-cart_title">Кошик</div>
                 <div class="shop__header-cart_img">
                   <a href="shop__cart-form.html"><img src="img/cart_1.png" alt=""></a>
                 </div>
                 <div class="shop__header-cart_number">
                    <span>1</span>
                 </div>
                 <div class="shop__header-cart_price">
                   1000 грн.
                 </div>
                 <div class="shop__header-cart_nameArticle">
                   Art
                 </div>  
                </div>
            </div>

            <div class="shop__content">
              <div class="shop__content-catalog">
                <div class="shop__content-catalog_title">
                  Каталог товарів
                </div>
                <div class="shop__content-catalog_ul">
                  <ul>
                    <li><a href="">Веб-розробка:</a>
                      <ul>
                        <li><a href=""> - Веб-дизайн:</a>
                            <ul>
                               <li><a href=""> -- PSD та Fig шаблони</a></li>
                            </ul>
                        </li>
                        <li><a href=""> - Верстка:</a>
                          <ul>
                               <li><a href=""> -- Html шаблони</a></li>
                          </ul>
                        </li>
                        <li><a href=""> - Графічний дизайн</a>
                            <ul>
                               <li><a href=""> -- Логотипи</a></li>
                               <li><a href=""> -- Іконки</a></li>
                               <li><a href=""> -- Ілюстрації</a></li>
                               <li><a href=""> -- Анімація</a></li>
                            </ul>
                        </li>
                        <li><a href=""> - Фронтенд. Бекенд</a></li>
                      </ul>
                    </li>
                    <li><a href="">3D</a></li>
                    <li><a href="">Картини</a></li>
                    <li><a href="">Проза. Вірші. Пісні.</a></li>
                    <li><a href="">Музика</a></li>
                    <li><a href="">Програми</a></li>
                    <li><a href="">Анімація та кіно</a></li>
                    <li><a href="">Курси та відеокурси</a></li>
                  </ul>

                </div>
              </div>
              <div class="shop__content-sliders">

                <div class="shop__content-sliders_1">

                  <div class="shop__content-sliders_1-title">
                    Нові надходження
                  </div>

                  <div class="shop__content-sliders_1-slider">
                    <div class="shop__content-sliders_1-slider__1">
                      <a href=""><img src="" alt=""><--</a>
                    </div>
                    <div class="shop__content-sliders_1-slider__2">
                      <div class="shop__content-sliders_1-slider__2-1"></div>
                      <div class="shop__content-sliders_1-slider__2-2"></div>
                    </div>
                    <div class="shop__content-sliders_1-slider__3">
                      <a href=""><img src="" alt="">--></a>
                    </div>
                  </div>

                  <div class="shop__content-sliders_1-circles">
                    <div class="shop__content-sliders_1-circles__1"><a href="">+</a></div>
                    <div class="shop__content-sliders_1-circles__2"><a href="">+</a></div>
                    <div class="shop__content-sliders_1-circles__3"><a href="">+</a></div>
                    <div class="shop__content-sliders_1-circles__4"><a href="">+</a></div>
                  </div>

                </div>

                <div class="shop__content-sliders_2">
                  <div class="shop__content-sliders_2-title">
                    Популярні товари
                  </div>

                  <div class="shop__content-sliders_2-slider">
                    <div class="shop__content-sliders_2-slider__1">
                      <a href=""><img src="" alt=""><--</a>
                    </div>
                    <div class="shop__content-sliders_2-slider__2">
                      <div class="shop__content-sliders_2-slider__2-1"></div>
                      <div class="shop__content-sliders_2-slider__2-2"></div>
                      <div class="shop__content-sliders_2-slider__2-3"></div>
                    </div>
                    <div class="shop__content-sliders_2-slider__3">
                      <a href=""><img src="" alt="">--></a>
                    </div>
                  </div>

                  <div class="shop__content-sliders_2-slider__down">
                    <div class="shop__content-sliders_2-slider__down-1"></div>
                    <div class="shop__content-sliders_2-slider__down-2"></div>
                    <div class="shop__content-sliders_2-slider__down-3"></div>
                    <div class="shop__content-sliders_2-slider__down-4"></div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="blog" id="blog">
      <div class="container">
        <div class="wrap_blog">
          <div class="blog__block">
            <div class="blog__block-title">
              Блог
            </div>
            <div class="blog__article_1">
               <div class="blog__article-img_1">
                <img src="" alt="">
               </div>
               <div class="blog__article-post_1">
                 <div class="blog__article-post_title_1">title</div>
                 <div class="blog__article-post_description_1">description</div>
                 <div class="blog__article-post_date_1">date</div>
                 <div class="blog__article-post_statistics_1">statistics</div>
                 <div class="blog__article-post_comments_1">comments</div>
                 <div class="blog__article-post_date_comments_1">date_comments</div>
               </div>
            </div>

            <div class="blog__article_2">
               
               <div class="blog__article-post_2">
                 <div class="blog__article-post_title_2">title</div>
                 <div class="blog__article-post_description_2">description</div>
                 <div class="blog__article-post_date_2">date</div>
                 <div class="blog__article-post_statistics_2">statistics</div>
                 <div class="blog__article-post_comments_2">comments</div>
                 <div class="blog__article-post_date_comments_2">date_comments</div>
               </div>

               <div class="blog__article-img_2">
                <img src="" alt="">
               </div>
            </div>

          </div>

          <div class="blog__box">
            <div class="blog__box-logo">
              <h2>Б</h2>
            </div>
            <div class="blog__box-title">
              Б<br />л<br />о<br />г<br />
            </div>
            <div class="blog__box-more">
              <a href="0004_blog/blog.html">>></a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer>
      <div class="container">
        <div class="wrap_footer">
          <div class="footer__logo">
            <div class="footer__logo-img">
              <img src="img/0002/Logo_header.png" alt="" />
            </div>
            <div class="footer__logo-text">
              <div class="text__title1">
                My Studio
              </div>
              <div class="text__title2">
                Студія Максима Драгана
              </div>
            </div>
          </div>

          <div class="footer__donate">
            <div class="footer__donate-title">
              Спонсорувати:
            </div>
            <div class="footer__donate-text">
              Якщо ви хочете підтримати сайт, пишіть за адресою<br />
              maximdragan1986@gmail.com<br />
            </div>
          </div>
        </div>
        <div class="footer__avtor">
          2021. Всі права сайта захищені авторським правом.
        </div>
      </div>
    </footer>
  </body>
</html>
