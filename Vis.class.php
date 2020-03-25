<?php


class Vis extends Dier
{
    public function praat()
    {
        print 'Blub Blub!' . PHP_EOL;
    }

    public function eet()
    {
        $this->praat();
        parent::eet();
    }

    public function slaap()
    {
        $this->praat();
        parent::slaap();
    }
}