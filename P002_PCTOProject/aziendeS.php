<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>

<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="" class="flex items-center">
                <img src="../img/logo/logo2.png" class="mr-3 h-6 sm:h-9" alt="Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Switch360</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="http://localhost/P002_PCTOProject/student/account" id="accountBtn"
                    class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800"><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>

                </a>
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false" id="mobileMenuBtn">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="http://localhost/P002_PCTOProject/student/home"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="http://localhost/P002_PCTOProject/student/aziende"
                            class="block py-2 pr-4 pl-3 text-blue-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white">Aziende</a>
                    </li>
                    <li>
                        <a href="http://localhost/P002_PCTOProject/student/diariodibordo"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Diario
                            di Bordo</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    document.getElementById("mobileMenuBtn").addEventListener("click", function () {
        var menu = document.getElementById("mobile-menu-2");
        var btn = document.getElementById("mobileMenuBtn");

        if (menu.style.display === "none" || menu.style.display === "") {
            menu.style.display = "block";
            btn.setAttribute("aria-expanded", "true");
        } else {
            menu.style.display = "none";
            btn.setAttribute("aria-expanded", "false");
        }
    });
</script>

<body>
    <h1 class="text-center mt-7 mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-sky-600">Esplora</span> le
        aziende
    </h1>
    <p class="text-center mb-5 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Esplora le aziende e
        scegli fino a 3 preferiti
    </p>

    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">

        <input type="text" id="searchInput" class="w-full mb-8 p-3 border border-gray-300 rounded-lg"
            placeholder="Cerca azienda..." onkeyup="filterAziende()">

        <!-- Contenitore dei bottoni di ricerca -->
        <div class="border-b mb-5 flex text-sm">
            <button onclick="mostraAziende()">
                <div id="bordo1"
                    class="text-sky-600 flex items-center pb-2 pr-2 border-b-2 border-sky-600 uppercase mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#666769" class="h-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
                    </svg>
                    <p class="font-semibold inline-block" id="scritta1">Aziende disponibili</p>
                </div>
            </button>
            <button onclick="mostraPreferiti()">
                <button onclick="mostraPreferiti()">
                    <div id="bordo2" class="text-gray-600 flex items-center pb-2 pr-2 uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                        </svg>
                        <p class="font-semibold inline-block" id="scritta2">Aziende preferite</p>
                    </div>
                </button>
            </button>
        </div>

        <!-- Contenitore delle aziende -->
        <div id="agencyContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            <!-- Script per caricare dinamicamente le aziende -->
        </div>

        <!-- Contenitore delle aziende preferite (inizialmente nascosto) -->
        <div id="favouriteContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10" hidden>
            <!-- Script per caricare dinamicamente le aziende preferite -->
        </div>


        <!--AZIENDE-->
        <div id="agencyContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            <script>
                function filterAziende() {
                    var input, filter, cards, cardContainer, title, i;
                    input = document.getElementById("searchInput");
                    filter = input.value.toUpperCase();
                    cardContainer = document.getElementById("agencyContainer");
                    cards = cardContainer.getElementsByClassName("rounded overflow-hidden shadow-lg flex flex-col mb-5");
                    for (i = 0; i < cards.length; i++) {
                        title = cards[i].querySelector(".font-medium.text-lg.inline-block");
                        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
                            cards[i].style.display = "";
                        } else {
                            cards[i].style.display = "none";
                        }
                    }
                }
                document.addEventListener('DOMContentLoaded', function () {
                    fetchAgency();
                    fetchFavourites();
                    document.getElementById("favouriteContainer").style.display = 'none';
                });

                function fetchAgency() {
                    fetch('../student/aziendeS')
                        .then(response => response.json())
                        .then(data => {

                            const container = document.getElementById('agencyContainer');
                            let html = '';
                            data.forEach(agency => {
                                html += `
                        <div class="rounded overflow-hidden shadow-lg flex flex-col mb-5">
                        <a href="#"></a>
                        <div class="relative"><a href="#">
                                <img class="w-full h-48 object-cover"
                                    src="../img/aziende/${agency.img}"
                                    alt="Immagine Azienda">
                                <div
                                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                </div>
                            </a>
                            <a href="http://localhost/P002_PCTOProject/student/aziende/visita?id=${agency.id}">
                                <div
                                    class="text-xs absolute top-0 right-0 bg-sky-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-sky-600 transition duration-500 ease-in-out">
                                    Visita
                                </div>
                            </a>
                        </div>
                        <div class="px-6 py-4 mb-auto">
                            <a href="#"
                                class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">${agency.name}</a>
                            <p class="text-gray-500 text-sm">
                            ${agency.description}
                            </p>
                        </div>
                        <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                            <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                                `;
                                //stelline in base al voto
                                for (let i = 0; i < agency.mark; i++) {
                                    html += `
                                    <svg class="text-yellow-500 w-5 h-auto fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path
                                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                                    </svg>
                                    `;
                                }
                                html += `
                            </span>
    
                            <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                                <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                    </path>
                                </svg>
                                <button class="ml-1">
                                    Vedi Recensioni
                                </button>
                            </span>
                        </div>
                    </div>`;
                            });
                            // html += '</div>';
                            container.innerHTML = html;
                        })
                        .catch(error => console.error('Error fetching data:', error));
                }
            </script>
        </div>

        <!--PREFERITI-->
        <div id="favouriteContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10" hidden>
            <script>
                function fetchFavourites() {
                    fetch('../api/student/aziende/preferiti')
                        .then(response => response.json())
                        .then(data => {

                            const container = document.getElementById('favouriteContainer');
                            let html = '';
                            data.forEach(favourites => {
                                html += `
                    <div class="rounded overflow-hidden shadow-lg flex flex-col mb-5">
                        <a href="#"></a>
                        <div class="relative"><a href="#">
                                <img class="w-full h-48 object-cover"
                                    src="../img/aziende/${favourites.img}"
                                    alt="Immagine Azienda">
                                <div
                                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                </div>
                            </a>
                            <a href="http://localhost/P002_PCTOProject/student/aziende/visita?id=${favourites.id}">
                                <div
                                    class="text-xs absolute top-0 right-0 bg-sky-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-sky-600 transition duration-500 ease-in-out">
                                    Visita
                                </div>
                            </a>
                        </div>
                        <div class="px-6 py-4 mb-auto">
                            <a href="#"
                                class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">${favourites.name}</a>
                            <p class="text-gray-500 text-sm">
                            ${favourites.description}
                            </p>
                        </div>
                        <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                            <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                                `;
                                //stelline in base al voto
                                for (let i = 0; i < favourites.mark; i++) {
                                    html += `
                                    <svg class="text-yellow-500 w-5 h-auto fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path
                                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                                    </svg>
                                    `;
                                }
                                html += `
                            </span>

                            <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                                <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                    </path>
                                </svg>
                                <button class="ml-1">
                                    Vedi Recensioni
                                </button>
                            </span>
                        </div>
                    </div>`;
                            });
                            // html += '</div>';
                            container.innerHTML = html;
                        })
                        .catch(error => console.error('Error fetching data:', error));
                }
            </script>
        </div>
</body>

<script>
    function mostraAziende() {
        document.getElementById("scritta1").style.color = "#0284C7";
        document.getElementById("scritta2").style.color = "#4B5563";
        document.getElementById("bordo2").style.border = "none";
        document.getElementById("bordo1").style.borderBottom = "solid #0284C7 2px";

        document.getElementById("favouriteContainer").style.display = 'none';
        document.getElementById("agencyContainer").style.display = 'grid';
        document.getElementById("agencyContainer").classList.remove("grid-cols-1");
        document.getElementById("agencyContainer").classList.add("grid-cols-3");
    }


    function mostraPreferiti() {
        document.getElementById("scritta1").style.color = "#4B5563";
        document.getElementById("scritta2").style.color = "#0284C7";
        document.getElementById("bordo1").style.border = "none";
        document.getElementById("bordo2").style.borderBottom = "solid #0284C7 2px";

        document.getElementById("agencyContainer").style.display = 'none';
        document.getElementById("favouriteContainer").style.display = 'grid';
        document.getElementById("favouriteContainer").classList.remove("grid-cols-3");
        document.getElementById("favouriteContainer").classList.add("grid-cols-1");
    }

</script>

</html>