<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 14.09.2018
 * Time: 17:34
 */

namespace controllers;

class NotesController
{
    public function getNotes()
    {
        return [
            ['title' => 'test title', 'description' => 'test description'],
            ['title' => 'test213 title123', 'description' => 'test123 description123']
        ];
    }
}