<?php 

class Laptop
{
    public $ram;
    public $graphics;
    public function __construct($ram, $graphics)
    {
        $this->ram = $ram;
        $this->graphics = $graphics;
    }
    public function getspecs()
    {
        echo "The specs of the laptop: {$this->ram} gb ram, {$this->graphics} gb graphics";
    }
}

class Samsung extends Laptop
{
    public $ssd;
    public function __construct($ram, $graphics, $ssd) 
    {
        Parent::__construct($ram, $graphics);
        $this->ssd = $ssd;
    }
    public function getspecs()
    {
        echo "The specs of the laptop: {$this->ram} gb ram, {$this->graphics} gb graphics, {$this->ssd} gb ssd.";
    }
}

class NoteBook extends Samsung 
{
    public $processor;
    public function __construct($ram, $graphics, $ssd, $processor)
    {
        parent::__construct($ram, $graphics, $ssd);
        $this->processor = $processor;
    }
    public function getspecs()
    {
        echo "The specs of the laptop: {$this->ram} gb ram, 
        {$this->graphics} gb graphics, {$this->ssd} gb ssd, i{$this->processor} processor";
    }
}

// $f22 = new Samsung(8, 4, 128);
// $f22->getspecs();

$newnotebook = new NoteBook(8, 8, 128, 5);
$newnotebook->getspecs();