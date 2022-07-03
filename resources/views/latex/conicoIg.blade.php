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
    \section*{\centering{Engranajes Cónicos - Sistema Imperial}}
    
    \begin{center}
       
    \end{center}
   \begin{multicols}{2}
    Datos:\\
    $Pot(P)=  [HP]$\\
    $P_d= 	[dientes/in]$\\
    $N_p=	$\\
    $n_p=	[rpm] $\\
    $n_g=	[rpm] $\\
    $i= $\\
    $Q_v= $\\
    $Fact. Seg.= $ \\
    $HB_p= $\\
    $HB_g= $\\
    
    CALCULO VARIABLES PRINCIPALES\\
    1.	Cálculo del diámetro de paso \\

    $dp = \frac{N_p}{Pd}$
    $dp = $\\
    
    2.	Cálculo de los ángulos de paso\\

    Angulo de paso del piñón\\
    $\gamma = \tan^{-1} (\frac{N_p}{N_g}) = $
    Angulo de paso del engrane\\
    $\Gamma = \tan^{-1}(\frac{N_p}{N_g}) = $

	3. Cálculo de la velocidad \\

    $v_t = \frac{\pi*dp*np}{12} $
    $v_t = $

	4. Cálculo de carga tangencial \\
    $W^t = \frac{33000*hp}{v} $
    $W^t = $ \\

    DISEÑO APLICANDO AGMA 2003-B97 (FLEXIÓN) \\

    1.	Se calcula con los valores de $dp, \gamma, \gamma, v, w^t, Qv$ \\
    
    2.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA EL PIÑÓN\\
    
    $\sigma = \frac{W^t}{F}*P_d * K_o * K_v * K_s * \frac{K_s*K_m}{K_x*J}$
    $\sigma = $\\

    2.1.	Ancho de cara F

    $F = min(0.3A_0, \frac{10}{P_d}) donde: A_0 = \frac{dp}{sen\gamma}$
    $F = $\\
    
    
    2.2.	Factor de sobrecarga\\
    (Depende del nivel de impacto de trabajo)\\
    
    $K_0 = $\\
    
    2.3.	Factor dinámico \\
    
    $K_v = (\frac{A+\sqrt{v_t}}{A})^B$
    $A = 50+56(1-B)$
    $B = 0.25(12-Q_v)^{\frac{2}{3}}$

    Se comprueba la velocidad\\

    $v_tmax = [A+(Q_v-3)]^2$
    
    $K_v = $\\
    
    2.4   	Factor de tamaño \\
    
    $K_s = $
    
    2.5	Factor de distribución de carga\\
    
    $K_m=K_{mb}=0.0036F^2$
    
    $K_m = $\\
    
    2.6	Factor de curvatura\\
    
    $K_x = 1$\\
    
    2.7	Factor geométrico \\
    (Depende del numero de dientes del piñón y engrane)\\
    
    $J_p = $\\
    
    3.  CÁLCULO DEL ESFUERZO PERMISIBLE A FLEXION PARA EL PIÑÓN\\
    
    $\sigma_{permP} = \frac{S_{atP}*K_L}{S_F*K_T*K_R}$\\
    $\sigma_{permP} = $\\
    

    3.1	 Esfuerzo de flexión permisible\\
    
    Depende de la dureza Brinell elegida, calculado para aceros endurecidos o ingresado por el usuario.\\
    
    $SatP = $\\
    
    
    3.2  Factor de seguridad [Sf]\\
    
    $S_F = n_{smin} = $\\
    
    3.3	 Factor de ciclos de esfuerzo de resistencia a la flexión\\

    $ K_L = $\\
    
    3.4	 Factor de Temperatura\\

    $K_T =$\\
    
    3.5	 Factor de confiabilidad\\

    $K_R =$\\
    
    4.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA LA CORONA.\\
    
    $\sigma_G = \frac{\sigma P}{J_P}*J_g$\\
    $\sigma_G = $\\
    
    4.1.	Factor geométrico \\
    (Depende del número de dientes de la corona y piñón)\\
    
    $J_g = $\\
    
    5.	CÁLCULO DEL ESFUERZO PERMISIBLE A FLEXION PARA EL ENGRANE
    
     $\sigma_{permP} = \frac{S_{atG}*K_L}{S_F*K_T*K_R} $\\
      $\sigma_{permP} = $\\
    
    Depende de la dureza Brinell elegida, calculado para aceros endurecidos o ingresado por el usuario\\
    
    $SatG = $
    
    CALCULO FACTORES DE SEGURIDAD PARA EL PIÑON Y EL ENGRANE\\
    
    $S_F = n_s \frac{\sigma_{perm}}{\sigma}$
    $S_{FP}$\\
    $S_{FG}$\\
    DISEÑO APLICANDO AGMA 2003-B97 (DESGASTE SUPERFICIAL)\\
    
    1.	CALCULO DE ESFUERZO DE CONTACTO \\
   
   $\sigma_c = C_p(\frac{W^t}{F*d_p*I}*K_O*K_V*K_M*C_S*C_{XC})^{\frac{1}{2}}$\\
   $\sigma_c = $ \\
   $c_P = $
    (Coeficiente elástico, depende del material del piñón y corona, Tabla)\\
    
    •	$I = $\\
    (Factor geométrico, según figura)\\
     
    1.1.	 Factor de tamaño por resistencia a picadura\\
    
   $C_s = $\\
    
    1.2.	 Factor de coronamiento por picadura\\
    
    $C_{xc} = $\\
        
    2.    	ESFUERZO PERMISIBLE A DESGASTE PARA EL PIÑON\\
    
    $S_{wcP}=\frac{S_{acP}*C_L*C_H}{S_H*K_T*C_R}$\\
    
    $S_{wcP} =$\\
    
    2.1	 Factor de seguridad [SH]\\
    
    $S_H = \sqrt{n_{smin}}$ \\
    
    2.2	Esfuerzo permisible por contacto SAC\\
    Depende de la dureza Brinell elegida, calculado para aceros endurecidos o ingresado por el usuario\\
    
    $SacP =$ \\
    
    2.3	Factor de ciclos de esfuerzo de resistencia a la picadura\\
   
   $ C_L= $\\
    
    2.4	Factor de reducción de dureza\\
    $ C_H= $\\
    
    Donde :\\
    
    $B_1=0.00898\frac{H_{BP}}{H_{BG}}-0.00829$\\
    
    2.5	 Factor de confiabilidad\\
    Según la tabla de comparación con Kr\\
    
    $C_R = $\\
    
    
    3.	ESFUERZO PERMISIBLE A DESGASTE PARA EL ENGRANE\\
    
    $S_{wcg}=\frac{S_{acg}*C_L*C_H}{S_H*K_T*C_R}$\\
    
    $S_wcG =$\\
    
    3.1	Esfuerzo permisible por contacto SAC\\
    Depende de la dureza Brinell elegida, calculado para aceros endurecidos o ingresado por el usuario\\
    
    $Sacg=$
    
    4.	CALCULO DE FACTORES DE SEGURIDAD PARA EL PIÑON Y LA CORONA A DESGASTE
    
    $S_H=n_s (\frac{S_{WC}}{\sigma_C})^2$
    
    $S_HP =$
    $S_HG =$
    



    \end{multicols}
   
    
  

\end{document}