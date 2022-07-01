<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EngranajeRectoIngles extends Component
{
    public $numpinon,$potencia,$transmision,$seguridad,$hbp,$hbc,$m,$np,$nc,$pd,$ns,$diametropinon,$velocidad,$wt,$opcionkvl,$kv,$opcionflexion,$st,$y,$o,$f;
    public $p,$x1,$x2,$y1,$y2,$x,$fn,$interpolar,$kv1,$ks,$km,$cmc,$cpf,$ko,$cpm,$cma,$a,$b,$c,$ce,$kb,$mb,$jp,$op,$a1,$b1,$c1,$ynp,$ync,$kt=1,$kr,$sfp,$oc,$jc,$opcionflexionpinona;
    public $stc,$stf,$sfc,$cf3 = 1,$i3,$cp3,$odp,$opcionfactorgeometrico,$sc3,$chp3=1,$shp3,$zn3,$grados,$scc3,$znc3,$chc3,$aprima,$shc3,$opcioncoronado;
    public $calidad;

    public function render()
    {
        return view('livewire.engranaje-recto-ingles')->extends('layouts.app')->section('content');
    }
}
