<?php

class Recipe{

	protected $title;
	protected $ingredients = array();
	protected $source = "Will's Kitchen";
	protected $instructions = array();
	protected $rating = "Unrated";

	function __construct ($title = null, $source = null){
		if($title != null){
			$this->title = $title;
		}
		if($source != null){
			$this->source = $source;
		}
	}

	function __toString(){
		return "You are printing an object of type: ".__CLASS__.". It has a title of " . $this->title;
	}

	public function setTitle($title){
		$this->title = ucwords($title);
	}

	public function getTitle(){
		return $this->title;
	}

	//These are acceptable measurements. If your measurement is not in this array, I will stop you in your tracks.
	private $allowedMeasurements = array(
		'tsps',
		'tsbs',
		'cups',
		'oz',
		'lbs',
		'fl oz',
		'bag'
	);

	public function addIngredient($item, $amount = null, $measurement = null){
		//Only param required is item. The other two can be includled, but will be null if not included.

		if(
			($measurement != null) 
			&& 
			(!in_array(strtolower($measurement), $this->allowedMeasurements))
		) {
			//This means, they entered a measurement we do not support. Stop them.
			die($measurement . " is not a valid measurement.");
		}

		$this->ingredients[] = array(
			'item' => ucwords($item),
			'amount' => $amount,
			'measurement' => strtolower($measurement)
		);
	}

	public function addInstructions($instructions){
		//Only param required is item.
		if(!isset($instructions)) {
			//This means, they entered a measurement we do not support. Stop them.
			die('Instruction cannot be empty');
		}
		$this->instructions[] = $instructions;
	}

}





