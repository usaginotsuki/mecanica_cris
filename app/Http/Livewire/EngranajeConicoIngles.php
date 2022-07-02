<?php

namespace App\Http\Livewire;
use Ismaelw\LaraTeX\LaraTeX;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Request;

class EngranajeConicoIngles extends Component
{
    public $RPMp,$RPMc,$Qv,$P,$Np,$Ng,$i,$Pd,$dp,$F,$V,$Wt,$HBp,$HBg,$anguloPP,$anguloPC,$Ko,$Kv,$Ks,$Km,$Kx,$Jp,$opcionf,$Fn,$Vmax,$Kmb,$Op,$Jc,$Oc,$Ns;
    public $NL,$SF,$KL,$temperatura,$KT,$KR,$SATp,$R,$opcionsat,$SATc,$OPP,$OPC,$opcionsatc,$SFP,$SFC,$EC,$I,$CP,$Cs,$Cxc,$opcionsac,$SAC,$SH,$CH,$CR,$SWCP,$CL,$opcionsacc,$SACC,$SWCG,$SHP,$SHC;

    public function render()
    {
        return view('livewire.engranaje-conico-ingles')->extends('layouts.app')->section('content');
    }

    public function download()
    {   
        $s = "1";
        var_dump($s);
        return $request->all();
        $pdf = (new LaraTeX('latex.conicoSI'))->with([
            'P'=> '$ P $',
            
        ])->render();
        $fileName = Str::random(10);
        $basetmpfname = tempnam(storage_path('app/public'), $fileName);
        $tmpfname = preg_replace('/\\.[^.\\s]{3,4}$/', '', $basetmpfname);
        rename($basetmpfname, $tmpfname);
        $tmpDir = storage_path('app/public');
        chmod($tmpfname, 0755);

        File::put($tmpfname, $pdf);

        $program    = 'pdflatex';
        //$cmd        = [$program, '-output-directory', $tmpDir, $tmpfname];
        $string = "" . $program . " -output-directory " . $tmpDir . " " . $tmpfname;
        //$process    = new Process($cmd);

        shell_exec($string);
        sleep(5);
        $headers = [
            'Content-Type' => 'application/pdf',
        ];
        $file= $tmpfname.".pdf";
        return response()->download($file, 'proceso.pdf', $headers);
    }
}
