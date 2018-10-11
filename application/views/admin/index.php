

<div class="page-header">
	<h3>Dashboard</h3>
</div>
<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-folder-open"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<font size="18"><b><?php echo $this->m_rental->get_data('mobil')->num_rows();?></b></font>
						</div>
						<div><b>Jumlah Mobil Yang Terdaftar</b></div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'admin/mobil'?>">
				<div class="panel-footer">
					<span class="pull-left"> View Details </span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
				<div class="clearfix"></div>
			</div>
		</a>
	</div>
</div>

	<div class="col-lg-3 col-md-6">
		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-user"></i>
						</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<font size="18"><b><?php echo $this->m_rental->get_data('pelanggan')->num_rows();?></b></font>
						</div>
						<div><b>Jumlah Pelanggan Yang Terdaftar</b></div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'admin/pelanggan'?>">
				<div class="panel-footer">
					<span class="pull-left"> View Details </span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
				<div class="clearfix"></div>
			</div>
		</a>
	</div>
</div>

	<div class="col-lg-3 col-md-6">
		<div class="pane panel-warning">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-sort-by-order"></i>
						</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<font size="18"><b><?php echo $this->m_rental->edit_data(array('status_peminjaman' =>0),'rental')->num_rows();?></b></font>
						</div>
						<div><b>Peminjaman Belum Selesai</b></div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'admin/rental'?>">
				<div class="panel-footer">
					<span class="pull-left"> View Details </span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
				<div class="clearfix"></div>
			</div>
		</a>
	</div>
</div>

	<div class="col-lg-3 col-md-6">
		<div class="pane panel-danger">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-ok"></i>
						</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<font size="18"><b><?php echo $this->m_rental->edit_data(array('status_peminjaman' =>1),'rental')->num_rows();?></b></font>
						</div>
						<div><b>Peminjaman Sudah Selesai</b></div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'admin/rental'?>">
				<div class="panel-footer">
					<span class="pull-left">View Details </span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
				<div class="clearfix"></div>
			</div>
		</a>
	</div>
</div>
</div>

<hr>

<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-tittle" style="font-size: 18px; font-weight: bold"<b><i class="glyphicon glyphicon-random arrow-right"></i> mobil </h3>
		</div>
			<div class="panel-body">
				<div class="list-group">
					<?php foreach($mobil as $m){ ?>
						<a href="#" class="list-group-item">
							<span class="badge"><?php if($m->status_mobil == 1){echo "Tersedia";}else{echo "Dipinjam";}?></span>
							<i class="glyphicon glyphicon-user"></i><?php echo $m->nama_mobil;?>
						</a>
					<?php } ?>
				</div>
			<div class="text-right">
				<a href="<?php echo base_url().'admin/mobil'?>">Lihat Semua Mobil <i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
	</div>
</div>

	<div class="col-lg-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-tittle" style="font-size: 18px; font-weight: bold"<b><i class="glyphicon glyphicon-user o"></i> Pelanggan Terbaru </h3>
		</div>
			<div class="panel-body">
				<div class="list-group">
					<?php foreach($pelanggan as $p){ ?>
						<a href="#" class="list-group-item">
							<span class="badge"><?php echo $p->gender; ?></span>
							<i class="glyphicon glyphicon-user"></i><?php echo $a->nama_pelanggan;?>
						</a>
					<?php } ?>
				</div>
			<div class="text-right">
				<a href="<?php echo base_url().'admin/pelanggan'?>">Lihat Semua Pelanggan <i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
	</div>
</div>

	<div class="col-lg-5">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-tittle" style="font-size: 18px; font-weight: bold"<b><i class="glyphicon glyphicon-sort"></i> Rental </h3>
		</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered tablehover table-striped">
						<thead>
							<tr>
								<th>Tanggal Rental</th>
								<th>Tanggal Kembali</th>
								<th>Harga Sewa</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach($rental as $r){
							?>
							<tr>
								<td><?php echo date('d/m/Y',strtotime($r->tgl_rental)); ?></td>
								<td><?php echo date('d/m/Y',strtotime($p->tgl_kembali)); ?></td>
								<td><?php echo "Rp.".number_format($p->total_sewa).",-"; ?></td>
							</tr>
							<?php } ?>
							
							
							
			<div class="text-right">
				<a href="<?php echo base_url().'admin/transaksi'?>">Lihat Semua Transaksi <i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
	</div>
</div>
</div>
</div>