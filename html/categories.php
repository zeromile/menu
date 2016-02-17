<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

/*
 * 'require' is a php function that will import an external file, one time,
 * and then caches it for use in other php files when using require
 */

require 'data.php';

if(!isset($_GET['catcode']))
{
    foreach($menu as $key=>$cat) {
        if( $cat['type'] == 'singlecategory'){
            echo '<h2>Category name: '.$cat["name"].'</h2>';
            echo '<p>Category image: '.$cat["image"].'</p>';
            echo '<p>Link to <a href="items.php?catcode='.$key.'">items</a></p>';
        }
       if( $cat['type'] == 'subcategory'){
            echo '<h2>Category name: '.$cat["name"].'</h2>';
            echo '<p>Category image: '.$cat["image"].'</p>';
            echo '<p>Link to <a href="categories.php?catcode='.$key.'">sub categories</a></p>';
        }
    }
} else {
    $catcode=$_GET['catcode'];
    $category=$menu[$catcode]['subcategory'];

    foreach($category as $key=>$cat) {
            echo '<h2>Sub Category name: '.$cat["name"].'</h2>';
            echo '<p>Category image: '.$cat["image"].'</p>';
            echo '<p>Link to <a href="items.php?catcode='.$catcode.'&subcatcode='.$key.'">items</a></p>';
        }

}

?>

</body>
</html>