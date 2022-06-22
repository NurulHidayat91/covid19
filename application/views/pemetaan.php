<div id="map"  style="width: 100%; height: 500px;"></div>
 
<script>
    var map = L.map('map').setView([0, 0],2);

    var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/dark-v10',      
    }).addTo(map);

    <?php foreach($lokasi as $value) {?>
        var marker = L.marker([<?=$value['lat']?>, <?=$value['long']?>]).addTo(map)
        .bindPopup("Negara : <?=$value['countryRegion']?> <br>" +
                    "Positif : <?=$value['confirmed']?><br>" +
                    "Meninggal : <?=$value['deaths']?>")

    
      
    <?php }?>
   
</script>