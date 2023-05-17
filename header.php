   
//***** MAIN CHAT BOX CODE *****/
//Path to the OpenAI PHP library
require_once 'vendor/autoload.php'; 
//Include the config.php file
require 'config.php';

//Start the session
//HAS TO BE AFTER HEADER HTML/WP CODE
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //Save client to variable
    $client = OpenAI::client(API_KEY);
    //Save input to variable
    $input = $_POST['question'];
  
    //Send the request to the API
    $response = $client->chat()->create([
      //'model' => 'gpt-4',
      'model' => 'gpt-3.5-turbo',
      'max_tokens' => 95, //less tokens
      'messages' => [
          ['role' => 'user', 'content' => $input],
      ],
    ]);
  
    //Clear the variable
    $output = '';
  
    //Loop through the response
    foreach ($response->choices as $result) {
    $result->index; // 0
    $result->message->role; // user
    $output = $result->message->content; //content of the message
    $result->finishReason; // 'stop'
  }
  
  //Print the output
  echo "<p id='api2'> " . $output . " </p>";
}
