<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="KEulmvTiJzz74aXH-UG_1mjn1pz7eivzFN9i7KkTSpY" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="description" content="株式会社ダイケンは、企画・デザインなど総合プランナーとしてwebでの展開を行っております。" />
<link rel="shortcut icon" href="https://daikenweb.com/wp-content/fav.ico">
<meta name="twitter:card" content="summary_large_image">
<meta property="og:url" content="https://daikenweb.com/" />
<meta property="og:title" content="<?php wp_title(); ?>" />
<meta property="og:description" content="株式会社ダイケンは、企画・デザインなど総合プランナーとしてwebでの展開を行っております。" />
<meta property="og:image" content="https://daikenweb.com/wp-content/uploads/2020/09/thumbnail.jpg" />
<!-- Bootstrap -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="js/daiken.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body>
<!-- トップページスマホここから --> 
<?php if ( is_home() || is_front_page() ) : ?>
<header id="top-head">
    <div class="inner">
        <div id="mobile-head">
            <h1 class="logo"><a class="navbar-brand" href="https://daikenweb.com/"><img src="https://daikenweb.com/wp-content/uploads/2018/02/logo-2-e1518682283574.png" class="header-logo" alt="株式会社 ダイケン|印刷 広告 DM ホームページ制作 事務機"/></a></h1>
            <div id="nav-toggle">
                <div>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                </div>
            </div>
        </div>
        <nav id="global-nav">
          <ul>
            <li class="border_menu"><a href="https://daikenweb.com/#service">SERVICE<span class="caret"></span></a></li>
            <li class="sub_menu"><a href="https://daikenweb.com/ad/">AD Planning</a></li>
            <li class="sub_menu"><a href="https://daikenweb.com/crm/">CRM Support</a></li>
            <li class="sub_menu"><a href="https://daikenweb.com/digital/">Digital Contents</a></li>
            <li class="sub_menu"><a href="https://daikenweb.com/yubin/">Yubin AD</a></li>
            <li class="sub_menu"><a href="https://daikenweb.com/creative/">Creative</a></li>
            <li class="sub_menu"><a href="https://daikenweb.com/printing/">Printing</a></li>
            <li class="sub_menu"><a href="https://daikenweb.com/bridal/">Bridal Item</a></li>
<!--            <li class="sub_menu"><a href="https://daikenweb.com/office/">Office Partner</a></li>-->
            <li class="sub_menu"><a href="https://daikenweb.com/cm-pro/">CM・Promotion</a></li>
            <li class="border_menu"><a href="https://daikenweb.com/aboutus/">ABOUT US</a></li>
<!--
            <li><a href="https://daikenweb.com/recruit/" target="_blank">RECRUIT</a></li>
-->
            <li><a href="https://daikenweb.com/privacy/">PRIVACY POLICY</a></li>
            <li><a href="https://daikenweb.com/contact/">CONTACT</a></li>
          </ul>
        </nav>
    </div>
</header>
<!-- トップページスマホここまで --> 
<!-- トップページPCここから --> 
<div id="header" class="container-fluid">
  <div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
  <div class="container">   
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="https://daikenweb.com/"><img src="https://daikenweb.com/wp-content/uploads/2018/02/logo-2-e1518682283574.png" class="header-logo" alt="株式会社 ダイケン|印刷 広告 DM ホームページ制作 事務機"/></a>
    </div>   
     <div  class="table-cell menu">
       <ul>
        <li>
            <a href="https://daikenweb.com/#service">SERVICE<span class="caret"></span></a>
              <ul>
                <li><a href="https://daikenweb.com/ad/">AD Planning</a></li>
                <li><a href="https://daikenweb.com/crm/">CRM Support</a></li>
                <li><a href="https://daikenweb.com/digital/">Digital Contents</a></li>
                <li><a href="https://daikenweb.com/yubin/">Yubin AD</a></li>
                <li><a href="https://daikenweb.com/creative/">Creative</a></li>
                <li><a href="https://daikenweb.com/printing/">Printing</a></li>
                <li><a href="https://daikenweb.com/bridal/">Bridal Item</a></li>
<!--                <li><a href="https://daikenweb.com/office/">Office Partner</a></li>-->
                <li><a href="https://daikenweb.com/cm-pro/">CM・Promotion</a></li>
              </ul>
        </li>
        <li class="border"></li>
        <li><a href="https://daikenweb.com/aboutus/">ABOUT US</a></li>
        <li class="border"></li>
<!--
        <li><a href="https://daikenweb.com/recruit/" target="_blank">RECRUIT</a></li>
        <li class="border"></li>
-->
        <li><a href="https://daikenweb.com/privacy/">PRIVACY POLICY</a></li>
        <li class="border"></li>
        <li><a href="https://daikenweb.com/contact/">CONTACT</a></li>
      </ul>
    </div>
  </div>
  </div>
  </div>
</div>
<!-- トップページPCここまで --> 
<!-- 他ページ・スマホヘッダーここから --> 
<?php else : ?>
<header id="top-head2">
    <div class="inner2">
        <div id="mobile-head">
            <h1 class="logo"><a class="navbar-brand" href="https://daikenweb.com/"><img src="https://daikenweb.com/wp-content/uploads/2018/02/logo-2-e1518682283574.png" class="header-logo" alt="株式会社 ダイケン|印刷 広告 DM ホームページ制作 事務機"/></a></h1>
            <div id="nav-toggle2">
                <div>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                </div>
            </div>
        </div>
        <nav id="global-nav">
          <ul>
            <li class="border_menu"><a href="https://daikenweb.com/#service">SERVICE<span class="caret"></span></a></li>
            <li class="sub_menu"><a href="https://daikenweb.com/ad/">AD Planning</a></li>
            <li class="sub_menu"><a href="https://daikenweb.com/crm/">CRM Support</a></li>
            <li class="sub_menu"><a href="https://daikenweb.com/digital/">Digital Contents</a></li>
            <li class="sub_menu"><a href="https://daikenweb.com/yubin/">Yubin AD</a></li>
            <li class="sub_menu"><a href="https://daikenweb.com/creative/">Creative</a></li>
            <li class="sub_menu"><a href="https://daikenweb.com/printing/">Printing</a></li>
            <li class="sub_menu"><a href="https://daikenweb.com/bridal/">Bridal Item</a></li>
<!--            <li class="sub_menu"><a href="https://daikenweb.com/office/">Office Partner</a></li>-->
            <li class="sub_menu"><a href="https://daikenweb.com/cm-pro/">CM・Promotion</a></li>
            <li class="border_menu"><a href="https://daikenweb.com/aboutus/">ABOUT US</a></li>
<!--
            <li><a href="https://daikenweb.com/recruit/" target="_blank">RECRUIT</a></li>
-->
            <li><a href="https://daikenweb.com/privacy/">PRIVACY POLICY</a></li>
            <li><a href="https://daikenweb.com/contact/">CONTACT</a></li>
          </ul>
        </nav>
    </div>
</header>
<!-- 他ページ・スマホヘッダーここまで -->
<!-- 他ページ・PCヘッダーここから -->
<div id="header" class="container-fluid">
  <div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
  <div class="container">   
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="https://daikenweb.com/"><img src="https://daikenweb.com/wp-content/uploads/2018/02/logo-2-e1518682283574.png" class="header-logo" alt="株式会社 ダイケン|印刷 広告 DM ホームページ制作 事務機"/></a>
    </div>   
     <div  class="table-cell menu">
       <ul>
        <li>
            <a href="#">SERVICE<span class="caret"></span></a>
              <ul>
                <li><a href="https://daikenweb.com/ad/">AD Planning</a></li>
                <li><a href="https://daikenweb.com/crm/">CRM Support</a></li>
                <li><a href="https://daikenweb.com/digital/">Digital Contents</a></li>
                <li><a href="https://daikenweb.com/yubin/">Yubin AD</a></li>
                <li><a href="https://daikenweb.com/creative/">Creative</a></li>
                <li><a href="https://daikenweb.com/printing/">Printing</a></li>
                <li><a href="https://daikenweb.com/bridal/">Bridal Item</a></li>
<!--                <li><a href="https://daikenweb.com/office/">Office Partner</a></li>-->
                <li><a href="https://daikenweb.com/cm-pro/">CM・Promotion</a></li>
              </ul>
        </li>
        <li class="border"></li>
        <li><a href="https://daikenweb.com/aboutus/">ABOUT US</a></li>
        <li class="border"></li>
<!--
        <li><a href="https://daikenweb.com/recruit/" target="_blank">RECRUIT</a></li>
        <li class="border"></li>
-->
        <li><a href="https://daikenweb.com/privacy/">PRIVACY POLICY</a></li>
        <li class="border"></li>
        <li><a href="https://daikenweb.com/contact/">CONTACT</a></li>
      </ul>
    </div>
  </div>
  </div>
  </div>
</div>
<?php endif; ?>
<!-- 他ページ・PCヘッダーここまで -->