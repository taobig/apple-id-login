# apple-id-login
A tool set for PHP projects

[![Latest Stable Version](https://poser.pugx.org/taobig/apple-id-login/v/stable)](https://packagist.org/packages/taobig/apple-id-login)
[![Latest Unstable Version](https://poser.pugx.org/taobig/apple-id-login/v/unstable)](https://packagist.org/packages/taobig/apple-id-login)
[![Total Downloads](https://poser.pugx.org/taobig/apple-id-login/downloads)](https://packagist.org/packages/taobig/apple-id-login)
[![License](https://poser.pugx.org/taobig/apple-id-login/license)](https://packagist.org/packages/taobig/apple-id-login)
[![Build Status](https://travis-ci.org/taobig/apple-id-login.svg?branch=master)](https://travis-ci.org/taobig/apple-id-login)
[![Coverage Status](https://coveralls.io/repos/github/taobig/apple-id-login/badge.svg)](https://coveralls.io/github/taobig/apple-id-login)

### INSTALLATION
**Install via Composer**  
```
>= PHP 7.1
composer require taobig/apple-id-login

```

## Usage
```
/** @var taobig\apple\model\Token $obj */
$obj = IdentityTokenChecker::checkAppleIdentityToken($token);
$obj->email;
```
```json
{
    "iss": "https://appleid.apple.com",
    "aud": "com.xxxxx.ios",
    "exp": 1583465255,
    "iat": 1583464655,
    "sub": "001271.2d8d01e20a41430aa46cc6a4ed5b6dfb.0317",
    "c_hash": "iyWz98oBS5_uNWljBEevdQ",
    "email": "8qgax65eti@privaterelay.appleid.com",
    "email_verified": "true",
    "is_private_email": "true",
    "auth_time": 1583464655,
    "nonce_supported": true
}
```
