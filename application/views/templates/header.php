<!DOCTYPE html>
<html>
<head>
    <title>First blog using PHP and Code Ignitor</title>
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <link href="<?php echo base_url(); ?>/assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/build/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/chosen.min.css'); ?>" rel="stylesheet">
    <link href="<?php /*echo base_url('assets/css/style.css'); */?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/select2.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mycustom.css'); ?>" rel="stylesheet">
    <!-- <link href="<?php /*echo base_url(); */?>/assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script href="<?php /*echo base_url(); */?>/assets/js/bootstrap.min.js"></script>
   --><script src="<?php echo base_url('assets/css/cloudflare.css'); ?>"></script>
    <!--<link href="<?php /*echo base_url(); */?>/assests/css/fonts.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->


<body>
<h1>Welcome to my blog</h1>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php echo site_url('pages/get_clock_page'); ?>">First CI App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('pages/get_about_page'); ?>">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('posts/view'); ?>">Comments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('posts/index'); ?>">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('pages/get_calculator_page'); ?>">Calculator</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div class="container">



