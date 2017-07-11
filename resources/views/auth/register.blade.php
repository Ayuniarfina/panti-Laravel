@extends('front.template')

@section('main')
   
<div class="row ">
          <div class="col-lg-6 col-centered">
            <div class="well bs-component">
        <form class="form-horizontal">
          <fieldset>
            <legend>Register</legend>
            <div class="form-group">
              <label for="name" class="col-lg-2 control-label">Nama</label>
              <div class="col-lg-10">
                <input class="form-control" id="nama" placeholder="Nama" type="text">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input class="form-control" id="inputEmail" placeholder="Email" type="text">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
                <input class="form-control" id="inputPassword" placeholder="Password" type="password">
              </div>
            </div>
          
            
            <div class="form-group">
              <label for="no_hp" class="col-lg-2 control-label">No HP</label>
              <div class="col-lg-10">
                <input class="form-control" id="no_hp" placeholder="No HP" type="text">
              </div>
            </div>
            <div class="form-group">
              <label for="alamat" class="col-lg-2 control-label">Alamat</label>
              <div class="col-lg-10">
                <input class="form-control" id="alamat" placeholder="Alamat" type="text">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Register</button>
                <a href="../login">Login</a>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
</div>
@endsection

@section('scripts')

    <script>
        $(function () {
            $('.badge').popover();
        });
    </script>

@endsection