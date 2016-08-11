<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="description" content="Secara garis besar digital signature adalah sebuah skema matematis yang memiliki keunikan dalam mengidentifikasikan seorang pengirim (subjek hukum)." />

    <meta name="keywords" content="tanda tangan digital, eSignature Indonesia, digital signature indonesia, identifikasi digital, esignature kominfo, tanda tangan digital kominfo, tanda tangan digital resmi" />

    <meta name="language" content="Indonesia" />

    <meta name="webcrawlers" content="all" />

    <meta name="rating" content="general" />

    <meta name="spiders" content="all" />

    <meta name="robots" content="all" />



    <meta property="og:title" content="Official Digital Signature Indonesia" />

    <!-- META SEO -->

    

    <title>News - Digital Signature | KOMINFO</title>

    <!-- Favicon -->

    <link rel="shortcut icon" type="image/icon" href="<?=base_url()?>assets/images/favicon.ico"/>

    <!-- Font Awesome -->

    <link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet">

    <!-- Bootstrap -->

    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Slick slider -->

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/slick.css"/> 

    <!-- Fancybox slider -->

    <link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 

    <!-- Animate css -->

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/animate.css"/>  

     <!-- Theme color -->

    <link id="switcher" href="<?=base_url()?>assets/css/theme-color/lite-blue-theme.css" rel="stylesheet">



    <!-- Main Style -->

    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">

    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">





    <!-- Fonts -->

    <!-- Open Sans for body font -->

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Raleway for Title -->

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <!-- Pacifico for 404 page   -->

    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->





  </head>

  <body>

  <!-- BEGAIN PRELOADER -->

  <div id="preloader">

    <div class="loader">&nbsp;</div>

  </div>

  <!-- END PRELOADER -->



  <!-- SCROLL TOP BUTTON -->

    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>

  <!-- END SCROLL TOP BUTTON -->



  <!-- Start menu section -->

  <section id="menu-area">

    <nav class="navbar navbar-default main-navbar" role="navigation">  

      <div class="container">

        <div class="navbar-header">

          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

          <!-- LOGO --> 

           <a class="navbar-brand logo" href="<?=base_url()?>Front_home"><img src="<?=base_url()?>assets/images/logo1.png" alt="logo"></a>                      

        </div>

        <div id="navbar" class="navbar-collapse collapse">

          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">

            <li><button href="" onclick="location.href='<?=base_url()?>Front_home';">Home</button></li> 
                         
            <li class=""><button href="" onclick="location.href='<?=base_url()?>front_home/view_all_news';">VIEW ALL NEWS </button></li>

          </ul>                            

        </div><!--/.nav-collapse -->

       <div class="search-area">

          <form action="">

            <input id="search" name="search" type="text" placeholder="What're you looking for ?">

            <input id="search_submit" value="Rechercher" type="submit">

          </form>

        </div>         

      </div>          

    </nav> 

  </section>

  <!-- End menu section -->

  <!-- Start blog banner section -->

  <section id="blog-banner">

    <img src="<?=base_url()?>assets/images/news-bg.jpg" alt="img">

    <div class="blog-overlay">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <div class="blog-banner-area">

              <h2>NEWS</h2>

              <ol class="breadcrumb">

                <li><a href="<?=base_url()?>Front_home">Home</a></li>                

                <li class="active">News</li>

              </ol>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- End blog banner section -->



  <!-- Start blog section -->

  <section id="blog">

    <div class="container">

      <div class="row">

        <div class="col-md-12">

          <div class="blog-area">

            <div class="row">

              <div class="col-lg-8 col-md-7 col-sm-12">

                <div class="blog-left blog-details">

                  <!-- Start single blog post -->

                  <article class="single-from-blog">                    

                    <div class="blog-title">

                      <h2><?=$judul?></h2>

                      <p>Posted by <a href="#" class="blog-admin">admin</a> on <span class="blog-date"><?=date('d F Y', strtotime($tanggal))?></span></p>

                    </div>

                    <figure>

                      <img alt="img" src="<?=base_url()?>assets/img/<?=$img?>">

                    </figure>

                   <div class="blog-details-content">

                      <?=$isi?> 

                   </div>                  

                  </article>

                  <!-- <div class="blog-comment">

                    <h2>Post a comment</h2>

                    <form class="comment-form" action="">

                      <div class="form-group">                

                        <input type="text" placeholder="Name" class="form-control">

                      </div>

                      <div class="form-group">                

                        <input type="email" placeholder="Enter Email" class="form-control">

                      </div>              

                      <div class="form-group">

                        <textarea class="form-control"></textarea>

                      </div>

                      <button class="button button-default" data-text="Comment" type="submit"><span>Comment</span></button>

                    </form>

                  </div> -->

                  <!-- End single blog post -->                  

                </div>

              </div>

              <div class="col-lg-4 col-md-5 col-sm-12">

                <aside class="blog-right">

                  

                  <!-- Start Sidebar Single widget -->

                  <div class="single-widget">

                    <h2>Find us on</h2>

                    <div class="follow-us">

                      <a class="facebook" href="#"><span class="fa fa-facebook"></span></a>

                      <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>

                      <a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>

                      <a class="youtube" href="#"><span class="fa fa-youtube"></span></a>

                      <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>

                      

                    </div>

                  </div>

                  <!-- End Sidebar Single widget -->

                  <!-- Start Sidebar Single widget -->

                  <div class="single-widget">

                    <h2>Latest News</h2>

                    <div class="popular-post-widget">
                    <?php foreach($upcoming as $key => $news){
                     if($id != $news->id){
                    ?>
                      <div class="media">

                          <div class="media-left">

                            <a href="<?=base_url()?>Front_home/get_news_detail/<?=$news->id?>">

                              <img class="media-object" src="<?=base_url()?>assets/img/<?=$news->img?>" alt="img" height="130%" width="120%">

                            </a>

                          </div>

                          <div class="media-body">

                            <h4 class="media-heading"><a href="<?=base_url()?>Front_home/get_news_detail/<?=$news->id?>"><?=$news->judul?></a></h4>

                            <?=substr($news->isi, 0, 100)?> ... <a href="<?=base_url()?>Front_home/get_news_detail/<?=$news->id?>"><span>Read More</span></a>

                          </div>

                      </div>
                      <?php }
                      } 
                      ?>

                      <div class="media">

                        <div class="media-body">

                            <a href="<?=base_url()?>front_home/view_all_news" class="button button-default" data-text="View All" type="submit"><span>View All</span></a>

                        </div>

                      </div>

                    </div>

                  </div>

                  <!-- End Sidebar Single widget -->

                  

                  <!-- Start Sidebar Single widget -->

                  <div class="single-widget">

                    <h2>Events</h2>

                    

                    <div class="instagram-feed">

                      


                    <?php foreach($nextevent as $key => $event){
                      ?>

                    

                      <div class="single-instagram-feed">

                        <a href="<?=base_url()?>Front_home/get_event_detail/<?=$event->id?>">

                          <img src="<?=base_url()?>assets/img/<?=$event->pict?>" alt="img">

                          <div class="event-caption">

                            <p><?=$event->title?></p>

                          </div>

                        </a>

                      </div>

                    
                    <?php  
                      }
                    ?>

                      

                    </div>

                  </div>

                  <!-- End Sidebar Single widget -->



                  <!-- Start Sidebar Single widget -->

                  <!-- <div class="single-widget">

                    <img alt="banner" src="assets/images/about-img.png" class="img-responsive">

                  </div> -->

                  <!-- End Sidebar Single widget -->

                  

                </aside>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- End blog section -->



  <!-- Start Footer -->    

  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <div class="footer-top-area">             

                <a class="footer-logo" href="#"><img src="<?=base_url()?>assets/images/logo.png" alt="Logo"></a>              

              <div class="footer-social">

                <a class="facebook" href="#"><span class="fa fa-facebook"></span></a>

                <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>

                <a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>

                <a class="youtube" href="#"><span class="fa fa-youtube"></span></a>

                <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>

                <!-- <a class="dribbble" href="#"><span class="fa fa-dribbble"></span></a> -->

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="footer-bottom">

      <p>Designed &amp; Developed by <a rel="nofollow" href="#">KOMINFO &copy; 2016</a></p>

    </div>

  </footer>

  <!-- End Footer -->

  <!-- jQuery library -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->

  <!-- Bootstrap -->

  <script src="<?=base_url()?>assets/js/bootstrap.js"></script>

  <!-- Slick Slider -->

  <script type="text/javascript" src="<?=base_url()?>assets/js/slick.js"></script>

  <!-- Counter -->

  <script type="text/javascript" src="<?=base_url()?>assets/js/waypoints.js"></script>

  <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.counterup.js"></script>

  <!-- mixit slider -->

  <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.mixitup.js"></script>

  <!-- Add fancyBox -->        

  <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.fancybox.pack.js"></script>

  <!-- Wow animation -->

  <script type="text/javascript" src="<?=base_url()?>assets/js/wow.js"></script> 



  <!-- Custom js -->

  <script type="text/javascript" src="<?=base_url()?>assets/js/custom.js"></script>





  </body>

</html>