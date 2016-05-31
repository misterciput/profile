<?php $this->load->view('plugins')?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
    <title><?=$title?></title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <script src="//cdn.transifex.com/live.js"></script>
  </head>
  <body>
    <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons">menu</i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo"><a id="logo-container" class="brand-logo">
            <object  type="image/svg+xml" data="<?=base_url()?>assets/img/logo.svg"
            width="70%">Your browser does not support SVG</object></a></li>
        
        <li class="bold <?=$this->uri->segment(1) == 'artikel' ? 'active' : ''?>"><a href="<?=base_url()?>artikel" class="waves-effect waves-teal">Artikel</a>
        </li>
        <li class="bold <?=$this->uri->segment(1) == 'gallery' ? 'active' : ''?>"><a href="<?=base_url()?>gallery" class="waves-effect waves-teal">Gallery</a></li>
        <li class="bold"><a href="<?=base_url()?>home/logout" class="waves-effect waves-teal">Logout</a></li>
      </ul>
    </header>
    <main>
<div class="section" id="index-banner">
  <div class="container">
    <div class="row">
      <div class="col s12 m7">
        <h1 class="header center-on-small-only"><?=isset($title) ? $title : '';?></h1>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <!--  Outer row  -->
  <div class="row">
  <br/><br/>
    <?php
    if(isset($view)){
        $this->load->view($view);
      }
    ?>
    <br/><br/><br/><br/><br/>
      </div>
    </div> <!-- End Container -->
  </main>
<footer class="page-footer">
      <div class="footer-copyright">
        <div class="container">
        © 2016, All rights reserved.
        <a class="grey-text text-lighten-4 right" href="https://github.com/Dogfalo/materialize/blob/master/LICENSE">XYZ</a>
        </div>
      </div>
    </footer>
    <!-- Twitter Button -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <!-- Google Plus Button-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!--  Google Analytics  -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56218128-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
    </script>

  </body>
</html>