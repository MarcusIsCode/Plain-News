<?php
/* it sshuld in include
Variables
Multiple data types
Arrays
Functions
Loops (for, while or foreach)
Concatenation
Output (echo, print etc.)


*/

require __DIR__ . "/data.php"


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>

<h1>Latest News</h1>
<?php for ($i = 0; $i < count($authors); $i++) : ?>
    <?php if($i === 0) : 
        ?>
    <?php foreach ($articleSience as $content) : ?>
        <div class=" article <?php echo addingstyle($i) ?>">
            
        <h4><?php echo authorFullName($authors, $i); ?></h4>
            <?php echo $content['title'] ?>
            <p><?php echo $content['content'] ?></p>
            <?php echo $content['likes']. " people liked this" ?>
            <?php echo $content['date'] ?>
        </div>
    <?php endforeach; ?>
    <?php endif; ?>



<?php endfor; ?>


</div>







<body>
</body>

</html>