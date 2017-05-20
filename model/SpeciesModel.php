<?php

function getAllSpecies() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();
	$db=null;
	return $query->fetchAll();
}

function addSpecie() {
	$species = isset($_POST['species']) ? $_POST['species'] : null;

	if (strlen($species) == 0) {
		return false;
	}

	$db = openDatabaseConnection();
	$sql = "INSERT INTO species(species_description) VALUES :species";
	$query = $db->prepare($sql);
	$query->execute(array(
		':species' => $species
		));

	return true;
}