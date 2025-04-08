<?php

// Prevent direct access to this file
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$page_title = 'Immersedin' . ' | ' . ucfirst($current_page);


?>


<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png">
  
  <!-- Core Css -->
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/custom.css">
  
  <title><?php echo $page_title; ?></title>
  
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid">
  </div>
  <div id="main-wrapper">
    <!-- Sidebar Start -->
    <aside class="left-sidebar with-vertical">
      <div><!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index.html" class="text-nowrap logo-img">
            <img src="/assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark">
            <img src="/assets/images/logos/light-logo.svg" class="light-logo" alt="Logo-light">
          </a>
          <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
            <i class="ti ti-x"></i>
          </a>
        </div>