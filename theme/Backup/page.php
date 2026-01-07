<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frau Eule</title>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" rel="stylesheet">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/Tutkulog.png" type="image/png"
    sizes="256x256">
    <?php wp_head(); ?>
  </head>
  <body class="colorcomponent">

    <?php include 'navbar2.php'; ?>

    <?php echo $post->post_content; ?>

    <?php include 'footerbar.php'; ?>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
