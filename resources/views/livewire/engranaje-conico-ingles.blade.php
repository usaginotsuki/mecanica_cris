@inject('proceso','App\Http\Livewire\EngranajeConicoIngles')

<div class="p-2 md:p-6 h-auto bg-white rounded-lg text-neutral-600">
    <div class="flex justify-center text-gray-800 uppercase font-bold">
        <span>Engranajes Conicos (Ingles)</span>
    </div>
    <input class="ml-16 px-3 py-3 rounded-full bg-blue-600 hover:bg-blue-800 cursor-pointer text-white" type="button"  value="Imprimir" onclick="window.open('pdf-conicos-ingles', '_blank')" />
    <hr>
    <form action="{{url('pdf-conicos-ingles')}}" method="POST" target="_blank">
        @csrf
        <input type="submit">
    <div>   
        <div class="flex mt-10">
            <main class="w-full md:w-3/4 grid grid-cols-2 md:grid-cols-4 text-sm gap-y-3">
                
                {{-- ------------------------------------ --}}
                {{-- PRIMERA ITERACION DE TODO EL PROCESO --}}
                {{-- ------------------------------------ --}}

                {{-- Calidad para engranajes Qv --}}
                    <div class="flex flex-col items-center">
                        <label for="">Calidad de engranaje <b>(Qv)</b></label>
                        <select name="Qv" class="mb-2 block w-36 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Qv" name="Qv">
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
                {{-- Potencia en P --}}
                    <div class="flex flex-col items-center">
                        <label for="">Potencia (HP) <b>(P)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="P" name="P">
                    </div>
                {{-- REVOLUCION DEL PIÑON RPMc --}}
                    <div class="flex flex-col items-center">
                        <label for="">Revolucion del Piñon <b> (RPMp)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="RPMp" name="RPMp">
                    </div>
                {{-- REVOLUCION DE LA CORONA RPMp --}}
                    <div class="flex flex-col items-center">
                        <label for="">Revolucion de la Corona <b> (RPMc)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="RPMc" name="RPMc">
                    </div>
                {{-- ANCHO DE CARA F --}}
                    {{-- <div class="flex flex-col items-center">
                        <label for="">Ancho de Cara <b> (F)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="F" name="F">
                    </div> --}}
                {{-- NUMERO DE DIENTES DEL PIÑON Np--}}
                    <div class="flex flex-col items-center">
                        <label for=""># Dientes del Piñon <b> (Np)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Np" name="Np">
                    </div>
                {{-- NUMERO DE DIENTES DE LA CORONA NG --}}
                    <div class="flex flex-col items-center">
                        <label for=""># Dientes de la Corona <b> (Ng)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Ng" name="Ng">
                    </div>
                {{-- DUREZA BRINELL DEL PIÑON HBP--}}
                    <div class="flex flex-col items-center">
                        <label for="">Dureza Brinell del Piñon <b> (HBP)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="HBp" name="HBp">
                    </div>
                {{-- DUREZA BRINELL DE LA CORONA HBG--}}
                    <div class="flex flex-col items-center">
                        <label for="">Dureza Brinell de la Corona <b> (HBG)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="HBg" name="HBg">
                    </div>
                {{-- FACTOR MINIMO DE SEGURIDAD Ns--}}
                    <div class="flex flex-col items-center">
                        <label for="">Fact. Minimo de Seguridad <b> (Ns)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Ns" name="Ns">
                    </div>
                {{-- PASO DIAMETRAL Pd--}}
                    <div class="flex flex-col items-center">
                        <label for="">Paso Diametral <b> (Pd)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Pd" name="Pd">
                    </div>
                {{-- DIAMETRO DE PASO dp--}}
                    <div class="flex flex-col items-center">
                        <label for="">Diametro de Paso <b>(dp)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="dp" >
                            @php
                                if ($Np && $Pd) {
                                    $dp = $Np/$Pd;     
                                }
                            @endphp
                            
                            @if (is_float($dp))
                                {{number_format($dp,2)}}
                            @else
                                {{$dp}}
                            @endif
                        </span>
                    </div>
                {{-- VELOCIDAD --}}
                    <div class="flex flex-col items-center">
                        <label for="">Velocidad <b>(V)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="V" name="V">
                            @php
                                if ($dp && $Np) {
                                    $V = (pi() * $RPMp * $dp)/12;     
                                }
                            @endphp
                            
                            @if (is_float($V))
                                {{number_format($V,2)}}
                            @else
                                {{$V}}
                            @endif
                        </span>
                    </div>
                {{-- CARGA DE TRABAJO --}}
                    <div class="flex flex-col items-center">
                        <label for="">Carga de Trabajo <b>(Wt)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Wt" name="Wt">
                            @php
                                if ($P && $V) {
                                    $Wt = (33000 * $P)/$V;     
                                }
                            @endphp
                            
                            @if (is_float($Wt))
                                {{number_format($Wt,2)}}
                            @else
                                {{$Wt}}
                            @endif
                        </span>
                    </div>
                {{-- ANGULO DE PASO DEL PIÑON --}}
                    <div class="flex flex-col items-center">
                        <label for="">Angulo de Paso <b>(Piñon)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="anguloPP" name="anguloPP">
                            @php
                                $angulo = 0;
                                if ($Np && $Ng && $Ng > 0) {
                                    $anguloPP = atan($Np/$Ng);
                                    $angulo = ($anguloPP * 180)/pi();
                                    //$angulon = ($anguloPP * pi())/180;
                                }
                            @endphp
                            
                            @if (is_float($angulo))
                                {{number_format($angulo,2)}}
                            @else
                                {{$angulo}}
                            @endif
                        </span>
                    </div>
                {{-- ANGULO DE PASO DE LA CORONA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Angulo de Paso <b>(Corona)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="anguloPC" name="anguloPC">
                            @php
                                $angulo1 = 0;
                                if ($Np && $Ng && $Np > 0) {
                                    $anguloPC = atan($Ng/$Np);
                                    $angulo1 = ($anguloPC * 180)/pi();
                                    //$angulon = ($anguloPC * pi())/180;
                                }
                            @endphp
                            
                            @if (is_float($angulo1))
                                {{number_format($angulo1,2)}}
                            @else
                                {{$angulo1}}
                            @endif
                        </span>
                    </div>

                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">ESFUERZO DE FLEXION (PIÑON)</div>

                {{-- -------------------------------------- --}}
                {{-------- ESFUERZO DE FLEXION PIÑON ---------}}
                {{-- -------------------------------------- --}}

                {{-- CALCULO DEL ANCHO DE CARA --}}
                    @php
                        $Aprima = 0;
                        $t = 0;

                        if ($dp && $anguloPP) {
                            $Aprima = (0.3) * ($dp/(2 * sin($anguloPP)));
                            $t = 10/$Pd;

                            if ($Aprima < $t) {
                                $F = $Aprima;
                            }elseif ($t < $Aprima) {
                                $F = $t;
                            }
                        }
                        
                        
                    @endphp
                {{-- ANCHO DE CARA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Ancho de Cara <b>(F)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="F" name="F">
                            @if (is_float($F))
                                {{number_format($F,2)}}
                            @else
                                {{$F}}
                            @endif
                        </span>
                    </div>
                {{-- VERIFICAR EL ANCHO DE CARA F --}}
                    <div class="flex flex-col">
                        <label for="">Ancho de Cara Normalizado <b>(F)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionf" name="opcionf" type="radio" value="1"/>
                            <label for="">Ancho de cara aceptable</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionf" name="opcionf" type="radio" value="2"/>
                            <label for="">Normalizar ancho de cara</label>
                        </div>
                    </div>
                    @if ($opcionf == 1)
                        @php
                            $Fn = $F;
                        @endphp
                    @elseif($opcionf == 2)
                        {{-- ANCHO DE CARA NORMALIZADO --}}
                        <div class="flex flex-col items-center">
                            <label for="">Ancho de Cara Normalizada <b> (Fn)</b></label>
                            <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Fn" name="Fn">
                        </div>
                    @endif    
                {{-- FACTOR DE SOBRECARGA Ko--}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de sobrecarga <b> (Ko)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Ko" name="Ko">
                    </div>
                {{-- CALCULO DEL FACTOR DE VELOCIDAD Kv --}}
                    @php
                        $aa=0;
                        $bb=0;
                        
                        if ($Qv && $V) {
                            $bb = 0.25 * (pow((12 - $Qv), (2/3) ));
                            $aa = (50 + (56*(1-$bb)) );

                            $Vmax = pow(($aa + ($Qv - 3)), 2);

                            if ($V < $Vmax) {
                                $Kv = pow((($aa + sqrt($V))/$aa),$bb);
                            }else{
                                $Kv = 0;
                                echo '<script>alert ("Cambiar la calidad");</script>';
                            } 
                        }
                    @endphp
                {{-- FACTOR DE VELOCIDAD Kv --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de velocidad<b>(kv)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Kv" name="Kv">
                            @if (is_float($Kv))
                                {{number_format($Kv,2)}}
                            @else
                                {{$Kv}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR DE TAMAÑO Ks--}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Tamaño <b>(Ks)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Ks" name="Ks">
                            @php
                                if ($Pd) {
                                    if ((0.5 <= $Pd) && ($Pd <= 16)) {
                                        $Ks = 0.4867 + (0.2132/$Pd);
                                    }elseif ($Pd > 16) {
                                        $Ks = 0.5;
                                    }
                                }
                            @endphp
                            
                            @if (is_float($Ks))
                                {{number_format($Ks,2)}}
                            @else
                                {{$Ks}}
                            @endif
                        </span>
                    </div>
                {{-- SELECCION DE LA VARIABLE KMB --}}
                    <div class="flex flex-col">
                        <label for="">KMB <b>(Kmb)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Kmb" name="Kmb" type="radio" value="1"/>
                            <label for="">Ambos miembros</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Kmb" name="Kmb" type="radio" value="1.1"/>
                            <label for="">Un miembro</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Kmb" name="Kmb" type="radio" value="1.25"/>
                            <label for="">Ningun miembro</label>
                        </div>
                    </div> 
                {{-- FACTOR DE DISTRIBUCION DE CARGA KM--}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Distribucion Carga <b>(Km)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Km" name="Km">                            
                            @php
                                if ($Fn) {
                                    $Km = $Kmb + (0.0036 * pow($Fn, 2));
                                }
                            @endphp
                            @if (is_float($Km))
                                {{number_format($Km,2)}}
                            @else
                                {{$Km}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR DE CURVATURA Kx--}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de curvartura <b> (Kx)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Kx" name="Kx">
                    </div>
                {{-- FACTOR GEOMETRICO Jp--}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Geometrico Piñon<b> (Jp)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Jp" name="Jp">
                    </div>
                {{-- ESFUERZO DE FLEXION Op --}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de Flexion<b>(Op)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Op" name="Op">
                            @php
                                if ($Wt && $Ko && $Kv && $Ks && $Km && $Kx && $Jp && $Fn && $Pd) {
                                    $Op = ($Wt/$Fn) * $Pd * $Ko * $Kv * (($Ks * $Km)/($Kx * $Jp)); 
                                }
                            @endphp
                            @if (is_float($Op))
                                {{number_format($Op,2)}}
                            @else
                                {{$Op}}
                            @endif
                        </span>
                    </div>
                
                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">ESFUERZO DE FLEXION (CORONA)</div>

                {{-- -------------------------------------- --}}
                {{-------- ESFUERZO DE FLEXION CORONA --------}}
                {{-- -------------------------------------- --}}

                {{-- FACTOR GEOMETRICO Jc--}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Geometrico Corona<b> (Jc)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Jc" name="Jc">
                    </div>                    
                {{-- ESFUERZO DE FLEXION Oc --}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de Flexion Corona<b>(Oc)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Oc" name="Oc">
                            @php
                                if ($Jc && $Op && $Jp) {
                                    $Oc = ($Op/$Jc)*$Jp; 
                                }
                            @endphp
                            @if (is_float($Oc))
                                {{number_format($Oc,2)}}
                            @else
                                {{$Oc}}
                            @endif
                        </span>
                    </div>
                
                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">ESFUERZO PERMISIBLE A FLEXION (PIÑON)</div>

                {{-- ----------------------------------------------- --}}
                {{------ ESFUERZO PERMISIBLE A FLEXION DEL PIÑON-------}}
                {{-- ----------------------------------------------- --}}
                
                {{-- Sf --}}
                    <div class="flex flex-col items-center">
                        <label for="">SF<b>(SF)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="SF" name="SF">
                            @php
                                if ($Ns) {
                                    $SF = $Ns; 
                                }
                            @endphp
                            @if (is_float($SF))
                                {{number_format($SF,2)}}
                            @else
                                {{$SF}}
                            @endif
                        </span>
                    </div>
                {{-- NL--}}
                    <div class="flex flex-col items-center">
                        <label for="">NL<b> (NL)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="NL" name="NL">
                    </div> 
                {{-- FACTOR DE CICLOS DE RESISTENCIA A LA FLEXION KL --}}
                    <div class="flex flex-col items-center">
                        <label for="">KL<b>(KL)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KL" name="KL">
                            @php
                                if ($NL) {
                                    if ((100 <= $NL) && ($NL < 1000)) {
                                        $KL =2.7;
                                    } elseif ((1000 <= $NL) && ($NL < 3000000)) {
                                        $KL =6.1514 * (1/pow($NL, 0.1182));
                                    }elseif ((3000000 <= $NL) && ($NL <= 10000000000)) {
                                        $KL = 1.6831 * (1/pow($NL, 0.0323));
                                    }/* elseif ((10000000000 <= $NL) && ($NL < 10000)) {
                                        $KL =;
                                    } */
                                }
                            @endphp
                            @if (is_float($KL))
                                {{number_format($KL,2)}}
                            @else
                                {{$KL}}
                            @endif
                        </span>
                    </div>
                {{-- TEMPERATURA--}}
                    <div class="flex flex-col items-center">
                        <label for="">Temperatura <b> (fahrenheit)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="temperatura" name="temperatura">
                    </div>                     
                {{-- KT --}}
                    <div class="flex flex-col items-center">
                        <label for="">KT<b>(KT)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KT" name="KT">
                            @php
                                if ($temperatura) {
                                    if ((32 <= $temperatura) && ($temperatura <= 250)) {
                                        $KT = 1;
                                    }elseif ($temperatura > 250) {
                                        $KT = (460 + $temperatura) / 710;
                                    } 
                                }
                            @endphp
                            @if (is_float($KT))
                                {{number_format($KT,2)}}
                            @else
                                {{$KT}}
                            @endif
                        </span>
                    </div>
                {{-- CONFIABILIDAD R--}}
                    <div class="flex flex-col items-center">
                        <label for="">Confiabilidad <b> (R)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model.lazy="R" name="R">
                    </div>
                {{-- KR --}}
                    <div class="flex flex-col items-center">
                        <label for="">KR<b>(KR)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KR" name="KR">
                            @php
                                if ($R) {
                                    if ($R >= 0.9) {
                                        if ((0.99 <= $R) && ($R < 0.999)) {
                                            $KR = 1;
                                        }elseif ((0.9 <= $R) && ($R < 0.99)) {
                                            $KR = (460 + $R) / 710;
                                        } 
                                    } else {
                                        echo '<script>alert ("Ingresar un valor de R mayor o igual a 0.99");</script>';
                                    }
                                }
                            @endphp
                            @if (is_float($KR))
                                {{number_format($KR,2)}}
                            @else
                                {{$KR}}
                            @endif
                        </span>
                    </div>
                {{-- SATP --}}
                    <div class="flex flex-col">
                        <label for="">SAT <b>(Sat)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionsat" name="opcionsat" type="radio" value="1"/>
                            <label for="">Aceros completamente endurecidos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionsat" name="opcionsat" type="radio" value="2"/>
                            <label for="">Otro material</label>
                        </div>
                        @php
                            $opcionotros=0;
                            if ($opcionsat == 1) {
                                $SATp = (44 * $HBp) + 2100;
                                $opcionotros=0;
                            } elseif ($opcionsat == 2) {
                                $opcionotros=1;
                            }
                        @endphp
                    </div> 
                {{-- SATP--}}
                    @if ($opcionotros==1)
                        <div class="flex flex-col items-center">
                            <label for="">SAT <b> (SATp)</b></label>
                            <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="SATp" name="SATp">
                        </div>
                    @endif
                {{-- OPP --}}
                    <div class="flex flex-col items-center">
                        <label for="">OPP<b>(OPP)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="OPP" name="OPP">
                            @php
                                if ($SATp && $KL && $SF && $KT && $KR) {
                                    $OPP = ($SATp * $KL) / ($SF * $KT * $KR); 
                                }
                            @endphp
                            @if (is_float($OPP))
                                {{number_format($OPP,2)}}
                            @else
                                {{$OPP}}
                            @endif
                        </span>
                    </div>

                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">ESFUERZO PERMISIBLE A FLEXION (CORONA)</div>

                {{-- ------------------------------------------------ --}}
                {{------ ESFUERZO PERMISIBLE A FLEXION DEL CORONA-------}}
                {{-- ------------------------------------------------ --}}
                
                {{-- SATC --}}
                    <div class="flex flex-col">
                        <label for="">SAT <b>(SATc)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionsatc" name="opcionsatc" type="radio" value="1"/>
                            <label for="">Aceros completamente endurecidos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionsatc" name="opcionsatc" type="radio" value="2"/>
                            <label for="">Otro material</label>
                        </div>
                        @php
                            $opcionotros1=0;
                            if ($opcionsatc == 1) {
                                $SATc = (44 * $HBg) + 2100;
                                $opcionotros1=0;
                            } elseif ($opcionsatc == 2) {
                                $opcionotros1=1;
                            }
                        @endphp
                    </div>
                {{-- SATC--}}
                    @if ($opcionotros1==1)
                        <div class="flex flex-col items-center">
                            <label for="">SAT <b> (SATc)</b></label>
                            <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="SATc" name="SATc">
                        </div>
                    @endif
                {{-- OPC --}}
                    <div class="flex flex-col items-center">
                        <label for="">OPC<b>(OPC)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="OPC" name="OPC">
                            @php
                                if ($SATc && $KL && $SF && $KT && $KR) {
                                    $OPC = ($SATc * $KL) / ($SF * $KT * $KR); 
                                }
                            @endphp
                            @if (is_float($OPC))
                                {{number_format($OPC,2)}}
                            @else
                                {{$OPC}}
                            @endif
                        </span>
                    </div>

                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">FACTOR DE SEGURIDAD PIÑON</div>
                {{-- ---------------------------------------------------- --}}
                {{------------- FACTOR DE SEGURIDAD PIÑON SFP --------------}}
                {{-- ---------------------------------------------------- --}}

                {{-- SFP --}}
                    <div class="flex flex-col items-center">
                        <label for="">SFP<b>(SFP)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="SFP" name="SFP">
                            @php
                                if ($Ns && $OPP && $Op) {
                                    $SFP = $Ns * ($OPP/$Op); 
                                }
                            @endphp
                            @if (is_float($SFP))
                                {{number_format($SFP,2)}}
                            @else
                                {{$SFP}}
                            @endif
                        </span>
                    </div>

                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">FACTOR DE SEGURIDAD CORONA</div>
                {{-- ---------------------------------------------------- --}}
                {{------------- FACTOR DE SEGURIDAD CORONA SFC -------------}}
                {{-- ---------------------------------------------------- --}}

                {{-- SFC --}}
                    <div class="flex flex-col items-center">
                        <label for="">SFC<b>(SFC)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="SFC" name="SFC">
                            @php
                                if ($Ns && $OPC && $Oc) {
                                    $SFC = $Ns * ($OPC/$Oc); 
                                }
                            @endphp
                            @if (is_float($SFC))
                                {{number_format($SFC,2)}}
                            @else
                                {{$SFC}}
                            @endif
                        </span>
                    </div>
                
                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">ESFUERZO DE CONTACTO</div>
                {{-- ---------------------------------------------------- --}}
                {{----------------- ESFUERZO DE CONTACTO  ------------------}}
                {{-- ---------------------------------------------------- --}}

                {{-- CP --}}
                    <div class="flex flex-col items-center">
                        <label for="">CP <b> (CP)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="CP" name="CP">
                    </div>
                {{-- I --}}
                    <div class="flex flex-col items-center">
                        <label for="">I <b> (I)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="I" name="I">
                    </div>
                {{-- CXC --}}
                    <div class="flex flex-col">
                        <label for="">CXC <b>(Cxc)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Cxc" name="Cxc" type="radio" value="1.5"/>
                            <label for="">Coronado</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Cxc" name="Cxc" type="radio" value="2"/>
                            <label for="">No coronados</label>
                        </div>
                    </div> 
                {{-- Cs--}}
                    <div class="flex flex-col items-center">
                        <label for="">Cs <b>(Cs)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Cs" name="Cs">
                            @php
                                if ($Fn) {
                                    if ($Fn < 0.5) {
                                        $Cs = 0.5;
                                    }elseif ((0.5 <= $Fn) && ($Fn <= 4.5)) {
                                        $Cs = (0.125 * $Fn) + 0.4375;
                                    }elseif ($Fn >= 4.5) {
                                        $Cs = 1;
                                    }
                                }
                            @endphp
                            
                            @if (is_float($Cs))
                                {{number_format($Cs,2)}}
                            @else
                                {{$Cs}}
                            @endif
                        </span>
                    </div>
                {{-- OC = EC--}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de Contacto<b>(OC)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="EC" name="EC">
                            @php
                                if ($CP && $Wt && $Fn && $dp && $I && $Ko && $Kv && $Km && $Cs && $Cxc) {
                                    $EC = $CP * (pow((($Wt/($Fn*$dp*$I)) * $Ko * $Kv * $Km * $Cs * $Cxc), 0.5 )); 
                                }
                            @endphp
                            @if (is_float($EC))
                                {{number_format($EC,2)}}
                            @else
                                {{$EC}}
                            @endif
                        </span>
                    </div>
                
                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">ESFUERZO PERMISIBLE DE DESGASTE PIÑON</div>
                {{-- -------------------------------------------------------------------- --}}
                {{----------------- ESFUERZO PERMISIBLE DE DESGASTE PIÑON ------------------}}
                {{-- -------------------------------------------------------------------- --}}
                
                {{-- SAC PIÑON--}}
                    <div class="flex flex-col">
                        <label for="">SAC PIÑON<b>(SAC)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionsac" name="opcionsac" type="radio" value="1"/>
                            <label for="">Aceros completamente endurecidos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionsac" name="opcionsac" type="radio" value="2"/>
                            <label for="">Otro material</label>
                        </div>
                        @php
                            $opcionotros3=0;
                            if ($opcionsac == 1) {
                                $SAC = (341 * $HBp) + 23620;
                                $opcionotros3=0;
                            } elseif ($opcionsac == 2) {
                                $opcionotros3=1;
                            }
                        @endphp
                    </div>
                {{-- SAC PIÑON --}}
                    @if ($opcionotros3==1)
                        <div class="flex flex-col items-center">
                            <label for="">SAC PIÑON<b> (SAC)</b></label>
                            <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="SAC" name="SAC">
                        </div>
                    @endif
                {{-- SH --}}
                    <div class="flex flex-col items-center">
                        <label for="">SH<b>(SH)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="SH" name="SH">
                            @php
                                if ($Ns) {
                                    $SH = sqrt($Ns);
                                }
                            @endphp
                            @if (is_float($SH))
                                {{number_format($SH,2)}}
                            @else
                                {{$SH}}
                            @endif
                        </span>
                    </div>
                {{-- CL --}}
                    <div class="flex flex-col items-center">
                        <label for="">CL<b>(CL)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="CL" name="CL">
                            @php
                                if ($NL) {
                                    if ((1000 <= $NL) && ($NL < 10000)) {
                                        $CL = 2;
                                    }elseif ((10000 <= $NL) && ($NL < 100000000000)) {
                                        $CL = 3.4822 * (1/pow($NL,0.0602));
                                    }
                                }
                            @endphp
                            @if (is_float($CL))
                                {{number_format($CL,2)}}
                            @else
                                {{$CL}}
                            @endif
                        </span>
                    </div>
                {{-- CH --}}
                    <div class="flex flex-col items-center">
                        <label for="">CH<b>(CH)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="CH" name="CH">
                            @php
                                $B1=0;
                                $valorch1=0;
                                $valorch2=0;

                                if ($HBp && $HBg && $Np && $Ng) {
                                    if ((1.2 <= ($HBp/$HBg)) && ((($HBp/$HBg)) <= 1.7)) {
                                        $B1 = 0.00898 * ($HBp/$HBg) - 0.00829;
                                        $CH = 1 + $B1 * ($Np/($Ng - 1));
                                    }elseif ((1.2 > ($HBp/$HBg))){
                                        $CH = 1;
                                    }elseif ((($HBp/$HBg)) > 1.7) {
                                        echo '<script>alert ("Cambiar las Durezas Brinell");</script>';
                                    }
                                }
                            @endphp
                            
                            @if (is_float($CH))
                                {{number_format($CH,2)}}
                            @else
                                {{$CH}}
                            @endif
                        </span>
                    </div>
                {{-- CR --}}
                    <div class="flex flex-col items-center">
                        <label for="">CR <b> (CR)</b></label>
                        <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="CR" name="CR">
                    </div>
                {{-- KT --}}
                    <div class="flex flex-col items-center">
                        <label for="">KT<b>(KT)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="KT" name="KT">
                            @if (is_float($KT))
                                {{number_format($KT,2)}}
                            @else
                                {{$KT}}
                            @endif
                        </span>
                    </div>
                {{-- SWCP --}}
                    <div class="flex flex-col items-center">
                        <label for="">SWCP<b>(SWCP)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="SWCP" name="SWCP">
                            @php
                                if ($SAC && $SH && $CL && $CH && $CR && $KT) {
                                    $SWCP = ($SAC * $CL * $CH) / ($SH * $KT * $CR);
                                }
                            @endphp
                            @if (is_float($SWCP))
                                {{number_format($SWCP,2)}}
                            @else
                                {{$SWCP}}
                            @endif
                        </span>
                    </div>

                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">ESFUERZO PERMISIBLE DE DESGASTE CORONA</div>
                {{-- -------------------------------------------------------------------- --}}
                {{----------------- ESFUERZO PERMISIBLE DE DESGASTE CORONA -----------------}}
                {{-- -------------------------------------------------------------------- --}}

                {{-- SAC CORONA --}}
                    <div class="flex flex-col">
                        <label for="">SAC Corona<b>(SAC)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionsacc" name="opcionsacc" type="radio" value="1"/>
                            <label for="">Aceros completamente endurecidos</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="opcionsacc" name="opcionsacc" type="radio" value="2"/>
                            <label for="">Otro material</label>
                        </div>
                        @php
                            $opcionotros4=0;
                            if ($opcionsacc == 1) {
                                $SACC = (341 * $HBg) + 23620;
                                $opcionotros4=0;
                            } elseif ($opcionsacc == 2) {
                                $opcionotros4=1;
                            }
                        @endphp
                    </div>
                {{-- SAC CORONA --}}
                    @if ($opcionotros4==1)
                        <div class="flex flex-col items-center">
                            <label for="">SAC Corona<b> (SAC)</b></label>
                            <input type="number" step=".0000000000001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="SACC" name="SACC">
                        </div>
                    @endif
                {{-- SWCG CORONA --}}
                    <div class="flex flex-col items-center">
                        <label for="">SWCG Corona<b>(SWCG)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="SWCG" name="SWCG">
                            @php
                                if ($SACC && $SH && $CL && $CH && $CR && $KT) {
                                    $SWCG = ($SACC * $CL * $CH) / ($SH * $KT * $CR);
                                }
                            @endphp
                            @if (is_float($SWCG))
                                {{number_format($SWCG,2)}}
                            @else
                                {{$SWCG}}
                            @endif
                        </span>
                    </div>
                    @php
                        if ($Ns && $SWCP && $SWCG && $EC) {
                            $SHP = $Ns * pow(($SWCP/$EC),2);
                            $SHC = $Ns * pow(($SWCG/$EC),2);
                        }
                    @endphp
                    

            </main>

            {{-- ------------------------------------ --}}
            {{------ CUADRO DE VARIABLES LATERAL -------}}
            {{-- ------------------------------------ --}}
            
            <aside class="hidden md:block bg-neutral-800 border-2 border-yellow-600 rounded-lg w-72 p-4 fixed right-16">
               <div class="grid grid-cols-3 gap-4 text-xs text-neutral-200">
                    <span>
                        Qv=@if ($Qv && is_float($Qv))
                                {{number_format($Qv,2)}}
                            @elseif(!is_float($Qv))
                                {{$Qv}}
                            @endif 
                    </span>
                    <span>
                        P=@if ($P && is_float($P))
                                {{number_format($P,2)}}
                            @elseif(!is_float($P))
                                {{$P}}
                            @endif
                    </span>
                    <span>
                        RPMp=@if ($RPMp && is_float($RPMp))
                                    {{number_format($RPMp,2)}}
                                @elseif(!is_float($RPMp))
                                    {{$RPMp}}
                                @endif
                    </span>
                    <span>
                        RPMc=@if ($RPMc && is_float($RPMc))
                                    {{number_format($RPMc,2)}}
                                @elseif(!is_float($RPMc))
                                    {{$RPMc}}
                                @endif 
                    </span>
                    <span>
                        V=@if ($V && is_float($V))
                                {{number_format($V,2)}}
                            @elseif(!is_float($V))
                                {{$V}}
                            @endif 
                    </span>
                    <span>
                        Wt=@if ($Wt && is_float($Wt))
                                {{number_format($Wt,2)}}
                            @elseif(!is_float($Wt))
                                {{$Wt}}
                            @endif 
                    </span>
                    <span>
                        HBp=@if ($HBp && is_float($HBp))
                                {{number_format($HBp,2)}}
                            @elseif(!is_float($HBp))
                                {{$HBp}}
                            @endif 
                    </span>
                    <span>
                        HBg=@if ($HBg && is_float($HBg))
                                {{number_format($HBg,2)}}
                            @elseif(!is_float($HBg))
                                {{$HBg}}
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
                        SHG= @if ($SHC && is_float($SHC))
                                {{number_format($SHC,2)}}
                            @elseif(!is_float($SHC))
                                {{$SHC}}
                            @endif
                    </span>
               </div>
            </aside>

            {{-- --------------------------------------- --}}
            {{-- VALIDACIONES Y MENSAJES PARA EL USUARIO --}}
            {{-- --------------------------------------- --}}

            {{-- MENSAJES DE VALIDACIONES Y CONDICIONES TERCERA ITERACCION --}}
                    @php
                        $condicionmensajefinal=0;
                            if ($SWCP && $SWCG && $EC && $Ns) {
                                $SHP = $Ns * pow(($SWCP/$EC),2);
                                $SHC = $Ns * pow(($SWCG/$EC),2);

                                if (($SHP > $Ns) && ($SHC > $Ns)) {
                                    $condicionmensajefinal=1;
                                    echo '<script>alert ("Si cumple con todas las condiciones valores aceptables");</script>';
                                }else{
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


    <input type='hidden' name='dp' value='<?php echo "$dp";?>'/> 
    <input type='hidden' name='anguloPP' value='<?php echo "$anguloPP";?>'/> 
    <input type='hidden' name='anguloPC' value='<?php echo "$anguloPC";?>'/> 
    <input type='hidden' name='V' value='<?php echo "$V";?>'/> 
    <input type='hidden' name='Wt' value='<?php echo "$Wt";?>'/> 
    <input type='hidden' name='Op' value='<?php echo "$Op";?>'/> 
    <input type='hidden' name='Fn' value='<?php echo "$Fn";?>'/> 
    <input type='hidden' name='Ko' value='<?php echo "$Ko";?>'/> 
    <input type='hidden' name='Kv' value='<?php echo "$Kv";?>'/> 
    <input type='hidden' name='Ks' value='<?php echo "$Ks";?>'/> 
    <input type='hidden' name='Km' value='<?php echo "$Km";?>'/> 
    <input type='hidden' name='Jp' value='<?php echo "$Jp";?>'/> 
    <input type='hidden' name='OPP' value='<?php echo "$OPP";?>'/> 
    <input type='hidden' name='opcionsat' value='<?php echo "$opcionsat";?>'/> 
    <input type='hidden' name='SF' value='<?php echo "$SF";?>'/> 
    <input type='hidden' name='KL' value='<?php echo "$KL";?>'/> 
    <input type='hidden' name='KT' value='<?php echo "$KT";?>'/> 
    <input type='hidden' name='KR' value='<?php echo "$KR";?>'/> 
    <input type='hidden' name='Oc' value='<?php echo "$Oc";?>'/> 
    <input type='hidden' name='Jc' value='<?php echo "$Jc";?>'/> 
    <input type='hidden' name='OPC' value='<?php echo "$OPC";?>'/> 
    <input type='hidden' name='opcionsatc' value='<?php echo "$opcionsatc";?>'/> 
    <input type='hidden' name='SFP' value='<?php echo "$SFP";?>'/> 
    <input type='hidden' name='SFC' value='<?php echo "$SFC";?>'/> 
    <input type='hidden' name='EC' value='<?php echo "$EC";?>'/> 
    <input type='hidden' name='CP' value='<?php echo "$CP";?>'/> 
    <input type='hidden' name='I' value='<?php echo "$I";?>'/> 
    <input type='hidden' name='Cs' value='<?php echo "$Cs";?>'/> 
    <input type='hidden' name='Cxc' value='<?php echo "$Cxc";?>'/> 
    <input type='hidden' name='SWCP' value='<?php echo "$SWCP";?>'/> 
    <input type='hidden' name='opcionsac' value='<?php echo "$opcionsac";?>'/> 
    <input type='hidden' name='CL' value='<?php echo "$CL";?>'/> 
    <input type='hidden' name='CH' value='<?php echo "$CH";?>'/> 
    <input type='hidden' name='CR' value='<?php echo "$CR";?>'/> 
    <input type='hidden' name='SWCG' value='<?php echo "$SWCG";?>'/> 
    <input type='hidden' name='opcionsacc' value='<?php echo "$opcionsacc";?>'/> 
    <input type='hidden' name='SHP' value='<?php echo "$SHP";?>'/> 
    <input type='hidden' name='SHC' value='<?php echo "$SHC";?>'/> 


</form>
    
</div>


