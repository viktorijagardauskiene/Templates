<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body style="background-color: green">

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

            ?>
                
        </div>
	</div>
	<div class="row">
		<div class="col-md-12"><?php include "inc/footer.php" ?></div> <!-- iterpiame atskira footer file kuriame bus reikiamas kodas -->
	</div>

</div>


</body>
</html>