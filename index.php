<?php

  $dbHost = 'localhost';
  $dbName = 'cms';
  $dbUser = 'cmsadmin';
  $dbPass = 'sesame';

  $connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

  if(mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
  }

  $sql = "SELECT * FROM article ORDER BY publishedAt";

  $results = mysqli_query($connection, $sql);

  if($results === false) {
    echo mysqli_error($connection);
  } else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS</title>
  </head>
  <body>
    <header>
      <h1>CMS</h1>
    </header>
    <main>
      <?php if(empty($articles)):?>
        <p>No articles found!</p>
      <?php else:?>
        <ul>
          <?php foreach($articles as $article) : ?>
            <li>
              <article>
                <h2><?= $article['title'];?></h2>
                <p><?= $article['content'];?></p>
              </article>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif;?>
    </main>
  </body>
</html>
