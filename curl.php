<?php

    if (isset($_POST['name'])) {

        //cabeçalho, onde passo o ApiKey q vem no Iugu 
        $headers = array(
            'Authorization: Basic ' . base64_encode("119bd271ba6cfc274263fb6019467d35"),
            'Content-Type: multipart/form-data'
        );
        // usando a biblioteca cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.iugu.com/v1/customers/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, array_map('utf8_encode', $_POST));
        $result = json_decode(curl_exec($ch));

        echo json_encode($result);
        
    }
    


    //$ch = curl_init();

    //curl_setopt($ch, CURLOPT_URL, "https://api.iugu.com/v1/customers?api_token=49DD8EF63D6D477CA6376F5AAC59861D");
    
    // curl_exec($ch);

    // curl_close($ch);
    
    // $ch = curl_init("https://api.iugu.com/v1/customers");

    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // $data = array(
    //      'd' => '49DD8EF63D6D477CA6376F5AAC59861D',
    //      'e' => 'romulosimiquel@gmail.com'
    // );

    // curl_setopt($ch, CURLOPT_POST, true);

    // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    //argumentos
