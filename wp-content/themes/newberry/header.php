<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= get_bloginfo('stylesheet_url') ?>">
    
</head>
<body>
    <div id="main">
        <header>
            <section class="container-full">
                <div class="container d-flex justify-content-end">
                <?php wp_nav_menu( array( 'theme_location' => 'social' ) );  ?>
                </div>
            </section>
            <section class="container-full">
                <div class="container">
                    <a href="<?= get_bloginfo('url');?>"><img src="https://via.placeholder.com/120x60/000000/ffffff?text=Brand" alt=""></a>
                    <?php wp_nav_menu( array( 'theme_location' => 'main' ) );  ?>
                </div>
            </section>
        
        
        </header>