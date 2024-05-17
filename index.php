<?php
include 'includes/header.php';
const API_URL ="https://whenisthenextmcufilm.com/api";
#Inicializar sesion de curl ch= curl handle
$ch = curl_init(API_URL);
//INICIAR Resultado y no mostrar en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//ejecutar la peticion y guardar resutlado
$result = curl_exec($ch);
//alternativa para hacer peticion solo metodo get de una api
// $result= file_get_contents(API_URL);
$data = json_decode($result, true);
curl_close($ch);
// var_dump($data)

?>

<main>
    <!-- Seguir la api ordenadamente
        <pre style="font-size:10px; overflow:scroll; height:250px; width:50%;">
        <?php var_dump($data)?>
    </pre> -->

    
    <section>
        <h1>Proxima pelicula de Marvel</h1>
        <img src="<?php echo $data['poster_url']?>" width="300" alt="">
    </section>
    <hgroup>
        <h2><?=$data['title']?> Se estrena en <?=$data["days_until"];?> días</h2>
        <p>Fecha de estreno: <?=$data["release_date"];?></p>
        <p>La siguiente es: <?=$data["following_production"]["title"];?></p>

    </hgroup>
</main>