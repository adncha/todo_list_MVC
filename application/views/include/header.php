<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>TODO LIST 2.0</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">


        <!--- Bootstrap Switch CDN-->
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">


        <!-- Project css -->
        <link rel="stylesheet" href="/assets/css/style.css">

        <!-- Latest compiled and minified Jquery -->
        <script
                src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous"></script>


        <!-- Bootstrap Toggle-->
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


        <!-- Project script -->
        <script src="/assets/js/script.js"></script>


    </head>
    <header class="bg-primary ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">
                        <?= strtoupper($title)?>
                    </h3>
                </div>
            </div>
        </div>
    </header>
    <body>



