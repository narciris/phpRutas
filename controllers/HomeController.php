<?php

class HomeController
{
 public function index()
 {
    require_once ("view/home/index.php");

 }
 public function contact(){
     require_once ("view/home/contact.php");
 }

}