<?php 
    //Template Name: Contato
?>    
    <?php get_header(); ?>
    <section id="contact">
        <div class="container pb-5">
            <h2 class="text-center pt-5">Lorem ipsum</h2>
            <div class="contact-content w-100 d-flex justify-content-between pt-5">
                <div class="contact-description col-4">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem Ipsum is simply dummy text
                         of the printing and typesetting
                          industry. Lorem Ipsum has been
                           the industry's standard dummy
                            text ever since. 
                    </p>
                    <div class="d-flex gap-2 pt-3">
                        <p style="font-weight: bold;">Email:</p>  
                        <span>gmail@gmail.com</span>
                    </div>
                    
                    <ul class="contact-icons d-flex list-unstyled text-light m-0 pt-4 pb-5 ">
                        <li class="m-0 px-2"><img src="<?php echo get_theme_root_uri();?>/landingpage/images/icons/FacebookD.svg" alt="icone facebook"></li>
                        <li class="m-0 px-2"><img src="<?php echo get_theme_root_uri();?>/landingpage/images/icons/InstagramD.svg" alt="icone facebook"></li>
                        <li class="m-0 px-2"><img src="<?php echo get_theme_root_uri();?>/landingpage/images/icons/twitterD.svg" alt="icone facebook"></li>
                    </ul>
                </div>
                <div class="contatc-form col-6 d-flex flex-column align-items-end">
                    <form name="form-contact" class="col-7">
                        <p>
                            <label for="nome">Nome</label>
                            <input type="text" id="nomeid" placeholder="Digite seu nome" required="required" name="nome" />
                        </p>
                        <p>
                            <label for="email">Email</label>
                            <input type="email" id="emailid" placeholder="fulano@mail.com" name="email" />
                        </p>
                        <p style="height: 150px; position:relative; ">
                            <label for="assunto">Assunto</label>
                            <textarea placeholder="Deixe sua opnião" name="assunto" style="position: absolute;"></textarea>
                        </p>
                        <input type="submit" class="enviar" onclick="Enviar();" value="Enviar" class="contact-button" style="width: 100%;"/>
                      </form>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>