
<ul>
<?php foreach ($db->query('SELECT * FROM articles') as $post):  ?>


    <li><?= $post->titre; ?></li>


<?php endforeach;     ?>

<?php   var_dump($db); 
die(); ?>

</ul>