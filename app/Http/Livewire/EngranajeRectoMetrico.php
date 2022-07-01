<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EngranajeRectoMetrico extends Component
{
    public $hbp, $hbg, $np, $ng, $i, $qv=6,$modulo=2,$potencia,$ns,$dp,$rpmp,$rpmg,$v,$wt,$kv,$opcionkv,$opcionflexion,$y,$interpolar,$st,$o,$f,$pc,$y1,$y2,$x,$x1,$x2,$grados;
    public $fn,$ko,$kv1,$a,$b,$ks,$km,$cmc=1,$cpf,$cpm=1,$cma,$ce=1,$kb,$a1,$b1,$c1,$mb,$jp,$ynp,$kt=1,$kr=1,$sfp,$op,$jg,$og,$sfg,$opcionflexion3,$stg,$yng,$ze,$zr=1,$zi;
    public $opcionfactorgeometrico,$scp,$chp=1,$znp,$shp,$ocp,$scg,$zng,$chg,$shg,$opcioncoronado;
    public function render()
    {
        return view('livewire.engranaje-recto-metrico')->extends('layouts.app')->section('content');
    }
}
