<?php
session_start();
include "../../path.php";

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
<link rel="stylesheet" href="../../assets/CSS/admin.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>

  <?php include("../../app/include/header-admin.php"); ?>
<div class="conteiner">
<?php include '../../app/include/sidebar-admin.php'; ?>

<div class="posts col-9">
<div class="button row">
<a href="<?php echo BASE_URL . "admin/users/create.php";  ?>" class="col-2 btn btn-info">Создать</a>
<span class="col-1"></span>
<a href="<?php echo BASE_URL . "admin/users/index.php";  ?>" class="col-2 btn btn-secondary">Управление</a>
  </div>
  <div class="row title-table">
    <h2>Создание пользователя</h2>

  </div>
  <div class="col">
        <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
        <input name = "login" placeholder="введите ваш логин" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
      </div>

    <div class="col">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input name = "email" placeholder="введите ваш email" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

    <div class="col">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input name = "pass-first" type="password" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="col">
        <label for="exampleInputPassword2" class="form-label">Подтверждение пароля</label>
        <input name = "pass-second" type="password" class="form-control" id="exampleInputPassword2">
      </div>
      <select class="form-select" aria-label="Default select example">
  <option selected>Пользователь</option>
  <option value="1">Админ</option>

</select>
<div class="col">
    <button class="btn btn-primary" type="submit">Сохранить запись</button>
  </div>
    </form>
  </div>


</div>


</div>

</div>







<?php include("../../app/include/footer.php"); ?>








 <!-- Option 1: Bootstrap Bundle with Popper -->
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
  </body>
</html>