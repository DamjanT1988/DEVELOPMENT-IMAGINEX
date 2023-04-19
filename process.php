<?php
require_once 'openai_config.php';
require_once 'vendor/autoload.php';

/*
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the input question from the form
  $question = $_POST['question'];

  // Call the OpenAI API
  $openai = new OpenAI\OpenAI(api_key: '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');
  $response = $openai->complete(
    model: 'text-davinci-002',
    prompt: $question,
    max_tokens: 100,
    n: 1,
    stop: null,
    temperature: 0.5
  );

  // Get the response text from the API
  $answer = $response['choices'][0]['text'];

    // Return the answer as a JSON response
    header('Content-Type: application/json');
    echo json_encode(array('answer' => $answer));
}
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$client = OpenAI::client('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');
$input = $_POST['question'];

//  error_reporting(E_ALL);
//  ini_set('display_errors', 1);


echo "FUNKAR1";

$response = $client->chat()->create([
'model' => 'gpt-3.5-turbo',
'max_tokens' => 100,
'messages' => [
    ['role' => 'user', 'content' => $input],
],
]);


//print_r($response);

foreach ($response->choices as $result) {
$result->index; // 0
$result->message->role; // 'assistant'
echo $result->message->content; // '\n\nHello there! How can I assist you today?'
$result->finishReason; // 'stop'
}

echo "FUNKAR2";

$output = $response->getMessages()[0]->getContent();
 echo $response;

}

?>

