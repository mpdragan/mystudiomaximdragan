<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Блог [статті] студії Драгана Максима</title>
    <link href="../css/main.css" rel="stylesheet" />
    <link href="css/blog.css" rel="stylesheet" />
  </head>
  <body>
<?php 
       require "includes/config.php";
?>
    <header>
      <div class="header__menu">
        <div class="container">
          <div class="header__menu-wrap">
            <div class="header__menu-wrap_nav">
              <ul>
                <li><a href="">Веб-розробка</a></li>
                <li><a href="">Програмування</a></li>
                <li><a href="">3D</a></li>
                <li><a href="">Живопис</a></li>
                <li><a href="">Будівництво</a></li>
              </ul>
              
            </div>
            <div>
                <a href="admin_page/admin_page.html">Адміністраторна сторінка</a>
            </div>
          </div>
        </div>
      </div>

      <div class="header__title">
        <div class="container">
          <div class="header__title-wrap">
            <div class="header__title-logo">Б</div>
            <div class="header__title-title">
              Блог [статті] студії <br />
              Драгана Максима
            </div>
            <div class="header__title-description"></div>
          </div>
        </div>
      </div>
    </header>

    <section class="content" id="content">
      <div class="container">
        <div class="wrap__content">
          <div class="blog__block_content">
            <div class="blog__article_1">
              <div class="blog__article-img_1">
                <img src="" alt="" />
              </div>
              <div class="blog__article-post_1">
<?php
                  //$articles = mysqli_query($connection,"SELECT * FROM articles_blog");
        ?>
<?php
           //while( ($article=mysqli_fetch_assoc($articles)) ){
             //$article=mysqli_fetch_assoc($articles);
             //$article=mysqli_fetch_assoc($articles);
             //$article=mysqli_fetch_assoc($articles);
            // echo $article['id'];
            // echo $article['id'];
            // echo $article['id'];
        ?>
                  
                  <?php 
                  //$article=mysqli_fetch_assoc($articles);
                  //$article=mysqli_fetch_assoc($articles);
                  //$article=mysqli_fetch_assoc($articles);
                  
                  $count_id = 3;
                  $articles = mysqli_query($connection,"SELECT * FROM articles_blog");
                  while( ($article=mysqli_fetch_assoc($articles)) ){
                    if($article['id']==$count_id){
                      ?>
                      <div class="title__number">
                        <div class="title__number-h2">
                           <h2>
                      <?php
                      echo $article['title'];
                      ?>
                          </h2>
                          </div>
                          <div class="title__number-h6">
                           <h6>
                      <?php
                      echo " [Стаття ".$article['id']."]";
                      ?>
                          </h6>
                          </div>
                      </div>
                      <h5>
                      <?php
                      echo $article['categories'];
                      ?>
                      </h5>
                      <p>
                      <?php
                      echo $article['description'];
                      ?>
                      </p>
                      <p>
                      <?php
                      echo $article['date'];
                      ?>
                      </p>
                      <p>
                      <?php
                      echo $article['statistics'];
                      ?>
                      </p>
                      <?php
                    }
                  }
                  ?>

                <div class="blog__article-post_comments_1">comments</div>
                <div class="blog__article-post_date_comments_1">
                  date_comments
                </div>
                <br>
                <div class="blog__article_1_more"><a href="">Детальніше</a></div>
              </div>
              
            </div>

            <div class="blog__article_2">
              <div class="blog__article-post_2">

                <h2>
                  <?php
                  //$article2=mysqli_fetch_assoc($articles);
                  //$article2=mysqli_fetch_assoc($articles); 
                  $articles = mysqli_query($connection,"SELECT * FROM articles_blog");
                  while( ($article=mysqli_fetch_assoc($articles)) ){
                    if($article['id']==$count_id-1){
                     ?>
                      <div class="title__number">
                        <div class="title__number-h2">
                           <h2>
                      <?php
                      echo $article['title'];
                      ?>
                          </h2>
                          </div>
                          <div class="title__number-h6">
                           <h6>
                      <?php
                      echo " [Стаття ".$article['id']."]";
                      ?>
                          </h6>
                          </div>
                      </div>
                      <h5>
                      <?php
                      echo $article['categories'];
                      ?>
                      </h5>
                      <p>
                      <?php
                      echo $article['description'];
                      ?>
                      </p>
                      <p>
                      <?php
                      echo $article['date'];
                      ?>
                      </p>
                      <p>
                      <?php
                      echo $article['statistics'];
                      ?>
                      </p>
                      <?php
                    }
                  }
                  ?>

                <div class="blog__article-post_comments_2">comments</div>
                <div class="blog__article-post_date_comments_2">
                  date_comments
                </div>
                <br>
                <div class="blog__article_1_more"><a href="">Детальніше</a></div>
              </div>

              

              <div class="blog__article-img_2">
                <img src="" alt="" />
              </div>
            </div>

            <div class="blog__article_1">
              <div class="blog__article-img_1">
                <img src="" alt="" />
              </div>
              <div class="blog__article-post_1">

                <h2>
                  <?php 
                 // $article3=mysqli_fetch_assoc($articles);
             
                  $articles = mysqli_query($connection,"SELECT * FROM articles_blog");
                  while( ($article=mysqli_fetch_assoc($articles)) ){
                    if($article['id']==$count_id-2){
                     ?>
                      <div class="title__number">
                        <div class="title__number-h2">
                           <h2>
                      <?php
                      echo $article['title'];
                      ?>
                          </h2>
                          </div>
                          <div class="title__number-h6">
                           <h6>
                      <?php
                      echo " [Стаття ".$article['id']."]";
                      ?>
                          </h6>
                          </div>
                      </div>
                      <h5>
                      <?php
                      echo $article['categories'];
                      ?>
                      </h5>
                      <p>
                      <?php
                      echo $article['description'];
                      ?>
                      </p>
                      <p>
                      <?php
                      echo $article['date'];
                      ?>
                      </p>
                      <p>
                      <?php
                      echo $article['statistics'];
                      ?>
                      </p>
                      <?php
                    }
                  }
                  ?>

                
                <div class="blog__article-post_comments_1">comments</div>
                <div class="blog__article-post_date_comments_1">
                  date_comments
                </div>
                <br>
                <div class="blog__article_1_more"><a href="">Детальніше</a></div>
              </div>
            </div>

<?php
           //}
        ?>

            <div class="blog__posts">

              <div class="blog__posts_1">
                <div class="blog__posts-img_1">
                  <img src="" alt="" />
                  <div class="blog__posts-post_1">
                    <a href="">
                       <div class="blog__posts-post_title_1">title</div>
                    
                       <div class="blog__posts-post_date_1">date</div>
                       <div class="blog__posts-post_statistics_1">statistics</div>
                    </a>
                  </div>
                </div>
              </div>

              <div class="blog__posts_1">
                <div class="blog__posts-img_1">
                  <img src="" alt="" />
                  <div class="blog__posts-post_1">
                    <a href="">
                       <div class="blog__posts-post_title_1">title</div>
                    
                       <div class="blog__posts-post_date_1">date</div>
                       <div class="blog__posts-post_statistics_1">statistics</div>
                    </a>
                  </div>
                </div>
              </div>

              <div class="blog__posts_1">
                <div class="blog__posts-img_1">
                  <img src="" alt="" />
                  <div class="blog__posts-post_1">
                    <a href="">
                       <div class="blog__posts-post_title_1">title</div>
                    
                       <div class="blog__posts-post_date_1">date</div>
                       <div class="blog__posts-post_statistics_1">statistics</div>
                    </a>
                  </div>
                </div>
              </div>

            </div>



          </div>

          <div class="aside__content">
            Пошук <br>
            Годинник <br>
            Календар <br>

            <h3>Розділи</h3>
            0001. Політика, державотворення<br />
            0002. Правознавсто і юристпруденція<br />
            0003. Економіка та фінанси<br />
            0004. Медицина<br />
            0005. Будівництво<br />
            0006. Кулінарія<br />
            0007. Ательє пошиву одягу та взуття<br />
            0008. Веб-розробка <br />
            0009. Програмування <br />
            0010. Електроніка та робототехніка<br />
            0011. Штучний інтелект. Нейронні мережі. Глибоке навчання<br />
            0012. Живопис та малюнок <br />
            0013. Письменство<br />
            0014. Музика<br />
            0015. Анімація та кіно<br />
            0016. Вело-, мото-, авто-, електроінструмент<br />
            0017. Фотографія<br />
            0018. 3D<br />
            0019. Сільске господарство (фермерство)<br />
            0020. Охота та рибальство<br />
            0021. Математика<br />
            0022. Фізика <br />
            0023. Хімія<br />
            0024. Географія<br />
            0025. Історія<br />
            0026. Іноземні мови <br />
            0027. Православіє <br />

            <div>
            <h3>Категорії (Ярлики) <br></h3>

<?php
           $categories = mysqli_query($connection,"SELECT * FROM articles_categories_blog");
        ?>
<?php
           while( ($cat=mysqli_fetch_assoc($categories)) ){
        ?>
        <li> <a href="#"><?php echo $cat['title'] ?> </a></li>
<?php
           }
        ?>
           </div>

           <h3>Архів<br></h3>
           Коментарії<br>

          </div>
        </div>
      </div>
    </section>

    <section class="pagination">
      <div class="container">
          <a href=""><<</a> 
          Пагінація
          <a href="">>></a>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="footer__menu-wrap">
          <div class="footer__menu-wrap-logo">
            <div class="footer__menu-wrap-logo_word">Б</div>
            <div class="footer__menu-wrap-logo_title">
              Блог студії <br />
              Максима Драгана
            </div>
          </div>
          <div class="footer__menu-wrap_menu">
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
