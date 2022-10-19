<?php
$serv = "https://48ae-191-89-51-208.ngrok.io";
if($_GET['id']=='withdrawP2C') {
    $fields = array(
        'from' => $_POST['from'],
        'to' => $_POST['to'],
        'lot' => $_POST['lot'],
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
}elseif($_GET['id']=='depositP2C') {
    //ARRAY POST
    $fields = array(
        'from' => $_POST['from'],
        'to' => $_POST['to'],
        'lot' => $_POST['lot'],
        'uid' => $_POST['uid'],
        'code' => $_POST['code'],
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