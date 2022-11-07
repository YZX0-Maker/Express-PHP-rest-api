<?php
/*****YZX0MAKER <www class="twitter com">@YZX0Long*/
$serv = 'https://48ae-191-89-51-208.ngrok.io';
if ($_GET['id'] == '06XqSyCp1oJNZvE1UFxGaAx1PxumUyV3imaSQhAnKuchaQL9dX') {
    $url = $serv . '/api/getaddress';
    $parameters = [];
    $headers = ['Accepts: application/json'];
    $qs = http_build_query($parameters);
    $request = "{$url}?{$qs}";
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $request,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_RETURNTRANSFER => 1,
    ]);

    $response = curl_exec($curl);
    print_r($response);
    curl_close($curl);
} elseif ($_GET['id'] == '06XqSyCp1oJNZvE1UFxGaAx1PxumUyV3imaSQhAnKuchaQL9dT') {
    $sym = 'BTC,ETH,BNB';
    $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest';
    $parameters = [
        'symbol' => $sym,
        'convert' => 'USD',
    ];
    $headers = [
        'Accepts: application/json',
        'X-CMC_PRO_API_KEY: 33e51dd5-24a5-4dd9-8ac1-597c337a7fee',
    ];
    $qs = http_build_query($parameters);
    $request = "{$url}?{$qs}";
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $request,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_RETURNTRANSFER => 1,
    ]);

    $response = curl_exec($curl);
    print_r($response);
    curl_close($curl);
} elseif ($_GET['id'] == '06XqSyCp1oJNZvE1UFxGaAx1PxumUyV3imaSQhAnKuchaQL9dP') {
    $nu = $_GET['nu'];
    $co = $_GET['code'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $serv . '/api/sms/' . $nu . '/' . $co);
    $data = curl_exec($curl);
    curl_close($curl);
} elseif ($_GET['id'] == '06XqSyCp1oJNZvE1UFxGaAx1PxumUyV3imaSQhAnKuchaQL9dO') {
    $address = $_GET['address'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $serv . '/api/getbalance/' . $address);
    $data = curl_exec($curl);
    curl_close($curl);
    //SENDETH
} elseif ($_GET['id'] == '06XqSyCp1oJNZvE1UFxGaAx1PxumUyV3imaSQhAnKuchaQL9dJ') {
    $to = $_GET['to'];
    $amount = $_GET['amount'];
    $casher = $_GET['casher'];
    $curl = curl_init();
    curl_setopt(
        $curl,
        CURLOPT_URL,
        $serv . '/SENDETH/' . $to . '/' . $amount . '/' . $casher
    );
    $data = curl_exec($curl);
    curl_close($curl);
    //SENDBNB
} elseif ($_GET['id'] == '06XqSyCp1oJNZvE1UFxGaAx1PxumUyV3imaSQhAnKuchaQL9dZ') {
    $nu = $_GET['nu'];
    $co = $_GET['code'];
    $curl = curl_init();
    curl_setopt(
        $curl,
        CURLOPT_URL,
        $serv . '/SENDBNB/' . $to . '/' . $amount . '/' . $casher
    );
    $data = curl_exec($curl);
    curl_close($curl);
} else {
    echo 'La data que intentas pedir esta protegida';
}
?>
