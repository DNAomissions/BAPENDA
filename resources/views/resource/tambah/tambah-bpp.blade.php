<div class="container">

	<form action="{{url('/store/bpp')}}" method="POST">
	 	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="nama">Nama : </label>
			<input type="text" class="form-control" id="nama_bpp" name="nama_bpp" required>
		</div>
		<div class="form-group">
			<label for="alamat">Unit Kerja : </label>
			<input type="text" class="form-control" id="unit_kerja" name="unit_kerja" required>
		</div>
        <div class="form-group">
			<label for="alamat">Alamat : </label>
			<input type="text" class="form-control" id="alamat" name="alamat" required>
		</div>
        <div class="form-group">
			<label for="alamat">No Telepon : </label>
			<input type="text" class="form-control" id="no_telepon" name="no_telepon">
		</div>		
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
   </div>