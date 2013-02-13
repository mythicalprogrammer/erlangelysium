<?php
class Fun extends Eloquent
{
    public function examples()
    {
        return $this->has_many('Example');
    }
}
