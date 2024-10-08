<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include("../../Controller/conexion.php");
    include("../../Model/login.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoBA</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        #map {
            width: 100%;
            height: 100%;
            border-radius: 8px;
            border: 2px solid #ddd;
        }
    </style>
</head>
<body>
    <header>
        <img src="../img/ECOBA.png" class="logo" alt="" srcset="">
        <a href="../../index.php#" class="ingresar-btn">Logout</a>
    </header>
    <main>
        <div class="map-container">
            <div class="map-left">
                <div id="map"></div>
            </div>
            <div class="map-right">
            </div>
        </div>
    </main>
    <footer>

        <div class="footer-der">
            <p>&copy; 2024 ECOBA. Todos los derechos reservados.</p>    
        </div>
    </footer>
    
    <script>
        var map = L.map('map').setView([ -34.603722, -58.381592], 9);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        <?php
        // Example data - you can replace this with database queries or other data sources
        $points = [
            ['name' => 'Obelisco', 'lat' => -34.6037, 'lon' => -58.3816, 'info' => 'Famous Buenos Aires landmark'],
            ['name' => 'Casa Rosada', 'lat' => -34.6083, 'lon' => -58.3712, 'info' => 'The official residence of the President of Argentina'],
            ['name' => 'La Boca', 'lat' => -34.6345, 'lon' => -58.3631, 'info' => 'Colorful neighborhood known for Caminito street']
        ];

        foreach ($points as $point) {
            echo "L.marker([{$point['lat']}, {$point['lon']}]).addTo(map)
                    .bindPopup('<b>{$point['name']}</b><br>{$point['info']}');\n";
        }
        ?>
    </script>
</body>
</html>