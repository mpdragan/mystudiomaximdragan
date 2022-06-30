<?php
  echo "Магазин студії Максима Драгана";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Інтернет-магазин майстерні та студії Максима Драгана</title>
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style_1.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="container">
        <div class="shop__header">
            <div class="shop__header-logo">
                <div class="shop__header-img">
                   <img src="../img/logo_shop.png" alt="" />
                </div>
                 <div class="shop__header-title">
                   Магазин студії <br> Максима Драгана
                 </div>
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
            <div class="shop__header-center_2">
              Купуйте найкраще та тільки якісне.
            </div>
            <div class="shop__header-center_3">
              <form action="">
                <input
                  type="text"
                  class="shop__header-center_3-text"
                  placeholder="Введіть слово пошуку"
                />
                <input
                  type="submit"
                  class="shop__header-center_3-submit"
                  value="Шукати"
                />
              </form>
            </div>
          </div>
          <div class="shop__header-cart">
            <div class="shop__header-cart_title">Кошик</div>
            <div class="shop__header-cart_img">
              <a href="shop__cart-form.html"
                ><img src="../img/cart_1.png" alt=""
              /></a>
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
      </div>
    </header>

    <section class="shop">
      <div class="container">
        <div class="wrap_shop">
          <div class="shop__block1">
            <div class="shop__content">
              <div class="shop__content-catalog">
                <div class="shop__content-catalog_title">
                  Каталог товарів
                </div>
                <div class="shop__content-catalog_ul">
                  <ul>
                    <li>
                      <a href="">1. Веб-розробка:</a>
                      <ul>
                        <li>
                          <a href=""> - Веб-дизайн:</a>
                          <ul>
                            <li><a href=""> -- PSD та Fig шаблони</a></li>
                          </ul>
                        </li>
                        <li>
                          <a href=""> - Верстка:</a>
                          <ul>
                            <li><a href=""> -- Html шаблони</a></li>
                          </ul>
                        </li>
                        <li>
                          <a href=""> - Графічний дизайн</a>
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
                    <li><a href="">2. Програмування. Програми</a></li>
                    <li><a href="">3. Штучний інтеллект</a></li>
                    <li><a href="">4. Електроніка та робототехніка</a></li>
                    <li><a href="">5. 3D моделювання</a></li>
                    <li><a href="">6. Картини</a></li>
                    <li><a href="">7. Проза. Вірші</a></li>
                    <li><a href="">8. Пісні. Музика</a></li>
                    <li><a href="">9. Будівництво</a></li>
                    <li><a href="">10. Кулінарія</a></li>
                    <li><a href="">11. Пошив одягу та взуття</a></li>
                    <li><a href="">12. Сільськогосподарські товари</a></li>
                    <li><a href="">13. Вело-, мото-, авто-</a></li>
                    <li><a href="">14. Скульптура</a></li>
                    <li><a href="">15. Плетіння із лози</a></li>
                    <li><a href="">16. Гончарство</a></li>
                    <li><a href="">17. Зварювання. Вироби із металу</a></li>
                    <li><a href="">18. Охота та рибальство</a></li>
                    <li><a href="">19. Фотографія</a></li>
                    <li><a href="">20. Анімація та кіно</a></li>
                    <li><a href="">21. Курси та відеокурси</a></li>
                    <li><a href="">22. Підручники та книги</a></li>
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
                      <a href=""><img src="" alt="" /><--</a>
                    </div>
                    <div class="shop__content-sliders_1-slider__2">
                      <div class="shop__content-sliders_1-slider__2-1"></div>
                      <div class="shop__content-sliders_1-slider__2-2"></div>
                    </div>
                    <div class="shop__content-sliders_1-slider__3">
                      <a href=""><img src="" alt="" />--></a>
                    </div>
                  </div>

                  <div class="shop__content-sliders_1-circles">
                    <div class="shop__content-sliders_1-circles__1">
                      <a href="">+</a>
                    </div>
                    <div class="shop__content-sliders_1-circles__2">
                      <a href="">+</a>
                    </div>
                    <div class="shop__content-sliders_1-circles__3">
                      <a href="">+</a>
                    </div>
                    <div class="shop__content-sliders_1-circles__4">
                      <a href="">+</a>
                    </div>
                  </div>
                </div>

                <div class="shop__content-sliders_2">
                  <div class="shop__content-sliders_2-title">
                    Популярні товари
                  </div>

                  <div class="shop__content-sliders_2-slider">
                    <div class="shop__content-sliders_2-slider__1">
                      <a href=""><img src="" alt="" /><--</a>
                    </div>
                    <div class="shop__content-sliders_2-slider__2">
                      <div class="shop__content-sliders_2-slider__2-1"></div>
                      <div class="shop__content-sliders_2-slider__2-2"></div>
                      <div class="shop__content-sliders_2-slider__2-3"></div>
                    </div>
                    <div class="shop__content-sliders_2-slider__3">
                      <a href=""><img src="" alt="" />--></a>
                    </div>
                  </div>

                  <div class="shop__content-sliders_2-slider__down">
                    <div class="shop__content-sliders_2-slider__down-1"><a href=""></a></div>
                    <div class="shop__content-sliders_2-slider__down-2"><a href=""></a></div>
                    <div class="shop__content-sliders_2-slider__down-3"><a href=""></a></div>
                    <div class="shop__content-sliders_2-slider__down-4"><a href=""></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="catalog">
        <div class="container">
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">1. Веб-розробка</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>

            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">2. Програмування. Програми</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">3. Штучний інтеллект</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">4. Електроніка та робототехніка</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">5. 3D моделювання</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">6. Картини</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">7. Проза. Вірші</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">8. Пісні. Музика</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">9. Будівництво</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">10. Кулінарія</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">11. Пошив одягу та взуття</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">12. Сільськогосподарські товари</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">13. Вело-, мото-, авто-</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">14. Скульптура</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">15. Плетіння із лози</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">16. Гончарство</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">17. Зварювання. Вироби із металу</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">18. Охота та рибальство</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">19. Фотографія</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">20. Анімація та кіно</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">21. Курси та відеокурси</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
            <div class="catalog__wrap">
                <div class="catalog__wrap-title"><a href="">22. Підручники та книги</a> </div>
                <div class="catalog__wrap-articles">
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                    <div class="catalog__wrap-articles_article"></div>
                </div>
            </div>
        </div>
    </section>

    <footer>
      <div class="container">
      <div class="footer">
          <div>2021. Всі права захищені.</div>
          <div class="footer__crm_shop"><a href="../0005_crm_internet_magazun/admin/index.html">CRM магазину</a></div>
          <div class="footer__crm_shop-menu">
            <ul>
              <li><a href="../index.html">Головна</a></li>
              <li><a href="">Портфоліо</a></li>
              <li><a href="">Про мене</a></li>
              <li><a href="">Переваги</a></li>
              <li><a href="">Послуги</a></li>
              <li><a href="0003_shop/shop.php">Магазин</a></li>
              <li><a href="0004_blog/blog.php">Блог</a></li>
            </ul>
          </div>
      </div>
      </div>
    </footer>
  </body>
</html>
