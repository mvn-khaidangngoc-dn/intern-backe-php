<!-- # views/posts/index.php -->

<?php

echo '<ul>';
foreach ($posts as $post) {
  echo '<li>
  <a href="index.php?Controller=Posts&action=showPost&id=' . $post->id . '">' . $post->title . '</a>
  </li>';
}
echo '</ul>';

echo '<a href="index.php?Controller=Posts&action=create" >Tạo mới posts</a>'
?>
