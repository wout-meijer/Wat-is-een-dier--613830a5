<?php


class Vogel extends Dier
{
    public function praat()
    {
        print 'Tjilp Tjilp!' . PHP_EOL;
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