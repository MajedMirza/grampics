<?php 

if (loggedIn()) {
    Redirect::to('index.php');
}
if (Input::exists()) {
    if (isset($_POST['submitButton'])) {
        //Initialize an array to store any error message from the form
        $form_errors = array();
        //Form validation
        $required_fields = array("email_username", "password");
        //Call the function to check empty field and merge the return data into form_error array
        $form_errors = array_merge($form_errors, check_empty_fields($required_fields));



        $email_username = escape($_POST['email_username']);
        $password = escape($_POST['password']);

        $user_id = $account->login_user($email_username, $password);
        if ($account->passed()) {
            //Checks if error array is empty, if yes processes data 
            if (empty($form_errors)) {
                session_regenerate_id();
                $_SESSION['user_id'] = $user_id;
                Redirect::to(url_for('index'));
            }
        } else {
            $form_errors = array_merge($form_errors, $account->errors());
        }
    }
}
$title = "Sign In | Grampics";
$keywords = "Grampics, Share and capture world's moments, share, capture, share, login, signup";
?>