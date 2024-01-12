
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
       
       
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ URL('/')}}">Home</a></li>
                <li><a href="./shop-grid.html">Game Store</a></li>
              
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
      
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
       
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ URL('/')}}"><i class="fa fa-home"></i>LOGO</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ URL('/')}}">Home</a></li>
                            <li><a href="./shop-grid.html">Game Store</a></li>
                           
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                      
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Game Quest</span>
                        </div>
                        <ul>
                           

                            <li><a href="{{ URL('/')}}"><i class="fa fa-home"></i>Home</a></li>
                            <li><a href="#"><i class="fa fa-home"></i>Message</a></li>
                            <li><a href="#"><i class="fa fa-home"></i>Game Store</a></li>
                            <li><a href="#"><i class="fa fa-credit-card"></i>Payment</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i>Se/tting</a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i>Logout</a></li>

                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                      
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->