<?php

function bksmk_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus([
    'main-menu' => 'Menu Utama',
  ]);
}

function bksmk_enqueue_assets() {
  wp_enqueue_style('tailwind', 'https://cdn.tailwindcss.com');
  wp_enqueue_style('main-style', get_stylesheet_uri());
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', [], false, true);
}

function bksmk_widgets_init() {
  register_sidebar([
    'name' => 'Agenda Sidebar',
    'id' => 'agenda-sidebar',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="font-bold">',
    'after_title' => '</h5>',
  ]);
}

add_action('after_setup_theme', 'bksmk_theme_setup');
add_action('wp_enqueue_scripts', 'bksmk_enqueue_assets');
add_action('widgets_init', 'bksmk_widgets_init');
