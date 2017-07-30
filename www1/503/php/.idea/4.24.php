<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/4/24
 * Time: 9:18
 */
echo "我是祖宗";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    HTML
    <ul>
        <?php for($i=1;$i<10;$i++): ?>
                <?php echo "<li>$i 我是祖宗他祖宗</li>"; ?>
        <?php endfor ?>

    </ul>
    <?php
        for($i=1;$i<11;$i++){
            switch ($i){
                case $i :$i;break;
            }
        }
    ?>
</body>
</html>

<style>
    ul{
        background: #eee;
    }
    li{
        background: red;
    }
</style>
<script>
    console.log(1)
    document.querySelector('ul').onmouseover=function(){
        this.style.background='blue';
        console.log(2)
    }
</script>