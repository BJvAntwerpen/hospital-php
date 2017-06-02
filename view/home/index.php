	<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php foreach($patients as $patient) { ?>
			<tr>
				<td><?= $patient['patient_name']?></td>
				<td><?= $patient['species_id']?></td>
				<td><?= $patient['patient_status']?></td>
				<td><?= $patient['client_id']?></td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
			<?php } ?>
			<tr>
				<td>Minoes</td>
				<td>kat</td>
				<td>Drinkt niet, haaruitval, mager</td>
				<td>Jane Doe</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
			<tr>
				<td>Kees</td>
				<td>hond</td>
				<td>Eet te veel, vetzucht, jankt en kotst</td>
				<td>John Doe</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
		</tbody>
	</table>