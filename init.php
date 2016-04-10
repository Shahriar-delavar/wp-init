<?php

    // set path to wordpress wp-load.php 
    $wp_path = "wordpress/wp-load.php" 
    
    
        require_once($wp_path);


      function wpcon($x) {
      if (!isset($x)) {
      echo "Please request the post id to display ";
      }else
        if (is_numeric($x)) {
          $my_postid = $x;
          $content_post = get_post($my_postid);
          $content = $content_post->post_content;
          $content = apply_filters('the_content', $content);
          $content = str_replace(']]>', ']]&gt;', $content);
          echo $content;
        } else {
          echo "Post id must be a number";
        }
      }
      
      function wpsc($s){
            echo  do_shortcode($s);
      }

      function usetheme() {
        require_once("cms/wp-blog-header.php");
        // get_header();
        // get_footer();
                          }
