<?php require 'header.tpl.php' ?>

<body>

    <header class="nk-header">

        <!--START: Navbar-->
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-white-text-on-top">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="<?php echo WEB_DOMAIN ?>" class="nk-nav-logo">
                        <img src="<?php echo WEB_IMAGES ?>/logo-ba-w.png" alt="" width="225" class="nk-nav-logo-onscroll">
                        <img src="<?php echo WEB_IMAGES ?>/logo-ba.png" alt="" width="225">
                    </a>
                </div>
            </div>
        </nav>
        <!-- END: Navbar -->

    </header>

    <div class="nk-main">

        <!-- START: Header -->
        <div class="nk-header-title nk-header-title-full">
            <div class="bg-image">
                <div style="background-image: url('<?php echo WEB_IMAGES ?>/bg-ba.jpg');"></div>
                <div class="bg-image-overlay" style="background-color: rgba(12, 12, 12, 0.6);"></div>
            </div>
            <div class="nk-header-table">
                <div class="nk-header-table-cell">
                    <div class="container">
                        <h2 class="nk-subtitle text-white">Book a flight</h2>
                        <h1 class="nk-title display-3 text-white">Plan & Booking</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="nk-header-title-scroll-down"></div>
        <!-- END: Header -->

        <form action="detail.php" method="POST">

        <!-- START: Booking -->
        <div class="bg-white" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-xs-center">
                        <div class="nk-gap-4 mt-9"></div>
                        <p> The price of the place is 10 euros until 12 years and then of 15 euros.</br>
                            The price of the insurance cancellation is 20 euros whatever is the number of travelers.</p>
                        <table>
                            <div class="nk-subtitle text-black"><label for="destination">Destination</label>
                            <select name="destination" id="destination">
                                <?php foreach ($booking->getDestinations() as $destination) { ?>
                                <option value="<?php echo $destination ?>" class="text-capitalize"><?php echo ucfirst($destination) ?></option>
                                <?php } // end foreach destinations ?>
                            </select></div>
                            <div class="nk-subtitle text-black"><label for="nb_passenger">Passengers
                                <input type='number' min='1' max='10' name='nb_passenger' value='' required/></div>
                            <div class="nk-subtitle text-black"><label for="insurance">Cancellation insurance
                                <input type='checkbox' name='insurance' value='on'/></div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Booking -->


        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <div class="container">
                <!-- <a class="nk-icon nk-pagination-center" href="cancel-reservation"><span class="pe-7s-angle-center"></span>Cancelling the reservation</a> -->
                <button class="btn" type="button" onclick="location.href='cancel.php'">Cancelling the reservation</button>
                <button type="submit" type="button" class="btn">Next step<span class="pe-7s-angle-right"></span></button>
            </div>
        </div>
        <!-- END: Pagination -->

        </form>



        <!-- START: Group -->
        <div class="nk-box bg-dark-1 text-white">
            <div class="container">
                <div class="nk-carousel-2 nk-carousel-x4 nk-carousel-no-margin nk-carousel-all-visible">
                    <div class="nk-carousel-inner">
                        <div>
                            <div class="nk-box-1">
                                <img src="<?php echo WEB_IMAGES ?>/l-i-ba-w.png" alt="" class="nk-img-fit">
                            </div>
                        </div>
                        <div>
                            <div class="nk-box-1">
                                <img src="<?php echo WEB_IMAGES ?>/l-e-ba-w.png" alt="" class="nk-img-fit">
                            </div>
                        </div>
                        <div>
                            <div class="nk-box-1">
                                <img src="<?php echo WEB_IMAGES ?>/l-i-lufthansa-w.png" alt="" class="nk-img-fit">
                            </div>
                        </div>
                        <div>
                            <div class="nk-box-1">
                                <img src="<?php echo WEB_IMAGES ?>/l-e-lufthansa-w.png" alt="" class="nk-img-fit">
                            </div>
                        </div>
                        <div>
                            <div class="nk-box-1">
                                <img src="<?php echo WEB_IMAGES ?>/l-i-sa-w.png" alt="" class="nk-img-fit">
                            </div>
                        </div>
                        <div>
                            <div class="nk-box-1">
                                <img src="<?php echo WEB_IMAGES ?>/l-e-sa-w.png" alt="" class="nk-img-fit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Group -->

        <!-- START: Brand -->
        <div class="bg-white" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-xs-center">
                        <div class="nk-gap-4 mt-9"></div>
                        <h2 class="display-4">Brand</h2>
                        <div class="nk-gap mnt-5"></div>
                        <p>Brussels Airlines is the Belgian airline that offers the widest choice of flights to and from the capital of Europe, Brussels Airport. The company has more than 3,500 employees and 50 aircraft operating some 300 flights daily. Brussels Airlines is owned by SN Airholding and is backed up by more than 90 years of aviation experience.
                        </p>
                        <img src="<?php echo WEB_IMAGES ?>/signature.png" alt="" class="nk-img-fit">
                        <div class="nk-gap-4 mt-25"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Brand -->


        <!-- START: Group -->
        <div class="nk-box bg-dark-1 text-white">
            <div class="container">
                <div class="nk-carousel-2 nk-carousel-x4 nk-carousel-no-margin nk-carousel-all-visible">
                    <div class="nk-carousel-inner">
                        <div>
                            <div class="nk-box-1">
                                <img src="<?php echo WEB_IMAGES ?>/logo-airbus-w.png" alt="" class="nk-img-fit">
                            </div>
                        </div>
                        <div>
                            <div class="nk-box-1">
                                <img src="<?php echo WEB_IMAGES ?>/logo-sukhoi-w.png" alt="" class="nk-img-fit">
                            </div>
                        </div>
                        <div>
                            <div class="nk-box-1">
                                <img src="<?php echo WEB_IMAGES ?>/logo-embraer-w.png" alt="" class="nk-img-fit">
                            </div>
                        </div>
                        <div>
                            <div class="nk-box-1">
                                <img src="<?php echo WEB_IMAGES ?>/logo-boeing-w.png" alt="" class="nk-img-fit">
                            </div>
                        </div>
                        <div>
                            <div class="nk-box-1">
                                <img src="<?php echo WEB_IMAGES ?>/logo-bae-w.png" alt="" class="nk-img-fit">
                            </div>
                        </div>
                        <div>
                            <div class="nk-box-1">
                                <img src="<?php echo WEB_IMAGES ?>/logo-avro-w.png" alt="" class="nk-img-fit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Group -->



        <!-- START: Destinations -->
        <div class="nk-box bg-white" id="projects">
            <div class="nk-gap-4 mt-5"></div>

            <h2 class="text-xs-center display-4">Travelling alone?</h2>

            <div class="nk-gap mnt-6"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-xs-center">Book now a flight just in one click to one of our most prized destinations with cancellation insurance.
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-gap-2 mt-12"></div>
            <div class="container">
            <div class="nk-portfolio-list nk-isotope nk-isotope-3-cols">


                <div class="nk-isotope-item" data-filter="">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="detail.php?destination=athens" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('<?php echo WEB_IMAGES ?>/athens-bw.png');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Athens</h2>
                                <div class="portfolio-item-category">Greece</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-isotope-item" data-filter="">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="detail.php?destination=barcelona" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('<?php echo WEB_IMAGES ?>/barcelona-bw.png');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Barcelona</h2>
                                <div class="portfolio-item-category">Spain</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-isotope-item" data-filter="">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="detail.php?destination=ibiza" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('<?php echo WEB_IMAGES ?>/ibiza-bw.png');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Ibiza</h2>
                                <div class="portfolio-item-category">Spain</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-isotope-item" data-filter="">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="detail.php?destination=lisbon" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('<?php echo WEB_IMAGES ?>/lisbon-bw.png');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Lisbon</h2>
                                <div class="portfolio-item-category">Portugal</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-isotope-item" data-filter="">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="detail.php?destination=london" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('<?php echo WEB_IMAGES ?>/london-bw.png');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">London</h2>
                                <div class="portfolio-item-category">United Kingdom</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-isotope-item" data-filter="">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="detail.php?destination=newyork" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('<?php echo WEB_IMAGES ?>/newyork-bw.png');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">New York</h2>
                                <div class="portfolio-item-category">United States</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-isotope-item" data-filter="">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="detail.php?destination=roma" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('<?php echo WEB_IMAGES ?>/roma-bw.png');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Roma</h2>
                                <div class="portfolio-item-category">Italy</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-isotope-item" data-filter="">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="detail.php?destination=toronto" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('<?php echo WEB_IMAGES ?>/toronto-bw.png');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Toronto</h2>
                                <div class="portfolio-item-category">Canada</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-isotope-item" data-filter="">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="detail.php?destination=venice" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('<?php echo WEB_IMAGES ?>/venice-bw.png');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Venice</h2>
                                <div class="portfolio-item-category">Italy</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
            <div class="nk-gap-4 mt-15"></div>
        </div>
        <!-- END: Destinations -->


        <!-- START: Partners -->
        <div class="bg-white">
            <div class="container">
                <div class="nk-carousel-2 nk-carousel-x4 nk-carousel-no-margin nk-carousel-all-visible">
                    <center><h2 class="nk-subtitle text-black">Partner Airlines</h2></center>
                    <div class="nk-carousel-inner">
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-adria-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-aegean-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-airbaltic-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-aircanada-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-airmalta-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-austrian-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-bmiregional-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-croatia-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-egyptair-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-estonian-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-etihad-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-hainan-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-jetairways-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-malmoaviation-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-royalairmaroc-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-rwandair-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-singapore-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-swiss-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-taag-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-tapportugal-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-tarom-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-thai-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-uia-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="<?php echo WEB_IMAGES ?>/logo-united-b.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Partners -->


        <!--START: Footer-->
        <?php include("footer.tpl.php");?>
        <!-- END: Footer -->

    </div>



</body>

</html>
