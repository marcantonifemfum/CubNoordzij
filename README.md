# CubNoordzij
  *Dynamic Noordzij cube PDF generator for variable fonts* / Generador tipogràfic d'instàncies variables pel cub de Noordzij en PDF


\[ CA ]

	COM TREBALLA?

```El codi```

[Noordzij_cub.ps](https://github.com/marcantonifemfum/CubNoordzij/blob/main/Noordzij_cub.ps) és l'algorisme, escrit en llenguatge PostScript, que genera dinàmicament l'icònic cub de Gerrit Noordzij, amb un ampli espectre de variables, tres de les quals són configurables via URL a través de les variables: *xyz* (instàncies 3D), *cos* i *glif*.

```La tipografia```

*Adobe Sans MM* és la tipografia (Multiple Master) de treball per aquest prototip. Té 2 eixos mestres (masters) dinàmics: /Weight i /Width, amb un ampli rang de valors d'instàncies que van de 50 a 1450. Aquesta font és a totes les màquines que tenen instal·lat AcrobatReader.

```l'Intèrpret```

*Ghostscript* és l'intèrpret de llenguatge PostScript® que treballa en servidors i màquines locals. Un projecte de codi obert (i també d'ús comercial) que fa més de 30 anys que creix en prestacions i eficiència (ve de sèrie a totes les distribucions de Linux). Actualment [Artifex Software, Inc.](https://ghostscript.com/) és qui manté el projecte.

```Interfície URL```

[cubNoordzij.php](https://github.com/marcantonifemfum/CubNoordzij/blob/main/cubNoordzij.php) és qui permet executar l'algorisme via URL on, dins la mateixa adreça, hi tenim 3 variables amb les que podem jugar.

```Les 3 variables```

La sintaxi dins la URL és sensitiva a caixa, qualsevol canvi de majúscules/minúscules pot induir un error o l'execució d'un PDF *per defecte*, un cub de Noordzij amb un glif **e** de 5x5x5.

*xyz=* nombre de glifs constructors pels 3 eixos XYZ. Coincideix amb el nombre d'instàncies variables de la tipografia. Ha de ser un valor enter entre 2 i 12

*cos=* cos del glif en punts tipogràfics. Pot ser un nombre enter amb decimals, entre 2 i 200 punts. El seu valor i el de xyz condicionen el format de pàgina.

*glif=* un sol (1) glif a compondre, descrit amb 4 notacions possibles:

	> glif=/egrave *nom literal normatiu del glif è, sempre precedit per un caràcter slash /*
	> glif=%E8 *codi hexadecimal del glif è, sempre precedit per un caràcter %*
	> glif=232 *codi decimal del glif è*
	> glif=è *escrivim directament el glif è*
	
```El PDF resultant```



Genera dinàmicament via URL el cub de Noordzij clàssic en format PDF, amb tres paràmetres variables:

\# l'element constructor: un glif o paraula: AdobeSansMM té 235 glifs si via xifrat o via nom, no se'l localtza, l'algorisme escriurà ##

\# instàncies (nombre d'elements constructors del costat del cub): de 1 fins a 15

\# el cos de la tipografia: de # fins a 200 pt (el format de pàgina ve condicionat pel cos)

Treballem de forma fixa dins la perspectiva isomètrica (xyz a 120° fugant al NO) que Gerrit Noordzij va glorificar a la portada de

L'ordre de posicionament dels glifs (no coincideix amb l'ordre de creixement dels màsters) és: el primer glif es situa al vèrtex SO del cub i el darrer glif es situa al vètex NE del cub. Els glifs s'ordenen en columnes, de baix a dalt i d'esquerra a dreta de cada lleixa (instàncies amb el mateix /Width)

L'ordre de creixement de l'eix X,Y del pes (/Weigth) és: en columnes de dalt a baix i de d'esquerra a dreta

L'ordre de creixement de l'eix Z de l'ample (/Width) és: el mínim a la lleixa de davant de tot i, el màxim, a la lleixa del darrera de tot (pla vertical d'índex 0)



	URLs D'EXECUCIÓ
									
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

	COM SEGUIRÀ EVOLUCIONANT?

aeiou


\[ EN ]

Comming soon…
