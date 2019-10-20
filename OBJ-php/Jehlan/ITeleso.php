<?php

interface ITeleso
{

    public function povrch();

    public function objem();

    public function is3D();

    public function pocetVrcholu();

    public function info(): string;
}
