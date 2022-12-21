@extends('layout.main')

@section('title','Nosotros')

@section('content')
<center>EQUIPO DE TRABAJO</center>
<hr>
<style>
     @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

/*Cards*/
.container-card{
	width: 100%;
	display: flex;
}
.card{
	width: 100%;
	margin: 15px;
	border-radius: 6px;
	overflow: hidden;
	background:#fff;
	box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
	transition: all 400ms ease-out;
	cursor: default;
}
.card:hover{
	box-shadow: 5px 5px 20px rgba(0,0,0,0.4);
	transform: translateY(-3%);
}
.card img{
	width: 100px;
	height: 100px;
}
.card .contenido-card{
	padding: 15px;
	text-align: center;
}
.card .contenido-card h3{
	margin-bottom: 15px;
	color: #7a7a7a;
}
.card .contenido-card p{
	line-height: 1.8;
	color: #6a6a6a;
	font-size: 14px;
	margin-bottom: 5px;
}
.card .contenido-card a{
	display: inline-block;
	padding: 10px;
	margin-top: 10px;
	text-decoration: none;
	color: #2fb4cc;
	border: 1px solid #2fb4cc;
	border-radius: 4px;
	transition: all 400ms ease;
	margin-bottom: 5px;
}
.card .contenido-card a:hover{
	background: #2fb4cc;
	color: #fff;
}


</style>
<div class="container-card">
     <div class="card">
        <center>
         <img src="https://github.com/OMARG11.png?size=460">
        </center>
         <div class="contenido-card">
             <h3>Omar Guachamin </h3>
             <p>Áreas de interés: <br>
                Desarrollo web, diseño de interfaces, full stack.</p>
             <a href="https://github.com/OMARG11" target="_blank">GitHub</a>
         </div>
     </div> 

     <div class="card">
        <center>
         <img src="https://avatars.githubusercontent.com/u/105679452?v=4">
        </center>
         <div class="contenido-card">
             <h3>Ariel Moposita</h3>
             <p>Áreas de interés: <br>
                Desarrollo web, 
                diseño de interfaces,
                base de datos </p>
             <a href="https://github.com/Cristoferfloor" target="_blank">GitHub</a>
         </div>
     </div>

     <div class="card">
        <center>
         <img src="https://github.com/csjurado.png?size=460">
        </center>
         <div class="contenido-card">
             <h3>Carlos Jurado</h3>
             <p>Áreas de interés: <br>
                Desarrollo Web, Diseño de interfaces, base de datos, gestión en proyectos de software.</p>
             <a href="https://github.com/csjurado" target="_blank">GitHub</a>
         </div>
     </div>
</div>

@endsection()