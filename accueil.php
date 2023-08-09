<?php
    $title = "Accueil";
    require 'commons/header.php';
?>

<div class="h-screen flex flex-col">
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-center items-center">
            <!-- Bouton Accueil -->
            <button class="text-white mr-4" onclick="window.location.href='accueil.php'">Accueil</button>
            
            <!-- Bouton Services avec dropdown -->
            <div class="relative inline-flex mr-4">
                <button id="dropdownServices1" data-dropdown-toggle="dropdownHover1" data-dropdown-trigger="hover" class="text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Config jeux <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownHover1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownServices1">
                        <li>
                            <a href="valorant.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"> Valorant </a>
                        </li>
                        <li>
                            <a href="apex.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">apex</a>
                        </li>
                        <li>
                            <a href="xdefiant.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Xdefiant</a>
                        </li>
                        <li>
                            <a href="fornite.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fornite</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bouton Setup avec dropdown -->
            <div class="relative inline-flex mr-4">
                <button id="dropdownServices2" data-dropdown-toggle="dropdownHover2" data-dropdown-trigger="hover" class="text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"> Setup  <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownHover2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownServices2">
                        <li>
                            <a href="ecrans.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Écrans</a>
                        </li>
                        <li>
                            <a href="gaming.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Gaming</a>
                        </li>
                        <li>
                            <a href="son.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Son</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bouton Pc avec dropdown -->
            <div class="relative inline-flex">
                <button id="dropdownContact3" data-dropdown-toggle="dropdownHover3" data-dropdown-trigger="hover" class="text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"> Pc  <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownHover3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownContact3">
                        <li>
                            <a href="pc_jeux.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pc pour le jeux</a>
                        </li>
                        <li>
                            <a href="pc_stream.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pc pour le stream</a>
                        </li>
                    </ul>
                </div>
            </div>
            <button class="text-white mr-4" onclick="window.location.href='ranks.php'">Ranks</button>
        </div>
    </nav>
</div>

<?php
    require 'commons/footer.php';
?>
