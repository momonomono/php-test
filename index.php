<?php
 $products = [
    ["りんご", 50, 110],
    ["みかん", 0, 80],
    ["バナナ", 30, 60],
    ["ぶどう", 5, 240]
 ];
  // 1
 function checkProductStock($array){
    foreach($array as $product){
        if($product[1] > 0){
            echo "<p>{$product[0]}は在庫はある。</p>";
        }else{
            echo "<p>{$product[0]}は在庫はない。</p>";
        } 
     }
 }
    // 2    
    function checkPrice($array){
        $expensive_product_num = 0;
        $moderate_product_num = 0;
        $cheap_product_num = 0;

        foreach($array as $product){
            if($product[2] >= 200){
                $expensive_product_num ++;
            }else if($product[2] >= 100 && $product[2] < 200){
                $moderate_product_num ++;
            }else{
                $cheap_product_num ++;
            }
        }

        echo "<p>高価な商品は{$expensive_product_num}件、中価格の商品は{$moderate_product_num}件、安価な商品は{$cheap_product_num}件あります。</p>";
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <title>Document</title>
</head>
<body>
    <?php
        checkProductStock($products);
        checkPrice($products);
    ?>
</body>
</html>