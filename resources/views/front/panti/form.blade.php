@extends('front.template')
@section('main')

<div class="row	">
          <div class="col-lg-6 col-centered">
            <div class="well bs-component">
		<form class="form-horizontal">
		  <fieldset>
		    <legend>Register Panti</legend>
		    <div class="form-group">
		      <label for="nama_panti" class="col-lg-2 control-label">Nama Panti</label>
		      <div class="col-lg-10">
		        <input class="form-control" id="nama_panti" placeholder="Nama Panti" type="text">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Email Panti</label>
		      <div class="col-lg-10">
		        <input class="form-control" id="email_panti" placeholder="Email Panti" type="text">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="password_panti" class="col-lg-2 control-label">Password</label>
		      <div class="col-lg-10">
		        <input class="form-control" id="password_panti" placeholder="Password" type="password">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="alamat_panti" class="col-lg-2 control-label">Alamat Panti</label>
		      <div class="col-lg-10">
		        <input class="form-control" id="alamat_panti" placeholder="Alamat Panti" type="text">
		      </div>
		    </div>
		    <div class="form-group">
			  	<label for="alamat_panti" class="col-lg-2 control-label">Foto Panti</label>		
				<input class="col-lg-10" type="file" name="foto" required>	
			</div>
		    <div class="form-group">
		      <label for="kondisi_panti" class="col-lg-2 control-label">Kondisi Panti</label>
		      <div class="col-lg-10">
		        <input class="form-control" id="kondisi_panti" placeholder="Kondisi Panti" type="text">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="jml_penghuni" class="col-lg-2 control-label">Jumlah Penghuni</label>
		      <div class="col-lg-10">
		        <input class="form-control" id="jml_penghuni" placeholder="Jumlah Penghuni" type="text">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="nama_pemilik" class="col-lg-2 control-label">Nama Pemilik</label>
		      <div class="col-lg-10">
		        <input class="form-control" id="nama_pemilik" placeholder="Nama Pemilik" type="text">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="kontak_panti" class="col-lg-2 control-label">Kontak Panti</label>
		      <div class="col-lg-10">
		        <input class="form-control" id="kontak_panti" placeholder="Kontak Panti" type="text">
		      </div>
		    </div>
		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		        <a routerLink="register">Register</a>
		        <button type="submit" class="btn btn-primary">Login</button>
		      </div>
		    </div>
		    
		  </fieldset>
		</form>
	  </div>
	</div>
</div>
@endsection