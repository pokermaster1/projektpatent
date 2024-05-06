<div class="w-full max-w-6xl mx-auto p-4 bg-white rounded-2xl">
    <h2 class="text-2xl font-bold text-center mb-4 mt-4 text-gray-800">Synonym Finder</h2>
    
    <div class="flex justify-center items-center">
        <div class="w-full md:max-w-md">
            <form action="" method="post" class="border-b border-gray-400 py-2">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <input type="text" id="word" name="word" placeholder="Enter a keyword"
                        class="flex-grow appearance-none text-gray-800 placeholder-gray-400 rounded-lg py-2 px-3 focus:outline-none focus:border-gray-500">
                    <button type="submit"
                        class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 text-sm md:text-base">
                        Search for Synonyms
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="flex flex-col md:flex-row justify-between mt-4">
        <div class="w-full md:w-1/2 px-2 md:px-4">
            <h2 class="text-xl font-bold text-center mb-4 text-gray-800">German</h2>
            <div id="wortListeContainer2" class="h-40 border border-gray-300 p-2 rounded-lg overflow-y-auto">
                <?php include('api/apiDeutsch.php'); ?>
            </div>
            <button onclick="addWordsGerman()"
                class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 mt-3 text-sm md:text-base w-full">
                Add Synonyms to Patent Finder
            </button>
        </div>

        <div class="w-full md:w-1/2 px-2 md:px-4">
            <h2 class="text-xl font-bold text-center mb-4 text-gray-800">English</h2>
            <div id="wortListeContainer" class="h-40 border border-gray-300 p-2 rounded-lg overflow-y-auto">
                <?php include('api/apiEnglisch.php'); ?>
            </div>
            <button onclick="addWordsEnglish()"
                class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 mt-3 text-sm md:text-base w-full">
                Add Synonyms to Patent Finder
            </button>
        </div>
    </div>

    <div class="flex justify-center items-center mt-5 mb-4">
        <div class="w-full md:max-w-md">
            <h3 class="text-l font-bold text-center mb-2 text-gray-800">Manually Word Input:</h3>
            <form action="" method="post" class="border-b border-gray-400 py-2">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <input type="text" id="word" name="word" placeholder="Type a word"
                        class="flex-grow appearance-none text-gray-800 placeholder-gray-400 rounded-lg py-2 px-3 focus:outline-none focus:border-gray-500">
                    <button type="submit"
                        class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 text-sm md:text-base">
                        Add Word to Patent Finder
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
