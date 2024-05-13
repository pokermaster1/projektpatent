<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['word'])) {
    $inputWord = filter_input(INPUT_POST, 'word', FILTER_SANITIZE_STRING);

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://wordsapiv1.p.rapidapi.com/words/" . urlencode($inputWord) . "/synonyms",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Key: -",
            "X-RapidAPI-Host: wordsapiv1.p.rapidapi.com"
        ],
    ]);
    $response = curl_exec($curl);
    $err = curl_error($curl);
    $results = [];
    if (!$err) {
        $responseArray = json_decode($response, true);
        if (!empty($responseArray['synonyms'])) {
            $results = $responseArray['synonyms'];
        }
    }
    curl_close($curl);

    if (!empty($results)) {
        echo "<ul>";
        foreach (array_unique($results) as $result) {
            echo "<li>" . htmlspecialchars($result) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p style='text-align: center;'>No english synonyms found for '" . htmlspecialchars($inputWord) . "'.</p>";
    }
}
?>
