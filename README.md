# CubNoordzij
  *Dynamic Noordzij cube PDF generator for variable fonts* / Generador tipogràfic d'instàncies variables pel cub de Noordzij en PDF


\[ CA ]

	COM TREBALLA?

```El codi```

[Noordzij_cub.ps](https://github.com/marcantonifemfum/CubNoordzij/blob/main/Noordzij_cub.ps) és l'algorisme, escrit en llenguatge PostScript, que genera dinàmicament l'icònic cub de Gerrit Noordzij, amb un ampli espectre de variables, tres de les quals són configurables via URL a través de: *xyz* (instàncies 3D), *cos* i *glif*.


```La tipografia```

*Adobe Sans MM* és la tipografia (Multiple Master) de treball per aquest prototip. Té 2 eixos mestres (masters) dinàmics: /Weight i /Width, amb un ampli rang de valors d'instàncies que van de 50 a 1450. Disposa d'un joc de 230 glifs. Aquesta font és a totes les màquines que tenen instal·lat Adobe Acrobat Reader, com a recurs automàtic de substitució de tipografies.


```l'Intèrpret```

*Ghostscript* és l'intèrpret de llenguatge PostScript® que treballa en servidors i màquines locals. Un projecte de codi obert (i també d'ús comercial) que fa més de 30 anys que creix en prestacions i eficiència (ve de sèrie a totes les distribucions de Linux). Actualment [Artifex Software, Inc.](https://ghostscript.com/) és qui manté el projecte.


```Interfície URL```

[cubNoordzij.php](https://github.com/marcantonifemfum/CubNoordzij/blob/main/cubNoordzij.php) és qui permet executar l'algorisme via URL on, dins la mateixa adreça, hi tenim 3 variables amb les que podem jugar.


```Les 3 variables```

La sintaxi dins la URL és sensitiva a caixa, qualsevol canvi de majúscules/minúscules pot induir un error o a l'execució d'un PDF *per defecte*: un cub de Noordzij amb un glif **e** de 5x5x5.

*xyz=* nombre de glifs constructors pels 3 eixos XYZ. Coincideix amb el nombre d'instàncies variables de la tipografia. Ha de ser un valor enter entre 2 i 12

*cos=* cos del glif en punts tipogràfics. Pot ser un nombre enter amb decimals, entre 2 i 200 punts. El seu valor i el de *xyz* condicionen el format de pàgina.

*glif=* un sol (1) glif a compondre, descrit amb 4 possibles notacions:

	glif=/egrave  …nom literal normatiu del glif è, sempre precedit per un caràcter slash /
	glif=%E8      …codi hexadecimal del glif è, sempre precedit per un caràcter %
	glif=232      …codi decimal del glif è
	glif=è        …escrivim directament el glif è
	
L'algorisme disposa de molts altres paràmetres amb variabilitat (ordenació de glifs, orientció XYZ de les instàncies, selecció de tipografies, etc), que podem implementar més endavant si s'escau.

	
```El PDF resultant```

Un cop activem la URL d'execució dins la barra d'acreces d'un navegador, en pocs segons, s'interpreta l'algorisme i es genera un PDF que apareix en pantalla (del navegador o visor de PDF) o es descarrega (depenent del dispositiu des d'on ens connectem).

	Contingut de pàgina
	
Gerrit Noordzij va glorificar a la portada del llibre «[De streek Theorie van het schrift](https://www.typemag.org/images/uploads/Noordzij_Streek_original_cover.jpg)» un cub tipogràfic en perspectiva isomètrica (XYZ a 120° fugant la Z al NO) que permet visionar la variabilitat del ductus/mètrica, d'un mateix glif, en molts aspectes.

L'ordre de posicionament dels glifs (no coincideix amb l'ordre de creixement dels màsters) és: per defecte, en el pla XY, els glifs s'ordenen de baix a dalt i d'esquerra a dreta. En el pla XY, el pes dels glifs (Weight) s'ordena de dalt a baix i d'esquerra a dreta. En el pla Z, les lleixes (Layers de *nxn* glifs) s'ordenen d'esquerra a dreta, també en el pla Z, l'ample dels glifs (Width) s'ordena d'esquerra a dreta. En el pla XY, treballem amb 1 eix dinàmic: el pes (Weight), en el pla Z, treballem amb 1 eix dinàmic: l'ample (Width)

	Solapa lleixes (Layers)
	
En aquest prototip millorem encara més la visió dels glifs ocults, en els plans verticals que formen el cub, incorporant-los en una lleixa (Layers) a la solapa de capes de PDF (Nagivation Panes), que permet aïllar i veure-les una a una (no tots els *viewers* detecten les capes). Aquesta opció és activa per defecte.

	Solapa Articles
	
Per fer un seguiment del valor de les instàncies (pes i ample) de cada glif, es genera una etiqueta informativa de cadascun d'ells dins la solapa d'Articles (Nagivation Panes). Si treballem a un cos considerabñe (més de 100 punts), els glifs són clicables i, amb la solapa d'Articles desplegada, veurem l'ordre i valors de cadascun en una etiqueta lateral (i viceversa). Aquesta opció és activa per defecte però no tots els *viewers* interpreten aquests vincles.

	DocInfo (propietats del document) 
	
En tots els visors de PDF podem accedir a les propietats del document (p.e. CTRL+D a l'Acrobat), on s'hi ens fixem en el camp de Paraules Clau (Keywords), hi veurem escrita la URL amb que hem generat el PDF, amb totes les variables particulars de l'execució.

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

Alguns descuits en la sintaxi d'escriptura de la URL poden provocar errors d'execució, en forma d'un PDF en blanc o en forma d'una pàgina informativa on se'ns donen detalls del què ha passat. Per exemple, si al camp *xyz=* hi posem un text en comptes d'un numèric, succeix això… https://pliegos.net/maker/GerritNoordzij/cubNoordzij.php?xyz=aeiou&cos=72&glif=/germandbls

També, quan un determinat glif no es localitza, per error de codi, o nom, o senzillament és inexistent dins el joc de caràcters de la font, l'algorisme el substitueix pel signe… # (numbersign).


	VISORS DE PDF

Més enllà de l'Adobe Acrobat, els navegadors d'Internet han incorporat *viewers* de PDF que incrusten el document dins una finestra com si es tractés d'un document html. Aquests intèrprets (escrits en JS) no sempre poden accedir a les funcionalitats que aquest estàndard permet. Per exemple: les capes no són visibles en els *viewers* nadius dels navegadors Chrome i Brave. En canvi, sí que ho són al vsualitzador de PDF de Mozilla Firefox. En tots aquest navegadors s'hi poden veure les etiquetes dels glifs (solapa Articles) però en canvi en cap són clicables.

	COM SEGUIRÀ EVOLUCIONANT?

Tenim previst escriure un algorisme paral·lel dins un entorn JS Canvas/SVG que ens permeti fer el mateix i on la pantalla del dispositiu sigui la que mani en tot moment. Un complement menys lúdic i més tipogràficament útil que el que han desenvolupat la gent d'[Axis-Praxis](https://www.axis-praxis.org/playground/cube/).

Hauríem de poder treballar amb col·leccions d'instàncies estàtiques ja creades. Pel que fa a incorporar les Variable Fonts (OTF/TTF/WOFF/WOFF2) necessitaríem col·laborar amb alguna llibreria (Python?) que treballes dinàmicament per generar-les *on the fly*.

Mentre esperem que l'evolució dels projectes de Ghostscript/Freetype incporporin operadors al mateix nivell de rapidesa i precisió amb que treballem les MM, no podrem encara establir un diàleg prou fluïd amb el nostre vell i estimat llenguatge de programació PostScript.


\[ EN ]

Comming soon…
