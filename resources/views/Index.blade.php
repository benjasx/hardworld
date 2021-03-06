@extends('plantilla2')
@section('titulo')
    HardWorld
@endsection
@section('id-page')
    <p class="id-page">@Inicio</p>
@endsection
@section('pan')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
   
    <li class="breadcrumb-item active" aria-current="page">Inicio</li>
  </ol>
</nav>
@endsection
@section('hero')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner container-fluid">
			<div class="carousel-item active">
			<img src="../Imagenes/img-sl.jpg" class="d-block w-100 img-fluid" alt="...">
			</div>
			<div class="carousel-item">
			<img src="../Imagenes/img-sl1.jpg" class="d-block w-100 img-fluid" alt="...">
			</div>
			<div class="carousel-item">
			<img src="../Imagenes/img-sl2.jpg" class="d-block w-100 img-fluid" alt="...">
			</div>
            <div class="carousel-item">
                <img src="../Imagenes/yaya.png" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../Imagenes/ima.png" class="d-block w-100 img-fluid" style="width: 1024px" alt="...">
            </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
		</div>
@endsection
@section('section')
   <section class="conteiner-fluid">
            <div class="conteiner-fluid titu-bs">
                <h2 class="tn2">Bienvenidos</h2>
                <p>  Bienvenidos a hardworld el lugar donde puedes aprender todo el tema sobre las computadoras y como estan compuestas para su funcionamiento, tambien contamos con una seccion de soporte tecnico</p>
            </div>
         <div class="container">
            <div class="row g-2">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="p-3 border bg-light"><img class="img-fluid" src="Imagenes/computadora.jpg" /></div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                     <div class="p-3 border bg-light"><img class="img-fluid" src="Imagenes/soporte.jpg" /></div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="p-3 border bg-light"> <img class="img-fluid" src="Imagenes/teclado.jpg" /></div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="p-3 border bg-light"><img class="img-fluid" src="Imagenes/fuente.jpg" /></div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="p-3 border bg-light"><img class="img-fluid" src="Imagenes/falla.jpg" /></div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="p-3 border bg-light"><img class="img-fluid" src="Imagenes/reparaci??n.jpg" /></div>
                </div>
                
                
            </div>
         </div>
         
         <div class="container">
         <div class="ldiv"></div>
            <div class="row">
                <div class="col-12 col-lg-6">
                <div class=" titu-bs" >
                    <h3 class="tn2">Computadora</h3>
                    
                    <p>
                         Una computadora es un dispositivo inform??tico que es capaz de recibir, almacenar y procesar informaci??n de una forma ??til. Una computadora est?? programada para realizar operaciones l??gicas o aritm??ticas de forma autom??tica.
                         Esta palabra se utiliza en la mayor??a de pa??ses de Hispanoam??rica, aunque en Chile y en Colombia es m??s com??n en masculino ('computador'). En Espa??a se usa m??s el t??rmino 'ordenador' (del franc??s ordinateur). 'Computadora' procede del ingl??s computer y a su vez de lat??n computare ('calcular').
                     </p>
                   
                </div>
                </div>
                
                <div class="col-12 col-lg-6">
                <iframe width="100%" height="400" class="imagen-about-us container-fluid" src="https://www.youtube.com/embed/xL8C5CIxDts" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                </div>
            </div>
        </div>
        
        <div class="container">
         <div class="ldiv"></div>
            <div class="row">
            <div class="col-12 col-lg-6">
                <div>
                <iframe width="560" height="400" class="imagen-about-us container-fluid" src="https://www.youtube.com/embed/fZONU029MPU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                </div>
                <div class="col col-lg-6">
                <div class=" titu-bs" >
                    <h3 class="tn2">Hardware</h3>
                    
                    <p>
                    Hardware es la parte f??sica de un ordenador o sistema inform??tico. Est?? formado por los componentes el??ctricos, electr??nicos, electromec??nicos y mec??nicos, tales como circuitos de cables y luz, placas, memorias, discos duros, dispositivos perif??ricos y cualquier otro material en estado f??sico que sea necesario para hacer que el equipo funcione.
                    El t??rmino hardware viene del ingl??s, significa partes duras y su uso se ha adoptado en el idioma espa??ol sin traducci??n, siendo utilizado para para aludir a los componentes de car??cter material que conforman un equipo de computaci??n.
                     </p>
                   
                </div>
                </div>
              
            </div>
        </div>
            
        </div>
    </section>
@endsection('section')