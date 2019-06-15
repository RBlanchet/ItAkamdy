<?php


namespace App\Service;


class HttpService
{
    /**
     * @var mixed
     */
    private $json;

    /**
     * HttpService constructor.
     * @param string $url
     */
    public function __construct(
        string $url
    )
    {
        if (!$this->json) {
            $this->json = json_decode(file_get_contents($url), true);
        }
    }

    /**
     * Retourne le JSON sous forme de tableau
     *
     * @return mixed
     */
    public function getJson()
    {
        return $this->json['values'];
    }
}