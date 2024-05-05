<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['word'])) {
    $inputWord = filter_input(INPUT_POST, 'word', FILTER_SANITIZE_STRING);

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://www.openthesaurus.de/synonyme/search?q=" . urlencode($inputWord) . "&format=application/json&similar=true",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET"
    ]);
    $response = curl_exec($curl);
    $err = curl_error($curl);
    $results = [];
    if (!$err) {
        $responseArray = json_decode($response, true);
        if (!empty($responseArray['synsets'])) {
            foreach ($responseArray['synsets'] as $synset) {
                foreach ($synset['terms'] as $term) {
                    $results[] = $term['term'];
                }
            }
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
        echo "<p>No german synonyms found for '$inputWord'.</p>";
    }
}
?>
