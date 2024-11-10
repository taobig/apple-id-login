<?php


namespace taobig\apple;


use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use GuzzleHttp\Client;
use taobig\apple\model\Token;

class IdentityTokenChecker
{

    //https://forums.developer.apple.com/thread/124175
    //https://forums.developer.apple.com/thread/129047
    //https://jwt.io/
    public static function checkAppleIdentityToken(string $identityToken): Token
    {
        $url = 'https://appleid.apple.com/auth/keys';
        $client = new Client([
            'timeout' => 3,
        ]);
        $response = $client->request('GET', $url);
        $body = $response->getBody()->getContents();
        $inputKeys = json_decode($body, true)['keys'];

        $keys = [];
        foreach ($inputKeys as $key) {
            $kid = $key['kid'];
            $alg = $key['alg'];//'RS256'...
            $keys[] = new Key($kid, $alg);
        }
        $obj = JWT::decode($identityToken, $keys);
        $token = new Token();
        $properties = get_object_vars($obj);
        foreach ($properties as $propertyName => $propertyValue) {
            $token->{$propertyName} = $propertyValue;
        }
        return $token;
    }

}