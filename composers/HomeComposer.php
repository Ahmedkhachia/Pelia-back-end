<?php namespace App\Composers;

class HomeComposer
{

    public function compose($view)
    {
        //Add your variables
        $view->with('data',      $data);
    }
}