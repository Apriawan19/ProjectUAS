<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("Location:login.php");
}
include "header.php";
include "model/proses.php";
$data = read("SELECT slip_gajih.id,slip_gajih.tanggal,slip_gajih.total_gajih,slip_gajih.potongan, pegawai.tunjangan,pegawai.gajih_pokok,pegawai.nama_lengkap FROM `slip_gajih` INNER JOIN `pegawai` on slip_gajih.pegawai_id =pegawai.id");
?>
<div class="container" style="min-height: 100vh">
	<div class="container-fluid home-bg" style="min-height: 100vh">
		<div class="card">
			<h2>Laporan Penggajian</h2>
			<table class="table display" id="laporan-gajih">
				<thead class="thead-dark">
					<tr>
						<th scope="col">NO</th>
						<th scope="col">Nama Lengkap</th>
						<th scope="col">Tanggal Gajian</th>
						<th scope="col">Gajih Pokok</th>
						<th scope="col">Gajih</th>
						<th scope="col">Tunjangan</th>
						<th scope="col">Potongan</th>
						<th scope="col">Total</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($data as $v) { ?>
						<tr>
							<th scope="row"><?= $no ?></th>
							<!-- nama -->
							<td><?= $v[6] ?></td>
							<!-- tanggal -->
							<td><?= $v[1] ?></td>
							<!-- gaji pokok -->
							<td><?= $v[2] ?></td>
							<!-- Gaji -->
							<td><?= $v[5] ?></td>
							<!-- tunjangan -->
							<td><?= $v[4] ?></td>
							<!-- potongan -->
							<td><?= $v[3] ?></td>
							<!-- total -->
							<td><?= $v[2] + $v[5] - $v[4] - $v[3] ?></td>
							<td><a href="print_slip.php?id=<?= $v[0] ?>" class="btn btn-danger">Print</a>
								<a href="hapus_gajih.php?id=<?= $v[0] ?>" class="btn btn-danger">Hapus</a></td>
						</tr>
					<?php
						$no++;
					} ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php
include "footer.php";
?>