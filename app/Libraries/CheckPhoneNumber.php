<?php

namespace App\Libraries;

/*
@param mixed $id
@param mixed $phonenumber
@return bool
 */
function CheckPhoneNumber($phonenumber,$id)
{
    $curl = curl_init();
    curl_setopt_array($curl, [
        \CURLOPT_URL => '/v1/public/AllUsersPhoneNumber?id=' . $id,'&phoneNumber=' . $phonenumber,

        \CURLOPT_RETURNTRANSFER => true,
        \CURLOPT_ENCODING       => '',
        \CURLOPT_MAXREDIRS      => 10,
        \CURLOPT_TIMEOUT        => 0,
        \CURLOPT_FOLLOWLOCATION => true,
        \CURLOPT_HTTP_VERSION   => \CURL_HTTP_VERSION_1_1,
        \CURLOPT_CUSTOMREQUEST  => 'GET',
    ]);

    $response = curl_exec($curl);

    curl_close($curl);

    return $response;
}
