<?php

require 'walker.php';

//Фильтр от спама
add_filter('pre_comment_on_post', 'verify_spam');

// function verify_spam($commentdata) {
//  $spam_test_field = trim($_POST['comment']);
//  if(!empty($spam_test_field)) wp_die('Спаму нет!');
//  $comment_content = trim($_POST['real-comment']);
//  $_POST['comment'] = $comment_content;
//  return $commentdata;
// }


  function getSliderImages() {
    $query = new WP_Query( array( 'cat' => 34 ) );
    $images = [];
    global $post;

    foreach ($query->posts as $key => $value) {
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'post'); 
        $images[] = $thumb[0];
    }

    return $images;
  }

  function custom_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    global $post;

    if($comment->comment_parent) {
      $child = 1;
    } else {
      $child = 0;
    }


    $date = date_create($comment->comment_date);
    $date = $date->format('d.m.Y H:i');

    if($child) {
      echo '<a name="comment-' . $comment->comment_ID . '"></a><div class="article-coments-item article-coments-item-answer">
      <div class="article-coments-image">
        <img src="wp-content/themes/maou/images/coment1.jpg">
      </div>
      <div class="article-coments-right">
        <p>' . $comment->comment_author . '</p>
        <span>' . $date . '</span>
        <div class="clear"></div>
        <p>' . $comment->comment_content . '</p>
      </div>
    </div>';
  } else {
    echo '<a name="comment-' . $comment->comment_ID . '"></a><div class="article-coments-item">
    <div class="article-coments-image">
      <img src="wp-content/themes/football/images/coment1.jpg">
    </div>
    <div class="article-coments-right">
      <p>' . $comment->comment_author . '</p>
      <span>' . $date . '</span>
      <div class="clear"></div>
      <p>' . $comment->comment_content . '</p>
      <a href="' . esc_url( add_query_arg( 'replytocom', $comment->comment_ID, get_permalink( $post->ID ) ) ) . "#respond" . '"><div class="answer">Ответить</div></a>
    </div>
  </div>';

}

}


# Breadcrumb
function the_breadcrumb() {
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home').'">';
        echo 'Главная';
        echo "</a> </li> ";
        if (is_category() || is_single()) {
            echo "<li>";
            single_cat_title();
            echo "</li>";
            if (is_single()) {
                the_category(', ');
                echo "<li> ";
                the_title();
                echo "</li>";
            }
        } elseif (is_page()) {
            echo "<li>";
            echo the_title();
            echo "</li>";
        }
        elseif (is_tag()) {
            echo 'Записи с меткой "'; 
            single_tag_title();
            echo '"'; }
            elseif (is_day()) {echo "Архив за"; the_time('  jS F Y');}
            elseif (is_month()) {echo "Архив "; the_time(' F  Y');}
            elseif (is_year()) {echo "Архив за "; the_time(' Y');}
            elseif (is_author()) {echo "Архив автора";}
            elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "Архив блога";}
            elseif (is_search()) {echo "Результаты поиска";}
            elseif (is_404()) { echo '404 - Страница не найдена';}
        }
    }


//Произвольное меню
    if ( function_exists( 'register_nav_menus' ) )
    {
        register_nav_menus(
            array(
                'custom-menu'=>__('header_menu'),
                'footer-nav'=>__('footer_nav'),
                //  'footer-menu2'=>__('footer_nav2'),
                //   'footer-menu3'=>__('footer_nav3'),
                //    'footer-menu4'=>__('footer_nav4'),
                //    'footer-menu5'=>__('footer_nav5'),
                )
            );
    }

    // function custom_menu(){
    //     echo '<ul>';
    //     wp_list_pages('title_li=&');
    //     echo '</ul>';
    // }
   
    //   if ( function_exists( 'register_nav_menus' ) )
    // {
    //     register_nav_menus(
    //         array(
    //             'custom-menu'=>__('header_menu'),
    //             )
    //         );
    // }

    function header_menu(){
        echo '<ul>';
        wp_list_pages('title_li=&');
        echo '</ul>';
    }


// Регистрируем сайдбары
    if ( function_exists('register_sidebar') ) {
        
        register_sidebar(array(
            'name' => 'Правый сайдбар',
            'before_widget' => '<div id="right-sidebar">',
            'before_title' => '<h2>',
            'after_title' => '</h2><div class="text"',
            'after_widget' => ' </ul></div>'
            ));
        
        register_sidebar(array(
            'name' => 'Сайдбар в футере',
            'before_widget' => '<div class="footer-widget">',
            'before_title' => '',
            'after_title' => '',
            'after_widget' => '</div>'
            ));
        
    }
    add_theme_support( 'post-thumbnails' );
    add_theme_support('menus');

 

    function the_truncated_post($symbol_amount) {
        $filtered = strip_tags( preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))) );
        echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...';
    }

// _____form ________


    function showPostItemById($id, $item) {
        $args = [
        'p' => $id, 
        'post_type' => 'any'
        ];

        $my_posts = new WP_Query($args);

        $postItem = $my_posts->posts[0];

        $data = [];

        $data['title'] = $postItem->post_title;
        $data['content'] = $postItem->post_content;
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($postItem->ID), 'post'); 
        $data['img'] =  '<img src="' . $thumb[0] . '">';

        echo $data[$item];
    }



    function myform_action_callback() {
        global $wpdb;
        global $mail;
        $nonce=$_POST['nonce'];
        $rtr='';
        if (!wp_verify_nonce( $nonce, 'myform_action-nonce'))wp_die('{"error":"Error. Spam"}');
        $message="";
$to="nasskapetko@gmail.com"; // заменить на свою почту
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers.= "From: ".$_SERVER['SERVER_NAME']." \r\n";
$subject="Сообщение с сайта ".$_SERVER['SERVER_NAME'];
do_action('plugins_loaded');
if (!empty($_POST['name']) && !empty($_POST['mess']) && !empty($_POST['email'])){
    $message.="Имя: ".$_POST['name'];
    $message.="<br/>E-mail: ".$_POST['email'];
    $message.="<br/>Сообщение:<br/>".nl2br($_POST['mess']);
    if(wp_mail($to, $subject, $message, $headers)){
        $rtr='{"work":"Сообщение отправлено!","error":""}';
    }else{
        $rtr='{"error":"Ошибка сервера."}';
    }
}else{
    $rtr='{"error":"Все поля обязательны к заполнению!"}';
}
echo $rtr;
exit;
}
add_action('wp_ajax_nopriv_myform_send_action', 'myform_action_callback');
add_action('wp_ajax_myform_send_action', 'myform_action_callback');
function myform_stylesheet(){
    wp_enqueue_style("myform_style_templ",get_bloginfo('stylesheet_directory')."/css/styleform.css","0.1.2",true);
    wp_enqueue_script("myform_script_temp",get_bloginfo('stylesheet_directory')."/js/scriptform.js",array('jquery'),"0.1.2",true);
    wp_localize_script("myform_script_temp", "myform_Ajax", array( 'ajaxurl' => admin_url( 'admin-ajax.php' ), 'nonce' => wp_create_nonce('myform_action-nonce') ) );
}
add_action( 'wp_enqueue_scripts', 'myform_stylesheet' );
function formZak() {
    $rty='<div class="application">';
    $rty.=' <p>Подать заявку</p><p>Имя</p><input id="name" type="text" />';
    $rty.='<p> Email</p><input id="email" type="text" />';
    $rty.='<p>Комментарий</p><textarea id="mess" ></textarea>';
    $rty.='<input type="submit" onclick="myform_ajax_send(\'#name\',\'#email\',\'#mess\'); return false;" value="Отправить"/>';
    $rty.='</div>';
    return $rty;
}
add_shortcode( 'formZak', 'formZak' );
// _____form ________




?>