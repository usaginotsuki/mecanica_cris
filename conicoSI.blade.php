\documentclass[a4paper,9pt,vertical]{article}
\usepackage{adjustbox}
\usepackage{setspace}
\usepackage[english]{babel}
\usepackage[scaled=.92]{helvet}
\usepackage{fancyhdr}
\usepackage[svgnames,table]{xcolor}
\usepackage[a4paper,inner=1.5cm,outer=1.5cm,top=1cm,bottom=1cm,bindingoffset=0cm]{geometry}
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
    \section*{\centering{Engranajes Cónicos - Sistema Metrico}}
    
    \begin{center}
       
    \end{center}
   \begin{multicols}{2}
    Datos: Pot(P)= {{$P}} [KW]\\
    $n_P$= {{$RPMp}}                [rpm]\\
    $m_G$=    {{$mG}}            [relación de transmisión]\\
    $\theta$=  {{$O}}                 [C]\\
    $\alpha_n$= {{$anguloN}}               [grados]\\
    $n_s$=   {{$Ns}}              [factor de seguridad]\\
    $N_p=$   {{$Np}}             [dientes piñón]\\
    Confiabilidad= ${{$R}}$\\
    $H_BP= {{$HBP}}$\\
    $H_BG= {{$HBG}}$\\
    $N_{LP}$= {{$NL}}   \\
    $Q_v=  {{$Qv}}      $        [calidad]\\

    Modulo normalizado\\
    $m_et$ = {{$m}} \\
    Paso diametral\\
    $P_d = \frac{1}{m_{et}}$ = {{$paso}}\\
    
    Diseño aplicando AGMA 2003-B97 (Flexión)\\
    
    1. Calculo de geometria\\
    Diametro primitivo\\
    $D_p = m_t * N_p = $\\
    $D_p = {{$Dp}}$\\
    Diametro exterior\\
    $D_e = 2*m_{et}*cos(a_n)+D_p$\\
    $D_e = {{$De}}$\\
    Velocidad lineal de paso\\
    $V_{et}=5.236(10^{-5}*D_p*n_p$\\
    $V_{et}= {{$Vet}}$\\
    Numero de dientes de la corona\\
    $N_g = m_g * N_p = {{$Ng}} $\\
    Angulo de paso del piñon\\
    $\phi = tan^{-1}(\frac{N_p}{N_g}) = {{$anguloY}}$\\
    \\ 2. Calculo de la carga de trabajo \\
    $W^t=\frac{1000*P}{V_{et}} = {{$WT}} $\\
    Verificación:\\
    Velocidad en la línea de paso máxima\\
    $V_{et_{max}} = \frac{[A+(Q_v-3]^2}{200}$\\
    Donde:\\
    $B = 0.25 * (12-Q_v)^{\frac{2}{3}} = $\\
    $A = 50 + 56(1-B) =$\\
    $V_{et_{max}} = {{$Vetmax}} $\\
    \\CALCULO DEL ESFUERZO DE FLEXIÓN PARA EL PIÑON\\
    $\sigma_{Fpinon}=\frac{1000*W^t}{b}*\frac{K_a*K_v}{m_{et}}*\frac{Y_x*K_{H\beta}}{Y_\beta*Y_{JP}}$\\
    $\sigma_{Fpinon} = {{$Ofp}} $\\
    \\Ancho de cara\\
    $b=min[0.3A_o;\frac{10}{P_d}]$\\
    $A_0=\frac{d_p}{2Sen(\phi)} = {{$Ao}}$\\
    $b = {{$opcionanchocara}} $\\
    Calculo de los factores $K_*$\\
    1. Factor de sobrecarga\\
    Depende del nivel de impacto de Trabajo\\
    $K_A = {{$Ka}} $\\
    2. Factor dinámico\\
    $K_v=(\frac{A+\sqrt{200*V_{et}}}{A})^B$\\
    $A=50+56(1-B)$\\
    $B=0.25(12-Q_v)^{\frac{2}{3}}$\\
    $K_v = {{$Kv}} $\\
    \\3. Factor de tamaño\\
    $K_s = {{$Yx}} $\\    
    
    4. Factor de distribución de carga\\
    $K_{H\beta}=K_{mb}+5.6(10^{-6})*b^2$\\
    $K_{H\beta}= {{$KHB}}$\\
    $K_{mb} = {{$Kmb}} $\\
    
    5. Factor de curvatura\\
    (Siempre 1)\\
    $Y_\beta = 1 $\\
    \\6. Factor geométrico\\
    (Depende del número de dientes del piñón y engrane)\\
    CÁLCULO DEL ESFUERZO PERMISIBLE A FLEXIÓN PARA EL PIÑÓN\\
    $\sigma_{Fpinon}=\frac{\sigma_{Flim}*Y_{NT}}{S_f*K_\theta*Y_z}$\\
     $\sigma_{Fpinon} = {{$Ofpp}}$
     
     Factor de temperatura\\
     $K_\theta = {{$Ko}} $\\
    
        -------------
        
    Factor de confiabilidad\\
    $Y_Z = {{$Yz}} $\\
    
    CÁLCULO DEL FACTOR DE SEGURIDAD PARA EL PIÑÓN\\
    $S_{F_p} = n*\frac{\sigma_{FP_{pinon}}}{\sigma_{F_{pinon}}}$\\
    $S_{F_p} = {{$Sf}} $\\
    
    CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA LA CORONA.\\
    
    $\sigma_{F_{corona}} = \frac{W^t}{b}*\frac{K_a*K_v}{m_{et}}*\frac{Y_x*K_{H\beta}}{Y_\beta*Y_{JG}}$\\
    $\sigma_{F_{corona}} = {{$Ofg}}$\\
    
    1. Factor geométrico\\
    (Depende del número de dientes del piñón y engrane, Tabla)\\
    $Y_{JG} = {{$Yjg}} $\\
    
    CÁLCULO DEL ESFUERZO PERMISIBLE A FLEXIÓN PARA LA CORONA\\
     $\sigma_{F_{corona}} = \frac{\sigma_{Flim}*Y_{NT}}{S_f*K_\theta*Y_Z}$\\
      $\sigma_{F_{corona}} = {{$Ofgg}} $\\
      
    •	Número de esfuerzo de flexión permisible\\
    $\sigma_{Flim} = {{$Flimg}}$\\
    
    •	Factor de ciclos de esfuerzo\\
    $Y_{NT} = {{$ZNTG}} $\\
    $n_{LG} = \frac{N_{LP}}{m_G} = $\\
            
    •	Factor de Temperatura\\
    $K_\theta = {{$Ko}} $\\
    
    •	Factor de Confiabilidad\\
    $Y_z = {{$Yz}} $\\
    
    CÁLCULO DEL FACTOR DE SEGURIDAD PARA LA CORONA\\
    
     $S_{F_G} = n* \frac{\sigma_{FPcorona}}{\sigma_{Fcorona}}$\\
     
    $S_{F_G} = {{$Sfg}} $\\
    
    DISEÑO APLICANDO AGMA 2003-B97 (DESGASTE SUPERFICIAL)\\
	Se conservan los valores de $d_p, V_{et} y W^t$\\
    CALCULO DE ESFUERZO DE CONTACTO PARA EL PIÑÓN\\
    
    $\sigma_H = Z_E(\frac{W_t}{bD_pZ_I}*K_A*K_v*K_{H\beta}*Z_x*Z_{xc})^{\frac{1}{2}}$\\
    
    $\sigma_H = {{$FH}}$\\
    
    Nota: Válido para el piñón y corona
    Los valores de $K_*$ se mantienen\\
    
    $Z_E = {{$ZE}} $\\
    (Coeficiente elástico, depende del material del piñón y corona)\\
    $Para el acero -> Z_e = 190\sqrt{MPa}$\\
    $Z_x = {{$Yx}}$\\
    (Factor geométrico, depende del número de dientes del piñón y engrane)\\
    $Z_I =  {{$ZI}}$\\
    
    CALCULO DE ESFUERZO PERMISIBLE A CONTACTO PARA EL PIÑÓN\\
    
    $\sigma_{HP_{pinon}} = \frac{\sigma_{Hlim}*Z_{NT}*Z_w}{S_H*K_\theta*Z_Z}$\\
    $\sigma_{HP_{pinon}} = {{$FHP}}$\\
    •	Número de esfuerzo de flexión permisible\\
    $\sigma_{Hlim} = {{$FHlimg}}  $\\
	Factor de ciclos de esfuerzo (Usar $n_LP$ del piñón)\\
	$Z_{NT} = {{$ZNT}}$\\
		Factor de Relación de dureza\\
$Z_W = {{$ZW}}$\\
Se recomienda que: $Z_W=1$\\
	$S_H  = {{$SH}}$\\
(Raíz del Factor de seguridad dado)\\
	$K_\theta = {{$Ko}}$\\
(Se mantiene)\\
	$Z_Z = \sqrt{Y_Z}$\\
	
	CÁLCULO DEL FACTOR DE SEGURIDAD PARA EL PIÑÓN\\
	$S_{H_p}^2 = n*(\frac{\sigma_{HP_{pinon}}}{\sigma_H})^2$\\
	$S_{H_p}^2 = {{$Sff}} $\\
    
    CÁLCULO DEL ESFUERZO PERMISIBLE A FLEXIÓN PARA LA CORONA\\
    
    $\sigma_{HP_{corona}} = \frac{\sigma_{Hlim}*Z_{NT}*Z_W}{S_H*K_\theta*Z_Z}$\\
    $\sigma_{HP_{corona}} = {{$FHG}} $\\
    
    •	Número de esfuerzo de flexión permisible\\
    $\sigma_{Hlim} = {{$Flimg}}$\\
    	Factor de ciclos de esfuerzo\\
$Z_{NT} = {{$ZNT}}$\\
(Usar $n_{LP}$ de la corona)\\

	Factor de Relación de dureza\\
$Z_W = {{$ZW}} $\\
Se recomienda que: $Z_W=1$\\
	$S_H= {{$SH}} $\\
(Raíz del Factor de seguridad dado)\\
	$K_\theta= {{$Ko}} $\\
(Se mantiene)\\
	$Z_Z = \sqrt{Y_Z}$\\
    
    CÁLCULO DEL FACTOR DE SEGURIDAD PARA LA CORONA\\
    
    	$S_{H_p}^2 = n*(\frac{\sigma_{HP_{corona}}}{\sigma_H})^2$\\
	$S_{H_p}^2 = {{$Sgg}} $\\
    
    \end{multicols}
   
    
  

\end{document}