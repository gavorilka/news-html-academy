
<?php
  require("php/header.php");
?>
    <main class="index-main">
      <div class="container">
        <h1 class="visually-hidden">Новостной портал FlashNews!</h1>
        <div class="news-view">
          <button class="row-view view-checked" type="button">Список</button>
          <button class="tile-view" type="button">Плитка</button>
        </div>
        <section class="news-list">
          <h2 class="visually-hidden">Все новости</h2>
          <?php foreach ($posts as $post) {
            //var_dump($post);
          ?>
          <article class="new-block">
            <img src="<?php echo $post['imgUrl']?>" alt="Картинка померла">
            <div class="new-block-text">
              <h3><a href="single.php?news=<?=$post['id']?>"><?=$post['title']?></a></h3>
              <p><?=$post['text']?></p>
              <time datetime="<?=$post['date']?>"><?=$post['date']?></time>
            </div>
          </article>
          <?php } ?>
          <!-- <article class="new-block">
            <img src="img/new-graph.jpg" alt="Новая библиотека">
            <div class="new-block-text">
              <h3>Новая библиотека для создания графиков</h3>
              <p>Теперь вы можете создать дашборд за считанные секунды.</p>
              <time datetime="2019-10-16">16 октября 2019</time>
            </div>
          </article>
          <article class="new-block">
            <img src="img/new-robot.jpg" alt="Что там у роботов?">
            <div class="new-block-text">
              <h3>Что там у роботов?</h3>
              <p>В робототехнике происходит много интересного, эта новость могла бы быть об этом, но нет.</p>
              <time datetime="2019-10-15">15 октября 2019</time>
            </div>
          </article>
          <article class="new-block">
            <img src="img/new-loop.jpg" alt="Бесконечные циклы">
            <div class="new-block-text">
              <h3>Бесконечные циклы: пора завязывать с этим</h3>
              <p>Британские учёные выяснили, что работа ПО напрямую зависит от наличия в нём бесконечных циклов.</p>
              <time datetime="2019-10-14">14 октября 2019</time>
            </div>
          </article>
          <article class="new-block">
            <img src="img/new-drone.jpg" alt="Кадры с дрона">
            <div class="new-block-text">
              <h3>ШОК! Секретные кадры с дрона-разведчика</h3>
              <p>Никто не ожидал, что за стенами происходит ТАКОЕ…</p>
              <time datetime="2019-10-13">13 октября 2019</time>
            </div>
          </article>
          <article class="new-block">
            <img src="img/new-research.jpg" alt="Новость 5">
            <div class="new-block-text">
              <h3>Из мира психологии</h3>
              <p>Исследования показывают, что если делать больше, то можно сделать больше.</p>
              <time datetime="2019-10-12">12 октября 2019</time>
            </div>
          </article>
          <article class="new-block">
            <img src="img/new-cat.jpg" alt="Новость 6">
            <div class="new-block-text">
              <h3>Внезапно</h3>
              <p>Оказывается, чтобы начать учить JavaScript, необязательно быть котом.</p>
              <time datetime="2019-10-11">11 октября 2019</time>
            </div>
          </article> -->
        </section>
      </div>
    </main>

    <aside class="cookies-agreement">
      <p>Пока вы находитесь на нашем сайте и читаете новости, мы используем ваши кукис. Очень надеемся, что вы не против.</p>
      <button class="button" type="button">Окей, продолжайте</button>
    </aside>

<?php
  require("php/footer.php");
?>
