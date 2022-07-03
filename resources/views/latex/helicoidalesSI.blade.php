
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
    $Pot(P)= [HP]$\\
    $n =    [rpm]$\\
    $N_p =      [dientes pinon]$\\
    $N_g =      [dientes engrane]$\\
    $m =        [mm]$\\
    $H_{BP} = $\\
    $H_{BG} = $\\
    $N_{LP} = $\\
    $\Psi =     [grados]$\\
    $b =        [mm]$\\
    $Confiabilidad = $\\
    $\phi_n =     [grados]$\\
    $Q_v =          [calidad]$\\
    $n_s =          [factor de seguridad]$\\
    
    Cálculo del Paso diametral normal:\\
    	$P_n= \frac{1}{m} = $\\
    Cálculo del módulo transversal:\\
    	$m_t= \frac{m}{\cos\Psi} =            [mm]$     \\
    Cálculo de la vida de la corona:\\
    	$ N_{LG}= \frac{N_{LP}}{m_G} = $\\
    $m_G= \frac{N_G}{N_P} =$\\
    
    DISEÑO APLICANDO AGMA 2001-D04 (FLEXIÓN)\\
    
    
    1.  Cálculo del paso diametral transversal\\
    $P_t=P_n*\cos(\Psi) =$
    
    2.  Cálculo del diámetro de paso y velocidad\\
    	Diámetro de paso $[d_p=d_w]$\\
    $d_P = m_t*N_p =                    [mm]$\\
    	Velocidad\\
    $V_t=\frac{\pi*n_p*d_p}{60000}$\\
    $V_t=                     [m/s]$\\
    3.	Cálculo de la Fuerza tangencial\\
    $F_t=\frac{1000*P}{V_t}$\\
    $F_t=                   [N]$\\
    
        
    2.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA EL PIÑÓN\\
    $\sigma_{FP} = F_t*K_o*K_v*K_s*\frac{1}{b*m_t}*\frac{K_H*K_B}{Y_{JP}}$\\
    $\sigma_{FP}=           [MPa]$\\
    
    	Cálculo de los factores $K_*$\\
    2.1	Factor de sobrecarga \\
    (Depende del nivel de impacto de trabajo)\\
    $K_o = $\\
    
    2.2	Factor dinámico \\
    $K_V=(\frac{A+\sqrt{200*V_t}}{A})^B$\\
    $A=50+56(1-B)$\\
    $B=0.25(12-Q_v)^(\frac{2}{3})$\\
    $K_V=$\\
    
    3	Factor de tamaño \\
    $K_s = $
    
    Consideración: AGMA identificó y proporcionó un símbolo del factor de tamaño. Del mismo modo, sugiere $K_s=1$	
    
    4	Factor de distribución de carga\\
    $K_H=1+K_{HMC}(K_{hpf}*K_{HPM}+K_{HMA}*K_{He})$
    $K_H=$\\
    $K_{Hpm} = $
    
    (Depende de la separación de los cojinetes y línea de centro de cara de la rueda)\\
    
    	$K_{Hma}=$ \\
    (Depende de la condición de construcción) \\
    
    $K_{Hma} = A+B(b)+ C(b)^2$\\
    
    $K_{He} = $\\
    
    (Depende del ajuste al ensamble)\\
    
        2.5	Factor de espesor de aro.\\
        
        $m_B=\frac{t_R}{h_t}$ \\
    $K_B=$\\
    
     2.6	Factor geométrico \\
    (Depende del numero de dientes del piñón y engrane)\\
    
    $Y_{JP}= JP'(fm_p) $\\
    $Y_{JP = }$\\
    
    	3.  CÁLCULO DEL FACTOR DE SEGURIDAD PARA EL PIÑÓN\\
    $S_{Fp}=\frac{\frac{\sigma_{Fp_p}*Y_{NP}}{Y_\theta*Y_Z}}{\sigma_{F_p}}$ \\
    $S_{Fp} = $\\
    
    •	Esfuerzo de flexión permisible\\
    
    $\sigma_{FP_p} = $\\
    
    (Depende del tipo de material usado y el grado)\\
    
    	Factor de ciclos de esfuerzo\\
    $Y_{NP} = $\\
    (Depende de los ciclos de trabajo)\\
    	Factor de temperatura\\
    $Y_\theta = $ \\
    	Factor de confiabilidad\\
    $Y_Z = $\\
    (Depende de la confiabilidad)\\
    
    (Se debe comprobar que $S_{FP}>n_S$)\\

     4.  CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA LA CORONA.\\
     
     $\sigma_{F_g} = W^t*K_0*K_v*K_s*\frac{1}{b*m_t}*\frac{K_H*K_B}{Y_{JG}}$\\
     $\sigma_{F_g} =   [MPa]$\\
     
     	Factor geométrico \\
    (Ahora, se toma en cuenta el número de dientes de la corona)\\
     $Y_{JG}=J_G (fm_G ) = $\\


    CÁLCULO DEL FACTOR DE SEGURIDAD PARA LA CORONA\\
    $S_{F_G}=\frac{\frac{\sigma_{FP_g}*Y_{NG}}{Y_\theta*Y_Z}}{\sigma_{F_g}}$\\
    $S_{FG}=$\\
    	Esfuerzo de flexión permisible\\
    $\sigma_{FP_g} = $\\
    (Depende del tipo de material usado y el grado)\\
    	Factor de ciclos de esfuerzo\\
    $Y_{NP} = $\\
    (Depende de los ciclos de trabajo)\\
    	Factor de temperatura\\
    $Y_\theta=$\\
    	Factor de confiabilidad\\
    $Y_Z=$\\
    (Depende de la confiabilidad)\\
    
    (Se debe comprobar que $S_{FP}>n_S$)\\

    DISEÑO APLICANDO AGMA 2001-D04 (DESGASTE SUPERFICIAL)\\
    
    $\sigma_H = Z_E \sqrt{F_t*K_o*K_v*K_s*\frac{K_H}{d_p*b}*\frac{Z_R}{Z_I}}$\\
    $\sigma_H =         [MPa]$\\
    
    Nota: Válido para el piñón y corona\\

    	$Z_E=$\\
    (Coeficiente elástico, depende del material del piñón y corona)\\
    
    	$Z_R=$\\
    (Factor de condición superficial, siempre que no especifique 1)\\
    
    	$Z_I=$\\
    Relacion de transmision:\\
    $ m_G= \frac{N_G}{N_p} = \frac{d_G}{d_p} = $\\
    
    Paso base normal\\
    $p_N=\frac{\pi}{P_n}\cos(\phi_n) = $\\
    
    Radio de paso del piñón y corona\\
    $	r_P= \frac{d_p}{2} =                         [mm]$\\
    $ d_G=m_G*d_p=            [mm]$\\
    $	r_G= \frac{d_G}{2} =                        [mm]$\\
    Ángulo de presión transversal\\
    $ \phi_t = tan^{-1}(\frac{tan(\phi_n)}{\cos(\Psi)}) = $\\
    
    Radios de base del piñón y corona\\
    $r_{bP}=r_P*\cos(\phi_t )=                [mm]$\\
    $r_{bG}=r_G*\cos(\phi_t )=                [mm]$\\
    
    Adendum\\
    $a=\frac{1}{P_n} =              [mm]$\\
    
    Factor Z\\
    $Z=[(r_P+a)^2-r_{bP}^2 ]^{\frac{1}{2}}+[(r_G+a)^2-r_{bG}^2 ]^\frac{1}{2}-(r_P+r_G )sen(\phi_t)$\\
    Nota: Si uno de los 2 primeros términos elevados a 0.5 son mayores al tercer término, se debe reemplazar por el tercero.\\
    $Z = $\\
    
    Módulo normal\\
    $m_N= \frac{P_N}{0.95Z} =$\\
    
    	CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DEL PIÑÓN\\
    $S_{H_P}= \frac{\sigma_{HP_p}*Z_{NP}*Z_W}{\sigma_H*Y_\theta*Y_Z}$\\
    $S_{H_P} =$\\
    
    	$\sigma_{HP_P}=$\\
    (Resistencia admisible al desgaste superficial, )\\
    
    	$Z_{NP} = $\\
    (Factor de vida al desgaste, depende de los ciclos de trabajo del piñón)\\
    
    	$Z_w = $\\
    (Para el piñón siempre es 1)\\
    
    	$Y_\theta = $\\
    (Factor de temperatura, se mantiene)\\
    
    	$Y_Z = $ \\
    (Factor de confiabilidad, se mantiene)\\
    
    Se debe comprobar que\\
    $S_{HP}^2>n_S$    para engranes no coronados\\
    $S_{HP}^3>n_S $  para engranes coronados\\
    
    CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DE LA CORONA\\
    $S_{HG}= \frac{\sigma_{HP_g}*Z_{NG}*Z_W}{\sigma_H*Y_\theta*Y_Z}$
    $S_{HG} = $\\
    
    $\sigma_{HP_G} = $\\
    (Resistencia admisible al desgaste superficial)\\
    
    	$Z_{NG} = $\\
    (Factor de vida al desgaste, depende de los ciclos de trabajo de la corona)\\
    
    	$Z_w = $\\
    (Factor de dureza, depende de la dureza Brinell)\\
    $Z_W=1+A(m_G-1)$\\
    	$Y_\theta = $ \\
    (Factor de temperatura, se mantiene)\\
    
    	$Y_Z = $\\
    (Factor de confiabilidad, se mantiene)\\
    
    Se debe comprobar que\\
    $S_{HP}^2>n_S$    para engranes no coronados\\
    $S_{HP}^3>n_S $  para engranes coronados\\



    

    
    
    
    
    

    \end{multicols}
   
    
  

\end{document}