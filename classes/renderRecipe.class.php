<?php

class RenderRecipe extends Recipe{	
	public static function render($recipe){
		//Start table
		$output = '<table border="1">';

		//Start row and start column for title
		$output .= '<tr><th colspan="2">';
			//Get formatted Title from static function
			$output .= self::formatTitle($recipe->title);
			//end row for title
			$output .= "</th>";
			// start column for source
			$output .= "<th>";
			//Get formatted source from static function
			$output .= self::formatSource($recipe->source);
			//end column for source and current row
		$output .= "</th></tr>";

		//start row and start column for ingredients
		$output .= '<tr><td colspan="3">Ingredient List</td></tr>';

		//Get formatted ingredients from static function. All tr and td inclusive
		$output .= self::formatIngredients($recipe->ingredients);

		//Get formatted directions from static function. All tr and td inclusive
		$output .= self::formatInstructions($recipe->instructions);


		return $output;
	}

	private static function formatTitle($title){
		$title = strtoupper($title);
		//count letter
		//check that there are no numbers
		//make it uppercase
		return $title;
	}

	private static function formatIngredients($ingredients){
			$output = '<tr>';
			$output .= '<td>Item</td>';
			$output .= '<td>Amount</td>';
			$output .= '<td>Measurement</td>';
			$output .= '</tr>';
		foreach($ingredients as $ingredient){
			$output .= '<tr>';
			$output .= '<td>'.$ingredient['item'].'</td>';
			$output .= '<td>'.$ingredient['amount'].'</td>';
			$output .= '<td>'.$ingredient['measurement'].'</td>';			
			$output .= '</tr>';
		}
		return $output;
	}

	private static function formatInstructions($instructions){
		$output = "<tr>";
		$output .= '<td colspan="3">Instructions</td>';
		$output .= "</tr>";
		foreach($instructions as $instruction){
			//if there isn't a period at the end of the current instruction, add one.
			if(substr($instruction, -1) != '.'){$instruction.= '.';}
			$output .= '<tr>';
			$output .= '<td colspan="3"><li>'.$instruction.'</li></td>';
			$output .= '</tr>';
		}
		return $output;
	}



	private static function formatSource($source){
		//Placeholder for future functionality
		return $source;
	}



}