\documentclass[a4paper,9pt,vertical]{article}
\usepackage{adjustbox}
\usepackage[english]{babel}
\usepackage[scaled=.92]{helvet}
\usepackage{fancyhdr}
\usepackage[svgnames,table]{xcolor}
\usepackage[a4paper,inner=1.5cm,outer=1.5cm,top=1cm,bottom=2cm,bindingoffset=0cm]{geometry}
\usepackage{blindtext}
\usepackage{multicol}
\renewcommand{\familydefault}{\sfdefault}
\usepackage{setspace}

\pagestyle{fancy}
\fancyhead{}
\renewcommand{\headrulewidth}{0pt}
\fancyfoot{}
\fancyfoot[LE,RO]{\thepage}

\renewcommand{\footrulewidth}{0.2pt}

\begin{document}
\doublespacing
    \section*{\centering{Engranajes Cónicos - Sistema Internacional}}
    
    \begin{multicols}{2}

    Datos:Pot(P)= {{$P}}\\
    $n_P$=                 [rpm]\\
    $m_G$=                [relación de transmisión]\\
    $\theta$=                   [C]\\
    $\alpha_n$=                [grados]\\
    $n_s$=                 [factor de seguridad]\\
    $N_p=$                [dientes piñón]\\
    Confiabilidad=\\
    $H_BP=$\\
    $H_BG=$\\
    $N_{LP}$=    \\
    $Q_v$=                [calidad]\\

    Modulo normalizado\\
    $m_et$ = \\
    Paso diametral\\
    $P_d = \frac{1}{m_{et}}$ = \\
    
    Diseño aplicando AGMA 2003-B97 (Flexión)\\
    
    1. Calculo de geometria\\
    Diametro primitivo\\
    $D_p = m_t * N_p = $\\
    $D_p$\\
    Diametro exterior\\
    $D_e = 2*m_{et}*cos(a_n)+D_p$\\
    $D_e$\\
    Velocidad lineal de paso\\
    $V_{et}=5.236(10^{-5}*D_p*n_p$\\
    $V_{et}=$\\
    Numero de dientes de la corona\\
    $N_g = m_g * N_p = $\\
    Angulo de paso del piñon\\
    $\phi = tan^{-1}(\frac{N_p}{N_g}) =$\\
    \\ 2. Calculo de la carga de trabajo \\
    $W^t=\frac{1000*P}{V_{et}} = $\\
    Verificación:\\
    Velocidad en la línea de paso máxima
    $V_{et_{max}} = \frac{[A+(Q_v-3]^2}{200}$\\
    Donde:\\
    $B = 0.25 * (12-Q_v)^{\frac{2}{3}} = $\\
    $A = 50 + 56(1-B) =$\\
    $V_{et_{max}} = $\\
    \\CALCULO DEL ESFUERZO DE FLEXIÓN PARA EL PIÑON\\
    $\sigma_{Fpinon}=\frac{1000*W^t}{b}$
    $\frac{K_a*K_v}{m_{et}}*\frac{Y_x*K_{H\beta}}{Y_\beta*Y_{JP}}$\\
    $\sigma_{Fpinon} = $\\
    \\Ancho de cara\\
    $b=min[0.3A_o;\frac{10}{P_d}]$\\
    $A_0=\frac{d_p}{2Sen(\varphi)}$\\
    $b = $\\
    Calculo de los factores $K_*$\\
    1. Factor de sobrecarga\\
    Depende del nivel de impacto de Trabajo\\
    $K_A = $
    2. Factor dinámico\\
    $K_v=(\frac{A+\sqrt{200*V_{et}}}{A})^B$\\
    $A=50+56(1-B)$\\
    $B=0.25(12-Q_v)^{\frac{2}{3}}$\\
    $K_v = $\\
    \\3. Factor de tamaño\\
    $K_s = $\\
    4. Factor de distribución de carga\\
    $K_{H\beta}=K_{mb}+5.6(10^{-6})*b^2$\\
    $K_{H\beta}=$\\
    $K_{mb} = $\\
    
    5. Factor de curvatura\\
    (Siempre 1)\\
    $Y_\beta = $\\
    \\6. Factor geométrico\\
    (Depende del número de dientes del piñón y engrane)\\
    CÁLCULO DEL ESFUERZO PERMISIBLE A FLEXIÓN PARA EL PIÑÓN\\
    $\sigma_{Fpinon}=\frac{\sigma_{Flim}*Y_{NT}}{S_f*K_\theta*Y_z}$\\
     $\sigma_{Fpinon} = $
     
     Factor de temperatura\\
     $K_\theta = $\\
    
     Factor de confiabilidad\\
     $Y_Z = $\\
     
     CÁLCULO DEL FACTOR DE SEGURIDAD PARA EL PIÑÓN\\
     $S_{F_p} = n* \frac{\sigma_{FP_{pinon}}}{\sigma_{F_{pinon}}}$
     $S_{F_p} = $\\
     
     CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA LA CORONA.\\
     
     $\sigma_{F_{corona}} = \frac{W^t}{b}*\frac{K_a*K_v}{m_{et}}*\frac{Y_x*K_{H\beta}}{Y_\beta*Y_{JG}}$\\
     $\sigma_{F_{corona}} = $\\
     
     1. Factor geométrico\\
     (Depende del número de dientes del piñón y engrane, Tabla)\\
     $Y_{JG} = $\\
     
     CÁLCULO DEL ESFUERZO PERMISIBLE A FLEXIÓN PARA LA CORONA\\
      $\sigma_{F_{corona}} = \frac{\sigma_{Flim}*Y_{NT}}{S_f*K_\theta*Y_Z}$\\
       $\sigma_{F_{corona}} = $\\
       
     •	Número de esfuerzo de flexión permisible\\
     $\sigma_{Flim} = $\\
     
     •	Factor de ciclos de esfuerzo\\
     $Y_{NT} = $\\
     $n_{LG} = \frac{N_{LP}}{m_G} = $
    \end{multicols}
\end{document}