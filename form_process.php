<?php 

// console_log("Hit form_process.php");
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

// define variables and set to empty value
$error = "";
$success = $name = $email = $phone = $company = $message = $url = $seo = $advertising = $design = $social_media = "";
$form_message = "";


if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    // AJAX REQUEST HAS BEEN SUCCESSFULl

}
// check if form was submitted
if(isset($_POST['submit'])){
    // validates name
    if(empty($_POST['name'])){
        $error = '*Name is required';
    } else {
        $name = test_input($_POST['name']);
        if(!preg_match("/^[a-zA-Z ]*$/", $name)){
            $error = "*Name is not valid";
        }
    }

    // validates email
    if(empty($_POST['email'])){
        $error = "*Email is required";
    } else {
        $email = test_input($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = "*Email is not valid";
        }
    }

    // validates phone
    if(empty($_POST['phone'])){
        $error = "*Phone is required";
    } else {
        $phone = test_input($_POST['phone']);
        if(!preg_match("/^\(?(\d{3})\)?[-\. ]?(\d{3})[-\. ]?(\d{4})$/", $phone)){
            $error = "*US Phone is not valid, try 000 000 0000";
        }
    }

    // validates company
    if(empty($_POST['company'])){
        $error = "*Company is required";
    } else {
        $company = test_input($_POST['company']);
    }
    // validates message
    if(empty($_POST['message'])){
        $error = "*Message is required";
    } else {
        $message = test_input($_POST['message']);
    }
    
    // sets the rest of the fields if they have been filled
    $url = isset($_POST['website_url'])? $_POST["website_url"] : "";
    $seo = isset($_POST['seo'])? $_POST['seo'] : "";
    $design = isset($_POST['web_design'])? $_POST['web_design'] : "";
    $advertising = isset($_POST['advertising'])? $_POST['advertising'] : "";
    $social_media =  isset($_POST['social_media'])? $_POST['social_media'] : "";


    // checks if $error is empty
    if(empty($error)){
        $body = "";
        unset($_POST['submit']);
        foreach($_POST as $key => $value){
            $body .= "$key: $value\n";
        }
        // send email
        $to = 'hello@avanza.marketing';
        $subject = 'Avanza Customer';
        if(mail($to, $subject, $body)){
            // set the form to empty again
            $name = $email = $phone = $company = $message = $url = $seo = $advertising = $design = $social_media = "";
            $form_message = 'success';
            return 'success';
        } else { 
            $form_message = 'server error';
            return 'failed';
        }

    // is not coming here
    } else { 
        $form_message = "failed";
        return "failed";
    }
}




function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>