<?php
  require 'config.php';
  require 'database.php';
  $g_title = BLOG_NAME . ' - New Post';
  $g_page = 'create';
 require 'header.php';
 require 'nav.php';
 

?>
<div id="all_blogs">
  <form action="process_post.php" method="post">
    <fieldset>
      <legend>Post an Account</legend>
      <p>
        <label for="title">Name</label>
        <input name="title" id="title" />
      </p>
      <p>
        <label for="content">Description</label>
        <textarea name="content" id="content"></textarea>
      </p>
      <p>
        <input type="submit" name="command" value="Post" />
      </p>
    </fieldset>
  </form>
</div>
<?php
  require 'footer.php';
?>