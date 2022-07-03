<div class="p-6 h-auto bg-white rounded-lg text-neutral-600">
    <div class="flex justify-center text-gray-800 uppercase font-bold">
        Engranajes Helicoidales (Ingles)
    </div>
    <input class="ml-16 px-3 py-3 rounded-full bg-blue-600 hover:bg-blue-800 cursor-pointer text-white" type="button" value="Imprimir" onclick="javascript:window.print()" />
    <hr>
    <form action="{{url('pdf-helicoidal-ingles')}}" method="POST" target="_blank">
        @csrf
        <input type="submit">
    <div>
        <div class="flex mt-3">
            <main class="w-3/4 grid grid-cols-4 text-sm gap-y-1">
                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">PARAMETROS DE DISEÑO</div>
                {{-- ------------------------------------ --}}
                {{-- PRIMERA ITERACION DE TODO EL PROCESO --}}
                {{-- ------------------------------------ --}}

                {{-- Calidad para engranajes Qv --}}
                    <div class="flex flex-col items-center">
                            <label for="">Calidad del engranaje <b>(Qv)</b></label>
                            <select class="mb-2 block w-36 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="qv" wire:model="qv">
                                    <option class="text-gray-400" value="0">Seleccionar</option>
                                    <option value="5">Qv = 5</option>
                                    <option value="6">Qv = 6</option>
                                    <option value="7">Qv = 7</option>
                                    <option value="8">Qv = 8</option>
                                    <option value="9">Qv = 9</option>
                                    <option value="10">Qv = 10</option>
                                    <option value="11">Qv = 11</option>
                            </select>
                    </div>
                {{-- Potencia a Transmitir KW --}}
                    <div class="flex flex-col items-center">
                        <label for="">Potencia a Transmitir <b>(HP)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="potencia" wire:model="potencia">
                    </div>
                {{-- GRADOS DEL Diente del piñon NP --}}
                    <div class="flex flex-col items-center">
                        <label for="">Grados  del Diente del piñon <b>(Np)</b></label>
                            <select class="mb-2 block w-36 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="grados" wire:model="grados">
                                    <option class="text-gray-400" value="0">Seleccionar el grado</option>
                                    <option value="0.25">14.5 grados (Compuesto)</option>
                                    <option value="0.25">14.5 grados (Profundidad completa)</option>
                                    <option value="0.349">20 grados (Profundidad completa)</option>
                                    <option value="0.349">20 grados (Talon Involuto)</option>
                            </select>
                    </div>
                {{-- # DE DienteS del piñon NP  --}}
                    <div class="flex flex-col items-center">
                        <x-jet-label for="text" value="" />
                        <label for=""># Dientes del Piñon<b>(Np)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="np" wire:model="np">
                    </div> 
                {{-- Dureza-Brinell Piñon HBp --}}
                    <div class="flex flex-col items-center">
                        <x-jet-label for="text" value="" />
                        <label for="">Dureza-Brinell Piñon<b>(HBp)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="hbp" wire:model="hbp">
                    </div> 
                {{-- Dureza-Brinell Corona HBc --}}
                    <div class="flex flex-col items-center">
                        <x-jet-label for="text" value="" />
                        <label for="">Dureza-Brinell Corona<b>(HBc)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="hbc" wire:model="hbc">
                    </div> 
                {{-- PASO NORMAL --}}
                    <div class="flex flex-col items-center">
                        <label for="">Paso Normal <b>(Pn)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="pn" wire:model="pn">
                    </div>
                {{-- ANGULO NORMAL DE PRESION --}}
                    <div class="flex flex-col items-center">
                        <label for="">Angulo Normal <b> (Presion)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="angulon" wire:model="angulon">
                    </div>
                {{-- ANGULO DE HELICE --}}
                    <div class="flex flex-col items-center">
                        <label for="">Angulo de Helice <b></b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="anguloy" wire:model="anguloy">
                    </div>
                    @php
                        if ($angulon && $anguloy) {
                            $angulon = ($angulon * pi())/180;
                            $anguloy = ($anguloy * pi())/180;
                        }
                    @endphp
                {{-- REALCION DE TRANSMISION i = MG --}}
                    <div class="flex flex-col items-center">
                        <label for="">Relacion de Transmision <b>(i)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="i" wire:model="i">
                    </div> 
                {{-- FACTOR MINIMO DE SEGURIDAD NS --}} 
                    <div class="flex flex-col items-center">
                        <label for="">Fact. Minimo Seguridad <b>(Ns)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ns" wire:model="ns">
                    </div> 
                {{-- ANCHO DE CARA F --}}
                    <div class="flex flex-col items-center">
                        <label for="">Ancho de cara <b> (F)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="f" wire:model="f">
                    </div>                
                {{-- RPM DEL PIÑON NP --}}
                    <div class="flex flex-col items-center">
                        <x-jet-label for="text" value="" />
                        <label for="">RPM Piñon<b>(np)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="rpmp" wire:model="rpmp">
                    </div> 
                {{-- RPM DE LA CORONA NC --}}
                    <div class="flex flex-col items-center">
                        <x-jet-label for="text" value="" />
                        <label for="">RPM Corona<b>(nc)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="rpmc" wire:model="rpmc">
                    </div> 

                    <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">DISEÑO APLICANDO AGMA 2001-D04 FLEXION (PIÑON)</div>

                
                {{-- PASO DIAMETRAL TRANSVERSAL --}}
                    <div class="flex flex-col items-center">
                        <label for="">Paso Diametral (Transversal) <b>(Pt)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="pt" wire:model="pt">
                            @php
                            if ($pn && $anguloy) {
                                $pt = $pn * cos($anguloy);
                            }
                            @endphp
                            {{number_format($pt,2)}}
                        </span>
                    </div>
                {{-- DIAMETRO DE PASO O DIAMETRO DEL PIÑON--}}
                    <div class="flex flex-col items-center">
                        <label for="">Diametro de Paso <b>(Dp)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="dp" wire:model="dp">
                            @php
                            if ($pn && $pt) {
                                $dp = $np / $pt;
                            }
                            @endphp
                            {{number_format($dp,2)}}
                        </span>
                    </div>
                {{-- VELOCIDAD --}}
                    <div class="flex flex-col items-center">
                        <label for="">Velocidad <b>(V)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="v" wire:model="v">
                            @php
                            if ($dp && $rpmp) {
                                $v = (pi()*$dp*$rpmp)/12;
                            }
                            @endphp
                            {{number_format($v,2)}}
                        </span>
                    </div>
                {{-- CALCULO DE CARGA DE TRABAJO --}}
                    <div class="flex flex-col items-center">
                        <label for="">Carga de Trabajo <b>(Wt)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="wt" wire:model="wt">
                            @php
                            if ($v) {
                                $wt = (33000 * $potencia)/$v;
                            }
                            @endphp
                            {{number_format($wt,2)}}
                        </span>
                    </div>
                {{-- KO --}}
                    <div class="flex flex-col items-center">
                        <label for="">Ko <b>(Ko)</b></label>
                        <div class="flex">
                            <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ko" wire:model="ko">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div>
                    </div>
                {{-- CALCULO DE KV --}}
                    @php
                        if ($qv && $v) {
                            $bb = 0.25 * (pow((12 - $qv), (2/3) ));
                            $aa = (50 + (56*(1-$bb)) );
                            $kv = pow((($aa + sqrt($v))/$aa),$bb);
                        }
                    @endphp
                {{-- KV  --}}
                    <div class="flex flex-col items-center">
                        <label for="">Kv<b>(kv)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="kv1" wire:model="kv1">
                            {{number_format($kv,2)}}
                        </span>
                    </div>
                {{-- INTERPOLACION FACTOR DE LEWIS --}}
                    <div class="flex flex-col">
                        <label for="">Interpolacion para Lewis <b>(Y)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="interpolar" name="interpolar" type="radio" value="1"/>
                            <label for="">Interpolar</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="interpolar" name="interpolar" type="radio" value="2"/>
                            <label for="">No Interpolar</label>
                        </div>
                        @php
                        $opcion = 0;
                            if ($interpolar==1) {
                                $opcion = 1;
                            }elseif ($interpolar==2){
                                $opcion = 2; 
                            }else
                        @endphp
                    </div>
                {{-- FACTOR DE LEWIS Y--}}
                    @if ($opcion == 2)
                        <div class="flex flex-col items-center">
                            <label for="">Factor de Lewis <b>(Y)</b></label>
                            <div class="flex">
                                <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="y" wire:model="y">
                                <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                    <i class="text-3xl  fa-solid fa-image"></i>
                                </a>
                            </div>
                        </div>
                    @elseif($opcion == 1)
                {{-- INTERPOLACION PARA ELFACTOR DE LEWIS Y --}}
                            <div class="flex flex-col items-center">
                                <label for="">Interpolacion <b>(Y1)</b></label>
                                <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="y1" wire:model="y1">
                            </div>
                            <div class="flex flex-col items-center">
                                <label for="">Interpolacion <b>(Y2)</b></label>
                                <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="y2" wire:model="y2">
                            </div>
                            <div class="flex flex-col items-center">
                                <label for="">Interpolacion <b>(X1)</b></label>
                                <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="x1" wire:model="x1">
                            </div>
                            <div class="flex flex-col items-center">
                                <label for="">Interpolacion <b>(X2)</b></label>
                                <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="x2" wire:model="x2">
                            </div>
                            <div class="flex flex-col items-center">
                                <label for="">Interpolacion <b>(X)</b></label>
                                <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="x" wire:model="x">
                            </div>
                            @php
                                if ($y1 && $y2 && $x1 && $x2 && $x) {
                                    if (($x2-$x1)>0) {
                                        $y = ($y1) + (($y2 - $y1)/($x2 - $x1)) * ($x - $x1);
                                    }else {
                                        echo '<script>alert ("El valor de X2 debe ser mayor que X1");</script>';
                                        $y =0;
                                    }
                                }
                            @endphp
                {{-- FACTOR DE LEWIS Y --}}
                            <div class="flex flex-col items-center">
                                <label for="">Factor de Lewis <b>(Y)</b></label>
                                <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                                    @if ($y)
                                        {{$y}}
                                    @endif
                                </span>
                            </div>
                    @endif
                {{-- CALCULO DE KS --}}
                    @php
                        if ($f && $y && $pn) {
                            $ks = 1.192 * pow((($f*sqrt($y))/$pn) , 0.0535);
                        }
                    @endphp
                {{-- KS --}}
                    <div class="flex flex-col items-center">
                        <label for="">Ks <b>(Ks)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ks" wire:model="ks">
                            {{number_format($ks,2)}}
                        </span>    
                    </div>
                {{-- CMC --}}
                    <div class="flex flex-col">
                        <label for="">Cmc <b>(Cmc)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="cmc" name="cmc" type="radio" value="0.8"/>
                            <label for="">Dientes Coronados</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="cmc" name="cmc" type="radio" value="1"/>
                            <label for="">Dientes Sin Coronar</label>
                        </div>
                    </div>
                {{-- CPF --}}
                    <div class="flex flex-col items-center">
                        <label for="">Cpf <b>(Cpf)</b></label>
                        @php
                            if ($f && $dp) {
                                if ($f <= 1) {
                                if ((($f)/(10*$dp)) >= 0.05) {
                                    $cpf = (($f)/(10*$dp)) - 0.025;
                                }elseif ((($f)/(10*$dp)) < 0.05) {
                                    $cpf = 0.05 - 0.025;
                                }
                                }elseif ((1 < $f) && ($f <= 17)) {
                                    if ((($f)/(10*$dp)) >= 0.05) {
                                        $cpf = (($f)/(10*$dp)) - 0.0375 + (0.0125 * $f);
                                    }elseif ((($f)/(10*$dp)) < 0.05) {
                                        $cpf = 0.05 - 0.0375 + (0.0125 * $f);
                                    }
                                }elseif ((17 < $f) && ($f <= 40)) {
                                    if ((($f)/(10*$dp)) >= 0.05) {
                                        $cpf = (($f)/(10*$dp)) - 0.1109 + (0.0207 * $f) - (0.000228 * pow($f,2));
                                    }elseif ((($f)/(10*$dp)) < 0.05) {
                                        $cpf = 0.05 - 0.1109 + (0.0207 * $f) - (0.000228 * pow($f,2));
                                    }
                                }
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="cpf" wire:model="cpf">
                            {{number_format($cpf,3)}}
                        </span>
                    </div>
                {{-- CPM --}}
                    <div class="flex flex-col">
                        <label for="">Cpm <b>(Cpm)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="cpm" name="cpm" type="radio" value="1"/>
                            <label for="">Piñon montado separado (S1/S)< 0.175 </label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="cpm" name="cpm" type="radio" value="1.1"/>
                            <label for="">Piñon montado separado (S1/S)>=0.175</label>
                        </div>
                    </div>
                {{-- CMA A --}}
                    <div class="flex flex-col items-center">
                        <label for="">Cma <b>(A)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="a1" wire:model="a1">
                    </div>
                {{-- CMA B --}}
                    <div class="flex flex-col items-center">
                        <label for="">Cma <b>(B)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="b1" wire:model="b1">
                    </div>
                {{-- CMA C --}}
                    <div class="flex flex-col items-center">
                        <label for="">Cma <b>(C)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="c1" wire:model="c1">
                    </div>
                {{-- CALCULO Y RESULTADO CMA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Cma <b>(Cma)</b></label>
                        <div class="flex">
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="cma" wire:model="cma">
                                @php
                                    if ($a1 && $b1 && $c1 && $f) {
                                        $cma = $a1 + ($b1 * $f) + ($c1 * (pow($f,2)));
                                    }
                                @endphp
                                {{number_format($cma,3)}}
                            </span>  
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a> 
                        </div> 
                    </div>
                {{-- CE --}}
                    <div class="flex flex-col">
                        <label for="">Ce <b>(Ce)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="ce" name="ce" type="radio" value="0.8"/>
                            <label for="">Engranajes lapeados </label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="ce" name="ce" type="radio" value="1"/>
                            <label for="">Otras condiciones</label>
                        </div>
                    </div>
                {{-- CALCULO DE KM --}}
                    @php
                        if ($cmc && $cpf && $cpm && $cma && $ce) {
                            $km = 1 + $cmc * (($cpf * $cpm) + ($cma* $ce));
                        }
                    @endphp
                {{-- KM --}}
                    <div class="flex flex-col items-center">
                        <label for="">Km <b>(Km)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="km" wire:model="km">
                            {{number_format($km,2)}}
                        </span>
                    </div>
                {{-- MB --}}
                    <div class="flex flex-col items-center">
                        <label for="">Mb <b>(Mb)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="mb" wire:model="mb">
                    </div>
                {{-- KB --}}
                    <div class="flex flex-col items-center">
                        <label for="">Kb <b>(Kb)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="kb" wire:model="kb">
                            @php
                                if ($mb && ($mb<1.2)) {
                                    $kb = 1.6*log(2.242/$mb);
                                }elseif ($mb && ($mb>=1.2)) {
                                    $kb = 1;
                                }
                            @endphp
                            {{number_format($kb,2)}}
                        </span>
                    </div>
                {{-- Jp --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Geometrico Piñon <b>(Jp)</b></label>
                        <div class="flex">
                            <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="jp" wire:model="jp">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div> 
                    </div>
                {{-- SEGUNDA ITERACCION OP --}}
                    <div class="flex flex-col items-center">
                        <label for="">Segunda Iteracion Sigma P<b>(Op)</b></label>
                        <div class="flex">
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="op" wire:model="op">
                                @php
                                    if ($wt && $ko && $kv && $ks && $pt && $f && $km && $kb && $jp) {
                                    $op = ($wt) * ($ko) * ($kv) * ($ks) * ($pt/$f) * (($km * $kb)/$jp);
                                    }
                                @endphp
                                {{number_format($op,2)}}
                            </span>  
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a> 
                        </div> 
                    </div>
                {{--RESITENCIA A LA FLEXION ST --}}
                    <div class="flex flex-col col-span-2">
                        <label for="">Resistencia a la Flexion (Piñon) <b>(St)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionflexion" name="opcionflexion" type="radio" value="1"/>
                            <label for="">Aceros completamente endurecidos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionflexion" name="opcionflexion" type="radio" value="2"/>
                            <label for="">Aceros nitrurados completamente endurecidos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionflexion" name="opcionflexion" type="radio" value="3"/>
                            <label for="">Acero nitrurado</label>
                        </div>
                        @php
                            if ($opcionflexion==1) {
                                $st = (77.3 * $hbp) + 12800;
                            }elseif ($opcionflexion==2){
                                $st = (83.3 * $hbp) + 12150;
                            }elseif ($opcionflexion==3){
                                $st = (86.2 * $hbp) + 12730;
                            }
                        @endphp
                    </div>
                {{-- ST --}}
                    <div class="flex flex-col items-center">
                        <label for="">Resistencia a la Flexion <b>(St)</b></label>
                        <div class="flex">
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="st" wire:model="st">
                                {{number_format($st,2)}}
                            </span>
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div>
                    </div> 
                {{-- CALCULO DEL FACTOR DE SEGURIDAD YNP --}}
                    <div class="flex flex-col items-center">
                        <label for="">YNP <b>(Ynp)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ynp" wire:model="ynp">
                    </div>
                {{-- KT --}}
                    <div class="flex flex-col items-center">
                        <label for="">KT <b>(Kt)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="kt" wire:model="kt">
                    </div>
                {{-- KR --}}
                    <div class="flex flex-col items-center">
                        <label for="">KR <b>(Kr)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="kr" wire:model="kr">
                    </div>

                {{-- SFP --}}
                    <div class="flex flex-col items-center">
                        <label for="">Calculo del Factor de Seguridad<b>(Sfp)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="sfp" wire:model="sfp">
                            @php
                                if ($st && $op && $kt && $kr && $ynp) {
                                    $sfp = ($st * $ynp) / ($op * $kt * $kr);
                                }
                            @endphp
                            {{number_format($sfp,2)}}
                        </span>
                    </div>   
                
                    <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">DISEÑO APLICANDO AGMA 2001-D04 FLEXION (CORONA)</div>

                    
                {{-- FACTOR GEOMETRICO DE LA CORONA JC --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Geometrico Corona<b>(Jc)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="jc" wire:model="jc">
                    </div>
                {{-- ESFUERZO DE LA CORONA OC --}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de la corona<b>(Oc)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="oc" wire:model="oc">
                            @php
                                if ($op && $jc && $jp) {
                                    $oc = ($op/$jc)*$jp;
                                }
                            @endphp
                            {{number_format($oc,3)}}
                        </span>
                    </div>
                {{-- RESISTENCIA A LA FLEXION DE LA CORONA --}}
                    <div class="flex flex-col col-span-2">
                        <label for="">Resistencia a la Flexion (Corona) <b>(Stc)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionflexionpinona" name="opcionflexionpinona" type="radio" value="1"/>
                            <label for="">Aceros completamente endurecidos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionflexionpinona" name="opcionflexionpinona" type="radio" value="2"/>
                            <label for="">Aceros nitrurados completamente endurecidos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionflexionpinona" name="opcionflexionpinona" type="radio" value="3"/>
                            <label for="">Acero nitrurado</label>
                        </div>
                        @php
                            if ($opcionflexionpinona==1) {
                                $stc = (77.3 * $hbc) + 12800;
                            }elseif ($opcionflexionpinona==2){
                                $stc = (83.3 * $hbc) + 12150;
                            }elseif ($opcionflexionpinona==3){
                                $stc = (86.2 * $hbc) + 12730;
                            }
                        @endphp
                    </div>
                {{-- RESISTENCIA A LA FLEXION DEL CORONA STC --}}
                    <div class="flex flex-col items-center">
                        <label for="">Resistencia a la Flexion (Corona)<b>(Stc)</b></label>
                        <div class="flex">
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="stc" wire:model="stc">
                                {{number_format($stc,3)}}
                            </span>
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div>
                    </div>
                {{-- YNC PARA LA CORONA --}}
                    <div class="flex flex-col items-center">
                        <label for="">YNC <b>(Ync)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ync" wire:model="ync">
                    </div>
                {{-- FACTOR DE SEGURIDAD DE LA CORONA SFC --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de seguridad de la corona<b>(Sfc)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="sfc" wire:model="sfc">
                            @php
                                if ($stc && $ync && $oc && $kt && $kr) {
                                    $sfc = ($stc * $ync) / ($oc * $kt * $kr);
                                }
                            @endphp
                            {{number_format($sfc,3)}}
                        </span>
                    </div>

                    <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">DISEÑO APLICANDO AGMA 2001-D04 DESGASTE SUPERFICIAL</div>

                {{-- SECCION ULTIMA --}}    
                {{-- RP --}}
                    <div class="flex flex-col items-center">
                        <label for="">Rp <b>(Rp)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="rp" wire:model="rp">
                            @php
                                if ($dp) {
                                    $rp = $dp/2;
                                }
                            @endphp
                            {{number_format($rp,2)}}
                        </span>
                    </div>
                {{-- DG --}}
                    <div class="flex flex-col items-center">
                        <label for="">Dg <b>(Dg)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="dg" wire:model="dg">
                            @php
                                if ($dp && $i) {
                                    $dg = $i * $dp;
                                }
                            @endphp
                            {{number_format($dg,2)}}
                        </span>
                    </div>
                {{-- RG --}}
                    <div class="flex flex-col items-center">
                        <label for="">Rg <b>(Rg)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="rg" wire:model="rg">
                            @php
                                if ($dg) {
                                    $rg = $dg/2;
                                }
                            @endphp
                            {{number_format($rg,2)}}
                        </span>
                    </div>
                {{-- AnguloT --}}
                    <div class="flex flex-col items-center">
                        <label for="">Angulo de Presion Transversal <b>(Ot)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="angulot" wire:model="angulot">
                            @php
                            $angulo = 0;
                                if ($dg && $angulon && $anguloy) {

                                    $angulot = (atan((tan($angulon)/cos($anguloy))));

                                    $angulo = ($angulot * 180)/pi();
                                }
                            @endphp
                            {{number_format($angulo,2)}}
                        </span>
                    </div>
                {{-- RBP --}}
                    <div class="flex flex-col items-center">
                        <label for="">RBP <b>(RBp)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="rbp" wire:model="rbp">
                            @php
                                if ($rp && $angulot) {
                                    $rbp = $rp * cos($angulot);
                                }
                            @endphp
                            {{number_format($rbp,2)}}
                        </span>
                    </div>
                {{-- RBP --}}
                    <div class="flex flex-col items-center">
                        <label for="">RBG <b>(RBg)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="rbg" wire:model="rbg">
                            @php
                                if ($rg && $angulot) {
                                    $rbg = $rg * cos($angulot);
                                }
                            @endphp
                            {{number_format($rbg,2)}}
                        </span>
                    </div>
                {{-- A --}}
                    <div class="flex flex-col items-center">
                        <label for="">A <b>(a)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="a" wire:model="a">
                            @php
                                if ($pn) {
                                    $a = 1 / $pn;
                                }
                            @endphp
                            {{number_format($a,2)}}
                        </span>
                    </div>
                {{-- CP PARA EL PINON --}}
                    <div class="flex flex-col items-center">
                        <label for="">CP <b>(Cp)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="cp3" wire:model="cp3">
                    </div>
                {{-- CF PARA EL PINON --}}
                    <div class="flex flex-col items-center">
                        <label for="">Cf <b>(Cf)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="cf3" wire:model="cf3">
                    </div>
                {{-- FACTOR GEOMETRICO I --}}
                    <div class="flex flex-col">
                        <label for="">Factor geometrico I <b>(I)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionfactorgeometrico" name="opcionfactorgeometrico" type="radio" value="1"/>
                            <label for="">Engranajes Externos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionfactorgeometrico" name="opcionfactorgeometrico" type="radio" value="2"/>
                            <label for="">Engranajes Internos</label>
                        </div>
                    </div>
                {{-- CALCULO FACTOR GEOMETRICO --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Geometrico I <b> (I)</b></label>
                        @php
                            $mn = 0;
                            $pnn = 0;

                            $variable1 =0;
                            $variable2 =0;
                            $variable3 =0;

                            //VALOR DE Z
                            if ($rp && $a && $rbp && $rg && $rbg && $angulot) {
                                
                                $variable1 = pow((pow(($rp + $a),2) - pow($rbp,2)),(1/2));
                                $variable2 = pow((pow(($rg + $a),2) - pow($rbg,2)),(1/2));
                                $variable3 = (($rp + $rg) * sin($angulot));

                                if ($variable1 > $variable3) {
                                    $variable1 = $variable3;
                                }elseif ($variable2 > $variable3) {
                                    $variable2 = $variable3;
                                }

                                $z = $variable1 + $variable2 - $variable3;
                            }
                            //PN
                            if ($pn && $angulon) {
                                $pnn = (pi()/$pn) * cos($angulon);
                            }
                            //mN
                            if ($pnn && $z) {
                                $mn = $pnn / (0.95 * $z);
                            }

                            if ($opcionfactorgeometrico==1 && $angulot && $i) {
                                $i3 = ((cos($angulot)*sin($angulot))/(2*$mn)) * ($i/($i+1));
                            }elseif ($opcionfactorgeometrico==2 && $angulot && $i){
                                $i3 = ((cos($angulot)*sin($angulot))/(2*$mn)) * ($i/($i-1));
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="i3" wire:model="i3">
                            {{number_format($i3,2)}}
                        </span>
                    </div>
                {{-- ESFUERZO DE CONTACTO DEL PIÑON ODP --}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de contacto del piñon <b> (Odp)</b></label>
                        @php
                            if ($cp3 && $wt && $ko && $kv && $ks && $km && $dp && $f && $cf3 && $i3) {
                                $odp = $cp3 * (pow(($wt * $ko * $kv * $ks * ($km/($dp * $f)) * ($cf3/$i3)),(1/2)));
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="odp" wire:model="odp">
                            {{number_format($odp,2)}}
                        </span>
                    </div>
                {{-- NUMERO DE ESFUERZO DE CONTACTO PERMISIBLE Sc --}}
                    <div class="flex flex-col items-center">
                        <label for="">Resistencia a la corona (HBP)<b> (Scp)</b></label>
                        @php
                            if ($hbp) {
                                $sc3 = (322 * $hbp) + 29100;
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="sc3" wire:model="$sc3">
                            {{number_format($sc3,2)}}
                        </span>
                    </div>
                {{-- CHP PARA EL PINON --}}
                    <div class="flex flex-col items-center">
                        <label for="">CHP <b>(Chp)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="chp3" wire:model="chp3">
                    </div>
                {{-- ZN PARA EL PINON --}}
                    <div class="flex flex-col items-center">
                        <label for="">ZN PIÑON<b>(Zn)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="zn3" wire:model="zn3">
                    </div>
                {{-- CALCULO PORA EL SH DEL PIÑON --}}
                    <div class="flex flex-col items-center">
                        <label for="">SHP <b> (SHp)</b></label>
                        @php
                            if ($sc3 && $zn3 && $chp3 && $odp && $kt && $kr) {
                                $shp3 = ($sc3 * $zn3 * $chp3)/($odp * $kt * $kr);
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="shp3" wire:model="shp3">
                            {{number_format($shp3,2)}}
                        </span>
                    </div>
                {{-- NUMERO DE ESFUERZO DE CONTACTO PERMISIBLE de la corona Sc --}}
                    <div class="flex flex-col items-center">
                        <label for="">Resistencia a la corona (HBC)<b> (Scc)</b></label>
                        @php
                            if ($hbc) {
                                $scc3 = (322 * $hbc) + 29100;
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="scc3" wire:model="scc3">
                            {{number_format($scc3,2)}}
                        </span>
                    </div>
                {{-- ZN PARA LA CORONA --}}
                    <div class="flex flex-col items-center">
                        <label for="">ZN CORONA<b>(Zn)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="znc3" wire:model="znc3">
                    </div>
                {{-- CHC PARA EL CORONA --}}
                    <div class="flex flex-col items-center">
                        <label for="">CHC <b>(Chc)</b></label>
                        @php
                            if ($hbc && $hbp && $i) {
                                if (($hbp/$hbc) < 1.2) {
                                    $aprima = 0;
                                    $chc3 = 1.0 + ($aprima * ($i - 1.0));
                                }elseif (($hbp/$hbc) > 1.7) {
                                    $aprima = 0.00698;
                                    $chc3 = 1.0 + ($aprima * ($i - 1.0));
                                }elseif ((($hbp/$hbc) >= 1.2) && (($hbp/$hbc) <= 1.7)) {
                                    $aprima = (8.98 * 0.001) * ($hbp/$hbc) - (8.29 * 0.001);
                                    $chc3 = 1.0 + ($aprima * ($i - 1.0));
                                }
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="chc3" wire:model="$chc3">
                            {{number_format($chc3,2)}}
                        </span>    
                    </div>
                {{-- CALCULO PORA EL SH DE LA CORONA --}}
                    <div class="flex flex-col items-center">
                        <label for="">SHC <b> (SHc)</b></label>
                        @php
                            if ($scc3 && $znc3 && $chc3 && $odp && $kt && $kr) {
                                $shc3 = ($scc3 * $znc3 * $chc3)/($odp * $kt * $kr);
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="shc3" wire:model="shc3">
                            {{number_format($shc3,2)}}
                        </span>
                    </div>
                {{-- CONDICION FINAL --}}
                    <div class="flex flex-col">
                        <label for="">Condicion del Engranaje <b>(I)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcioncoronado" name="opcioncoronado" type="radio" value="1"/>
                            <label for="">Engranaje Coronado</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcioncoronado" name="opcioncoronado" type="radio" value="2"/>
                            <label for="">Engranaje no Coronado</label>
                        </div>
                    </div>
            </main>

            {{-- ------------------------------------ --}}
            {{------ CUADRO DE VARIABLES LATERAL -------}}
            {{-- ------------------------------------ --}}
            
            <aside class="bg-neutral-800 border-2 border-yellow-600 text-yellow-600 rounded-lg w-72 p-4 fixed right-16">
               <div class="grid grid-cols-3 gap-4 text-xs">
                <span>
                    SFP=@if ($sfp && is_float($sfp))
                            {{number_format($sfp,2)}}
                        @elseif(!is_float($sfp))
                            {{$sfp}}
                        @endif 
                </span>  
                <span>
                    SFC=@if ($sfc && is_float($sfc))
                            {{number_format($sfc,2)}}
                        @elseif(!is_float($sfc))
                            {{$sfc}}
                        @endif 
                </span> 
                <span>
                    SHP=@if ($shp3 && is_float($shp3))
                            {{number_format($shp3,2)}}
                        @elseif(!is_float($shp3))
                            {{$shp3}}
                        @endif 
                </span>
                <span>
                    SHC=@if ($shc3 && is_float($shc3))
                            {{number_format($shc3,2)}}
                        @elseif(!is_float($shc3))
                            {{$shc3}}
                        @endif 
                </span>
                <span>
                    SHP2=@if ($shp3 && is_float($shp3))
                            {{number_format(pow($shp3,2),2)}}
                        @elseif(!is_float($shp3))
                            {{$shp3}}
                        @endif 
                </span>
                <span>
                    SHC2=@if ($shc3 && is_float($shc3))
                            {{number_format(pow($shc3,2),2)}}
                        @elseif(!is_float($shc3))
                            {{$shc3}}
                        @endif 
                </span>
                <span>
                    SHP3=@if ($shp3 && is_float($shp3))
                            {{number_format(pow($shp3,3),2)}}
                        @elseif(!is_float($shp3))
                            {{$shp3}}
                        @endif 
                </span>
                <span>
                    SHC3=@if ($shc3 && is_float($shc3))
                            {{number_format(pow($shc3,3),2)}}
                        @elseif(!is_float($shc3))
                            {{$shc3}}
                        @endif 
                </span>
               </div>
            </aside>

            {{-- --------------------------------------- --}}
            {{-- VALIDACIONES Y MENSAJES PARA EL USUARIO --}}
            {{-- --------------------------------------- --}}

            {{-- MENSAJES DE VALIDACIONES Y CONDICIONES PRIMERA ITERACCION--}}
                @php
                    $factorseguridad = 0;
                    if (($sfp > 0) && ($ns > 0)) {
                        if ($sfp > $ns) {
                            $factorseguridad = 1;
                            echo '<script>alert ("Ancho de cara aceptable");</script>';
                        }else {
                            $factorseguridad = 2;
                            echo '<script>alert ("Cambiar el ancho de cara");</script>';
                        }
                    } 
                @endphp
                @if ($factorseguridad == 1)
                    <div class="fixed right-16 bottom-64 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                        <span class="text-green-500">El factor de seguridad cumple</span>
                    </div>
                @elseif($factorseguridad == 2)
                    <div class="fixed right-16 bottom-64 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                        <span class="text-red-500">Cambiar el ancho de cara</span>
                    </div>
                @endif
    
            {{-- MENSAJES DE VALIDACIONES Y CONDICIONES SEGUNDA ITERACCION--}}
                @php
                    $factorseguridadcorona = 0;
                    if (($sfc > 0) && ($ns > 0)) {
                        if ($sfp > $ns) {
                            $factorseguridadcorona = 1;
                            $factorseguridad == 0;
                            echo '<script>alert ("El factor de seguridad si cumple");</script>';
                        }else {
                            $factorseguridadcorona = 2;
                            $factorseguridad == 0;
                            echo '<script>alert ("Cambiar el HBc, Stc Y Ync para recalcular");</script>';
                        }
                    } 
                @endphp
                @if ($factorseguridadcorona == 1)
                    <div class="fixed right-16 bottom-64 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                        <span class="text-green-500">El factor de seguridad cumple</span>
                    </div>
                @elseif($factorseguridadcorona == 2)
                    <div class="fixed right-16 bottom-64 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                        <span class="text-red-500">Cambiar HBc, Stc y Ync</span>
                    </div>
                @endif

            {{-- MENSAJES DE VALIDACIONES Y CONDICIONES TERCERA ITERACCION --}}
                @php
                    $condicionmensajefinal=0;
                    if ($opcioncoronado == 1) {

                        $valorcoronado1 = 0;
                        $valorcoronado2 = 0;
                        $valorcoronado1 = pow($shp3,3);
                        $valorcoronado2 = pow($shc3,3);

                        if (($valorcoronado1 > $ns) && ($valorcoronado2 > $ns)) {
                            $factorseguridadcorona = 0;
                            $condicionmensajefinal=1;
                            echo '<script>alert ("Si cumple con todas las condiciones valores aceptables");</script>';
                        }else{
                            $factorseguridadcorona = 0;
                            $condicionmensajefinal=2;
                            echo '<script>alert ("No cumple con las condiciones");</script>';
                        }
                    }elseif ($opcioncoronado == 2) {

                            $valornocoronado1 = 0;
                            $valornocoronado2 = 0;
                            $valornocoronado1 = pow($shp3,2);
                            $valornocoronado2 = pow($shc3,2);

                            if (($valornocoronado1 > $ns) && ($valornocoronado2 > $ns)) {
                                $factorseguridadcorona = 0;
                                $condicionmensajefinal=1;
                                echo '<script>alert ("Si cumple con todas las condiciones valores aceptables");</script>';
                            }else{
                                $factorseguridadcorona = 0;
                                $condicionmensajefinal=2;
                                echo '<script>alert ("No cumple con las condiciones");</script>';
                            }
                    }
                @endphp
                @if ($condicionmensajefinal == 1)
                    <div class="fixed right-16 bottom-64 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                        <span class="text-green-500">El factor de seguridad si cumple, valores aceptables</span>
                    </div>
                @elseif($condicionmensajefinal == 2)
                    <div class="fixed right-16 bottom-64 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                        <span class="text-red-500">No cumple con la condicion, retificar</span>
                    </div>
                @endif

        </div>

    </div>
    </form>
</div>
