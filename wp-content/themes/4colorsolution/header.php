<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
 
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!-- <link rel="pingback" href="<?php //bloginfo('pingback_url'); ?>" /> -->
<?php wp_head(); ?>
<!-- <link href="base.css" rel="stylesheet"> 
<title>4ColorSolution</title> -->
</head>

<body>
	<div id="wrapper">
    	<div id="top">
            <div id="header">
                    <?php wp_page_menu('exclude=19'); ?>
            </div>
        </div>
        <div id="logo_row">
                <div id="logo">
                    <a href="http://www.4csolution.at"><img src="<?php bloginfo('template_url' ); ?>/4sc_logo.png" id="logo_pic" alt="Logo" /></a>
                </div>
            </div>
        
	<!-- <div id="header">
    	<nav id="navigation">
        	<ul>
            	<li><a href="#">Agentur</a></li>
                <li><a href="#">Referenzen</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
        </nav>
    </div> -->

