<?php
      include("app/database/db.php"); 
      
        $errMsg = '';


//код для формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    // tt($_POST);
    // echo 'я пришел с формы регистрации';
    // exit();

    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
   $passF = trim($_POST['pass-first']);
   $passS = trim($_POST['pass-second']);

   
    if($login === '' || $email === '' || $passF === ''){
        $errMsg = 'Не все поля заполнены';
    }elseif (mb_strlen($login, 'UTF8') < 2){
        $errMsg = "Логин должен быть НЕ короче 2-х символов";
    }elseif ($passF !== $passS){
        $errMsg = "Пароли не совпадают";
    }
    else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence === $email) {
            $errMsg = "Пользователь с таким же email уже зарегистрирован";
        } else {
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
             $id = insert('users', $post);
             $user = selectOne('users', ['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];

            if( $_SESSION['admin']){
                header('location: '. BASE_URL . 'admin/posts/index.php');
            }
            header('location: '. BASE_URL);

        }
        }
    }
// $last_row = selectOne('users', ['id' => $id]);
else{
    $login = '';
    $email = '';
}
//код для формы авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){

    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if($email === '' || $pass === '') {
       $errMsg = "Не все поля заполнены";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($pass, $existence['password'])){
            $_SESSION['id'] = $existence['id'];
            $_SESSION['login'] = $existence['username'];
            $_SESSION['admin'] = $existence['admin'];

            if($_SESSION['admin']){
                header('location: ' . BASE_URL . "admin/admin.php");
            }else{
                header('location: ' . BASE_URL);
            }
        }else{
            $errMsg = "Почта либо пароль введены неверно";
        }
    }
}else{
    $email = '';
}



 
//  $pass = password_hash($_POST['pass-second'], PASSWORD_DEFAULT);















