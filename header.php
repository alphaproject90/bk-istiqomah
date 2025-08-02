<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="bg-blue-700 text-white shadow">
    <div class="container mx-auto flex justify-between items-center p-4">
      <div class="flex items-center gap-4">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="w-10 h-10" alt="Logo">
        <h1 class="text-xl font-bold"><?php bloginfo('name'); ?></h1>
      </div>
      <nav class="space-x-4">
        <?php wp_nav_menu(['theme_location' => 'main-menu', 'container' => false, 'menu_class' => 'space-x-4']); ?>
      </nav>
    </div>
  </header>
