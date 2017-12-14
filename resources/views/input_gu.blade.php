@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="card">
					<div class="panel-heading">
						<div class="panel-title text-center">KELENGKAPAN PENGAJUAN GU</div>
					</div>
						<div class="panel-body">
							<form action="#" enctype="multipart/form-data" method="post">
									<div class="form-group">
										<div class="row">
											<label class="control-label col-md-4">Unit Kerja : </label>
											<div class="col-md-8"><input type="text" class="form-control" id="unit" placeholder="Unit Kerja" required></div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="control-label col-md-4">Nomor Kegiatan : </label>
											<div class="col-md-8"><input type="text" class="form-control" placeholder="Nomor Kegiatan" required></div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<label class="control-label col-md-4">Nama Kegiatan : </label>
											<div class="col-md-8"><input type="text" class="form-control" placeholder="Nama Kegiatan" required></div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<label class="control-label col-md-4">Nama BPP : </label>
											<div class="col-md-8"><input type="text" class="form-control" placeholder="Nama BPP" required></div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="control-label col-md-4">Surat Permohonan GU : </label>
											<div class="col-md-8"><input type="file" class="form-control" value="Upload" multiple></div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="control-label col-md-4">Buku Kas Umum : </label>
											<div class="col-md-8"><input type="file" class="form-control" value="Upload" multiple></div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="control-label col-md-4">Laporan Penanggungjawaban Per Kegiatan Manual : </label>
											<div class="col-md-8"><input type="file" class="form-control" value="Upload" multiple></div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="control-label col-md-4">SPTBL Per Kegiatan SIPKD : </label>
											<div class="col-md-8"><input type="file" class="form-control" value="Upload" multiple></div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="control-label col-md-4">Rekap Pajak SIPKD : </label>
											<div class="col-md-8"><input type="file" class="form-control" value="Upload" multiple></div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="control-label col-md-4">Kwitansi : </label>
											<div class="col-md-8"><input type="file" class="form-control" value="Upload" multiple></div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="control-label col-md-4">SSP dan Faktur Pajak Bernomor Seri : </label>
											<div class="col-md-8"><input type="file" class="form-control" value="Upload" multiple></div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="control-label col-md-4">Dokumentasi Hasil Pengadaan Barang/Jasa : </label>
											<div class="col-md-8"><input type="file" class="form-control" value="Upload" multiple></div>
										</div>
									</div>
									
									<button type="button" class="btn btn-primary pull-right">Submit</button>
									
								</form>
						</div>  
				</div>
			</div>
		</div>
	</div>
</div>
@endsection