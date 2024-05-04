<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pat-checkX</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="patCheckerX.png">

</head>

<body class="bg-gray-100">

    <!-- Main Container -->
    <div class="min-h-screen flex flex-col items-center justify-center p-4">

        <!-- Title and Logo -->
        <div class="flex items-center justify-center mb-8">
            <img src="patCheckerX.png" alt="Logo" class="h-20 md:h-24 lg:h-32 mr-2">
        </div>

        <!-- First Part -->
        <div class="w-full md:max-w-6xl p-4 bg-white shadow-md rounded-lg">
            <h2 class="text-2xl md:text-2xl lg:text-2xl font-bold text-center mb-4 text-blue-600">Synonym Finder</h2>
            <div class="flex flex-col md:flex-row md:justify-between items-center">

                <!-- Left Side: Input, Button and Dropdown -->
                <div class="flex-1 pr-0 md:pr-4 flex items-center justify-center">
                    <div class="mb-4 w-full md:w-auto">
                        <form action="" method="post">
                            <div class="flex items-center border-b border-blue-300 py-2">
                                <input type="text" id="word" name="word" placeholder="Enter a keyword"
                                    class="border-none outline-none w-xl md:w-64 text-gray-800 placeholder-gray-400 rounded-lg py-2 px-3">
                                <!-- Ändere die Größe der Eingabefelder hier -->
                                <button type="submit"
                                    class="bg-blue-500 text-white px-1 py-1 rounded-lg hover:bg-blue-600 text-sm md:text-base w-full">
                                    <!-- Ändere die Größe der Buttons hier -->
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Right Side: Results Box -->
            <div class="flex flex-col md:flex-row md:justify-between">

                <div class="flex-1 pl-0 md:pl-4 mt-4 md:mt-0 md:w-1/2">

                    <!-- Left Side: Deutsche Box -->
                    <h2 class="text-xl md:text-xl lg:text-xl font-bold text-center mb-4 text-blue-600">Deutsch</h2>
                    <div class="h-40 border border-gray-300 md:w-full p-2 rounded-lg overflow-y-auto">
                        <!-- Placeholder for API results -->
                        <?php include ('apiDeutsch.php') ?>
                    </div>
                </div>

                <div class="flex-1 pl-0 md:pl-4 mt-4 md:mt-0 md:w-1/2">

                    <!-- Right Side: Englische Box -->
                    <h2 class="text-xl md:text-xl lg:text-xl font-bold text-center mb-4 text-blue-600">Englisch</h2>

                    <div class="h-40 border border-gray-300 md:w-full p-2 rounded-lg overflow-y-auto">
                        <!-- Placeholder for API results -->
                        <?php include ('api.php') ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Horizontal Line -->
        <hr class="my-8 w-full border-t border-gray-300">

        <!-- Second Part -->
        <div class="w-full md:max-w-6xl p-4 bg-white shadow-md rounded-lg">
            <h2 class="text-2xl md:text-2xl lg:text-2xl font-bold text-center mb-4 text-blue-600">Patent Finder</h2>
            <div class="flex flex-col md:flex-row md:justify-between">

                <!-- Left Side: Input Fields with Dropdown Menus -->
                <div class="flex-1 pr-0 md:pr-4">
                    <input type="text" placeholder="Enter text"
                        class="border border-gray-300 p-4 w-3/4 rounded-lg mb-4">
                    <div class="relative mb-4">
                        <select id="operator2" name="operator2"
                            class="border-none outline-none p-3 w-3/4 bg-gray-200 text-gray-800 rounded-lg text-center">
                            <option value="and">AND</option>
                            <option value="or">OR</option>
                        </select>
                    </div>
                    <div class="flex mb-4">
                        <div class="w-3/4 pr">
                            <input type="text" placeholder="Enter text"
                                class="border border-gray-300 p-4 w-full rounded-lg">
                        </div>
                        <div class="w-1/4 pl-4">
                            <button
                                class="bg-blue-500 text-white px-1 py-1 rounded-lg hover:bg-blue-600 text-sm md:text-base w-full">
                                Find Patents
                            </button>
                        </div>
                    </div>
                    <div class="relative mb-4">
                        <select id="operator2" name="operator2"
                            class="border-none outline-none p-3 w-3/4 bg-gray-200 text-gray-800 rounded-lg text-center">
                            <option value="and">AND</option>
                            <option value="or">OR</option>
                        </select>
                    </div>
                    <input type="text" placeholder="Enter text"
                        class="border border-gray-300 p-4 w-3/4 rounded-lg mb-4">
                </div>

                <!-- Right Side: Results Box -->
                <div class="flex-1 mt-4 md:mt-0">
                    <div class="h-48 border border-gray-300 p-2 rounded-lg overflow-y-auto">
                        Search results display here
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>