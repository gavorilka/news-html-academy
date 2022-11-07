<?php
    require("php/header.php");
   
    if(empty($_GET['news']) || !is_numeric($_GET['news'])){
        die;
    }
    // var_dump($_GET['news']);
    $newsId = $_GET['news'];
    $oneNews = $con->prepare('SELECT * FROM `news` WHERE `id` = :id');
    $oneNews->execute(['id' => $newsId]);
    $news = $oneNews->fetch(PDO::FETCH_OBJ);
    //var_dump($news);
    if(!$news){
        echo "такой новости нет";
        die;
    }
?>

<section class="list-tiles-view">
          <article class="new-block">
            <img src="<?=$news->imgUrl?>" alt="Картинка померла">
            <div class="new-block-text">
              <h3><?=$news->title?></h3>
              <p><?=$news->text?></p>
              <time datetime="<?=$news->date?>"><?=$news->date?></time>
            </div>
          </article>
</section>
<?php
  require("php/footer.php");
?>
