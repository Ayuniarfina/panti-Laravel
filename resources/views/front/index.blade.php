@extends('front.template')
@section('main')

<div class="jumbotron">
<div class="container text-center">
  <h1>Panti</h1>
  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <p><a href="../register" class="btn btn-primary btn-lg">Gabung</a></p>
</div>
</div>


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
  </div>
  <div class="col-sm-4">
    <div class="well">
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
  </div>
</div>
<hr>
</div>
  



<div class="container text-center">  

 <div class="row">
    <div class="col-sm-3">
      <h3 class="pull-left">Panti Terdaftar </h3>
    </div>
    <div class="col-sm-3"> 
    </div>
    <div class="col-sm-3"> 
    </div>
    <div class="col-sm-3">
    <a href="../regispanti" class="btn btn-primary pull-right">
    <h4  >Daftarkan Panti</h4></a>
      
    </div>
  </div>

  <br>


<ul class="nav nav-tabs">
  <!--<li class=""><a href="#home" data-toggle="tab" aria-expanded="false">Home</a></li>
  <li class="active"><a href="#profile" data-toggle="tab" aria-expanded="true">Profile</a></li>
  <li class="disabled"><a>Disabled</a></li>
  -->
  <li class="dropdown pull-right">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
      Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
      <li class="divider"></li>
      <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
    </ul>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade" id="home">
    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
  </div>
  <div class="tab-pane fade active in" id="profile">
   

<br>

  <div class="col-sm-4">
<a href="../panti-detail">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <h4 class="text-primary">Projek3</h4>
</a>
      <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress,</p>
    </div>




<div class="col-sm-4"> 
<a href="../panti-detail">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <h4 class="text-primary">Projek4</h4>
</a>
      <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles</p>    
    </div>
    


    <div class="col-sm-4">
    <a href="../panti-detail">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <h4 class="text-primary">Projek5</h4> 
</a>
      <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh </p>    
    </div>
    
<br>
<ul class="pager">
  <li><a href="../panti-list">Lihat semua</a></li>
</ul>
<br>


  </div>
  <div class="tab-pane fade" id="dropdown1">
    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
  </div>
  <div class="tab-pane fade" id="dropdown2">
    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
  </div>
</div>
</div>





<div class="container text-center">  

 <div class="row">
    <div class="col-sm-3">
      <h3 class="pull-left">Donasi terbuka</h3>
    </div>
    <div class="col-sm-3"> 
    </div>
    <div class="col-sm-3"> 
    </div>
    <div class="col-sm-3">
    <a href="../regispanti" class="btn btn-primary pull-right">
    <h4  >Buat Donasi</h4></a>
      
    </div>
  </div>

  <br>


<ul class="nav nav-tabs">
  <!--<li class=""><a href="#home" data-toggle="tab" aria-expanded="false">Home</a></li>
  <li class="active"><a href="#profile" data-toggle="tab" aria-expanded="true">Profile</a></li>
  <li class="disabled"><a>Disabled</a></li>
  -->
  <li class="dropdown pull-right">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
      Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
      <li class="divider"></li>
      <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
    </ul>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade" id="home">
    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
  </div>
  <div class="tab-pane fade active in" id="profile">
	 

<br>

  <div class="col-sm-4">
  <a href="../donasi-detail">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <h4 class="text-primary">Projek3</h4>
      </a>
      <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress,</p>
    </div>



<div class="col-sm-4"> 
<a href="../donasi-detail">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <h4 class="text-primary">Projek4</h4>
          </a>
      <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles</p>    
    </div>



    <div class="col-sm-4">
<a href="../donasi-detail">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <h4 class="text-primary">Projek5</h4> 
</a>
      <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh </p>    
    </div>
    
<br>
<ul class="pager">
  <li><a href="../donasi-list">Lihat semua</a></li>
</ul>
<br>


  </div>
  <div class="tab-pane fade" id="dropdown1">
    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
  </div>
  <div class="tab-pane fade" id="dropdown2">
    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
  </div>
</div>
</div>
<br>
<br>
@endsection