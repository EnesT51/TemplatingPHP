<!-- jouw HTML met de inhoud over onderwerp 1 komt hier... -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>China</title>
</head>
<body>

    <main>

        <section id="LandDescription">
            <h1>Hunan: Fenghuang</h1>
            <?php

                $page = $_GET['page'];
                if($page == 'China'){
                    
                    echo '<img id=China src=images/China.png alt= photo of a place in Fenghuang>';

                }
            ?>
            <p>Fenghuang lies 430 kilometers west of Changsha, the capital of Hunan Province.<br>
                His dwellings on stilts are sure to seduce lovers of Chinese literature.<br>
                Every year, armies of young hikers flock to the ancient city of Fenghuang (whose name literally means “Phoenix”)<br> 
                to immerse themselves in the cultural riches of the Miao and Tujia peoples.
                There are also many who come here to pay tribute to the famous Chinese writer Shen Congwen (沈从文), whose novel The Border City is set in this ancient city, which was founded about 1,300 years ago.<br>
                Fenghuang has preserved a large number of ancient buildings: the city has about 200 buildings, as well as twenty streets and a dozen alleys dating back to the Ming Dynasty. Long-distance buses depart four times a day from Changsha West Bus Terminal to Fenghuang Bus Terminal (130 yuan per person).<br> 
                The trip takes about four hours.</p>
        </section>

    </main>
    
</body>
</html>