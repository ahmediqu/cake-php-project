<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CEDP | <?= $this->fetch('title') ?></title>

    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/images/favicon.ico" type="image/x-icon">

	<!-- Bootstrap -->
<link href="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>


<!-- waves.css -->
<link href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/pages/waves/css/waves.min.css" rel="stylesheet"/>
<link href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/icon/feather/css/feather.css" rel="stylesheet"/>


<!-- themify-icons line icon -->
<link href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/icon/themify-icons/themify-icons.css" rel="stylesheet"/>

<!-- ico font -->
<link href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/icon/icofont/css/icofont.css" rel="stylesheet"/>

<!-- Font Awesome -->
<link href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/icon/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>

<!-- Style.css -->

<link href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/css/style.css" rel="stylesheet"/>
<link href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/css/pages.css" rel="stylesheet"/>

      <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>css/memis_style.css">
      <!-- sweet alert framework -->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/sweetalert/css/sweetalert.css">


  </head>

  <body themebg-pattern="theme1">
  <div id="wait">

  </div>
    <?php echo $this->element('content'); ?>
  </body>
</html>
