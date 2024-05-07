<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fetchPatents'])) {
    $endpoint = 'https://serpapi.com/search';
    $apiKey = '35c192a80d099000bd30fc10113882c8baf6808fd9d57cd6e6b8069ea826688c';

   # echo "<pre>POST Data: ";
   # print_r($_POST);
    #echo "</pre>";

    // An array to store the strings to be combined with operators
    $combinedWords = [];

    foreach (['wordlist1', 'wordlist2', 'wordlist3'] as $fieldName) {
        if (isset($_POST[$fieldName]) && !empty($_POST[$fieldName])) {
            $wordList = array_map('trim', explode(',', $_POST[$fieldName]));
            $enclosedWords = array_map(function($word) {
                return "($word)";
            }, $wordList);
            // Prepare each group of words enclosed in parentheses, joined by semicolons
            if (!empty($enclosedWords)) {
                $combinedWords[] = '(' . implode(' OR ', $enclosedWords) . ')';
            }

            #echo "<pre>{$fieldName}: ";
            #print_r($enclosedWords);
            #echo "</pre>";
        }
    }

    // Combining the word groups with semicolons
    $query = implode(';', $combinedWords);

    #echo "<pre>Final Query: ";
    #print_r($query);
    #echo "</pre>";

    $params = [
        'engine' => 'google_patents',
        'q' => $query, 
        'api_key' => $apiKey
    ];

    $ch = curl_init("$endpoint?" . http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($response, true);

    $organic_results = $result['organic_results'];

    echo '<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">';
    
    if (!empty($organic_results)) {
        echo '<div class="patents-container flex flex-col items-center">';
        foreach ($organic_results as $result) {
            echo '<div class="patent-box w-full max-w-4xl bg-white rounded-lg shadow-lg p-6 mb-4">';
            if (isset($result['thumbnail'])) {
                echo '<img src="' . htmlspecialchars($result['thumbnail']) . '" alt="Patent Image" class="mb-4">';
            }
            echo '<h3 class="text-xl font-bold text-gray-900 mb-2">Title: ' . htmlspecialchars($result['title']) . '</h3>';
            if (isset($result['pdf'])) {
                echo '<a href="' . htmlspecialchars($result['pdf']) . '" target="_blank" class="text-blue-500 hover:text-blue-600">View Patent</a>';
            }
            if (isset($result['priority_date'])) {
                echo '<p class="text-gray-600">Priority Date: ' . htmlspecialchars($result['priority_date']) . '</p>';
            } else {
                echo '<p class="text-gray-600">Priority Date: Not available</p>';
            }
            echo '<p class="text-gray-600">Patent ID: ' . htmlspecialchars($result['patent_id']) . '</p>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo "<p class='text-center text-gray-500 mt-4'>No patents found</p>";
    }
} else {
    echo "<p class='text-center text-gray-500 mt-4'>No data</p>";
}
?>
