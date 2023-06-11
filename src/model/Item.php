<?php

namespace App\model;

class Item
{
    public string $id;
    public string $name;
    public string $short_desc;
    public string $long_desc;


    public function __construct($id, $name, $short_desc, $long_desc)
    {
        $this->name = $name;
        $this->id = $id;
        $this->short_desc = $short_desc;
        $this->long_desc = $long_desc;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getShortDesc(): string
    {
        return $this->short_desc;
    }

    /**
     * @param string $short_desc
     */
    public function setShortDesc(string $short_desc): void
    {
        $this->short_desc = $short_desc;
    }

    /**
     * @return string
     */
    public function getLongDesc(): string
    {
        return $this->long_desc;
    }

    /**
     * @param string $long_desc
     */
    public function setLongDesc(string $long_desc): void
    {
        $this->long_desc = $long_desc;
    }


}
