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
\usepackage{amsmath}

\renewcommand{\familydefault}{\sfdefault}
\usepackage{xcolor}
\color{blue}
\pagestyle{fancy}
\fancyhead{}
\renewcommand{\headrulewidth}{0pt}
\fancyfoot{}
\fancyfoot[LE,RO]{\thepage}

\renewcommand{\footrulewidth}{0pt}

\begin{document}
\doublespacing\color{black}
    \section*{\centering{Engranajes Rectos \\ Sistema Métrico}}\color{blue}
    \noindent\rule{16cm}{0.4pt}
     \begin{multicols*}{2}
   \begin{flushleft} 
  
   \color{black}Datos:\\\color{blue} \hfill \\
    $Pot(P)= {{$potencia}} [KW]$\\
    $m =  {{$modulo}} 	[mm]$\\
    $N_p=  {{$np}}	[mm]$\\
    $n_p=	 {{$rpmp}}[rpm] $\\
    $n_g=	 {{$rpmg}}[rpm] $\\
    $i=  {{$i}}$\\
    $Q_v=  {{$qv}} $\\
    $ns= $ {{$ns}} \\
    $HBp=  {{$hbp}}$\\
    $HBg=  {{$hbg}}$\\ \hfill \\
    \noindent\rule{5cm}{0.4pt}\\
    \color{black}PREDISEÑO APLICANDO LEWIS \\ \color{blue} \hfill \\
    1.	Cálculo del diámetro de paso \\
$m = \dfrac{dp}{Np}$\\
    $dp = m * Np$\\
    $dp =  {{$dp}} [mm]$\\ \hfill \\

    2. Cálculo de la velocidad \\
    $v=\dfrac{\pi*dp*np}{6000}$\\
    $v=   {{$v}}           [m/s] $ \\ \hfill \\
   3.	Cálculo de carga tangencial\\ 
    $ W^t=\dfrac{1000*Pot}{v}$\\
    $W^t=  {{$wt}}     [N]$\\
    
\hfill \\    4.	Cálculo del Factor Dinámico\\ 
    (Depende del tipo de acabado empleado)\\
    $K_v = {{$kv}} $\\
    
\hfill \\    5.	Resistencia a la Flexión\\
    (Depende del tipo de material usado)\\
    $S_tp= {{$st}}                                [MPa]$\\
    
 \hfill \\   6.	Determinación del factor de Lewis\\
    (Depende el numero de dientes del piñón)\\
    $Y = {{$y}}  $\\

  \hfill \\  7.    Cálculo del esfuerzo a flexión \\
    $\sigma=\dfrac{St}{2*ns}$\\
    $\sigma=       {{$o}}         [MPa]$\\
    
  \hfill \\ 8.	Cálculo del ancho de cara\\ 
    $F=\dfrac{K_v*W^t}{\sigma*m*Y}$\\
    $F=               {{$f}}       [mm]$
    
    (se debe verificar si se encuentra dentro del rango) \\
    $3*P_c<F<5*P_c$\\
    $P_c=\pi*m$\\ \hfill \\
    \noindent\rule{7cm}{0.4pt}\\
    \color{black}DISEÑO APLICANDO AGMA 2101-D04 (FLEXIÓN)\\ \color{blue} \hfill \\
    	Se mantienen los valores de $m, dp, v, w^t, Qv, Y, St$,\\
    
    	Se ingresa un ancho de cara normalizado dentro del rango antes calculado.\\
    $F_{norm}=    {{$fn}}                  [mm]$
    
\hfill \\    3.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA EL PIÑÓN\\
    $\sigma_P=W^t*K_o*K_V*K_s*\dfrac{1}{F_norm*m}*\dfrac{K_H*K_B}{Y_{JP}}$\\
    $\sigma_P=     {{$op}}                       [MPa]$\\
    
    	Cálculo de los factores $K_*$\\
\hfill \\    3.1	Factor de sobrecarga \\
    (Depende del nivel de impacto de trabajo)\\
    $K_o = {{$ko}} $
    
3.2	Factor dinámico \\
    $K_V= (A+\dfrac{\sqrt{200v}}{A})^B$\\
    $A=50+56(1-B)$\\
    $B=0.25(12-Q_v)^\dfrac{2}{3}$\\
    $K_V= {{$kv1}} $\\
    
\hfill \\    3.3	Factor de tamaño \\
    $K_s=1.192(\dfrac{F_{norm}\sqrt{Y}}{m})^{0.0535}$\\
    $K_s={{$ks}} $\\
    (consideración, sí $K_s<1$ se tomará $K_s=1$)\\
    
\hfill \\    3.4	Factor de distribución de carga\\
    $K_H=1+C_{mc} (C_{pf}*C_{pm}+C_{ma} C_e )$\\
    $K_H =  {{$km}}  $ \\ \hfill \\ 
    
    $	C_mc= {{$cmc}} $\\
    $	C_pf= {{$cpf}} $\\
    
    $	C_pm = {{$cpm}} $ \\
    
    $	C_ma=  {{$cma}}$\\
   
    $C_{ma}=A+BF+CF^2$\\
\hfill \\    3.5	Factor de espesor de aro.\\
    
    $m_B=\dfrac{t_R}{h_t}$ \\
    $K_B=  {{$kb}}  $\\
    
\hfill \\    3.6	Factor geométrico \\
    (Depende del numero de dientes del piñón y engrane)\\
    $i=\dfrac{np}{np} = \dfrac{Ng}{Np} =\dfrac{dg}{dp}$\\
    $Y_{JP}=  {{$jp}}  $\\

\hfill \\    4.	CÁLCULO DEL FACTOR DE SEGURIDAD PARA EL PIÑÓN\\ \hfill \\
    
   $S_{F_p} = \dfrac{\dfrac{S_{tp}*Y_{Np}}{K_T*K_R}}{\sigma_p}$\\ \hfill \\
   $S_{F_p} =  {{$sfp}}  $\\ \hfill \\ 
   $K_T = 1$\\
   $K_r =  {{$kr}}   $\\ 
\hfill \\    (Depende de la confiabilidad)\\
    
  $Y_{NP} =  {{$ynp}}  $\\
    (Depende de los ciclos de trabajo)\\
    (Se debe comprobar que $S_{FP}>n_s$)\\
    
\hfill \\    5.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA LA CORONA.\\
                   
    $\sigma_G= \dfrac{\sigma_p}{Y_{JG}}*Y_{JP} $\\
    $\sigma_G =  {{$og}}  [MPa]$\\
    
\hfill \\    5.1.	Factor geométrico \\
    (Depende del número de dientes de la corona y piñón)\\
    
    $Y_{JG} = {{$jg}}   $\\
     
    
\hfill \\    6.	CÁLCULO DEL FACTOR DE SEGURIDAD PARA LA CORONA\\ \hfill \\
      $S_{F_g} = \dfrac{\dfrac{S_{tp}*Y_{Np}}{K_T*K_R}}{\sigma_p}$\\ \hfill \\
   $S_{F_g} =  {{$sfg}}   $\\
     $K_T = 1$\\
   $K_r =  {{$kr}}  $\\ 
\hfill \\    (Depende de la confiabilidad)\\
    
  $Y_{NG} =  {{$yng}}   $\\
   
    
\hfill \\    (Depende de los ciclos de trabajo)\\
    
    $S_{tG} =  {{$opcionflexion3}}  $\\
    
\hfill \\    (Depende del tipo de material usado)\\
    (Se debe comprobar que $S_{FG}>n_s$)\\ \hfill \\
    \noindent\rule{7cm}{0.4pt}\\
    \color{black}DISEÑO APLICANDO AGMA 2101-D04 (DESGASTE SUPERFICIAL)\\ \color{blue} \hfill \\
    1.	Se conservan los valores de $dp, v, W^t y K_*$ \\
\hfill \\    2.	CALCULO DE ESFUERZO DE CONTACTO \\
    
    $\sigma_c = Z_e (W^t *K_0*K_v*K_s*\dfrac{K_H}{d_p*F_{nor}}*\dfrac{Z_r}{Z_I})^{\dfrac{1}{2}} $\\
     $\sigma_c =  {{$ocp}}  $\\
 \hfill \\     $Z_e =  {{$ze}}  $\\
     
\hfill \\    (Coeficiente elástico, depende del material del piñón y corona) \\  •	$Z_R = 1$\\
    (Factor de condición superficial, siempre que no especifique 1)\\
    
    •	$Z_I =  {{$zi}}  $\\
    
  \hfill \\  3.	CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DEL PIÑÓN\\ \hfill \\ 
   
    $S_{HP} = \dfrac{\dfrac{S_{cp}*Z_{Np}*C_{HP}}{K_T*K_R}}{\sigma_c}$\\ \hfill \\ 
    $S_{HP} =  {{$shp}}   $\\
    \hfill \\
    •	$ K_T ; K_R $ se mantienen\\
    •	$Z_{NP} =  {{$znp}}   $\\
\hfill \\    (Factor de vida al desgaste, depende de los ciclos de trabajo)\\
    •	$ C_{HP} = 1 $\\ (Factor de dureza)\\
    
\hfill \\    •	$S_{cp} =  {{$scp}}   $  \\(Resistencia admisible al desgaste superficial)\\
 
\hfill \\    4.	CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DE LA CORONA\\ \hfill \\ 
        $S_{HG} = \dfrac{\dfrac{S_{cG}*Z_{NG}*C_{HG}}{K_T*K_R}}{\sigma_c}$\\
    $S_{HG} =  {{$shg}}   $\\ \hfill \\ 
    •	$ K_T ; K_R $ se mantienen\\
    •	$Z_{NG} =  {{$zng}}  $\\
    
\hfill \\    (Factor de vida al desgaste, depende de los ciclos de trabajo, Tabla)\\
    
    •	$S_{cG} =  {{$scg}}  $  (Resistencia admisible al desgaste superficial, Tabla)\\
    
    •	$C_HG =  {{$chg}}  $   (Factor de dureza, depende de la dureza Brinell)\\
    
    $C_HG = 1 + A'(i-1)$\\
    

    \end{multicols*}
   
    
  

\end{document}