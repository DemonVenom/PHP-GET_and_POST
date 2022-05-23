<?php
    if(isset($_GET['name'])){
        $name = $_GET['name'];
    }
    function greeting(){
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            echo "Hello, " . $name;
        }
    }
    greeting();
?>