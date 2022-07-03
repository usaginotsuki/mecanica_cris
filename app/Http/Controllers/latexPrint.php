<?php

namespace App\Http\Controllers;

use Ismaelw\LaraTeX\LaraTeX;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;
use Ismaelw\LaraTeX\LaratexException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Symfony\Component\Process\Process;

class latexPrint extends Controller
{
    public function engranajeConicoIg()
    {


        $pdf = (new LaraTeX('latex.conicoIg'))->with([
            'P' => $this->check($_POST, 'P'),
            'Pd' => $this->check($_POST, 'Pd'),
            'Np' => $this->check($_POST, 'Np'),
            'RPMp' => $this->check($_POST, 'RPMp'),
            'RPMc' => $this->check($_POST, 'RPMc'),
            'Qv' => $this->check($_POST, 'Qv'),
            'Ns' => $this->check($_POST, 'Ns'),
            'HBp' => $this->check($_POST, 'HBp'),
            'HBg' => $this->check($_POST, 'HBg'),
            'dp' => $this->check($_POST, 'dp'),
            'anguloPP' => $this->check($_POST, 'anguloPP'),
            'anguloPC' => $this->check($_POST, 'anguloPC'),
            'V' => $this->check($_POST, 'V'),
            'Wt' => $this->check($_POST, 'Wt'),
            'Op' => $this->check($_POST, 'Op'),
            'Fn' => $this->check($_POST, 'Fn'),
            'Ko' => $this->check($_POST, 'Ko'),
            'Kv' => $this->check($_POST, 'Kv'),
            'Ks' => $this->check($_POST, 'Ks'),
            'Km' => $this->check($_POST, 'Km'),
            'Jp' => $this->check($_POST, 'Jp'),
            'OPP' => $this->check($_POST, 'OPP'),
            'opcionsat' => $this->check($_POST, 'opcionsat'),
            'SF' => $this->check($_POST, 'SF'),
            'KL' => $this->check($_POST, 'KL'),
            'KT' => $this->check($_POST, 'KT'),
            'KR' => $this->check($_POST, 'KR'),
            'Oc' => $this->check($_POST, 'Oc'),
            'Jc' => $this->check($_POST, 'Jc'),
            'OPC' => $this->check($_POST, 'OPC'),
            'opcionsatc' => $this->check($_POST, 'opcionsatc'),
            'SFP' => $this->check($_POST, 'SFP'),
            'SFC' => $this->check($_POST, 'SFC'),
            'EC' => $this->check($_POST, 'EC'),
            'CP' => $this->check($_POST, 'CP'),
            'I' => $this->check($_POST, 'I'),
            'Cs' => $this->check($_POST, 'Cs'),
            'Cxc' => $this->check($_POST, 'Cxc'),
            'SWCP' => $this->check($_POST, 'SWCP'),
            'opcionsac' => $this->check($_POST, 'opcionsac'),
            'CL' => $this->check($_POST, 'CL'),
            'CH' => $this->check($_POST, 'CH'),
            'CR' => $this->check($_POST, 'CR'),
            'SWCG' => $this->check($_POST, 'SWCG'),
            'opcionsacc' => $this->check($_POST, 'opcionsacc'),
            'SHP' => $this->check($_POST, 'SHP'),
            'SHC' => $this->check($_POST, 'SHC'),


        ])->render();

        $fileName = Str::random(10);
        $basetmpfname = tempnam(storage_path('app/public'), $fileName);
        $tmpfname = preg_replace('/\\.[^.\\s]{3,4}$/', '', $basetmpfname);
        rename($basetmpfname, $tmpfname);
        $tmpDir = storage_path('app/public');
        chmod($tmpfname, 0755);

        File::put($tmpfname, $pdf);

        $program    = 'pdflatex';

        $string = "" . $program . " -output-directory " . $tmpDir . " " . $tmpfname;
        shell_exec($string);
        sleep(3);
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        $file = $tmpfname . ".pdf";
        //var_dump($_POST);
        return response()->download($file, 'proceso.pdf', $headers);
    }
    public function engranajeRectoIg()
    {


        $pdf = (new LaraTeX('latex.rectoIg'))->with([
            'potencia' => $this->check($_POST, 'potencia'),
            'pd' => $this->check($_POST, 'pd'),
            'jc' => $this->check($_POST, 'jc'),
            'numpinon' => $this->check($_POST, 'numpinon'),
            'np' => $this->check($_POST, 'np'),
            'nc' => $this->check($_POST, 'nc'),
            'transmision' => $this->check($_POST, 'transmision'),
            'calidad' => $this->check($_POST, 'calidad'),
            'ns' => $this->check($_POST, 'ns'),
            'hbp' => $this->check($_POST, 'hbp'),
            'hbc' => $this->check($_POST, 'hbc'),
            'diametropinon' => $this->check($_POST, 'diametropinon'),
            'velocidad' => $this->check($_POST, 'velocidad'),
            'wt' => $this->check($_POST, 'wt'),
            'kv' => $this->check($_POST, 'kv'),
            'st' => $this->check($_POST, 'st'),
            'y' => $this->check($_POST, 'y'),
            'o' => $this->check($_POST, 'o'),
            'f' => $this->check($_POST, 'f'),
            'p' => $this->check($_POST, 'p'),
            'fn' => $this->check($_POST, 'fn'),
            'op' => $this->check($_POST, 'op'),
            'ko' => $this->check($_POST, 'ko'),
            'kv1' => $this->check($_POST, 'kv1'),
            'ks' => $this->check($_POST, 'ks'),
            'km' => $this->check($_POST, 'km'),
            'cmc' => $this->check($_POST, 'cmc'),
            'cpf' => $this->check($_POST, 'cpf'),
            'cpm' => $this->check($_POST, 'cpm'),
            'cma' => $this->check($_POST, 'cma'),
            'ce' => $this->check($_POST, 'ce'),
            'kb' => $this->check($_POST, 'kb'),
            'jp' => $this->check($_POST, 'jp'),
            'sfp' => $this->check($_POST, 'sfp'),
            'kr' => $this->check($_POST, 'kr'),
            'ynp' => $this->check($_POST, 'ynp'),
            'oc' => $this->check($_POST, 'oc'),
            'sfc' => $this->check($_POST, 'sfc'),
            'stc' => $this->check($_POST, 'stc'),
            'ync' => $this->check($_POST, 'ync'),
            'odp' => $this->check($_POST, 'odp'),
            'cp3' => $this->check($_POST, 'cp3'),
            'cf3' => $this->check($_POST, 'cf3'),
            'opcionfactorgeometrico' => $this->check($_POST, 'opcionfactorgeometrico'),
            'shp3' => $this->check($_POST, 'shp3'),
            'znc3' => $this->check($_POST, 'znc3'),
            'chp3' => $this->check($_POST, 'chp3'),
            'sc3' => $this->check($_POST, 'sc3'),
            'shc3' => $this->check($_POST, 'shc3'),
            'znc3' => $this->check($_POST, 'znc3'),
            'scc3' => $this->check($_POST, 'scc3'),
            'chc3' => $this->check($_POST, 'chc3'),
        ])->render();

        $fileName = Str::random(10);
        $basetmpfname = tempnam(storage_path('app/public'), $fileName);
        $tmpfname = preg_replace('/\\.[^.\\s]{3,4}$/', '', $basetmpfname);
        rename($basetmpfname, $tmpfname);
        $tmpDir = storage_path('app/public');
        chmod($tmpfname, 0755);

        File::put($tmpfname, $pdf);

        $program    = 'pdflatex';

        $string = "" . $program . " -output-directory " . $tmpDir . " " . $tmpfname;
        shell_exec($string);
        sleep(3);
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        $file = $tmpfname . ".pdf";
        return response()->download($file, 'proceso.pdf', $headers);
    }

    public function engranajeRectoSI()
    {


        $pdf = (new LaraTeX('latex.rectoSI'))->with([
            'numpinon' => $this->check($_POST, 'numpinon'),
            'P' => $this->check($_POST, 'P'),
            'modulo' => $this->check($_POST, 'modulo'),
            'np' => $this->check($_POST, 'np'),
            'rpmp' => $this->check($_POST, 'rpmp'),
            'rpmg' => $this->check($_POST, 'rpmg'),
            'i' => $this->check($_POST, 'i'),
            'qv' => $this->check($_POST, 'qv'),
            'ns' => $this->check($_POST, 'ns'),
            'hbp' => $this->check($_POST, 'hbp'),
            'hbg' => $this->check($_POST, 'hbg'),
            'dp' => $this->check($_POST, 'dp'),
            'v' => $this->check($_POST, 'v'),
            'pd' => $this->check($_POST, 'pd'),
            'nc' => $this->check($_POST, 'nc'),
            'transmision' => $this->check($_POST, 'transmision'),
            'calidad' => $this->check($_POST, 'calidad'),
            'potencia' =>  $this->check($_POST, 'potencia'),
            'wt' => $this->check($_POST, 'wt'),
            'kv' => $this->check($_POST, 'kv'),
            'st' => $this->check($_POST, 'st'),
            'y' => $this->check($_POST, 'y'),
            'o' => $this->check($_POST, 'o'),
            'f' => $this->check($_POST, 'f'),
            'fn' => $this->check($_POST, 'fn'),
            'op' => $this->check($_POST, 'op'),
            'ko' => $this->check($_POST, 'ko'),
            'kv1' => $this->check($_POST, 'kv1'),
            'ks' => $this->check($_POST, 'ks'),
            'km' => $this->check($_POST, 'km'),
            'cmc' => $this->check($_POST, 'cmc'),
            'cpf' => $this->check($_POST, 'cpf'),
            'cpm' => $this->check($_POST, 'cpm'),
            'cma' => $this->check($_POST, 'cma'),
            'ce' => $this->check($_POST, 'ce'),
            'kb' => $this->check($_POST, 'kb'),
            'jp' => $this->check($_POST, 'jp'),
            'sfp' => $this->check($_POST, 'sfp'),
            'kr' => $this->check($_POST, 'kr'),
            'ynp' => $this->check($_POST, 'ynp'),
            'og' => $this->check($_POST, 'og'),
            'jg' => $this->check($_POST, 'jg'),

            'sfg' => $this->check($_POST, 'sfg'),
            'kr' => $this->check($_POST, 'kr'),
            'yng' => $this->check($_POST, 'yng'),
            'opcionflexion3' => $this->check($_POST, 'opcionflexion3'),
            'ocp' => $this->check($_POST, 'ocp'),
            'ze' => $this->check($_POST, 'ze'),
            'zi' => $this->check($_POST, 'zi'),
            'shp' => $this->check($_POST, 'shp'),
            'znp' => $this->check($_POST, 'znp'),
            'scp' => $this->check($_POST, 'scp'),
            'shg' => $this->check($_POST, 'shg'),
            'zng' => $this->check($_POST, 'zng'),
            'scg' => $this->check($_POST, 'scg'),
            'chg' => $this->check($_POST, 'chg'),

        ])->render();


        $fileName = Str::random(10);
        $basetmpfname = tempnam(storage_path('app/public'), $fileName);
        $tmpfname = preg_replace('/\\.[^.\\s]{3,4}$/', '', $basetmpfname);
        rename($basetmpfname, $tmpfname);
        $tmpDir = storage_path('app/public');
        chmod($tmpfname, 0755);

        File::put($tmpfname, $pdf);

        $program    = 'pdflatex';

        $string = "" . $program . " -output-directory " . $tmpDir . " " . $tmpfname;
        shell_exec($string);
        sleep(3);
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        $file = $tmpfname . ".pdf";
        return response()->download($file, 'proceso.pdf', $headers);
        //return print_r($_POST);
    }


    public function engranajeConicoSI()
    {


        $pdf = (new LaraTeX('latex.conicoSI'))->with([
            'P' => $this->check($_POST, 'P'),
            'RPMp' => $this->check($_POST, 'RPMp'),
            'mG' => $this->check($_POST, 'mG'),
            'O' => $this->check($_POST, 'O'),
            'anguloN' => $this->check($_POST, 'anguloN'),
            'Ns' => $this->check($_POST, 'Ns'),
            'Np' => $this->check($_POST, 'Np'),
            'R' => $this->check($_POST, 'R'),
            'HBP' => $this->check($_POST, 'HBP'),
            'HBG' => $this->check($_POST, 'HBG'),
            'NL' => $this->check($_POST, 'NL'),
            'Qv' => $this->check($_POST, 'Qv'),
            'm' => $this->check($_POST, 'm'),
            'paso' => $this->check($_POST, 'paso'),
            'Dp' => $this->check($_POST, 'Dp'),
            'De' => $this->check($_POST, 'De'),
            'Vet' => $this->check($_POST, 'Vet'),
            'Ng' => $this->check($_POST, 'Ng'),
            'anguloY' => $this->check($_POST, 'anguloY'),
            'WT' => $this->check($_POST, 'WT'),
            'Vetmax' => $this->check($_POST, 'Vetmax'),
            'Ofp' => $this->check($_POST, 'Ofp'),
            'Ao' => $this->check($_POST, 'Ao'),
            'opcionanchocara' => $this->check($_POST, 'opcionanchocara'),
            'Ka' => $this->check($_POST, 'Ka'),
            'Kv' => $this->check($_POST, 'Kv'),
            'Yx' => $this->check($_POST, 'Yx'),
            'KHB' => $this->check($_POST, 'KHB'),
            'Kmb' => $this->check($_POST, 'Kmb'),
            'Ofpp' => $this->check($_POST, 'Ofpp'),
            'Ko' => $this->check($_POST, 'Ko'),
            'Yz' => $this->check($_POST, 'Yz'),
            'Sf' => $this->check($_POST, 'Sf'),
            'Ofg' => $this->check($_POST, 'Ofg'),
            'Yjg' => $this->check($_POST, 'Yjg'),
            'Ofgg' => $this->check($_POST, 'Ofgg'),
            'Flimg' => $this->check($_POST, 'Flimg'),
            'ZNTG' => $this->check($_POST, 'ZNTG'),
            'Ko' => $this->check($_POST, 'Ko'),
            'Yz' => $this->check($_POST, 'Yz'),
            'Sfg' => $this->check($_POST, 'Sfg'),
            'FH' => $this->check($_POST, 'FH'),
            'ZE' => $this->check($_POST, 'ZE'),
            'Yx' => $this->check($_POST, 'Yx'),
            'ZI' => $this->check($_POST, 'ZI'),
            'FHP' => $this->check($_POST, 'FHP'),
            'FHlimg' => $this->check($_POST, 'FHlimg'),
            'ZNTG' => $this->check($_POST, 'ZNTG'),
            'ZW' => $this->check($_POST, 'ZW'),
            'SH' => $this->check($_POST, 'SH'),
            'Sff' => $this->check($_POST, 'Sff'),
            'FHG' => $this->check($_POST, 'FHG'),
            'Flimg' => $this->check($_POST, 'Flimg'),
            'ZNT' => $this->check($_POST, 'ZNT'),
            'ZW' => $this->check($_POST, 'ZW'),
            'SH' => $this->check($_POST, 'SH'),
            'Ko' => $this->check($_POST, 'Ko'),
            'Sgg' => $this->check($_POST, 'Sgg'),


        ])->render();

        $fileName = Str::random(10);
        $basetmpfname = tempnam(storage_path('app/public'), $fileName);
        $tmpfname = preg_replace('/\\.[^.\\s]{3,4}$/', '', $basetmpfname);
        rename($basetmpfname, $tmpfname);
        $tmpDir = storage_path('app/public');
        chmod($tmpfname, 0755);

        File::put($tmpfname, $pdf);

        $program    = 'pdflatex';

        $string = "" . $program . " -output-directory " . $tmpDir . " " . $tmpfname;
        shell_exec($string);
        sleep(3);
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        $file = $tmpfname . ".pdf";
        return response()->download($file, 'proceso.pdf', $headers);
    }

    public function engranajeHelicoidalSI()
    {


        $pdf = (new LaraTeX('latex.helicoidalesSI'))->with([
            'P' => $this->check($_POST, 'P'),
            'Np' => $this->check($_POST, 'Np'),
            'Ng' => $this->check($_POST, 'Ng'),
            'Ns' => $this->check($_POST, 'Ns'),
            'HBp' => $this->check($_POST, 'HBp'),
            'HBg' => $this->check($_POST, 'HBg'),
            'Qv' => $this->check($_POST, 'Qv'),
            'dp' => $this->check($_POST, 'dp'),

        ])->render();

        $fileName = Str::random(10);
        $basetmpfname = tempnam(storage_path('app/public'), $fileName);
        $tmpfname = preg_replace('/\\.[^.\\s]{3,4}$/', '', $basetmpfname);
        rename($basetmpfname, $tmpfname);
        $tmpDir = storage_path('app/public');
        chmod($tmpfname, 0755);

        File::put($tmpfname, $pdf);

        $program    = 'pdflatex';

        $string = "" . $program . " -output-directory " . $tmpDir . " " . $tmpfname;
        shell_exec($string);
        sleep(3);
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        $file = $tmpfname . ".pdf";
        return response()->download($file, 'proceso.pdf', $headers);
    }

    public function engranajeHelicoidalIg()
    {


        $pdf = (new LaraTeX('latex.helicoidalesIg'))->with([
            'potencia' => $this->check($_POST, 'potencia'),
            'pn' => $this->check($_POST, 'pn'),
            'np' => $this->check($_POST, 'np'),
            'angulon' => $this->check($_POST, 'angulon'),
            'anguloy' => $this->check($_POST, 'anguloy'),
            'rpmp' => $this->check($_POST, 'rpmp'),
            'rpmc' => $this->check($_POST, 'rpmc'),
            'i' => $this->check($_POST, 'i'),
            'f' => $this->check($_POST, 'f'),
            'ns' => $this->check($_POST, 'ns'),
            'hbp' => $this->check($_POST, 'hbp'),
            'hbc' => $this->check($_POST, 'hbc'),
            'pt' => $this->check($_POST, 'pt'),
            'dp' => $this->check($_POST, 'dp'),
            'v' => $this->check($_POST, 'v'),
            'wt' => $this->check($_POST, 'wt'),
            'op' => $this->check($_POST, 'op'),
            'ko' => $this->check($_POST, 'ko'),
            'kv1' => $this->check($_POST, 'kv1'),
            'interpolar' => $this->check($_POST, 'interpolar'),
            'ks' => $this->check($_POST, 'ks'),
            'km' => $this->check($_POST, 'km'),
            'cmc' => $this->check($_POST, 'cmc'),
            'cpf' => $this->check($_POST, 'cpf'),
            'cpm' => $this->check($_POST, 'cpm'),
            'cma' => $this->check($_POST, 'cma'),
            'ce' => $this->check($_POST, 'ce'),
            'kb' => $this->check($_POST, 'kb'),
            'jp' => $this->check($_POST, 'jp'),
            'sfp' => $this->check($_POST, 'sfp'),
            'kr' => $this->check($_POST, 'kr'),
            'ynp' => $this->check($_POST, 'ynp'),
            'opcionflexion' => $this->check($_POST, 'opcionflexion'),
            'oc' => $this->check($_POST, 'oc'),
            'jc' => $this->check($_POST, 'jc'),
            'sfc' => $this->check($_POST, 'sfc'),
            'kr' => $this->check($_POST, 'kr'),
            'ync' => $this->check($_POST, 'ync'),
            'opcionflexionpinona' => $this->check($_POST, 'opcionflexionpinona'),
            'odp' => $this->check($_POST, 'odp'),
            'cp3' => $this->check($_POST, 'cp3'),
            'cf3' => $this->check($_POST, 'cf3'),
            'i3' => $this->check($_POST, 'i3'),
            'angulot' => $this->check($_POST, 'angulot'),
            'rp' => $this->check($_POST, 'rp'),
            'rg' => $this->check($_POST, 'rg'),
            'rbp' => $this->check($_POST, 'rbp'),
            'rbg' => $this->check($_POST, 'rbg'),
            'a' => $this->check($_POST, 'a'),
            'shp3' => $this->check($_POST, 'shp3'),
            'zn3' => $this->check($_POST, 'zn3'),
            'sc3' => $this->check($_POST, 'sc3'),
            'shc3' => $this->check($_POST, 'shc3'),
            'znc3' => $this->check($_POST, 'znc3'),
            'scc3' => $this->check($_POST, 'scc3'),
            'chc3' => $this->check($_POST, 'chc3'),


        ])->render();

        $fileName = Str::random(10);
        $basetmpfname = tempnam(storage_path('app/public'), $fileName);
        $tmpfname = preg_replace('/\\.[^.\\s]{3,4}$/', '', $basetmpfname);
        rename($basetmpfname, $tmpfname);
        $tmpDir = storage_path('app/public');
        chmod($tmpfname, 0755);

        File::put($tmpfname, $pdf);

        $program    = 'pdflatex';

        $string = "" . $program . " -output-directory " . $tmpDir . " " . $tmpfname;
        shell_exec($string);
        sleep(3);
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        $file = $tmpfname . ".pdf";
        //return response()->download($file, 'proceso.pdf', $headers);
        return var_dump($_POST);
    }

    public function check($req, $data)
    {
        if (isset($req[$data])) {
            return $req[$data];
        } else {
            return "";
        }
    }
}
