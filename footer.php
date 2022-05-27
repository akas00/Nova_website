<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nova
 */

?>

<footer id="colophon" class="site-footer">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-section-bottom-description">
                        <img class="d-block" style="width:130px;"
                            src="<?php echo get_template_directory_uri(); ?>/images/nova-logo.png" ;>
                        <p>
                            Receive updates and latest news <br> direct from simply
                        </p>
                        <span class="num">+564 <span class="accent-color">22015 142</span> </span>
                        <span class="mail"> Yourmail@gmail.com</span>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mid-footer">
                    <p>Subscribe our blogs</p>
                    <div class="input-field email-button" style="margin-bottom:10px;">
                        <input type="text">
                        <a href="#">Subcribe</a>
                    </div>
                    <p>Follow Us</p>
                    <div class="social-icons">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 quick-links">
                    <h6>Quick Links</h6>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Appointment</a></li>
                    </ul>





                </div>

            </div>

        </div>


    </div>
    <div class="footer-copyrights-section">
        <div class="container d-flex justify-content-between">
            <span> Copyrights © 2019 , Nova Consultancy , ® All Rights Reserved </span>
            <span>Design and Developed by <a href="https://younghat.com.np/">YoungHat</a></span>
        </div>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->
<script src="https://kit.fontawesome.com/e1cb2f6b47.js" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>

</html>