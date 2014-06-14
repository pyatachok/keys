<?php $title = 'List of Companies' ?>

<?php ob_start() ?>
    <h1>Ключи бесплатные</h1>
<table border="1">
    <tr>
       <th>№</th>
       <th>ЄДРПОУ</th>
       <th>Наименование</th>
       <th>Тип плательщика</th>
       <th>Дата подачи документов</th>
       <th>Дата передачи документов</th>
       <th>Дата начала действия ключа</th>
       <th>Налог</th>
       <th>Телефон</th>
       <th>Брак</th>
    </tr>
<?php  foreach ($key_bezplt as $id => $key_bezpl) { ?>
       <tr>
       <td> <?php echo $key_bezpl['id'];            ?> </td>
   <td> <?php echo $key_bezpl['kod'];  ?> </td>
   <td> <?php echo $key_bezpl['name'];     ?> </td>
   <td> <?php echo $key_bezpl['sing'];?> </td>
   <td> <?php echo $key_bezpl['date_surrender'];        ?> </td>
   <td> <?php echo $key_bezpl['date_supply'];        ?> </td>
   <td> <?php echo $key_bezpl['date_start'];        ?> </td>
   <td> <?php echo $key_bezpl['nalog'];        ?> </td>
   <td> <?php echo $key_bezpl['telephone'] ; ?> </td>
   <td> <?php echo $key_bezpl['bad'];         ?> </td>
   
       </tr>
   <?php } ?>
</table>
   
<?php $content = ob_get_clean() ?>

<?php require(TEMPLATES_DIR . '/layout.php'); ?>
