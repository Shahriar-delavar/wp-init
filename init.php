<?php
    // config
   $wp_path = "cms/wp-load.php";   // set path to your WP installation folder

    require_once($wp_path);

        // function to display contents of a page or post
      function wpcon($x) {
      if (!isset($x)) {
      echo "Please request the post id to display ";
      } else
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

            // function to display title of a page or post
      function wptitle($x) {
      if (!isset($x)) {
      echo "Please request the post id to display title";
      } else
        if (is_numeric($x)) {
          $my_postid = $x;
          $content_post = get_post($my_postid);
          $content = $content_post->post_title;
          $content = apply_filters('the_content', $content);
          $content = str_replace(']]>', ']]&gt;', $content);
          echo $content;
        } else {
          echo "Post id must be a number";
        }
      }

        // function to execute a short code
      function wpsc($s){
            echo  do_shortcode($s);
      }

      //fuction to get header and foother

      function usetheme() {

        require_once("cms/wp-blog-header.php");
                          }

     function usethemeheader() {
                      get_header();
                                }
        function usethemefooter() {
              get_footer();
                         }
