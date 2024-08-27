<?php

require "Profile.php";

$profile = new Profile(
    "Cariño",
    "Marcus Jeremy",
    "Mallari"
);

$profile->setEmail('marcus@carino.ph');
$profile->setAddress('Angeles University Foundation, Angeles City, Pampanga, 2009');
$profile->setFavoriteQuote ('May we get what we want and never what we deserved!')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile: <?php echo $profile->getCompleteName(); ?></title>
</head>
<body>
    <h1><?php echo $profile->getCompleteName(); ?></h1>
    <h2><?php echo $profile->getEmail();?></h2>
    <h2><?php echo $profile->getAddress();?></h2>
    <p>
        <?php echo $profile->getFavoriteQuote(); ?>
    </p>
</body>
</html>