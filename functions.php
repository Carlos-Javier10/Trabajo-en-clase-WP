<?php
    wp_register( 'tailwind', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );