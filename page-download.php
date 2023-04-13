<?php 
    //Template Name: Download
?>    
    <?php get_header(); ?>
    <section id="download">
        <div class="container">
            <h2 class="text-center pt-5">Lorem ipsum</h2>
            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            
            <div class="downlaod-content d-flex pt-5">
                <div class="dowload-image col-6 d-flex align-items-center h-100 ps-5 pb-5">
                    <img src="<?php echo get_theme_root_uri();?>/landingpage/images/phone_download.png" alt="tela aplicativo" >
                </div>


                <div class="home-download col-6 d-flex justify-content-center flex-column">
                    <h1>Lorem ipsum</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                         Alias architecto dolor corporis! Doloremque rerum nulla
                          consequatur accusamus.
                    </p>
                    <div class="download-buttons d-flex gap-3 pt-4">
                        <div class="dowload-play-store">
                            <a href="/" class="d-flex align-items-center text-decoration-none text-light pe-1 h-100">
                                <img src="<?php echo get_theme_root_uri();?>/landingpage/images/icons/google-play.svg" alt="dowload via play store">
                                <div class="button-description ps-1">
                                    <h3>Download</h3>
                                    <p>Via Play Store</p>
                                </div>
                            </a>
                        </div>
                        <div class="dowload-apk">
                            <a href="/" class="d-flex align-items-center text-decoration-none text-light pe-1 h-100">
                                <img src="<?php echo get_theme_root_uri();?>/landingpage/images/icons/apk.svg" alt="dowload arquivo apk">
                                <div class="button-description ps-1">
                                    <h3>Download</h3>
                                    <p>Arquivo APK</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>