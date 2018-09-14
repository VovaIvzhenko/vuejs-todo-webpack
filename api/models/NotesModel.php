<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 14.09.2018
 * Time: 18:09
 */

namespace models;

use models\Model;

class NotesModel extends Model
{
    protected $db = 'todo';
    protected $table = 'notes';
}