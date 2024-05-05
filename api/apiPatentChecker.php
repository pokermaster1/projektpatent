<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fetchPatents'])) {
    $endpoint = 'https://serpapi.com/search';
    $apiKey = '35c192a80d099000bd30fc10113882c8baf6808fd9d57cd6e6b8069ea826688c'; // Ändern Sie dies zu Ihrem tatsächlichen API-Schlüssel

    $words = [];
    
    foreach (['wordlist1', 'wordlist2', 'wordlist3'] as $fieldName) {
        if (isset($_POST[$fieldName]) && !empty($_POST[$fieldName])) {
            $wordList = explode(';', $_POST[$fieldName]);
            $wordList = array_map('trim', $wordList); 
            $words = array_merge($words, $wordList);
        }
    }

    $params = [
        'engine' => 'google_patents',
        'q' => implode('OR', $words), 
        'api_key' => $apiKey
    ];

    
    $ch = curl_init("$endpoint?" . http_build_query($params));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);

    $response = curl_exec($ch);

    curl_close($ch);

    $result = json_decode($response, true);

    $organic_results = $result['organic_results'];

    echo json_encode($organic_results);
} else {
    echo "No data";
}
?>
