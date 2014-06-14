<?php $title = 'List of key_pl' ?>
<?php ob_start() ?>
    <h1>Ключи платные</h1>
<table border="1">
    <tr>
       <th>№</th>
       <th>ЄДРПОУ</th>
       <th>Наименование</th>
       <th>Дата подачи пакета док-в</th>
       <th>Дата получения </br>плательщи-ком сертиф.</th>
       <th>Дата выдачи ПО и ключей</th>
       <th>Телефон</th>
    </tr>
<?php  foreach ($key_pls as $id => $key_pl) { ?>
       <tr>
       <td> <?php echo $key_pl['id'];            ?> </td>
   <td> <?php echo $key_pl['kod'];     ?> </td>
   <td> <?php echo $key_pl['name'];?> </td>
   <td> <?php echo $key_pl['date_surrender'];  ?> </td>
   <td> <?php echo $key_pl['date_start'];?> </td>
   <td> <?php echo $key_pl['date_po'];     ?> </td>
   <td> <?php echo $key_pl['telephone'];?> </td>
   </tr>
   <?php } ?>
</table>
   
<?php $content = ob_get_clean() ?>

<?php require(TEMPLATES_DIR . '/layout.php'); ?>
