<?php


namespace App\Api\Controller;

use App\Enum\Types;
use App\Service\JsonService;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{
    protected $jsonService;

    public function __construct(
        JsonService $jsonService
    )
    {
        $this->jsonService = $jsonService;
    }

    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index()
    {
        return [];
    }

    /**
     * @Route("/{type}", name="index", methods={"GET"})
     */
    public function get($type)
    {
        $types = Types::getAll();

        if (!in_array(strtoupper($type), $types)) {
            throw new Exception("Type non reconnu", 400);
        }

        return $this->jsonService->parcourirJson(strtoupper($type));
    }
}