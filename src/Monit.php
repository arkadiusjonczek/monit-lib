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
     * Retrieve Monit Status from XML file.
     *
     * @param string $url
     * @param string $username
     * @param string $password
     *
     * @return bool|string
     */
    protected function getStatusXml($url, $username, $password)
    {
        $context = stream_context_create(
            [
                'http' => [
                    'header' => 'Authorization: Basic ' . base64_encode("$username:$password")
                ]
            ]
        );

        $xml = file_get_contents($url, false, $context);

        return $xml;
    }
}