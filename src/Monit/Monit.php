<?php

namespace Monit;

use GuzzleHttp\ClientInterface;

/**
 * Class Monit
 *
 * @package Monit
 */
class Monit
{
    /**
     * Guzzle Client
     *
     * @var ClientInterface
     */
    protected $client;

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
    public function __construct(ClientInterface $client, $url, $username, $password)
    {
        $this->client   = $client;
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
        $options = [
            'auth' => [
                $this->username,
                $this->password
            ]
        ];

        $response = $this->client->request('GET', $this->url, $options);

        return $response->getBody()->__toString();
    }
}