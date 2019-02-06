<?php

namespace Monit;

/**
 * Class Monit
 *
 * @package Monit
 */
class Monit
{
    /**
     * URL of monit status in XML format.
     *
     * @var string
     */
    protected $url;

    /**
     * Username for the monit http interface.
     *
     * @var string
     */
    protected $username;

    /**
     * Password for the monit http interface.
     *
     * @var string
     */
    protected $password;

    /**
     * Monit constructor.
     *
     * @param string $url
     * @param string $username
     * @param string $password
     */
    public function __construct($url, $username, $password)
    {
        $this->url      = $url;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Retrieve Monit Status from XML file.
     *
     * @return bool|string
     */
    public function getStatusXml()
    {
        $context = stream_context_create(
            [
                'http' => [
                    'header' => 'Authorization: Basic ' . base64_encode("$this->username:$this->password")
                ]
            ]
        );

        $xml = file_get_contents($this->url, false, $context);

        return $xml;
    }
}