<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EngranadeHelicoidalMetrico extends Component
{
    public $qv,$P,$np,$NP,$NG,$HBP,$HBG,$b,$NLP,$NLG,$anguloE,$anguloN,$mG,$m,$Pn,$mt,$C,$Pt,$Vt,$Ft,$OFp,$Ko,$Kv,$Ks=1,$KH,$KB,$mB,$dp,$interpolar,$Y,$y1,$y2,$x,$x1,$x2;
    public $Khmc,$KHpm,$KHpf,$KHmaA,$KHmaB,$KHmaC,$KHe,$Yjp,$Yjg,$KHma,$KHmc,$opcionflexion3,$OFP,$opciongrado9,$YN,$opcionformula=2;
    public $Y0=1,$YZ,$OFg,$Sfp,$Sfg,$OFPG,$opciongrado2,$opcionflexion4,$opcionformula2=2,$opcionformula3=2,$YNG,$OH,$ZE,$ZR,$opcionfactorgeometrico;
    public $rp,$dg,$rg,$angulot,$ZI,$a,$rbp,$rbg,$ZNP,$ZWP=1,$OHP,$opciongrado3,$SHP,$OHPG,$opcionformula4,$ZNG,$ZWG,$SHG,$opcioncoronado,$ns,$opciongrado7;
    
    public function render()
    {
        return view('livewire.engranade-helicoidal-metrico')->extends('layouts.app')->section('content');
    }
}
