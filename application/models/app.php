<?php
class App extends Eloquent
{
    public function modules()
    {
        return $this->has_many('Module');
    }
}
