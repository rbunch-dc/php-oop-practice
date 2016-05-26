<?php

class RenderRecipe extends Recipe{	
	public static function render($recipe){
		$output = '<table border="1">';
		$output .= "<tr><td>";
		$output .= self::formatTitle($recipe->title);
		$output .= "</td></tr>";
		$output .= "<tr><td>";
		foreach($recipe->ingredients as $ingredient){
			print '<td>'.$ingredient['item'].'</td>';
		}

		return self::formatTitle($recipe->title) . " submitted by " . $recipe->source . " with rating " . $recipe->rating . " and includes<br />".$recipe->ingredients[0]['item'];
	}

	private static function formatTitle($title){
		$title = strtoupper($title);
		//count letter
		//check that there are no numbers
		//make it uppercase
		return $title;
	}

}