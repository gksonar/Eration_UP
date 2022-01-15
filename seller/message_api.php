 <?php
 //message api
 $msg="Hi, ".$ration_number." Your Ration has been delivered";
        

$mobile=$user_mobile_no;

$ch = "RATION";

        $apiurl =
"http://sms.happysms.in/api/sendhttp.php?authkey=242446A57b8VBMQpOd5bc06387&mobiles=$mobile&message=$msg&sender=$ch&route=4&country=91";

      $ch = curl_init($apiurl);

      if($method == "GET"
      {
        curl_setopt($ch, CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$apiurl);
      }
      else
      {
        $get_url = $apiurl;
        curl_setopt($ch, CURLOPT_POST,0);
        curl_setopt($ch, CURLOPT_URL, $get_url);
      }

      curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
      curl_setopt($ch, CURLOPT_HEADER,0);
      // DO NOT RETURN HTTP HEADERS
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
      // RETURN THE CONTENTS OF THE CALL
      $return_val = curl_exec($ch);

      if($return_val==""
      {
      echo "Process Failed";
      }

//end
      ?>