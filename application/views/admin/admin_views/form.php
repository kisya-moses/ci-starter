<?php header('Content-Type:text/html; charset=UTF-8'); ?>

<?php if(isset($item->id)): ?>
  <form class="form-horizontal" action="<?php echo site_url('admin/' . $file . '/edit/' . $item->id); ?>" method="post" enctype="multipart/form-data">
<?php else: ?>
  <form class="form-horizontal" action="<?php echo site_url('admin/' . $file . '/create'); ?>" method="post" enctype="multipart/form-data">
<?php endif; ?>

<?php
echo $form_fields;
?>

  <?php if(isset($item->id)): ?>
  <input name="id" type="hidden" value="<?php echo $item->id; ?>">
  <?php endif; ?>
  <input name="form_submit" type="hidden" value="1">

</form>