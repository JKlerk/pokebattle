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
	<div class="mr-20">	
		<div class="bg-green rounded-t"><p class="text-center text-white my-auto" style="font-size: small;">60/<?php echo $pikachu->health; ?></p></div>
		<div class="p-5 bg-grey-lightest border rounded-b shadow leading-tight">
			<p>Name: <?php echo $pikachu->name; ?></p>
			<p>Energytype: <span class="text-<?php echo $pikachu->color ?>-dark"><?php echo $pikachu->energytype; ?></span></p>
			<p>Hitpoints: <?php echo $pikachu->hitpoints; ?></p>
			<p>Health: <?php echo $pikachu->health; ?></p>
			<p>Weakness: <span class="text-orange-dark"><?php echo $pikachu->weakness->name; ?></span></p>
			<p>Resistance: <span class="text-grey-dark"><?php echo $pikachu->resistance->name; ?></span></p>
		</div>
	</div>
	<div>  
		<div class="bg-green rounded-t"><p class="text-center text-white my-auto" style="font-size: small;">60/<?php echo $charmeleon->health; ?></p></div>
		<div class="p-5 bg-grey-lightest border rounded-b shadow leading-tight">
			<p>Name: <?php echo $charmeleon->name; ?></p>
			<p>Energytype: <span class="text-<?php echo $charmeleon->color ?>-dark"><?php echo $charmeleon->energytype; ?></span></p>
			<p>Hitpoints: <?php echo $charmeleon->hitpoints; ?></p>
			<p>Health: <?php echo $charmeleon->health; ?></p>
			<p>Weakness: <span class="text-blue-dark"><?php echo $charmeleon->weakness->name; ?></span></p>
			<p>Resistance: <span class="text-yellow-dark"><?php echo $charmeleon->resistance->name; ?></span></p>
		</div>
	</div>
</div>
<div class="mt-20">
	<div class="flex justify-center">
		<div class="bg-grey-dark rounded-t w-1/2 shadow text-white text-center p-2">
			<p>Textarea</p>
		</div>
	</div>
	<div class="flex justify-center">
		<div class="bg-white rounded-b shadow p-4 w-1/2 border leading-normal">	
			<p><?php echo $pikachu->attack($pikachu->attacks[0], $charmeleon); ?></p>
			<p><?php echo $charmeleon->attack($charmeleon->attacks[0], $pikachu); ?></p>
		</div>
	</div>
</div>
</body>






