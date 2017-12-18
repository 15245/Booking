<?php require 'header.tpl.php' ?>

<body>

    <header class="nk-header nk-header-opaque">

        <!--START: Navbar-->
        <?php include("navbar.tpl.php");?>
        <!-- END: Navbar -->

    </header>


    <div class="nk-main">


        <div class="container">
            <div class="nk-portfolio-single">

                <div class="nk-gap-4 mb-14"></div>
                <h1 class="nk-portfolio-title display-4">Bookings' confirmation</h1>
                <div class="row vertical-gap">
                    <div class="col-lg-8">
                        <div class="nk-portfolio-info">
                            <div class="nk-portfolio-text">
                                <p>Your request has been processed.</p>
                                <p>Please pay the sum of <?php echo $booking->getPrice($bookingConf->getInsurance()) ?> euros to the account 000-000000-00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-gap-4 mt-14"></div>
            </div>
        </div>

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <div class="container">
                <a class="nk-icon nk-pagination-center" href="/"><span class="pe-7s-angle-cancel"></span>Return to the main page</a>
            </div>
        </div>
        <!-- END: Pagination -->


        <!--START: Footer-->
        <?php include("footer.tpl.php");?>
        <!-- END: Footer -->


    </div>


    <!-- START: Scripts -->

    <script src="<?php echo WEB_JS ?>/combined.js"></script>
    
    <!-- END: Scripts -->

</body>

</html>