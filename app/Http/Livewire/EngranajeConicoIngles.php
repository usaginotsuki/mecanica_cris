<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EngranajeConicoIngles extends Component
{
    public $RPMp,$RPMc,$Qv,$P,$Np,$Ng,$i,$Pd,$dp,$F,$V,$Wt,$HBp,$HBg,$anguloPP,$anguloPC,$Ko,$Kv,$Ks,$Km,$Kx,$Jp,$opcionf,$Fn,$Vmax,$Kmb,$Op,$Jc,$Oc,$Ns;
    public $NL,$SF,$KL,$temperatura,$KT,$KR,$SATp,$R,$opcionsat,$SATc,$OPP,$OPC,$opcionsatc,$SFP,$SFC,$EC,$I,$CP,$Cs,$Cxc,$opcionsac,$SAC,$SH,$CH,$CR,$SWCP,$CL,$opcionsacc,$SACC,$SWCG,$SHP,$SHC;

    public function render()
    {
        return view('livewire.engranaje-conico-ingles')->extends('layouts.app')->section('content');
    }
}
