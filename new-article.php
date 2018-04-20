<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'includes/database.php';
    $title = $_POST['title'];
    $content = $_POST['content'];
    $publishedAt = $_POST['publishedAt'];
    $sql = "INSERT INTO article VALUES('','$title','$content','$publishedAt')";
    $result = mysqli_query($connection,$sql);
    if($result === false) {
      echo mysqli_error($connection);
    } else {
      $id = mysqli_insert_id($connection);
      echo "Inserted record with id: $id";
    }
  }
?>
<?php require 'includes/header.php'; ?>
<h2>New Article</h2>
<form method="POST">
  <div>
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
  </div>
  <div>
    <label for="content">Content</label>
    <textarea name="content" id="content" cols="40" rows="4"></textarea>
  </div>
  <div>
    <label for="publishedAt"></label>
    <input type="datetime-local" name="publishedAt" id="publishedAt">
  </div>
  <button>Add</button>
</form>
<?php require 'includes/footer.php'; ?>