<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 // HTTP request
                $ch = curl_init();
                $host = "http://api.masterdatanode.com/demo/greeting?LANGUAGE=ENGLISH";
                $callUrl = $host;
//                echo "<br><br><br><br><br> -------------".$callUrl;
                $callkey = 'Zs0nTQB-ujOSV0KmEoPhBx2E6-Ab_GKO';
                curl_setopt($ch, CURLOPT_URL, $callUrl);
                curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);  //Post Fields
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $headers = array();
                $headers[] = 'Accept: application/json;q=0.9,*/*;q=0.8';
//$headers[] = 'Accept-Encoding: gzip, deflate';
//                $headers[] = 'Accept-Language: en-US,en;q=0.5';
                $headers[] = 'Cache-Control: no-cache';
                $headers[] = 'Content-Type: application/json ';
//                $headers[] = 'Host: '."http://api.masterdatanode.com/";
//                $headers[] = 'Referer: '. "http://www.masterdatanode.com/" ; //Your referrer address
                $headers[] = 'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:28.0) Gecko/20100101 Firefox/28.0';
                $headers[] = 'access_token: ' .$callkey ;

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                $server_output = curl_exec($ch);
                curl_close($ch);
                $data = json_decode($server_output);
                echo $data['greeting'];
                echo "Greeting from MasterDataNode " 
                
                
?>                

