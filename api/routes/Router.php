<?php

namespace routes;

use Klein\Klein;
use controllers\NotesController;

class Router
{
    private $klein;

    public function __construct()
    {
        $this->klein = new Klein();
        $this->notes();
        $this->error();
        $this->klein->dispatch();
    }

    public function notes()
    {
        $this->klein->with('/notes', function () {
            $notesController = new NotesController();

            $this->klein->respond('GET', '/get', function ($request, $response) use ($notesController) {
                $notesController->getNotes();
            });

            $this->klein->respond('GET', '/test', function ($request, $response) use ($notesController) {
                $response->json(['test' => 'test success']);
            });
        });
    }

    public function error()
    {
        $this->klein->onHttpError(function ($code, $router) {
            switch ($code) {
                case 404:
                    $router->response()->body(
                        'code 404'
                    );
                    break;
                case 405:
                    $router->response()->body(
                        'You can\'t do that!'
                    );
                    break;
                default:
                    $router->response()->body(
                        'Oh no, a bad error happened that caused a ' . $code
                    );
            }
        });
    }
}