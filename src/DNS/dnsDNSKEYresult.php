<?php

namespace SocksProxyAsync\DNS;

class dnsDNSKEYresult extends dnsResult
{
    private $flags;
    private $algorithm;
    private $protocol;
    private $sep;
    private $zonekey;
    private $keylength;
    private $publickey;
    private $publickeybase64;
    private $keytag;

    public function __construct($flags, $protocol, $algorithm, $pubkey)
    {
        parent::__construct();
        $this->setKeylength(strlen($pubkey));
        $this->setFlags($flags);
        $this->setProtocol($protocol);
        $this->setAlgorithm($algorithm);
        $this->setPublicKey($pubkey);
        $this->setPublicKeyBase64(base64_encode($pubkey));
        $this->sep = false;
        $this->zonekey = false;
    }

    public function setKeytag($keytag)
    {
        $this->keytag = $keytag;
    }

    public function getKeytag()
    {
        return $this->keytag;
    }

    public function setKeylength($keylength)
    {
        $this->keylength = $keylength;
    }

    public function getKeylength()
    {
        return $this->keylength;
    }

    public function setFlags($flags)
    {
        $this->flags = $flags;
    }

    public function getFlags()
    {
        return $this->flags;
    }

    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
    }

    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
    }

    public function getProtocol()
    {
        return $this->protocol;
    }

    public function setZoneKey($bool)
    {
        $this->zonekey = $bool;
    }

    public function getZoneKey()
    {
        return $this->zonekey;
    }

    public function setSep($bool)
    {
        $this->sep = $bool;
    }

    public function getSep()
    {
        return $this->sep;
    }

    public function setPublicKey($key)
    {
        $this->publickey = $key;
    }

    public function getPublicKey()
    {
        return $this->publickey;
    }

    public function setPublicKeyBase64($key)
    {
        $this->publickeybase64 = $key;
    }

    public function getPublicKeyBase64()
    {
        return $this->publickeybase64;
    }
}
