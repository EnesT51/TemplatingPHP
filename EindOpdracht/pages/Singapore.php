<?php
?>
<!-- jouw HTML met de inhoud over onderwerp 3 komt hier... -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singapore</title>
</head>
<body>

    <main>

        <Section id="LandDescription">
            <h1>Gardens by the Bay</h1>
            <?php
            $page = $_GET['page'];
            if($page == 'Singapore'){

                echo '<img src=images/Singapore.png>';
                
            }
            ?>
            <p>Without a doubt, Gardens by the bay tops the list of most beautiful places in Singapore.<br>
            This beautiful futuristic park locates in Central Singapore around Marina Bay.<br>
            Certainly, this marvelous creation is a fascinating blend of nature with modern Singapore technology.<br>
            Gardens by the bay spread in a vast area, spanning 101 hectares. Among the standout features in this park are the famous Supertree structures.<br> 
            The view of 50 m tall, 12 huge supertrees will astonish you. These huge artificial trees continue to amaze the visitors with their tall, elegant view.<br>
            There is an impressive skywalk over the gardens to have a close look at these supertrees.<br>
            These supertrees give a fantastic view under the illumination at night. The best time to visit the Gardens by the bay is evening.<br>
            The light show starts at 7.45 pm and 8.45 pm every day of the week and lasts for 15 minutes.<br>
            The superb sight of colorful Supertrees, where lights are changing in time to a musical soundtrack can enchant all the visitors.<br>
            Without a doubt, this is the most wonderful experience you can get in Singapore and it will give you an everlasting golden memory.<br>
            </p>
        </Section>

        
        
    </main>
    
</body>
</html>