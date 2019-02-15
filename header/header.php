<!-- Header -->

<header id="top" class="clearfix">

    <div class="container">
        <div class="top-navigation">
            <ul class="list-inline">
                <li class="top-logo">
                    <a id="site-title" href="#" title="Jewelry - HTML Template theme">
                        <img class="img-responsive" src="assets/images/logo.png" alt="Jewelry - HTML Template theme">
                    </a>
                </li>
                <li class="navigation">
                    <nav class="navbar">
                        <div class="clearfix">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle main navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="is-mobile visible-xs">
                                <ul class="list-inline">
                                    <li class="is-mobile-menu">
                                        <div class="btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="icon-bar-group">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="is-mobile-login">
                                        <div class="btn-group">
                                            <div class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <ul class="customer dropdown-menu">
                                                <li class="logout">
                                                    <a href="#">Login</a>
                                                </li>
                                                <li class="account last">
                                                    <a href="register.html">Register</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="is-mobile-wl">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li class="is-mobile-cart">
                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav hoverMenuWrapper">
                                    <li class="nav-item active">
                                        <a href="#">
                                            <span>Home</span>
                                        </a>
                                    </li>
                                    <li class="dropdown mega-menu">
                                        <a href="collection.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
                                            <span>Collections</span>
                                            <i class="fa fa-caret-down"></i>
                                            <i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
                                            <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
                                        </a>
                                        <div class="megamenu-container megamenu-container-1 dropdown-menu banner-bottom mega-col-4"
                                            style="">
                                            <ul class="sub-mega-menu">
                                                <li>
                                                    <ul>
                                                        <li class="list-title">Collection Links</li>
                                                        <li class="list-unstyled li-sub-mega">
                                                            <a href="#">Dolorem Sed </a>
                                                        </li>
                                                        <li class="list-unstyled li-sub-mega">
                                                            <a href="#">Proident Nulla </a>
                                                        </li>
                                                        <li class="list-unstyled li-sub-mega">
                                                            <a href="#">Phasellus Leo <span class="megamenu-label hot-label">Hot</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-unstyled li-sub-mega">
                                                            <a href="#">Tristique Amet <span class="megamenu-label feature-label">Featured</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li class="list-title">Collection Links</li>
                                                        <li class="list-unstyled li-sub-mega">
                                                            <a href="#">Dolorem Sed </a>
                                                        </li>
                                                        <li class="list-unstyled li-sub-mega">
                                                            <a href="#">Proident Nulla <span class="megamenu-label new-label">New</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-unstyled li-sub-mega">
                                                            <a href="#">Phasellus Leo </a>
                                                        </li>
                                                        <li class="list-unstyled li-sub-mega">
                                                            <a href="#">Tristique Amet </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                           
                                       
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.php">
                                            <span>Contact</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="login.php">
                                            <span>Login</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="login.php">
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </nav>
                </li>

            </ul>
        </div>
        <!--End Navigation-->
        <script>
            function addaffix(scr) {
                if ($(window).innerWidth() >= 1024) {
                    if (scr > $('#top').innerHeight()) {
                        if (!$('#top').hasClass('affix')) {
                            $('#top').addClass('affix').addClass('animated');
                        }
                    }
                    else {
                        if ($('#top').hasClass('affix')) {
                            $('#top').prev().remove();
                            $('#top').removeClass('affix').removeClass('animated');
                        }
                    }
                }
                else $('#top').removeClass('affix');
            }
            $(window).scroll(function () {
                var scrollTop = $(this).scrollTop();
                addaffix(scrollTop);
            });
            $(window).resize(function () {
                var scrollTop = $(this).scrollTop();
                addaffix(scrollTop);
            });
        </script>
    </div>
    <!-- Facebook Conversion Code for Themes -->
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '../../connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', '6016096938024', { 'value': '0.00', 'currency': 'USD' }]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6016096938024&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
</header>