<?php /* @var $this Controller */ ?>
<?php $dataProvider= new CActiveDataProvider('Category'); ?>
<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
  <head>
    <!-- Site Title-->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>

<body>
    <!-- Page-->
    <div class="page text-center">
        <!-- Page Header-->
      <header class="page-head header-default">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="50px" data-lg-stick-up-offset="100px" class="rd-navbar">
            <button data-rd-navbar-toggle=".rd-navbar-panel-inner" type="submit" class="rd-navbar-collapse-toggle"><span></span></button>
            <div class="bg-white">
              <div class="rd-navbar-inner">
                <div class="rd-navbar-top-panel">
                  <!-- RD Navbar Panel-->
                  <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand">
                        <a href="#" class="brand-name">
                           <img src="images/Sunypun.png" alt="" width="150" height="50" />
                        </a>
                    </div>
                  </div>
                  <div class="rd-navbar-panel-inner">
                    <div><a href="#" class="btn btn-default btn-icon btn-icon-left"><span class="icon fa-phone"></span><span class="text-middle">880-2-9888049</span></a></div>
<!--                    <div>
                      <ul class="list-inline list-inline-xs">
                        <li><a href="#" class="icon icon-circle icon-primary icon-xs fa-facebook"></a></li>
                        <li><a href="#" class="icon icon-circle icon-primary icon-xs fa-twitter"></a></li>
                        <li><a href="#" class="icon icon-circle icon-primary icon-xs fa-youtube"></a></li>
                        <li><a href="#" class="icon icon-circle icon-primary icon-xs fa-linkedin"></a></li>
                      </ul>
                    </div>-->
                    <div> 
                        <button class="btn btn-primary ">Cart Item: </button>
                        
                        <button class="btn btn-primary " data-toggle="modal" data-target="#myCart" id="cart">0</button>
                    </div>
                    <div> <button class="btn btn-primary ">Sign in!</button></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-inner">
              <div class="rd-navbar-menu-panel">
                <div class="rd-navbar-nav-wrap">
                  <ul class="rd-navbar-nav">
                    <li class="rd-navbar-search veil-md">
                            <!-- RD Search Form-->
                            <form action="#" method="GET" class="form-search rd-search">
                              <div class="form-group">
                                <label for="navbar-1-form-search-widget" class="form-label form-search-label"></label>
                                <input id="navbar-1-form-search-widget" type="text" name="s" autocomplete="off" class="form-search-input form-control ">
                              </div>
                              <div class="rd-search-results-live"></div>
                              <button type="submit" class="form-search-submit"><span class="icon mdi mdi-magnify icon-sm"></span></button>
                            </form>
                    </li>
                    <!-- RD Navbar Nav-->
                    <li><a href="index.php?r=site/index">Home</a></li>
                    <li><a href="index.php?r=site/about">About</a></li>
                    <li><a href="index.php?r=product/index">Products</a>
                      <ul class="rd-navbar-dropdown">
                          <?php foreach ($dataProvider->data as $key => $value) { ?>
                          <li><a href="index.php?r=product/list&id=<?php echo $value['Id']; ?>"><?php echo $value['Name']; ?></a></li>
                         <?php }?>
                      </ul>
                    </li>
                    <li><a href="index.php?r=site/contact">Contact Us</a></li>
                  </ul>
                </div>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search veil reveal-md-block">
                  <!-- RD Search-->
                  <form action="#" method="GET" data-search-live="rd-search-results-live" class="rd-search">
                    <div class="form-group">
                      <label for="rd-search-form-input" class="form-label">Type and hit enter...</label>
                      <input id="rd-search-form-input" type="text" name="s" autocomplete="off" class="form-control">
                    </div>
                    <div id="rd-search-results-live" class="rd-search-results-live"></div>
                  </form>
                  <!--+widget-form-search("", "", "navbar-2-form-search-widget")-->
                  <button data-custom-toggle=".rd-search " type="submit" class="rd-search-form-submit"></button>
                </div>
                
              </div>
            </div>
            <hr> 
          </nav>
            
        </div>
      </header>
        
        <!-- Page Content-->
      <main class="page-content">
        <?php echo $content; ?>
      </main>
        <!-- Page Footer-->
        <footer class="page-footer bg-darkest section-top-13 section-bottom-15 section-lg-top-90 text-sm-left">
        <div class="shell">
          <div class="range range-lg-right">
            <div style="position:relative" class="cell-lg-2">
              <div class="background-aside-left"></div>
              <ul class="rd-navbar-nav">
                <!-- RD Navbar Nav-->
                <li class="active"><a href="index.php?r=site/index">Home</a></li>
                <li><a href="index.php?r=site/about">About</a></li>
                <li><a href="index.php?r=product/index">Products</a></li>
                <li><a href="index.php?r=site/contact">Contact Us</a></li>
              </ul>
            </div>
            <div class="cell-sm-6 cell-md-5 cell-lg-preffix-1 offset-top-45 offset-lg-top-0">
              <h5 class="text-white">Sign up today!</h5>
              <p class="font-size-10 text-lighter offset-top-5">Each month we roll out special offers and discounts for our products.</p>
              <div class="offset-top-35">
                      <form data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="bat/rd-mailform.htm" class="rd-mailform form-subscribe">
                        <div class="form-group">
                          <input placeholder="Your e-mail" type="email" name="email" data-constraints="@Required @Email" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-subscribe-footer fa-paper-plane"></button>
                        <div id="form-subscribe-footer" class="form-output"></div>
                      </form>
              </div>
              <ul class="list-inline list-inline-xs offset-top-40 offset-md-top-70">
                <li><a href="index.html#" class="icon icon-circle icon-dark icon-xs fa-facebook"></a></li>
                <li><a href="index.html#" class="icon icon-circle icon-dark icon-xs fa-twitter"></a></li>
                <li><a href="index.html#" class="icon icon-circle icon-dark icon-xs fa-youtube"></a></li>
                <li><a href="index.html#" class="icon icon-circle icon-dark icon-xs fa-linkedin"></a></li>
              </ul>
            </div>
            <div class="cell-sm-6 cell-lg-4 offset-top-45 offset-lg-top-0">
              <h5 class="text-white">Who We Are</h5>
              <p class="text-lighter offset-top-17">Sunypun Organics Limited came into operation in the Year 2008. This is a distillery and at present produces various types of alchols!</p>
              <div class="offset-top-30 offset-md-top-55">
                <div class="group-xl"><a href="#"><img src="images/logos.png" width="144" height="65" alt=""><!--</a><a href="#"><img src="images/footer-2.png" width="106" height="65" alt=""></a>--></div>
              </div>
            </div>
            <div class="cell-lg-9 offset-top-45 offset-md-top-110">
                <p class="font-size-10"><a href="index.php?r=site/privacy" class="text-white">Privacy Policy</a><span>&nbsp; | &nbsp;</span><a href="#" class="text-white">Terms of use</a><span class="inset-md-left-100 inset-lg-left-220">&nbsp; Copyright  &#169;</span><span id="copyright-year"></span><span class="text-white">&nbsp; Sunypun Organics Ltd. &nbsp;</span>All rights reserved. Sunypun Organics Ltd.</p> 
                <p class="font-size-10" style="text-align: right;"><a href="#" class="text-white">Developed by: teamCAPe</a></p>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- Java script-->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/core.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>

</body>
</html>

