<div class="p-2 md:p-6 h-auto bg-white rounded-lg text-neutral-600">
    <div class="flex justify-center text-gray-800 uppercase font-bold">
        Engranajes Helicoidales (Metricos)
    </div>
    <input class="ml-16 px-3 py-1 rounded-full bg-blue-600 hover:bg-blue-800 cursor-pointer text-white" type="button" value="Imprimir" onclick="javascript:window.print()" />
    <hr>
    <div>
        <div class="flex mt-3">
            <main class="w-full md:w-3/4 grid grid-cols-2 md:grid-cols-4 text-sm gap-y-1">
                
                {{-- ------------------------------------ --}}
                {{-- PRIMERA ITERACION DE TODO EL PROCESO --}}
                {{-- ------------------------------------ --}}

                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">PARAMETROS DE DISEÑO</div>
                {{-- Calidad para engranajes Qv --}}
                    <div class="flex flex-col items-center">
                        <label for="">Calidad de engranaje <b>(Qv)</b></label>
                        <select class="mb-2 block w-36 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="qv">
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
                {{-- Potencia en KW --}}
                    <div class="flex flex-col items-center">
                        <label for="">Potencia (KW) <b>(P)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="P">
                    </div>
                {{-- Angulo de Helice  AnguloE --}}
                    <div class="flex flex-col items-center">
                        <label for="">Angulo <b> (Helice)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="anguloE">
                    </div>
                {{-- Angulo de Presion Normal --}}
                    <div class="flex flex-col items-center">
                        <label for="">Angulo Presion <b> (Normal)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="anguloN">
                    </div>
                {{-- FACTOR MINIMO DE SEGURIDAD NS --}} 
                    <div class="flex flex-col items-center">
                        <label for="">Fact. Minimo Seguridad <b>(Ns)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="ns">
                    </div> 
                {{-- TRANSFORMACION DE GRADOS A RADIANES DEL ANGULO DE ELICE Y NORMAL --}}
                    @php
                        if ($anguloE && $anguloN) {
                            $anguloN = ($anguloN * pi())/180;
                            $anguloE = ($anguloE * pi())/180;
                        }
                    @endphp
                {{-- REVOLUCION DEL PIÑON nP --}}
                    <div class="flex flex-col items-center">
                        <label for="">Revolucion del Piñon <b> (np)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="np">
                    </div>
                {{-- ANCHO DE CARA b--}}
                    <div class="flex flex-col items-center">
                        <label for="">Ancho de Cara <b> (b)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="b">
                    </div>
                {{-- NUMERO DE DIENTES DEL PIÑON Np--}}
                    <div class="flex flex-col items-center">
                        <label for=""># Dientes del Piñon <b> (NP)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="NP">
                    </div>
                {{-- NUMERO DE DIENTES DE LA CORONA NG --}}
                    <div class="flex flex-col items-center">
                        <label for=""># Dientes de la Corona <b> (NG)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="NG">
                    </div>
                {{-- DUREZA BRINELL DEL PIÑON HBP--}}
                    <div class="flex flex-col items-center">
                        <label for="">Dureza Brinell del Piñon <b> (HBP)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="HBP">
                    </div>
                {{-- DUREZA BRINELL DE LA CORONA HBG--}}
                    <div class="flex flex-col items-center">
                        <label for="">Dureza Brinell de la Corona <b> (HBG)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="HBG">
                    </div>
                {{-- FACTOR DE VIDA DEL PIÑON NLP--}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Vida Piñon <b> (NLP)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="NLP">
                    </div>
                
                {{-- RELACION DE TRANSMISION mG--}}
                    <div class="flex flex-col items-center">
                        <label for="">Relacion de Transmision <b>(mG)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="mG">
                            @php
                                if ($NG && $NP) {
                                    $mG = $NG/$NP;     
                                }
                            @endphp
                            
                            @if (is_float($mG))
                                {{number_format($mG,2)}}
                            @else
                                {{$mG}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR DE VIDA DE LA CORONA NLG--}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Vida Corona <b>(NLG)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="NLG">
                            @php
                                if ($NLP && $mG) {
                                    $NLG = $NLP/$mG;     
                                }
                            @endphp
                            
                            @if (is_float($NLG))
                                {{number_format($NLG,2)}}
                            @else
                                {{$NLG}}
                            @endif
                        </span>
                    </div>
                
                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">DISEÑO APLICANDO AGMA 2101-D04 FLEXION (PIÑON)</div>

                {{-- PASO DIAMETRAL TRANSVERSAL Pt--}}
                    <div class="flex flex-col items-center">
                        <label for="">Paso Diametral Transversal <b>(Pt)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Pt">
                            @php
                                if ($Pn && $anguloE) {
                                    $Pt = $Pn * cos($anguloE);     
                                }
                            @endphp
                            
                            @if (is_float($Pt))
                                {{number_format($Pt,2)}}
                            @else
                                {{$Pt}}
                            @endif
                        </span>
                    </div>
                {{-- DIAMETRO DE PASO--}}
                    <div class="flex flex-col items-center">
                        <label for="">Diametro de Paso <b>(dP)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="dp">
                            @php
                                if ($mt && $NP) {
                                    $dp = $mt * $NP;     
                                }
                            @endphp
                            
                            @if (is_float($dp))
                                {{number_format($dp,2)}}
                            @else
                                {{$dp}}
                            @endif
                        </span>
                    </div>
                {{-- VELOCIDAD TRANSVERSAL--}}
                    <div class="flex flex-col items-center">
                        <label for="">Velocidad Transversal <b>(Vt)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Vt">
                            @php
                                if ($dp && $np) {
                                    $Vt = (pi() * $np * $dp)/60000;     
                                }
                            @endphp
                            
                            @if (is_float($Vt))
                                {{number_format($Vt,2)}}
                            @else
                                {{$Vt}}
                            @endif
                        </span>
                    </div>
                {{-- CARGA DE TRABAJO --}}
                    <div class="flex flex-col items-center">
                        <label for="">Carga de Trabajo <b>(Ft)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Ft">
                            @php
                                if ($P && $Vt) {
                                    $Ft = (1000 * $P)/$Vt;     
                                }
                            @endphp
                            
                            @if (is_float($Ft))
                                {{number_format($Ft,2)}}
                            @else
                                {{$Ft}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR DE SOBRECARGA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Sobrecarga <b> (Ko)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Ko">
                    </div>
                {{-- CALCULO DEL FACTOR DINAMICO KV --}}
                    @php
                        $aa=0;
                        $bb=0;
                        if ($qv && $Vt) {
                            $bb = 0.25 * (pow((12 - $qv), 0.667 ));
                            $aa = (50 + (56*(1-$bb)) );
                            $Kv = pow((($aa + sqrt((200*$Vt)))/$aa),$bb);
                        }
                    @endphp
                {{-- FACTOR DINAMICO Kv --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Dinamico<b>(kv)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Kv">
                            {{number_format($Kv,2)}}
                        </span>
                    </div>
                {{-- INTERPOLACION FACTOR DE LEWIS Y --}}
                    <div class="flex flex-col">
                        <label for="">Interpolacion para Lewis <b>(Y)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="interpolar" name="interpolar" type="radio" value="1"/>
                            <label for="">Interpolar</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="interpolar" name="interpolar" type="radio" value="2"/>
                            <label for="">No Interpolar</label>
                        </div>
                    </div>
                {{-- FACTOR DE LEWIS Y--}}
                    @if ($interpolar == 2)
                        <div class="flex flex-col items-center">
                            <label for="">Factor de Lewis <b>(Y)</b></label>
                            <div class="flex">
                                <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Y">
                                <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                    <i class="text-3xl  fa-solid fa-image"></i>
                                </a>
                            </div>
                        </div>
                    @elseif($interpolar == 1)
                {{-- INTERPOLACION PARA ELFACTOR DE LEWIS Y --}}
                            <div class="flex flex-col items-center">
                                <label for="">Interpolacion <b>(Y1)</b></label>
                                <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="y1">
                            </div>
                            <div class="flex flex-col items-center">
                                <label for="">Interpolacion <b>(Y2)</b></label>
                                <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="y2">
                            </div>
                            <div class="flex flex-col items-center">
                                <label for="">Interpolacion <b>(X1)</b></label>
                                <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="x1">
                            </div>
                            <div class="flex flex-col items-center">
                                <label for="">Interpolacion <b>(X2)</b></label>
                                <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="x2">
                            </div>
                            <div class="flex flex-col items-center">
                                <label for="">Interpolacion <b>(X)</b></label>
                                <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="x">
                            </div>
                            @php
                                if ($y1 && $y2 && $x1 && $x2 && $x) {
                                    if (($x2-$x1)>0) {
                                        $Y = ($y1) + (($y2 - $y1)/($x2 - $x1)) * ($x - $x1);
                                    }else {
                                        echo '<script>alert ("El valor de X2 debe ser mayor que X1");</script>';
                                        $Y =0;
                                    }
                                }
                            @endphp
                {{-- FACTOR DE LEWIS Y --}}
                            <div class="flex flex-col items-center">
                                <label for="">Factor de Lewis <b>(Y)</b></label>
                                <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                                    @if ($Y)
                                        {{$Y}}
                                    @endif
                                </span>
                            </div>
                    @endif
                {{-- CALCULO DEL FACTOR DE TAMAÑO KS --}}
                    @php
                        if ($b && $Y && $Pn) {
                            $Ks = 1.192 * pow((($b*sqrt($Y))/$Pn) , 0.0535);

                            if ($Ks<1) {
                                $Ks = 1;
                                echo '<script>alert ("Valor de Ks es menor 1 por lo que se asigno el vlaor de 1");</script>';
                            } else {
                                echo '<script>alert ("Valor de Ks = '.$Ks.' es mayor a 1 aceptable");</script>';
                            }
                            
                        }
                    @endphp

                {{-- FACTOR DE TAMAÑO KS --}}
                    <div class="flex flex-col items-center">
                        <label for="">Ks <b>(Ks)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Ks">   
                    </div>

                {{-- ------------------------------------- --}}
                {{-- FACTOR DE DISTRIBUCION DE LA CARGA KH --}}
                {{-- ------------------------------------- --}}
                
                {{-- KHmc --}}
                    <div class="flex flex-col">
                        <label for="">KHmc <b>(KHmc)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KHmc" name="KHmc" type="radio" value="0.8"/>
                            <label for="">Dientes Coronados</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KHmc" name="KHmc" type="radio" value="1"/>
                            <label for="">Dientes No Coronados</label>
                        </div>
                    </div>
                {{-- KHpf --}}
                    <div class="flex flex-col items-center">
                        <label for="">KHpf <b>(KHpf)</b></label>
                        @php
                            if ($b && $dp) {
                                if ($b <= 25) {
                                    if ((($b)/(10*$dp)) >= 0.05) {
                                        $KHpf = (($b)/(10*$dp)) - 0.025;
                                    }elseif ((($b)/(10*$dp)) < 0.05) {
                                        $KHpf = 0.05 - 0.025;
                                    }
                                }elseif ((25 < $b) && ($b <= 432)) {
                                    if ((($b)/(10*$dp)) >= 0.05) {
                                        $KHpf = (($b)/(10*$dp)) - 0.0375 + (0.000492 * $b);
                                    }elseif ((($b)/(10*$dp)) < 0.05) {
                                        $KHpf = 0.05 - 0.0375 + (0.000492 * $b);
                                    }
                                }elseif ((432 < $b) && ($b <= 1020)) {
                                    if ((($b)/(10*$dp)) >= 0.05) {
                                        $KHpf = (($b)/(10*$dp)) - 0.1109 + (0.000815 * $b) - (0.000000353 * pow($b,2));
                                    }elseif ((($b)/(10*$dp)) < 0.05) {
                                        $KHpf = 0.05 - 0.1109 + (0.000815 * $b) - (0.000000353 * pow($b,2));
                                    }
                                }
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KHpf">
                            {{number_format($KHpf,2)}}
                        </span>
                    </div>
                {{-- KHpm --}}
                    <div class="flex flex-col">
                        <label for="">KHpm <b>(KHpm)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KHpm" name="KHpm" type="radio" value="1"/>
                            <label for="">Piñon montado separado (S1/S)< 0.175 </label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KHpm" name="KHpm" type="radio" value="1.1"/>
                            <label for="">Piñon montado separado (S1/S)>=0.175</label>
                        </div>
                    </div>
                {{-- KHma A --}}
                    <div class="flex flex-col items-center">
                        <label for="">KHma <b>(A)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KHmaA">
                    </div>
                {{-- KHma B --}}
                    <div class="flex flex-col items-center">
                        <label for="">KHma <b>(B)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KHmaB">
                    </div>
                {{-- KHma C --}}
                    <div class="flex flex-col items-center">
                        <label for="">KHma <b>(C)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KHmaC">
                    </div>
                {{-- CALCULO Y RESULTADO KHma --}}
                    <div class="flex flex-col items-center">
                        <label for="">KHma <b>(KHma)</b></label>
                        <div class="flex">
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KHma">
                                @php
                                    if ($KHmaA && $KHmaB && $KHmaC && $b) {
                                        $KHma = $KHmaA + ($KHmaB * $b) + ($KHmaC * (pow($b,2)));
                                    }
                                @endphp
                                {{number_format($KHma,2)}}
                            </span>  
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a> 
                        </div> 
                    </div>
                {{-- KHe --}}
                    <div class="flex flex-col">
                        <label for="">KHe <b>(KHe)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KHe" name="KHe" type="radio" value="0.8"/>
                            <label for="">Engranajes Ajustados </label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KHe" name="KHe" type="radio" value="1"/>
                            <label for="">Otras condiciones</label>
                        </div>
                    </div>
                {{-- CALCULO DE KH --}}
                    @php
                        if ($KHmc && $KHpf && $KHpm && $KHma && $KHe) {
                            $KH = 1 + $KHmc * (($KHpf * $KHpm) + ($KHma* $KHe));
                        }
                    @endphp
                {{-- KH --}}
                    <div class="flex flex-col items-center">
                        <label for="">KH <b>(KH)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KH">
                            {{number_format($KH,2)}}
                        </span>
                    </div>
                {{-- mB --}}
                    <div class="flex flex-col items-center">
                        <label for="">mB <b>(mB)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="mB">
                    </div>
                {{-- KB --}}
                    <div class="flex flex-col items-center">
                        <label for="">KB <b>(KB)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KB">
                            @php
                                if ($mB && ($mB<1.2)) {
                                    $KB = 1.6*log(2.242/$mB);
                                }elseif ($mB && ($mB >= 1.2)) {
                                    $KB = 1;
                                }
                            @endphp
                            {{number_format($KB,2)}}
                        </span>
                    </div>
                {{-- Yjp --}}
                    <div class="flex flex-col items-center">
                        <label for="">Yj (Piñon) <b>(Yjp)</b></label>
                        <div class="flex">
                            <input type="number" class="mb-2 block w-32  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Yjp">
                            <a class="h-9 w-9 md:h-10 md:w-10 ml-1 md:ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div> 
                    </div>
                {{-- ESFUERZO DE FLEXION PARA EL PIÑON OFP--}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de Flexion Piñon<b>(OFp)</b></label>
                        <div class="flex">
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="OFp">
                                @php
                                    if ($Ft && $Ko && $Kv && $Ks && $mt && $b && $KH && $KB && $Yjp) {
                                        $OFp = ($Ft) * ($Ko) * ($Kv) * ($Ks) * (1/($mt*$b)) * (($KH * $KB)/$Yjp);
                                    }
                                @endphp
                                {{number_format($OFp,2)}}
                            </span>  
                            <a class="h-9 w-9 md:h-10 md:w-10 ml-1 md:ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a> 
                        </div> 
                    </div>
                {{-- ESFUERZO DE FLEXION PERMISIBLE OFP --}}
                    <div class="flex flex-col col-span-2">
                        <label for="">Esfuerzo de Flexion Permisible <b>(OFP)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionflexion3" name="opcionflexion3" type="radio" value="1"/>
                            <label for="">Aceros completamente endurecidos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionflexion3" name="opcionflexion3" type="radio" value="2"/>
                            <label for="">Aceros nitrurados completamente endurecidos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionflexion3" name="opcionflexion3" type="radio" value="3"/>
                            <label for="">Acero nitrurado</label>
                        </div>
                    </div>
                {{-- ESFUERZO DE FLEXION PERMISIBLE OFP --}}
                    @if ($opcionflexion3)
                        <div class="flex flex-col items-center">
                            <label for="">Seleccione el Grado </label>
                            <div class="flex space-x-3">
                                <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opciongrado9" name="opciongrado9" type="radio" value="1"/>
                                <label for="">Grado 1</label>
                            </div>
                            <div class="flex space-x-3">
                                <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opciongrado9" name="opciongrado9" type="radio" value="2"/>
                                <label for="">Grado 2</label>
                            </div>
                        </div>
                    @endif
                    @php
                        if ($opcionflexion3==1) {
                            
                            if ($opciongrado9==1) {
                                $OFP = (0.533 * $HBP) + 88.3;
                            } elseif ($opciongrado9==2) {
                                $OFP = (0.703 * $HBP) + 113;
                            } 
                            
                        }elseif ($opcionflexion3==2){

                            if ($opciongrado9==1) {
                                $OFP = (0.568 * $HBP) + 83.8;
                            } elseif ($opciongrado9==2) {
                                $OFP = (0.749 * $HBP) + 110;
                            } 
                            
                        }elseif ($opcionflexion3==3){

                            if ($opciongrado==1) {
                                $OFP = (0.594 * $HBP) + 87.76;
                            } elseif ($opciongrado==2) {
                                $OFP = (0.7848 * $HBP) + 114.81;
                            } 
                            
                        }
                    @endphp
                {{-- OFP --}}
                    <div class="flex flex-col items-center">
                        <label for="">OFP DEL PIÑON <b>(OFP)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="OFP">
                            {{number_format($OFP,2)}}
                        </span>
                    </div>
                {{-- FACTOR DE CICLOS DE ESFUERZO YN --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Ciclos <b>YN</b> </label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionformula" name="opcionformula" type="radio" value="1"/>
                            <label for="">Ingresable</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionformula" name="opcionformula" type="radio" value="2"/>
                            <label for="">Formula</label>
                        </div>
                    </div>
                {{-- FACTOR DE CICLOS DE ESFUERZO YN --}}
                    @if ($opcionformula == 1)
                        {{-- INGRESABLE --}}
                        @php
                            $YN = 0;
                        @endphp
                        <div class="flex flex-col items-center">
                            <label for="">YN <b>(YN)</b></label>
                            <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="YN">
                        </div>
                    @elseif($opcionformula == 2)
                        {{-- FORMULA --}}
                        @php
                            if ($NLG) {
                                $YN = 1.6831 * (1/pow($NLP,0.0323));
                            }
                        @endphp
                        <div class="flex flex-col items-center">
                            <label for="">YN <b>(YN)</b></label>
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="YN">
                                {{number_format($YN,2)}}
                            </span>
                        </div>
                    @endif
                {{-- FACTOR DE TEMPERATURA Y0 --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Temperatura <b>(Y0)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Y0">
                    </div>
                {{-- FACTOR DE CONFIABILIDAD YZ --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Confiabilidad <b>(YZ)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="YZ">
                    </div>    
                {{-- FACTOR DE SEGURIDAD PARA EL PIÑON --}}
                    <div class="flex flex-col items-center">
                        <label for="">Calculo del Factor de Seguridad<b>(Sfp)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Sfp">
                            @php
                                if ($OFP && $YN && $Y0 && $YZ && $OFp) {
                                    $Sfp = ($OFP*$YN)/($Y0*$YZ*$OFp);
                                }
                            @endphp
                            {{number_format($Sfp,2)}}
                        </span>
                    </div>
                
                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">DISEÑO APLICANDO AGMA 2101-D04 FLEXION (CORONA)</div>
                {{-- SEGUNDA INTERACCION  --}}
                
                {{-- YjG --}}
                    <div class="flex flex-col items-center">
                        <label for="">Yj (Corona) <b>(Yjg)</b></label>
                        <div class="flex">
                            <input type="number" class="mb-2 block w-32  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Yjg">
                            <a class="h-9 w-9 md:h-10 md:w-10 ml-1 md:ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div> 
                    </div>
                {{-- ESFUERZO DE FLEXION PARA LA CORONA OFG--}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de Flexion Corona<b>(OFg)</b></label>
                        <div class="flex">
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="OFg">
                                @php
                                    if ($Ft && $Ko && $Kv && $Ks && $mt && $b && $KH && $KB && $Yjg) {
                                        $OFg = ($Ft) * ($Ko) * ($Kv) * ($Ks) * (1/ ($mt*$b)) * (($KH * $KB)/$Yjg);
                                    }
                                @endphp
                                {{number_format($OFg,2)}}
                            </span>  
                            <a class="h-9 w-9 md:h-10 md:w-10 ml-1 md:ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a> 
                        </div> 
                    </div>

                {{-- ESFUERZO DE FLEXION PERMISIBLE OFPG --}}
                    <div class="flex flex-col col-span-2">
                        <label for="">Esfuerzo de Flexion Permisible <b>(OFPG)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionflexion4" name="opcionflexion4" type="radio" value="1"/>
                            <label for="">Aceros completamente endurecidos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionflexion4" name="opcionflexion4" type="radio" value="2"/>
                            <label for="">Aceros nitrurados completamente endurecidos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionflexion4" name="opcionflexion4" type="radio" value="3"/>
                            <label for="">Acero nitrurado</label>
                        </div>
                    </div>
                {{-- ESFUERZO DE FLEXION PERMISIBLE OFP --}}
                    @if ($opcionflexion4)
                        <div class="flex flex-col items-center">
                            <label for="">Seleccione el Grado </label>
                            <div class="flex space-x-3">
                                <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opciongrado2" name="opciongrado2" type="radio" value="1"/>
                                <label for="">Grado 1</label>
                            </div>
                            <div class="flex space-x-3">
                                <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opciongrado2" name="opciongrado2" type="radio" value="2"/>
                                <label for="">Grado 2</label>
                            </div>
                        </div>
                    @endif
                    @php
                        if ($opcionflexion4==1) {
                            
                            if ($opciongrado2==1) {
                                $OFPG = (0.533 * $HBG) + 88.3;
                            } elseif ($opciongrado2==2) {
                                $OFPG = (0.703 * $HBG) + 113;
                            } 
                            
                        }elseif ($opcionflexion4==2){

                            if ($opciongrado2==1) {
                                $OFPG = (0.568 * $HBG) + 83.8;
                            } elseif ($opciongrado2==2) {
                                $OFPG = (0.749 * $HBG) + 110;
                            } 
                            
                        }elseif ($opcionflexion4==3){

                            if ($opciongrado2==1) {
                                $OFPG = (0.594 * $HBG) + 87.76;
                            } elseif ($opciongrado2==2) {
                                $OFPG = (0.7848 * $HBG) + 114.81;
                            } 
                            
                        }
                    @endphp
                {{-- OFP --}}
                    <div class="flex flex-col items-center">
                        <label for="">OFP DE LA CORONA <b>(OFP)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="OFP">
                            {{number_format($OFPG,2)}}
                        </span>
                    </div>
                {{-- FACTOR DE CICLOS DE ESFUERZO YN --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Ciclos <b>YNG</b> </label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionformula2" name="opcionformula2" type="radio" value="1"/>
                            <label for="">Ingresable</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionformula2" name="opcionformula2" type="radio" value="2"/>
                            <label for="">Formula</label>
                        </div>
                    </div>
                {{-- FACTOR DE CICLOS DE ESFUERZO YN --}}
                    @if ($opcionformula2 == 1)
                        {{-- INGRESABLE --}}
                        @php
                            $YNG = 0;
                        @endphp
                        <div class="flex flex-col items-center">
                            <label for="">YNG <b>(YNG)</b></label>
                            <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="YNG">
                        </div>
                    @elseif($opcionformula2 == 2)
                        {{-- FORMULA --}}
                        @php
                            if ($NLG) {
                                $YNG = 1.6831 * (1/pow($NLG,0.0323));
                            }
                        @endphp
                        <div class="flex flex-col items-center">
                            <label for="">YNG <b>(YNG)</b></label>
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="YNG">
                                {{number_format($YNG,2)}}
                            </span>
                        </div>
                    @endif
                {{-- FACTOR DE SEGURIDAD PARA LA CORONA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Calculo del Factor de Seguridad<b>(Sfg)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Sfg">
                            @php
                                if ($OFPG && $YNG && $Y0 && $YZ && $OFg) {
                                    $Sfg = ($OFPG*$YNG)/($Y0*$YZ*$OFg);
                                }
                            @endphp
                            {{number_format($Sfg,2)}}
                        </span>
                    </div>

                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">DISEÑO APLICANDO AGMA 2101-D04 DESGASTE SUPERFICIAL (PIÑON)</div>
                {{-- ------------------------------ --}}
                {{-- DESGASTE SUPERFICIAL DEL PIÑON --}}
                {{-- ------------------------------ --}}
                
                {{-- RP --}}
                    <div class="flex flex-col items-center">
                        <label for="">Radio de Paso Piñon<b>(Rp)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="rp">
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
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="dg">
                            @php
                                if ($dp && $mG) {
                                    $dg = $mG * $dp;
                                }
                            @endphp
                            {{number_format($dg,2)}}
                        </span>
                    </div>
                {{-- RG --}}
                    <div class="flex flex-col items-center">
                        <label for="">Rg <b>(Rg)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="rg">
                            @php
                                if ($dg) {
                                    $rg = $dg/2;
                                }
                            @endphp
                            {{number_format($rg,2)}}
                        </span>
                    </div>
                {{-- ANGULO T --}}
                    <div class="flex flex-col items-center">
                        <label for="">Angulo de Presion Transversal <b>(Ot)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="angulot">
                            @php
                            $angulo = 0;
                                if ($dg && $anguloN && $anguloE) {

                                    $angulot = (atan((tan($anguloN)/cos($anguloE))));

                                    $angulo = ($angulot * 180)/pi();
                                }
                            @endphp
                            {{number_format($angulo,2)}}
                        </span>
                    </div>
                {{-- RBP --}}
                    <div class="flex flex-col items-center">
                        <label for="">RBP <b>(RBp)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="rbp">
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
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="rbg">
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
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="a">
                            @php
                                if ($Pn) {
                                    $a = 1 / $Pn;
                                }
                            @endphp
                            {{number_format($a,2)}}
                        </span>
                    </div>
                {{-- COEFICIENTE ELEASTICO ZE --}}
                    <div class="flex flex-col items-center">
                        <label for="">Coeficiente Elastico <b>(ZE)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="ZE">
                    </div>
                {{-- FACTOR DE CONDICION SUPERFICIAL ZR --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Condicion Superficial <b>(ZR)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="ZR">
                    </div>
                {{-- FACTOR GEOMETRICO ZI --}}
                    <div class="flex flex-col">
                        <label for="">Factor geometrico I <b>(I)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionfactorgeometrico" name="opcionfactorgeometrico" type="radio" value="1"/>
                            <label for="">Engranajes Externos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionfactorgeometrico" name="opcionfactorgeometrico" type="radio" value="2"/>
                            <label for="">Engranajes Internos</label>
                        </div>
                    </div>
                {{-- CALCULO FACTOR GEOMETRICO ZI--}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Geometrico ZI <b> (ZI)</b></label>
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
                            if ($Pn && $anguloN) {
                                $pnn = (pi()/$Pn) * cos($anguloN);
                            }
                            //mN
                            if ($pnn && $z) {
                                $mn = $pnn / (0.95 * $z);
                            }

                            if ($opcionfactorgeometrico==1 && $angulot && $mG) {
                                $ZI = ((cos($angulot)*sin($angulot))/(2*$mn)) * ($mG/($mG+1));
                            }elseif ($opcionfactorgeometrico==2 && $angulot && $mG){
                                $ZI = ((cos($angulot)*sin($angulot))/(2*$mn)) * ($mG/($mG-1));
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="ZI">
                            {{number_format($ZI,2)}}
                        </span>
                    </div>
                {{-- ESFUERZO DE CONTACTO DEL PIÑON ODP --}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de contacto<b> (OH)</b></label>
                        @php
                            if ($ZE && $Ft && $Ko && $Kv && $Ks && $KH && $dp && $b && $ZR && $ZI) {
                                $OH = $ZE * (sqrt($Ft * $Ko * $Kv * $Ks * ($KH/($dp * $b)) * ($ZR/$ZI)));
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="OH">
                            {{number_format($OH,2)}}
                        </span>
                        {{-- <span>  {{$}}</span>
                        <span>  {{$}}</span>
                        <span>  {{$}}</span>
                        <span>  {{$}}</span>
                        <span>  {{$}}</span> --}}
                    </div>
                
                {{-- ------------------------------ --}}
                {{-- FACTOR DE SEGURIDAD DEL PIÑON --}}
                {{-- ------------------------------ --}}

                {{-- FACTOR DE CICLOS DE ESFUERZO ZNP --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Ciclos Esfuerzo <b>ZNP</b> </label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionformula3" name="opcionformula3" type="radio" value="1"/>
                            <label for="">Ingresable</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionformula3" name="opcionformula3" type="radio" value="2"/>
                            <label for="">Formula</label>
                        </div>
                    </div>
                {{-- FACTOR DE CICLOS DE ESFUERZO ZNP --}}
                    @if ($opcionformula3 == 1)
                        {{-- INGRESABLE --}}
                        @php
                            $ZNP = 0;
                        @endphp
                        <div class="flex flex-col items-center">
                            <label for="">ZNP <b>(ZNP)</b></label>
                            <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="ZNP">
                        </div>
                    @elseif($opcionformula3 == 2)
                        {{-- FORMULA --}}
                        @php
                            if ($NLG) {
                                $ZNP = 2.466 * (1/pow($NLP,0.056));
                            }
                        @endphp
                        <div class="flex flex-col items-center">
                            <label for="">ZNP <b>(ZNP)</b></label>
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="ZNP">
                                {{number_format($ZNP,2)}}
                            </span>
                        </div>
                    @endif
                {{-- CALCULO DEL FACTOR DE SEGURIDAD DE DESGASTE DEL PINON ZW --}}
                    <div class="flex flex-col items-center">
                        <label for="">ZW PIÑON<b>(ZWP)</b></label>
                        <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="ZWP">
                    </div>
                {{-- ESFUERZO DE CONTACTO PERMISIBLE OHP--}}
                    <div class="flex flex-col items-center">
                        <label for="">Acero completamente endurecido</label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opciongrado3" name="opciongrado3" type="radio" value="1"/>
                            <label for="">Grado 1</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opciongrado3" name="opciongrado3" type="radio" value="2"/>
                            <label for="">Grado 2</label>
                        </div>
                    </div>
                    @php
                        if ($opciongrado3==1) {
                                $OHP = (2.22 * $HBP) + 200;
                            } elseif ($opciongrado3==2) {
                                $OHP = (2.41 * $HBP) + 237;
                            } 
                    @endphp
                    <div class="flex flex-col items-center">
                        <label for="">OHP Piñon<b>(OHP)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="OHP">
                            {{number_format($OHP,2)}}
                        </span>
                    </div>
                {{-- FACTOR DE SEGURIDAD CALCULO SHP --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de seguridad <b> (SHP)</b></label>
                        @php
                            if ($OHP && $ZNP && $ZWP && $OH && $Y0 && $YZ) {
                                $SHP = ($OHP * $ZNP * $ZWP)/($OH * $Y0 * $YZ);
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="SHP">
                            {{number_format($SHP,2)}}
                        </span>
                    </div>                    
                
                    <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">DISEÑO APLICANDO AGMA 2101-D04 DESGASTE SUPERFICIAL (CORONA)</div>
                {{-- ------------------------------ --}}
                {{-- FACTOR DE SEGURIDAD DE LA CORONA --}}
                {{-- ------------------------------ --}}
                
                {{-- ESFUERZO DE CONTACTO PERMISIBLE OHPG--}}
                    <div class="flex flex-col items-center">
                        <label for="">Acero cumpletamente endurecido</label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opciongrado7" name="opciongrado7" type="radio" value="1"/>
                            <label for="">Grado 1</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opciongrado7" name="opciongrado7" type="radio" value="2"/>
                            <label for="">Grado 2</label>
                        </div>
                    </div>
                    @php
                        if ($opciongrado7==1) {
                                $OHPG = (2.22 * $HBG) + 200;
                            } elseif ($opciongrado7==2) {
                                $OHPG = (2.41 * $HBG) + 237;
                            } 
                    @endphp
                    <div class="flex flex-col items-center">
                        <label for="">OHP Corona<b>(OHPG)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="OHPG">
                            {{number_format($OHPG,2)}}
                        </span>
                    </div>
                 {{-- FACTOR DE CICLOS DE ESFUERZO ZNG --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Ciclos Esfuerzo <b>ZNG</b> </label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionformula4" name="opcionformula4" type="radio" value="1"/>
                            <label for="">Ingresable</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionformula4" name="opcionformula4" type="radio" value="2"/>
                            <label for="">Formula</label>
                        </div>
                    </div>
                {{-- FACTOR DE CICLOS DE ESFUERZO ZNP --}}
                    @if ($opcionformula4 == 1)
                        {{-- INGRESABLE --}}
                        @php
                            $ZNG = 0;
                        @endphp
                        <div class="flex flex-col items-center">
                            <label for="">ZNG <b>(ZNG)</b></label>
                            <input type="number" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="ZNG">
                        </div>
                    @elseif($opcionformula4 == 2)
                        {{-- FORMULA --}}
                        @php
                            if ($NLG) {
                                $ZNG = 2.466 * (1/pow($NLG,0.056));
                            }
                        @endphp
                        <div class="flex flex-col items-center">
                            <label for="">ZNG <b>(ZNG)</b></label>
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="ZNG">
                                {{number_format($ZNG,2)}}
                            </span>
                        </div>
                    @endif
                {{-- CALCULO DEL FACTOR DE SEGURIDAD DE DESGASTE DEL PINON ZWG --}}
                    <div class="flex flex-col items-center">
                        <label for="">ZWG <b>(ZWG)</b></label>
                        @php
                            if ($HBG && $HBP && $mG) {
                                if (($HBP/$HBG) < 1.2) {
                                    $aprima = 0;
                                    $ZWG = 1 + ($aprima * ($mG - 1));
                                }elseif (($HBP/$HBG) > 1.7) {
                                    $aprima = 0.00698;
                                    $ZWG = 1 + ($aprima * ($mG - 1));
                                }elseif ((($HBP/$HBG) >= 1.2) && (($HBP/$HBG) <= 1.7)) {
                                    $aprima = (0.00898 * ($HBP/$HBG)) -  0.00829;
                                    $ZWG = 1 + ($aprima * ($mG - 1));
                                }
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="ZWG">
                            {{number_format($ZWG,2)}}
                        </span>    
                    </div>
                {{-- FACTOR DE SEGURIDAD CALCULO SHG --}}
                    <div class="flex flex-col items-center">
                        <label for="">FACTOR DE SEGURIDAD SHG <b> (SHG)</b></label>
                        @php
                            if ($OHPG && $ZNG && $ZWG && $OH && $Y0 && $YZ) {
                                $SHG = ($OHPG * $ZNG * $ZWG)/($OH * $Y0 * $YZ);
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="SHG">
                            {{number_format($SHG,2)}}
                        </span>
                    </div> 

                {{-- CONDICION FINAL --}}
                <div class="flex flex-col">
                    <label for="">Condicion del Engranaje <b>(I)</b></label>
                    <div class="flex space-x-3">
                        <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcioncoronado" name="opcioncoronado" type="radio" value="1"/>
                        <label for="">Engranaje Coronado</label>
                    </div>
                    <div class="flex space-x-3">
                        <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcioncoronado" name="opcioncoronado" type="radio" value="2"/>
                        <label for="">Engranaje no Coronado</label>
                    </div>
                </div>

                

            </main>

            {{-- --------------------------------------- --}}
            {{-- VALIDACIONES Y MENSAJES PARA EL USUARIO --}}
            {{-- --------------------------------------- --}}

            {{-- MENSAJES DE VALIDACIONES Y CONDICIONES TERCERA ITERACCION --}}
                @php
                    $condicionmensajefinal=0;
                    if ($opcioncoronado == 1) {

                        $valorcoronado1 = 0;
                        $valorcoronado2 = 0;
                        $valorcoronado1 = pow($SHP,3);
                        $valorcoronado2 = pow($SHG,3);

                        if (($valorcoronado1 > $ns) && ($valorcoronado2 > $ns)) {
                            //$factorseguridadcorona = 0;
                            $condicionmensajefinal=1;
                            echo '<script>alert ("Si cumple con todas las condiciones valores aceptables");</script>';
                        }else{
                            //$factorseguridadcorona = 0;
                            $condicionmensajefinal=2;
                            echo '<script>alert ("No cumple con las condiciones");</script>';
                        }
                    }elseif ($opcioncoronado == 2) {

                            $valornocoronado1 = 0;
                            $valornocoronado2 = 0;
                            $valornocoronado1 = pow($SHP,2);
                            $valornocoronado2 = pow($SHG,2);

                            if (($valornocoronado1 > $ns) && ($valornocoronado2 > $ns)) {
                                //$factorseguridadcorona = 0;
                                $condicionmensajefinal=1;
                                echo '<script>alert ("Si cumple con todas las condiciones valores aceptables");</script>';
                            }else{
                                //$factorseguridadcorona = 0;
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
            {{-- ------------------------------------ --}}
            {{------ CUADRO DE VARIABLES LATERAL -------}}
            {{-- ------------------------------------ --}}
            
            <aside class="hidden md:block bg-neutral-800 border-2 border-yellow-600 text-yellow-600 rounded-lg w-72 p-4 fixed right-16">
               <div class="grid grid-cols-3 gap-4 text-xs">
                
                <span>
                    OFP=@if ($OFP && is_float($OFP))
                            {{number_format($OFP,2)}}
                        @elseif(!is_float($OFP))
                            {{$OFP}}
                        @endif 
                </span>                
                <span>
                    SFP=@if ($Sfp && is_float($Sfp))
                            {{number_format($Sfp,2)}}
                        @elseif(!is_float($Sfp))
                            {{$Sfp}}
                        @endif 
                </span>
                <span>
                    OFG=@if ($OFPG && is_float($OFPG))
                            {{number_format($OFPG,2)}}
                        @elseif(!is_float($OFPG))
                            {{$OFPG}}
                        @endif 
                </span>
                <span>
                    SFG=@if ($Sfg && is_float($Sfg))
                            {{number_format($Sfg,2)}}
                        @elseif(!is_float($Sfg))
                            {{$Sfg}}
                        @endif 
                </span>
                <span>
                    OH=@if ($OH && is_float($OH))
                            {{number_format($OH,2)}}
                        @elseif(!is_float($OH))
                            {{$OH}}
                        @endif 
                </span>
                
                <span>
                    SHP=@if ($SHP && is_float($SHP))
                            {{number_format($SHP,2)}}
                        @elseif(!is_float($SHP))
                            {{$SHP}}
                        @endif 
                </span>
                <span>
                    SHG=@if ($SHG && is_float($SHG))
                            {{number_format($SHG,2)}}
                        @elseif(!is_float($SHG))
                            {{$SHG}}
                        @endif 
                </span>
                <span>
                    SHP2=@if ($SHP && is_float($SHP))
                            {{number_format(pow($SHP,2),2)}}
                        @elseif(!is_float($SHP))
                            {{$SHP}}
                        @endif 
                </span>
                <span>
                    SHG2=@if ($SHG && is_float($SHG))
                            {{number_format(pow($SHG,2),2)}}
                        @elseif(!is_float($SHG))
                            {{$SHG}}
                        @endif 
                </span>
                <span>
                    SHP3=@if ($SHP && is_float($SHP))
                            {{number_format(pow($SHP,3),2)}}
                        @elseif(!is_float($SHP))
                            {{$SHP}}
                        @endif 
                </span>
                <span>
                    SHG3=@if ($SHG && is_float($SHG))
                            {{number_format(pow($SHG,3),2)}}
                        @elseif(!is_float($SHG))
                            {{$SHG}}
                        @endif 
                </span>
               </div>
            </aside>
        </div>

    </div>
    
</div>
