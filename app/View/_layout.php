<!DOCTYPE HTML>
<html lang="en">
    <head>
      <meta charset="UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>tinder</title>
          <link rel="stylesheet" href="<?php echo BASE_URL_COMMON ?>zunicss/css/style.min.css" type="text/css" media="all" />
          <link rel="stylesheet" href="<?php echo BASE_URL_COMMON ?>font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" media="all" />
          <link rel="stylesheet" href="<?php echo BASE_URL_COMMON ?>css/custom.css" type="text/css" media="all" />
          <?php if(isset($cssArr)){ foreach($cssArr as $cssFile){ ?>
<link rel="stylesheet" href="<?php echo BASE_URL_COMMON . $cssFile;  ?>" type="text/css" media="all" />
          <?php }} ?>
</head>
<body>

<div class="container">
   <div class="wg12<?php echo (!isset($alignLogo))? '': ' ' . $alignLogo; ?>">
        <a href="<?php echo BASE_URL; ?>">
            <img src="<?php echo BASE_URL_COMMON ?>img/logo-tinder-200x80.png" alt="logo tinder">
        </a>
    </div>
<?php echo $content->result(); ?>
</div>

<div class="expand ct_footer">
<!-- footer here -->
</div>
<!--[if lt IE 9]>
<script src="<?php echo BASE_URL_COMMON ?>js/html5shiv.min.js"></script>
<![endif]-->

<script src="<?php echo BASE_URL_COMMON ?>js/jquery.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL_COMMON ?>zunicss/js/script.min.js" type="text/javascript"></script>
<?php if(isset($jsArr)){ foreach($jsArr as $jsFile){ ?>
<script src="<?php echo BASE_URL_COMMON . $jsFile ?>" type="text/javascript"></script>
<?php }} ?>
</body>
</html>

