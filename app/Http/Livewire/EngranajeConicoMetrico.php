<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EngranajeConicoMetrico extends Component
{
    public $Qv,$P,$RPMp,$RPMc,$mG,$O,$anguloN,$Np,$Ng,$R,$Ns,$HBP,$HBG,$Dp,$Vet,$WT,$m,$paso,$De,$NL,$Kv,$Vetmax,$Ka,$anguloY,$Ao,$b,$Yx,$Yb=1,$Kmb,$KHB,$Yj,$Ofp;
    public $opciongrado,$Flim,$YNT,$Ko,$Ofpp,$Sf,$Yz,$V1,$V2,$E1,$E2,$ZE,$Zx,$Zxc,$ZI,$FH,$ZNT,$ZW,$SH,$FHP,$Zz,$Sff,$NLG,$Nsg,$Yjg,$Ofg,$Flimg,$opciongradocorona,$YNTG,$Ofgg;
    public $Sfg,$FHG,$ZNTG,$Sgg,$opcioncoronado,$opcionanchocara,$opciongrado20,$FHlim,$opciongrado21,$FHlimg,$ZNTP;

    public function render()
    {
        return view('livewire.engranaje-conico-metrico')->extends('layouts.app')->section('content');
    }
}
