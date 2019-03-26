<?php

require 'classes/Pokemon.php';


$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');

?>
<head>
	<title>Pokebattle</title>
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
<div class="flex justify-center mt-20">
	<div class="mr-5 p-5 bg-grey-lightest rounded shadow">
		<p>Name: <?php echo $pikachu->name; ?></p>
		<p>Energytype: <?php echo $pikachu->energytype; ?></p>
		<p>Hitpoints: <?php echo $pikachu->hitpoints; ?></p>
		<p>Health: <?php echo $pikachu->health; ?></p>
		<p>Weakness: <?php echo $pikachu->weakness; ?></p>
		<p>Resistance: <?php echo $pikachu->resistance; ?></p>
	</div>

	<div class="p-5 bg-grey-lightest rounded shadow">
		<p>Name: <?php echo $charmeleon->name; ?></p>
		<p>Energytype: <?php echo $charmeleon->energytype; ?></p>
		<p>Hitpoints: <?php echo $charmeleon->hitpoints; ?></p>
		<p>Health: <?php echo $charmeleon->health; ?></p>
		<p>Weakness: <?php echo $charmeleon->weakness; ?></p>
		<p>Resistance: <?php echo $charmeleon->resistance; ?></p>
	</div>
</div>
</body>