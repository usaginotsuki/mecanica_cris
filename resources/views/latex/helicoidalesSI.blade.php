
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
    \section*{\centering{Engranajes Helicoidales - Sistema Internacional}}\color{blue}
    
   \noindent\rule{16cm}{0.4pt}
   \begin{multicols*}{2}
    \begin{flushleft}  \hfill \\
   \color{black}Datos:\\ \color{blue}
    $Pot(P)= {{$P}}  [HP]$\\
    $n = {{$np}}     [rpm]$\\
    $N_p = {{$NP}}      [dientes pinon]$\\
    $N_g =  {{$NG}}     [dientes engrane]$\\
    $m = {{$m}}        [mm]$\\
    $H_{BP} = {{$HBP}} $\\
    $H_{BG} = {{$HBG}} $\\
    $N_{LP} = {{$NLP}} $\\
    $\Psi = {{$anguloE}}     [radianes]$\\
    $b =  {{$b}}       [mm]$\\
    $\phi_n = {{$anguloN}}     [radianes]$\\
    $Q_v = {{$qv}}          [calidad]$\\
    $n_s =  {{$ns}}         [factor de seguridad]$\\
    

    Cálculo del módulo transversal:\\
    	$m_t= \dfrac{m}{\cos\Psi} =  {{$mt}}           [mm]$     \\
    Cálculo de la vida de la corona:\\
    	$ N_{LG}= \dfrac{N_{LP}}{m_G} = {{$NLG}}  $\\
    $m_G= \dfrac{N_G}{N_P} = {{$mG}} $\\
    \hfill \\
\noindent\rule{7.5cm}{0.4pt}\\      \color{black}DISEÑO APLICANDO AGMA 2001-D04 (FLEXIÓN)\\ \color{blue}
    \hfill \\
    2.  Cálculo del diámetro de paso y velocidad\\
    	Diámetro de paso $[d_p=d_w]$\\
    $d_P = m_t*N_p =        {{$dp}}             [mm]$\\
\hfill \\    	Velocidad\\
    $V_t=\dfrac{\pi*n_p*d_p}{60000}$\\
    $V_t=    {{$Vt}}                  [m/s]$\\
   \hfill \\ 3.	Cálculo de la Fuerza tangencial\\
    $F_t=\dfrac{1000*P}{V_t}$\\
    $F_t=    {{$Ft}}                [N]$\\
    
        
 \hfill \\   2.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA EL PIÑÓN\\
    $\sigma_{FP} = F_t*K_o*K_v*K_s*\dfrac{1}{b*m_t}*\dfrac{K_H*K_B}{Y_{JP}}$\\
    $\sigma_{FP}= {{$OFp}}           [MPa]$\\
    
 \hfill \\   	Cálculo de los factores $K_*$\\
    2.1	Factor de sobrecarga \\
    (Depende del nivel de impacto de trabajo)\\
    $K_o = {{$Ko}}  $\\
   \hfill \\ 
    2.2	Factor dinámico \\
    $K_V=(\dfrac{A+\sqrt{200*V_t}}{A})^B$\\
    $A=50+56(1-B) = {{$aa}} $\\
    $B=0.25(12-Q_v)^{\dfrac{2}{3}} = {{$bb}} $ \\
    $K_V= {{$Kv}} $\\
   \hfill \\ 
    3	Factor de tamaño \\
    $K_s = {{$Ks}} $
    
    Consideración: AGMA identificó y proporcionó un símbolo del factor de tamaño. Del mismo modo, sugiere $K_s=1$\\	
   \hfill \\ 
    4	Factor de distribución de carga\\
    $K_H=1+K_{HMC}(K_{hpf}*K_{HPM}+K_{HMA}*K_{He})$\\
    $K_H= {{$KH}}$\\
    $K_{Hpm} = {{$KHpm}} $

    $K_{Hmc} = {{$KHmc}} $

    $K_{Hpf} = {{$KHpf}} $
    
\hfill \\    (Depende de la separación de los cojinetes y línea de centro de cara de la rueda)\\
    
    	$K_{Hma}= {{$KHma}}$ \\
    (Depende de la condición de construcción) \\
  \hfill \\  
    $K_{Hma} = A+B(b)+ C(b)^2$\\

    $A = {{$KHmaA}}$\\
    $B = {{$KHmaB}}$\\
    $C = {{$KHmaC}}$\\
 \hfill \\   
    $K_{He} = {{$KHe}} $\\
    
    (Depende del ajuste al ensamble)\\
  \hfill \\  
        2.5	Factor de espesor de aro.\\
        
        $m_B=\dfrac{t_R}{h_t}$ \\
    $K_B= {{$KB}} $\\
   \hfill \\ 
     2.6	Factor geométrico \\
    (Depende del numero de dientes del piñón y engrane)\\
    
    $Y_{JP}= JP'(fm_p) $\\
    $Y_{JP} = {{$Yjp}}$\\
  \hfill \\  
    	3.  CÁLCULO DEL FACTOR DE SEGURIDAD PARA EL PIÑÓN\\
    $S_{Fp}=\dfrac{\dfrac{\sigma_{Fp_p}*Y_{NP}}{Y_\theta*Y_Z}}{\sigma_{F_p}}$ \\
    $S_{Fp} = {{$Sfp}}$\\
    \hfill \\
    •	Esfuerzo de flexión permisible\\
    
    $\sigma_{FP_p} =  {{$OFP}}$\\
    
    (Depende del tipo de material usado y el grado)\\
    \hfill \\
    	Factor de ciclos de esfuerzo\\
    $Y_{NP} = {{$YN}}$\\
    (Depende de los ciclos de trabajo)\\
  \hfill \\  	Factor de temperatura\\
    $Y_\theta = {{$Y0}}$ \\
    \hfill \\	Factor de confiabilidad\\
    $Y_Z = {{$YZ}}$\\
    (Depende de la confiabilidad)\\
    
    (Se debe comprobar que $S_{FP}>n_S$)\\

 \hfill \\    4.  CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA LA CORONA.\\
     
     $\sigma_{F_g} = W^t*K_0*K_v*K_s*\dfrac{1}{b*m_t}*\dfrac{K_H*K_B}{Y_{JG}}$\\
     $\sigma_{F_g} = {{$OFg}}  [MPa]$\\
   \hfill \\  
     	Factor geométrico \\
    (Ahora, se toma en cuenta el número de dientes de la corona)\\
     $Y_{JG}=J_G (fm_G ) = {{$Yjg}} $\\
\hfill \\

    CÁLCULO DEL FACTOR DE SEGURIDAD PARA LA CORONA\\
    $S_{F_G}=\dfrac{\dfrac{\sigma_{FP_g}*Y_{NG}}{Y_\theta*Y_Z}}{\sigma_{F_g}}$\\
    $S_{FG}= {{$Sfg}}$\\
  \hfill \\  	Esfuerzo de flexión permisible\\
    $\sigma_{FP_g} = {{$OFPG}}$\\
    (Depende del tipo de material usado y el grado)\\
 \hfill \\   	Factor de ciclos de esfuerzo\\
    $Y_{NG} = {{$YNG}}$\\
    (Depende de los ciclos de trabajo)\\
  \hfill \\  	Factor de temperatura\\
    $Y_\theta={{$Y0}}$\\
  \hfill \\  	Factor de confiabilidad\\
    $Y_Z={{$YZ}}$\\
    (Depende de la confiabilidad)\\
    
    (Se debe comprobar que $S_{FP}>n_S$)\\
\hfill \\
\noindent\rule{7.5cm}{0.4pt}\\      \color{black}DISEÑO APLICANDO AGMA 2001-D04 (DESGASTE SUPERFICIAL)\\ \color{blue}
    \hfill \\
    $\sigma_H = Z_E \sqrt{F_t*K_o*K_v*K_s*\dfrac{K_H}{d_p*b}*\dfrac{Z_R}{Z_I}}$\\ \\
    $\sigma_H =  {{$OH}}       [MPa]$\\
    
    Nota: Válido para el piñón y corona\\
\hfill \\
    	$Z_E= {{$ZE}}$\\
    (Coeficiente elástico, depende del material del piñón y corona)\\
    \hfill \\
    	$Z_R= {{$ZR}}$\\
    (Factor de condición superficial, siempre que no especifique 1)\\
    \hfill \\
    	$Z_I={{$opcionfactorgeometrico}}$\\
  \hfill \\  Relacion de transmision:\\
    $ m_G= \dfrac{N_G}{N_p} = \dfrac{d_G}{d_p} = {{$mG}} $\\
    
 \hfill \\   Paso base normal\\
    $p_N= \pi*m*\cos(\phi_n) = {{$pnn}}$\\
    
 \hfill \\   Radio de paso del piñón y corona\\
    $	r_P= \dfrac{d_p}{2} =  {{$rp}}                       [mm]$\\
    $ d_G=m_G*d_p=    {{$dg}}        [mm]$\\
    $	r_G= \dfrac{d_G}{2} =   {{$rg}}                    [mm]$\\
 \hfill \\   Ángulo de presión transversal\\
    $ \phi_t = tan^{-1}(\dfrac{tan(\phi_n)}{\cos(\Psi)}) = {{$angulot}} [radianes]$\\
    
 \hfill \\   Radios de base del piñón y corona\\
    $r_{bP}=r_P*\cos(\phi_t )=     {{$rbp}}           [mm]$\\
    $r_{bG}=r_G*\cos(\phi_t )=    {{$rbg}}            [mm]$\\
    
 \hfill \\   Adendum\\
    $a= \dfrac{1}{\dfrac{1}{m}} =    {{$a}}          [mm]$\\
    
 \hfill \\   Factor Z\\
    $Z=[(r_P+a)^2-r_{bP}^2 ]^{\dfrac{1}{2}}+[(r_G+a)^2-r_{bG}^2 ]^\dfrac{1}{2}-(r_P+r_G )sen(\phi_t)$\\
    Nota: Si uno de los 2 primeros términos elevados a 0.5 son mayores al tercer término, se debe reemplazar por el tercero.\\
    $Z = {{$z}}$\\
 \hfill \\   
    Módulo normal\\
    $m_N= \dfrac{P_N}{0.95Z} = {{$mn}}$\\
    
   \hfill \\ 	CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DEL PIÑÓN\\
    $S_{H_P}= \dfrac{\sigma_{HP_p}*Z_{NP}*Z_W}{\sigma_H*Y_\theta*Y_Z}$\\
    $S_{H_P} = {{$SHP}}$\\
   \hfill \\ 
    	$\sigma_{HP_P}= {{$OHP}}$\\
    (Resistencia admisible al desgaste superficial)\\
   \hfill \\ 
    	$Z_{NP} = {{$ZNP}}$\\
    (Factor de vida al desgaste, depende de los ciclos de trabajo del piñón)\\
 \hfill \\   
    	$Z_w = {{$ZWP}} $\\
    (Para el piñón siempre es 1)\\
    
  \hfill \\  	$Y_\theta ={{$Y0}} $\\
    (Factor de temperatura, se mantiene)\\
    
  \hfill \\  	$Y_Z = {{$YZ}}$ \\
    (Factor de confiabilidad, se mantiene)\\
   \hfill \\ 
    Se debe comprobar que\\
    $S_{HP}^2>n_S$    para engranes no coronados\\
    $S_{HP}^3>n_S $  para engranes coronados\\
    \hfill \\
    CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DE LA CORONA\\
    $S_{HG}= \dfrac{\sigma_{HP_g}*Z_{NG}*Z_W}{\sigma_H*Y_\theta*Y_Z}$\\
    $S_{HG} = {{$SHG}} $\\
    \hfill \\
    $\sigma_{HP_G} = {{$OHPG}} $\\
    (Resistencia admisible al desgaste superficial)\\
    \hfill \\
    	$Z_{NG} = {{$ZNG}} $\\
    (Factor de vida al desgaste, depende de los ciclos de trabajo de la corona)\\
    \hfill \\
    	$Z_w =  {{$ZWG}}$\\
    (Factor de dureza, depende de la dureza Brinell)\\
  \hfill \\  $Z_W=1+A(m_G-1)$\\
    	$Y_\theta = {{$Y0}}$ \\
    (Factor de temperatura, se mantiene)\\
    \hfill \\
    	$Y_Z = {{$YZ}}$\\
    (Factor de confiabilidad, se mantiene)\\
  \hfill \\  
    Se debe comprobar que\\
    $S_{HP}^2>n_S$    para engranes no coronados\\
    $S_{HP}^3>n_S $  para engranes coronados\\



    

    
    
    
    
    

    \end{multicols}
   
    
  

\end{document}