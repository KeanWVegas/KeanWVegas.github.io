<?php
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['age']) && !empty($_POST['gender'])) {
    // Defines array for JSON string
    $formdata = [
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'password' => $_POST['password'],
      'age' => $_POST['age'],
      'gender' => $_POST['gender'],
    ];

    // Formats to JSON
    $jsondata = json_encode($formdata, JSON_PRETTY_PRINT);
    // Saves to JSON file
    file_put_contents('formdata.txt', $jsondata);
    // Outputs success
    echo 'Data successfully saved';
} else {
    echo 'Form fields not submitted';
}
