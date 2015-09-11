<?php
/*
| Meteora main html template
*/?>

<!doctype html>
<html class="meteora-api" lang="en">
  <head profile="<?php print $grddl_profile ?>">
    <?php print $head; ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php print $head_title; ?></title>

    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>

  <body class="<?php print $classes; ?>" <?php print $attributes; ?>>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
  </body>

</html>