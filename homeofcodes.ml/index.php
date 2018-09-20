<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
      <title>HomeofCodes</title>
      <link rel="icon" href="favicon.png">
      <link href='fonts/pacifico.css' rel='stylesheet' type='text/css'>
      <link href="fonts/bitnami.css" rel="stylesheet">
      <link rel="stylesheet" href="css/reset.css">
      <!-- CSS reset -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Resource style -->
      <link rel="stylesheet" href="css/materialize.min.css">
      <link rel="stylesheet" type="text/css" href="icon.css" />
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <script src="js/modernizr.js"></script> <!-- Modernizr -->
      <script src="js/materialize.js"></script>
<script src="js/angular.min.js"></script>
<script src="js/angular-route.js"></script>
<script src="js/app.js"></script>
<link rel='stylesheet' href='css/loading-bar.min.css' type='text/css' media='all' />
<script type='text/javascript' src='js/loading-bar.min.js'></script>
<link rel="stylesheet" href="css/atom-one-dark.css">
<script src="js/highlight.pack.js"></script>

   </head>
   <body ng-app="myApp">

     <div id="fb-root"></div>
     <?php
     require 'includes/header.php'; 
   
     ?>

    <?php

echo'<div ng-view></div>';
     ?>

      <script>
         $(document).ready(function(){
           $('.carousel').carousel();
         });

          $(".button-collapse").sideNav();
hljs.initHighlightingOnLoad();

      </script>
   </body>
</html>
