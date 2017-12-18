<?php require 'header.tpl.php' ?>

<body>

    <header class="nk-header nk-header-opaque">

        <!--START: Navbar-->
        <?php include("navbar.tpl.php");?>
        <!-- END: Navbar -->

    </header>

    <div class="nk-main">

        <form method="post" action="confirmation.php">

        <div class="container">
            <div class="nk-portfolio-single">
                <div class="nk-gap-4 mb-14"></div>
                <h1 class="nk-portfolio-title display-4">Bookings' validation</h1>
                <div class="row vertical-gap">
                    <div class="col-lg-8">
                        <div class="nk-portfolio-info">
                            <div class="nk-portfolio-text">
                                <p>Nullam lobortis neque turpis, nec tempus sem pharetra at. Donec et quam, ullamcorper velit. Aliquam maximus ullamcorper ligula, at placerat dui hendrerit sed. Sed metus urna, bibendum id tortor, feugiat ipsum. Aliquam vehicula neque sit amet dolor malesuada pretium.</p>
                                <p>Curabitur tristique, felis ut mattis auctor, elit ante laoreet libero, ac lorem quam vitae libero. Suspen disse aliquet eget risus quis vehicula.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <table class="nk-portfolio-details">
                            <tr class="alert alert-primary">
                                <td>
                                    <strong>Destination:</strong><?php echo $bookingConf->getDestination(); ?>
                                </td>

                            </tr>
                            <tr class="alert alert-secondary">
                                <td>
                                    <strong>Passengers:</strong><?php echo $booking->getTravellersNumber(); ?>
                                </td>

                            </tr>
                            <?php foreach($booking->getTravellers() as $traveller) { ?>
                            <tr><td><hr></td></tr>
                            <tr>
                                <td>
                                    <strong>First name:</strong><?php echo $traveller->getFirstname() ?>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <strong>Last name:</strong><?php echo $traveller->getLastname(); ?>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <strong>Age:</strong><?php echo $traveller->getAge(); ?>
                                </td>

                            </tr>
                            <?php } // end foreach travellers ?>
                            <tr class="alert alert-info">
                                <td>
                                    <strong>Cancellation insurance:</strong>
                                </td>

                                <td><?php echo $bookingConf->getInsurance() ? 'YES' : 'NO'; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="nk-gap-4 mt-14"></div>
            </div>
        </div>

        <img class="nk-img-fit" src="<?php echo WEB_IMAGES . '/' . $bookingConf->getDestination() ;?>.jpg" style="width:100%">

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <div class="container">
                <a class="nk-pagination-prev" href="detail.php"><span class="pe-7s-angle-left"></span>Previous page</a>
                <a class="nk-icon nk-pagination-center" href="cancel.php"><span class="pe-7s-angle-cancel"></span>Cancelling the reservation</a>
                <button type="submit" class="nk-pagination-next">Confirm<span class="pe-7s-angle-right"></span></button>
            </div>
        </div>
        <!-- END: Pagination -->

        </form>

        <!--START: Footer-->
        <?php include("footer.tpl.php");?>
        <!-- END: Footer -->


    </div>


</body>

</html>