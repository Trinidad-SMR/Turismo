@extends('layout.dashboard')

@section('title', 'Historia')

@section('content')

<div class="row">
    <div class="col-sm-12"><h1><center> <a href="https://www.fontspace.com/category/bold">
    <img src="https://see.fontimg.com/api/renderfont4/ALEmp/eyJyIjoiZnMiLCJoIjo2NSwidyI6MTAwMCwi
    ZnMiOjY1LCJmZ2MiOiIjMDAwMDAwIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/aGlzdG9yaWE/mandhor.png" 
    alt="Bold fonts"></a></center> </h1></div>
    <div class="col"></div>
</div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <center><img src="{{ asset ('imagenes/tlapa.png')}}" class="d-block w-50" alt="50"></center>
    </div>
  </div>
</div>

@forelse($histo as $historia)

@empty
    <div>
    <font face="Comic Sans MS">
<br>El pueblo de Tlapacoyan es de origen totonaca prehispánico, en su área existió una gran ciudad totonaca hoy conocida como Vega de la Peña. Durante el siglo XVI se congregó en el lugar actual, junto al viejo pueblo de Yohualtlacualoyan, actualmente es altamente reconocida por su calidad de producción de naranja y plátano; antigua cabecera del distrito tributario del señorío azteca, que comprendía los pueblos de Xilochitlán, Xochicuauhtlan, Tuchtlán, Coapan, Aztapan y Acazacatlán, es conocida por que en ella se llevaron a cabo diversos hechos de armas, con actos heroicos por parte de quienes defendían la plaza. Ha sido declarada dos veces heroica.
<br>
<br>
Estando ocupada Tlapacoyan por los Austriacos (1865), el general Alatorre envió al coronel Ferrer con 60 hombres del batallón Ligero Llave y caballería para que recuperara la población. El 3 de agosto desocuparon los invasores y Ferrer la ocupó. El día 6 fue nuevamente atacada, pero esta vez el enemigo fue rechazado. Quedó al cuidado de la plaza el coronel Ferrer con solo 200 hombres, con quienes rechazó otro ataque en agosto y otro en septiembre. El 17 de noviembre los austriacos atacaron con más de 2,500 soldados contra los 500 que defendían la plaza. El enemigo fue rechazado, pero Alatorre decidió perseguirlo con grandes consecuencias para sus fuerzas.
<br>
<br>
El 21 se reanudo el ataque; la población se sumó a la defensa impulsados por el alcalde Manuel Mendoza; el coronel Ferrer defendía la Loma de Tescal con 120 hombres, 500 invasores pasaron sobre los parapetos y destruyeron toda defensa.
<br>
<br>
Ahí murieron heroicamente entre otros el coronel Ferrer, el comandante Cenobio Rojano, el Capitán Juan Mejía, el Capitán Pascual Arriaga y el teniente Antonio Ortega. El Coronel Ferrer recibió Honores Militares por parte de sus victimarios y póstumamente se le concedió el grado de General. En el Monumento que se levantó para ellos en el campo El Arenal, hoy los Héroes se lee: “Defendieron a su patria como leales y al sucumbir se hicieron inmortales, víctimas generosas de la suerte, ¿Quién no envidia la gloria de su muerte?”.</font>
<br>
<br>
    </div>

    <div>
<h5><b>Localización:</b></h5> 
<font face="Comic Sans MS">
Se encuentra ubicado en la zona centro del estado en las coordenadas 19° 58' latitud norte y 97° 13' longitud oeste a una altura de 430 metros sobre el nivel del mar. Limita al noreste con Martínez De la Torre, al sureste con Atzalan, al sur con Jalacingo. Su distancia aproximada al noroeste de la capital del estado por carretera es de 135 Km.</font>
    <br>
    </div>
   <center><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d240007.65878771074!2d-97.21252100000001!3d19.961469!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sus!4v1619056606458!5m2!1ses!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>

<br>
    <div>
<h5><b>Extensión:</b></h5>
     <font face="Comic Sans MS">
         Tiene una superficie de 167.96 Km2, cifra que representa un 0.23% total del estado.
     </font> 
    </div>
<br>
<div>
<h5><b>Clima:</b></h5>
    <font face="Comic Sans MS">
    Su clima es cálido-húmedo-regular con una temperatura promedio de 18°C; su precipitación pluvial media anual es de 1500mm.
    </font>
    </div>
<br>
<br>
<br>
<br>
@endforelse

@endsection