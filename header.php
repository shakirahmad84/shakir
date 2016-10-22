<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta <?php bloginfo( 'charset' ); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!--Header-->
    <header class="header" >
        <div class="header-top" style="background: url('<?php header_image(); ?>') no-repeat center center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logo">
                            <h1 class="animated slideInLeft">Shakir Ahmad</h1>
                            <h2 class="animated slideInRight">Full Stack Wordpress Developer</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>