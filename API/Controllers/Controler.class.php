<?php

namespace App\Controller;

class Controler
{
    /**
    * Variables privées
    */
    private $defaultRequestPrivate;
    private $tablePrivate;
    /**
     * Fonctions publiques
     */

    /**
     * Attribue les données privées de la requête par défaut et de la table utilisée
     * @param mixed $defaultRequestPublic
     * @param mixed $tablePublic
     */
    public function __construct($defaultRequestPublic, $tablePublic)
    {
        $this->defaultRequestPrivate = $defaultRequestPublic;
        $this->tablePrivate = $tablePublic;
    }

    /**
     * Exécute la requête pour obtenir tous les éléments de la requête SQL
     * @return bool|string
     */
    public function getAll()
    {
        return (self::errorRequest($this->defaultRequestPrivate.' order by created_at DESC'));
    }

    /**
     * Exécute la requête pour obtenir les 5 premiers résultats en triant par date
     * @return bool|string
     */
    public function getFive()
    {
        return (self::errorRequest($this->defaultRequestPrivate.' order by created_at DESC limit 5 '));
    }

    /**
     * Exécute la requête SQL avec en condition l'ID de l'élément cherché
     * @param int $id
     * @return bool|string
     */
    public function get($id)
    {
        return (self::errorRequest($this->defaultRequestPrivate." WHERE $this->tablePrivate.id=$id"));
    }

    /**
     * Exécute la requête et renvoie un JSON avec le statut et un message
     * @param mixed $request
     * @return bool|string
     */
    public function post($requestAdd)
    {
        return self::executeRequest($requestAdd);  
    }

    public function patch($requestUpdate)
    {
        return self::executeRequest($requestUpdate);  
    }

    public function delete($requestDelete)
    {
        return self::executeRequest($requestDelete);
    }

    /**
     * Fonctions privées
     */

    private function executeRequest($request)
    {
        $success = 'La requête a été exécutée avec succès';
        $error = "La requête n'a pas fonctionné car ";
        try {
            createRequest($request);
            return json_encode([
                'success' => true,
                'message' => $success,
            ]); 
        } catch (\Exception $e) {
            $recup = $e->getMessage();
            return json_encode([
                'success' => false,
                'message' => $error . $recup,
            ]);
        } 
    }
    private function errorRequest($request)
    {
        $error = "La requête n'a pas fonctionné car ";
        try {
            $success = createRequest($request);
            return json_encode([
                'success' => true,
                'message' => $success,
            ]); 
        } catch (\Exception $e) {
            $recup = $e->getMessage();
            return json_encode([
                'success' => false,
                'message' => $error.$recup,
            ]);
        } 
    }  
}
