# CubNoordzij
 Generador tipogràfic pel cub de Noordzij en PDF / Dynamic Noordzij cube PDF generator for variable fonts
 
\[ català ]


	COM TREBALLA?

**El codi**

aeiou

*La Tipografia*

AdobeSansMM té 2 eixos mestres (masters): /Weight i /Width

```l'intèrpret```

aeiou


Genera dinàmicament via URL el cub de Noordzij clàssic en format PDF, amb tres paràmetres variables:

\# l'element constructor: un glif o paraula: AdobeSansMM té 235 glifs si via xifrat o via nom, no se'l localtza, l'algorisme escriurà ##

\# instàncies (nombre d'elements constructors del costat del cub): de 1 fins a 15

\# el cos de la tipografia: de # fins a 200 pt (el format de pàgina ve condicionat pel cos)

Treballem de forma fixa dins la perspectiva isomètrica (xyz a 120° fugant al NO) que Gerrit Noordzij va glorificar a la portada de

L'ordre de posicionament dels glifs (que no coincideix amb l'ordre de creixement dels màsters) és: el primer glif es situa al vèrtex SO del cub i el darrer glif (XxYxZ) es situa al vètex NE del cub. Els glifs s'ordenen en columnes, de baix a dalt i d'esquerra a dreta de cada lleixa (instàncies amb el mateix /Width)

L'ordre de creixement de l'eix X,Y del pes (/Weigth) és: en columnes de dalt a baix i de d'esquerra a dreta

L'ordre de creixement de l'eix Z de l'ample (/Width) és: el mínim a la lleixa (pla vertical) de davant de tot i, el màxim, a la lleixa del darrera de tot (pla vertical d'índex 0)



	COM HO FEM ANAR?
									
> text normal

https://pliegos.net/maker/GerritNoordzij/cubNoordzij.php?xyz=5&cos=72&glif=é

> codi hexadecimal

https://pliegos.net/maker/GerritNoordzij/cubNoordzij.php?xyz=5&cos=72&glif=%E9

> nom del glif

https://pliegos.net/maker/GerritNoordzij/cubNoordzij.php?xyz=5&cos=72&glif=/eacute

> amb el codi decimal

https://pliegos.net/maker/GerritNoordzij/cubNoordzij.php?xyz=5&cos=72&glif=233


https://ja.cat/NoordzijCub



	ERRORS

aeiou


	VISORS DE PDF

aeiou

	COM EL SEGUIREM FENT CRÉIXER?

aeiou


\[ english ]

Comming soon…
