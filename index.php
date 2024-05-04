

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Frontend Layout</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">

    <!-- Main Container -->
    <div class="min-h-screen flex flex-col items-center justify-center p-4">
        <!-- First Part -->
        <div class="w-full max-w-4xl p-4 bg-white shadow-md">
            <h1 class="text-xl font-bold text-center mb-4">Main Title</h1>
            <div class="flex justify-between">
                <!-- Left Side: Input, Button and Dropdown -->
                <div class="flex-1 pr-4">
                    <div class="mb-4 flex">

                        <form action="" method="post">
                            <div class="flex-grow pr-2">
                                <label for="word" class="block font-medium">Keyword</label>
                                <input type="text" id="word" name="word" placeholder="Enter a keyword" class="border p-2 w-full">
                            </div>
                            <button type="submit" class=" mt-1 bg-blue-500 text-white px-1 py-1 rounded hover:bg-blue-600 self-end mb-1">
                                Search Synonyms
                            </button>
                        </form>


                    </div>
                    <div>
                        <label for="language" class="block font-medium">Language</label>
                        <select id="language" class="border p-2 w-full">
                            <option value="english">English</option>
                            <option value="german">German</option>
                        </select>
                    </div>
                </div>

                <!-- Right Side: Results Box -->
                <div class="flex-1 pl-4">
                    <div class="h-40 border p-2">
                        <!-- Placeholder for API results -->
                        <?php
                            include_once('api.php')
                            ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Horizontal Line -->
        <hr class="my-4 w-full border-t border-gray-300">

        <!-- Second Part -->
        <div class="w-full max-w-4xl p-4 bg-white shadow-md">
            <div class="flex justify-between">
                <!-- Left Side: Input Fields -->
                <div class="flex-1 pr-4">
                    <input type="text" placeholder="Enter text" class="border p-2 w-full mb-2">
                    <input type="text" placeholder="Enter text" class="border p-2 w-full mb-2">
                    <input type="text" placeholder="Enter text" class="border p-2 w-full">
                </div>

                <!-- Middle: Button -->
                <div class="flex-1 px-4">
                    <div class="flex justify-center items-end h-full">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Find Patents
                        </button>
                    </div>
                </div>

                <!-- Right Side: Results Box -->
                <div class="flex-1 pl-4">
                    <div class="h-40 border p-2">
                        Search results display here
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>