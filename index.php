<?php
  function get_random_image($dir = 'images')
  {
    $images = glob($dir . '/*.jpg');
    $image = array_rand($images);
    return $images[$image];
  }

  $route =  explode('/', $_SERVER['REQUEST_URI']);

  $imageWidth = intval($route[1]);
  $imageHeight = intval($route[2]);

  $image = get_random_image();
  $imageType = 'image/jpeg';

  if ($imageWidth > 0 && $imageHeight > 0) {
    $convertedImage = '//' . $_SERVER['SERVER_NAME'] . '/timthumb.php?src=' . $image . '&w=' . $imageWidth . '&h=' . $imageHeight;
  } else {
    $convertedImage = '//' . $_SERVER['SERVER_NAME'] . '/timthumb.php?src=' . $image . '&w=' . rand(100,400) . '&h=' . rand(100,400);
  }

  header('Content-Type:' . $imageType);
  readfile($convertedImage);
?>
