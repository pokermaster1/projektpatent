<div class="w-full md:max-w-6xl p-4 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl md:text-2xl lg:text-2xl font-bold text-center mb-4 text-blue-600">Synonym Finder</h2>
    <div class="flex flex-col md:flex-row md:justify-between items-center">

        <div class="flex-1 pr-0 md:pr-4 flex items-center justify-center">
            <div class="mb-4 w-full md:w-auto">
                <form action="" method="post">
                    <div class="flex items-center border-b border-blue-300 py-2">
                        <input type="text" id="word" name="word" placeholder="Enter a keyword"
                            class="border-none outline-none w-xl md:w-64 text-gray-800 placeholder-gray-400 rounded-lg py-2 px-3">
                        <button type="submit"
                            class="bg-blue-500 text-white px-1 py-1 rounded-lg hover:bg-blue-600 text-sm md:text-base w-full">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row md:justify-between">

        <div class="flex-1 pl-0 md:pl-4 mt-4 md:mt-0 md:w-1/2">

            <h2 class="text-xl md:text-xl lg:text-xl font-bold text-center mb-4 text-blue-600">German</h2>
            <div id="wortListeContainer2" class="h-40 border border-gray-300 md:w-full p-2 rounded-lg overflow-y-auto">
                <?php include ('api/apiDeutsch.php') ?>
            </div>
            <button onclick="addWordsGerman()"
                class="bg-blue-500 mt-3 text-white px-1 py-1 rounded-lg hover:bg-blue-600 text-sm md:text-base w-full">
                Add Synonyms to Patent Finder
            </button>
        </div>

        <div class="flex-1 pl-0 md:pl-4 mt-4 md:mt-0 md:w-1/2">

            <h2 class="text-xl md:text-xl lg:text-xl font-bold text-center mb-4 text-blue-600">English</h2>

            <div id="wortListeContainer" class="h-40 border border-gray-300 md:w-full p-2 rounded-lg overflow-y-auto">
                <?php include ('api/apiEnglisch.php') ?>
            </div>
            <button onclick="addWordsEnglish()"
                class="bg-blue-500 mt-3 text-white px-1 py-1 rounded-lg hover:bg-blue-600 text-sm md:text-base w-full">
                Add Synonyms to Patent Finder
            </button>
        </div>
    </div>
</div>