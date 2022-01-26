<?php
namespace App\Http\Controllers;
class RSAUtils
{


    public const PUBLIC_KEY=<<<ROT
-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDGdiNW38TIiIpZ2nugSk0AgXNQ
u3GHMPkKMwvelMB2V2gRu4wdtnoq4m5Xy3noYERu8QCpkvp2fc7JlyPpqXs98g+w
563WA88JH++OS840eJmc6j3JR4Y/5jX/yvq9Ykl/PvGJGNvTBuNXPbj9pwuiUDqU
7gUQLXgGqssxxuxBswIDAQAB
-----END PUBLIC KEY-----
ROT;
    public const PRIVATE_KEY=<<<EOT
-----BEGIN RSA PRIVATE KEY-----
MIICXQIBAAKBgQDGdiNW38TIiIpZ2nugSk0AgXNQu3GHMPkKMwvelMB2V2gRu4wd
tnoq4m5Xy3noYERu8QCpkvp2fc7JlyPpqXs98g+w563WA88JH++OS840eJmc6j3J
R4Y/5jX/yvq9Ykl/PvGJGNvTBuNXPbj9pwuiUDqU7gUQLXgGqssxxuxBswIDAQAB
AoGACRpWGJ/+6KvKnMB2ty1xRrqpTWSrmmXWpm8c9kKgaU0tCtMtZBeAlwL3yLMe
jlgMC4KmYyDIuDKhD4INNaR+cI4lls4B5bbvhxLj+yz4tRWqtkHoeDXlWL2mqyzz
KZ2DlYGMgy77rooCTFADwHpWflEjO2y58K7ZpYYmBGvZOKECQQD6JyxYTzuskTWr
Ca+mGnWroxL93nvun5NJ3oQiDRSjgA/cuRpy2HV66gy8sxyPZRGJq1FzuzdGHKmb
qL7kzPULAkEAyxmpNukaA60MT1Yb4i2GDNpFZkOHZbaWjb51ux/bcd4gxFOfO/8l
4GJa1CL2i7ry6jI3uo4yxMCs9Z/uNfP++QJBAO3LLTlpYGWjx+umEoYIoxEcvOH9
i7wDj4Tp9JtV6eeexfVhNIY1xD+qm58JeL3LKse+xngIYPvSJVzmJUjkmI8CQQCV
iW5ChLxnqnjezRq4nCYPvoHMerntFNOix3GtdhY/r3nWs28RYJoFrMUNXjTCysHh
11ma3OnaXba7HqboSJ8ZAkApmseSiKQiR2BjMEAV462Yzxh/fDApS0qVzQBR5KBV
yaFXNT+8mRokscUiUsSI0IUI4a1lSrBWv6cEEopgHuC1
-----END RSA PRIVATE KEY-----
EOT;


    /**
     * 签名算法，SHA256WithRSA
     */
    private const SIGNATURE_ALGORITHM = OPENSSL_ALGO_SHA256;

    /**
     * RSA最大加密明文大小
     */
    private const MAX_ENCRYPT_BLOCK = 117;

    /**
     * RSA最大解密密文大小
     */
    private const MAX_DECRYPT_BLOCK = 128;



    /**
     * 使用公钥将数据加密
     * @param $data string 需要加密的数据
     * @param $publicKey string 公钥
     * @return string 返回加密串(base64编码)
     */
    public static function publicEncrypt($data,$publicKey){
        $data = str_split($data, self::MAX_ENCRYPT_BLOCK);

        $encrypted = '';
        foreach($data as & $chunk){
            if(!openssl_public_encrypt($chunk, $encryptData, $publicKey)){
                return '';
            }else{
                $encrypted .= $encryptData;
            }
        }
        return self::urlSafeBase64encode($encrypted);
    }

    /**
     * 使用私钥解密
     * @param $data string 需要解密的数据
     * @param $privateKey string 私钥
     * @return string 返回解密串
     */
    public static function privateDecrypt($data,$privateKey){
        $data = str_split(self::urlSafeBase64decode($data), self::MAX_DECRYPT_BLOCK);

        $decrypted = '';
        foreach($data as & $chunk){
            if(!openssl_private_decrypt($chunk, $decryptData, $privateKey)){
                return '';
            }else{
                $decrypted .= $decryptData;
            }
        }
        return $decrypted;
    }

    /**
     * 使用私钥将数据加密
     * @param $data string 需要加密的数据
     * @param $privateKey string 私钥
     * @return string 返回加密串(base64编码)
     */
    public static function privateEncrypt($data,$privateKey){
        $data = str_split($data, self::MAX_ENCRYPT_BLOCK);

        $encrypted = '';
        foreach($data as & $chunk){
            if(!openssl_private_encrypt($chunk, $encryptData, $privateKey)){
                return '';
            }else{
                $encrypted .= $encryptData;
            }
        }
        return self::urlSafeBase64encode($encrypted);
    }


    /**
     * 使用公钥解密
     * @param $data string 需要解密的数据
     * @param $publicKey string 公钥
     * @return string 返回解密串
     */
    public static function publicDecrypt($data,$publicKey){
        $data = str_split(self::urlSafeBase64decode($data), self::MAX_DECRYPT_BLOCK);

        $decrypted = '';
        foreach($data as & $chunk){
            if(!openssl_public_decrypt($chunk, $decryptData, $publicKey)){
                return '';
            }else{
                $decrypted .= $decryptData;
            }
        }
        return $decrypted;
    }


    /**
     * 私钥加签名
     * @param $data 被加签数据
     * @param $privateKey 私钥
     * @return mixed|string
     */
    public static function rsaSign($data, $privateKey){
        if(openssl_sign($data, $sign, $privateKey, self::SIGNATURE_ALGORITHM)){
            return self::urlSafeBase64encode($sign);
        }
        return '';
    }

    /**
     * 公钥验签
     * @param $data 被加签数据
     * @param $sign 签名
     * @param $publicKey 公钥
     * @return bool
     */
    public static function verifySign($data, $sign, $publicKey):bool {
        return (1 == openssl_verify($data, self::urlSafeBase64decode($sign), $publicKey, self::SIGNATURE_ALGORITHM));
    }

    /**
     * url base64编码
     * @param $string
     * @return mixed|string
     */
    public static function urlSafeBase64encode($string){
        $data = str_replace(array('+','/','='), array( '-','_',''), base64_encode($string));
        return $data;
    }

    /**
     * url base64解码
     * @param $string
     * @return bool|string
     */
    public static function urlSafeBase64decode($string){
        $data = str_replace(array('-','_'), array('+','/'), $string);
        $mod4 = strlen($data) % 4;
        if($mod4){
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }

}
