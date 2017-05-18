<?php
session_start();
?>
<!DOCTYPE html> <!-- -->
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>CritiqueBook</title>
  <meta name="keywords" content="book,read,review,critique,literature,blog,reading">
  <meta name="description" content="Book reviews from avid readers who want to share some of their favorite stories">
 <!--Gulp automation uses postCSS & autoprefixer outputs to this temp folder-->
 <link rel="stylesheet" href="temp/styles/styles.css">
   <script src="/temp/scripts/Vendor.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
   </script>
   <?php include('connect.php') ?>
</head>