<div class="w-full md:max-w-6xl p-4 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl md:text-2xl lg:text-2xl font-bold text-center mb-4 text-blue-600">Patent Finder</h2>
    <div class="flex flex-col md:flex-row md:justify-between">

        <!-- erstes feld  muss required sein -->
        <div class="flex-1 pr-0 md:pr-4">
            <form action="" method="post">

                <input type="text" placeholder="Add in Synonyms" name="wordlist1"
                    class="border border-gray-300 p-3 w-3/4 rounded-lg mb-4 text-center" id="inputFirstPatent" >

                <div class="relative mb-4">

                    <select name="operator1"
                        class="border-none outline-none p-3 w-3/4 bg-gray-200 text-gray-800 rounded-lg text-center">
                        <option value="and" class="text-center">AND</option>
                        <option value="or" class="text-center">OR</option>
                    </select>

                </div>
                <div class="flex mb-4">
                    <div class="w-3/4 pr">

                        <input type="text" placeholder="Add in Synonyms" name="wordlist2" class="border border-gray-300 p-3 w-full rounded-lg mb-4 text-center" 
                                id="inputSecondPatent"
                            disabled>

                    </div>

                    <div class="w-1/4 pl-4">

                    <button type="submit" name="fetchPatents"
                            class="bg-blue-500 text-white px-1 py-1 rounded-lg hover:bg-blue-600 text-sm md:text-base w-full">
                            Find Patents
                    </button>
                        
                    
                    </div>
                </div>
                <div class="relative mb-4">
                    <select name="operator2"
                        class="border-none outline-none p-3 w-3/4 bg-gray-200 text-gray-800 rounded-lg text-center">
                        <option value="and" class="text-center">AND</option>
                        <option value="or" class="text-center">OR</option>
                    </select>
                </div>
                <input type="text" placeholder="Add in Synonyms" name="wordlist3"
                 class="border border-gray-300 p-3 w-3/4 rounded-lg mb-4 text-center" id="inputThirdPatent" disabled>
            </form>
        </div>


        <div class="flex-1 mt-4 md:mt-0">
            <div class="h-48 border border-gray-300 p-2 rounded-lg overflow-y-auto text-center">
                <?php include_once('api/apiPatentChecker.php') ?>
            </div>
        </div>
    </div>
    <button onclick="clearAllValues()"  id="clearButton" class="mb-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
    Daten löschen
    </button>
</div>