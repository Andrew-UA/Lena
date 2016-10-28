<?php
 foreach ($data as $article) {
?>
    <div class="article">
     <h2 class="article__title">
         <?php echo $article['title'] ?>
     </h2>
     <div class="article__date">
       <?php echo $article['date'] ?>
     </div>
     <div class="article__content article__content_preview">
       <div class="article__image">
         <img src="/images/content/111.png" alt="Picture">
       </div>
       <div class="article__text">
         <p><?php echo mb_substr($article['text'], 0, 450, 'UTF-8')?>
           <a class="article__link" href="/publications/article/id/<?php echo $article['id']?>/"> читати далі...</a>
         </p>
       </div>
     </div>
    </div>

<?php
}
?>
  <div class="article__navi">

      <?php $class = $pages['current_page'] == 1 ? 'article__move-link_disable' : ''; ?>
      <a class='article__move-link <?=$class; ?>' href="/publications/list/page/<?php echo $pages['current_page']-1?>">◄</a>

      <span class="article__page">
         <?php echo $pages['current_page'] ?> з <?php echo $pages['max_pages']?>
      </span>

      <?php $class = $pages['current_page'] == $pages['max_pages'] ? 'article__move-link_disable' : ''; ?>
      <a class='article__move-link <?=$class; ?>' href="/publications/list/page/<?php echo $pages['current_page']+1?>">►</a>

  </div>
