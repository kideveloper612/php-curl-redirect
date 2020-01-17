<?php
    if(isset($_POST['lead_id'])){
    $lead_id = $_POST['lead_id'];
    $gender = $_POST['gender'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $dob_day=$_POST['dob_day'];
    $dob_month=$_POST['dob_month'];
    $dob_year=$_POST['dob_year'];
    $address = $_POST['address'];
    $towncity = $_POST['towncity'];
    $postcode = $_POST['postcode'];
    $panel = $_POST['panels'];
    $panel_val1="71c77d90-e461-11e9-811e-a91b8742a251";
    $panel_val2="83163c00-e462-11e9-854a-910a48ad524d";
    $panel_val3="3d1574d0-e463-11e9-a87e-f3d938ac6b22";
    $form_data = array(
        'gender' => $gender,
        'firstname'=>$firstname,
        'lastname' => $lastname,
        'email' => $email,
        'dob_day' => $dob_day,
        'dob_month'=>$dob_month,
        'dob_year'=>$dob_year,
        'address'=>$address,
        'towncity'=>$towncity,
        'postcode'=>$postcode,
        'panel'=>$panel
    );
    file_put_contents('test.txt', serialize($form_data));
    $params = http_build_query($form_data);
    if( strlen($panel[0]) == 36){
        if ($panel[0] == $panel_val1){
            $url = "https://www.mb102.com/lnk.asp?o=8012&c=918277&a=362642&k=23FBB52312A104CA76138A4B6E5305B6&l=6724&s1=facegroup&";
        }
        else if($panel[0] == $panel_val2){
            $url = "http://website2.com".$params;
        }
        else{
            $url = "http://website3.com".$params;
        }
    }

    function curl_request($request_url, $params) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $request_url.$params);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_TIMEOUT, 0);

        curl_exec($ch);
        $info = curl_getinfo($ch);
        $final_url = $info['url'];
        $redirect_url = $info['redirect_url'];

        if (!empty($redirect_url)) {
            return curl_request($redirect_url, $params);
        }
        
        if (strpos($final_url, "127.0.0.1") !== false ) {
            return ("The final url is <strong>".$final_url.'</strong><br>So this request was not successed unfortunately!<br><h2>If you access from New Zealand, request would be successed!</h2>');
        } else {
            return "The final url is: <strong>".$final_url."</strong>";
        }
        curl_close($ch);
    }
    
    $result = curl_request($url, $params);
    echo($result);
    
    // header("Location: http://localhost/html-contact-form/thank-you.html");
}

?>