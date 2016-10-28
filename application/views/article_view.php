<?php $article = $data ?>
    <div class="article">
     <h2 class="article__title">
         <?php echo $article['title'] ?>
     </h2>
     <div class="article__date">
       <?php echo $article['date'] ?>
     </div>
     <div class="article__content">
       <div class="article__image">
         <img src="/images/content/111.png" alt="Picture">
       </div>
       <div class="article__text">
         <p><?php echo $article['text']?>
           <?php
              $referer = array_key_exists('HTTP_REFERER', $_SERVER) ? $_SERVER['HTTP_REFERER'] : '/';
           ?>
           <a class="article__link" href='<?php echo $referer; ?>' >Повернутись назад</a>
         </p>
       </div>
     </div>
    </div>
