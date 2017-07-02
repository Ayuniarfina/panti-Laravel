@extends('front.template')
@section('main')
<h1 class="text-center">Adik abc sakit pinggang</h1> 
<br>
<div class="container">
  <div class="row"> 
  
      <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="https://placehold.it/800x400?text=IMAGE" alt="Image">
          <div class="carousel-caption">
            
          </div>      
        </div>

        <div class="item">
          <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
          <div class="carousel-caption">
            
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div>
      <h3>Deskripsi</h3>
      <p>
    Raw denim you probably haven't heard of them 
    jean shorts Austin. Nesciunt tofu stumptown 
    aliqua, retro synth master cleanse. Mustache 
    cliche tempor, williamsburg carles vegan 
    helvetica. Reprehenderit butcher retro keffiyeh 
    dreamcatcher synth. Cosby sweater eu banh mi, 
    qui irure terry richardson ex squid. Aliquip 
    placeat salvia cillum iphone. Seitan aliquip 
    quis cardigan american apparel, butcher 
    voluptate nisi qui.
    Food truck fixie locavore, accusamus mcsweeney's 
    marfa nulla single-origin coffee squid. 
    Exercitation +1 labore velit, blog sartorial 
    PBR leggings next level wes anderson artisan 
    four loko farm-to-table craft beer twee.
    Qui photo booth letterpress, commodo enim craft 
    beer mlkshk aliquip jean shorts ullamco ad vinyl 
    cillum PBR.
    </p>
    </div>

    <div>
      <h3>Kegiatan</h3>
      <ul>
      <li>Belajar bersama</li>
      <li>Pengajian mingguan</li>
    </ul>
    </div>

  </div>
  

    <div class="col-sm-4">
    <a href="donasi-form" class="btn btn-primary btn-lg btn-block">
    <h4  >Donasi</h4></a>

    <br>

    <a href="#" class="btn btn-primary btn-lg btn-block">
    <h4  >Jadi Relawan</h4></a>

    <br>

    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Jumlah penghuni:</h3>
        <h4>23</h4> 
      </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Kontak:</h3>
        <h4>Ujang</h4><h4>+6287719120xxx</h4> 
      </div>
    </div>

  <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Lokasi:</h3>
        <h4>Bogor</h4>  
    <div class="map-overlay-no-scroll" onclick="style.pointerEvents='none'"></div>
    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBnQgjjby-kAt5zGNHCId09XfWmVijWBUU&amp;q=United+States" style="border:0; margin-top: 15px;" height="200" frameborder="0" width="100%"></iframe>
    </div>
    </div>


  </div>
</div>

  </div>
<br>
<br>
@endsection