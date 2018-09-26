<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 14.09.2018
 * Time: 17:34
 */

namespace controllers;

use models\NotesModel;
use models\CategoriesModel;

class NotesController
{
    private $notesModel;
    private $categoriesModel;
    private $response;

    public function __construct()
    {
        $this->response = new \StdClass();
        $this->notesModel = new NotesModel();
        $this->categoriesModel = new CategoriesModel();
    }

    public function collectData()
    {
        $this->response->notes = $this->getNotes();
        $this->response->categories = $this->getCategories();

        return $this->response;
    }

    public function getCategories()
    {
        return $this->categoriesModel->select('*', ['st' => 1]);
    }

    public function getNotes()
    {
        $notes = [];
        $result = $this->notesModel->select('*', ['st' => 1]);

        foreach ($result as $row) {
            $notes[$row['id_cat']][] = $row;
        }

        return $notes;
    }
}