<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nova
 */

get_header();
?>



<main id="primary" class="site-main">
    <div class="banner-section-slider">
        <div class="slider-items"
            style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/banner-slider1.png')" ;>
            <div class="container">
                <div class=" banner-heading-bg">
                    <div class="sub-title">
                        <div class="line"></div>
                        <span>COMITTED TO SUCCESS
                        </span>
                    </div>
                    <div class="banner-heading">
                        <h1 class="text-white">BRANDING HAVE ANOTHER DEFINITION</h1>
                    </div>
                    <div class="default-button">
                        <a href="#">Our Services</a>
                    </div>
                </div>


            </div>



        </div>
        <div class="slider-items"
            style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/banner-slider1.png')" ;>
            <div class="container">
                <div class=" banner-heading-bg">
                    <div class="sub-title">
                        <div class="line"></div>
                        <span>COMITTED TO SUCCESS
                        </span>
                    </div>
                    <div class="banner-heading">
                        <h1 class="text-white">BRANDING HAVE ANOTHER DEFINITION</h1>
                    </div>
                    <div class="default-button">
                        <a href="#">Our Services</a>
                    </div>
                </div>


            </div>



        </div>

    </div>

    <!-- services-section -->
    <section class="services-section">
        <div class="container">
            <div class="sub-title">
                <div class="line"></div>
                <span>COMITTED TO SUCCESS
                </span>
            </div>
            <div class="section-title">
                <h2>
                    Our Best Services
                </h2>
            </div>

            <div class="services-content-flex">
                <div class="services-content">
                    <div class="services-image">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </div>
                    <h3>Strategy Planning</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid blanditiis ducimus ipsam et
                        fugit at recusandae tempore, nam quisquam quas nihil libero consectetur dicta incidunt
                        aspernatur iure ab perferendis ea?
                    </p>

                </div>
                <div class="services-content">
                    <div class="services-image">
                        <i class="fa fa-medkit" aria-hidden="true"></i>
                    </div>
                    <h3>Insurance Services</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid blanditiis ducimus ipsam et
                        fugit at recusandae tempore, nam quisquam quas nihil libero consectetur dicta incidunt
                        aspernatur iure ab perferendis ea?
                    </p>

                </div>
                <div class="services-content">
                    <div class="services-image">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </div>
                    <h3>Audit and Evaluation</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid blanditiis ducimus ipsam et
                        fugit at recusandae tempore, nam quisquam quas nihil libero consectetur dicta incidunt
                        aspernatur iure ab perferendis ea?
                    </p>

                </div>
            </div>

        </div>
    </section>

    <!-- aboutus-section -->

    <section class="aboutus-section"
        style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/about-bg.png')" ;>
        <div class="container">
            <div class="row">
                <div class="offset-lg-6 col-lg-6">
                    <div class="about-contents">
                        <div class="about-content-wrapper">
                            <h3>About Us</h3>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid blanditiis ducimus
                                ipsam
                                et
                                fugit at recusandae tempore, nam quisquam quas nihil libero consectetur dicta incidunt
                                aspernatur iure ab perferendis ea?
                            </p>

                            <ul>
                                <li>
                                    Highly Competent Profesionals
                                </li>

                                <li>
                                    Highly Competent Profesionals
                                </li>

                                <li>
                                    Highly Competent Profesionals
                                </li>
                            </ul>
                            <div class="default-button2">
                                <a href="#">Make an Appointment</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>



    </section>

    <!-- section-features -->

    <div class="features-section">
        <div class="container">
            <div class="sub-title">
                <div class="line"></div>
                <span>COMITTED TO SUCCESS
                </span>
            </div>
            <div class="section-title">
                <h2>
                    Featured Case Study
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a href="#">
                        <div class="features-wrapper">

                            <div class="features-image">
                                <img class=""
                                    src="<?php echo get_template_directory_uri(); ?>/images/banner-slider1.png" ;>
                                <div class="features-contents">
                                    <div class="sub-title">

                                        <span>Comitted To Success</span>
                                    </div>

                                    <p>Within the construction industry as
                                        their overdraft</p>
                                </div>
                            </div>

                        </div>
                    </a>


                </div>
                <div class="col-lg-6">
                    <a href="#">
                        <div class="features-wrapper odd-feature">

                            <div class="features-image">
                                <img class=""
                                    src="<?php echo get_template_directory_uri(); ?>/images/banner-slider1.png" ;>
                                <div class="features-contents">
                                    <div class="sub-title">

                                        <span>Comitted To Success</span>
                                    </div>

                                    <p>Within the construction industry as
                                        their overdraft</p>
                                </div>
                            </div>

                        </div>
                    </a>


                </div>
                <!-- <div class="col-lg-6">
                    <a href="#">
                        <div class="features-wrapper">

                            <div class="features-image">
                                <img class=""
                                    src="<?php echo get_template_directory_uri(); ?>/images/banner-slider1.png" ;>
                                <div class="features-contents">
                                    <div class="sub-title">

                                        <span>Comitted To Success</span>
                                    </div>

                                    <p>Within the construction industry as
                                        their overdraft</p>
                                </div>
                            </div>

                        </div>
                    </a>


                </div>
                <div class="col-lg-6">
                    <a href="#">
                        <div class="features-wrapper">

                            <div class="features-image">
                                <img class=""
                                    src="<?php echo get_template_directory_uri(); ?>/images/banner-slider1.png" ;>
                                <div class="features-contents">
                                    <div class="sub-title">

                                        <span>Comitted To Success</span>
                                    </div>

                                    <p>Within the construction industry as
                                        their overdraft</p>
                                </div>
                            </div>

                        </div>
                    </a>


                </div> -->

            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="default-button2">
                        <a href="#">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- mid-banner -->



    <section class="mid-banner">
        <div class="container">
            <div class="mid-banner-text" data-aos="fade-up" data-aos-duration="1000">
                <h3>HAVE YOU FALL IN LOVE WITH THIS THEME YET?</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
            </div>
            <div class="mid-banner-btn" data-aos="fade-up" data-aos-duration="1000">
                <div class=" default-button2">
                    <a href="#">call to action</a>
                    <div class="btn-hover"></div>
                </div>


            </div>

        </div>
    </section>

    <!-- team-section -->
    <div class="team-section">
        <div class="container">
            <div class="sub-title">
                <div class="line"></div>
                <span>WHO WE ARE
                </span>
            </div>
            <div class="section-title">
                <h2>Our Team
                </h2>
            </div>


            <main>



                <div class="profile">

                    <figure data-value="product owner">
                        <a href="#">
                            <img src="https://vetri-suriya.web.app/devchallenges/team-page/photo1.png" alt="">
                            <figcaption>bill mahoney</figcaption>
                        </a>

                    </figure>


                </div>

                <div class="profile">
                    <figure data-value="art director">
                        <a href="#"> <img src="https://vetri-suriya.web.app/devchallenges/team-page/photo2.png" alt="">
                            <figcaption>saba cabrera</figcaption>
                        </a>

                    </figure>
                </div>

                <div class="profile">
                    <figure data-value="tech lead">
                        <a href="#"> <img src="https://vetri-suriya.web.app/devchallenges/team-page/photo3.png" alt="">
                            <figcaption>shae le</figcaption>
                        </a>

                    </figure>
                </div>

                <div class="profile">
                    <figure data-value="ux designer">
                        <a href="#"><img src="https://vetri-suriya.web.app/devchallenges/team-page/photo4.png" alt="">
                            <figcaption>skylah lu</figcaption>
                        </a>

                    </figure>
                </div>

                <div class="profile">
                    <figure data-value="developer">
                        <a href="#"> <img src="https://vetri-suriya.web.app/devchallenges/team-page/photo5.png" alt="">
                            <figcaption>griff richards</figcaption>
                        </a>

                    </figure>
                </div>

                <div class="profile">
                    <figure data-value="developer">
                        <a href="#"> <img src="https://vetri-suriya.web.app/devchallenges/team-page/photo6.png" alt="">
                            <figcaption>stan john</figcaption>
                        </a>

                    </figure>
                </div>

            </main>
            <!-- <div class="d-flex ">
                <div class="team-members">
                    <div class="team-wrapper">
                        <div class="team-image">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/team_1.jpg" ;>
                        </div>
                        <div class="team-details">
                            <h3 class="name">NATHALIA <br> ORTELLIE</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias sit consequuntur
                                eveniet excepturi</p>
                        </div>
                    </div>
                </div>
                <div class="team-members">
                    <div class="team-wrapper">
                        <div class="team-image">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/team_1.jpg" ;>
                        </div>
                        <div class="team-details">
                            <h3 class="name">NATHALIA <br> ORTELLIE</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias sit consequuntur
                                eveniet excepturi</p>
                        </div>
                    </div>
                </div>
                <div class="team-members">
                    <div class="team-wrapper">
                        <div class="team-image">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/team_1.jpg" ;>
                        </div>
                        <div class="team-details">
                            <h3 class="name">NATHALIA <br> ORTELLIE</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias sit consequuntur
                                eveniet excepturi</p>
                        </div>
                    </div>
                </div>

            </div> -->

        </div>
    </div>

    <!-- Blogs-section -->


    <section class="posts-section">
        <div class="container">
            <div class="section-title">
                <h2>Latest Blogs
                </h2>
            </div>


            <div class="row">
                <div class="col-lg-4  col-md-6">
                    <div class="post-image">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/post_1.jpg" ;>
                    </div>

                    <div class="posts-contents">
                        <h4>Interactive Services</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem scrambled.</p>

                        <div class="default-button2">
                            <a href="#">Read More</a>

                        </div>



                    </div>

                </div>

                <div class="col-lg-4  col-md-6">
                    <div class="post-image">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/post_2.jpg" ;>
                    </div>
                    <div class="posts-contents">
                        <h4>Application Development</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem scrambled.</p>
                        <div class="default-button2">
                            <a href="#">Read More</a>

                        </div>
                    </div>

                </div>

                <div class="col-lg-4  col-md-6">
                    <div class="post-image">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/post_3.jpg" ;>
                    </div>

                    <div class="posts-contents">
                        <h4>Business Solutions</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem scrambled.</p>
                        <div class="default-button2">
                            <a href="#">Read More</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>


</main><!-- #main -->

<?php

get_footer();