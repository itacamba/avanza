<?php
echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if(isset($_POST["submit"])){
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userCompany = $_POST['company'];
        $userWebsite = isset($_POST['website-url'])? $_POST['website-url'] : "";
        $userMessage = $_POST['message'];
        $userSeo = (isset($_POST['seo']))?($_POST['seo']): "";
        $userWebDesign = isset($_POST['web-design'])? $_POST['web-design']: "";
        $userAdvertising = (isset($_POST['advertising']))? $_POST['advertising'] : "";
        $userSocialMedia = isset($_POST['social-media'])? $_POST['social-media'] : "";


        $to = "hello@avanza.com";
        $subject = "Prospective Customer";
        $body  = "";

        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Company: ".$userCompany. "\r\n";
        $body .= "Website: ".$userWebsite. "\r\n";
        $body .= "Message: ".$userMessage. "\r\n";
        $body .= "SEO: ".$userSeo. "\r\n";
        $body .= "Web Design: ".$userWebDesign. "\r\n";
        $body .= "Advertising: ".$userAdvertising. "\r\n";
        $body .= "Social Media: ".$userSocialMedia. "\r\n";


        // mail($to, $subject, $body);
    }
    
?>