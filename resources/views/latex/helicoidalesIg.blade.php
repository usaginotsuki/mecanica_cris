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
    \section*{\centering{Engranajes Helicoidales - Sistema Ingles}}
    
    \begin{center}
       
    \end{center}
   \begin{multicols}{2}
    Datos:\\
    $Pot(P)= {{$potencia}} [HP]$\\
    $P_n =  {{$pn}} [dientes/in]$\\
    $N_p =  {{$np}} $\\
    $\Phi =  {{$angulon}} [grados]$\\
    $\Psi =  {{$anguloy}} [grados]$\\
    $np =  {{$rpmp}} [rpm]$\\
    $ng =  {{$rpmc}} [rpm]$\\
    $i =  {{$i}} $\\
    $F =  {{$f}} $\\
    $Qv = $\\
    $Fact. Seg =  {{$ns}} $\\
    $HBp =  {{$hbp}} $\\
    $HBg =  {{$hbc}} $\\
    
        CALCULO VARIABLES PRINCIPALES\\
    1.	Cálculo del paso diametral transversal\\
    $Pt = Pn * cos\Psi$\\
    $Pt =  {{$pt}} [dientes/in]$\\
    
    2.	Cálculo del diámetro de paso \\
    $dp=\frac{Np}{Pt}$\\
    $dp=  {{$dp}}        [in]$\\
    
    3.	Cálculo de la velocidad \\
    $v=\frac{\pi*dp*np}{12}$\\
    $v=     {{$v}}         [fpm]$ \\
    
    4.	Cálculo de carga tangencial \\
    $W^t=\frac{33000*hp}{v}$\\
    $W^t=  {{$wt}}                   [lb]$\\
    
    DISEÑO APLICANDO AGMA 2001-D04 (FLEXIÓN)\\
	Se calcula con los valores de  dp, v, w^t, Qv, \\
    
    
    2.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA EL PIÑÓN\\
    $\sigma_P=W^t*K_o*K_V*K_s*\frac{Pt}{F}*\frac{K_m*K_B}{J}$\\
    $\sigma_P=   {{$op}}                       [psi]$\\
    
    	Cálculo de los factores $K_*$\\
    2.1	Factor de sobrecarga \\
    (Depende del nivel de impacto de trabajo)\\
    $K_o =  {{$ko}} $\\
    
    2.2	Factor dinámico \\
    $K_V=(A+\frac{\sqrt{v}}{A})^B$\\
    $A=50+56(1-B)$\\
    $B=0.25(12-Q_v)^(\frac{2}{3})$\\
    $K_V=  {{$kv1}} $\\
    
    2.3	Factor de tamaño \\
    Determinación del factor de Lewis\\
    (Depende el numero de dientes del piñón, tabla)\\
    
    $Y =  {{$interpolar}}$\\
    
    $K_s=  {{$ks}} $\\
    $K_s=1.192(\frac{F\sqrt{Y}}{Pn})^{0.0535}$\\
    (consideración, sí $K_s<1$ se tomará $K_s=1$)\\
    
    2.4	Factor de distribución de carga\\
    $K_m=1+C_{mc} (C_{pf}*C_{pm}+C_{ma} C_e )$\\
    $K_m=  {{$km}} $\\
    
    	$C_{mc}= {{$cmc}}$ \\
	$C_{pf}=  {{$cpf}}$ \\
    $C_{pm}=  {{$cpm}}$ \\
    (Depende de la separación de los cojinetes y línea de centro de cara de la rueda)\\
    	$C_{ma}=  {{$cma}}$ \\
    (Depende de la condición de construcción) \\
    $C_{ma}=A+BF+CF^2$\\
    $C_e=  {{$ce}}$ \\
    (Depende del ajuste al ensamble)\\
    2.5	Factor de espesor de aro.\\
    $m_B=\frac{t_R}{h_t}$ \\
    $K_B= {{$kb}}$\\
    
    2.6	Factor geométrico \\
    (Depende del numero de dientes del piñón y engrane, Tabla)\\
    $i=\frac{np}{ng}=\frac{Ng}{Np}=\frac{dg}{dp}$\\
    $J_p =  {{$jp}}$\\
    
    
	3.  CÁLCULO DEL FACTOR DE SEGURIDAD PARA EL PIÑÓN\\
    $S_{Fp}=\frac{\frac{S_{tp}*Y_{Np}}{K_T*K_R}}{\sigma_p}$ \\
    $S_{Fp} =  {{$sfp}} $\\
    
    	$K_T=1$\\
    	$K_r=  {{$kr}}$\\
    (Depende de la confiabilidad)\\
    
    	$Y_{NP}=  {{$ynp}}$\\
    (Depende de los ciclos de trabajo)\\
    (Se debe comprobar que $S_{FP}>n_S$)\\
    
    4.  CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA LA CORONA.\\
    $\sigma_G = \frac{\sigma_p}{J_p}*J_g$\\
    
    $\sigma_G =    {{$oc}}                        [psi]$\\
    
    4.1	Factor geométrico \\
    (Depende del número de dientes de la corona y piñón)\\
     $J_g = {{$jc}}  $\\
    
    5.	CÁLCULO DEL FACTOR DE SEGURIDAD PARA LA CORONA\\
    $S_{FG}=\frac{\frac{S_tG*Y_{NG}}{K_T*K_R}}{\sigma_G} $\\
    $S_{FG}=  {{$sfc}} $\\
    	$K_T=1$\\
    	$K_r=  {{$kr}}$\\
    (Depende de la confiabilidad)\\
    	$Y_{NG}=  {{$ync}}$\\
    (Depende de los ciclos de trabajo, Tabla)\\
    	$S_{tG}=  {{$opcionflexionpinona}}$\\
    (Depende del tipo de material usado)\\
    (Se debe comprobar que $S_{FG}>n_S$)\\

    DISEÑO APLICANDO AGMA 2001-D04 (DESGASTE SUPERFICIAL)\\
    1.  CALCULO DE ESFUERZO DE CONTACTO \\
    $\sigma_c = C_p(W^t*K_o*K_v*K_s*\frac{K_m}{d_p*F_{nor}}*\frac{C_f}{I})^{\frac{1}{2}}$\\
    $\sigma_c=  {{$odp}}                                  [psi]$\\                                 
    
    $Cp= {{$cp3}} $\\
    (Coeficiente elástico, depende del material del piñón y corona)\\
    
    $C_f=1$\\
    (Factor de condición superficial, siempre que no especifique 1)\\
    
    $I= {{$i3}} $\\
    (Factor geométrico, tomando las siguientes condiciones)\\
    $i=\frac{Ng}{Np}=\frac{dg}{dp}$\\
    
    $\Phi_t = tan^{-1}(\frac{\Phi}{\varphi}) = {{$angulot}} [°] $\\
    $P_N = \frac{\pi}{P_n}cos\Phi_n = $\\
    
    $m_N = \frac{P_N}{0.95Z} donde z=v1+v2-v3$\\
    
    $r_p = \frac{dp}{2} = {{$rp}} [in]$\\
    $r_g = \frac{dg}{2} = {{$rg}} [in]$\\
    $r_{bP} = r_p cos\Phi_t = {{$rbp}} [in]$\\
    $r_{bG} = r_g cos\Phi_t = {{$rbg}} [in]$\\
    $a = \frac{1}{P_n} = {{$a}}[in]$\\
    
    Si uno u otro de los 2 primeros términos entre paréntesis rectangulares (v1,v2,v3) es mayor que el tercer termino, se debe reemplazar por el tercero\\
    
        CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DEL PIÑÓN\\
    $S_{HP}=\frac{\frac{S_{cp}*Z_{NP}*C_{HP}}{K_T*K_R}}{\sigma_C} $\\
    $S_{HP} = {{$shp3}}  $\\
    
    
    	$K_T  ; K_R$ se mantienen\\
    	$Z_{NP} = {{$zn3}}$ \\
    (Factor de vida al desgaste, depende de los ciclos de trabajo)\\
    
    	$ C_{HP} = 1 $ siempre para el piñón\\
    (Factor de dureza)\\
    
    	$S_{cp}= {{$sc3}} $\\
    (Resistencia admisible al desgaste superficial)\\
    
    	CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DE LA CORONA\\
    $S_{HG}=\frac{\frac{S_{cG}*Z_{NG}*C_{HG}}{K_T*K_R}}{\sigma_C} $\\
    $S_{HG} = {{$shc3}} $\\
    
    	$K_T ; K_R$ se mantienen\\
    	$Z_{NG}= {{$znc3}}$\\
    (Factor de vida al desgaste, depende de los ciclos de trabajo)\\
    
    	$S_{cG} = {{$scc3}} $\\
    (Resistencia admisible al desgaste superficial)\\
    
    	$C_{HG}= {{$chc3}} $\\
    (Factor de dureza, depende de la dureza Brinell)\\
    $C_HG=1+A'(i-1)$\\
    
        
    
    
    
    
    
    
    

    \end{multicols}
   
    
  

\end{document}