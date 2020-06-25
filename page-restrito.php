<?php
/**
 * 
 * Template Name: Pagina Restrita
 */
 
 // checa se o usuário pode acessar esta página
 checkUser();

 get_header();
?>
<style>
body,
section {
    background: rgba(29, 29, 33) !important;
}

.logo-light {
    margin: 0px auto;
    text-align: center;
    display: block;
}
</style>
<section id="gallery">
    <div>
        <a href="<?=get_home_url();?>">
            <img src="#" srcset="<?=THEME?>/style/images/logo.png 1x, <?=THEME?>/style/images/logo@2x.png 2x" class="logo-light" alt="" />
        </a>
        <div class="inner">
            <div class="container">
                <h3 class="section-title py-0 "><?= get_the_title(); ?></h3>
                <div class="titulo-areas"></div>
            </div>
            <div class="divide30 mt-5"></div>
            <div id="slide-portfolio" class="image-grid col3">
                <div class="items-wrapper">
                    <div class="row" style="margin:0;">
                        <?php foreach (getGaleria(get_field('select-galeria')) as $galeria): ?>
                        <div class=" col-md-2 px-0 px-0 back-negro">
                            <a class="cbp-caption fancybox-media" href="<?=$galeria['imagem']['sizes']['medium_large']?>">
                                <figure class="icon-overlay light-over">
                                    <div class="caption bottom-right cpp">
                                        <div class="title">
                                            <p style="margin:0">
                                                <?=$galeria['data']?>
                                            </p>
                                            <h3 class="main-title layer" style="color:white">
                                                <?=$galeria['texto']?>
                                            </h3>
                                        </div>
                                    </div>
                                    <img src="<?=$galeria['imagem']['sizes']['medium_large']?>" alt="<?=$galeria['texto']?>" />
                                </figure>
                            </a>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>