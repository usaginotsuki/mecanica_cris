\documentclass[a4paper,9pt,landscape]{article}
\usepackage{adjustbox}
\usepackage[english]{babel}
\usepackage[scaled=.92]{helvet}
\usepackage{fancyhdr}
\usepackage[svgnames,table]{xcolor}
\usepackage[a4paper,inner=1.5cm,outer=1.5cm,top=1cm,bottom=1cm,bindingoffset=0cm]{geometry}
\usepackage{blindtext}
\geometry{textwidth=\paperwidth, textheight=\paperheight, noheadfoot, nomarginpar}

\renewcommand{\familydefault}{\sfdefault}

\pagestyle{fancy}
\fancyhead{}
\renewcommand{\headrulewidth}{0pt}
\fancyfoot{}
\fancyfoot[LE,RO]{\thepage}

\fancyfoot[C]{\fontsize{8pt}{8pt}\selectfont The above document is auto-generated.}
\renewcommand{\footrulewidth}{0.2pt}

\begin{document}

    \section*{\centering{LaraTeX Demo Document}}
    
    \begin{center}
        \item[Name :] {{ $Name }}
        \item[Date of Birth :] {{ $Dob }}
    \end{center}
    
    \blindtext
    
    \begin{table}[ht]
        \centering
        \renewcommand{\arraystretch}{2}
        \begin{tabular}{|c|l|} 
             \hline
             \rowcolor[HTML]{E3E3E3}
             \textbf{ID} & \textbf{Language} \\
             \hline\renewcommand{\arraystretch}{1.5}
             
             @foreach($languages as $key => $language)
                {{ $key }} & {{ $language }} \\ \hline
             @endforeach
             
        \end{tabular}
        \caption{Language Summary}
    \end{table}
    
    \begin{center}
        {!! $SpecialCharacters !!}
    \end{center}

\end{document}