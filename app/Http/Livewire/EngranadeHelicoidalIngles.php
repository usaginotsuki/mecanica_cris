<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EngranadeHelicoidalIngles extends Component
{
    public $qv,$potencia,$grados,$pn,$angulon,$anguloy,$rpmp,$rpmc,$i,$np,$pt,$dp,$wt,$v,$ko,$kv,$ks,$km,$kb,$o,$st,$f,$j,$opcionkv,$interpolar,$aa,$bb,$ns;
    public $cmc,$ce,$cma,$cpm,$cpf,$a1,$b1,$c1,$mb,$hbp,$hbc,$opcionflexion,$opcionfactorgeometrico,$i3,$rp,$dg,$angulot,$rg,$a,$rbp,$rbg,$z,$y,$x,$x1,$x2,$y1,$y2;
    public $ynp,$kt,$kr,$sfp,$jp,$op,$jc,$oc,$opcionflexionpinona,$stc,$ync,$sfc,$cf3,$cp3,$odp,$sc3,$chp3,$zn3,$shp3,$scc3,$chc3,$shc3,$opcioncoronado,$znc3;

    public function render()
    {
        return view('livewire.engranade-helicoidal-ingles')->extends('layouts.app')->section('content');
    }
}
