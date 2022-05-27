<?php
function LoginPage(){
    if(isset($_GET['logout'])){
        session_unset();
        header("Location / ");
    }

if(isset($_POST["username"])){
    $_SESSION["user"] = $_POST["username"];
    header("Location: /");
}


    return title("login") . '<form action="/login" method="post">
    <label for="">username</label>
    <input type="text" name="username" >
    <button>login</button>
    </form>'
    ;
}