<?php include("path.php"); 
 include 'app/database/db.php';

?>


<!doctype html>
<html lang="ar" >
  <head>
    <script src="https://kit.fontawesome.com/a6da8bb312.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
<link rel="stylesheet" href="assets/CSS/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>

  <?php include("app/include/header.php"); ?>

 <div class="container">
    <div class="row">
        <h2 class="slider-title">Топ посты</h2>
    </div>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/site/assets/images/carus1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                <h5><a href="#">First slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/site/assets/images/carus2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="#">First slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/site/assets/images/carus3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="#">First slide label</a></h5>
                </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
</div>
<div class="container">
<div class="content row">
   
<div class="main-content col-md-9 col-12">
<h2>Последние публикации</h2>
<div class="post row">
<div class="img col-12 col-md-4">
    <img src="/site/assets/images/logo_sait.png" alt="" class="img-thumbnail">
</div>
<div class="post_text col-12 col-md-8">
    <h3>
        <a href="#"> Прикольная статья на тему динамического сайта</a>
    </h3>
    <i class="far fa-user">Имя автора</i>
    <i class="far fa-calendar">Mar 11, 2019</i>
    <p class="preview-text">
        aekomgpaoergpoiaerignaenmrgaoenmgpoiaerigjnaeirg.
        apoeisdrgoeamrgpo[esaimorgmeao[primgpoaesirmgpo]].
    </p>
</div>
</div>
</div>
<div class="sidebar col-md-3 col-12">
    <div class="section search">
        <h3>Поиск</h3>
        <form action="/" method="post">
<input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово">
        </form>
    </div>   

<div class="section topics">
    <h3>Категории</h3>
    <ul>
<li><a href="#">Poems</a></li>
<li><a href="#">Quotes</a></li>
<li><a href="#">Fiction</a></li>
<li><a href="#">Biography</a></li>
<li><a href="#">Motivation</a></li>
<li><a href="#">Inspiration</a></li>
<li><a href="#">Life Lessons</a></li>
    </ul>
</div>



</div><div class="main-content col-md-9 col-12">
    <div class="post row">
    <div class="img col-12 col-md-4">
        <img src="/site/assets/images/logo_sait.png" alt="" class="img-thumbnail">
    </div>
    <div class="post_text col-12 col-md-8">
        <h3>
            <a href="#"> Прикольная статья на тему динамического сайта</a>
        </h3>
        <i class="far fa-user">Имя автора</i>
        <i class="far fa-calendar">Mar 11, 2019</i>
        <p class="preview-text">
            aekomgpaoergpoiaerignaenmrgaoenmgpoiaerigjnaeirg.
            apoeisdrgoeamrgpo[esaimorgmeao[primgpoaesirmgpo]].
        </p>
    </div>
    </div>
    </div>
</div>
</div>



<?php include("app/include/footer.php"); ?>








 <!-- Option 1: Bootstrap Bundle with Popper -->
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
  </body>
</html>