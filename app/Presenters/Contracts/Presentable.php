<?php

namespace App\Presenters\Contracts;

trait Presentable
{
    protected $presenterInstance;

    public function present()
    {
        //dd(!class_exists($this->presenter));
        if (!$this->presenter || !class_exists($this->presenter)){
            throw new \Exception('presenter not found');
        }
        //vojod dasht ye nemone bargardano
        if (!$this->presenterInstance){
            return  $this->presenterInstance = new $this->presenter($this); //masalan UserPresenter::class misaze azash
        }
        return $this->presenterInstance;
    }

}
