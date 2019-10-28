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
    <?php if ($i === 0) : ?>
        <?php  for($y =0; $y < 5; $y++):?>  
            <?php //if():?>
                <div class=" article <?php echo addingstyle($i) ?>">
                
                <?php echo addContent($articleSience, $authors,$y); ?>                    
        
            </div>
            <?php //endif; ?>
        <?php endfor ?>
    <?php endif; ?>


<?php endfor; ?>


</div>







<body>
</body>

</html>