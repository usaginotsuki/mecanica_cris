<div class="p-6 h-auto bg-white rounded-lg text-neutral-600">
    <div class="flex justify-center text-gray-800 uppercase font-bold">
        Engranajes Rectos (Metricos)
    </div>
    <input class="ml-16 px-3 py-3 rounded-full bg-blue-600 hover:bg-blue-800 cursor-pointer text-white" type="button" value="Imprimir" onclick="javascript:window.print()" />
    <hr>
    <form action="{{url('pdf-rectos-metrico')}}" method="POST" target="_blank">
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
                        <label for="">Potencia a Transmitir <b>(KW)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="potencia" wire:model="potencia">
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
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="np" wire:model="np">
                    </div> 
                {{-- Dureza-Brinell Piñon HBp --}}
                    <div class="flex flex-col items-center">
                        <x-jet-label for="text" value="" />
                        <label for="">Dureza-Brinell Piñon<b>(HBp)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="hbp" wire:model="hbp">
                    </div> 
                {{-- Dureza-Brinell Engrane HBg --}}
                    <div class="flex flex-col items-center">
                        <x-jet-label for="text" value="" />
                        <label for="">Dureza-Brinell Engrane<b>(HBg)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="hbg" wire:model="hbg">
                    </div> 
                {{-- FACTOR DE SEGURIDAD NS --}} 
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Seguridad <b>(Ns)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ns" wire:model="ns">
                    </div> 
                {{-- MODULO --}} 
                    <div class="flex flex-col items-center">
                        <label for="">Modulo<b>(m)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="modulo" wire:model="modulo">
                    </div> 
                {{-- RELACION DE TRANSMISION i --}} 
                    <div class="flex flex-col items-center">
                        <label for="">Relacion de Transmision<b>(i)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="i" wire:model="i">
                    </div> 
                    
                    
                    <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">ITERACION DE LEWIS</div>
                
                {{-- PASO DIAMETRAL PD --}} 
                    <div class="flex flex-col items-center">
                        <label for="">Diametro de Paso <b>(Dp)</b></label>
                        @php
                            //Diametro de paso
                            if ($modulo && $np) {
                                $dp = $modulo*$np;
                                
                            }
                        @endphp
                        <input type='hidden' name='dp' value='<?php echo "$dp";?>'/> 
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="dp" wire:model="dp">
                            @if (is_float($dp))
                                {{number_format($dp,3)}}
                            @else
                                {{$dp}}
                            @endif
                        </span>
                    </div>
                {{-- RAPIDEZ DEL PIÑON RPMP --}} 
                    <div class="flex flex-col items-center">
                        <label for="">Rapidez del Piñon<b>(RPMp)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="rpmp" wire:model="rpmp">
                    </div> 
                {{-- RAPIDEZ DEL ENGRANE RPMG --}}  
                    <div class="flex flex-col items-center">
                        <label for="">Rapidez del Engrane<b>(RPMg)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="rpmg" wire:model="rpmg">
                    </div> 
                {{-- VELOCIDAD--}} 
                    <div class="flex flex-col items-center">
                        <label for="">Velocidad <b>(V)</b></label>
                        @php
                            //DVelocidad de linea de paso
                            if ($dp && $rpmp) {
                                $v = (pi() * $dp * $rpmp)/60000;
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="v" wire:model="v">
                            @if (is_float($v))
                                {{number_format($v,3)}}
                            @else
                                {{$v}}
                            @endif
                        </span>
                    </div>
                {{-- CARGA TANGENCIAL WT--}} 
                    <div class="flex flex-col items-center">
                        <label for="">Carga Tangencial (kw) <b>(Wt)</b></label>
                        @php
                            //Carga tangencial
                            if ($v && $potencia) {
                                $wt = (1000 * $potencia)/$v;
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="wt" wire:model="wt">
                            @if (is_float($wt))
                                {{number_format($wt,3)}}
                            @else
                                {{$wt}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR DINAMICO SELECT KV --}}
                    <div class="flex flex-col col-span-2">
                        <label for="">Elegir Factor Dinamico <b>(Kv)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionkv" name="opcionkv" type="radio" value="1"/>
                            <label for="">Hierro fundido, perfil moldeado</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionkv" name="opcionkv" type="radio" value="2"/>
                            <label for="">Perfil cortado o fresco</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionkv" name="opcionkv" type="radio" value="3"/>
                            <label for="">Perfil generado con fresa madre o cepillado</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionkv" name="opcionkv" type="radio" value="4"/>
                            <label for="">Perfil cepillado o esmerilado</label>
                        </div>
                        @php
                            if ($opcionkv==1) {
                                $kv = (3.05 + $v)/3.05;
                            }elseif ($opcionkv==2){
                                $kv = (6.1 + $v)/6.1;
                            }elseif ($opcionkv==3){
                                $kv = (3.56 + sqrt($v))/3.56;
                            }elseif ($opcionkv==4){
                                $kv = sqrt((5.56+sqrt($v))/5.56);
                            }
                        @endphp
                    </div>
                {{-- FACTOR DINAMICO RESULTADO KV --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Diamico <b>(Kv)</b></label>
                        @if ($kv)
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="kv" wire:model="kv">
                                {{number_format($kv,3)}}
                            </span>
                        @else
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="kv" wire:model="kv">
                            
                        </span>
                        @endif
                    </div>
                {{--RESITENCIA A LA FLEXION SELECT ST --}}
                    <div class="flex flex-col col-span-2">
                        <label for="">Resistencia a la Flexion <b>(St)</b></label>
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
                                $st = (0.533 * $hbp) + 88.3;
                            }elseif ($opcionflexion==2){
                                $st = (0.568 * $hbp) + 83.8;
                            }elseif ($opcionflexion==3){
                                $st = (0.594 * $hbp) + 87.76;
                            }
                        @endphp
                    </div>
                {{-- RESITENCIA A LA FLEXION RESULTADO ST --}}
                    <div class="flex flex-col items-center">
                        <label for="">Resistencia a la Flexion <b>(St)</b></label>
                        <div class="flex">
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="st" wire:model="st">
                                {{number_format($st,3)}}
                            </span>
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div>
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
                                <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="y" wire:model="y">
                                <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                    <i class="text-3xl  fa-solid fa-image"></i>
                                </a>
                            </div>
                        </div>
                    @elseif($opcion == 1)
                {{-- INTERPOLACION PARA ELFACTOR DE LEWIS Y --}}
                    <div class="flex flex-col items-center">
                        <label for="">Interpolacion <b>(Y1)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="y1" wire:model="y1">
                    </div>
                    <div class="flex flex-col items-center">
                        <label for="">Interpolacion <b>(Y2)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="y2" wire:model="y2">
                    </div>
                    <div class="flex flex-col items-center">
                        <label for="">Interpolacion <b>(X1)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="x1" wire:model="x1">
                    </div>
                    <div class="flex flex-col items-center">
                        <label for="">Interpolacion <b>(X2)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="x2" wire:model="x2">
                    </div>
                    <div class="flex flex-col items-center">
                        <label for="">Interpolacion <b>(X)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="x" wire:model="x">
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
                {{-- ESFUERZO DE FLEXION O --}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de Flexion <b>(O)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="o" wire:model="o">
                            @php
                            if ($ns && $st) {
                                $o = ($st)/(2*$ns);
                            }
                            @endphp
                            {{number_format($o,2)}}
                        </span>
                    </div>
                {{-- ANCHO DE CARA F --}}
                    <div class="flex flex-col items-center">
                        <label for="">Ancho de Cara <b>(F)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="f" wire:model="f">
                            @php
                            if ($kv && $wt && $modulo && $y && $o) {
                                $f = ($kv * $wt)/($y * $modulo * $o);
                            }
                            @endphp
                            {{number_format($f,2)}}
                        </span>
                    </div>
                
                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">DISEÑO APLICANDO AGMA 2101 D04 FLEXION (PIÑON)</div>

                {{-- CALCULO DE PC --}}
                    <div class="flex flex-col items-center">
                        <label for="">Calculo de PC <b>(Pc)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="pc" wire:model="pc">
                            @php
                            if ($modulo) {
                                $pc = pi()*$modulo;
                            }
                            @endphp
                            {{number_format($pc,2)}}
                        </span>
                    </div>

                {{-- ------------------------------------ --}}
                {{-- SEGUNDA ITERACION DE TODO EL PROCESO --}}
                {{-- ------------------------------------ --}}

                {{-- ANCHO DE CARA NORMALIZADO --}}
                    <div class="flex flex-col items-center">
                        <label for="">Ancho de Cara (Normalizado)<b>(Fn)</b></label>
                        <div class="flex">
                            <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="fn" wire:model="fn">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div>
                    </div>
                {{-- KO --}}
                    <div class="flex flex-col items-center">
                        <label for="">Ko <b>(Ko)</b></label>
                        <div class="flex">
                            <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ko" wire:model="ko">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div>
                    </div>
                {{-- CALCULO DE KV 1 --}}
                    @php
                        if ($qv && $v) {
                            $b = 0.25 * (pow((12 - $qv), (2/3) ));
                            $a = (50 + (56*(1-$b)) );
                            $kv1 = pow((($a + sqrt(200*$v))/$a),$b);
                        }
                    @endphp
                {{-- KV 1 --}}
                    <div class="flex flex-col items-center">
                        <label for="">Kv segunda iteracion <b>(kv)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="kv1" wire:model="kv1">
                            {{number_format($kv1,2)}}
                        </span>
                    </div>
                {{-- CALCULO DE KS --}}
                    @php
                        if ($fn && $y && $modulo) {
                            $ks = 1.192 * pow((($fn*sqrt($y))/$modulo) , 0.0535);
                            if ($ks<1) {
                                $ks = 1;
                            }
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
                            if ($fn && $dp) {
                                if ($fn <= 25) {
                                    if ((($fn)/(10*$dp)) >= 0.05) {
                                        $cpf = (($fn)/(10*$dp)) - 0.025;
                                    }elseif ((($fn)/(10*$dp)) < 0.05) {
                                        $cpf = 0.05 - 0.025;
                                    }
                                }elseif ((25 < $fn) && ($fn <= 432)) {
                                    if ((($fn)/(10*$dp)) >= 0.05) {
                                        $cpf = (($fn)/(10*$dp)) - 0.0375 + (0.000492 * $fn);
                                    }elseif ((($fn)/(10*$dp)) < 0.05) {
                                        $cpf = 0.05 - 0.0375 + (0.000492 * $fn);
                                    }
                                }elseif ((432 < $fn) && ($fn <= 1020)) {
                                    if ((($fn)/(10*$dp)) >= 0.05) {
                                        $cpf = (($fn)/(10*$dp)) - 0.1109 + (0.000815 * $fn) - (0.000000353 * pow($fn,2));
                                    }elseif ((($fn)/(10*$dp)) < 0.05) {
                                        $cpf = 0.05 - 0.1109 + (0.000815 * $fn) - (0.000000353 * pow($fn,2));
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
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="a1" wire:model="a1">
                    </div>
                {{-- CMA B --}}
                    <div class="flex flex-col items-center">
                        <label for="">Cma <b>(B)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="b1" wire:model="b1">
                    </div>
                {{-- CMA C --}}
                    <div class="flex flex-col items-center">
                        <label for="">Cma <b>(C)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="c1" wire:model="c1">
                    </div>
                {{-- CALCULO Y RESULTADO CMA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Cma <b>(Cma)</b></label>
                        <div class="flex">
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="cma" wire:model="cma">
                                @php
                                    if ($a1 && $b1 && $c1 && $fn) {
                                        $cma = $a1 + ($b1 * $fn) + ($c1 * (pow($fn,2)));
                                    }
                                @endphp
                                {{number_format($cma,2)}}
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
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="mb" wire:model="mb">
                    </div>
                {{-- FACTOR DE ESPESOR DE ARO KB --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Espesor de Aro <b>(Kb)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="kb" wire:model="kb">
                            @php
                                if ($mb && ($mb<1.2)) {
                                    $kb = 1.6*log(2.242/$mb);
                                }elseif ($mb && ($mb>=1.2)) {
                                    $kb = 1;
                                }
                            @endphp
                            {{number_format($kb,3)}}
                        </span>
                    </div>
                {{-- Jp --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Geometrico Piñon <b>(Jp)</b></label>
                        <div class="flex">
                            <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="jp" wire:model="jp">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div> 
                    </div>
                {{-- ESFUERZO DE FLEXION PARA EL PIÑON OP --}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de Flexion (Piñon)<b>(Op)</b></label>
                        <div class="flex">
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="op" wire:model="op">
                                @php
                                    if ($wt && $ko && $kv1 && $ks && $modulo && $fn && $km && $kb && $jp) {
                                    $op = ($wt) * ($ko) * ($kv1) * ($ks) * (1/($fn * $modulo)) * (($km * $kb)/$jp);
                                    }
                                @endphp
                                {{number_format($op,3)}}
                            </span>  
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a> 
                        </div> 
                    </div>
                {{-- CALCULO DEL FACTOR DE SEGURIDAD YNP --}}
                    <div class="flex flex-col items-center">
                        <label for="">YNP <b>(Ynp)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ynp" wire:model="ynp">
                    </div>
                {{-- KT --}}
                    <div class="flex flex-col items-center">
                        <label for="">KT <b>(Kt)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="kt" wire:model="kt">
                    </div>
                {{-- KR --}}
                    <div class="flex flex-col items-center">
                        <label for="">KR <b>(Kr)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="kr" wire:model="kr">
                    </div>
                {{-- SFP --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Seguridad<b>(Sfp)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="sfp" wire:model="sfp">
                            @php
                                if ($st && $op && $kt && $kr && $ynp) {
                                    $sfp = ($st * $ynp) / ($op * $kt * $kr);
                                }
                            @endphp
                            {{number_format($sfp,2)}}
                        </span>
                    </div>
                
                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">DISEÑO APLICANDO AGMA 2101 D04 FLEXION (CORONA)</div>

                {{-- ------------------------------------ --}}
                {{----------- TERCERA ITERACCION -----------}}
                {{-- ------------------------------------ --}}
                
                {{-- JG --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Geometrico Engrane <b>(Jg)</b></label>
                        <div class="flex">
                            <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="jg" wire:model="jg">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div> 
                    </div>
                {{-- ESFUERZO DE FLEXION PARA EL PIÑON OP --}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de Flexion (Engrane)<b>(Og)</b></label>
                        <div class="flex">
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="og" wire:model="og">
                                @php
                                    if ($jp && $op && $jg) {
                                        $og = ($op/$jg) * $jp;
                                    }
                                @endphp
                                {{number_format($og,3)}}
                            </span>  
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/espoch.png') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a> 
                        </div> 
                    </div>
                {{--RESITENCIA A LA FLEXION SELECT STG --}}
                    <div class="flex flex-col col-span-2">
                        <label for="">Resistencia a la Flexion <b>(Stg)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionflexion3" name="opcionflexion3" type="radio" value="1"/>
                            <label for="">Aceros completamente endurecidos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionflexion3" name="opcionflexion3" type="radio" value="2"/>
                            <label for="">Aceros nitrurados completamente endurecidos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionflexion3" name="opcionflexion3" type="radio" value="3"/>
                            <label for="">Acero nitrurado</label>
                        </div>
                        @php
                            if ($opcionflexion3==1) {
                                $stg = (0.533 * $hbg) + 88.3;
                            }elseif ($opcionflexion3==2){
                                $stg = (0.568 * $hbg) + 83.8;
                            }elseif ($opcionflexion3==3){
                                $stg = (0.594 * $hbg) + 87.76;
                            }
                        @endphp
                    </div>
                {{-- CALCULO DEL FACTOR DE SEGURIDAD YNP --}}
                    <div class="flex flex-col items-center">
                        <label for="">YNG <b>(Yng)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="yng" wire:model="yng">
                    </div>
                {{-- SFG --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Seguridad<b>(Sfg)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="sfg" wire:model="sfg">
                            @php
                                if ($stg && $og && $kt && $kr && $yng) {
                                    $sfg = ($stg * $yng) / ($og * $kt * $kr);
                                }
                            @endphp
                            {{number_format($sfg,2)}}
                        </span>
                    </div>

                    <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">DISEÑO APLICANDO AGMA 2101 D04 DESGASTE SUPERFICIAL</div>
                {{-- ------------ --}}
                {{-- ULTIMA PARTE --}}
                {{-- ------------ --}}

                {{-- COEFICIENTE ELEASTICO Ze --}}
                    <div class="flex flex-col items-center">
                        <label for="">ZE <b>(Ze)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ze" wire:model="ze">
                    </div>
                {{-- FACTOR DE CONDICION SUPERFICIAL ZR --}}
                    <div class="flex flex-col items-center">
                        <label for="">ZR <b>(Zr)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="zr" wire:model="zr">
                    </div>
                {{-- FACTOR GEOMETRICO ZI --}}
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
                {{-- CALCULO FACTOR GEOMETRICO ZI--}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Geometrico ZI <b> (ZI)</b></label>
                        @php
                            $mn = 1;
                            if ($opcionfactorgeometrico==1 && $grados && $i) {
                                $zi = ((cos($grados)*sin($grados))/(2*$mn)) * ($i/($i+1));
                            }elseif ($opcionfactorgeometrico==2 && $grados && $i){
                                $zi = ((cos($grados)*sin($grados))/(2*$mn)) * ($i/($i-1));
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="zi" wire:model="zi">
                            {{number_format($zi,2)}}
                        </span>
                    </div>
                {{-- CALCULO DEL ESFUERZO DE CONTACTODEL PIÑON Y CORONA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de Contacto <b> (OC)</b></label>
                        @php
                            
                            if ($ze && $wt && $ko && $kv1 && $ks && $km && $dp && $zr && $zi) {
                                $ocp = $ze * (pow($wt * $ko * $kv1 * $ks * ($km/($dp*$fn)) * ($zr/$zi), (1/2)));
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ocp" wire:model="ocp">
                            {{number_format($ocp,2)}}
                        </span>
                    </div>
                {{-- ********************************************* --}}
                
                {{-- CALCULO DEL FACTOR DE SEGURIDAD DE DESGASTE DEL PINON --}}
                    <div class="flex flex-col items-center">
                        <label for="">ZNP PIÑON<b>(Znp)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="znp" wire:model="znp">
                    </div>
                {{-- FACTOR DE DUREZA PARA EL PIÑON SIEMPRE = 1 --}}
                    <div class="flex flex-col items-center">
                        <label for="">CHP <b>(CHp)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="chp" wire:model="chp">
                    </div>
                {{-- RESISTENCIA ADMISIBLE DE DESGASTE SUPERFICIAL --}}
                    <div class="flex flex-col items-center">
                        <label for="">Resistencia de Desgaste (SCp)<b> (Scp)</b></label>
                        @php
                            if ($hbp) {
                                $scp = (2.22 * $hbp) + 200;
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="scp" wire:model="scp">
                            {{number_format($scp,2)}}
                        </span>
                    </div>
                {{-- CALCULO DE SEGURIDAD AL DESGASTE DEL PIÑON --}}
                    <div class="flex flex-col items-center">
                        <label for="">SHP <b> (SHp)</b></label>
                        @php
                            if ($scp && $znp && $chp && $ocp && $kt && $kr) {
                                $shp = ($scp * $znp * $chp)/($ocp * $kt * $kr);
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="shp" wire:model="shp">
                            {{number_format($shp,3)}}
                        </span>
                    </div>

                {{-- ********************************************* --}}
                
                {{-- CALCULO DEL FACTOR DE SEGURIDAD DE DESGASTE DEL PINON --}}
                    <div class="flex flex-col items-center">
                        <label for="">ZNG Engrane<b>(Zng)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="zng" wire:model="zng">
                    </div>
                {{-- FACTOR DE DUREZA PARA EL ENGRANE --}}
                    <div class="flex flex-col items-center">
                        <label for="">CHG <b>(Chg)</b></label>
                        @php
                            if ($hbg && $hbp) {
                                if (($hbp/$hbg) < 1.2) {
                                    $aprima = 0;
                                    $chg = 1.0 + ($aprima * ($i - 1.0));
                                }elseif (($hbp/$hbg) > 1.7) {
                                    $aprima = 0.00698;
                                    $chg = 1.0 + ($aprima * ($i - 1.0));
                                }elseif ((($hbp/$hbg) >= 1.2) && (($hbp/$hbg) <= 1.7)) {
                                    $aprima = (8.98 * 0.001) * ($hbp/$hbg) - (8.29 * 0.001);
                                    $chg = 1.0 + ($aprima * ($i - 1.0));
                                }
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="chg" wire:model="$chg">
                            {{number_format($chg,3)}}
                        </span>    
                    </div>
                {{-- RESISTENCIA ADMISIBLE DE DESGASTE SUPERFICIAL --}}
                    <div class="flex flex-col items-center">
                        <label for="">Resistencia de Desgaste (SCg)<b> (Scg)</b></label>
                        @php
                            if ($hbp) {
                                $scg = (2.22 * $hbg) + 200;
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="scg" wire:model="scg">
                            {{number_format($scg,2)}}
                        </span>
                    </div>
                {{-- CALCULO DE SEGURIDAD AL DESGASTE DEL PIÑON --}}
                    <div class="flex flex-col items-center">
                        <label for="">SHG <b> (SHg)</b></label>
                        @php
                            if ($scg && $zng && $chg && $ocp && $kt && $kr) {
                                $shg = ($scg * $zng * $chg)/($ocp * $kt * $kr);
                            }
                        @endphp
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="shg" wire:model="shg">
                            {{number_format($shg,3)}}
                        </span>
                    </div>
                {{-- CONDICION FINAL --}}
                    <div class="flex flex-col">
                        <label for="">Condicion del Engranaje <b></b></label>
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
                <span class="">
                    F = @if ($f && is_float($f))
                                {{number_format(($f),2)}}
                            @elseif(!is_float($f))
                                {{$f * 3}}
                            @endif
                </span>
                <span class="">
                    OP = @if ($op && is_float($op))
                                {{number_format(($op),2)}}
                            @elseif(!is_float($op))
                                {{$op * 3}}
                            @endif
                </span>
                <span class="">
                    OG = @if ($og && is_float($og))
                                {{number_format(($og),2)}}
                            @elseif(!is_float($og))
                                {{$og * 3}}
                            @endif
                </span>
                <span class="">
                    OC = @if ($ocp && is_float($ocp))
                                {{number_format(($ocp),2)}}
                            @elseif(!is_float($ocp))
                                {{$ocp}}
                            @endif
                </span>
                
                <span class="">
                    SFP = @if ($sfp && is_float($sfp))
                                {{number_format(($sfp),2)}}
                            @elseif(!is_float($sfp))
                                {{$sfp * 3}}
                            @endif
                </span>
                <span class="">
                    SFG = @if ($sfg && is_float($sfg))
                                {{number_format(($sfg),2)}}
                            @elseif(!is_float($sfg))
                                {{$sfg * 3}}
                            @endif
                </span>
                    <span class="">
                        3Pc = @if ($pc && is_float($pc))
                                    {{number_format(($pc*3),2)}}
                                @elseif(!is_float($pc))
                                    {{$pc * 3}}
                                @endif
                    </span>
                    <span class="">
                        5Pc = @if ($pc && is_float($pc))
                                    {{number_format(($pc*5),2)}}
                                @elseif(!is_float($pc))
                                    {{$pc * 5}}
                                @endif
                    </span>
                    <span class="">
                        SHP2 = @if ($shp && is_float($shp))
                                    {{number_format((pow($shp,2)),2)}}
                                @elseif(!is_float($shp))
                                    {{pow($shp,2)}}
                                @endif
                    </span>
                    <span class="">
                        SHG2 =  @if ($shg && is_float($shg))
                                    {{number_format((pow($shg,2)),2)}}
                                @elseif(!is_float($shg))
                                    {{pow($shg,2)}}
                                @endif
                    </span>
                    <span class="">
                        SHP3 = @if ($shp && is_float($shp))
                                    {{number_format((pow($shp,3)),2)}}
                                @elseif(!is_float($shp))
                                    {{pow($shp,3)}}
                                @endif
                    </span>
                    <span class="">
                        SHG3 =  @if ($shg && is_float($shg))
                                    {{number_format((pow($shg,3)),2)}}
                                @elseif(!is_float($shg))
                                    {{pow($shg,3)}}
                                @endif
                    </span>
               </div>
            </aside>

            {{-- --------------------------------------- --}}
            {{-- VALIDACIONES Y MENSAJES PARA EL USUARIO --}}
            {{-- --------------------------------------- --}}

            {{-- MENSAJES DE VALIDACIONES Y CONDICIONES PRIMERA ITERACCION --}}
                    @php
                        $anchoaprobado = 0;
                        if (($f > 0) && ($pc>0)) {
                            if (((3*$pc) < $f) && ($f < (5*$pc))) {
                                $anchoaprobado = 1;
                                echo '<script>alert ("Ancho de cara aceptable diametro de paso << '.$dp.' >> ");</script>';
                            }else {
                                $anchoaprobado = 2;
                                echo '<script>alert ("Cambiar el diametro de paso << '.$dp.' >> ");</script>';
                            }
                        } 
                    @endphp
                    @if ($anchoaprobado == 1)
                        <div class="fixed right-16 bottom-64 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                            <span class="text-green-500">Ancho de cara aceptable</span>
                        </div>
                    @elseif($anchoaprobado == 2)
                        <div class="fixed right-16 bottom-64 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                            <span class="text-red-500">Cambiar el diametro de paso</span>
                        </div>
                    @endif
            {{-- MENSAJES DE VALIDACIONES Y CONDICIONES SEGUNDA ITERACCION--}}
                    @php
                        $factorseguridad = 0;
                        if (($sfp > 0) && ($ns > 0)) {
                            if ($sfp > $ns) {
                                $factorseguridad = 1;
                                $anchoaprobado == 0;
                                echo '<script>alert ("Ancho de cara normalizado aceptable");</script>';
                            }else {
                                $factorseguridad = 2;
                                $anchoaprobado == 0;
                                echo '<script>alert ("Cambiar el ancho de cara normalizado");</script>';
                            }
                        } 
                    @endphp
                    @if ($factorseguridad == 1)
                        <div class="fixed right-16 bottom-64 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                            <span class="text-green-500">El factor de seguridad cumple</span>
                        </div>
                    @elseif($factorseguridad == 2)
                        <div class="fixed right-16 bottom-64 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                            <span class="text-red-500">Cambiar el ancho de cara normalizado</span>
                        </div>
                    @endif
                        
            {{-- MENSAJES DE VALIDACIONES Y CONDICIONES TERCERA ITERACCION--}}
                    @php
                        $factorseguridadcorona = 0;
                        if (($sfg > 0) && ($ns > 0)) {
                            if ($sfg > $ns) {
                                $factorseguridadcorona = 1;
                                $factorseguridad == 0;
                                echo '<script>alert ("El factor de seguridad si cumple");</script>';
                            }else {
                                $factorseguridadcorona = 2;
                                $factorseguridad == 0;
                                echo '<script>alert ("Cambiar el HBg para recalcular Stg y Yng");</script>';
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

            {{-- MENSAJES DE VALIDACIONES Y CONDICIONES CUARTA ITERACCION--}}
                @php
                    $condicionmensajefinal=0;
                    if ($opcioncoronado == 1) {

                        $valorcoronado1 = 0;
                        $valorcoronado2 = 0;
                        $valorcoronado1 = pow($shp,3);
                        $valorcoronado2 = pow($shg,3);

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
                            $valornocoronado1 = pow($shp,2);
                            $valornocoronado2 = pow($shg,2);

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
    <input type='hidden' name='v' value='<?php echo "$v";?>'/> 
    <input type='hidden' name='wt' value='<?php echo "$wt";?>'/> 
    <input type='hidden' name='kv' value='<?php echo "$kv";?>'/> 
    <input type='hidden' name='st' value='<?php echo "$st";?>'/> 
    <input type='hidden' name='y' value='<?php echo "$y";?>'/> 
    <input type='hidden' name='o' value='<?php echo "$o";?>'/> 
    <input type='hidden' name='fn' value='<?php echo "$fn";?>'/> 
    <input type='hidden' name='op' value='<?php echo "$op";?>'/> 
    <input type='hidden' name='ko' value='<?php echo "$ko";?>'/> 
    <input type='hidden' name='kv1' value='<?php echo "$kv1";?>'/> 
    <input type='hidden' name='ks' value='<?php echo "$ks";?>'/> 
    <input type='hidden' name='km' value='<?php echo "$km";?>'/> 
    <input type='hidden' name='cmc' value='<?php echo "$cmc";?>'/> 
    <input type='hidden' name='cpf' value='<?php echo "$cpf";?>'/> 
    <input type='hidden' name='cpm' value='<?php echo "$cpm";?>'/> 
    <input type='hidden' name='cma' value='<?php echo "$cma";?>'/> 
    <input type='hidden' name='ce' value='<?php echo "$ce";?>'/> 
    <input type='hidden' name='kb' value='<?php echo "$kb";?>'/>
    <input type='hidden' name='jp' value='<?php echo "$jp";?>'/>  
    <input type='hidden' name='sfp' value='<?php echo "$sfp";?>'/> 
    <input type='hidden' name='kr' value='<?php echo "$kr";?>'/> 
    <input type='hidden' name='ynp' value='<?php echo "$ynp";?>'/> 
    <input type='hidden' name='og' value='<?php echo "$og";?>'/> 
    <input type='hidden' name='jg' value='<?php echo "$jg";?>'/> 
    <input type='hidden' name='sfg' value='<?php echo "$sfg";?>'/>
    <input type='hidden' name='kr' value='<?php echo "$kr";?>'/>  
    <input type='hidden' name='yng' value='<?php echo "$yng";?>'/>
    <input type='hidden' name='opcionflexion3' value='<?php echo "$opcionflexion3";?>'/>
    <input type='hidden' name='ocp' value='<?php echo "$ocp";?>'/>
    <input type='hidden' name='ze' value='<?php echo "$ze";?>'/>  
    <input type='hidden' name='zi' value='<?php echo "$zi";?>'/>
    <input type='hidden' name='shp' value='<?php echo "$shp";?>'/>
    <input type='hidden' name='znp' value='<?php echo "$znp";?>'/> 
    <input type='hidden' name='scp' value='<?php echo "$scp";?>'/>       
    <input type='hidden' name='shg' value='<?php echo "$shg";?>'/> 
    <input type='hidden' name='zng' value='<?php echo "$zng";?>'/>   
    <input type='hidden' name='scg' value='<?php echo "$scg";?>'/>  
    <input type='hidden' name='chg' value='<?php echo "$chg";?>'/>  

</form>
</div>
