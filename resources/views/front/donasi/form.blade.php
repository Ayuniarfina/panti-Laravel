@extends('front.template')
@section('main')

<div class="row ">
          <div class="col-lg-6 col-centered">
            <div class="well bs-component">
    <form class="form-horizontal">
      <fieldset>
        <legend>Donasi</legend>
        <div class="form-group">
          <label for="name" class="col-lg-2 control-label">Nominal</label>
          <div class="col-lg-10">
            <input class="form-control" id="nama" placeholder="Nama" type="text">
          </div>
        </div>
        
        <div class="form-group">
            <label for="pembayaran" class="col-lg-2 control-label">Metode Pembayaran</label>
            <p>
              <input name="pembayaran" type="radio" id="bca" value="bca"/>
              <label for="bca">Transfer BCA</label>
            </p>
            <p>
              <input name="pembayaran" type="radio" id="mandiri" value="mandiri"/>
              <label for="mandiri">Transfer Mandiri</label>
            </p>
            <p>
              <input name="pembayaran" type="" id="lainnya" />
              <label for="lainnya">Transfer Lainnya</label>
            </p>
          </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">Donasi</button>
          </div>
        </div>
      </fieldset>
    </form>
    </div>
  </div>
</div>
@endsection