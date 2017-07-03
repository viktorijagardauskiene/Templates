<?php 

session_start();

$title = "Puslapis";
$content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$templates = ["lightyellow", "green", "orange", "pink"];

if(isset($_GET['username'])) {
	$title = "Cia lankosi ".$_GET['username']; 
	$_SESSION['user'] = $_GET['username'];
} elseif (isset($_SESSION['user'])) {
	$title = "Cia lankosi ".$_SESSION['user']; 
}



if (isset($_GET['t'])) { // uzkrovus puslapi rodo klaida nes nera jokios "t" reiksme, todel patikrinam ar uzkrovus puslapi buvo pasirinkta kokia reiksme, jei ne tada naudoja default pirma masyvo reiksme
$template_name = $_GET['t']; // template_selector/<select> name yra "t"
$_SESSION['session_template'] = $_GET['t']; // sesijai priduodam reiksme ta kuria pirmiausia pasirinksim spalva, ir ji isliks tol kol isjungsim narsykle pvz: vaikstant e-shope islieka prekes krepselyje, o i duombaze eina tik tada kai paspaudi pirkti, kitaip info nera saugoma
} else if (isset($_SESSION['session_template'])) {
	$template_name = $_SESSION['session_template']; 
} else {
	$template_name = $templates[0];
}


include 'sablonai/' . $template_name . '.php';

 
?>