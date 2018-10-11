<div class="page-header">
<h3>Mobil Baru</h3>
</div>

<?php validation_errors('<p style="color:red;">','</p>');?>

<?php
	if($this->session->flashdata())
	{
		echo "<div class='alert alert-danger alert-massage'>";
		echo $this->session->flashdata('alert');
		echo "</div>";
	}
?>

<form action="<?php echo base_url().'admin/tambah_buku_act' ?>" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
<div class="panel-body">	
	<div class="form-group">
		<label>Kategory</label>
		<select name="id_kategory" class="form-control">
			<option value="">Pilih Kategori</option>
			<?php foreach($kategori as $k){ ?>
			<option value="<?php echo $k->id_kategori;?>"><?php echo $k->nama_kategori; ?></option>
			<?php } ?>
		</select>
		
<?php echo form_error('id_kategori'); ?>
	</div>
	
<div class="form-group">
	<label>Nama Mobil</label>
	<input type="text" name="nama_mobil" class="form-control">
	<?php echo form_error('judul_mobil'); ?>
</div>
	
<div class="form-group">
	<label>Warna</label>
	<input type="text" name="warna" class="form-control">
	<?php echo form_error('warna'); ?>
</div>
	
<div class="form-group">
	<label>Nomor Polisi</label>
	<input type="text" name="no_polisi" class="form-control">
	<?php echo form_error('no_polisi'); ?>
</div>
	
<div class="form-group">
	<label>Harga Sewa</label>
	<input type="text" name="harga_sewa" class="form-control">
	<?php echo form_error('harga_sewa'); ?>
</div>
	
<div class="form-group">
	<label>Status Mobil</label>
	<select name="status_mobil" class="form-control">
		<option value="1">Tersedia</option>
		<option value="0">Sedang Di Rental</option>
	</select>
	<?php echo form_error('status_mobil'); ?>
</div>
	
<div class="form-group">
	<label>Gambar</label>
	<input type="file" name="gambar" class="form-control">
	<?php echo form_error('nama_buku'); ?>
</div>

<div class="form_group">
	<input type="submit" value="Simpan" class="btn btn-primary btn-block">
</div>
</div>
</div>
</form>