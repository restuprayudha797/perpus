<div class="row">
	<div class=" col-sm-12">
		<div class="card card-shadow mb-4">
			<div class="card-header">
				<div class="card-title d-flex justify-content-between">
					Data <?= $title ?>
					<div class="form-add">
						<input type="text" id="major_name" placeholder="Nama Jurusan">
						<input type="text" id="major_code" placeholder="Singkatan Jurusan">
						<button class="btn btn-success" id="btnAddJurusan" type="submit"><i class="fa fa-plus"></i></button>
					</div>
				</div>
			</div>
			<div class="card-body">
				<table id="bs4-table" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Jurusan</th>
							<th>Singkatan Jurusan</th>
						</tr>
					</thead>

					<tbody>
						<?php $i = 1 ?>
						<?php foreach ($majorData as $row) : ?>
							<tr>
								<td><?= $i ?></td>
								<td><?= $row['major_name'] ?>
								</td>
								<td><?= $row['major_code'] ?>
							</tr>
							<?php $i++; ?>

						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<!-- start add data jurusan -->
<script>
	$(document).on('click', '#btnAddJurusan', function(e) {
		let major_name = document.getElementById('major_name').value;
		let major_code = document.getElementById('major_code').value;

		if (major_code != '' && major_name != '') {
			$.ajax({
				url: "<?= base_url('major/addMajor'); ?>",
				method: "POST",
				data: {
					major_name: major_name,
					major_code: major_code
				},
				dataType: "json",
				success: function(data) {
					// Update the table with the search results
					console.log(data);
					Swal.fire({
						icon: "success",
						title: "Data Jurusan Berhasil Ditambah!",
						showConfirmButton: false,
						timer: 2000
					});
					updateTable(data);

				},
				error: function(error) {
					console.error("Error fetching data: " + error);
				}
			});
		} else {

			Swal.fire({
				icon: "error",
				title: "Nama Jurusan Dan Singkatan Jurusan Tidak Boleh Kosong!",
				showConfirmButton: false,
				timer: 2000
			});

		}
		document.getElementById('major_name').value = '';
		document.getElementById('major_code').value = '';
	});

	function updateTable(data) {
		// Assuming data is an array of objects with the same structure as your table rows
		var tableBody = $("#bs4-table tbody");
		tableBody.empty(); // Clear existing rows
		let i = 1;
		$.each(data, function(index, row) {
			var tr = $("<tr>");
			tr.append(`<td>
					${i}
                    </td>`);
			tr.append("<td>" + row.major_name + "</td>");
			tr.append("<td>" + row.major_code + "</td>");
			// Add more columns as needed
			tableBody.append(tr);
			i++;
		});
	}
</script>
<!-- end add data jurusan -->

<script>
	$(document).ready(function() {
		$('#bs4-table').DataTable();
	});
</script>