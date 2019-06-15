<?php


namespace App\Service;

class JsonService
{
    protected $httpService;

    public function __construct(
        HttpService $httpService
    )
    {
        $this->httpService = $httpService;
    }

    /**
     * Filtre notre JSON selon le type passé en paramètre
     *
     * @param $type - Types dont on à besoin
     * @return array
     */
    public function parcourirJson(string $type)
    {
        $datas = [];

        foreach ($this->httpService->getJson() as $element) {
            if ($element['type'] == $type){
                $datas[] = $element;
            }
        }

        return $datas;
    }

}