<!-- START: Scripts -->
<script src="<?php echo WEB_JS ?>/combined.js"></script>
<!-- END: Scripts -->

<!--START: Footer-->
<footer class="nk-footer">
    <div class="nk-footer-cont">
        <div class="container text-xs-center">
            <div class="nk-footer-social">
                <ul>
                    <li><a href="https://twitter.com/FlyingBrussels"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/brusselsairlines"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/flyingbrussels/"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="nk-footer-text">
                <p>© 2017 Brussels Airlines • Registration number 0400853488 • Headquarter 100-102, Avenue des Saisons, Boîte 30, 1050 Bruxelles, Belgique</p>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->

<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><?php echo isset($error) ? $error : '' ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>