<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('classes/recipe.class.php');
require_once('classes/renderRecipe.class.php');

$recipe = new Recipe('Chicken Soup For the Soul', "Rob's Kitchen");
$recipe2 = new Recipe();
$recipe->setTitle('Chicken Soup');

// print $recipe;
// exit;

$recipe->addIngredient('Broth', 2, 'Cups');
$recipe->addIngredient('Noodles', 1, 'bag');
$recipe->addIngredient('Chicken', 4, 'oz');

$recipe->addInstructions('Bake chicken for 20 minutes at 350 degrees.');
$recipe->addInstructions('Cube baked chicken and set aside.');
$recipe->addInstructions('Add a the broth to a pot.');
$recipe->addInstructions('Bring the broth to medium heat');
$recipe->addInstructions('Add noodles and bring to boil');
$recipe->addInstructions('Let boil, uncovered, for 8 mintues');
$recipe->addInstructions('Add chicken and reduce heat to low. Cover for 10 minutes');



// print $recipe->getTitle();
// echo $recipe->renderRecipe();
print RenderRecipe::render($recipe);
exit;

// $recipe2->title = 'Veggie Pizza';
// $recipe2->location = 'San Fran';
// $recipe->title = 'Chicken Soup for the Soul';
// print "<pre>";
// print_r($recipe);
// print '<hr />';
// print_r($recipe2);


// person
// - gender
// - height
// - weight
// - method - run()
// - method - sleep()

// car
// - engine type
// - number of doors

// states
// - abbr
// - nimber of electoral votes
