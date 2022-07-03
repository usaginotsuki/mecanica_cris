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
            'Np' => $this->check($_POST, 'Np'),
            'Ng' => $this->check($_POST, 'Ng'),
            'Ns' => $this->check($_POST, 'Ns'),
            'HBp' => $this->check($_POST, 'HBp'),
            'HBg' => $this->check($_POST, 'HBg'),
            'Qv' => $this->check($_POST, 'Qv'),
            'dp' => $this->check($_POST, 'dp'),
            'v' => $this->check($_POST, 'v'),
            'wt' => $this->check($_POST, 'wt'),
            'kv' => $this->check($_POST, 'kv'),
            'st' => $this->check($_POST, 'st'),
            'y' => $this->check($_POST, 'y'),
            'o' => $this->check($_POST, 'o'),
            'f' => $this->check($_POST, 'f'),
            'fn' => $this->check($_POST, 'fn'),
            'ko' => $this->check($_POST, 'ko'),
            'kv1' => $this->check($_POST, 'kv1'),
            'ks' => $this->check($_POST, 'ks'),
            'cmc' => $this->check($_POST, 'cmc'),
            'cpf' => $this->check($_POST, 'cpf'),
            'cpm' => $this->check($_POST, 'cpm'),
            'cma' => $this->check($_POST, 'cma'),

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
    public function engranajeRectoIg()
    {
       

        $pdf = (new LaraTeX('latex.rectoIg'))->with([
            'P' => $this->check($_POST, 'P'),
            'Np' => $this->check($_POST, 'Np'),
            'Ng' => $this->check($_POST, 'Ng'),
            'Ns' => $this->check($_POST, 'Ns'),
            'HBp' => $this->check($_POST, 'HBp'),
            'HBg' => $this->check($_POST, 'HBg'),
            'Qv' => $this->check($_POST, 'Qv'),
            'dp' => $this->check($_POST, 'dp'),
            'potencia' =>  $this->check($_POST, 'potencia'),

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

    public function check($req, $data){
        if (isset($req[$data])) {
            return $req[$data];
        }
        else {
            return "";
        }

    }
}
