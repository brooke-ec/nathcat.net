<!DOCTYPE html>
<html>
    <head>
        <title>Nathan Baines</title>

        <link rel="stylesheet" href="static/css/common.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="content">
            <?php include("header.php"); ?>
            
            <!--<div class="row justify-center align-center">
                <div class="content-card">
                    <h2>Hey there!</h2>
                    <p>
                        I'm Nathan, and I just want to give you a quick welcome to
                        my website!
                    </p>
                    <p>
                        You'll find everything you need to know about me here, I hope
                        you like what you see and if you have any queries or want
                        to get in contact with me for whatever reason, you can
                        find my contact information at the <i>contact me</i> page
                        above.
                    </p>
                    <p>
                        Thanks, and again, I hope you enjoy :)
                    </p>
                </div>
            </div>-->

            <div class="column justify-center align-center" style="margin-top: 20px;">
                <img src="static/images/me.jpg" class="circle-photo">
                <h2>Nathan Baines</h2>
                <h3 style="margin-top: 0px;"><i>Programming with Passion</i></h3> 
            </div>

            <div class="content-card column justify-center align-center">
                <h2 style="width: fit-content;">My GitHub</h2>

                <div class="row justify-center align-center">
                    <img src="https://github-readme-stats.vercel.app/api?username=Nathcat&show_icons=true&theme=radical">
                </div>

                <div class="row justify-center align-center">
                    <img src="http://github-profile-summary-cards.vercel.app/api/cards/profile-details?username=Nathcat&theme=radical">
                </div>

                <div class="row justify-center align-center">
                    <img src="http://github-profile-summary-cards.vercel.app/api/cards/repos-per-language?username=Nathcat&theme=radical">
                    <img src="http://github-profile-summary-cards.vercel.app/api/cards/most-commit-language?username=Nathcat&theme=radical">
                </div>

                <div class="row justify-center align-center">
                    <img src="http://github-profile-summary-cards.vercel.app/api/cards/stats?username=Nathcat&theme=radical">
                    <img src="http://github-profile-summary-cards.vercel.app/api/cards/productive-time?username=Nathcat&theme=radical">  
                </div>
            </div>

            <?php include("footer.php"); ?>
        </div>
    </body>
</html>