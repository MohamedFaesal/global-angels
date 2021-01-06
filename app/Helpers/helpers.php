<?php

function is_base64($data)
{
    $decoded_data = base64_decode($data, true);
    $encoded_data = base64_encode($decoded_data);
    return $encoded_data == $data;
}

function baseDomainName($str)
{
    $url = parse_url( $str );
    if ( empty( $url['host'] ) ) return '';
    $parts = explode( '.', $url['host'] );
    return $parts[1];
}

function getAmazonAsin($str)
{
    $url = parse_url( $str );
    if ( empty( $url['path'] ) ) return '';
    $parts = explode( '/', $url['path']);
    $asin = '';
    foreach ($parts as $part) {
        $valid = preg_match("/^(B\d{2}[A-Z\d]{7}|\d{9}[X\d])$/", $part);
        if ($valid) {
            $asin = $part;
            break;
        }
    }
    return $asin;
}