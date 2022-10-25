<?php error_reporting(0); ?>
<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
	<div class="card-header bg-white py-3">
		<div class="row">
			<div class="col">
				<h4 class="h5 align-middle m-0 font-weight-bold text-primary">
					Data Aset
				</h4>
			</div>
			<div class="col-auto">
				<a href="<?= base_url('aset/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
					<span class="icon">
						<i class="fa fa-plus"></i>
					</span>
					<span class="text">
						Tambah Data
					</span>
				</a>
			</div>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-striped w-100 dt-responsive " id="dataTable">
			<thead>
				<tr>
					<th>No. </th>
					<th>Kode Aset</th>
					<th>Nama Aset</th>
					<th>Jenis Aset</th>
					<th>Jumlah Aset</th>
					<th>Harga Aset(Rp)</th>
					<th>Total Harga Aset(Rp)</th>
					<th>Tahun Pembelian</th>
					<th>Gudang</th>
					<?php if (is_admin()) : ?>
						<th>Aksi</th><?php endif; ?>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				$tot_bayar = 0;
				if ($aset) :
					foreach ($aset as $b) :
						$total = $b['harga_aset'] * $b['jml_aset'];
				?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $b['id_aset']; ?></td>

							<td><?= $b['nama_aset']; ?></td>
							<td><?= $b['nama_jenis']; ?></td>
							<td><?= $b['jml_aset']; ?></td>
							<td><?php echo number_format($b['harga_aset'])  ?></td>
							<td><?php echo number_format($total)  ?></td>
							<td><?= $b['tahun']; ?></td>
							<td><?= $b['nama_gudang']; ?></td>
							<?php if (is_admin()) : ?>
								<td>
									<a href="<?= base_url('aset/edit/') . $b['id_aset'] ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>

									<a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('Aset/delete/') . $b['id_aset'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a> <?php endif; ?>
								</td>
						</tr>

					<?php endforeach; ?>
				<?php else : ?>
					<tr>
						<td colspan="7" class="text-center">
							Data Kosong
						</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>
