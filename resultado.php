<?php
$nombreUsuario = '';
$edadUsuario = '';
$nombreLugar = '';
$imagenLugar = '';

class Cliente{
    public $nombre;
    public $edad;

    public function getNombre(){
        return $this->nombre;
    }

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}

// DATOS DEL USUARIO
if(isset($_POST['nombre']) && isset($_POST['edad'])){
    $c1 = new Cliente($_POST['nombre'], $_POST['edad']);
    $nombreUsuario = $c1->getNombre();
    $edadUsuario = $c1->edad;
}

// DESTINO
if(isset($_POST['destino'])){
    $destino = $_POST['destino'];

    $nombreLugares = [
        "plaza" => "Plaza Flores",
        "cotopaxi" => "Volcán Cotopaxi",
        "mitad" => "Mitad del Mundo",
        "quilotoa" => "Laguna del Quilotoa",
        "galapagos" => "Islas Galápagos",
        "cajas" => "Parque Nacional El Cajas",
        "turi" => "Mirador El Turi"
    ];

    $imagenes = [
        "plaza" => "src/plaza.jpg",
        "cotopaxi" => "src/volcan.jpg",
        "mitad" => "src/mitad.jpg",
        "quilotoa" => "src/laguna.jpeg",
        "galapagos" => "src/isla.jpg",
        "cajas" => "src/cajas.jpg",
        "turi" => "src/turi.png"
    ];

    if(isset($imagenes[$destino])){
        $nombreLugar = $nombreLugares[$destino];
        $imagenLugar = $imagenes[$destino];
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Turismo</title>
    <link rel="icon" type="image-x/icon" href="src/Gemini_Generated_Image_oobl17oobl17oobl-removebg-preview.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BJCree:wght@400;500;600;700&family=Habibi&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+DE+SAS:wght@100..400&display=swap" rel="stylesheet">

    <style>
        body{
            padding: 0;
            margin: 0;
            margin-top: 0;
            
            font-family: "Habibi", serif;;
        }
        p{
            margin: 0;
            padding: 0;
        }
        h1,h2,h3{
            margin: 0;
            padding: 0;
        }
        
        header{
            height: 25%;
            min-width: 160px;
            background-color: #F2A900;
            margin: 0;
            padding: 2%;
            text-align: center;
        }
        nav{
            height: 10%;
            background-color: #006B3F;
        }
        nav ul{
            list-style-type: none;
            padding: 1%;
            margin: 0;
            text-align: center;
        }
        nav li {
            list-style-type: none;
            padding: 0;
            margin: 0;
            line-height: 14px;
        }
        nav li a{
            color: white;
            text-decoration: none;
            margin-right: 50px;
            font-size: 20px;

        }
        /*a:hover{
            text-decoration: underline;
        }*/
        main{
            height: 100%;
            background-color: #ffffff;
        }
        main aside{
            height: 40%;
            height: 40%;
            float: right;
            margin: 0px 29px 0 0px;
        }
        main aside iframe{
            border-radius: 8px;
        }
        section{
            background-color: rgb(241, 241, 241);
            border-left: 4px solid slateblue;
            border-radius: 8px 8px 8px 0px;
            margin: 18px;
            margin-top: 25px;
            padding: 10px 10px 10px 14px;
            box-shadow: 5px 5px #003753bd;
            
        }
        section p{
            margin: 8px;
            font-size: 18px;
        }
        section.b{
            background-color:rgb(218, 216, 216);
            margin: 8px;
            
        }
        div.contenedor{
            height: 80%;
            width: 99.9%;
            border: 1px solid ;
        }
        div.label{
            height: 15%;
            width: 21%;
            float: left;
            
        }
        div.input{
            min-height: 60px;
            width: 78.03%;
            float: left;
            
        }
        section.izq{
            width: 60%;
            height: 100%;
            float: left;
        }
        section.dere{
            width: 30%;
            float: right;
        }
        
        main img{
            padding: 10px;
            width: 98%;
            height: 98%;
        }
        
        
        section figure{
            padding: 0;
            margin: 0;

        }
        mark{
            background-color: rgb(241, 211, 253);
            border-radius: 8px;
            padding: 2px 9px 2px 9px;
            
        }
        footer{
            clear: both;
            height: 10%;
            background-color: #003853;
            color: white;
            font-size: 20px;
            padding: 8px;
            text-align: center;
            

        }
    </style>
</head>
<body>
    <header>
        <h1>Pagina Turística del Ecuador</h1>
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.html">Inicio</a>
                <a href="lugares.html">Lugares Turísticos</a>
            </li>
        </ul>
    </nav>
    <main>
        <div class="contenedor"> 
            <section class="izq">
                <h3><mark>Lugar Turístico Elegido</mark></h3>

                <?php if($nombreLugar != '') { ?>
                    <article>
                        <h4><?php echo $nombreLugar; ?></h4>

                        <figure>
                            <img src="<?php echo $imagenLugar; ?>" alt="Imagen de <?php echo $nombreLugar; ?>">
                            
                        </figure>
                    </article>
                <?php 
                }
                ?>
            </section>
            <section class="dere">
                <h3><mark>Datos del Turista</mark></h3>

                <?php if($nombreUsuario != '') { ?>
                    <p><strong>Nombre:</strong> <?php echo $nombreUsuario; ?></p>
                    <p><strong>Edad:</strong> <?php echo $edadUsuario; ?></p>
                    <p><strong>Destino elegido:</strong> <?php echo $nombreLugar; ?></p>
                    <p><strong>Estado de registro:</strong> Confirmado</p>
                    <p><strong>Fecha:</strong> <?php echo date("d/m/Y"); ?></p>
                <?php } ?>
            </section>
        </div>
        
    </main>
    <footer>
        <p>Derechos Reservados - 2026</p>
    </footer>
</body>
</html>