<?php

require(ROOT . 'model/HomeModel.php');

function index() {
	render('home/index', array(
		'patients' => getAllPatients(),
		));
}

/* https://www.w3schools.com/sql/sql_join.asp */