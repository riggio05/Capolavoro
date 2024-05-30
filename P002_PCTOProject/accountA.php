<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Account</title>
</head>

<body class="bg-gray-100 dark:bg-gray-800">
    <header class="bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="container mx-auto px-4 lg:px-6 py-3 flex justify-between items-center">
            <a href="http://localhost/P002_PCTOProject/administrator/home"
                class="flex items-center text-gray-900 dark:text-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>
                <h3 class="font-semibold">Torna alla pagina principale</h3>
            </a>
        </div>
    </header>

    <div class="container mx-auto py-10 px-4 lg:px-6">
        <h1
            class="mb-8 ml-10 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Gestisci il tuo <span
                class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">Account</span>
        </h1>

        <div id="admin-info" class="max-w-md mx-auto"></div>
    </div>

    <script>
        function getadminData() {
            fetch('http://localhost/P002_PCTOProject/administrator/accountA', {
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
                .then(adminData => {
                    const adminInfoDiv = document.getElementById('admin-info');
                    if (adminData.message) {
                        // Se non ci sono risultati
                        adminInfoDiv.textContent = adminData.message;
                    } else {
                        // Se ci sono risultati
                        const administrator = adminData[0];
                        const adminHTML = `
                            <div class="bg-gray-100 dark:bg-gray-700 rounded-lg shadow-lg p-6">
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center">
                                        <span class="w-20 font-semibold">Nome:</span>
                                        <span class="text-gray-700">${administrator.name}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-20 font-semibold">Cognome:</span>
                                        <span class="text-gray-700">${administrator.surname}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-20 font-semibold">Mail:</span>
                                        <span class="text-gray-700">${administrator.mail}</span>
                                    </div>
                                    <a href="http://localhost/P002_PCTOProject/account/logout" class="bg-sky-600 hover:bg-sky-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out" style="display: block; text-align: center; text-decoration: none;">
                                        <div style="width: 100%;">
                                            <span style="display: inline-block;">Logout</span>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        `;
                        adminInfoDiv.innerHTML = adminHTML;
                    }
                })
                .catch(error => {
                    console.error('Si è verificato un errore:', error);
                });
        }

        window.onload = getadminData;
    </script>

</body>

</html>