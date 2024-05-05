<?php
// Überprüfen, ob ein POST-Request mit dem Namen fetchPatents gesendet wurde
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fetchPatents'])) {
    // Set the endpoint and your API key
    $endpoint = 'https://serpapi.com/search';
    $apiKey = '35c192a80d099000bd30fc10113882c8baf6808fd9d57cd6e6b8069ea826688c'; // Ändern Sie dies zu Ihrem tatsächlichen API-Schlüssel

    // Extrahiere die Wörter aus den Eingabefeldern und bereite sie für die Suchanfrage vor
    $words = [];
    
    foreach (['wordlist1', 'wordlist2', 'wordlist3'] as $fieldName) {
        if (isset($_POST[$fieldName]) && !empty($_POST[$fieldName])) {
            $wordList = explode(';', $_POST[$fieldName]); // Wörter in der Eingabezeichenfolge trennen
            $wordList = array_map('trim', $wordList); // Leerzeichen am Anfang und Ende jedes Worts entfernen
            $words = array_merge($words, $wordList); // Hinzufügen der Wörter zur Liste
        }
    }

    // Set up the query parameters
    $params = [
        'engine' => 'google_patents',
        'q' => implode('OR', $words), // Wörter mit Semikolon verbunden
        'api_key' => $apiKey
    ];

    // Initialize cURL
    $ch = curl_init("$endpoint?" . http_build_query($params));

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);

    // Execute the cURL session
    $response = curl_exec($ch);

    // Close cURL session
    curl_close($ch);

    // Decode the JSON response
    $result = json_decode($response, true);

    // Access the organic results
    $organic_results = $result['organic_results'];

    echo json_encode($organic_results);
} else {
    // Wenn kein POST-Request mit dem Namen fetchPatents gesendet wurde, geben wir eine Fehlermeldung aus
    echo "Error: No fetchPatents parameter found in POST request.";
}
?>
