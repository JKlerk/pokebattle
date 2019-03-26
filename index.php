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
		<div class="p-5 bg-grey-lightest rounded-b shadow leading-tight">
			<p>Name: <?php echo $pikachu->name; ?></p>
			<p>Energytype: <span class="text-yellow-dark"><?php echo $pikachu->energytype; ?></span></p>
			<p>Hitpoints: <?php echo $pikachu->hitpoints; ?></p>
			<p>Health: <?php echo $pikachu->health; ?></p>
			<p>Weakness: <span class="text-orange-dark"><?php echo $pikachu->weakness[0]; ?></span></p>
			<p>Resistance: <span class="text-grey-dark"><?php echo $pikachu->resistance[0]; ?></span></p>
		</div>
	</div>
	<div>  
		<div class="bg-green rounded-t"><p class="text-center text-white my-auto" style="font-size: small;">60/<?php echo $charmeleon->health; ?></p></div>
		<div class="p-5 bg-grey-lightest rounded-b shadow leading-tight">
			<p>Name: <?php echo $charmeleon->name; ?></p>
			<p>Energytype: <span class="text-orange-dark"><?php echo $charmeleon->energytype; ?></span></p>
			<p>Hitpoints: <?php echo $charmeleon->hitpoints; ?></p>
			<p>Health: <?php echo $charmeleon->health; ?></p>
			<p>Weakness: <span class="text-blue-dark"><?php echo $charmeleon->weakness[0]; ?></span></p>
			<p>Resistance: <span class="text-yellow-dark"><?php echo $charmeleon->resistance[0]; ?></span></p>
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
			<p><span class="font-bold"><?php echo $pikachu->name; ?></span> attacks <span class="font-bold"><?php echo $charmeleon->name ?></span> with an <span class="text-yellow-dark"><?php echo $pikachu->attacks[0] ?></span> attack!</p>
			<p><span class="font-bold"><?php echo $charmeleon->name ?></span> loses <?php echo 50/$charmeleon->resistance[1] ?>hp because he has resistance to <span class="text-yellow-dark"><?php echo $charmeleon->resistance[0] ?></span>. He has <span class="text-red-dark"><?php echo $charmeleon->health -50/$charmeleon->resistance[1]; ?>hp</span> left.
			<p><span class="font-bold"><?php echo $charmeleon->name ?></span> attacks <span class="font-bold"><?php echo $pikachu->name ?></span> with an <span class="text-orange-dark"><?php echo $charmeleon->attacks[1]?></span> attack!</p>
			<p><span class="font-bold"><?php echo $pikachu->name; ?></span> loses <?php echo 30*$pikachu->weakness[1] ?>hp because he as a weakness against <span class="text-orange-dark"><?php echo $pikachu->weakness[0]?></span> attacks! He has <span class="text-red-dark"><?php echo $pikachu->health -30*$pikachu->weakness[1]; ?>hp</span> left.
		</div>
	</div>
</div>


</body>






