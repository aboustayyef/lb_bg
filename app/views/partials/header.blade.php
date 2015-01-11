<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <title></title>
</head>
<body>

    <!-- Facebook stuff -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=238902406162657";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!-- End Facebook stuff -->

    <div id="tarzan">
            <img src ="{{asset('img/interface/tarzan-mini-logo.png')}}" height="20" width="13.5"><a href="http://tarzan.com.gh">Tarzan Ent. Ltd</a> &nbsp;| &copy; 2014 - Ghana
    </div>

    <div class="paper">

        <div class="outer-row">
            <div id="slogan">
                <h4>Your destination for premium home and office furniture in Ghana</h4>
                <ul>
                    <li><div class="fb-like" data-href="https://www.facebook.com/blue.gallery.ghana" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div></li>
                    <a href="http://twitter.com/blue_gallery"><li><i class="fa fa-twitter-square"></i></li></a>
                    <a href="http://pinterest.com/bluegallery/"><li><i class="fa fa-pinterest-square"></i></li></a>
                    <li>
                        <form id="searchForm" method="get" action="http://google.com/search">
                            <input type="hidden" name="sitesearch" value="http://bluegallery.com.gh/">
                            <input type="search" id="s" name="q" placeholder="Search our collection">
                        </form>
                    </li>
                </ul>

            </div>
        </div>

        <!-- Get Navbar -->
        @include('partials.navbar')

        <div id="header" class="outer-row breath">
            <div class="inner-row">
                <a href="{{getenv('WEBPATH')}}">
                    <img src="{{asset('img/interface/bg_logo_website_468x262.png')}}" width ="234" height ="131" alt="Blue Gallery Logo">
                </a>
            </div>
        </div>

<?php
/* Add definitions to use for later*/
define('BEGINROW', '<div class="outer-row breath"><div class="inner-row"> '); // to begin rows
define('ENDROW', '</div></div>'); // to end rows

?>
