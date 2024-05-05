<?php
// Set the endpoint and your API key
$endpoint = 'https://serpapi.com/search';
$apiKey = '35c192a80d099000bd30fc10113882c8baf6808fd9d57cd6e6b8069ea826688c';

// Set up the query parameters
$params = [
    'engine' => 'google_patents',
    'q' => '(Coffee)',
    'api_key' => $apiKey
];

// Create the query string
$queryString = http_build_query($params);

// Initialize cURL
$ch = curl_init("$endpoint?$queryString");

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

// Output or process the organic results as JSON
echo json_encode($organic_results);
?>
