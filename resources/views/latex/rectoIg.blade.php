\documentclass[a4paper,9pt,vertical]{article}
\usepackage{adjustbox}
\usepackage{setspace}
\usepackage[english]{babel}
\usepackage[scaled=.92]{helvet}
\usepackage{fancyhdr}
\usepackage[svgnames,table]{xcolor}
\usepackage[a4paper,inner=1.5cm,outer=1.5cm,top=1cm,bottom=3cm,bindingoffset=1cm]{geometry}
\usepackage{blindtext}
\usepackage{multicol}

\geometry{textwidth=\paperwidth, textheight=\paperheight, noheadfoot, nomarginpar}

\renewcommand{\familydefault}{\sfdefault}

\pagestyle{fancy}
\fancyhead{}
\renewcommand{\headrulewidth}{0pt}
\fancyfoot{}
\fancyfoot[LE,RO]{\thepage}

\renewcommand{\footrulewidth}{0.2pt}

\begin{document}
\doublespacing
    \section*{\centering{Engranajes Rectos - Sistema Ingles}}
        \begin{center}
           \end{center}
   \begin{multicols}{2}
    Datos:\\
    $Pot(P)=  {{$potencia}} [HP]$\\
    $Pd= {{$pd}}	[diente/in]$\\
    $N_p=	{{$numpinon}}$\\
    $n_p= {{$np}}	[rpm] $\\
    $n_g=	{{$nc}} [rpm] $\\
    $i= {{$transmision}} $\\
    $Q_v= {{$calidad}} $\\
    $ns= {{$ns}} $ \\
    $HBp= {{$hbp}} $\\
    $HBg= {{$hbc}} $\\
      PREDISEÑO APLICANDO LEWIS \\
    1.	Cálculo del diámetro de paso \\
$dp= \frac{Np}{Pd}$\\
       $dp =   {{$diametropinon}}  [in]$\\
    2. Cálculo de la velocidad \\
    $v=\frac{\pi*dp*np}{12}$\\
    $v=      {{$velocidad}}       [fpm] $ \\
        3.	Cálculo de carga tangencial\\ 
    $ W^t=\frac{33000*hp}{v}$\\
    $W^t=    {{$wt}}      [lb]$\\
        4.	Cálculo del Factor Dinámico\\ 
    (Depende del tipo de acabado empleado)\\
    $K_v = {{$kv}} $\\
    5.	Resistencia a la Flexión\\
    (Depende del tipo de material usado)\\
    $S_tp=  {{$st}}                               [Psi]$\\
    6.	Determinación del factor de Lewis\\
    (Depende el numero de dientes del piñón)\\
    $Y = {{$y}} $\\
    7.    Cálculo del esfuerzo a flexión \\
    $\sigma=\frac{St}{2*ns}$\\
    $\sigma=  {{$o}}             [Psi]$\\
    8.	Cálculo del ancho de cara\\ 
    $F=\frac{K_v*W^t*Pd}{\sigma*Y}$\\
    $F=   {{$f}}                  [in]$
        (se debe verificar si se encuentra dentro del rango) \\
    $3*P_c<F<5*P_c$\\
    $P_c=\frac{\pi}{Pd}= {{$p}} $\\
    
    DISEÑO APLICANDO AGMA 2001-D04 (FLEXIÓN)\\
    	Se mantienen los valores de $Pd, dp, v, w^t, Qv, Y, St$,\\
        	Se ingresa un ancho de cara normalizado dentro del rango antes calculado.\\
    $F_{norm}=    {{$fn}}                 [in]$
    
    3.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA EL PIÑÓN\\
    $\sigma_P=W^t*K_o*K_V*K_s*\frac{Pd}{F_{norm}}*\frac{K_m*K_B}{J_P}$\\
    $\sigma_P=     {{$op}}                    [psi]$\\
        	Cálculo de los factores $K_*$\\
    3.1	Factor de sobrecarga \\
    (Depende del nivel de impacto de trabajo)\\
    $K_o = {{$ko}} $
    
    3.2	Factor dinámico \\
    $K_V= (\frac {A+\sqrt{v}}{A})^B$\\
    $A=50+56(1-B)$\\
    $B=0.25(12-Q_v)^(2/3)$\\
    $K_V=  {{$kv1}}     $\\
        3.3	Factor de tamaño \\
    $K_s=1.192(\frac{F_{norm}\sqrt{Y}}{Pd})^{0.0535}$\\
    $K_s=  {{$ks}}       $\\
    (consideración, sí $K_s<1$ se tomará $K_s=1$)\\
        3.4	Factor de distribución de carga\\
    $K_m=1+C_{mc} (C_{pf}*C_{pm}+C_{ma} C_e )$\\
    $K_m = {{$km}} $ \\
        $C_{mc}= {{$cmc}}  $\\
    $	C_{pf}= {{$cpf}}    $\\
     $	C_{pm}=  {{$cpm}}   $\\
     $	C_{ma}= {{$cma}}    $\\
    $C_e =   {{$ce}}       $\\
        3.5	Factor de espesor de aro.\\
        $m_B=\frac{t_R}{h_t}$ \\
        $K_B= {{$kb}}     $\\
        3.6	Factor geométrico \\
        $i=\frac{np}{np} = \frac{Ng}{Np} =\frac{dg}{dp}$\\
            $J_p=  {{$jp}}      $\\
    4.	CÁLCULO DEL FACTOR DE SEGURIDAD PARA EL PIÑÓN\\
      $S_{FP}=\frac{\frac{S_{tp}*Y_{Np}}{K_T*K_R}}{\sigma_p}$\\
      $S_{FP}=  {{$sfp}}     $\\
         $K_T = 1$\\
            $K_r = {{$kr}}        $\\
    (Depende de la confiabilidad)\\
      $Y_{NP} = {{$ynp}}       $\\
    (Depende de los ciclos de trabajo)\\
    (Se debe comprobar que $S_{FP}>n_s$)\\
    
    5.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA LA CORONA.\\
        $\sigma_G= \frac{\sigma_p}{J_g}*J_p $\\
            $\sigma_G = {{$oc}}              [psi]$\\
        5.1.	Factor geométrico \\
    (Depende del número de dientes de la corona y piñón)\\
        $J_g=   {{$jc}}   $\\
     
    
    6.	CÁLCULO DEL FACTOR DE SEGURIDAD PARA LA CORONA\\
      $S_{F_p} = \frac{\frac{S_{tg}*Y_{Ng}}{K_T*K_R}}{\sigma_p}$\\
   $S_{Fg} = {{$sfc}} $\\
     $K_T = 1$\\
   $K_r = {{$kr}} $\\ 
    (Depende de la confiabilidad)\\
      $Y_{NG} = {{$ync}} $\\ 
    (Depende de los ciclos de trabajo)\\
        $S_{tG} = {{$stc}} $\\
        (Depende del tipo de material usado)\\
    (Se debe comprobar que $S_{FG}>n_s$)\\
    
    DISEÑO APLICANDO AGMA 2001-D04 (DESGASTE SUPERFICIAL)\\
    1.	Se conservan los valores de $dp, v, W^t y K_*$ \\
    2.	CALCULO DE ESFUERZO DE CONTACTO \\
    
    $\sigma_c = Z_e (W^t *K_0*K_v*K_s*\frac{K_m}{d_p*F_{norm}}*\frac{C_f}{I})^{\frac{1}{2}} $\\
     $\sigma_c = {{$odp}} $          [psi]\\
     $C_p = {{$cp3}} $                 \\
         (Coeficiente elástico, depende del material del piñón y corona) \\
        •	$C_f = {{$cf3}} $\\
    (Factor de condición superficial, siempre que no especifique 1)\\
        •	$I = {{$opcionfactorgeometrico}} $\\
    
    3.	CÁLCULO DEL FACTOR DE SEGURIDAD \\
           AL DESGASTE DEL PIÑÓN\\
       $S_{HP} = \frac{\frac{S_{cp}*Z_{Np}*C_{HP}}{K_T*K_R}}{\sigma_c}$\\
    $S_{HP} = {{$shp3}} $\\
        •	$ K_T ; K_R $ se mantienen\\
    •	$Z_{NP} =  {{$znc3}} $          \\
    (Factor de vida al desgaste, depende de los ciclos de trabajo)\\
    •	$ C_{HP} = {{$chp3}} $          (Factor de dureza)\\
        •	$S_{cp} = {{$sc3}} $  (Resistencia admisible al desgaste superficial)\\
 
    4.	CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DE LA CORONA\\
        $S_{HG} = \frac{\frac{S_{cG}*Z_{NG}*C_{HG}}{K_T*K_R}}{\sigma_c}$\\
    $S_{HG} = {{$shc3}} $\\
    •	$ K_T ; K_R $ se mantienen\\
    •	$Z_{NG} = {{$znc3}} $\\
        (Factor de vida al desgaste, depende de los ciclos de trabajo, Tabla)\\
        •	$S_{cg} = {{$scc3}}$   \\
        (Resistencia admisible al desgaste superficial, Tabla)\\
        •	$C_{Hg} = {{$chc3}} $   \\
        (Factor de dureza, depende de la dureza Brinell)\\
    

    

    \end{multicols}
   
    
  

\end{document}