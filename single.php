<?php include("path.php"); ?>
<!doctype html>
<html lang="ar" dir="rtl">
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
<div class="content row">
   
<div class="main-content col-md-9 col-12">
<h2>Заголовок</h2>
<div class="single_post row">
<div class="img col-12">
    <img src="/site/assets/images/carus1.jpg" alt="" class="img-thumbnail">
</div>
<div class="info">
    <i class="far fa-user">Имя автора</i>
    <i class="far fa-calendar">Mar 11, 2019</i>
</div>
<div class="single_post_text col-12">
    <h3>Заголовок 3-его уровня</h3>
    <p>Lorem ipsum dolor sit <a href="#">amet</a>, consectetur adipiscing elit. Nullam nec velit nec urna tempus elementum. Vivamus auctor, odio vitae tincidunt luctus, sem purus sodales ligula, id ultricies risus erat sit amet massa. In in convallis nulla. Suspendisse potenti. Curabitur porttitor urna ut ligula hendrerit, eget efficitur purus cursus. Integer ornare magna vel ultricies dapibus. </p>
    
    <p>Quisque nec lacinia neque. Morbi venenatis convallis risus. In hac habitasse platea dictumst. Integer nec posuere erat. Cras ut nibh venenatis, ultricies justo ac, tristique purus. Nam ac nunc efficitur, aliquet enim et, tincidunt diam. Donec nec mi in ante convallis congue. Phasellus fermentum quam eget nunc vestibulum, vel malesuada turpis accumsan. </p>
    
    <p>Aliquam erat volutpat. Suspendisse rutrum velit justo, id tempus tortor elementum eu. Maecenas efficitur lobortis justo, a consequat leo molestie ac. Duis pharetra consequat eros ac ultricies. Proin varius nec metus sed ultricies. Nunc ultricies turpis sit amet libero rhoncus, ac fermentum odio scelerisque. Ut in magna eu dolor mattis sollicitudin. </p>
    
    <p>Aenean at dui vitae velit mattis tincidunt. Pellentesque sit amet semper ipsum. Fusce vitae augue a risus ornare sodales. Nam vitae nisi et nisl malesuada fermentum. Phasellus ut ligula id nunc eleifend aliquam. Sed porttitor euismod dui, eget lacinia lacus lacinia nec. Nullam nec massa sit amet odio ullamcorper ultricies eget id metus. </p>
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