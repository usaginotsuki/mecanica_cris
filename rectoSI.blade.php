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
    \section*{\centering{Engranajes Rectos - Sistema Métrico}}
    
    \begin{center}
       
    \end{center}
   \begin{multicols}{2}
    Datos:\\
    $Pot(P)= {{$potencia}} [KW]$\\
    $m =  {{$modulo}} 	[mm]$\\
    $N_p=  {{$np}}	[mm]$\\
    $n_p=	 {{$rpmp}}[rpm] $\\
    $n_g=	 {{$rpmg}}[rpm] $\\
    $i=  {{$i}}$\\
    $Q_v=  {{$qv}} $\\
    $ns= $ {{$ns}} \\
    $HBp=  {{$hbp}}$\\
    $HBg=  {{$hbg}}$\\
    
    PREDISEÑO APLICANDO LEWIS \\
    1.	Cálculo del diámetro de paso \\
$m = \frac{dp}{Np}$\\
    $dp = m * Np$\\
    $dp =  {{$dp}} [mm]$\\

    2. Cálculo de la velocidad 
    $v=\frac{\pi*dp*np}{6000}$\\
    $v=   {{$v}}           [m/s] $ \\
    
    3.	Cálculo de carga tangencial\\ 
    $ W^t=\frac{1000*Pot}{v}$\\
    $W^t=  {{$wt}}     [N]$\\
    
    4.	Cálculo del Factor Dinámico\\ 
    (Depende del tipo de acabado empleado)\\
    $K_v = {{$kv}} $\\
    
    5.	Resistencia a la Flexión\\
    (Depende del tipo de material usado)\\
    $S_tp= {{$st}}                                [MPa]$\\
    
    6.	Determinación del factor de Lewis\\
    (Depende el numero de dientes del piñón)\\
    $Y = {{$y}}  $\\

    7.    Cálculo del esfuerzo a flexión \\
    $\sigma=\frac{St}{2*ns}$\\
    $\sigma=       {{$o}}         [MPa]$\\
    
    8.	Cálculo del ancho de cara\\ 
    $F=\frac{K_v*W^t}{\sigma*m*Y}$\\
    $F=               {{$f}}       [mm]$
    
    (se debe verificar si se encuentra dentro del rango) \\
    $3*P_c<F<5*P_c$\\
    $P_c=\pi*m$\\
    
    DISEÑO APLICANDO AGMA 2101-D04 (FLEXIÓN)\\
    	Se mantienen los valores de $m, dp, v, w^t, Qv, Y, St$,\\
    
    	Se ingresa un ancho de cara normalizado dentro del rango antes calculado.\\
    $F_{norm}=    {{$fn}}                  [mm]$
    
    3.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA EL PIÑÓN\\
    $\sigma_P=W^t*K_o*K_V*K_s*\frac{1}{F_norm*m}*\frac{K_H*K_B}{Y_{JP}}$\\
    $\sigma_P=     {{$op}}                       [MPa]$\\
    
    	Cálculo de los factores $K_*$\\
    3.1	Factor de sobrecarga \\
    (Depende del nivel de impacto de trabajo)\\
    $K_o = {{$ko}} $
    
    3.2	Factor dinámico \\
    $K_V= (A+\frac{\sqrt{200v}}{A})^B$\\
    $A=50+56(1-B)$\\
    $B=0.25(12-Q_v)^\frac{2}{3}$\\
    $K_V= {{$kv1}} $\\
    
    3.3	Factor de tamaño 
    $K_s=1.192(\frac{F_{norm}\sqrt{Y}}{m})^{0.0535}$\\
    $K_s={{$ks}} $\\
    (consideración, sí $K_s<1$ se tomará $K_s=1$)\\
    
    3.4	Factor de distribución de carga\\
    $K_H=1+C_{mc} (C_{pf}*C_{pm}+C_{ma} C_e )$\\
    $K_H =  {{$km}}  $ \\
    
    $	C_mc= {{$cmc}} $\\
    $	C_pf= {{$cpf}} $\\
    (Depende de F y dp, con sus respectivas condiciones)\\
    $	C_pm = {{$cpm}} $ \\
    (Depende de la separación de los cojinetes y línea de centro de cara de la rueda)\\
    $	C_ma=  {{$cma}}$\\
    (Depende de la condición de construcción) \\
    $C_{ma}=A+BF+CF^2$\\
    
    	$C_e =  {{$ce}}  $ \\
    (Depende del ajuste al ensamble)\\
    
    3.5	Factor de espesor de aro.\\
    
    $m_B=\frac{t_R}{h_t}$ \\
    $K_B=  {{$kb}}  $\\
    
    3.6	Factor geométrico \\
    (Depende del numero de dientes del piñón y engrane)\\
    $i=\frac{np}{np} = \frac{Ng}{Np} =\frac{dg}{dp}$\\
    $Y_{JP}=  {{$jp}}  $\\

    4.	CÁLCULO DEL FACTOR DE SEGURIDAD PARA EL PIÑÓN\\
   
   $S_{F_p} = \frac{\frac{S_{tp}*Y_{Np}}{K_T*K_R}}{\sigma_p}$\\
   $S_{F_p} =  {{$sfp}}  $\\
   $K_T = 1$\\
   $K_r =  {{$kr}}   $\\ 
    (Depende de la confiabilidad)\\
    
  $Y_{NP} =  {{$ynp}}  $\\
    (Depende de los ciclos de trabajo)\\
    (Se debe comprobar que $S_{FP}>n_s$)\\
    
    5.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA LA CORONA.\\
                   
    $\sigma_G= \frac{\sigma_p}{Y_{JG}}*Y_{JP} $\\
    $\sigma_G =  {{$og}}  [MPa]$\\
    
    5.1.	Factor geométrico \\
    (Depende del número de dientes de la corona y piñón)\\
    
    $Y_{JG} = {{$jg}}   $\\
     
    
    6.	CÁLCULO DEL FACTOR DE SEGURIDAD PARA LA CORONA\\
      $S_{F_g} = \frac{\frac{S_{tp}*Y_{Np}}{K_T*K_R}}{\sigma_p}$\\
   $S_{F_g} =  {{$sfg}}   $\\
     $K_T = 1$\\
   $K_r =  {{$kr}}  $\\ 
    (Depende de la confiabilidad)\\
    
  $Y_{NG} =  {{$yng}}   $\\
   
    
    (Depende de los ciclos de trabajo)\\
    
    $S_{tG} =  {{$opcionflexion3}}  $\\
    
    (Depende del tipo de material usado)\\
    (Se debe comprobar que $S_{FG}>n_s$)\\
    
    DISEÑO APLICANDO AGMA 2101-D04 (DESGASTE SUPERFICIAL)\\
    1.	Se conservan los valores de $dp, v, W^t y K_*$ \\
    2.	CALCULO DE ESFUERZO DE CONTACTO \\
    
    $\sigma_c = Z_e (W^t *K_0*K_v*K_s*\frac{K_H}{d_p*F_{nor}}*\frac{Z_r}{Z_I})^{\frac{1}{2}} $\\
     $\sigma_c =  {{$ocp}}  $\\
     $Z_e =  {{$ze}}  $\\
     
    (Coeficiente elástico, depende del material del piñón y corona) \\
    
    •	$Z_R = 1$\\
    (Factor de condición superficial, siempre que no especifique 1)\\
    
    •	$Z_I =  {{$zi}}  $\\
    
    3.	CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DEL PIÑÓN\\
   
    $S_{HP} = \frac{\frac{S_{cp}*Z_{Np}*C_{HP}}{K_T*K_R}}{\sigma_c}$\\
    $S_{HP} =  {{$shp}}   $\\
    
    •	$ K_T ; K_R $ se mantienen\\
    •	$Z_{NP} =  {{$znp}}   $\\
    (Factor de vida al desgaste, depende de los ciclos de trabajo)\\
    •	$ C_{HP} = 1 $ (Factor de dureza)\\
    
    •	$S_{cp} =  {{$scp}}   $  (Resistencia admisible al desgaste superficial)\\
 
    4.	CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DE LA CORONA\\
        $S_{HG} = \frac{\frac{S_{cG}*Z_{NG}*C_{HG}}{K_T*K_R}}{\sigma_c}$\\
    $S_{HG} =  {{$shg}}   $\\
    •	$ K_T ; K_R $ se mantienen\\
    •	$Z_{NG} =  {{$zng}}  $\\
    
    (Factor de vida al desgaste, depende de los ciclos de trabajo, Tabla)\\
    
    •	$S_{cG} =  {{$scg}}  $   (Resistencia admisible al desgaste superficial, Tabla)\\
    
    •	$C_HG =  {{$chg}}  $    (Factor de dureza, depende de la dureza Brinell)\\
    
    $C_HG = 1 + A'(i-1)$\\
    

    \end{multicols}
   
    
  

\end{document}