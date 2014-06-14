
<?php $title = $key_pl['key_pl_name'] ?>

<?php ob_start() ?>
    <h1><?php echo $key_pl['key_pl_name'] ?></h1>
<pre>
<?php var_export($key_pl); ?>
</pre>
<?php $content = ob_get_clean() ?>


<?php require(TEMPLATES_DIR . '/layout.php'); ?>