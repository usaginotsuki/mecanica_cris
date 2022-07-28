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
\usepackage{xcolor}
\color{blue}
\geometry{textwidth=\paperwidth, textheight=\paperheight, noheadfoot, nomarginpar}

\renewcommand{\familydefault}{\sfdefault}
\usepackage{amsmath}
\pagestyle{fancy}
\fancyhead{}
\renewcommand{\headrulewidth}{0pt}
\fancyfoot{}
\fancyfoot[LE,RO]{\thepage}

\renewcommand{\footrulewidth}{0pt}

\begin{document}
\doublespacing \color{black}
    \section*{\centering{Engranajes Cónicos \\ Sistema Ingles}} \color{blue}
    
\noindent\rule{16cm}{0.4pt}
   \begin{multicols*}{2}
    \begin{flushleft} 
   \color{black} Datos:\\\color{blue} \hfill \\
    $Pot(P)= {{$P}} [HP]$\\
    $P_d= {{$Pd}}	[dientes/in]$\\
    $N_p= {{$Np}}	$\\
    $n_p= {{$RPMp}}	[rpm] $\\
    $n_g= {{$RPMc}}	[rpm] $\\
    $Q_v= {{$Qv}} $\\
    $Fact. Seg.= {{$Ns}} $ \\
    $HB_p= {{$HBp}} $\\
    $HB_g= {{$HBg}} $\\ \hfill \\
    
    \noindent\rule{5cm}{0.4pt}\\    \color{black} CALCULO VARIABLES PRINCIPALES\\ \color{blue} \hfill \\
    1.	Cálculo del diámetro de paso \\

    $dp = \dfrac{N_p}{Pd}$
    $dp = {{$dp}} $\\
    
\hfill \\    2.	Cálculo de los ángulos de paso\\

    Angulo de paso del piñón\\
    $\gamma = \tan^{-1} (\dfrac{N_p}{N_g}) = {{$anguloPP}} [radianes]$\\
    Angulo de paso del engrane\\
    $\Gamma = \tan^{-1}(\dfrac{N_p}{N_g}) = {{$anguloPC}} [radianes]$\\

\hfill \\	3. Cálculo de la velocidad \\

    $v_t = \dfrac{\pi*dp*np}{12} $
    $v_t = {{$V}} $

\hfill \\	4. Cálculo de carga tangencial \\
    $W^t = \dfrac{33000*hp}{v} $
    $W^t = {{$Wt}} $ \\
 \hfill \\ \hfill \\ \hfill \\
       \noindent\rule{7cm}{0.4pt}\\ \color{black} DISEÑO APLICANDO AGMA 2003-B97 (FLEXIÓN) \\ \color{blue}

   \hfill \\ 1.	Se calcula con los valores de $dp, \gamma, \gamma, v, w^t, Qv$ \\
    
 \hfill \\   2.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA EL PIÑÓN\\
    
    $\sigma = \dfrac{W^t}{F}*P_d * K_o * K_v * K_s * \dfrac{K_s*K_m}{K_x*J}$\\
    $\sigma = {{$Op}} $\\

  \hfill \\  2.1.	Ancho de cara F\\

    $F = min(0.3A_0, \dfrac{10}{P_d}) \\donde: A_0 = \dfrac{dp}{sen\gamma}$\\
    $F = {{$Fn}} $\\
    
    
\hfill \\    2.2.	Factor de sobrecarga\\
    (Depende del nivel de impacto de trabajo)\\
    
    $K_0 = {{$Ko}} $\\
    
 \hfill \\   2.3.	Factor dinámico \\
    
    $K_v = (\dfrac{A+\sqrt{v_t}}{A})^B$\\
    $A = 50+56(1-B)$\\
    $B = 0.25(12-Q_v)^{\dfrac{2}{3}}$\\

  \hfill \\  Se comprueba la velocidad\\

    $v_tmax = [A+(Q_v-3)]^2$\\
    
    $K_v = {{$Kv}} $\\
    
  \hfill \\  2.4   	Factor de tamaño \\
    
    $K_s = {{$Ks}} $\\
    
 \hfill \\   2.5	Factor de distribución de carga\\
    
    $K_m=K_{mb}=0.0036F^2$\\
    
    $K_m = {{$Km}} $\\
    
\hfill \\    2.6	Factor de curvatura\\
    
    $K_x = 1$\\
    
\hfill \\    2.7	Factor geométrico \\
    (Depende del numero de dientes del piñón y engrane)\\
    
    $J_p = {{$Jp}} $\\
    
 \hfill \\   3.  CÁLCULO DEL ESFUERZO PERMISIBLE A FLEXION PARA EL PIÑÓN\\
    
    $\sigma_{permP} = \dfrac{S_{atP}*K_L}{S_F*K_T*K_R}$\\
    $\sigma_{permP} = {{$OPP}} $\\
    

 \hfill \\   3.1	 Esfuerzo de flexión permisible\\
    
    Depende de la dureza Brinell elegida, calculado para aceros endurecidos o ingresado por el usuario.\\
    
    $SatP = {{$opcionsat}} $\\
    
    
  \hfill \\  3.2  Factor de seguridad [Sf]\\
    
    $S_F = n_{smin} = {{$SF}} $\\
    
\hfill \\    3.3	 Factor de ciclos de esfuerzo de resistencia a la flexión\\

    $ K_L = {{$KL}} $\\
    
\hfill \\    3.4	 Factor de Temperatura\\

    $K_T  = {{$KT}}$\\
    
 \hfill \\   3.5	 Factor de confiabilidad\\

    $K_R = {{$KR}} $\\
    
\hfill \\    4.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA LA CORONA.\\
    
    $\sigma_G = \dfrac{\sigma P}{J_P}*J_g$\\
    $\sigma_G = {{$Oc}} $\\
    
\hfill \\    4.1.	Factor geométrico \\
    (Depende del número de dientes de la corona y piñón)\\
    
    $J_g = {{$Jc}} $\\
    
\hfill \\    5.	CÁLCULO DEL ESFUERZO PERMISIBLE A FLEXION PARA EL ENGRANE\\
    
     $\sigma_{permG} = \dfrac{S_{atG}*K_L}{S_F*K_T*K_R} $\\
      $\sigma_{permG} = {{$OPC}} $\\
    
\hfill \\    Depende de la dureza Brinell elegida, calculado para aceros endurecidos o ingresado por el usuario\\
    
    $SatG = {{$opcionsatc}} $
    
  \hfill \\  CALCULO FACTORES DE SEGURIDAD PARA EL PIÑON Y EL ENGRANE\\
    
    $S_F = n_s \dfrac{\sigma_{perm}}{\sigma}$\\
    $S_{FP} = {{$SFP}} $\\
    $S_{FG} = {{$SFC}} $\\
 \hfill \\       \noindent\rule{7cm}{0.4pt}\\
    \color{black} DISEÑO APLICANDO AGMA 2003-B97 (DESGASTE SUPERFICIAL)\\ \color{blue}
 \hfill \\   
    1.	CALCULO DE ESFUERZO DE CONTACTO \\
   
   $\sigma_c = C_p(\dfrac{W^t}{F*d_p*I}*K_O*K_V*K_M*C_S*C_{XC})^{\dfrac{1}{2}}$\\
   $\sigma_c = {{$EC}} $ \\
   $c_P = {{$CP}} $\\
 \hfill \\   (Coeficiente elástico, depende del material del piñón y corona, Tabla)\\
    
    •	$I = {{$I}} $\\
    (Factor geométrico, según figura)\\
     
 \hfill \\   1.1.	 Factor de tamaño por resistencia a picadura\\
    
   $C_s = {{$Cs}} $\\
    
  \hfill \\  1.2.	 Factor de coronamiento por picadura\\
    
    $C_{xc} =  {{$Cxc}} $\\
        
 \hfill \\   2.    	ESFUERZO PERMISIBLE A DESGASTE PARA EL PIÑON\\
    
    $S_{wcP}=\dfrac{S_{acP}*C_L*C_H}{S_H*K_T*C_R}$\\
    
    $S_{wcP} = {{$SWCP}} $\\
    
  \hfill \\  2.1	 Factor de seguridad [SH]\\
    
    $S_H = \sqrt{n_{smin}}$ \\
    
 \hfill \\   2.2	Esfuerzo permisible por contacto SAC\\
    Depende de la dureza Brinell elegida, calculado para aceros endurecidos o ingresado por el usuario\\
    
    $SacP = {{$opcionsac}} $ \\
    
  \hfill \\  2.3	Factor de ciclos de esfuerzo de resistencia a la picadura\\
   
   $ C_L= {{$CL}} $\\
    
  \hfill \\  2.4	Factor de reducción de dureza\\
    $ C_H=  {{$CH}} $\\
    
    Donde :\\
    
    $B_1=0.00898\dfrac{H_{BP}}{H_{BG}}-0.00829$\\
    
  \hfill \\  2.5	 Factor de confiabilidad\\
    Según la tabla de comparación con Kr\\
    
    $C_R = {{$CR}} $\\
    
    
 \hfill \\   3.	ESFUERZO PERMISIBLE A DESGASTE PARA EL ENGRANE\\
    
    $S_{wcg}=\dfrac{S_{acg}*C_L*C_H}{S_H*K_T*C_R}$\\
    
    $S_{wcG} = {{$SWCG}} $\\
    
  \hfill \\  3.1	Esfuerzo permisible por contacto SAC\\
    Depende de la dureza Brinell elegida, calculado para aceros endurecidos o ingresado por el usuario\\
    
    $Sacg= {{$opcionsacc}}  $\\
    
 \hfill \\   4.	CALCULO DE FACTORES DE SEGURIDAD PARA EL PIÑON Y LA CORONA A DESGASTE\\
    
    $S_H=n_s (\dfrac{S_{WC}}{\sigma_C})^2$\\
    
    $S_HP = {{$SHP}} $\\
    $S_HG = {{$SHC}} $\\
    



    \end{multicols*}
   
    
  

\end{document}