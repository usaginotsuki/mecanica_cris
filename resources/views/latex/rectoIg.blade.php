%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%
% Welcome to Overleaf --- just edit your LaTeX on the left,
% and we'll compile it for you on the right. If you open the
% 'Share' menu, you can invite other users to edit at the same
% time. See www.overleaf.com/learn for more info. Enjoy!
%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
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
    \section*{\centering{Engranajes Rectos \\ Sistema Ingles}}\color{blue}
    \noindent\rule{16cm}{0.4pt}
        
   \begin{multicols*}{2}
   \color{black}\begin{flushleft} Datos:\\ \end{flushleft}  \color{blue}
    $Pot(P)=  123 [HP]$\\
    $Pd= 1324	[diente/in]$\\
    $N_p=	123$\\
    $n_p= 123	[rpm] $\\
    $n_g=	213 [rpm] $\\
    $i= 124 $\\
    $Q_v= 7 $\\
    $ns= 12 $ \\
    $HBp= 123 $\\
    $HBg= 123 $\\\begin{flushleft} 
    \noindent\rule{5cm}{0.4pt}\\
    \color{black} PREDISEÑO APLICANDO LEWIS  \\ \color{blue} \hfill \\
    1.	Cálculo del diámetro de paso \\ 
$dp= \dfrac{Np}{Pd}$\\
       $dp =   0.092900302114804  [in]$\\ \hfill \\
    2. Cálculo de la velocidad \\ 
    $v=\dfrac{\pi*dp*np}{12}$\\
    $v=      2.9915127930614       [fpm] $ \\ \hfill \\
        3.	Cálculo de carga tangencial\\ 
    $ W^t=\dfrac{33000*hp}{v}$\\
    $W^t=    1356838.5899651      [lb]$\\ \hfill \\
        4.	Cálculo del Factor Dinámico\\ 
    (Depende del tipo de acabado empleado)\\
    $K_v =  $\\ \hfill \\ 
    5.	Resistencia a la Flexión\\
    (Depende del tipo de material usado)\\
    $S_tp=                                 [Psi]$\\ \hfill \\
    6.	Determinación del factor de Lewis\\
    (Depende el numero de dientes del piñón)\\
    $Y =  $\\ \hfill \\
    7.    Cálculo del esfuerzo a flexión \\
    $\sigma=\dfrac{St}{2*ns}$\\
    $\sigma=               [Psi]$\\ \hfill \\
    8.	Cálculo del ancho de cara\\ 
    $F=\dfrac{K_v*W^t*Pd}{\sigma*Y}$\\
    $F=                     [in]$\\
        (se debe verificar si se encuentra dentro del rango) \\
    $3*P_c<F<5*P_c$\\
    $P_c=\dfrac{\pi}{Pd}= 0.0023728041190255 $\\ \hfill \\
    \noindent\rule{7cm}{0.4pt}
    \hfill \\ 
     \color{black}DISEÑO APLICANDO AGMA 2001-D04 (FLEXIÓN)\\  \hfill \\ \color{blue}
    	Se mantienen los valores de $Pd, dp, v, w^t, Qv, Y, St$,\\
        	Se ingresa un ancho de cara normalizado dentro del rango antes calculado.\\
    $F_{norm}=                     [in]$
   \\ \hfill \\ 
    3.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA EL PIÑÓN\\
    $\sigma_P=W^t*K_o*K_V*K_s*\dfrac{Pd}{F_{norm}}*\dfrac{K_m*K_B}{J_P}$\\
    $\sigma_P=                         [psi]$\\
        	Cálculo de los factores $K_*$\\ \hfill \\
    3.1	Factor de sobrecarga \\
    (Depende del nivel de impacto de trabajo)\\
    $K_o =  $\\
    \hfill \\
    3.2	Factor dinámico \\
    $K_V= (\dfrac {A+\sqrt{v}}{A})^B$\\
    $A=50+56(1-B)$\\
    $B=0.25(12-Q_v)^{2/3}$\\
    $K_V=  1.0193636871499     $\\ \hfill \\
        3.3	Factor de tamaño \\
    $K_s=1.192(\dfrac{F_{norm}\sqrt{Y}}{Pd})^{0.0535}$\\
    $K_s=         $\\
    (consideración, sí $K_s<1$ se tomará $K_s=1$)\\ \hfill \\
        3.4	Factor de distribución de carga\\
    $K_m=1+C_{mc} (C_{pf}*C_{pm}+C_{ma} C_e )$\\
    $K_m =  $ \\
        $C_{mc}=   $\\
    $	C_{pf}=     $\\
     $	C_{pm}=     $\\
     $	C_{ma}=     $\\
    $C_e =          $\\ \hfill \\
        3.5	Factor de espesor de aro.\\
        $m_B=\dfrac{t_R}{h_t}$ \\
        $K_B=      $\\
\hfill \\        3.6	Factor geométrico \\
        $i=\dfrac{np}{np} = \dfrac{Ng}{Np} =\dfrac{dg}{dp}$\\
            $J_p=        $\\
\hfill \\    4.	CÁLCULO DEL FACTOR DE SEGURIDAD PARA EL PIÑÓN\\
      $S_{FP}=\dfrac{\dfrac{S_{tp}*Y_{Np}}{K_T*K_R}}{\sigma_p}$\\
      $S_{FP}=       $\\
         $K_T = 1$\\
            $K_r =         $\\
    (Depende de la confiabilidad)\\
      $Y_{NP} =        $\\
    (Depende de los ciclos de trabajo)\\
    (Se debe comprobar que $S_{FP}>n_s$)\\
    
\hfill \\    5.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA LA CORONA.\\
        $\sigma_G= \dfrac{\sigma_p}{J_g}*J_p $\\
            $\sigma_G =               [psi]$\\
\hfill \\        5.1.	Factor geométrico \\
    (Depende del número de dientes de la corona y piñón)\\
        $J_g=      $\\
     
    
\hfill \\    6.	CÁLCULO DEL FACTOR DE SEGURIDAD PARA LA CORONA\\ \hfill \\
      $S_{F_p} = \dfrac{\dfrac{S_{tg}*Y_{Ng}}{K_T*K_R}}{\sigma_p}$\\
   $S_{Fg} =  $\\
     $K_T = 1$\\
   $K_r =  $\\ 
    (Depende de la confiabilidad)\\
      $Y_{NG} =  $\\ 
    (Depende de los ciclos de trabajo)\\
        $S_{tG} =  $\\
        (Depende del tipo de material usado)\\
    (Se debe comprobar que  $S_{FG}>n_s$)\\ \hfill \\
    \noindent\rule{7cm}{0.4pt} 
    \color{black}  \\ DISEÑO APLICANDO AGMA 2001-D04 (DESGASTE SUPERFICIAL)\\ \hfill \\ \color{blue} 
    1.	Se conservan los valores de $dp, v, W^t y K_*$ \\
\hfill \\    2.	CALCULO DE ESFUERZO DE CONTACTO \\ \hfill \\
    
    $\sigma_c = Z_e (W^t *K_0*K_v*K_s*\dfrac{K_m}{d_p*F_{norm}}*\dfrac{C_f}{I})^{\dfrac{1}{2}} $\\
     $\sigma_c =  $          [psi]\\
     $C_p =  $                 \\
         (Coeficiente elástico, depende del material del piñón y corona) \\
        •	$C_f = 1 $\\
    (Factor de condición superficial, siempre que no especifique 1)\\
        •	$I =  $\\
    
\hfill \\    3.	CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DEL PIÑÓN\\ \hfill \\
       $S_{HP} = \dfrac{\dfrac{S_{cp}*Z_{Np}*C_{HP}}{K_T*K_R}}{\sigma_c}$\\
    $S_{HP} =  $\\
        •	$ K_T ; K_R $ se mantienen\\
    •	$Z_{NP} =   $          \\
    (Factor de vida al desgaste, depende de los ciclos de trabajo)\\
    •	$ C_{HP} = 1 $          (Factor de dureza)\\
        •	$S_{cp} = 68706 $  (Resistencia admisible al desgaste superficial)\\
 
\hfill \\    4.	CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DE LA CORONA\\ \hfill \\ 
        $S_{HG} = \dfrac{\dfrac{S_{cG}*Z_{NG}*C_{HG}}{K_T*K_R}}{\sigma_c}$\\
    $S_{HG} =  $\\
    •	$ K_T ; K_R $ se mantienen\\
    •	$Z_{NG} =  $\\
        (Factor de vida al desgaste, depende de los ciclos de trabajo, Tabla)\\
        •	$S_{cg} = 68706$   \\
        (Resistencia admisible al desgaste superficial, Tabla)\\
        •	$C_{Hg} = 1 $   \\
        (Factor de dureza, depende de la dureza Brinell)\\
    

    \end{flushleft}  
    \end{multicols*}
   
    
  

\end{document}