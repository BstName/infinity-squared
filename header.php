<!DOCTYPE html>
<?php
// Start YOURLS engine
require_once( dirname(__FILE__).'/includes/load-yourls.php' );

// Ask for Infinity Squared settings
include( dirname(__FILE__).'/public/config.php' );
class ISQ { public static $general = array(), $links = array(), $social = array(); }

// Load translations
function isq_load_textdomain() {
    yourls_load_custom_textdomain( 'isq_translation', $site . '/public/languages' );
    $site = YOURLS_SITE;
}
isq_load_textdomain();

// Error definitions
$genericerror = '<h2 class="error">' . yourls__( 'An error has occured :(', 'isq_translation') . '</h2>';
if ( $message = $url. yourls__( 'added to database', 'isq_translation') ) {
		$error = '<h2>' . yourls__( 'URL shortened successfully', 'isq_translation') . '</h2><p>' . yourls__( 'View the details of your short URL below.', 'isq_translation') . '</p>';
	} elseif ( $message = $url. yourls__( 'already exists in database', 'isq_translation') ) {
		$error = $genericerror . '<p class="error">' . yourls__( 'This URL already exists in this database. This website does not allow a single URL to have multiple short links.', 'isq_translation') . '</p>';
	} elseif ( $message = yourls__( 'Short URL', 'isq_translation') . $url . yourls__( 'already exists in database or is reserved', 'isq_translation') ) {
		$error = $genericerror . '<p class="error">' . yourls__( 'This short URL already exists in this database or is reserved. This website does not allow a single URL to have multiple short links. It could\'ve also been reserved by the admin.', 'isq_translation') . '</p>';
	} elseif ( $message = yourls__( 'Missing URL input', 'isq_translation') ) {
		$error = $genericerror . '<p class="error">' . yourls__( 'You did not enter the URL you want to shorten or the server lost it. Please try again.', 'isq_translation') . '</p>';
	} elseif ( $message = yourls__( 'This URL is a short URL', 'isq_translation') ) {
		$error = $genericerror . '<p class="error">' . yourls__( 'You cannot shorten a short URL!', 'isq_translation') . '</p>';
	}
?>

<html>
<head>
<title><?php echo ISQ::$general['name']; ?></title> <!-- Site title defined in theme settings -->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<?php if (!empty(ISQ::$general['clipboard'])) { ?>
<style type="text/css">
	.output label {
		width: 20%;
	}

	.output input {
		width: 60%
	}

	.output button {
		float: right;
	}

	.output button.active {
		color:#013F6D;
	}
</style>
<?php } ?>
<link rel="stylesheet" href="<?php echo YOURLS_SITE; ?>/public/formalize.css" /> <!-- Formalize CSS -->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.1.1/basic/jquery.qtip.min.css" /><!-- qTip CSS -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,italic,bold,bolditalic"><!-- Ubuntu from Google Web Fonts -->
<link rel="stylesheet" href="<?php echo YOURLS_SITE; ?>/public/style.css" /><!-- Theme CSS -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> <!-- jQuery -->
<script src="<?php echo YOURLS_SITE; ?>/public/js/jquery.formalize.min.js"></script><!-- Formalize JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.1.1/basic/jquery.qtip.min.js"></script><!-- qTip JS -->
<?php if (!empty(ISQ::$social['plus'])) { ?>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: "en-GB"}
</script>
<?php } ?>
<?php if (!empty(ISQ::$general['clipboard'])) { ?>
<script type="text/javascript" src="js/jquery.zclip.min.js"></script>
<script>
$(document).ready(function(){
    $('button#long-copy').zclip({
        path:'js/ZeroClipboard.swf',
        copy:function(){return $('input#long-copy').val();},
        afterCopy: function() {
        	$("button#long-copy").html('<?php yourls_e( 'Copied!', 'isq_translation'); ?>');
        }
    });
    $('button#short-copy').zclip({
        path:'js/ZeroClipboard.swf',
        copy:function(){return $('input#short-copy').val();},
        afterCopy: function() {
        	$("button#short-copy").html('<?php yourls_e( 'Copied!', 'isq_translation'); ?>');
        }
    });
    $('button#stats-copy').zclip({
        path:'js/ZeroClipboard.swf',
        copy:function(){return $('input#stats-copy').val();},
        afterCopy: function() {
        	$("button#stats-copy").html('<?php yourls_e( 'Copied!', 'isq_translation'); ?>');
        }
    });
});
</script>
<style type="text/css">
	.output label {
		width: 20%;
	}

	.output input {
		width: 60%
	}

	.output button {
		float: right;
	}

	.output button.active {
		color:#013F6D;
	}
</style>
<?php } ?>
<script>
$(document).ready(function()
{
	$('a.bookmarklet').qtip({
	});
	$('label').qtip({
	});
});
</script>
</head>

<body>

<div id="container">
<header>
	<h1><a href="<?php echo YOURLS_SITE; ?>"><?php echo ISQ::$general['name']; ?></a></h1>
	<ul class="menu">
		<li><a href="<?php echo YOURLS_SITE; ?>"><?php echo ISQ::$general['name']; ?></a></li>
		<li><a href="<?php echo ISQ::$links['url_1']; ?>"><?php echo ISQ::$links['name_1']; ?></a></li>
		<li><a href="<?php echo ISQ::$links['url_2']; ?>"><?php echo ISQ::$links['name_2']; ?></a></li>
		<li><a href="<?php echo ISQ::$links['url_3']; ?>"><?php echo ISQ::$links['name_3']; ?></a></li>
		<li><a href="<?php echo ISQ::$links['url_4']; ?>"><?php echo ISQ::$links['name_4']; ?></a></li>
		<li><a href="<?php echo ISQ::$links['url_5']; ?>"><?php echo ISQ::$links['name_5']; ?></a></li>
		<li><a href="<?php echo ISQ::$links['url_6']; ?>"><?php echo ISQ::$links['name_6']; ?></a></li>
		<li><a href="<?php echo ISQ::$links['url_7']; ?>"><?php echo ISQ::$links['name_7']; ?></a></li>
		<li><a href="<?php echo ISQ::$links['url_8']; ?>"><?php echo ISQ::$links['name_8']; ?></a></li>
		<li><a href="<?php echo ISQ::$links['url_9']; ?>"><?php echo ISQ::$links['name_9']; ?></a></li>
		<li><a href="<?php echo ISQ::$links['url_10']; ?>"><?php echo ISQ::$links['name_10']; ?></a></li>
	</ul>
</header>

<div class="paragraph">
