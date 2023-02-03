<?php

namespace App\Controller ;

class Controler 
{
    private $defaultRequestPrivate;
    private $tablePrivate;

    /**
     * Attribue les donnees privees de la requete par defaut et de la table utilisee
     * @param mixed $defaultRequestPublic
     * @param mixed $tablePublic
     */
    public function __construct($defaultRequestPublic, $tablePublic)
    {
        $this->defaultRequestPrivate = $defaultRequestPublic;
        $this->tablePrivate = $tablePublic;
    }
    
    /**
     * Execute la requete pour obtenir tous les elements de la requetes SQL
     * @return bool|string
     */
    public function getAll()
    {
        return json_encode(createRequest($this->defaultRequestPrivate.' order by created_at DESC'));
    }

    /**
     * Execute la requete pour obtenir les 5 premiers resultats en triant par date
     * @return bool|string
     */
    public function getFive()
    {
        return json_encode(createRequest($this->defaultRequestPrivate.' order by created_at DESC limit 5 '));
    }

    /**
     * Execute la requete SQL avec en condition l'id de l'element cherche
     * @param int $id
     * @return bool|string
     */
    public function get($id)
    {
        return json_encode(createRequest($this->defaultRequestPrivate." WHERE $this->tablePrivate.id=$id"));
    }

    /**
     * Execute the request and return a JSON with the status and a message
     * @param mixed $request
     * @return bool|string
     */
    private function executeRequest($request)
    {
        return json_encode([
            'success' => true,
            'message' => createRequest($request)
        ]);   
    }
    
    public function post($requestAdd)
    {
        //return $this->executeRequest($requestAdd);
        return json_encode([
            'success' => true,
            'message' => createRequest($requestAdd)
        ]);   
    }
    
    public function patch($requestUpdate)
    {
        //return $this->executeRequest($requestUpdate);
        return json_encode([
            'success' => true,
            'message' => createRequest($requestUpdate)
        ]);   
    }
    
    public function delete($requestUpdate)
    {
        //return $this->executeRequest($requestUpdate);
        return json_encode([
            'success' => true,
            'message' => createRequest($requestUpdate)
        ]);   
    }
}
