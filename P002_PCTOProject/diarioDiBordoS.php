<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizza Diario di Bordo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="" class="flex items-center">
                <img src="../../img/logo/logo2.png" class="mr-3 h-6 sm:h-9" alt="Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Switch360</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="http://localhost/P002_PCTOProject/student/account" id="accountBtn" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Account</a>
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
                        <a href="http://localhost/P002_PCTOProject/student/home" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="http://localhost/P002_PCTOProject/student/aziende" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Aziende</a>
                    </li>
                    <li>
                        <a href="http://localhost/P002_PCTOProject/student/diariodibordo" class="block py-2 pr-4 pl-3 text-blue-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white">Diario Di Bordo</a>
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

<form method="POST" action="http://localhost/P002_PCTOProject/administrator/aziende/visita">
    <input type="hidden" id="agencyId" name="agencyId">
</form>

<body>
    <h1 class="text-center mt-7 mb-10 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-sky-600">Visualizza</span> il
        diario di bordo
    </h1>
    <div id="diariodibordo" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                fetchLogbook();
            });

            function fetchLogbook() {
                fetch('../../api/student/diariodibordo')
                    .then(response => response.json())
                    .then(data => {
                        const container = document.getElementById('diariodibordo');
                        let html = '';

                        if (Array.isArray(data) && data.length > 0) {
                            data.forEach(diario => {
                                html += `
                <div class=" mx-5 my-5 bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="bg-gray-200 text-gray-700 text-lg font-semibold px-6 py-4">
                        <p>${diario.day}</p>
                    </div>
                    <div class="px-6 py-4">
                        <div class="mb-4">
                            <p class="text-gray-700 font-semibold">Entrata Mattina:</p>
                            <p class="text-gray-600">${diario.start_morning}</p>
                        </div>
                        <div class="mb-4">
                            <p class="text-gray-700 font-semibold">Uscita Mattina:</p>
                            <p class="text-gray-600">${diario.end_morning}</p>
                        </div>
                        <div class="mb-4">
                            <p class="text-gray-700 font-semibold">Entrata Pomeriggio:</p>
                            <p class="text-gray-600">${diario.start_afternoon}</p>
                        </div>
                        <div class="mb-4">
                            <p class="text-gray-700 font-semibold">Uscita Pomeriggio:</p>
                            <p class="text-gray-600">${diario.end_afternoon}</p>
                        </div>
                        <div class="mb-4">
                            <p class="text-gray-700 font-semibold">Descrizione:</p>
                            <p class="text-gray-600">${diario.description}</p>
                        </div>
                        <div>
                            <p class="text-gray-700 font-semibold">Ruolo:</p>
                            <p class="text-gray-600">${diario.role}</p>
                        </div>
                        <div class="flex justify-end mt-4">
                            <button onclick="deleteLogbook(${diario.id})" class="text-red-500 hover:text-red-700">Elimina</button>
                        </div>
                    </div>
                </div>`;
                            });
                        } else {
                            html = '<div class="max-w-md mx-auto col-span-1"></div><div class="max-w-md mx-auto col-span-1 bg-white"><div class="text-center py-8"><p class="text-gray-700">Nessun diario di bordo trovato.</p></div></div><div class="max-w-md mx-auto col-span-1"></div>';
                        }
                        container.innerHTML = html;
                    })
                    .catch(error => console.error('Errore nel recupero dei dati:', error));
            }

            function deleteLogbook(id) {
                if (confirm("Sei sicuro di voler eliminare questo diario di bordo?")) {
                    fetch(`../../student/diariodibordo/visita/elimina/${id}`, {
                            method: 'DELETE'
                        })
                        .then(response => {
                            if (response.ok) {
                                fetchLogbook();
                            } else {
                                console.error('Errore nella cancellazione del diario di bordo.');
                            }
                        })
                        .catch(error => console.error('Errore nella cancellazione del diario di bordo:', error));
                }
            }
        </script>
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