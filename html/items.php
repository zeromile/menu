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


/*
 * $_GET is a global variable available on the server that contains an
 * associative array of variables passed in the url
 */
$catcode=$_GET['catcode'];

// this creates a new array with the 'items' within the sub array named in $catcode
$category=$menu[$catcode]['items'];

// this checks to see if subcatcode has been set
// subcatcode will come in through the url if
// the link was generated from a menu items with subcategories
if(!isset($_GET['subcatcode']))
    // so, if subcatcode is NOT set then we should assume that this page
    // was called from a category that has no subcategories

    foreach($category as $item) {
            echo '<h2>Item name: '.$item["name"].'</h2>';
            echo '<p>Item image: '.$item["image"].'</p>';

}else{
    // so, if subcatcode IS set then we should assume that this page
    // was called from a category that has subcategories

    // this grabs the subcatcode
    $subcatcode=$_GET['subcatcode'];

    // this creates a new array base on the items inside of the subcatcode inside of subcategory inside catcode
    $category=$menu[$catcode]['subcategory'][$subcatcode]['items'];

    foreach($category as $cat) {
        echo '<h2>Sub Category name: '.$cat["name"].'</h2>';
        echo '<p>Category image: '.$cat["image"].'</p>';
    }

}

// this is useful for showing the array in a formatted list
/*
    echo "<pre>";
    print_r($category);
    echo "</pre>";
*/

?>
</body>
</html>