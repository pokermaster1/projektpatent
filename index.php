<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pat-checkX</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Main Container -->
    <div class="min-h-screen flex flex-col items-center justify-center p-4">

        <!-- Title and Logo -->
        <div class="flex items-center justify-center mb-8">
            <img src="patCheckerX.png" alt="Logo" class="h-20 md:h-24 lg:h-32 mr-2">
        </div>

        <!-- First Part -->
        <div class="w-full md:max-w-4xl p-4 bg-white shadow-md rounded-lg">
            <h1 class="text-3xl md:text-4xl lg:text-4xl font-bold text-center mb-4 text-blue-600">Synonym Finder</h1>
            <div class="flex flex-col md:flex-row md:justify-between">

                <!-- Left Side: Input, Button and Dropdown -->
                <div class="flex-1 pr-0 md:pr-4">
                    <div class="mb-4">
                        <form action="" method="post">
                            <div class="flex items-center border-b border-blue-300 py-2">
                                <input type="text" id="word" name="word" placeholder="Enter a keyword"
                                    class="border-none outline-none w-full text-gray-800 placeholder-gray-400 rounded-lg py-2 px-4"> <!-- Ändere die Größe der Eingabefelder hier -->
                                <button type="submit"
                                    class="bg-blue-500 text-white px-1 md:px-1 py-1 rounded-lg hover:bg-blue-600 ml-2"> <!-- Ändere die Größe der Buttons hier -->
                                    Search Synonyms
                                </button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <label for="language" class="block font-medium text-gray-700">Language</label>
                        <select id="language"
                            class="border-none outline-none p-2 w-full bg-gray-200 text-gray-800 rounded-lg"> <!-- Ändere die Größe des Dropdowns hier -->
                            <option value="english">English</option>
                            <option value="german">German</option>
                        </select>
                    </div>
                </div>

                <!-- Right Side: Results Box -->
                <div class="flex-1 pl-0 md:pl-4 mt-4 md:mt-0">
                    <div class="h-40 border border-gray-300 p-2 rounded-lg overflow-y-auto">
                        <!-- Placeholder for API results -->
                        <?php include_once('api.php') ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Horizontal Line -->
        <hr class="my-8 w-full border-t border-gray-300">

        <!-- Second Part -->
        <div class="w-full md:max-w-4xl p-4 bg-white shadow-md rounded-lg">
            <h2 class="text-3xl md:text-4xl lg:text-4xl font-bold text-center mb-4 text-blue-600">Patent Finder</h2>
            <div class="flex flex-col md:flex-row md:justify-between">

                <!-- Left Side: Input Fields -->
                <div class="flex-1 pr-0 md:pr-4">
                    <input type="text" placeholder="Enter text"
                        class="border border-gray-300 p-4 w-full rounded-lg mb-4"> <!-- Ändere die Größe der Eingabefelder hier -->
                    <input type="text" placeholder="Enter text"
                        class="border border-gray-300 p-4 w-full rounded-lg mb-4"> <!-- Ändere die Größe der Eingabefelder hier -->
                    <input type="text" placeholder="Enter text"
                        class="border border-gray-300 p-4 w-full rounded-lg"> <!-- Ändere die Größe der Eingabefelder hier -->
                </div>

                <!-- Middle: Button -->
                <div class="flex-1 px-0 md:px-4 flex items-center justify-center mt-4 md:mt-0">
                    <button class="bg-blue-500 text-white px-3 md:px-4 py-2 rounded-lg hover:bg-blue-600"> <!-- Ändere die Größe der Buttons hier -->
                        Find Patents
                    </button>
                </div>

                <!-- Right Side: Results Box -->
                <div class="flex-1 pl-0 md:pl-4 mt-4 md:mt-0">
                    <div class="h-40 border border-gray-300 p-2 rounded-lg overflow-y-auto">
                        Search results display here
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>