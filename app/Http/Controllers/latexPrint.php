<?php

namespace App\Http\Controllers;

use Ismaelw\LaraTeX\LaraTeX;
use App\Http\Controllers\Controller;
use Ismaelw\LaraTeX\LaratexException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Symfony\Component\Process\Process;

class latexPrint extends Controller
{


    public function engranajeConicoSI()
    {
        var_dump($_POST);

        /*    $pdf = (new LaraTeX('latex.tex'))->with([
            'Name' => 'John Doe',
            'Dob' => '01/01/1990',
            'SpecialCharacters' => '$ (a < b) $',
            'languages' => [
                'English',
                'Spanish',
                'Italian'
            ]
        ])->render();
        $fileName = Str::random(10);
        $basetmpfname = tempnam(storage_path('app/public'), $fileName);
        $tmpfname = preg_replace('/\\.[^.\\s]{3,4}$/', '', $basetmpfname);
        rename($basetmpfname, $tmpfname);
        $tmpDir = storage_path('app/public');
        chmod($tmpfname, 0755);

        File::put($tmpfname, $pdf);

        $program    = 'pdflatex';
        $cmd        = [$program, '-output-directory', $tmpDir, $tmpfname];
        $string = "" . $program . " -output-directory " . $tmpDir . " " . $tmpfname;
        $process    = new Process($cmd);

        shell_exec($string);
        sleep(5);
        $headers = [
            'Content-Type' => 'application/pdf',
        ];
        $file= $tmpfname.".pdf";
        return response()->download($file, 'proceso.pdf', $headers);*/
    }

    public function engranajeConicoingles()
    {

        $pdf = (new LaraTeX('latex.conicoIg'))->with([
            'P' => $_POST['P'],
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
}
