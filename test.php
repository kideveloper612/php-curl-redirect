<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.mb102.com/lnk.asp?o=8012&c=918277&a=362642&k=23FBB52312A104CA76138A4B6E5305B6&l=6724&s1=facegroup",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => array('gender' => 'male','firstname' => 'testfdsf','lastname' => 'testsada','email' => 'test@test.com','dob_day' => '2','dob_month' => '24','dob_year' => '2016','address' => 'testset','towncity' => 'testsee','postcode' => '654654','panel[0]' => '71c77d90-e461-11e9-811e-a91b8742a251'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
