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
       

        $pdf = (new LaraTeX('latex.rectoSI'))->with([
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

    public function engranajeRectoSI()
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

    public function check($req, $data){
        if (isset($req[$data])) {
            return $req[$data];
        }
        else {
            return "";
        }

    }
}
