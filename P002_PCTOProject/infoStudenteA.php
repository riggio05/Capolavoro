<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Studente</title>
    <style>
        .input-field {
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: auto;
            min-width: 100px;
            max-width: 100%;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .button:hover {
            background-color: #45a049;
        }

        .flex-container {
            display: flex;
            gap: 10px;
            /* Spazio tra i bottoni */
        }
    </style>
</head>

<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="" class="flex items-center">
                <img src="../../img/logo/logo2.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Switch360</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="http://localhost/P002_PCTOProject/administrator/account" id="accountBtn" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>

                </a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false" id="mobileMenuBtn">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="http://localhost/P002_PCTOProject/administrator/home" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="http://localhost/P002_PCTOProject/administrator/studenti" class="block py-2 pr-4 pl-3 text-blue-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white">Studenti</a>
                    </li>
                    <li>
                        <a href="http://localhost/P002_PCTOProject/administrator/aziende" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Aziende</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    document.getElementById("mobileMenuBtn").addEventListener("click", function() {
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

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Informazioni Studente</h1>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div id="student-info"></div>

            <script>
                function getStudentData() {
                    fetch('http://localhost/P002_PCTOProject/api/administrator/studenti/visita?id=' + id, {
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
                        .then(studentData => {
                            const studentInfoDiv = document.getElementById('student-info');
                            if (studentData.message) {
                                // Se non ci sono risultati
                                studentInfoDiv.textContent = studentData.message;
                            } else {
                                // Se ci sono risultati
                                const student = studentData[0];
                                const studentHTML = `
                            <form method="POST" action="http://localhost/P002_PCTOProject/administrator/studenti/editConfirm">
                                <input type="hidden" name="idStudente" value="${id}">
                                <div class="mb-4">
                                    <label for="nome">Nome:</label>
                                    <input type="text" id="nome" name="nome" class="input-field" value="${student.name}">
                                </div>
                                <div class="mb-4">
                                    <label for="cognome">Cognome:</label>
                                    <input type="text" id="cognome" name="cognome" class="input-field" value="${student.surname}">
                                </div>
                                <div class="mb-4 flex">
                                    <label for="email">Email:</label>
                                    <p class="ml-4">${student.mail}</p>
                                </div>
                                <div class="mb-4">
                                    <label for="indirizzo">Indirizzo:</label>
                                    <input type="text" id="indirizzo" name="indirizzo" class="input-field" value="${student.address}">
                                </div>
                                <div class="mb-4">
                                    <label for="cap">CAP:</label>
                                    <input type="text" id="cap" name="cap" class="input-field" value="${student.CAP}">
                                </div>
                                <div class="mb-4">
                                    <label for="materia">Materia:</label>
                                    <input type="text" id="materia" name="materia" class="input-field" value="${student.subject || 'Non assegnata'}">
                                </div>
                                <div class="mb-4">
                                    <label for="classe">Classe:</label>
                                    <input type="text" id="classe" name="classe" class="input-field" value="${student.class_name}">
                                </div>
                                <div class="mb-4">
                                    <label for="anno_scolastico">Anno Scolastico:</label>
                                    <input type="text" id="anno_scolastico" name="anno_scolastico" class="input-field" value="${student.school_year}">
                                </div>
                                <div class="mb-4 flex">
                                    <label for="azienda">Azienda associata: </label>
                                    <p class="ml-4">${student.agency || 'Non assegnato'} </p>
                                </div>
                                <div class="flex-container">
                                    <button id="modificaBtn" class="button">Modifica</button>
                                    <a href="http://localhost/P002_PCTOProject/administrator/studenti/visita/diariodibordo?id=${student.id}" class="button">Visualizza diario di Bordo</a>
                                </div>
                            </form>
                        `;
                                studentInfoDiv.innerHTML = studentHTML;
                            }
                        })
                        .catch(error => {
                            console.error('Si è verificato un errore:', error);
                        });
                }

                window.onload = getStudentData;

                function getParameterByName(name, url = window.location.href) {
                    name = name.replace(/[\[\]]/g, '\\$&');
                    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                        results = regex.exec(url);
                    if (!results) return null;
                    if (!results[2]) return '';
                    return decodeURIComponent(results[2].replace(/\+/g, ' '));
                }

                let id = getParameterByName('id');

                console.log(id);
            </script>

        </div>

        <div id="favouritesHeading" class="flex justify-between items-center mb-4" style="display: none;">
            <h2 class="text-xl font-bold">Aziende Preferite</h2>
        </div>
        <div id="favouritesContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    fetchFavourites();
                });

                function fetchFavourites() {
                    fetch('../../api/preferiti?id=' + id)
                        .then(response => response.json())
                        .then(data => {
                            const container = document.getElementById('favouritesContainer');
                            const heading = document.getElementById('favouritesHeading');
                            let html = '';
                            if (data.length > 0) {
                                heading.style.display = 'block';
                                data.forEach(favourites => {
                                    html += `
                                    <div class="rounded overflow-hidden shadow-lg flex flex-col mb-5">
                        <a href="#"></a>
                        <div class="relative"><a href="#">
                                <img class="w-full h-48 object-cover"
                                    src="../../img/aziende/${favourites.img}"
                                    alt="Immagine Azienda">
                                <div
                                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                </div>
                            </a>
                            <a href="http://localhost/P002_PCTOProject/administrator/aziende/visita?id=${favourites.id}">
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
                            <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                                <form method="POST" action="http://localhost/P002_PCTOProject/administrator/studenti/visita/assegnaAzienda">
                                    <input type="hidden" name="studentId" value="${id}">
                                    <input type="hidden" name="aziendaId" value="">
                                    <button type="submit" class="ml-1 bg-sky-600 text-white font-bold py-2 px-4 rounded-md hover:bg-sky-700 focus:outline-none focus:shadow-outline" data-azienda-id="${favourites.id}" onclick="assignAziendaId(event, this)">
                                        Assegna azienda
                                    </button>
                                </form>
                            </span>
                        </div>
                    </div>`;
                                });
                            } else {
                                heading.style.display = 'none';
                                html = '<p></p>';
                            }
                            container.innerHTML = html;
                        })
                        .catch(error => console.error('Error fetching data:', error));
                }

                function assignAziendaId(event, button) {
                    event.preventDefault();
                    const form = button.closest('form');
                    form.querySelector('input[name="aziendaId"]').value = button.dataset.aziendaId;
                    form.submit();
                }
            </script>
        </div>

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Aziende</h2>
        </div>
        <div id="agencyContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    fetchAgency();
                });

                function fetchAgency() {
                    fetch('../../student/aziendeS')
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
                                    src="../../img/aziende/${agency.img}"
                                    alt="Immagine Azienda">
                                <div
                                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                </div>
                            </a>
                            <a href="http://localhost/P002_PCTOProject/administrator/aziende/visita?id=${agency.id}">
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
                            <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                                <form method="POST" action="http://localhost/P002_PCTOProject/administrator/studenti/visita/assegnaAzienda">
                                    <input type="hidden" name="studentId" value="${id}">
                                    <input type="hidden" name="aziendaId" value="">
                                    <button type="submit" class="ml-1 bg-sky-600 text-white font-bold py-2 px-4 rounded-md hover:bg-sky-700 focus:outline-none focus:shadow-outline" data-azienda-id="${agency.id}" onclick="assignAziendaId(event, this)">
                                        Assegna azienda
                                    </button>
                                </form>
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

</html>