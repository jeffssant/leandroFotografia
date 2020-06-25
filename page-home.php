<?php 
/**
 * Template Name: Home
 */
get_header(); 
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");

if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
    echo "";
} else {
    ?>
<section id="home">
    <div class="tp-fullscreen-container revolution">
        <div class="tp-fullscreen">
            <ul>
                <?php foreach (get_field('slider') as $slider): ?>
                <?php  if ($slider['tipo'] == 'Imagem'): ?>
                <li data-transition="fade"> <img src="<?=$slider['imagem']?>" alt="<?=$slider['titulo']?>"
                        data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
                    <h1 class="tp-caption large text-center sfb" data-x="650" data-y="500" data-speed="900"
                        data-start="800" data-endspeed="100" data-easing="Sine.easeOut" style="z-index: 2;">
                        <?=$slider['titulo']?>
                    </h1>
                    <div class="tp-caption medium sfr" data-x="900" data-y="580" data-speed="900" data-start="800"
                        data-easing="Sine.easeOut">
                        <?=$slider['texto']?>
                    </div>
                </li>
                <?php elseif ($slider['tipo'] == 'Video'): ?>
                <li data-transition="fade"> 
                    <img src="<?=$slider['imagem']?>" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />
                    <div class="tp-caption large text-center sfb" data-x="center" data-y="293" data-speed="900"
                        data-start="800" data-endspeed="100" data-easing="Sine.easeOut" style="z-index: 2;">
                        <?=$slider['titulo']?>
                    </div>
                    <div class="tp-caption medium text-center sfb" data-x="center" data-y="387" data-speed="900"
                        data-start="1500" data-endspeed="100" data-easing="Sine.easeOut" style="z-index: 2;">
                        <?=$slider['texto']?>
                    </div>
                    <div class="tp-caption tp-fade fadeout fullscreenvideo" data-x="0" data-y="0" data-speed="1000"
                        data-start="1100" data-easing="Power4.easeOut" data-elementdelay="0.01"
                        data-endelementdelay="0.1" data-endspeed="1500" data-endeasing="Power4.easeIn"
                        data-autoplay="true" data-autoplayonlyfirsttime="false" data-nextslideatend="true"
                        data-dottedoverlay="twoxtwo" data-volume="mute" data-forceCover="1" data-aspectratio="16:9"
                        data-forcerewind="on" style="z-index: 1;">
                        <video class="" preload="none" width="100%" height="100%" poster='<?=$slider['imagem']?>'>
                            <source src='<?=$slider['video']?>' type='video/mp4' />
                        </video>
                    </div>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
</section>
<?php } ?>
<section id="about">
    <div class="dark-wrapper">
        <div class="container-fluid inner">

            <div class="row">
                <div class="col-sm-6">
                    <figure><img src="<?=get_field('foto_perfil')?>" alt=""></figure>
                </div>
                <div class="col-sm-6">
                    <h3 class="section-title py-0 ">What I Do</h3>
                    <div class="titulo-areas"></div>

                    <div style="padding-right: 30px;"><?=get_field('sobre') ?></div>
                    <?php /*
                    <ul class="social" style="display:none">
                        <div class="panel-group" id="accordion">
                            <div class="row">
                                <div class="panel panel-default panel-Two col-lg-4">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle link-Two"
                                                data-parent="#accordion" href="#collapseTwo"> Equipamentos </a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="panel panel-default panel-Three col-lg-4">
                                    <div class="panel-heading ">
                                        <h4 class="panel-title"> <a data-toggle="collapse"
                                                class="panel-toggle link-Three" data-parent="#accordion"
                                                href="#collapseThree"> Certificados </a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="panel panel-default panel-Four col-lg-4">

                                    <div class="panel-heading ">
                                        <h4 class="panel-title"> <a data-toggle="collapse"
                                                class="panel-toggle link-Four" data-parent="#accordion"
                                                href="#collapseFour"> Dicas de Leitura </a>
                                        </h4>
                                    </div>

                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?=get_field('equipamentos') ?>
                </div>
            </div>
            <div class="panel panel-default">
                <div id="collapseThree" class="panel-collapse collapse tres">
                    <div class="panel-body">
                        <?=get_field('certificados') ?>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div id="collapseFour" class="panel-collapse collapse quatro">
                    <div class="panel-body">
                        <?=get_field('dicas_leitura') ?>
                    </div>
                </div>
            </div>
        </div>
        </ul>

    </div> */ ?>
    <div class="col-md-12 py-0">
        <ul class="progress-list">
            <?php foreach (get_field('skills') as $skill): ?>
            <li>
                <p>
                    <?=$skill['nome']?> <em>
                        <?=$skill['porcentagem']?></em></p>
                <div class="progress plain">
                    <div class="bar sonny_progressbar" data-width="<?=getPorcentagem($skill['porcentagem'])*3?>"></div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    </div>
    <div class="clearfix"></div>
    </div>
    </div>



</section>

<section id="services">
    <div class="dark-wrapper">
        <div class="container-fluid">
            <div>
                <h3 class="section-title text-left py-0 text-center ">New Projects</h3>
                <div class="titulo-areas" style="margin:auto"></div>
            </div>
            <div class="divide10 mt-4"></div>
            <div class="row" id="galleryP">
                <?php foreach (get_field('para-elas') as $gal) : ?>

                <img alt="<?=$gal['titulo']." - ".$gal['texto']?>" src="<?=$gal['imagem']['sizes']['medium_large']?>"
                    data-image="<?=$gal['imagem']['sizes']['medium_large']?>"
                    data-description="<?=$gal['titulo']."-".$gal['texto']?>" style="display:none">


                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>





<!-- /.hidden -->

<section id="gallery">
    <div class="dark-wrapper ">
        <div class="inner">
            <div class="container">
                <h3 class="section-title text-center py-0">Portfolio</h3>
                <div class="titulo-areas " style="margin:auto"></div>
            </div>
            <div id="slide-portfolio" class="image-grid col3">
                <div class="items-wrapper">
                    <div class="row" id="portifolioG" style="margin:0;">
                        <?php foreach (getGaleria(get_field('select-galeria')) as $galeria): ?>
                        <img alt="<?=$galeria['data']." - ".$galeria['texto']?>"
                            src="<?=$galeria['imagem']['sizes']['medium_large']?>"
                            data-image="<?=$galeria['imagem']['sizes']['medium_large']?>"
                            data-description="<?=$galeria['data']."-".$galeria['texto']?>" style="display:none">


                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="parallax parallax3 inverse-wrapper customers" style="display:none">
    <div class="container inner text-center">

        <div class="testimonials owl-carousel thin">
            <?php /* foreach (getDepoimentos() as $dep): ?>
            <div class="item">
                <blockquote>
                    <p>
                        <?=$dep['depoimento']?> <small class="meta">
                            <?=$dep['feito']?></small></p>
                </blockquote>
            </div>
            <?php endforeach; */ ?>
        </div>
    </div>
</div>


<section id="contact">
    <div class="dark-wrapper">
        <div class="container">
            <div>
                <h3 class="section-title text-left  py-0">Contact</h3>
                <div class="titulo-areas"></div>
                <div class="row">
                    <div class="col-lg-6">

                        <div class="form-container">
                            <?= do_shortcode('[contact-form-7 id="84" title="Contact form 1"]')?>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <p class="text-left">
                            <?=get_field('contato_texto')?>
                        </p>
                        <ul class="contact-info text-left mt-5">
                            <li><i class="icon-location"></i>
                                <?=get_field('endereco')?>
                            </li>
                            <li><i class="icon-phone"></i>
                                <?=get_field('telefone')?>
                            </li>
                            <li><i class="icon-mail"></i><a href="<?=get_field('email')?>">
                                    <?=get_field('email')?></a> </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<div class="slide-portfolio-overlay"></div>
</main>

<script>
    window.onload = function () {
        $(".onepage a").first().hide("fast");
    }
</script>
<!-- Modal -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Access restrict area</h4>
            </div>
            <div class="modal-body">
                <form id="restrctForm" class="form" action="">
                    <div id="alertUser" class="alert alert-danger" role="alert">
                    Unauthorized user!
                    </div>
                    <input type="hidden" name="id" value="<?=get_the_ID();?>">
                    <div class="form-group">
                        <label for=""> Login </label>
                        <input class="form-control" type="text" name="login">
                    </div>
                    <div class="form-group">
                        <label for=""> Password </label>
                        <input class="form-control" type="password" name="password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="areaRestrita()" class="btn btn-primary">Access</button>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
    jQuery(document).ready(function () {

        jQuery("#galleryP").unitegallery({
            tile_overlay_opacity: 0.3,
            tile_overlay_color: "#3B5B5B",
            tile_textpanel_bg_color: "#3B5B5B",
            tile_show_link_icon: true,
            tile_image_effect_type: "sepia",
            tile_image_effect_reverse: true,
            tile_enable_textpanel: true,
            lightbox_textpanel_title_color: "e5e5e5",
            tiles_max_columns: 3,
            gallery_width: "100%",
            tiles_align: "center",
            tiles_space_between_cols: 20

        });

        jQuery("#portifolioG").unitegallery({
            tile_overlay_opacity: 0.3,
            tile_overlay_color: "#3B5B5B",
            tile_textpanel_bg_color: "#3B5B5B",
            tile_show_link_icon: true,
            tile_image_effect_type: "sepia",
            tile_image_effect_reverse: true,
            tile_enable_textpanel: true,
            lightbox_textpanel_title_color: "e5e5e5",
            tiles_max_columns: 4,
            gallery_width: "100%",
            tiles_align: "center",
            tiles_space_between_cols: 0

        });

    });
</script>