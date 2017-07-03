<!DOCTYPE html>
<html>
<head>
    <title><?= $title; ?></title> <!--arba <?php echo $title; ?> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

<body style="background-color: pink">

<div class="container">
    <div class="row">
        <div class="col-md-12"><h1><?= $title; ?></h1></div>
    </div>
    <div class="row">
        <div class="col-md-8"><?= $content; ?></div>
        <div class="col-md-4">
            <?php 

                include "inc/template_selector.php"; 
                include "inc/username.php";
                include "inc/variables.php";

            ?>
                
        </div>
    </div>
    <div class="row">
        <div class="col-md-12"><?php include "inc/footer.php" ?></div> <!-- iterpiame atskira footer file kuriame bus reikiamas kodas -->
    </div>

</div>


</body>
</html>