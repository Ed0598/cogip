<?php

namespace App ;

class Controler 
{
    private $defaultRequestPrivate;
    private $tablePrivate;

    public function __construct($defaultRequestPublic, $tablePublic)
    {
        $this->defaultRequestPrivate = $defaultRequestPublic;
        $this->tablePrivate = $tablePublic;
    }
    
    public function getAll()
    {
        return json_encode(createRequest($this->defaultRequestPrivate.' order by created_at DESC'));
    }

    public function getFive()
    {
        return json_encode(createRequest($this->defaultRequestPrivate.' order by created_at DESC limit 5 '));
    }
    public function get($id)
    {
        return json_encode(createRequest($this->defaultRequestPrivate." WHERE $this->tablePrivate.id=$id"));
    }

    public function postAll($requestAdd)
    {
        return json_encode([
            'success' => true,
            'message' => createRequest($requestAdd)
        ]);   
    }

    public function patchAll($requestUpdate)
    {
        return json_encode([
            'success' => true,
            'message' => createRequest($requestUpdate)
        ]);   
    }
}
