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
        'panel'=>$panel,
        'disclaimer'=>true
    );
    file_put_contents('test.txt', serialize($form_data));
    if( strlen($panel[0]) == 36){
        if ($panel[0] == $panel_val1){
            $url = "https://www.mb103.com/lnk.asp?o=15437&c=918277&a=362642&k=8E9B8845B1028BAA93889D2696048DA7&l=16316&s1=blog";
        }
        else if($panel[0] == $panel_val2){
            $url = "http://website2.com";
        }
        else{
            $url = "http://website3.com";
        }
    }

    function get_cookie() {
        $url = 'https://ct.pinterest.com/user?';
        $get_data = array(
            'tid' => '2613390633925',
            'pd' => '{"em":"24aba99b2defbb47ee981b4200313f61f3ae31541d8717bdac1e463c838939b0"}',
            'cb' => '1580049435105'
        );
        $params = http_build_query($get_data);
        $request_url = $url.$params;
        $header = array(
            'cookie: _pinterest_cm=TWc9PSZQUFV6ZVFTK3dHbE9YZkdBR21RZUlhOERIblZSZDlPMmNvVzZJT1ZuN2hnYW9PV1dsU25MdXE1anRlSzU0MW5mdFhCK0VTMzJybnQrUzlKdDdNRWUwRURoNSsxZk1Gb2QxUU54dlJhZ1ErTXJHUHpFRTJqL0txM1VoNU1Mc2JEciYvNEgyVjAvbmhTWmU5VnpuUXpVakY3SGN2Mzg9; __cfduid=d5fa14efc4f71ee3b382a4c4daa5104511574219516; _auth=0; _pinterest_sess=TWc9PSZoNFNTc056TjNBMmhJeExQd0Rid2R2UHBRckdPa3l3bE92UVZrZWxYbk8vR1JkUFcwRXZ2ZTFRLzhjOStRSWp0bVdwbHFxekk3QlNiUUVYVUJrRDJ3UlFEZkxJNXdTbU1BeDBNVHFzdVpHNXVYNXNlei9WRHJ0K1lEdDN1S2xXRFNNdWtCeG5yQ0h3NzgvTFN0bDFhN2FGOUNtdHE2d0xYQnE4bU5yRnZBY21yclNoekdOSy9ydjlubTI3ZG9DQ3Z3TmgzU0ovbmhKV0lmMDhYSW5aZUhnPT0mbElHa2RvY3ZyWkNJK2VtcHNnTlRnRm5JeGQwPQ==; _pinterest_ct_rt="TWc9PSYvclFLYm5JdXM0SFlSSnVrT29mM0NSRWxFaEt5VFhXNjIrdVJQUk1SdDI2eExBMXZmMmtKakptUUR0UGVEUDd3NDBscU9wQlpUcFdsRG9hd1hURTJOcE91MENTak1qd2lYMGRONWNMdDRZMHFmTTVsZ2NOVkNRUHFwZWpaNDZtTHk1SFNXLzZyd09CZ1Jyb1doWDNMNUR4K29sZk83aDRqUlFBR0NLWWpERXVuY0o1NkVsMFdndWtpS1l4K3NCa3ZDVS9Ud1dJamNBbFJrU2RVVDRlTmVLODZoWjIrdDU3NFhZdmJCNjNjbWhmUVEzeVlEK05vMVlaKytmNU5aMEdmSU5TcUxpQ0x4T2RMRmtZTTdndk14U3UvTXhGYmlBRU9KZkIyUHVxNFYrNVRDbVN4ZGxScUxOeTBDY3I0YUN0Tm1WOHhjUnp5Z2hqa1l2cUJudUhHSUtPYzNDVUhBWUF0cHE1cnp4WnJBVy9yVXl4Z0c5VnlIV2t0cHVmVFJjUGpyQ1d3RmtxSnliWVVxYTM2UVcvQVlBPT0mZlNBNjlNSHdPR1NLNEtuYmtCRldVanFTdS9vPQ=="'
        );

        $ch = curl_init($request_url);
        curl_setopt_array($ch, array(
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => 1,
        ));
        $output = curl_exec($ch);
        curl_close($ch);

        $data = explode(":", explode("\n",$output)[3])[1];
        return $data;
    }

    $params = [
            'surname' => $firstname,
            'givenname' => $lastname,
            'email' => $email,
            'gendercode' => $gender,
            'age' => '',
            'customDisclaimer' => '0',
            'url' => 'https://www.opinionworld.co.nz/en-nz/general/recruitment/apac/nz/paid-surveys-online?jtype=d&offer_id=542&affiliate_id=1067&aff_sub=362642&transaction_id=102c6404da281e95358eb7e5851ba6&ip=60.234.42.250&',
            'redirectUrl' => null,
            'guid' => '{C5CB591B-2C9C-4BD6-81AE-CE5294706045}',
            'miscid' => '',
            'stateName' => '',
            'GDPRConsentProfile' => '',
            'GDPRConsentPP' => '',
            'GDPRConsentTC' => ''
        ];

    function register_request($params){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.opinionworld.co.nz/app_services/aps/public/publicservices.asmx/Registration",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{\"surname\":\"test\",\"givenname\":\"test\",\"email\":\"br1aner@yandex.com\",\"gendercode\":\"1\",\"age\":\"\",\"customDisclaimer\":\"0\",\"url\":\"https://www.opinionworld.co.nz/en-nz/general/recruitment/apac/nz/paid-surveys-online?jtype=d&offer_id=542&affiliate_id=1067&aff_sub=362642&transaction_id=102c6404da281e95358eb7e5851ba6&ip=60.234.42.250&\",\"redirectUrl\":null,\"guid\":\"{C5CB591B-2C9C-4BD6-81AE-CE5294706045}\",\"miscid\":\"\",\"stateName\":\"\",\"GDPRConsentProfile\":\"\",\"GDPRConsentPP\":\"\",\"GDPRConsentTC\":\"\"}",
        CURLOPT_HTTPHEADER => array(
        "Cookie: __utmz=259678804.1579193455.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); opinionworldennz#lang=en-NZ; NSC_dutd-80=ffffffff090c1c8e45525d5f4f58455e445a4a423660; __utmc=259678804; FB_Alert=false; LI_Alert=false; ASP.NET_SessionId=axxk1u3u2j2s0l3pr34za4fs; __utma=259678804.78181860.1579193455.1579977242.1580044298.17; __atuvc=3%7C3%2C5%7C4%2C8%7C5; __atuvs=5e2d967655222b42004; __utmt=1; __utmb=259678804.22.10.1580044298; _derived_epik=dj0yJnU9UlVOV3FJOGVFY0xEX01IdElMZHNJX1hnazZBa1R1bncmbj1EU3hXS2p0V21USElEY21JYWZjWEpBJm09NyZ0PUFBQUFBRjR1ZTk4",
        "Host: www.opinionworld.co.nz",
        "Origin: https://www.opinionworld.co.nz",
        "Accept: */*",
        "Accept-Encoding: gzip, deflate, br",
        "Accept-Language: en-US,en;q=0.9,la;q=0.8",
        "Cache-Control: no-cache",
        "Connection: keep-alive",
        "Pragma: no-cache",
        "Referer: https://www.opinionworld.co.nz/en-nz/general/recruitment/apac/nz/paid-surveys-online?jtype=d&offer_id=542&affiliate_id=1067&aff_sub=362642&transaction_id=102c6404da281e95358eb7e5851ba6&ip=60.234.42.250&",
        "Sec-Fetch-Mode: cors",
        "Sec-Fetch-Site: same-origin",
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36",
        "Content-Type: application/json"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    function curl_request($request_url) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request_url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTREDIR, 3);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        return $info['url'];
    }
    
    // $result = curl_request($url);
    // if (strpos($result, "127.0.0.1") !== false) echo("The final url is <strong>".$result.'</strong><br>So this request was not successed unfortunately!<br><h2>If you access from New Zealand, request would be successed!</h2>');
    //     // header("Location: http://localhost/html-contact-form/thank-you.html");
    // else {
    //     // $cookie = get_cookie();
        
    // }
    $final_response = register_request($params);
    print_r($final_response);
}

?>
