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

*cos=* cos del glif en punts tipogràfics. Pot ser un nombre enter amb decimals, entre 2 i 200 punts. El seu valor i el de *xyz* condicionen el format de pàgina.

*glif=* un sol (1) glif a compondre, descrit amb 4 notacions possibles:

	glif=/egrave  …nom literal normatiu del glif è, sempre precedit per un caràcter slash /
	glif=%E8      …codi hexadecimal del glif è, sempre precedit per un caràcter %
	glif=232      …codi decimal del glif è
	glif=è        …escrivim directament el glif è
	
L'algorisme disposa de molts altres paràmetres amb variabiltat (ordenació de glifs, orientció XYZ de les instàncies, selecció de tipografies, etc), que podem implementer si s'escau.

	
```El PDF resultant```

Un cop activem la URL d'execució dins la barra d'acreces d'un navegador, en pocs segons s'interpreta l'algorisme i es genera un PDF que apareix en pantalla (del navegador o visor de PDF) o es descarrega (depenent del dispositiu des d'on ens connectem).

	Contingut de pàgina
Gerrit Noordzij va glorificar a la portada del llibre «[De streek Theorie van het schrift](https://www.typemag.org/images/uploads/Noordzij_Streek_original_cover.jpg)» un cub tipogràfic en perspectiva isomètrica (XYZ a 120° fugant la Z al NO) que permet visonar la variabilitat del ductus d'un mateix glif en molts aspectes.

L'ordre de posicionament dels glifs (no coincideix amb l'ordre de creixement dels màsters) és: per defecte, en el pla XY, els glifs s'ordenen de baix a dalt i d'esquerra a dreta. En el pla XY, el pes dels glifs (Weight) s'ordena de dalt a baix i d'esquerra a dreta. En el pla Z, les lleixes (Layers de nxn glifs) s'ordenen d'esquerra a dreta, també en el pla Z, l'ample dels glifs (Width) s'ordena d'esquerra a dreta. En el pla XY, treballem amb 1 eix dinàmic: el pes (Weight), en el pla Z, treballem amb 1 eix dinàmic: l'ample (Width)

	Solapa lleixes (layers)
En aquest prototip millorem encara més la visió dels glifs ocults, en els plans verticals que formen el cub, incorporant-los en una lleixa (Layers) a la solapa de capes de PDF (Nagivation Panes), que permet aïllar i veure-les una a una. Aquesta opció és activa per defecte.

	Solapa Articles
Per fer un seguiment dels valors de les instàncies (pes i ample) de cada glif, es genera una etiqueta informativa de cadascun d'ells dins la solapa d'Articles (Nagivation Panes). Si treballem a un cos considerabñe (més de 100 punt), els glifs són clicables i amb la solapa d'Articles desplegada veurem l'ordre i valors de cadascun en una etiqueta lateral (i viceversa). Aquesta opció és activa per defecte.

	DocInfo (propietats del document) 
En tots els visors de PDF


	URLs D'EXECUCIÓ

Les adreces que segueixen exploren sintaxi i formats diversos per a un mateix glif:

> 5x5x5 instàncies, a cos 72, amb el glif è escrit amb text normal

https://pliegos.net/maker/GerritNoordzij/cubNoordzij.php?xyz=5&cos=72&glif=è

> 2x2x2 instàncies, a cos 200, amb el glif è escrit amb el seu codi hexadecimal

https://pliegos.net/maker/GerritNoordzij/cubNoordzij.php?xyz=2&cos=200&glif=%E8

> 10x10x10 instàncies, a cos 8, amb el glif è escrit amb el seu nom literal

https://pliegos.net/maker/GerritNoordzij/cubNoordzij.php?xyz=10&cos=8&glif=/egrave

> 8x8x8 instàncies, a cos 120, amb el glif è escrit amb el seu codi decimal

https://pliegos.net/maker/GerritNoordzij/cubNoordzij.php?xyz=8&cos=120&glif=232

> adreça curta que genera de forma fixa un cub de Noordzij amb un glif **e** de 5x5x5

https://ja.cat/NoordzijCub



	ERRORS

aeiou


	VISORS DE PDF

aeiou

	COM SEGUIRÀ EVOLUCIONANT?

aeiou


\[ EN ]

Comming soon…
