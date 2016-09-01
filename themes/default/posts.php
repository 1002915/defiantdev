<?php theme_include('header'); ?>

<div class="landing">

    <div class="navigation">
      <nav>
      <img class="mobile-logo" src="img/logo.png">
        <ul class="nav-flex">
          <li><a href="index.php"><img class="nav-logo" src="img/logo.png"></a></li>
          <li ><a class="nav-button-small" href="index.php">NEWS</a></li>
          <li ><a class="nav-button-small" href="hof1.html">HAND OF FATE 1</a></li>
          <li ><a class="nav-button-small" href="hof2.html">HAND OF FATE 2</a></li>
          <li ><a class="nav-button-small" href="about.php">ABOUT</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>

<div class="full-width-gradient"></div>

<div class="container">
<div class="blog">
  <div class="blog-box-heading">Latest News</div> 
    <div class="blog-entry-container">
      <?php if(has_posts()): ?>
      <?php $i = 0; while(posts()): ?>
        <article>
          <div class="blog-title">
              <?php echo article_title(); ?>
          </div>
          <div class="blog-date">Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>">
            <?php echo relative_time(article_time()); ?></time>.
          </div>
          <div class="blog-content">
            <?php echo article_html(); ?>
          </div>
          <img class="bottom-blog-border" src="img/border.png">
        </article>
      <?php endwhile; ?>
        <ul class="items">
        <?php posts(); ?>
        
      <?php else: ?>
    <div class="wrap">
      <h1>No posts yet!</h1>
      <p>Looks like you have some writing to do!</p>
    </div>
  <?php endif; ?>

<div class="twitter-title">Latest Tweets
  <div class="twitter-container">
    <a class="twitter-timeline" data-width="400" data-height="700" data-theme="dark" data-link-color="#a02626" href="https://twitter.com/DefiantDev">Tweets by DefiantDev</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
</div>

</div>

<?php theme_include('footer'); ?>

</div>
</body>