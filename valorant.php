<?php
    $title = "Valorant";
    require 'commons/header.php';

?>

<div class="flex justify-center items-center h-16 bg-gray-500">
  <a class="flex justify-center text-center" href="https://playvalorant.com/fr-fr/">
    <img src="https://freelogopng.com/images/all_img/1664302216valorant-logo-png.png" class="h-8 mr-3" alt="valo_logo" />
  </a>
</div>

<div class="flex justify-between mt-4">
    <div class="w-1/4">
        <div class="border-b mb-2 pb-2">
            <h3 class="text-center text-xl font-bold">Crosshair</h3>
        </div>
        <div class="text-center">
            <p>Pour avoir le même, il te suffit de copier et coller le code suivant :</p>
            <p class="mb-4">0;P;h;0;0t;1;0l;4;0o;1;0a;1;0f;0;1a;0</p>
        </div>
    </div>
  
    <div class="w-1/4">
        <div class="border-b mb-2 pb-2">
            <h3 class="text-center text-xl font-bold">Graphismes</h3>
        </div>
        <div class="text-center">
            <p>Micka a tout mis en full avec la FOV au max </p>
        </div>
    </div>

    <div class="w-1/4">
        <div class="border-b mb-2 pb-2">
            <h3 class="text-center text-xl font-bold">Sensi</h3>
        </div>
        <div class="text-center">
            <p>0.43 avec 800 dpi</p>
        </div>
    </div>

    <div class="w-1/4">
        <div class="border-b mb-2 pb-2">
            <h3 class="text-center text-xl font-bold">Résolution</h3>
        </div>
        <div class="text-center">
            <p>Il est en 1920 x 1080p</p>
        </div>
    </div>
</div>

<div id="mmr-info">
        <!-- Les informations sur le MMR seront affichées ici -->
    </div>

    <script>
        // Effectuer la requête AJAX
        var xhr = new XMLHttpRequest();
        var url = "https://api.kyroskoh.xyz/valorant/v1/mmr/eu/mickalow/euw";

        xhr.open("GET", url, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                afficherInformations(data);
            }
        };

        xhr.send();

        // Afficher les informations sur la page web
        function afficherInformations(data) {
            var mmrInfoDiv = document.getElementById("mmr-info");

            // Remplacez ces lignes par les données que vous souhaitez afficher à partir de l'objet "data"
            mmrInfoDiv.innerHTML = "Pseudo: " + data.pseudo + "<br>" +
                                  "MMR: " + data.mmr + "<br>" +
        }
    </script>




<?php require 'commons/footer.php'; ?>
