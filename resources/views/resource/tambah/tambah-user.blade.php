<div class="container">		
	<form action="{{url('/store/user')}}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="nama">Nama : </label>
			<!-- <input type="text" class="form-control" id="name" name="nama" required> -->
			<select id="namaBPP" name="nama" class="form-control namaBPP" style="height:37px">
				@foreach($bpp as $bp)
					<option data-id="{{$bp->id_bpp}}" data-nama="{{$bp->nama_bpp}}">{{$bp->nama_bpp}}</option>
				@endforeach
			</select>
			<input type="hidden" name="id" id="id_bpp" required>
		</div>
		<div class="form-group">
			<label for="alamat">Username : </label>
			<input type="text" class="form-control" id="username" name="username" required>
		</div>
        <div class="form-group">
			<label for="alamat">Email : </label>
			<input type="email" class="form-control" id="email" name="email" required>
		</div>
        <div class="form-group">
			<label for="alamat">Password : </label>
			<input type="password" class="form-control" id="password" name="password" required>
		</div>
        <div class="form-group">
			<label for="level">Level : </label>
			<select class="form-control" style="height:37px" id="level" name="level">
				<option value="2">Verifikator</option>
				<option value="3">User</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
   </div>