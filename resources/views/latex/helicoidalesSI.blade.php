
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
    \section*{\centering{Engranajes Helicoidales - Sistema Internacional}}
    
    \begin{center}
       
    \end{center}
   \begin{multicols}{2}
    Datos:\\
    $Pot(P)= {{$P}}  [HP]$\\
    $n = {{$np}}     [rpm]$\\
    $N_p = {{$NP}}      [dientes pinon]$\\
    $N_g =  {{$NG}}     [dientes engrane]$\\
    $m = {{$m}}        [mm]$\\
    $H_{BP} = {{$HBP}} $\\
    $H_{BG} = {{$HBG}} $\\
    $N_{LP} = {{$NLP}} $\\
    $\Psi = {{$anguloE}}     [grados]$\\
    $b =  {{$b}}       [mm]$\\
    $\phi_n = {{$anguloN}}     [grados]$\\
    $Q_v = {{$qv}}          [calidad]$\\
    $n_s =  {{$ns}}         [factor de seguridad]$\\
    

    Cálculo del módulo transversal:\\
    	$m_t= \frac{m}{\cos\Psi} =  {{$mt}}           [mm]$     \\
    Cálculo de la vida de la corona:\\
    	$ N_{LG}= \frac{N_{LP}}{m_G} = {{$NLG}}  $\\
    $m_G= \frac{N_G}{N_P} = {{$mG}} $\\
    
    DISEÑO APLICANDO AGMA 2001-D04 (FLEXIÓN)\\
    
    2.  Cálculo del diámetro de paso y velocidad\\
    	Diámetro de paso $[d_p=d_w]$\\
    $d_P = m_t*N_p =        {{$dp}}             [mm]$\\
    	Velocidad\\
    $V_t=\frac{\pi*n_p*d_p}{60000}$\\
    $V_t=    {{$Vt}}                  [m/s]$\\
    3.	Cálculo de la Fuerza tangencial\\
    $F_t=\frac{1000*P}{V_t}$\\
    $F_t=    {{$Ft}}                [N]$\\
    
        
    2.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA EL PIÑÓN\\
    $\sigma_{FP} = F_t*K_o*K_v*K_s*\frac{1}{b*m_t}*\frac{K_H*K_B}{Y_{JP}}$\\
    $\sigma_{FP}= {{$OFp}}           [MPa]$\\
    
    	Cálculo de los factores $K_*$\\
    2.1	Factor de sobrecarga \\
    (Depende del nivel de impacto de trabajo)\\
    $K_o = {{$Ko}}  $\\
    
    2.2	Factor dinámico \\
    $K_V=(\frac{A+\sqrt{200*V_t}}{A})^B$\\
    $A=50+56(1-B) = {{$aa}} $\\
    $B=0.25(12-Q_v)^{\frac{2}{3}} = {{$bb}} $ \\
    $K_V= {{$Kv}} $\\
    
    3	Factor de tamaño \\
    $K_s = {{$Ks}} $
    
    Consideración: AGMA identificó y proporcionó un símbolo del factor de tamaño. Del mismo modo, sugiere $K_s=1$	
    
    4	Factor de distribución de carga\\
    $K_H=1+K_{HMC}(K_{hpf}*K_{HPM}+K_{HMA}*K_{He})$\\
    $K_H= {{$KH}}$\\
    $K_{Hpm} = {{$KHpm}} $

    $K_{Hmc} = {{$KHmc}} $

    $K_{Hpf} = {{$KHpf}} $
    
    (Depende de la separación de los cojinetes y línea de centro de cara de la rueda)\\
    
    	$K_{Hma}= {{$KHma}}$ \\
    (Depende de la condición de construcción) \\
    
    $K_{Hma} = A+B(b)+ C(b)^2$\\

    $A = {{$KHmaA}}$\\
    $B = {{$KHmaB}}$\\
    $C = {{$KHmaC}}$\\
    
    $K_{He} = {{$KHe}} $\\
    
    (Depende del ajuste al ensamble)\\
    
        2.5	Factor de espesor de aro.\\
        
        $m_B=\frac{t_R}{h_t}$ \\
    $K_B= {{$KB}} $\\
    
     2.6	Factor geométrico \\
    (Depende del numero de dientes del piñón y engrane)\\
    
    $Y_{JP}= JP'(fm_p) $\\
    $Y_{JP} = {{$Yjp}}$\\
    
    	3.  CÁLCULO DEL FACTOR DE SEGURIDAD PARA EL PIÑÓN\\
    $S_{Fp}=\frac{\frac{\sigma_{Fp_p}*Y_{NP}}{Y_\theta*Y_Z}}{\sigma_{F_p}}$ \\
    $S_{Fp} = {{$Sfp}}$\\
    
    •	Esfuerzo de flexión permisible\\
    
    $\sigma_{FP_p} =  {{$OFP}}$\\
    
    (Depende del tipo de material usado y el grado)\\
    
    	Factor de ciclos de esfuerzo\\
    $Y_{NP} = {{$YN}}$\\
    (Depende de los ciclos de trabajo)\\
    	Factor de temperatura\\
    $Y_\theta = {{$Y0}}$ \\
    	Factor de confiabilidad\\
    $Y_Z = {{$YZ}}$\\
    (Depende de la confiabilidad)\\
    
    (Se debe comprobar que $S_{FP}>n_S$)\\

     4.  CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA LA CORONA.\\
     
     $\sigma_{F_g} = W^t*K_0*K_v*K_s*\frac{1}{b*m_t}*\frac{K_H*K_B}{Y_{JG}}$\\
     $\sigma_{F_g} = {{$OFg}}  [MPa]$\\
     
     	Factor geométrico \\
    (Ahora, se toma en cuenta el número de dientes de la corona)\\
     $Y_{JG}=J_G (fm_G ) = {{$Yjg}} $\\


    CÁLCULO DEL FACTOR DE SEGURIDAD PARA LA CORONA\\
    $S_{F_G}=\frac{\frac{\sigma_{FP_g}*Y_{NG}}{Y_\theta*Y_Z}}{\sigma_{F_g}}$\\
    $S_{FG}= {{$Sfg}}$\\
    	Esfuerzo de flexión permisible\\
    $\sigma_{FP_g} = {{$OFPG}}$\\
    (Depende del tipo de material usado y el grado)\\
    	Factor de ciclos de esfuerzo\\
    $Y_{NG} = {{$YNG}}$\\
    (Depende de los ciclos de trabajo)\\
    	Factor de temperatura\\
    $Y_\theta={{$Y0}}$\\
    	Factor de confiabilidad\\
    $Y_Z={{$YZ}}$\\
    (Depende de la confiabilidad)\\
    
    (Se debe comprobar que $S_{FP}>n_S$)\\

    DISEÑO APLICANDO AGMA 2001-D04 (DESGASTE SUPERFICIAL)\\
    
    $\sigma_H = Z_E \sqrt{F_t*K_o*K_v*K_s*\frac{K_H}{d_p*b}*\frac{Z_R}{Z_I}}$\\
    $\sigma_H =  {{$OH}}       [MPa]$\\
    
    Nota: Válido para el piñón y corona\\

    	$Z_E= {{$ZE}}$\\
    (Coeficiente elástico, depende del material del piñón y corona)\\
    
    	$Z_R= {{$ZR}}$\\
    (Factor de condición superficial, siempre que no especifique 1)\\
    
    	$Z_I={{$opcionfactorgeometrico}}$\\
    Relacion de transmision:\\
    $ m_G= \frac{N_G}{N_p} = \frac{d_G}{d_p} = {{$mG}} $\\
    
    Paso base normal\\
    $p_N= \pi*m*\cos(\phi_n) = {{$pnn}}$\\
    
    Radio de paso del piñón y corona\\
    $	r_P= \frac{d_p}{2} =  {{$rp}}                       [mm]$\\
    $ d_G=m_G*d_p=    {{$dg}}        [mm]$\\
    $	r_G= \frac{d_G}{2} =   {{$rg}}                    [mm]$\\
    Ángulo de presión transversal\\
    $ \phi_t = tan^{-1}(\frac{tan(\phi_n)}{\cos(\Psi)}) = {{$angulot}}$\\
    
    Radios de base del piñón y corona\\
    $r_{bP}=r_P*\cos(\phi_t )=     {{$rbp}}           [mm]$\\
    $r_{bG}=r_G*\cos(\phi_t )=    {{$rbg}}            [mm]$\\
    
    Adendum\\
    $a= \frac{1}{\frac{1}{m}} =    {{$a}}          [mm]$\\
    
    Factor Z\\
    $Z=[(r_P+a)^2-r_{bP}^2 ]^{\frac{1}{2}}+[(r_G+a)^2-r_{bG}^2 ]^\frac{1}{2}-(r_P+r_G )sen(\phi_t)$\\
    Nota: Si uno de los 2 primeros términos elevados a 0.5 son mayores al tercer término, se debe reemplazar por el tercero.\\
    $Z = {{$z}}$\\
    
    Módulo normal\\
    $m_N= \frac{P_N}{0.95Z} = {{$mn}}$\\
    
    	CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DEL PIÑÓN\\
    $S_{H_P}= \frac{\sigma_{HP_p}*Z_{NP}*Z_W}{\sigma_H*Y_\theta*Y_Z}$\\
    $S_{H_P} = {{$SHP}}$\\
    
    	$\sigma_{HP_P}= {{$OHP}}$\\
    (Resistencia admisible al desgaste superficial)\\
    
    	$Z_{NP} = {{$ZNP}}$\\
    (Factor de vida al desgaste, depende de los ciclos de trabajo del piñón)\\
    
    	$Z_w = {{$ZWP}} $\\
    (Para el piñón siempre es 1)\\
    
    	$Y_\theta ={{$Y0}} $\\
    (Factor de temperatura, se mantiene)\\
    
    	$Y_Z = {{$YZ}}$ \\
    (Factor de confiabilidad, se mantiene)\\
    
    Se debe comprobar que\\
    $S_{HP}^2>n_S$    para engranes no coronados\\
    $S_{HP}^3>n_S $  para engranes coronados\\
    
    CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DE LA CORONA\\
    $S_{HG}= \frac{\sigma_{HP_g}*Z_{NG}*Z_W}{\sigma_H*Y_\theta*Y_Z}$\\
    $S_{HG} = {{$SHG}} $\\
    
    $\sigma_{HP_G} = {{$OHPG}} $\\
    (Resistencia admisible al desgaste superficial)\\
    
    	$Z_{NG} = {{$ZNG}} $\\
    (Factor de vida al desgaste, depende de los ciclos de trabajo de la corona)\\
    
    	$Z_w =  {{$ZWG}}$\\
    (Factor de dureza, depende de la dureza Brinell)\\
    $Z_W=1+A(m_G-1)$\\
    	$Y_\theta = {{$Y0}}$ \\
    (Factor de temperatura, se mantiene)\\
    
    	$Y_Z = {{$YZ}}$\\
    (Factor de confiabilidad, se mantiene)\\
    
    Se debe comprobar que\\
    $S_{HP}^2>n_S$    para engranes no coronados\\
    $S_{HP}^3>n_S $  para engranes coronados\\



    

    
    
    
    
    

    \end{multicols}
   
    
  

\end{document}