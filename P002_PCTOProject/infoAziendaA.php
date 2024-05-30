<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Azienda</title>
</head>

<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Switch360</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="http://localhost/P002_PCTOProject/administrator/account" id="accountBtn"
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
                        <a href="http://localhost/P002_PCTOProject/administrator/home"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="http://localhost/P002_PCTOProject/administrator/studenti"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Studenti</a>
                    </li>
                    <li>
                        <a href="http://localhost/P002_PCTOProject/administrator/aziende"
                            class="block py-2 pr-4 pl-3 text-blue-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white">Aziende</a>
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

<form method="POST" action="http://localhost/P002_PCTOProject/student/aziende/visita">
    <input type="hidden" id="agencyId" name="agencyId">
</form>



<body>
    <div id="agency-info"></div>

    <script>
        // Funzione per ottenere i dati dello agencye dal server
        function getagencyData() {
            fetch('http://localhost/P002_PCTOProject/api/student/aziende/visita?id=' + id, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json'
                }
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Errore nella richiesta.');
                    }
                    return response.json();
                })
                .then(agencyData => {
                    const agencyInfoDiv = document.getElementById('agency-info');
                    if (agencyData.message) {
                        // Se non ci sono risultati
                        agencyInfoDiv.textContent = agencyData.message;
                    } else {
                        // Se ci sono risultati
                        const agency = agencyData[0];
                        const agencyHTML = `
                

    <h1 class="text-center mt-7 mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-sky-600">${agency.name}</span>
    </h1>
    <div class="flex item-center mx-5 justify-center mt-16">
        <div class="max-w-4xl bg-white rounded-lg flex overflow-hidden">
            <div class="w-1/2">
                <img src="../../img/aziende/${agency.img}" alt="Azienda" class="object-cover h-full w-full">
            </div>
            <div class="w-1/2 p-8">
                <p class="text-gray-700 mb-4">${agency.description}</p>
                <div class="mb-4">
                    <h2 class="text-xl font-semibold mb-2">Indirizzo</h2>
                    <p class="text-gray-700">${agency.address} - ${agency.CAP}</p>
                </div>
                <div>
                    <h2 class="text-xl font-semibold mb-2">Tutor</h2>
                    <ul class="text-gray-700">
                        <li class="flex">${agency.nameTutor} ${agency.surnameTutor} <p class="ml-2 mr-1">num:</p>${agency.phone}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
                `;
                        agencyInfoDiv.innerHTML = agencyHTML;
                    }
                })
                .catch(error => {
                    console.error('Si è verificato un errore:', error);
                });
        }
        window.onload = getagencyData;
    </script>
    <div class="container mx-auto ">
        <h2 class="text-lg font-semibold text-gray-800 mb-3">Recensioni</h2>
        <div id="reviewsContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    fetchReviews();
                });

                function fetchReviews() {
                    fetch('../../api/aziende/visita/recensione?id=' + id)
                        .then(response => response.json())
                        .then(data => {

                            const container = document.getElementById('reviewsContainer');
                            let html = '';
                            data.forEach(reviews => {
                                html += `
                                <div class="bg-white rounded-xl overflow-hidden shadow-md p-6 border mb-5">
            <h3 class="text-lg font-semibold mb-2">${reviews.surname} ${reviews.name}</h3>
            <div class="flex items-center mb-2">
                <div class="text-yellow-400 mr-1 flex">
                `;
                                for (let i = 0; i < reviews.mark; i++) {
                                    html += `
                                    <svg class="text-yellow-500 w-5 h-auto fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path
                                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                                    </svg>
                                    `;
                                }
                                html += `
                </div>
                <div class="text-yellow-400 mr-1">
                    <svg class="w-6 h-auto fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!-- Icona stella piena -->
                    </svg>
                </div>
            </div>
            <p class="text-gray-700">${reviews.comment}</p>
        </div>`;
                            });
                            container.innerHTML = html;
                        })
                        .catch(error => console.error('Error fetching data:', error));
                }
            </script>
        </div>
    </div>

</body>


<script>
    function getParameterByName(name, url = window.location.href) {
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    let id = getParameterByName('id');
    document.querySelector('#agencyId').value = id;
</script>

</html>