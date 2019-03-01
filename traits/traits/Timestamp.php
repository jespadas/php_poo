<?php

trait Timestamp
{
    protected $creation_date;
    protected $last_update;

    public function getCreationDate()
    {
        return $this->creation_date;
    }

    public function setCreationDate($creation_date)
    {
        return $this->creation_date = $creation_date;
    }

    public function getLastUpdate()
    {
        return $this->last_update;
    }

    public function setLastUpdate($last_update)
    {
        return $this->last_update = $last_update;
    }
}
