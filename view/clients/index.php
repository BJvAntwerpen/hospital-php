	<h2>Cliënts</h2>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php foreach($clients as $client) { ?>
			<tr>
				<td><?= $client['client_firstname']?></td>
				<td><?= $client['client_lastname']?></td>
				<td>0612345678</td>
				<td>johndoe@hismail.com</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
		<?php } ?>
			<tr>
				<td>Jane</td>
				<td>Doe</td>
				<td>0687654321</td>
				<td>janedoe@hermail.com</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
		</tbody>
	</table>
		<p><a href="<?= URL ?>clients/add">Add client</a></p>