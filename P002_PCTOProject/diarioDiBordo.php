<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diario di Bordo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>
    .button {
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
</style>

<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="" class="flex items-center">
                <img src="../img/logo/logo2.png" class="mr-3 h-6 sm:h-9" alt="Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Switch360</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="http://localhost/P002_PCTOProject/student/account" id="accountBtn" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
                        <a href="http://localhost/P002_PCTOProject/student/home" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="http://localhost/P002_PCTOProject/student/aziende" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Aziende</a>
                    </li>
                    <li>
                        <a href="http://localhost/P002_PCTOProject/student/diariodibordo" class="block py-2 pr-4 pl-3 text-blue-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white">Diario
                            di Bordo</a>
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

<body class="text-black">
    <h1 class="text-center mt-7 mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-sky-600">Compila</span> il tuo
        diario di bordo
    </h1>
    <div class="max-w-md mx-auto my-8 p-8 rounded shadow-lg bg-white">

        <form method="POST" action="http://localhost/P002_PCTOProject/student/diariodibordo">
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2" for="date">Giorno:</label>
                <input class="w-full px-3 py-2 rounded border border-gray-300 bg-white" required="" type="date" id="date" name="date">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2" for="startMorning">Ora di Entrata (Mattina):</label>
                <input class="w-full px-3 py-2 rounded border border-gray-300 bg-white" required="" type="time" id="startMorning" name="startMorning">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2" for="endMorning">Ora di Uscita (Mattina):</label>
                <input class="w-full px-3 py-2 rounded border border-gray-300 bg-white" required="" type="time" id="endMorning" name="endMorning">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2" for="startAfternoon">Ora di Entrata (Pomeriggio):</label>
                <input class="w-full px-3 py-2 rounded border border-gray-300 bg-white" required="" type="time" id="startAfternoon" name="startAfternoon">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2" for="endAfternoon">Ora di Uscita (Pomeriggio):</label>
                <input class="w-full px-3 py-2 rounded border border-gray-300 bg-white" required="" type="time" id="endAfternoon" name="endAfternoon">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2" for="description">Descrizione:</label>
                <textarea class="w-full px-3 py-2 rounded border border-gray-300 bg-white" required="" id="description" name="description" rows="4"></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2" for="role">Ruolo Svolto:</label>
                <input class="w-full px-3 py-2 rounded border border-gray-300 bg-white" required="" type="text" id="role" name="role">
            </div>
            <div class="flex">
                <button class="bg-sky-600 text-white hover:bg-white hover:text-sky-600 font-bold py-2 px-4 rounded" type="submit">Invia</button>
            </div>
            <a href="http://localhost/P002_PCTOProject/student/diariodibordo/visualizza" class="text-sky-600 mt-2">Visualizza diario di Bordo</a>
        </form>
    </div>
</body>

</html>