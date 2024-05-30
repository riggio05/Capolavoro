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
                            class="block py-2 pr-4 pl-3 text-blue-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white">Studenti</a>
                    </li>
                    <li>
                        <a href="http://localhost/P002_PCTOProject/administrator/aziende"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Aziende</a>
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
        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-sky-600">Gestisci</span> i tuoi
        studenti
    </h1>
    <p class="text-center mb-5 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Gestisci con efficienza
        i tuoi alunni
    </p>

    <div class="container mx-auto mt-5">
        <div class="flex justify-center">
            <input type="text" id="searchInput" placeholder="Cerca studente..."
                class="w-64 bg-gray-200 focus:outline-none focus:bg-white border-b-2 border-gray-400 py-2 px-4 rounded-lg"
                onkeyup="searchStudent()">
            <div class="relative ml-3 mt-1">
                <select id="classFilter" onchange="filterByClass()"
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
                    <option value="">Tutte le classi</option>
                    <option value="5IA">5IA</option>
                    <option value="5IB">5IB</option>
                    <option value="5IC">5IC</option>
                    <option value="5AA">5AA</option>
                    <option value="5AB">5AB</option>
                    <option value="5TA">5TA</option>
                </select>
                <div
                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 dark:text-gray-300">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.817 5.024a.75.75 0 011.06 1.06l-4.243 4.243a.75.75 0 01-1.06 0L4.12 6.084a.75.75 0 011.06-1.06L10 8.939l3.757-3.757z">
                        </path>
                    </svg>
                </div>
            </div>

        </div>
        <h2 class="text-2xl font-bold mb-3 mt-5">I tuoi studenti</h2>
        <div id="studentContainer" class="grid grid-cols-1 md:grid-cols-3 gap-4"></div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetchStudent();
        });

        let students = [];

        function fetchStudent() {
            fetch('../administrator/studentiA')
                .then(response => response.json())
                .then(data => {
                    students = data;
                    displayStudents(students);
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        function displayStudents(students) {
            const container = document.getElementById('studentContainer');
            container.innerHTML = ''; // Pulisci il contenitore prima di aggiungere gli studenti

            students.forEach(student => {
                container.innerHTML += `
                <div class="col-span-1">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 ease-in-out relative border border-gray-300">
        <div class="absolute top-0 right-0 bg-sky-600 text-white px-2 py-1 rounded-bl-lg rounded-tr-lg">${student.class_name || 'NA'}</div>
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">${student.name}</div>
            <p class="text-gray-700 text-base">${student.surname}</p>
        </div>
        <div class="px-6 py-4">
            <a href="http://localhost/P002_PCTOProject/administrator/studenti/visita?id=${student.id}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Visita</a>
        </div>
    </div>
</div>


                `;
            });

        }

        function searchStudent() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const filteredStudents = students.filter(student =>
                student.name.toLowerCase().includes(input) ||
                student.surname.toLowerCase().includes(input)
            );
            displayStudents(filteredStudents);
        }

        function filterByClass() {
            const classFilter = document.getElementById('classFilter').value;
            let filteredStudents = [];

            if (classFilter === '') {
                //mostra tutti gli studenti
                filteredStudents = students;
            } else {
                // Filtra gli studenti per la classe selezionata
                filteredStudents = students.filter(student => student.class_name === classFilter);
            }

            displayStudents(filteredStudents);
        }

    </script>
</body>

</html>