<?php
function HomePage(){
    function chacklogin(){
        if(isset($_SESSION ["user"])){
            return '<div>you are now login</div> <a href="/login?logout">logout</a>';
        } else {
                '<a href="/login">login</a>';
        }
    }
    return title("Home")
            . '<h2>this is home page</h2>
            <div>Content</div>
            <div>click "about" to go to about page</div>'
            . chacklogin()
        ;    
}
