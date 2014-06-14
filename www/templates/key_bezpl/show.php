
<?php $title = $key_bezpl['name'] ?>

<?php ob_start() ?>
    <h1><?php echo $keyl_bezpl['name'] ?></h1>
<pre>
<?php var_export($key_bezpl); ?>
</pre>
<?php $content = ob_get_clean() ?>


<?php require(TEMPLATES_DIR . '/layout.php'); ?>
