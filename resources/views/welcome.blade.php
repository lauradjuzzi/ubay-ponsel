<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubay Ponsel</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html" style="font-weight: bold; font-size: 24px; color: #7fad39;">Ubay
                            Ponsel</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__item set-bg" style="background-position: center; background-size: contain;"
                        data-setbg="img/hero-bg.png">
                        <div class="hero__text">
                            <span>Penyedia Layanan Top Up</span>
                            <h2>Ubay Ponsel <br />Rajanya Top Up</h2>
                            <p style="font-weight: 600;">Top Up Pulsa, Kuota, E-Money & Token Listrik – Cepat, Aman, dan
                                Mudah!</p>
                            <a href="#" class="primary-btn">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"
                            style="background-size: contain; background-position: center"
                            data-setbg="img/categories/Indosat_Ooredoo.svg.png">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"
                            style="background-size: contain; background-position: center"
                            data-setbg="img/categories/logo-telkomsel-baru.webp">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"
                            style="background-size: contain; background-position: center"
                            data-setbg="img/categories/Smartfren-Logo-Header.png">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"
                            style="background-size: contain; background-position: center"
                            data-setbg="img/categories/png-clipart-xl-axiata-axiata-group-telecommunications-graphics-logo-logo-telkomsel-angle-logo-thumbnail.png">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"
                            style="background-size: contain; background-position: center"
                            data-setbg="img/categories/GoPay-logo-vector-svg-eps-formats-free-download-Brandlogos_net-3997437626.webp">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"
                            style="background-size: contain; background-position: center"
                            data-setbg="img/categories/01gmcht2rn92exshy86qbg13cd.png">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"
                            style="background-size: contain; background-position: center"
                            data-setbg="img/categories/Logo_ovo_purple.svg.png">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"
                            style="background-size: contain; background-position: center"
                            data-setbg="img/categories/Logo_dana_blue.svg.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>List Top Up</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Semua</li>
                            <li data-filter=".ewallet">Token Listrik</li>
                            <li data-filter=".pulsa">Pulsa</li>
                            <li data-filter=".pi">Paket Internet</li>
                            <li data-filter=".emoney">E-Money</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($eMoney as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix emoney">
                        <div class="featured__item border rounded p-4">
                            <div class="featured__item__text">
                                <h6><a href="#">{{ $item->name }}</a></h6>
                                <h6><a href="#" style="font-weight: 600; color:#7fad39">{{ $item->service }}</a></h6>
                                <h5>Rp. {{ number_format($item->price, 0, ',', '.') }}</h5>
                                <div class="row flex justify-content-center mt-4">
                                    <a href="https://wa.me/6282334304008?text=halo aku mau beli ini" class="primary-btn">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($token as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix ewallet">
                        <div class="featured__item border rounded p-4">
                            <div class="featured__item__text">
                                <h6><a href="#">{{ $item->name }}</a></h6>
                                <h6><a href="#" style="font-weight: 600; color:#7fad39">{{ $item->service }}</a></h6>
                                <h5>Rp. {{ number_format($item->price, 0, ',', '.') }}</h5>
                                <div class="row flex justify-content-center mt-4">
                                    <a href="#" class="primary-btn">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($kuotas as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix pi">
                        <div class="featured__item border rounded p-4">
                            <div class="featured__item__text">
                                <h6><a href="#">{{ $item->name }}</a></h6>
                                <h6><a href="#" style="font-weight: 600; color:#7fad39">{{ $item->service }}</a></h6>
                                <h5>Rp. {{ number_format($item->price, 0, ',', '.') }}</h5>
                                <div class="row flex justify-content-center mt-4">
                                    <a href="#" class="primary-btn">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($pulsas as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix pulsa">
                        <div class="featured__item border rounded p-4">
                            <div class="featured__item__text">
                                <h6><a href="#">{{ $item->name }}</a></h6>
                                <h6><a href="#" style="font-weight: 600; color:#7fad39">{{ $item->service }}</a></h6>
                                <h5>Rp. {{ number_format($item->price, 0, ',', '.') }}</h5>
                                <div class="row flex justify-content-center mt-4">
                                    <a href="#" class="primary-btn">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 d-flex">
                    <div class="banner__pic mw-100 w-100">
                        <img src="https://lelogama.go-jek.com/post_featured_image/Blogpost_image.png" alt="" class="img-fluid h-100 w-100 object-fit-cover">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 d-flex">
                    <div class="banner__pic mw-100 w-100">
                        <img src="https://images-loyalty.ovo.id/public/deal/57/33/l/35122.jpg?ver=1" alt="" class="img-fluid h-100 w-100 object-fit-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html" style="font-weight: bold; font-size: 26px; color: #7fad39;">Ubay
                                Ponsel</a>
                        </div>
                        <ul>
                            <li>Alamat: SP 3, Siak, Riau</li>
                            <li>Phone: +62 823 3430 4008</li>
                            <li>Email: ubay@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Layanan Top Up</h6>
                        <ul>
                            <li><a href="#">Pulsa</a></li>
                            <li><a href="#">Paket Internet</a></li>
                            <li><a href="#">E-Moneys</a></li>
                            <li><a href="#">Token Listrik</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> Ubay Ponsel
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>
