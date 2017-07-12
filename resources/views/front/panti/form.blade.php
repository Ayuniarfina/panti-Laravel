@extends('front.template')
@section('main')

<div class="row	">
          <div class="col-lg-6 col-centered">
            <div class="well bs-component">
		<form method="POST" action=/userPanti class="form-horizontal" enctype="multipart/form-data">
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      <fieldset>
		    <legend>Register Panti</legend>

        <div class="form-group">
		      <label for="nama_panti" class="col-lg-2 control-label">Nama Panti</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="nama_panti" placeholder="Nama Panti" >
		      </div>
		    </div>

        <div class="form-group">
		      <label for="email_panti" class="col-lg-2 control-label">Email Panti</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="email_panti" placeholder="Email Panti">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="password_panti" class="col-lg-2 control-label">Password</label>
		      <div class="col-lg-10">
		        <input type="password" class="form-control" name="password_panti" placeholder="Password">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="alamat_panti" class="col-lg-2 control-label">Alamat Panti</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="alamat_panti" placeholder="Alamat Panti">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="kondisi_panti" class="col-lg-2 control-label">Kondisi Panti</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="kondisi_panti" placeholder="Kondisi Panti">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="jml_penghuni" class="col-lg-2 control-label">Jumlah Penghuni</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="jml_penghuni" placeholder="Jumlah Penghuni">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="nama_pemilik" class="col-lg-2 control-label">Nama Pemilik</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="nama_pemilik" placeholder="Nama Pemilik">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="kontak_panti" class="col-lg-2 control-label">Kontak Panti</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="kontak_panti" placeholder="Kontak Panti">
		      </div>
		    </div>

			<div class="form-group">
				<label for="image" class="col-lg-2 control-label">Foto Panti</label>
				<input class="col-lg-10" type="file" name="image">
			</div>

		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">Register</button>
		        <a routerLink="register">Login</a>
		      </div>
		    </div>

		  </fieldset>
		</form>
	  </div>
	</div>
</div>
@endsection
