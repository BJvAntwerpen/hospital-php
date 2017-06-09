<h1>Edit patient</h1>
<form action="<?= URL ?>patients/editSave" method="post">
	<label>Patient name</label><input type="text" name="Name" value="<?= $patient['patient_name'] ?>"><br>
	<label>Species</label>
	<select name="specie">
		<?php foreach ($species as $specie) { ?>
			<option value="<?= $specie['species_id'] ?>"><?= $specie['species_description'] ?></option>
		<?php } ?>
	</select><br>
	<label>Status</label><input type="text" name="Status" value="<?= $patient['patient_status'] ?>"><br>
	<label>Client</label>
	<select name="client">
	<?php foreach ($clients as $client) { ?>
		<option value="<?= $client['client_id'] ?>"><?= $client['client_firstname'] . ' ' . $client['client_lastname'] ?></option>
	<?php } ?>
	</select><br>
	<input type="submit" value="Submit">
	<input type="hidden" name="id" value="<?= $patient['patient_id'] ?>">
</form>
