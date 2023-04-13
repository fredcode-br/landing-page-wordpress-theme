<?php 
    //Template Name: Home
?> 
    <?php get_header(); ?>   
    <section id="home">
        <div class="container d-flex justify-content-between align-items-center h-100">
            <div class="home-download col-6 d-flex justify-content-center flex-column text-light">
                <h1>Lorem ipsum</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                     Alias architecto dolor corporis! Doloremque rerum nulla
                      consequatur accusamus.
                </p>
                <div class="home-buttons d-flex gap-3 pt-4">
                    <div class="dowload-play-store">
                        <a href="/" class="d-flex align-items-center text-decoration-none text-dark h-100">
                            <img src="<?php echo get_theme_root_uri();?>/landingpage/images/icons/google-play.svg" alt="dowload via play store">
                            <div class="button-description ps-1">
                                <h3>Download</h3>
                                <p>Via Play Store</p>
                            </div>
                        </a>
                    </div>
                    <div class="dowload-apk">
                        <a href="/" class="d-flex align-items-center text-decoration-none text-light h-100">
                            <img src="<?php echo get_theme_root_uri();?>/landingpage/images/icons/apk.svg" alt="dowload arquivo apk">
                            <div class="button-description ps-1">
                                <h3>Download</h3>
                                <p>Arquivo APK</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="home-image col-6 d-flex flex-column justify-content-end align-items-end h-100">
                <img src="<?php echo get_theme_root_uri();?>/landingpage/images/phone_home.png" alt="" >
            </div>
        </div>
    </section>
    <?php get_footer(); ?>