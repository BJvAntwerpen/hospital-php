<?php

function getAllClients() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();
	$db=null;
	return $query->fetchAll();
}

function addClient() {
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
	$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;

	if (strlen($firstname) == 0 || strlen($lastname) == 0 || strlen($phone) == 0 || strlen($email) == 0) {
		return false;
	}

	$db = openDatabaseConnection();
	$sql = "INSERT INTO clients(client_firstname, client_lastname, client_email, client_phone) VALUES (:firstname, :lastname, :email, :phone)";
	$query = $db->prepare($sql);
	$query->execute(arrray(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':email' => $email,
		':phone' => $phone));
	$db = null;

	return true;
}