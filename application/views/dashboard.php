<hr>
<div class="card-header bg-white">
	<h5 class="text-black op-7 mb-2"><img src="assets/img/2.png" width="37px"> Hello, <b class="text-warning"><?= userdata('nama'); ?></b></h5>
	<h5 class="text-black op-7 mb-2">Anda Login Sebagai, <b class="text-warning"><?= userdata('role'); ?></b></h5>

	<?= $this->session->flashdata('pesan'); ?>
</div>

<br>
<div class="row">

	<div class="col-xl-3 col-6 mb-4">
		<div class="card border-left-warning h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="barang" style="text-decoration:none;color:#FFA600">Total Barang</a></div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $barang; ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-bars fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-3 col-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="supplier" style="text-decoration:none; color:#FFA600 ">Data Supplier</a></div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $supplier; ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-users fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-3 col-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="barang" style="text-decoration:none;color:#FFA600">Total Stok</a></div>
								<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $stok; ?></div>
							</div>
							<div class="col-auto">
								<div class="progress progress-sm mr-2">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="barangmasuk" style="text-decoration:none; color:#FFA600  ">Barang Masuk</a></div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $barang_masuk; ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-download fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="barangkeluar" style="text-decoration:none; color:#FFA600 ">Barang Keluar</a></div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $barang_keluar; ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-upload fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="user" style="text-decoration:none; color:#FFA600  ">Total Pengguna</a></div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user; ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-user-plus fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<a href="https://time.is/Bandung" id="time_is_link" rel="nofollow" style="font-size:15px">Bogor,</a>
						<span id="Bandung_z41c" style="font-size:15px"></span>
						<script src="//widget.time.is/t.js"></script>
						<script>
							time_is_widget.init({
								Bandung_z41c: {}
							});
						</script>

					</div>
					<div class="col-auto">
						<i class="fas fa-check-circle fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<p><span id="tanggalwaktu"></span></p>
						<script>
							var tw = new Date();
							if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
							else(a = tw.getTime());
							tw.setTime(a);
							var tahun = tw.getFullYear();
							var hari = tw.getDay();
							var bulan = tw.getMonth();
							var tanggal = tw.getDate();
							var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
							var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
							document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;
						</script>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">

		<!-- Area Chart -->
		<div class="col-xl-8 col-lg-7">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header bg-warning py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-white">Total Transaksi Barang Perbulan pada Tahun <?= date('Y'); ?></h6>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<div class="chart-area">
						<div class="chartjs-size-monitor">
							<div class="chartjs-size-monitor-expand">
								<div class=""></div>
							</div>
							<div class="chartjs-size-monitor-shrink">
								<div class=""></div>
							</div>
						</div>
						<canvas id="myAreaChart" width="669" height="320" class="chartjs-render-monitor" style="display: block; width: 669px; height: 320px;"></canvas>
					</div>
				</div>
			</div>
		</div>

		<!-- Pie Chart -->
		<div class="col-xl-4 col-lg-5">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header bg-warning py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-white">Transaksi Barang</h6>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<div class="chart-pie pt-4 pb-2">
						<div class="chartjs-size-monitor">
							<div class="chartjs-size-monitor-expand">
								<div class=""></div>
							</div>
							<div class="chartjs-size-monitor-shrink">
								<div class=""></div>
							</div>
						</div>
						<canvas id="myPieChart" width="302" height="245" class="chartjs-render-monitor" style="display: block; width: 302px; height: 245px;"></canvas>
					</div>
					<div class="mt-4 text-center small">
						<span class="mr-2">
							<i class="fas fa-circle text-warning"></i> Barang Masuk
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-warning"></i> Barang Keluar
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="card shadow mb-4">
				<div class="card-header bg-warning py-3">
					<h6 class="m-0 font-weight-bold text-white text-center">Stok Barang Minimum</h6>
				</div>
				<div class="table-responsive">
					<table class="table mb-0 text-center table-striped table-sm">
						<thead>
							<tr>
								<th>Barang</th>
								<th>Stok</th>
								<th>Pasok</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if ($barang_min) :
								foreach ($barang_min as $b) :
							?>
									<tr>
										<td><?= $b['nama_barang']; ?></td>
										<td><?= $b['stok']; ?></td>
										<td>
											<a href="<?= base_url('barangmasuk/add/') . $b['id_barang'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i></a>
										</td>
									</tr>
								<?php endforeach; ?>
							<?php else : ?>
								<tr>
									<td colspan="3" class="text-center">
										Tidak ada barang stok minim
									</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card shadow mb-4">
				<div class="card-header bg-warning py-3">
					<h6 class="m-0 font-weight-bold text-white text-center">5 Transaksi Terakhir Barang Masuk</h6>
				</div>
				<div class="table-responsive">
					<table class="table mb-0 table-sm table-striped text-center">
						<thead>
							<tr>
								<th>Tanggal</th>
								<th>Barang</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($transaksi['barang_masuk'] as $tbm) : ?>
								<tr>
									<td><strong><?= $tbm['tanggal_masuk']; ?></strong></td>
									<td><?= $tbm['nama_barang']; ?></td>
									<td><span class="badge badge-warning"><?= $tbm['jumlah_masuk']; ?></span></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card shadow mb-4">
				<div class="card-header bg-warning py-3">
					<h6 class="m-0 font-weight-bold text-white text-center">5 Transaksi Terakhir Barang Keluar</h6>
				</div>
				<div class="table-responsive">
					<table class="table mb-0 table-sm table-striped text-center">
						<thead>
							<tr>
								<th>Tanggal</th>
								<th>Barang</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($transaksi['barang_keluar'] as $tbk) : ?>
								<tr>
									<td><strong><?= $tbk['tanggal_keluar']; ?></strong></td>
									<td><?= $tbk['nama_barang']; ?></td>
									<td><span class="badge badge-warning"><?= $tbk['jumlah_keluar']; ?></span></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
