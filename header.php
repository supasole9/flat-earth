<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title><?php bloginfo("title"); ?></title>
     <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
     <link href="<?php echo get_bloginfo( 'template_directory' );?>/grid.css" rel="stylesheet">
     <?php wp_head(); ?>
</head>
<body>
     <header>
          <div class="container">
               <nav>
                    <div class="logo">
                         <h2><?php bloginfo('name');?></h2>
                    </div>
                    <?php wp_nav_menu();?>
               </nav>
          </div>
     </header>
