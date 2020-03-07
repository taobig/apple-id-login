<?php


namespace taobig\apple;


use CoderCat\JWKToPEM\JWKConverter;
use Firebase\JWT\JWT;
use GuzzleHttp\Client;

class IdentityTokenChecker
{

    //https://forums.developer.apple.com/thread/124175
    //https://forums.developer.apple.com/thread/129047
    //https://jwt.io/
    public static function checkAppleIdentityToken(string $identityToken)
    {
        $url = 'https://appleid.apple.com/auth/keys';
        $client = new Client([
            'timeout' => 3,
        ]);
        $response = $client->request('GET', $url);
        $body = $response->getBody()->getContents();
        $keys = json_decode($body, true)['keys'];

        $keyMap = [];
        $allowedAlgs = [];
        foreach ($keys as $key) {
            $kid = $key['kid'];
            $alg = $key['alg'];//'RS256'...
            $jwkConverter = new JWKConverter();
            $keyMap[$kid] = $jwkConverter->toPEM($key);
            $allowedAlgs[$alg] = true;
        }
        return JWT::decode($identityToken, $keyMap, array_keys($allowedAlgs));
    }

}