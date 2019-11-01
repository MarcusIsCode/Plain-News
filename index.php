<?php

require __DIR__ . "/data.php"


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
    <title></title>
</head>

<body>



    <?php

    // sorting by date for each category:
    /*
-$articleSience
-$articleCulture 
-$articleSport 
-$articleTech
-$articleDevelopers 
*/
    usort($articleSience, 'sortMetod');
    usort($articleCulture, 'sortMetod');
    usort($articleTech, 'sortMetod');
    usort($articleSport, 'sortMetod');
    usort($articleDevelopers, 'sortMetod');

    ?>
    <main>
        <nav>
            <!--the id's is for script -->
            <h1> Latest <span id="Topic"> sience </span>news</h1>
            <div class="navBtns">
                <a id="si">Sience</a>
                <a id="cu">Culture</a>
                <a id="sp">Sport</a>
                <a id="te">Tech</a>
                <a id="de">Developers</a>
            </div>
        </nav>

        <?php for ($i = 0; $i < count($authors); $i++) : ?>
            <?php if ($i === 0) : ?>


                <!--$articleSience -->
                <div class="article-box">
                    <?php for ($y = 0; $y < count($articleSience); $y++) : ?>

                        <div class="article <?php echo addingstyle($i)  ?>">

                            <?php echo addContent($articleSience, $authors, $y, 0); ?>
                        </div>
                    <?php endfor ?>
                </div>
                <!--$articleCulture -->

                <div class="article-box">
                <?php elseif ($i === 1) : ?>
                    <?php for ($y = 0; $y < count($articleCulture); $y++) : ?>
                        <div class="article <?php echo addingstyle($i)  ?>">
                            <?php echo addContent($articleCulture, $authors, $y, 1); ?>
                        </div>
                    <?php endfor ?>
                </div>
                <!--$articleSport -->

                <div class="article-box">

                <?php elseif ($i === 2) : ?>
                    <?php for ($y = 0; $y < count($articleSport); $y++) : ?>

                        <div class="article <?php echo addingstyle($i)  ?>">
                            <?php echo addContent($articleSport, $authors, $y, 2); ?>
                        </div>

                    <?php endfor ?>
                </div>

                <!--$articleTech -->
                <div class="article-box">


                <?php elseif ($i === 3) : ?>
                    <?php for ($y = 0; $y < count($articleTech); $y++) : ?>
                        <div class="article <?php echo addingstyle($i)  ?>">
                            <?php echo addContent($articleTech, $authors, $y, 3); ?>
                        </div>
                    <?php endfor ?>
                </div>

                <!--$articleDevelopers  -->

                <div class="article-box">


                <?php elseif ($i === 4) : ?>
                    <?php for ($y = 0; $y < count($articleDevelopers); $y++) : ?>
                        <div class="article <?php echo addingstyle($i)  ?>">
                            <?php echo addContent($articleDevelopers, $authors, $y, 4); ?>
                        </div>
                    <?php endfor ?>
                </div>
            <?php endif; ?>


        <?php endfor; ?>

    </main>
    <?php
    ?>
<script src="script.js"></script>

</body>

</html>