<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!--headern med diverse element-->

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<meta name="description" content="<?php //bloginfo("description"); ?>"-->
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<!--body med flera wrappers-->


<body>
<div id="headerbild">
<a href="<?= get_home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/IMAGES/PROFILE/LOGOTYP.svg" class="logo" alt="logotyp av Kalrstads Vandringshem & Restaurang" /></a>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="bannerbild med träd" class="banner">
</div>
<div class="wrapperkropp">
<a href="<?= get_home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/IMAGES/PROFILE/LOGOTYP.svg" class="logo2" alt="logotyp av Kalrstads Vandringshem & Restaurang" /></a>
    <!--sidhuvud med navigation & logotyp & sökruta med knapp-->
    <header>
      <div class="topnav">
        <a href="#home" class="active"></a>
        <!--Navigation links (hidden by default) -->
        <div id="myLinks">
         
          <?php wp_nav_menu(array('menu' => 'main-menu')); ?>
        </div>
        <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"> MENY</i>
        </a>
      </div>



    </header>
    <!-- Filnamn: <?php //global $template; echo basename($template); 
                  ?> -->

    <!--wp print main title-->
    <h1 id="currentPage"> <?php
                          if (have_posts()) {
                            the_title();
                          }
                          ?></h1>
    <div class="wrapper1">
      <section class="container1-1">
        <article id="kategori">
          <nav class="nav2">
            <!--wp print main menu-->
            <?php wp_nav_menu(array('menu' => 'main-menu')); ?>

          </nav>



        </article>
      </section>


    </div>



    <?php   
    
//***** MAIN CHAT BOX CODE *****/
//Path to the OpenAI PHP library
require_once 'vendor/autoload.php'; 
//Include the config.php file
require 'config.php';

//Start the session
//HAS TO BE AFTER HEADER HTML/WP CODE
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //Save client to variable
    $client = OpenAI::client(API_KEY);
    //Save input to variable
    $input = $_POST['question'];
  
    //Send the request to the API
    $response = $client->chat()->create([
      'model' => 'gpt-4',
      'max_tokens' => 300, //less tokens
      'messages' => [
          ['role' => 'user', 'content' => $input],
      ],
    ]);
  
    //Clear the variable
    $output = '';
  
    //Loop through the response
    foreach ($response->choices as $result) {
    $result->index; // 0
    $result->message->role; // user
    $output = $result->message->content; //content of the message
    $result->finishReason; // 'stop'
  }
  
  //Print the output
  echo "<p id='api2'> " . $output . " </p>";
}
?>
