<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/main.min.css">

    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body data-themeurl="<?= get_template_directory_uri(); ?>">
    <div class="hl-mob-menu">
        <ul class="hl-mob-menu__nav col-12">
            <li class="hl-mob-menu__item"><a href="#">Home</a></li>
            <li class="hl-mob-menu__item"><a href="#">Serviços</a></li>
            <li class="hl-mob-menu__item"><a href="#">Sobre</a></li>
            <li class="hl-mob-menu__item"><a href="#">Blog</a></li>
            <li class="hl-mob-menu__item"><a href="#">Contato</a></li>
        </ul>
        <div class="justify-content-start align-items-center d-flex hl-header__btn col-12">
            <a data-fancybox="hello" data-src="#form-orcamento" href="javascript:;" class="hl-mob-menu__btn hl-btn hl-btn--white">Solicite um orçamento</a>
        </div>
    </div>

    <div id="form-orcamento" style="display: none;">
        <div class="col-12 hl-headline">
            <h2 class="title">
                Deixe seus dados
            </h2>
            <p class="subtitle">Em breve retornaremos.</p>
        </div>
        <?= do_shortcode('[contact-form-7 id="5" title="Form Orçamento"]'); ?>
    </div>

    <header class="hl-header">
        <div class="container">
            <div class="row">
                <div class="col-3 d-block d-md-none"></div>
                <h1 class="hl-header__logo col-6 col-md-4 col-lg-3"><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a>
                </h1>
                <nav class="hl-header__nav d-none d-md-flex col-md-8 col-lg-6">
                    <ul class="hl-menu">
                        <li class="hl-menu__item"><a href="#">Home</a></li>
                        <li class="hl-menu__item"><a href="#">Serviços</a></li>
                        <li class="hl-menu__item"><a href="#">Sobre</a></li>
                        <li class="hl-menu__item"><a href="#">Blog</a></li>
                        <li class="hl-menu__item"><a href="#">Contato</a></li>
                    </ul>
                </nav>
                <div class="hl-header__btn d-none d-lg-flex col-md-3">
                    <a data-fancybox data-src="#form-orcamento" href="javascript:;" class="hl-btn hl-btn--rose">Solicite um orçamento</a>
                </div>
                <div class="justify-content-end align-items-center col-3 d-flex d-md-none">
                    <div class="hl-mob-menu__trigger">

                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <main>
        <?php
        $banners = new WP_Query(array(
            'post_type' => 'banner',
            'orderby' => 'date',
            'order' => 'asc',
            'showposts' => 6,
            // 'meta_key' => 'modelo_cidade_exib',
            // 'meta_value' => $cidadeCookie,
        ));
        ?>

        <div class="hl-banner owl-carousel owl-banner">




            <?php while ($banners->have_posts()) : $banners->the_post();?>
                <div class="hl-banner__item" style="--backgroundImage: url(<?= get_the_post_thumbnail_url( '', 'full'); ?>)">
                    <div class="container">
                        <div class="hl-banner__content col-8 col-md-6">
                            <h3>
                            <?= the_title(); ?>
                            </h3>
                            <?= the_content( );?>
                        </div>
                    </div>
                    <img class="hl-banner__bg" src=<?= get_the_post_thumbnail_url( '', 'full'); ?>" alt="">
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>

       


        </div>


        <section class="hl-sections hl-servicos">

            <div class="container">
                <div class="row">
                    <div class="col-12 hl-headline">
                        <h2 class="title">
                            Confira nossos serviços
                        </h2>
                        <p class="subtitle">Garanta o melhor serviço de advocacia</p>
                    </div>

                    <div class="col-12 hl-servicos__grid owl-carousel owl-servicos">
                        <li class="item">
                            <figure class="thumbnail"> <img src="<?= get_template_directory_uri(); ?>/uploads/serv-01.png" alt=""></figure>
                            <h3 class="title">Consultoria</h3>
                            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s.</p>
                            <a class="link" href="">Saiba Mais</a>
                        </li>
                        <li class="item">
                            <figure class="thumbnail"> <img src="<?= get_template_directory_uri(); ?>/uploads/serv-01.png" alt=""></figure>
                            <h3 class="title">Consultoria</h3>
                            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s.</p>
                            <a class="link" href="">Saiba Mais</a>
                        </li>
                        <li class="item">
                            <figure class="thumbnail"> <img src="<?= get_template_directory_uri(); ?>/uploads/serv-01.png" alt=""></figure>
                            <h3 class="title">Consultoria</h3>
                            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s.</p>
                            <a class="link" href="">Saiba Mais</a>
                        </li>
                    </div>
                </div>
            </div>
        </section>
        <section class="hl-sections hl-dif">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 hl-dif__content">
                        <div class="hl-dif__text">
                            <h3>
                                Nossos Diferenciais
                            </h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <ul class='mb-4'>
                                <li>
                                    Rápido atendimento
                                </li>
                                <li>
                                    Assistência de excelência
                                </li>
                                <li>
                                    Respeitamos os prazos
                                </li>
                                <li>
                                    Conhecimento
                                </li>
                            </ul>
                        </div>

                    </div>
                    <figure class="col-12 col-lg-6 hl-dif__image"><img src="<?= get_template_directory_uri(); ?>/uploads/dif.png" alt=""></figure>



                </div>
            </div>
        </section>
        <section class="hl-sections hl-dif hl-dif--reverse">
            <div class="container">
                <div class="row">
                    <figure class="col-12 col-lg-6 hl-dif__image"><img src="<?= get_template_directory_uri(); ?>/uploads/dif-02.png" alt=""></figure>
                    <div class="col-12 col-lg-6 hl-dif__content">
                        <div class="hl-dif__text">
                            <h3>
                                Entregando excelência em cada atendimento
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.</p>
                            <a class='mb-4' href="#">Saiba mais</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="hl-sections hl-video">
            <div class="container">
                <div class="col-12 hl-headline hl-headline--white">
                    <h2 class="title">
                        Hublife
                    </h2>
                    <p class="subtitle">Confira o nosso vídeo institucional</p>
                </div>
                <figure class="thumb">
                    <img src="<?= get_template_directory_uri(); ?>/uploads/video.png" alt="">
                    <a data-fancybox="" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn"></a>
                </figure>
            </div>
        </section>
        <section class="hl-sections hl-blog-front">
            <div class="container">
                <div class="col-12 hl-headline">
                    <h2 class="title">
                        Blog
                    </h2>
                </div>
                <ul class="col-12 hl-blog-front__grid">
                <?php
        $blog = new WP_Query(array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'asc',
            'showposts' => 3,
            // 'meta_key' => 'modelo_cidade_exib',
            // 'meta_value' => $cidadeCookie,
        ));
        ?>

     


            <?php while ($blog->have_posts()) : $blog->the_post();?>
              

                <li class="item hl-blog-card">
                        <figure class="thumbnail">
                            <img src="<?= get_the_post_thumbnail_url( '', 'medium'); ?>" alt="">
                        </figure>
                        <h3 class="title">
                        <?= the_title(); ?>
                        </h3>
                        <div class="preview">
                        <?= the_content( );?>
                        </div>
                        <a href="#" class="link">
                      
                            Saiba mais
                        </a>
                    </li>

            <?php endwhile;
            wp_reset_postdata(); ?>





                </ul>
                <div class="d-flex align-items-center justify-content-center col-12">
                    <a href="#" class="mt-0 mt-md-4 hl-btn hl-btn--bold hl-blog-front__cta">Ver Todos</a>
                </div>
            </div>
        </section>

        <section class="hl-sections hl-mapa">
            <div id="map-leaflet" style="height: 37.5rem;">
            </div>
        </section>
    </main>

    <footer class="hl-sections hl-footer">
        <div class="container">
            <div class="row">
                <div class="mb-4 d-flex flex-column align-items-center align-items-md-start justify-content-center col-12 col-md-4 hl-footer__address">
                    <div class="wrap">
                        <p>
                            Av. Washington Soares, 4431, José de Alencar
                        </p>
                        <p>
                            Fortaleza - CE, 60822-225
                        </p>
                    </div>
                </div>
                <div class="mb-4 d-flex flex-column align-items-center justify-content-center col-12 col-md-4 hl-footer__phone">
                    <div class="wrap">
                        <p>
                            Contato
                        </p>

                        <p>
                            <a href="tel:+55(85) 9 9999-9999">(85) 9 9999-9999</a>
                        </p>
                    </div>
                </div>
                <div class="mb-4 d-flex align-items-center justify-content-center justify-content-md-end col-12 col-md-4 hl-footer__social">

                    <ul class="list">
                        <li class="item">
                            <a href="#" class="link">
                                <i class="fa fa-facebook icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="link">
                                <i class="fa fa-instagram icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="link">
                                <i class="fa fa-linkedin icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <hr class="col-12">
                <div class="d-flex col-6">
                    <h1 class="hl-footer__logo"><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/logo-w.png" alt=""></a>
                    </h1>
                </div>
                <div class="d-flex justify-content-end col-6">
                    <h1 class="hl-footer__logo"><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/atratis-logo.png" alt=""></a>
                    </h1>
                </div>
            </div>
        </div>

    </footer>

    <?php wp_footer(); ?>
    <script src="<?= get_template_directory_uri(); ?>/assets/js/main.min.js">
    </script>
</body>

</html>