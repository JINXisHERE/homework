<?php
require "ITeleso.php";
class Jehlan implements ITeleso
{
    private $a;
    private $v;
    private $Sp;
    private $Spl;
    private $O;

    public function setA($a)
    {
        $this->a = $a;
    }
    public function setV($v)
    {
        $this->v = $v;
    }
    public function __construct($a = 0, $v = 0)
    {
        $this->setA($a);
        $this->setV($v);
    }
    public function setSP()
    {
        $Sp = $this->a * $this->a;
        $this->Sp = $Sp;
    }
    public function povrch()
    {
        $Sp = 0;
        $Spl = 0;
        $Sp = $this->a * $this->a;
        $Spl = 4 * (($this->a * $this->v) / 2);
        return $Sp + $Spl;
    }
    public function objem()
    {
        $v = 0;
        $O = 0;
        $Sp = $this->a * $this->a;
        $O = 1 / 3 * $Sp * $this->v;
        return $O;
    }
    public function is3D()
    {
        if (($this->a > 0) and ($this->v > 0)) {
            return "je 3D";
        } else {
            return "neni 3D";
        }

    }
    public function pocetVrcholu()
    {
        return "pocet vrcholu je: 1";
    }

    public function info(): string
    {
        return "Jehlan<br>\n" .
        $this->pocetVrcholu() . "<br>" .
        $this->is3D() . "<br>" .
        "povrch je: " . $this->povrch() . "<br>" .
        "Objem je: " . $this->objem() . "<br>";
    }
}
