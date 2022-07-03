@inject('provider', 'App\Http\Controllers\latexPrint')

<div class="p-2 md:p-6 h-auto bg-white rounded-lg text-neutral-600">
    <div class="flex justify-center text-gray-800 uppercase font-bold">
        Engranajes Conicos (Metrico)
    </div>
    <input class="ml-16 px-3 py-3 rounded-full bg-blue-600 hover:bg-blue-800 cursor-pointer text-white" type="button" value="Resultados" onclick= '' />
    <hr>
    <form action="{{url('pdf-conicos-metrico')}}" method="POST" target="_blank">
        @csrf
        <input type="submit">
    <div>
        
    <div>
        <div class="flex mt-10">
            <main class="w-full md:w-3/4 grid grid-cols-2 md:grid-cols-4 text-sm gap-y-3">
                
                {{-- ------------------------------------ --}}
                {{-- PRIMERA ITERACION DE TODO EL PROCESO --}}
                {{-- ------------------------------------ --}}

                {{-- Potencia en P --}}
                    <div class="flex flex-col items-center">
                        <label for="">Potencia (KW) <b>(P)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="P" wire:model="P">
                    </div>
                {{-- RELACION DE TRANSMISION--}}
                    <div class="flex flex-col items-center">
                        <label for="">Relacion Transmision <b> (mG)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="mG" wire:model="mG">
                    </div>
                {{-- REVOLUCION DEL PIÑON RPMp --}}
                    <div class="flex flex-col items-center">
                        <label for="">Revolucion del Piñon <b> (RPMp)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="RPMp" wire:model="RPMp">
                    </div>
                {{-- NUMERO DE DIENTES DEL PIÑON Np--}}
                    <div class="flex flex-col items-center">
                        <label for=""># Dientes del Piñon <b> (Np)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Np" wire:model="Np">
                    </div>
                {{-- NUMERO DE DIENTES DE LA CORONA NG --}}
                    <div class="flex flex-col items-center">
                        <label for=""># Dientes de la Corona <b> (Ng)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Ng" wire:model="Ng">
                            @php
                                if ($Np) {
                                    $Ng = $mG * $Np;     
                                }
                            @endphp
                            
                            @if (is_float($Ng))
                                {{number_format($Ng,2)}}
                            @else
                                {{$Ng}}
                            @endif
                        </span>
                    </div>
                {{-- DUREZA BRINELL DEL PIÑON HBP--}}
                    <div class="flex flex-col items-center">
                        <label for="">Dureza Brinell del Piñon <b> (HBP)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="HBP" wire:model="HBP">
                    </div>
                {{-- DUREZA BRINELL DE LA CORONA HBG--}}
                    <div class="flex flex-col items-center">
                        <label for="">Dureza Brinell de la Corona <b> (HBG)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="HBG" wire:model="HBG">
                    </div>
                {{-- NUMERO DE CICLOS DE CARGA NL--}}
                    <div class="flex flex-col items-center">
                        <label for=""># Ciclos de Carga <b>(NL)</b></label>
                        <div class="flex">
                            <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="NL" wire:model="NL">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/conicos-metricos/Figura 15-9.JPG') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div>
                    </div>
                {{-- NUMERO DE CICLOS DE CARGA NG--}}
                    <div class="flex flex-col items-center">
                        <label for=""># Ciclos de Carga <b>(NLG)</b></label>
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="NLG" wire:model="NLG">
                                @php
                                    if ($NL && $mG) {
                                        $NLG = $NL / $mG;     
                                    }
                                @endphp
                                
                                @if (is_float($NLG))
                                    {{number_format($NLG,2)}}
                                @else
                                    {{$NLG}}
                                @endif
                            </span>
                            
                    </div>
                {{-- FACTOR DE SEGURIDAD PIÑON Ns--}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Seguridad Piñon<b> (Ns)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Ns" wire:model="Ns">
                    </div>
                {{-- FACTOR DE SEGURIDAD CORONA Ns--}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Seguridad Corona<b> (Nsg)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Nsg" wire:model="Nsg">
                    </div>
                {{-- TEMPERATURA--}}
                    <div class="flex flex-col items-center">
                        <label for="">Temperatura <b> (O) </b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="O" wire:model="O">
                    </div>
                {{-- DE GRADOS A RADIANES TEMPERATURA--}}
                    {{-- @php
                        $O = ($O * pi())/180;
                    @endphp --}}
                {{-- ANGULO NORMAL--}}
                    <div class="flex flex-col items-center">
                        <label for="">Angulo Normal <b></b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="anguloN" wire:model="anguloN">
                    </div>
                    @php
                        if ($anguloN) {
                            $anguloN = ($anguloN * pi())/180;
                        }
                    @endphp
                {{-- CONFIABILIDAD--}}
                    <div class="flex flex-col items-center">
                        <label for="">Confiabilidad <b> (R)</b></label>
                        <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="R" wire:model="R">
                    </div>
                
                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">CALCULO DE LA GEOMETRIA DEL PIÑON</div>
            
                {{-- -------------------------------------- --}}
                {{-------- ESFUERZO DE FLEXION PIÑON ---------}}
                {{-- -------------------------------------- --}}
                {{-- MODULO --}}
                    <div class="flex flex-col items-center">
                        <label for="">Modulo <b>(m)</b></label>
                        <div class="flex">
                            <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="m" wire:model="m">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/conicos-metricos/Tabla_1.JPG') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div> 
                    </div>
                {{-- PASO --}}
                    <div class="flex flex-col items-center">
                        <label for="">Paso <b>(Paso)</b></label>
                        <div class="flex">
                            <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="paso" wire:model="paso">
                                @php
                                    if ($m) {
                                        $paso = 1/$m;     
                                    }
                                @endphp
                                
                                @if (is_float($paso))
                                    {{number_format($paso,2)}}
                                @else
                                    {{$paso}}
                                @endif
                            </span>
                        </div> 
                    </div>
                {{-- DIAMETRO PRIMITIVO Dp--}}
                    <div class="flex flex-col items-center">
                        <label for="">Diametro Primitivo <b>(Dp)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Dp" wire:model="Dp">
                            @php
                                if ($Np && $m) {
                                    $Dp = $Np*$m;     
                                }
                            @endphp
                            
                            @if (is_float($Dp))
                                {{number_format($Dp,2)}}
                            @else
                                {{$Dp}}
                            @endif
                        </span>
                    </div>
                {{-- DIAMETRO EXTERIOR --}}
                    <div class="flex flex-col items-center">
                        <label for="">Diametro Exterior <b>(De)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="De" wire:model="De">
                            @php
                                if ($m && $anguloN && $Dp) {
                                    $De = (2 * $m * cos($anguloN)) + $Dp;     
                                }
                            @endphp
                            
                            @if (is_float($De))
                                {{number_format($De,2)}}
                            @else
                                {{$De}}
                            @endif
                        </span>
                    </div>
                {{-- VELOCIDAD --}}
                    <div class="flex flex-col items-center">
                        <label for="">Velocidad <b>(Vet)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Vet" wire:model="Vet">
                            @php
                                if ($Dp && $Np) {
                                    $Vet = 0.00005236 * $Dp *  $RPMp;     
                                }
                            @endphp
                            
                            @if (is_float($Vet))
                                {{number_format($Vet,2)}}
                            @else
                                {{$Vet}}
                            @endif
                        </span>
                    </div>

                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">NUMERO DE EXACTITUD DE TRANSMISION</div>
                
                {{-- -------------------------------------- --}}
                {{-------- ESFUERZO DE FLEXION PIÑON ---------}}
                {{-- -------------------------------------- --}}

                {{-- NUMERO DE EXACTITUD DE TRANSMISION Qv --}}
                    <div class="flex flex-col items-center">
                        <label for="">Exactitud de Transmision <b>(Qv)</b></label>
                        <div class="flex">
                            <select class="mb-2 block w-36 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Qv" wire:model="Qv">
                                    <option class="text-gray-400" value="0">Seleccionar</option>
                                    <option value="5">Qv = 5</option>
                                    <option value="6">Qv = 6</option>
                                    <option value="7">Qv = 7</option>
                                    <option value="8">Qv = 8</option>
                                    <option value="9">Qv = 9</option>
                                    <option value="10">Qv = 10</option>
                                    <option value="11">Qv = 11</option>
                            </select>
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/conicos-metricos/Figura 15-5.JPG') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div>
                    </div>
                    @php
                        $aa=0;
                        $bb=0;
                        if ($Qv && $Vet) {
                            $bb = 0.25 * (pow((12 - $Qv), (2/3)) );
                            $aa = (50 + (56*(1-$bb)) );
                            $Kv = pow((($aa + sqrt((200*$Vet)))/$aa),$bb);
                        }
                    @endphp
                {{-- FACTOR DINAMICO Kv --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Dinamico<b>(kv)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Kv" wire:model="Kv">
                            {{number_format($Kv,2)}}
                        </span>
                    </div>
                
                {{-- VELOCIDAD EN LA LINEA DE PASO Vetmax --}}
                    @php
                        if ($aa && $Qv) {
                            $Vetmax = (pow(($aa + ($Qv - 3)), 2))/200;
                        }
                    @endphp
                {{-- VELOCIDAD EN LA LINEA DE PASO Vetmax --}}
                    <div class="flex flex-col items-center">
                        <label for="">Velocidad linea de paso<b>(Vetmax)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Vetmax" wire:model="Vetmax">
                            @if (is_float($Vetmax))
                                {{number_format($Vetmax,2)}}
                            @else
                                {{$Vetmax}}
                            @endif
                        </span>
                    </div>
                {{-- CARGA DE TRABAJO --}}
                    <div class="flex flex-col items-center">
                        <label for="">Carga de Trabajo <b>(Wt)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="WT" wire:model="WT">
                            @php
                                if ($P && $Vet) {
                                    $WT = (1000 * $P)/$Vet;     
                                }
                            @endphp
                            
                            @if (is_float($WT))
                                {{number_format($WT,2)}}
                            @else
                                {{$WT}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR DE SOBRECARGA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Sobrecarga <b>(Ka)</b></label>
                        <div class="flex">
                            <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Ka" wire:model="Ka">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/conicos-metricos/Tabla_15-2.JPG') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div> 
                    </div>
                {{-- ANGULO DE PASO DEL PIÑON --}}
                    <div class="flex flex-col items-center">
                        <label for="">Angulo de paso <b>(Piñon)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="anguloY" wire:model="anguloY">
                            @php
                                $angulo = 0;
                                if ($P && $Vet) {
                                    $anguloY = atan($Np/$Ng);
                                    $angulo = ($anguloY * 180)/pi();    
                                }
                            @endphp
                            
                            @if (is_float($angulo))
                                {{number_format($angulo,2)}}
                            @else
                                {{$angulo}}
                            @endif
                        </span>
                    </div>
                {{-- DISTANCIA EXTERIOR AL CONO --}}
                    <div class="flex flex-col items-center">
                        <label for="">Distancia exterior Cono <b>(Ao)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Ao" wire:model="Ao">
                            @php
                                if ($Dp && $anguloY) {
                                    $Ao = $Dp/(2*sin($anguloY));
                                }
                            @endphp
                            @if (is_float($Ao))
                                {{number_format($Ao,2)}}
                            @else
                                {{$Ao}}
                            @endif
                        </span>
                    </div>
                {{-- ANCHO DE CARA --}}
                    {{-- <div class="flex flex-col items-center">
                        <label for="">Ancho de Cara <b>(b)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="b" wire:model="b">
                            @php
                                $valor1=0;
                                $valor2=0;

                                if ($Ao && $paso) {
                                    $valor1 = 0.3 * $Ao;
                                    $valor2 = 10/$paso;
                                    if ($valor1 > $valor2) {
                                        $b = $valor2;
                                    }elseif ($valor1 < $valor2) {
                                        $b = $valor1;
                                    }
                                }
                            @endphp
                            @if (is_float($b))
                                {{number_format($b,2)}}
                            @else
                                {{$b}}
                            @endif
                        </span>
                    </div> --}}
                            @php
                                $valor1=0;
                                $valor2=0;

                                if ($Ao && $paso) {
                                    $valor1 = 0.3 * $Ao;
                                    $valor2 = 10/$paso;
                                    /* if ($valor1 > $valor2) {
                                        $b = $valor2;
                                    }elseif ($valor1 < $valor2) {
                                        $b = $valor1;
                                    } */
                                }
                            @endphp
                    <div class="flex flex-col items-center">
                        <label for="">Ancho de Cara</label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionanchocara" name="opcionanchocara" type="radio" value="{{$valor1}}"/>
                            <span>{{$valor1}}</span>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opcionanchocara" name="opcionanchocara" type="radio" value="{{$valor2}}"/>
                            <span>{{$valor2}}</span>
                        </div>
                        @php
                            if ($opcionanchocara) {
                                $b = $opcionanchocara;
                            }
                        @endphp
                        <span>{{$b}}</span>
                    </div>
                {{-- FACTOR DE TAMAÑO --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Tamaño<b>(Yx)</b></label>
                        <div class="flex">
                            <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Yx" wire:model="Yx">
                                @php
    
                                    if ($m) {
                                        if ($m < 1.6) {
                                            $Yx = 0.5;
                                        }elseif ((1.6 <= $m) && ($m <= 50)) {
                                            $Yx = 0.4867 + (0.008339 * $m);
                                        }
                                    }
                                @endphp
                                @if (is_float($Yx))
                                    {{number_format($Yx,2)}}
                                @else
                                    {{$Yx}}
                                @endif
                            </span>
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/conicos-metricos/Ecuacion_15-10.JPG') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div>
                    </div>
                {{-- FACTOR DE CURVATURA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Curvatura<b>(Yb)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Yb" wire:model="Yb">
                                {{$Yb}}
                        </span>
                    </div>
                {{-- FACTOR DE DISTANCIA DE CARGA --}}
                    <div class="flex flex-col">
                        <label for="">KMB <b>(Kmb)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="Kmb" name="Kmb" type="radio" value="1"/>
                            <label for="">Ambos miembros</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model="Kmb" name="Kmb" type="radio" value="1.1"/>
                            <label for="">Un miembro</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="Kmb" name="Kmb" type="radio" value="1.25"/>
                            <label for="">Ningun miembro</label>
                        </div>
                    </div> 
                {{-- FACTOR DE DISTANCIA DE CARGA--}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Distancia Carga <b>(KHB)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="KHB" wire:model="KHB">                            
                            @php
                                if ($b && $Kmb) {
                                    $KHB = $Kmb + (5.6 * 0.0000001 * pow($b, 2));
                                }
                            @endphp
                            @if (is_float($KHB))
                                {{number_format($KHB,2)}}
                            @else
                                {{$KHB}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR DE GEOMETRIA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Geometria <b>(Yj)</b></label>
                        <div class="flex">
                            <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Yj" wire:model="Yj">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/conicos-metricos/Figura 15-7.JPG') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div> 
                    </div>
                {{-- ESFUERZO DE FLEXION DEL PIÑON--}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de flexion (Piñon) <b>(Ofp)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Ofp" wire:model="Ofp">                            
                            @php
                                if ($WT && $b && $Ka && $Kv && $m && $Yx && $KHB && $Yb && $Yj) {
                                    $Ofp = ($WT/$b) * (($Ka * $Kv) / $m) * (($Yx * $KHB)/($Yb*$Yj));
                                }
                            @endphp
                            @if (is_float($Ofp))
                                {{number_format($Ofp,2)}}
                            @else
                                {{$Ofp}}
                            @endif
                        </span>
                    </div>

                {{-- NUMERO DE ESFUERZO POR FLEXION PERMISIBLE --}}
                    <div class="flex flex-col items-center">
                        <label for="">Acero completamente endurecido</label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opciongrado" name="opciongrado" type="radio" value="1"/>
                            <label for="">Grado 1</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opciongrado" name="opciongrado" type="radio" value="2"/>
                            <label for="">Grado 2</label>
                        </div>
                    </div>
                    @php
                        if ($opciongrado==1) {
                                $Flim = (0.30 * $HBP) + 14.48;
                            } elseif ($opciongrado==2) {
                                $Flim = (0.33 * $HBP) + 41.24;
                            } 
                    @endphp
                {{-- NUMERO DE ESFUERZO POR FLEXION PERMISIBLE --}}
                    <div class="flex flex-col items-center">
                        <label for="">Flexion Permisible<b>(Flim)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Flim" wire:model="Flim">
                            {{number_format($Flim,2)}}
                        </span>
                    </div>
                {{-- FACTOR DE CICLOS DEL ESFUERZO --}}
                    <div class="flex flex-col items-center">
                        <label for="">YNT<b>(YNT)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="YNT" wire:model="YNT">
                            @php
                                if ($NL) {
                                    if ((100 <= $NL) && ($NL < 1000)) {
                                        $YNT =2.7;
                                    } elseif ((1000 <= $NL) && ($NL < 3000000)) {
                                        $YNT =6.1514 * (1/pow($NL, 0.1182));
                                    }elseif ((3000000 <= $NL) && ($NL <= 10000000000)) {
                                        $YNT = 1.6831 * (1/pow($NL, 0.0323));
                                    }/* elseif ((10000000000 <= $NL) && ($NL < 10000)) {
                                        $YNT =;
                                    } */
                                }
                            @endphp
                            @if (is_float($YNT))
                                {{number_format($YNT,2)}}
                            @else
                                {{$YNT}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR DE TEMPERATURA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Temperatura <b>(Ko)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Ko" wire:model="Ko">                            
                            @php
                                if ($O) {
                                    if ((0 <= $O) && ($O <= 120)) {
                                        $Ko = 1;
                                    }elseif ($O > 120) {
                                        $Ko = (273 + $O) / 393;
                                    }
                                }
                            @endphp
                            @if (is_float($Ko))
                                {{number_format($Ko,2)}}
                            @else
                                {{$Ko}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR DE CONFIABILIDAD --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Confiabilidad<b>(Yz)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Yz" wire:model="Yz">
                            @php
                                if ($R) {
                                    if ($R >= 0.9) {
                                        if ((0.99 <= $R) && ($R < 0.999)) {
                                            $Yz = 0.50 - (0.25 * log10(1 - $R));
                                        }elseif ((0.90 <= $R) && ($R < 0.99)) {
                                            $Yz = 0.70 - (0.15 * log10(1 - $R));
                                        } 
                                    } else {
                                        echo '<script>alert ("Ingresar un valor de R mayor o igual a 0.99");</script>';
                                    }
                                }
                            @endphp
                            @if (is_float($Yz))
                                {{number_format($Yz,2)}}
                            @else
                                {{$Yz}}
                            @endif
                        </span>
                    </div>
                {{-- ESFUERZO DE FLEXION PERMISIBLE --}}
                    <div class="flex flex-col items-center">
                        <label for="">Ofpp<b>(Ofpp)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Ofpp" wire:model="Ofpp">
                            @php
                                if ($Flim && $YNT && $Ns && $Ko && $Yz) {
                                    $Ofpp = ($Flim * $YNT) / ($Ns * $Ko * $Yz); 
                                }
                            @endphp
                            @if (is_float($Ofpp))
                                {{number_format($Ofpp,2)}}
                            @else
                                {{$Ofpp}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR DE SEGURIDAD SF --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Seguridad<b>(Sf)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Sf" wire:model="Sf">
                            @php
                                if ($Ns && $Ofpp && $Ofp) {
                                    $Sf = $Ns * ($Ofpp/$Ofp);
                                }
                            @endphp
                            @if (is_float($Sf))
                                {{number_format($Sf,2)}}
                            @else
                                {{$Sf}}
                            @endif
                        </span>
                    </div>

                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">DESGASTE SUPERFICIAL DEL PIÑON</div>

                {{-- -------------------------------------- --}}
                {{-------------- DESGASTE SUPERFICIAL --------}}
                {{-- -------------------------------------- --}}
                {{-- FACTOR DE CICLOS DE ESFUERZO DE RESISTENCIA A LA PICADURA --}}
                <div class="flex flex-col items-center">
                    <label for="">Factor de Ciclos de Esfuerzo <b>(ZNTP)</b></label>
                    <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ZNTP" wire:model="ZNTP">
                        @php
                            if ($NL) {
                                if ((1000 <= $NL) && ($NL < 10000)) {
                                    $ZNTP = 2;
                                } elseif ((10000 <= $NL) && ($NL <= 10000000000)) {
                                    $ZNTP = 3.4822 * (1/(pow($NL,0.0602)));
                                }
                                
                            }
                        @endphp
                        @if (is_float($ZNTP))
                            {{number_format($ZNTP,2)}}
                        @else
                            {{$ZNTP}}
                        @endif
                    </span>

                </div>
                
                {{-- NUMERO DE ESFUERZO POR FLEXION PERMISIBLE --}}
                    <div class="flex flex-col items-center">
                        <label for="">Acero completamente endurecido</label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opciongrado20" name="opciongrado20" type="radio" value="1"/>
                            <label for="">Grado 1</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opciongrado20" name="opciongrado20" type="radio" value="2"/>
                            <label for="">Grado 2</label>
                        </div>
                    </div>
                    @php
                        if ($opciongrado20==1) {
                                $FHlim = (2.35 * $HBP) + 162.89;
                            } elseif ($opciongrado20==2) {
                                $FHlim = (2.51 * $HBP) + 203.86;
                            } 
                    @endphp
            {{-- ESFUERZO DE COTACTO PERMISIBLE --}}
                <div class="flex flex-col items-center">
                    <label for="">Flexion Permisible<b>(FHlim)</b></label>
                    <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="FHlim" wire:model="FHlim">
                        {{number_format($FHlim,2)}}
                    </span>
                </div>

                {{-- RELACION DE POISON PIÑON --}}
                    <div class="flex flex-col items-center">
                        <label for="">Relacion Poisson Piñon <b>(V1)</b></label>
                        <div class="flex">
                            <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="V1" wire:model="V1">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/conicos-metricos/Tabla_A-5.JPG') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div> 
                    </div>
                {{-- RELACION DE POISON CORONA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Relacion Poisson Corona <b>(V2)</b></label>
                        <div class="flex">
                            <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="V2" wire:model="V2">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/conicos-metricos/Tabla_A-5.JPG') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div> 
                    </div>
                {{-- MODULO DE LA ELASTICIDAD PIÑON --}}
                    <div class="flex flex-col items-center">
                        <label for="">Modulo Elasticidad Piñon MPa <b>(E1)</b></label>
                        <div class="flex">
                            <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="E1" wire:model="E1">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/conicos-metricos/Tabla_A-5.JPG') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div> 
                    </div>
                {{-- MODULO DE LA ELASTICIDAD CORONA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Modulo Elasticidad Corona MPa <b>(E2)</b></label>
                        <div class="flex">
                            <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="E2" wire:model="E2">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/conicos-metricos/Tabla_A-5.JPG') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div> 
                    </div>
                {{-- COEFICIENTE ELASTICO  DE RESISTENCIA  A PICADURA --}}
                    <div class="flex flex-col items-center">
                        <label for="">CRITERIO ELASTICO A PICADURA<b>(ZE)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ZE" wire:model="ZE">
                            @php
                                if ($V1 && $E1 && $V2 && $E2) {
                                    $ZE = sqrt(1/(pi() * (((1-(pow($V1,2)))/$E1) + ((1-(pow($V2,2)))/$E2))));
                                }   
                            @endphp
                            @if (is_float($ZE))
                                {{number_format($ZE,2)}}
                            @else
                                {{$ZE}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR DE TAMAÑO POR RESISTENCIA A PICADURA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Tamaño Resistencia<b>(Zx)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Zx" wire:model="Zx">
                            @php
                                if ($b) {
                                    if ($b < 12.7) {
                                        $Zx = 0.5;
                                    } elseif ((12.7 <= $b) && ($b <= 114.3)) {
                                        $Zx = (0.00492 * $b) + 0.4375;
                                    } elseif (($b > 114.3)) {
                                        $Zx = 1;
                                    }
                                }
                            @endphp
                            @if (is_float($Zx))
                                {{number_format($Zx,2)}}
                            @else
                                {{$Zx}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR POR CORONAMIENTO POR PICADURA --}}
                    <div class="flex flex-col">
                        <label for="">Factor por Coronamiento<b>(Zxc)</b></label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="Zxc" name="Zxc" type="radio" value="1.5"/>
                            <label for="">Dientes Coronados</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="Zxc" name="Zxc" type="radio" value="2"/>
                            <label for="">Dientes no coronados</label>
                        </div>
                    </div>
                {{-- FACTOR GEOMETRICO --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Geometrico Picadura <b>(ZI)</b></label>
                        <div class="flex">
                            <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" wire:model.lazy="ZI">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/conicos-metricos/Figura 15-6.jpg') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div>
                    </div>
                
                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">ESFUERZO DE CONTACTO</div>
                {{-- ---------------------------------------------------- --}}
                {{----------------- ESFUERZO DE CONTACTO  ------------------}}
                {{-- ---------------------------------------------------- --}}

                {{-- ESFUERZO DE CONTACTO FH --}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de Contacto<b>(FH)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="FH" wire:model="FH">
                            @php
                                if ($b && $WT && $ZE && $Dp && ($ZI > 0) && $Ka && $Kv && $KHB && $KHB && $Zx && $Zxc) {
                                    $FH = $ZE * sqrt( (($WT)/($b * $Dp * $ZI)) * $Ka * $Kv * $KHB * $Zx * $Zxc );
                                }
                            @endphp
                            @if (is_float($FH))
                                {{number_format($FH,2)}}
                            @else
                                {{$FH}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR DE CICLOS DE ESFUERZO DE RESISTENCIA A LA PICADURA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Ciclos de Esfuerzo<b>(ZNT)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ZNT" wire:model="ZNT">
                            @php
                                if ($NL) {
                                    if ((1000 <= $NL) && ($NL < 10000)) {
                                        $ZNT = 2;
                                    } elseif ((10000 <= $NL) && ($NL <= 10000000000)) {
                                        $ZNT = 3.4822 * (1/(pow($NL,0.0602)));
                                    }
                                    
                                }
                            @endphp
                            @if (is_float($ZNT))
                                {{number_format($ZNT,2)}}
                            @else
                                {{$ZNT}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR DE RELACION DE DUREZA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor Relacion Dureza<b>(ZW)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ZW" wire:model="ZW">
                            @php
                                $b1 = 0;
                                if ($Np && $Ng && $HBP && $HBG) {
                                      $b1 = (0.00898 * ($HBP/$HBG)) - 0.00829;
                                      $ZW = 1 + ($b1 * ($Np/($Ng - 1))); 
                                }
                            @endphp
                            @if (is_float($ZW))
                                {{number_format($ZW,2)}}
                            @else
                                {{$ZW}}
                            @endif
                        </span>
                    </div>
                {{-- Factor de Confiabilidad --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Confiabilidad<b>(SH)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="SH" wire:model="SH">
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
                {{-- Factor de Confiabilidad --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Confiabilidad<b>(Zz)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Zz" wire:model="Zz">
                            @php
                                if ($Yz) {
                                    $Zz = sqrt($Yz);
                                }
                            @endphp
                            @if (is_float($Zz))
                                {{number_format($Zz,2)}}
                            @else
                                {{$Zz}}
                            @endif
                        </span>
                    </div>
                {{-- NUMERO DE ESFUERZO DE CONTACTO --}}
                    <div class="flex flex-col items-center">
                        <label for=""># Esfuerzo de Contacto<b>(FHP)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="FHP" wire:model="FHP">
                            @php
                                if ($FHlim && $ZNTP && $ZW && $SH && $Ko && $Zz) {
                                    $FHP = ($FHlim  * $ZNTP * $ZW) / ($SH * $Ko * $Zz);
                                }
                            @endphp
                            @if (is_float($FHP))
                                {{number_format($FHP,2)}}
                            @else
                                {{$FHP}}
                            @endif
                        </span>
                    </div>
                {{-- FACTOR DE SEGURIDAD SF --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Seguridad<b>(Sff)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Sff" wire:model="Sff">
                            @php
                                if ($Ns && $FHP && $FH) {
                                    $Sff = sqrt($Ns) * ($FHP/$FH);
                                }
                            @endphp
                            @if (is_float($Sff))
                                {{number_format($Sff,2)}}
                            @else
                                {{$Sff}}
                            @endif
                        </span>
                    </div>


                
                
                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">CALCULOS DE LA CORONA</div>

                {{-- ----------------------------------------------- --}}
                {{------ CALCULOS DE LA CORONA-------}}
                {{-- ----------------------------------------------- --}}
                {{-- NUMERO DE ESFUERZO POR FLEXION PERMISIBLE --}}
                    <div class="flex flex-col items-center">
                        <label for="">Acero completamente endurecido</label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opciongrado21" name="opciongrado21" type="radio" value="1"/>
                            <label for="">Grado 1</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opciongrado21" name="opciongrado21" type="radio" value="2"/>
                            <label for="">Grado 2</label>
                        </div>
                    </div>
                    @php
                        if ($opciongrado21==1) {
                                $FHlimg = (2.35 * $HBG) + 162.89;
                            } elseif ($opciongrado21==2) {
                                $FHlimg = (2.51 * $HBG) + 203.86;
                            } 
                    @endphp
                {{-- ESFUERZO DE COTACTO PERMISIBLE --}}
                    <div class="flex flex-col items-center">
                        <label for="">Flexion Permisible<b>(FHlimg)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="FHlimg" wire:model="FHlimg">
                            {{number_format($FHlimg,2)}}
                        </span>
                    </div>
                {{-- FACTOR DE GEOMETRIA DE LA CORONA--}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Geometria Corona<b>(Yjg)</b></label>
                        <div class="flex">
                            <input type="number" step=".001" class="mb-2 block w-36  border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Yjg" wire:model="Yjg">
                            <a class="h-10 w-10 ml-2 text-yellow-600 bg-neutral-800 rounded-lg flex justify-center items-center" data-fancybox href="{{ asset('fotos/conicos-metricos/Figura 15-7.JPG') }}">
                                <i class="text-3xl  fa-solid fa-image"></i>
                            </a>
                        </div> 
                    </div>
                {{-- ESFUERZO DE FLEXION DEL Corona--}}
                    <div class="flex flex-col items-center">
                        <label for="">Esfuerzo de flexion (Corona) <b>(Ofg)</b></label>
                        <span disabled="true" class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Ofg" wire:model="Ofg">                            
                            @php
                                if ($WT && $b && $Ka && $Kv && $m && $Yx && $KHB && $Yb && $Yjg) {
                                    $Ofg = ($WT/$b) * (($Ka * $Kv) / $m) * (($Yx * $KHB)/($Yb*$Yjg));
                                }
                            @endphp
                            @if (is_float($Ofg))
                                {{number_format($Ofg,2)}}
                            @else
                                {{$Ofg}}
                            @endif
                        </span>
                    </div>
                {{-- NUMERO DE ESFUERZO POR FLEXION PERMISIBLE --}}
                    <div class="flex flex-col items-center">
                        <label for="">Acero completamente endurecido</label>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opciongradocorona" name="opciongradocorona" type="radio" value="1"/>
                            <label for="">Grado 1</label>
                        </div>
                        <div class="flex space-x-3">
                            <input class="mb-2 block border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"  wire:model="opciongradocorona" name="opciongradocorona" type="radio" value="2"/>
                            <label for="">Grado 2</label>
                        </div>
                    </div>
                    @php
                        if ($opciongradocorona==1) {
                                $Flimg = (0.30 * $HBG) + 14.48;
                            } elseif ($opciongradocorona==2) {
                                $Flimg = (0.33 * $HBG) + 41.24;
                            } 
                    @endphp
                {{-- NUMERO DE ESFUERZO POR FLEXION PERMISIBLE --}}
                    <div class="flex flex-col items-center">
                        <label for="">Flexion Permisible Corona<b>(Flimg)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Flimg" wire:model="Flimg">
                            {{number_format($Flimg,2)}}
                        </span>
                    </div>
                {{-- FACTOR DE CICLOS DEL ESFUERZO --}}
                    <div class="flex flex-col items-center">
                        <label for="">YNT Corona<b>(YNTG)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="YNTG" wire:model="YNTG">
                            @php
                                if ($NLG) {
                                    if ((100 <= $NLG) && ($NLG < 1000)) {
                                        $YNTG =2.7;
                                    } elseif ((1000 <= $NLG) && ($NLG < 3000000)) {
                                        $YNTG =6.1514 * (1/pow($NLG, 0.1182));
                                    }elseif ((3000000 <= $NLG) && ($NLG <= 10000000000)) {
                                        $YNTG = 1.6831 * (1/pow($NLG, 0.0323));
                                    }/* elseif ((10000000000 <= $NLG) && ($NLG < 10000)) {
                                        $YNTG =;
                                    } */
                                }
                            @endphp
                            @if (is_float($YNTG))
                                {{number_format($YNTG,2)}}
                            @else
                                {{$YNTG}}
                            @endif
                        </span>
                    </div>

                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">ESFUERZO DE FLEXION PERMISIBLE (CORONA)</div>

                {{-- ------------------------------------------------ --}}
                {{------ ESFUERZO DE FLEXION PERMISIBLE DE LA CORONA-------}}
                {{-- ------------------------------------------------ --}}
                
                {{-- ESFUERZO DE FLEXION PERMISIBLE --}}
                    <div class="flex flex-col items-center">
                        <label for="">Ofgg Corona<b>(Ofgg)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Ofgg" wire:model="Ofgg">
                            @php
                                if ($Flimg && $YNTG && $Nsg && $Ko && $Yz) {
                                    $Ofgg = ($Flimg * $YNTG) / ($Nsg * $Ko * (sqrt($Yz))); 
                                }
                            @endphp
                            @if (is_float($Ofgg))
                                {{number_format($Ofgg,2)}}
                            @else
                                {{$Ofgg}}
                            @endif
                        </span>
                    </div>

                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">FACTOR DE SEGURIDAD CORONA</div>
                {{-- ---------------------------------------------------- --}}
                {{------------- FACTOR DE SEGURIDAD PIÑON SFG --------------}}
                {{-- ---------------------------------------------------- --}}

                {{-- FACTOR DE SEGURIDAD SFG --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Seguridad<b>(Sfg)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Sfg" wire:model="Sfg">
                            @php
                                if ($Nsg && $Ofgg && $Ofg) {
                                    $Sfg = $Nsg * ($Ofgg/$Ofg);
                                }
                            @endphp
                            @if (is_float($Sfg))
                                {{number_format($Sfg,2)}}
                            @else
                                {{$Sfg}}
                            @endif
                        </span>
                    </div>

                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">DESGASTE SUPERFICIAL DE LA CORONA</div>
                {{-- ------------------------------------------------------- --}}
                {{------------- DESGASTE SUPERFICIAL DE LA CORONA -------------}}
                {{-- ------------------------------------------------------- --}}

                {{-- FACTOR DE CICLOS DE ESFUERZO DE RESISTENCIA A LA PICADURA --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Ciclos de Esfuerzo<b>(ZNTG)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="ZNTG" wire:model="ZNTG">
                            @php
                                if ($NLG) {
                                    if ((1000 <= $NLG) && ($NLG < 10000)) {
                                        $ZNTG = 2;
                                    } elseif ((10000 <= $NLG) && ($NLG <= 10000000000)) {
                                        $ZNTG = 3.4822 * (1/(pow($NLG,0.0602)));
                                    }
                                    
                                }
                            @endphp
                            @if (is_float($ZNTG))
                                {{number_format($ZNTG,2)}}
                            @else
                                {{$ZNTG}}
                            @endif
                        </span>

                    </div>
                {{-- NUMERO DE ESFUERZO DE CONTACTO DE LA CORONA--}}
                    <div class="flex flex-col items-center">
                        <label for=""># Esfuerzo de Contacto<b>(FHG)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="FHG" wire:model="FHG">
                            @php
                                if ($FHlimg && $ZNTG && $ZW && $Nsg && $Ko && $Zz) {
                                    $FHG = ($FHlimg  * $ZNTG * $ZW) / ((sqrt($Nsg)) * $Ko * $Zz);
                                }
                            @endphp
                            @if (is_float($FHG))
                                {{number_format($FHG,2)}}
                            @else
                                {{$FHG}}
                            @endif
                        </span>
                    </div>


                
                <div class="flex flex-col col-span-4 py-1 rounded-full bg-neutral-700 text-center text-white">FACTOR DE SEGURIDAD DE DESGASTE DE LA CORONA</div>
                {{-- -------------------------------------------------------------------- --}}
                {{----------------- FACTOR DE SEGURIDAD DE DESGASTE DE LA CORONA ------------------}}
                {{-- -------------------------------------------------------------------- --}}

                {{-- FACTOR DE SEGURIDAD Sgg --}}
                    <div class="flex flex-col items-center">
                        <label for="">Factor de Seguridad<b>(Sgg)</b></label>
                        <span class="mb-2 w-36 h-10 flex justify-center items-center border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" name="Sgg" wire:model="Sgg">
                            @php
                                if ($Nsg && $Ofgg && $Ofg) {
                                    $Sgg = sqrt($Nsg) * ($Ofgg/$Ofg);
                                }
                            @endphp
                            @if (is_float($Sgg))
                                {{number_format($Sgg,2)}}
                            @else
                                {{$Sgg}}
                            @endif
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
            
            <aside class="hidden md:block bg-neutral-800 border-2 border-yellow-600 rounded-lg w-72 p-4 fixed right-16">
               <div class="grid grid-cols-3 gap-4 text-xs text-neutral-200">
              
                    <span>
                        Ng=@if ($Ng && is_float($Ng))
                                {{number_format($Ng,2)}}
                            @elseif(!is_float($Ng))
                                {{$Ng}}
                            @endif 
                    </span>
                    <span>
                        Dp=@if ($Dp && is_float($Dp))
                                {{number_format($Dp,2)}}
                            @elseif(!is_float($Dp))
                                {{$Dp}}
                            @endif 
                    </span>
                    <span>
                        Vet=@if ($Vet && is_float($Vet))
                                {{number_format($Vet,2)}}
                            @elseif(!is_float($Vet))
                                {{$Vet}}
                            @endif 
                    </span>
                    <span>
                        WT=@if ($WT && is_float($WT))
                                {{number_format($WT,2)}}
                            @elseif(!is_float($WT))
                                {{$WT}}
                            @endif 
                    </span>
                    <span>
                        De=@if ($De && is_float($De))
                                {{number_format($De,2)}}
                            @elseif(!is_float($De))
                                {{$De}}
                            @endif 
                    </span>
                    <span>
                        Kv=@if ($Kv && is_float($Kv))
                                {{number_format($Kv,2)}}
                            @elseif(!is_float($Kv))
                                {{$Kv}}
                            @endif 
                    </span>
                    <span>
                        Vetmax=@if ($Vetmax && is_float($Vetmax))
                                {{number_format($Vetmax,2)}}
                            @elseif(!is_float($Vetmax))
                                {{$Vetmax}}
                            @endif 
                    </span>
                    <span>
                        b=@if ($b && is_float($b))
                                {{number_format($b,2)}}
                            @elseif(!is_float($b))
                                {{$b}}
                            @endif 
                    </span>
                    <span>
                        Yx=@if ($Yx && is_float($Yx))
                                {{number_format($Yx,2)}}
                            @elseif(!is_float($Yx))
                                {{$Yx}}
                            @endif 
                    </span>
                    <span>
                        Kmb=@if ($Kmb && is_float($Kmb))
                                {{number_format($Kmb,2)}}
                            @elseif(!is_float($Kmb))
                                {{$Kmb}}
                            @endif 
                    </span>
                    <span>
                        KHB=@if ($KHB && is_float($KHB))
                                {{number_format($KHB,2)}}
                            @elseif(!is_float($KHB))
                                {{$KHB}}
                            @endif 
                    </span>
                    <span>
                        Ofp=@if ($Ofp && is_float($Ofp))
                                {{number_format($Ofp,2)}}
                            @elseif(!is_float($Ofp))
                                {{$Ofp}}
                            @endif 
                    </span>
                    <span>
                        Ofg=@if ($Ofg && is_float($Ofg))
                                {{number_format($Ofg,2)}}
                            @elseif(!is_float($Ofg))
                                {{$Ofg}}
                            @endif 
                    </span>
                    <span>
                        Flimg=@if ($Flimg && is_float($Flimg))
                                {{number_format($Flimg,2)}}
                            @elseif(!is_float($Flimg))
                                {{$Flimg}}
                            @endif 
                    </span>
                    <span>
                        Ofgg=@if ($Ofgg && is_float($Ofgg))
                                {{number_format($Ofgg,2)}}
                            @elseif(!is_float($Ofgg))
                                {{$Ofgg}}
                            @endif 
                    </span>
                    <span>
                        Ko=@if ($Ko && is_float($Ko))
                                {{number_format($Ko,2)}}
                            @elseif(!is_float($Ko))
                                {{$Ko}}
                            @endif 
                    </span>
                    {{-- <span>
                        Ofpp=@if ($Ofpp && is_float($Ofpp))
                                {{number_format($Ofpp,2)}}
                            @elseif(!is_float($Ofpp))
                                {{$Ofpp}}
                            @endif 
                    </span> --}}
                    <span>
                        Sgg2=@if ($Sgg && is_float($Sgg))
                                {{number_format(pow($Sgg,2),2)}}
                            @elseif(!is_float($Sgg))
                                {{pow($Sgg,2)}}
                            @endif 
                    </span>
                    <span>
                        Sgg3=@if ($Sgg && is_float($Sgg))
                                {{number_format(pow($Sgg,3),2)}}
                            @elseif(!is_float($Sgg))
                                {{pow($Sgg,3)}}
                            @endif 
                    </span>
                    <span>
                        Sf=@if ($Sf && is_float($Sf))
                                {{number_format($Sf,2)}}
                            @elseif(!is_float($Sf))
                                {{$Sf}}
                            @endif 
                    </span>
                    <span>
                        Sfg=@if ($Sfg && is_float($Sfg))
                                {{number_format($Sfg,2)}}
                            @elseif(!is_float($Sfg))
                                {{$Sfg}}
                            @endif 
                    </span>
                    <span>
                        FHG=@if ($FHG && is_float($FHG))
                                {{number_format($FHG,2)}}
                            @elseif(!is_float($FHG))
                                {{$FHG}}
                            @endif 
                    </span>
                    <span>
                        ZNTG=@if ($ZNTG && is_float($ZNTG))
                                {{number_format($ZNTG,2)}}
                            @elseif(!is_float($ZNTG))
                                {{$ZNTG}}
                            @endif 
                    </span>
                    <span>
                        Sgg=@if ($Sgg && is_float($Sgg))
                                {{number_format($Sgg,2)}}
                            @elseif(!is_float($Sgg))
                                {{$Sgg}}
                            @endif 
                    </span>
                    <span>
                        Yz=@if ($Yz && is_float($Yz))
                                {{number_format($Yz,2)}}
                            @elseif(!is_float($Yz))
                                {{$Yz}}
                            @endif 
                    </span>
                   {{--  <span>
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
                    </span> --}}
               </div>
            </aside>

            {{-- --------------------------------------- --}}
            {{-- VALIDACIONES Y MENSAJES PARA EL USUARIO --}}
            {{-- --------------------------------------- --}}
            {{-- MENSAJES DE VALIDACIONES Y CONDICIONES PRIMERA ITERACCION--}}
                @php
                    $factorseguridad = 0;
                    if (($Sf > 0) && ($Ns > 0)) {
                        if ($Sf >= $Ns) {
                            $factorseguridad = 1;
                            echo '<script>alert ("Cumple con las condiciones el Factor de Seguridad");</script>';
                        }else {
                            $factorseguridad = 2;
                            echo '<script>alert ("No cumple con las condiciones el Factor de Seguridad");</script>';
                        }
                    } 
                @endphp
                @if ($factorseguridad == 1)
                    <div class="fixed right-16 bottom-64 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                        <span class="text-green-500">El factor de seguridad cumple</span>
                    </div>
                @elseif($factorseguridad == 2)
                    <div class="fixed right-16 bottom-64 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                        <span class="text-red-500">Cambiar el modulo y recalcule</span>
                    </div>
                @endif
            
                        
            {{-- MENSAJES DE VALIDACIONES Y CONDICIONES TERCERA ITERACCION--}}
                @php
                    $factorseguridadcorona = 0;
                    if (($Sfg > 0) && ($Nsg > 0)) {
                        if ($Sfg > $Nsg) {
                            $factorseguridadcorona = 1;
                            $factorseguridad == 0;
                            echo '<script>alert ("El factor de seguridad si cumple");</script>';
                        }else {
                            $factorseguridadcorona = 2;
                            $factorseguridad == 0;
                            echo '<script>alert ("El factor de seguridad no cumple");</script>';
                        }
                    } 
                @endphp
                @if ($factorseguridadcorona == 1)
                    <div class="fixed right-16 bottom-52 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                        <span class="text-green-500">El factor de seguridad de la corona si cumple</span>
                    </div>
                @elseif($factorseguridadcorona == 2)
                    <div class="fixed right-16 bottom-52 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                        <span class="text-red-500">El factor de seguridad de la corona no cumple</span>
                    </div>
                @endif

            {{-- MENSAJES DE VALIDACIONES Y CONDICIONES CUARTA ITERACCION--}}
                    @php
                        $condicionmensajefinal=0;
                        if ($opcioncoronado == 1) {

                            $valorcoronado1 = 0;
                            $valorcoronado1 = pow($Sgg,2);

                            if ($valorcoronado1 > $Nsg) {
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
                                $valornocoronado1 = pow($Sgg,3);

                                if ($valornocoronado1 > $Nsg ) {
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
                    <div class="fixed right-16 bottom-52 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                        <span class="text-green-500">El factor de seguridad si cumple, valores aceptables</span>
                    </div>
                @elseif($condicionmensajefinal == 2)
                    <div class="fixed right-16 bottom-52 w-72 rounded-lg bg-neutral-800 border-2 border-yellow-600 p-4">
                        <span class="text-red-500">No cumple con la condicion, retificar</span>
                    </div>
                @endif
                
        </div>

    </div>
    <input type='hidden' name='P' value='<?php echo "$P";?>'/> 
<input type='hidden' name='RPMp' value='<?php echo "$RPMp";?>'/> 
<input type='hidden' name='mG' value='<?php echo "$mG";?>'/> 
<input type='hidden' name='O' value='<?php echo "$O";?>'/> 
<input type='hidden' name='R' value='<?php echo "$R";?>'/> 
<input type='hidden' name='anguloN' value='<?php echo "$anguloN";?>'/> 
<input type='hidden' name='Ns' value='<?php echo "$Ns";?>'/> 
<input type='hidden' name='Np' value='<?php echo "$Np";?>'/> 
<input type='hidden' name='R' value='<?php echo "$R";?>'/> 
<input type='hidden' name='HBP' value='<?php echo "$HBP";?>'/> 
<input type='hidden' name='HBG' value='<?php echo "$HBG";?>'/> 
<input type='hidden' name='NL' value='<?php echo "$NL";?>'/> 
<input type='hidden' name='Qv' value='<?php echo "$Qv";?>'/> 
<input type='hidden' name='m' value='<?php echo "$m";?>'/> 
<input type='hidden' name='paso' value='<?php echo "$paso";?>'/> 
<input type='hidden' name='Dp' value='<?php echo "$Dp";?>'/> 
<input type='hidden' name='De' value='<?php echo "$De";?>'/> 
<input type='hidden' name='Vet' value='<?php echo "$Vet";?>'/> 
<input type='hidden' name='Ng' value='<?php echo "$Ng";?>'/> 
<input type='hidden' name='anguloY' value='<?php echo "$anguloY";?>'/> 
<input type='hidden' name='WT' value='<?php echo "$WT";?>'/> 
<input type='hidden' name='Vetmax' value='<?php echo "$Vetmax";?>'/> 
<input type='hidden' name='Ofp' value='<?php echo "$Ofp";?>'/> 
<input type='hidden' name='Ao' value='<?php echo "$Ao";?>'/> 
<input type='hidden' name='opcionanchocara' value='<?php echo "$opcionanchocara";?>'/> 
<input type='hidden' name='Ka' value='<?php echo "$Ka";?>'/> 
<input type='hidden' name='Kv' value='<?php echo "$Kv";?>'/> 
<input type='hidden' name='Yx' value='<?php echo "$Yx";?>'/> 
<input type='hidden' name='KHB' value='<?php echo "$KHB";?>'/> 
<input type='hidden' name='Kmb' value='<?php echo "$Kmb";?>'/> 
<input type='hidden' name='Ofpp' value='<?php echo "$Ofpp";?>'/> 
<input type='hidden' name='Ko' value='<?php echo "$Ko";?>'/> 
<input type='hidden' name='Yz' value='<?php echo "$Yz";?>'/> 
<input type='hidden' name='Sf' value='<?php echo "$Sf";?>'/> 
<input type='hidden' name='Ofg' value='<?php echo "$Ofg";?>'/> 
<input type='hidden' name='Yjg' value='<?php echo "$Yjg";?>'/> 
<input type='hidden' name='Ofgg' value='<?php echo "$Ofgg";?>'/> 
<input type='hidden' name='Flimg' value='<?php echo "$Flimg";?>'/> 
<input type='hidden' name='ZNTG' value='<?php echo "$ZNTG";?>'/> 
<input type='hidden' name='Ko' value='<?php echo "$Ko";?>'/> 
<input type='hidden' name='Yz' value='<?php echo "$Yz";?>'/> 
<input type='hidden' name='Sfg' value='<?php echo "$Sfg";?>'/> 
<input type='hidden' name='FH' value='<?php echo "$FH";?>'/> 
<input type='hidden' name='ZE' value='<?php echo "$ZE";?>'/> 
<input type='hidden' name='Yx' value='<?php echo "$Yx";?>'/> 
<input type='hidden' name='ZI' value='<?php echo "$ZI";?>'/> 
<input type='hidden' name='FHP' value='<?php echo "$FHP";?>'/> 
<input type='hidden' name='FHlimg' value='<?php echo "$FHlimg";?>'/> 
<input type='hidden' name='ZNTG' value='<?php echo "$ZNTG";?>'/> 
<input type='hidden' name='ZW' value='<?php echo "$ZW";?>'/> 
<input type='hidden' name='SH' value='<?php echo "$SH";?>'/> 
<input type='hidden' name='Sff' value='<?php echo "$Sff";?>'/> 
<input type='hidden' name='FHG' value='<?php echo "$FHG";?>'/> 
<input type='hidden' name='Flimg' value='<?php echo "$Flimg";?>'/> 
<input type='hidden' name='ZNT' value='<?php echo "$ZNT";?>'/> 
<input type='hidden' name='ZW' value='<?php echo "$ZW";?>'/> 
<input type='hidden' name='SH' value='<?php echo "$SH";?>'/> 
<input type='hidden' name='Ko' value='<?php echo "$Ko";?>'/> 
<input type='hidden' name='Sgg' value='<?php echo "$Sgg";?>'/> 

    </form>
</div>

