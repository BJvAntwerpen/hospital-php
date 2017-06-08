<h1>Add patient</h1>
<form action="<?= URL ?>patients/addSave" method="post">
	<label>Patient name</label><input type="text" name="Name">
	<label>Species</label>
	<select name="species">
		<?php foreach ($patients as $patient) { ?>
			<option value="<?= $patient['species_id'] ?>"><?php $patient['species_description'] ?></option>
		<?php } ?>
	</select>
	<label>Status</label>
	<label>Client</label>
	<input type="submit" value="Submit">
</form>