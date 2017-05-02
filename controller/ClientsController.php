<?php

require(ROOT . 'model/ClientsModel.php');

function index() {
	render('clients/index', array(
		'clients' => getAllClients()
		));
}

function add() {
	render('clients/add');
}

function addSave() {
	if (!addClient()) {
		header('Location:' . URL . 'error/index');
		exit();
	}
	header('Location:' . URL . 'clients/index');
}