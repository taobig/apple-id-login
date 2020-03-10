<?php


namespace taobig\apple\model;


class Token
{
    /** @var string */
    public $iss;// "https://appleid.apple.com",
    /** @var string */
    public $aud;// "com.xxxxx.ios",
    /** @var int */
    public $exp;// 1583465255,
    /** @var int */
    public $iat;// 1583464655,
    /** @var string */
    public $sub;// "001271.2d8d01e20a41430aa46cc6a4ed5b6dfb.0317",
    /** @var string */
    public $c_hash;// "iyWz98oBS5_uNWljBEevdQ",
    /** @var string */
    public $email;// "8qgax65eti@privaterelay.appleid.com",
    /** @var string */
    public $email_verified;// "true",
    /** @var string */
    public $is_private_email;// "true"/NULL
    /** @var int */
    public $auth_time;// 1583464655,
    /** @var bool */
    public $nonce_supported;// true

}