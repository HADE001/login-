<?php
require('./lib/system.php');
require("./package.php");

function RootContent(){
    // use SwitchPage([]) | write Route inside [] || and use callback function
    return
     SwitchPath([
         Route('/login' , fn()=> LoginPage()),
        Route('/',fn()=> HomePage()),
        Route('*',fn()=> 'Not found page'),
    ]);
}