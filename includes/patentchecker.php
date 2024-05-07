<div class="w-full max-w-6xl mx-auto px-4 py-4 bg-white rounded-2xl">
    <h2 class="text-2xl font-bold text-center mb-4 mt-4 text-gray-800">Patent Finder</h2>
    <div class="flex lg:flex-row lg:justify-between">

        <div class="lg:flex-1 px-4 mt-4 mb-4">
            <form action="" method="post">
                <input type="text" placeholder="Add in Synonyms" name="wordlist1"
                    class="border border-gray-300 p-3 w-full rounded-lg mb-4 text-center focus:border-gray-500"
                    id="inputFirstPatent">
                <div class="relative mb-4">
                    <select id="operator1" name="operator1"
                        class="border border-gray-400 p-3 w-full bg-gray-300 text-gray-800 rounded-lg text-center">
                        <option value="and">AND</option>
                        <option value="or">OR</option>
                    </select>
                </div>
                <div class="flex mb-4">
                    <div class="w-full">
                        <input type="text" placeholder="Add in Synonyms" name="wordlist2"
                            class="border border-gray-300 p-3 w-full rounded-lg text-center focus:border-gray-500"
                            id="inputSecondPatent" disabled>
                    </div>
                </div>
                <div class="relative mb-4">
                    <select name="operator2"
                        class="border border-gray-400 p-3 w-full bg-gray-300 text-gray-800 rounded-lg text-center focus:border-gray-500 focus:ring-0">
                        <option value="and">AND</option>
                        <option value="or">OR</option>
                    </select>
                </div>
                <input type="text" placeholder="Add in Synonyms" name="wordlist3"
                    class="border border-gray-300 p-3 w-full rounded-lg text-center focus:border-gray-500"
                    id="inputThirdPatent" disabled>
                <button type="submit" name="fetchPatents"
                    class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 text-sm lg:text-base w-full text-center mb-2 mt-4">
                    Find Patents
                </button>
                <button onclick="clearAllValues()" id="clearButton"
                    class="bg-red-400 text-white px-4 py-2 rounded-lg hover:bg-gray-600 text-sm lg:text-base w-full text-center mb-4">
                    Delete Data
                </button>
            </form>
        </div>

        <div class="lg:flex-1 px-4 mt-8 mb-4">
            <div class="h-96 overflow-y-auto border border-gray-300 p-2 rounded-lg text-center">
                <?php include_once ('api/apiPatentChecker.php') ?>
            </div>
        </div>

    </div>

</div>
