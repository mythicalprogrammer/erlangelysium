<?php
class Module extends Eloquent
{
    public function funs()
    {
        return $this->has_many('Fun');
    }
}
