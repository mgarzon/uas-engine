<!doctype html>
<?php require_view("layout/html_head") ?>
<body> 
  <?php require_view('layout/obsolete'); ?>
  <div class="container">
    <?php require_view(g("route")); ?>	
  </div>
  <?php require_view('google_analytics'); ?>	
  <?php require_view('layout/js'); ?>
</body> 
</html>