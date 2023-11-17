<!DOCTYPE html>
<html>
    <head>
        <title>Lab classes</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../static/styles/common.css">
        <link rel="stylesheet" href="../static/styles/portfolio.css">
    </head>

    <body>
        <?php include("../header.php"); ?>

        <div class="container-fluid" style="padding: 0px;">
            <div class="col-md-12">
                <div class="row">
                    <div id="portfolio-content-list">
                        <?php 
                        $dirs = scandir(".");

                        foreach ($dirs as $d) {
                            if ($d == "." || $d == ".." || $d == "index.php") {
                                continue;
                            }

                            $desc_file = fopen($d . "/desc.txt", 'r');
                            $content = fread($desc_file, filesize($d . "/desc.txt"));
                            $content = str_replace("\n", "<br>", $content);
                            fclose($desc_file);

                            echo "<a href='/nb535/portfolio/$d'><h2>$d</h2><p>$content</p></a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include("../footer.php"); ?>
    </body>
</html>