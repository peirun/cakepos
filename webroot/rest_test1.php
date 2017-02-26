<html>
<body>

<div id="header">
<h1>Request</h1>
</div>


<form action=""  method="post">
<label>URL</label>
<input name="url" type="text" size="40" /><br />
<label>Id</label>
<input name="identifier" type="number" size="40" /><br />
<label>DC_Emplacement</label>
<input name="emplacement" type="text" size="22" /><br />
<label>CSRF Token</label>
<input name="csrftoken" type="text" size="100" /><br />
<label>Method</label>
<label><input name="method" type="radio" value="GET" />GET </label>
<label><input name="method" type="radio" value="POST" />POST </label>
<label><input name="method" type="radio" value="PUT" />PUT </label>
<label><input name="method" type="radio" value="DELETE" />DELETE </label>
<label>Send</label>
<input name="" type="submit" value="Send" />
</form>
</html>

<?php

switch ($_POST['method']){
       case 'GET':
             getResponse();
             break;
       case 'POST':
             postResponse();
             break;
       case 'PUT':
             putResponse();
             break;
       case 'DELETE':
             deleteResponse();
             break;
       default:
             echo 'You should choose a request method';

}

function getResponse(){
       $fm_url2=$_POST['url'];
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $fm_url2);
       curl_setopt($ch, CURLOPT_HEADER, true);
       curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Accept: application/json'));
       curl_setopt($ch, CURLOPT_HTTPGET, 1);

       //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
       //curl_setopt($ch, CURLOPT_POST, 1);

       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
       curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);


       //$request=login($login, $password);
       //$postdata = array('data'=>$request);
       //curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

       $response = curl_exec($ch);
       curl_error($ch);
       var_dump(curl_error($ch));
       var_dump($response);
}

function postResponse(){
       $fm_url=$_POST['url'];
       $data = array('id' => $_POST['identifier'], 'DC_Emplacement' => $_POST['emplacement']);
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $fm_url);
       curl_setopt($ch, CURLOPT_POST, 1);
       curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false); // required as of PHP 5.6.0
       curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

       curl_setopt($ch, CURLOPT_HEADER, 1);
       curl_setopt($ch, CURLOPT_HTTPGET, 1);

       //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
       //curl_setopt($ch, CURLOPT_POST, 1);

       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
       curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);


       //$request=login($login, $password);
       //$postdata = array('data'=>$request);
       //curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

       $response = curl_exec($ch);
       curl_error($ch);
       var_dump(curl_error($ch));
       var_dump($response);

}



?>
