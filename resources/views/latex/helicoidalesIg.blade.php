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
    \section*{\centering{Engranajes Helicoidales - Sistema Ingles}}\color{blue}
    \noindent\rule{16cm}{0.4pt}
   \begin{multicols*}{2}
    \begin{flushleft}  \hfill \\
   \color{black}Datos:\\ \color{blue}
    $Pot(P)= {{$potencia}} [HP]$\\
    $P_n =  {{$pn}} [dientes/in]$\\
    $N_p =  {{$np}} $\\
    $\Phi =  {{$angulon}} [radianes]$\\
    $\Psi =  {{$anguloy}} [radianes]$\\
    $np =  {{$rpmp}} [rpm]$\\
    $ng =  {{$rpmc}} [rpm]$\\
    $i =  {{$i}} $\\
    $F =  {{$f}} $\\
    $Qv = $\\
    $Fact. Seg =  {{$ns}} $\\
    $HBp =  {{$hbp}} $\\
    $HBg =  {{$hbc}} $\\ \hfill \\
    
\noindent\rule{6cm}{0.4pt}\\     \color{black}   CALCULO VARIABLES PRINCIPALES\\ \color{blue}
\hfill \\    1.	Cálculo del paso diametral transversal\\
    $Pt = Pn * cos\Psi$\\
    $Pt =  {{$pt}} [dientes/in]$\\
    
 \hfill \\   2.	Cálculo del diámetro de paso \\
    $dp=\dfrac{Np}{Pt}$\\
    $dp=  {{$dp}}        [in]$\\
    
 \hfill \\   3.	Cálculo de la velocidad \\
    $v=\dfrac{\pi*dp*np}{12}$\\
    $v=     {{$v}}         [fpm]$ \\
    
\hfill \\    4.	Cálculo de carga tangencial \\
    $W^t=\dfrac{33000*hp}{v}$\\
    $W^t=  {{$wt}}                   [lb]$\\
    \hfill \\
\noindent\rule{7.5cm}{0.4pt}\\     \color{black}DISEÑO APLICANDO AGMA 2001-D04 (FLEXIÓN)\\ \color{blue}\hfill \\
	Se calcula con los valores de  dp, v, $w^t$, Qv, \\
    
    
    2.	CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA EL PIÑÓN\\
    $\sigma_P=W^t*K_o*K_V*K_s*\dfrac{Pt}{F}*\dfrac{K_m*K_B}{J}$\\
    $\sigma_P=   {{$op}}                       [psi]$\\
    
    	Cálculo de los factores $K_*$\\
\hfill \\    2.1	Factor de sobrecarga \\
    (Depende del nivel de impacto de trabajo)\\
    $K_o =  {{$ko}} $\\
    
\hfill \\    2.2	Factor dinámico \\
    $K_V=(A+\dfrac{\sqrt{v}}{A})^B$\\
    $A=50+56(1-B)$\\
    $B=0.25(12-Q_v)^{\dfrac{2}{3}}$\\
    $K_V=  {{$kv1}} $\\
    
 \hfill \\   2.3	Factor de tamaño \\
    Determinación del factor de Lewis\\
    (Depende el numero de dientes del piñón, tabla)\\
    
    $Y =  {{$interpolar}}$\\
    
 \hfill \\   $K_s=  {{$ks}} $\\
    $K_s=1.192(\dfrac{F\sqrt{Y}}{Pn})^{0.0535}$\\
    (consideración, sí $K_s<1$ se tomará $K_s=1$)\\
    
\hfill \\    2.4	Factor de distribución de carga\\
    $K_m=1+C_{mc} (C_{pf}*C_{pm}+C_{ma} C_e )$\\
    $K_m=  {{$km}} $\\
    
    	$C_{mc}= {{$cmc}}$ \\
	$C_{pf}=  {{$cpf}}$ \\
\hfill \\    $C_{pm}=  {{$cpm}}$ \\
    (Depende de la separación de los cojinetes y línea de centro de cara de la rueda)\\
\hfill \\    	$C_{ma}=  {{$cma}}$ \\
    (Depende de la condición de construcción) \\
\hfill \\    $C_{ma}=A+BF+CF^2$\\
\hfill \\    $C_e=  {{$ce}}$ \\
    (Depende del ajuste al ensamble)\\
\hfill \\    2.5	Factor de espesor de aro.\\
    $m_B=\dfrac{t_R}{h_t}$ \\
    $K_B= {{$kb}}$\\
    
 \hfill \\   2.6	Factor geométrico \\
    (Depende del numero de dientes del piñón y engrane, Tabla)\\
    $i=\dfrac{np}{ng}=\dfrac{Ng}{Np}=\dfrac{dg}{dp}$\\
    $J_p =  {{$jp}}$\\
    
    
\hfill \\	3.  CÁLCULO DEL FACTOR DE SEGURIDAD PARA EL PIÑÓN\\
    $S_{Fp}=\dfrac{\dfrac{S_{tp}*Y_{Np}}{K_T*K_R}}{\sigma_p}$ \\
    $S_{Fp} =  {{$sfp}} $\\
    
\hfill \\    	$K_T=1$\\
    	$K_r=  {{$kr}}$\\
    (Depende de la confiabilidad)\\
    
\hfill \\    	$Y_{NP}=  {{$ynp}}$\\
    (Depende de los ciclos de trabajo)\\
    (Se debe comprobar que $S_{FP}>n_S$)\\
    
\hfill \\    4.  CÁLCULO DEL ESFUERZO DE FLEXIÓN PARA LA CORONA.\\
    $\sigma_G = \dfrac{\sigma_p}{J_p}*J_g$\\
    
    $\sigma_G =    {{$oc}}                        [psi]$\\
    
 \hfill \\   4.1	Factor geométrico \\
    (Depende del número de dientes de la corona y piñón)\\
     $J_g = {{$jc}}  $\\
    
\hfill \\    5.	CÁLCULO DEL FACTOR DE SEGURIDAD PARA LA CORONA\\
    $S_{FG}=\dfrac{\dfrac{S_tG*Y_{NG}}{K_T*K_R}}{\sigma_G} $\\
    $S_{FG}=  {{$sfc}} $\\
   \hfill \\ 	$K_T=1$\\
    	$K_r=  {{$kr}}$\\
    (Depende de la confiabilidad)\\
 \hfill \\   	$Y_{NG}=  {{$ync}}$\\
    (Depende de los ciclos de trabajo, Tabla)\\
  \hfill \\  	$S_{tG}=  {{$opcionflexionpinona}}$\\
    (Depende del tipo de material usado)\\
    (Se debe comprobar que $S_{FG}>n_S$)\\\hfill \\

\noindent\rule{7.5cm}{0.4pt}\\     \color{black}DISEÑO APLICANDO AGMA 2001-D04 (DESGASTE SUPERFICIAL)\\ \color{blue}\hfill \\
    1.  CALCULO DE ESFUERZO DE CONTACTO \\
    $\sigma_c = C_p(W^t*K_o*K_v*K_s*\dfrac{K_m}{d_p*F_{nor}}*\dfrac{C_f}{I})^{\dfrac{1}{2}}$\\
    $\sigma_c=  {{$odp}}                                  [psi]$\\                          \hfill \\       
    
    $Cp= {{$cp3}} $\\
    (Coeficiente elástico, depende del material del piñón y corona)\\
    
   \hfill \\ $C_f=1$\\
    (Factor de condición superficial, siempre que no especifique 1)\\
    
  \hfill \\  $I= {{$i3}} $\\
    (Factor geométrico, tomando las siguientes condiciones)\\
  \hfill \\  $i=\dfrac{Ng}{Np}=\dfrac{dg}{dp}$\\
    
    $\Phi_t = tan^{-1}(\dfrac{\Phi}{\varphi}) = {{$angulot}} [radianes] $\\
    $P_N = \dfrac{\pi}{P_n}cos\Phi_n = $\\
    
    $m_N = \dfrac{P_N}{0.95Z} \\donde z=v1+v2-v3$\\ \hfill \\  
    
    $r_p = \dfrac{dp}{2} = {{$rp}} [in]$\\
    $r_g = \dfrac{dg}{2} = {{$rg}} [in]$\\
    $r_{bP} = r_p cos\Phi_t = {{$rbp}} [in]$\\
    $r_{bG} = r_g cos\Phi_t = {{$rbg}} [in]$\\
    $a = \dfrac{1}{P_n} = {{$a}}[in]$\\
    
    Si uno u otro de los 2 primeros términos entre paréntesis rectangulares (v1,v2,v3) es mayor que el tercer termino, se debe reemplazar por el tercero\\
    
   \hfill \\     CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DEL PIÑÓN\\
    $S_{HP}=\dfrac{\dfrac{S_{cp}*Z_{NP}*C_{HP}}{K_T*K_R}}{\sigma_C} $\\
    $S_{HP} = {{$shp3}}  $\\
    
  \hfill \\  
    	$K_T  ; K_R$ se mantienen\\
    	$Z_{NP} = {{$zn3}}$ \\
    (Factor de vida al desgaste, depende de los ciclos de trabajo)\\
    \hfill \\
    	$ C_{HP} = 1 $ siempre para el piñón\\
    (Factor de dureza)\\
  \hfill \\  
    	$S_{cp}= {{$sc3}} $\\
    (Resistencia admisible al desgaste superficial)\\
   \hfill \\ 
    	CÁLCULO DEL FACTOR DE SEGURIDAD AL DESGASTE DE LA CORONA\\
    $S_{HG}=\dfrac{\dfrac{S_{cG}*Z_{NG}*C_{HG}}{K_T*K_R}}{\sigma_C} $\\
    $S_{HG} = {{$shc3}} $\\
    \hfill \\
    	$K_T ; K_R$ se mantienen\\
    	$Z_{NG}= {{$znc3}}$\\
    (Factor de vida al desgaste, depende de los ciclos de trabajo)\\
    \hfill \\
    	$S_{cG} = {{$scc3}} $\\
    (Resistencia admisible al desgaste superficial)\\
    \hfill \\
    	$C_{HG}= {{$chc3}} $\\
    (Factor de dureza, depende de la dureza Brinell)\\\hfill \\
    $C_HG=1+A'(i-1)$\\
    
        
    
    
    
    
    
    
    

    \end{multicols}
   
    
  

\end{document}