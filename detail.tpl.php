<?php require 'header.tpl.php' ?>

<body>

    <header class="nk-header nk-header-opaque">

        <!--START: Navbar-->
        <?php include("navbar.tpl.php");?>
        <!-- END: Navbar -->

    </header>

    <div class="nk-main">

        <form method="post" action="detail.php">
        <input type="hidden" name="detail" value="1" />
        <div class="container">

            <div class="nk-portfolio-single">
                <h1 class="nk-portfolio-title display-4">Passenger <?php echo $travellerNum + 1 ?> / <?php echo $bookingConf->getPassengers() ?></h1>
                <div class="row vertical-gap">
                    <div class="col-lg-8">
                        <div class="nk-portfolio-info">
                            <div class="nk-portfolio-text">
                                <input type="hidden" name="passenger_num" value="<?php echo $travellerNum ?>" />
                                <p>
                                    Fisrt name
                                    <input
                                            type='text'
                                            name='passenger_firstname'
                                            placeholder='Passenger firstname'
                                            value="<?php echo isset($traveller) ? $traveller->getFirstname() : '' ?>"
                                            required
                                    />
                                    <?php if (isset($errorFirstname)): ?>
                                        <em role="alert" class="alert alert-warning"><?php echo $errorFirstname; ?></em>
                                    <?php endif; ?>
                                </p>
                                <p>
                                    Last name
                                    <input
                                            type='text'
                                            name='passenger_lastname'
                                            placeholder='Passenger lastname'
                                            value="<?php echo isset($traveller) ? $traveller->getLastname() : '' ?>"
                                            required
                                    />
                                    <?php if (isset($errorLastname)): ?>
                                        <em role="alert" class="alert alert-warning"><?php echo $errorLastname; ?></em>
                                    <?php endif; ?>
                                </p>
                                <p>
                                    Age
                                    <input
                                            type='number'
                                            min='1'
                                            max='120'
                                            name='passenger_age'
                                            value="<?php echo isset($traveller) ? $traveller->getAge() : '' ?>"
                                            required
                                    />
                                </p>
                                <?php if (isset($errorAge)): ?>
                                    <em role="alert" class="alert alert-warning"><?php echo $errorAge; ?></em>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <table class="nk-portfolio-details">
                            <tr>
                                <td>
                                    <strong>Destination:</strong>
                                </td>
                                <td><?php echo $bookingConf->getDestination(); ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Passengers:</strong>
                                </td>
                                <td><?php echo $bookingConf->getPassengers(); ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Cancellation insurance:</strong>
                                </td>
                                <td><?php echo $bookingConf->getInsurance() ? 'yes' : 'no' ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="nk-gap-4 mt-14"></div>
            </div>
        </div>


        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <div class="container">
                <button class="btn" type="button" onclick="location.href='/'">Previous page</button>
                <button class="btn" type="button" onclick="location.href='cancel.php'">Cancelling the reservation</button>
                <button type="submit" class="btn">Next step</span></button>
            </div>
        </div>
        <!-- END: Pagination -->

        </form>

        <!--START: Footer-->
        <?php require "footer.tpl.php"; ?>
        <!-- END: Footer -->


    </div>


    <!-- START: Scripts -->
    <script src="<?php echo WEB_JS ?>/combined.js"></script>
    <!-- END: Scripts -->


</body>

</html>
