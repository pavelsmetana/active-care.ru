<?php

namespace App\controller;

use App\attribute\Route;
use App\model\Db;
use App\model\Item;

class DefaultController extends Controller
{
//    /**
//     * @return void
//     * @Route("^\/$")
//     */

    #[Route("^\/$")]

    public function index(): void
    {
        $db = new Db();
        $result  = $db->query("select item.id, item.name, item.image, item.short_desc from item
        order by item.id asc limit 20 offset 0"
        );
        echo renderHtml("items-list", $result);
    }

    #[Route("^/item/{id}", methods: ["GET"])]
    public function item(string $id): void
    {
        echo ($id);
    }


    #[Route("\/page/([a-z\-]+)$")]

    public function page(string $view): void
    {
        echo renderHtml($view);
    }
}
