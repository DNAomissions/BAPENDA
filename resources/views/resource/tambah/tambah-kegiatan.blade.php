<div class="container">		
	<form action="{{url('/store/kegiatan')}}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="nama">Kode Kegiatan : </label>
			<input type="text" class="form-control" id="kode_kegiatan" name="kode_kegiatan" required>
		</div>
		<div class="form-group">
			<label for="alamat">Program Kegiatan : </label>
			<input type="text" class="form-control" id="program_kegiatan" name="program_kegiatan" required>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
   </div>