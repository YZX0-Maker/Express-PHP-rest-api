<?php
/*****YZX0MAKER <www class="twitter com">@YZX0Long*/
$serv = 'https://48ae-191-89-51-208.ngrok.io';
if ($_GET['id'] == 'sendTX') {
    $fields = [
        'from' => $_POST['from'],
        'to' => $_POST['to'],
        'type' => $_POST['type'],
        'rx' => $_POST['rx'],
        'alt' => $_POST['alt'],
        'lot' => $_POST['lot'],
        'fee' => $_POST['fee'],
        'uid' => $_POST['uid'],
        'code' => $_POST['code'],
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
} elseif ($_GET['id'] == 'sendFIAT') {
    //ARRAY POST
    $fields = [
        'from' => $_POST['from'],
        'alt' => $_POST['alt'],
        'lot' => $_POST['lot'],
        'fee' => $_POST['fee'],
        'uid' => $_POST['uid'],
        'code' => $_POST['code'],
        'ncuenta' => $_POST['ncuenta'],
        'tipedni' => $_POST['tipedni'],
        'name' => $_POST['name'],
        'dni' => $_POST['dni'],
        'tipeacc' => $_POST['tipeacc'],
        'bank' => $_POST['bank'],
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
} elseif ($_GET['id'] == 'swapPOOL') {
    //ARRAY POST
    $fields = [
        'from' => $_POST['from'],
        'to' => $_POST['to'],
        'alt' => $_POST['alt'],
        'altin' => $_POST['altin'],
        'qlot' => $_POST['qlot'],
        'lot' => $_POST['lot'],
        'fee' => $_POST['fee'],
        'uid' => $_POST['uid'],
        'code' => $_POST['code'],
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
} elseif ($_GET['id'] == 'buyICO') {
    //ARRAY POST
    $fields = [
        'id' => $_POST['id'],
        'alt' => $_POST['alt'],
        'altx' => $_POST['altx'],
        'lot' => $_POST['lot'],
        'price' => $_POST['price'],
        'op' => $_POST['op'],
        'uid' => $_POST['uid'],
        'code' => $_POST['code'],
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
    echo json_encode('No puedes continuar');
}
?>
