<?php
class Plant {
	
	private $family;
	private $species;
	private $genus;
	private $distribution;

	public function setFamily($family){
		$this->family = $family;
	}
	public function getFamily(){
		return $this->family;
	}

	public function getSpecies(){
		return $this->species;
	}
	public function setSpecies($species){
		$this->species = $species;
	}

	public function getGenus(){
		return $this->genus;
	}
	public function setGenus($genus){
		$this->genus = $genus;
	}

	public function getDist(){
		return $this->distribution;
	}
	public function setDist($dist){
		$this->distribution = $dist;
	}

	public function renderPlant(){
		return "The plant information is family: ".$this->getFamily().", species: ".$this->getSpecies().", genus: ".$this->getGenus().", distribution: ".$this->getDist();
	}
}


