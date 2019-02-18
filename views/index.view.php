<?php require 'partials/head.php' ?>

<h1>Homepage</h1>
  <ul>
    <?php foreach ($pages as $page): ?>
      <li><?= $page['title'] ?></li>
    <?php endforeach; ?>
  </ul>

<?php require 'partials/footer.php' ?>

<form action="/names" method="POST">
  <input type="text" name="name">
  <button type="submit">Submit</button>
</form>
