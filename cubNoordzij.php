<?php

echo "
<!DOCTYPE html>
<html lang='ca'>
<head>
<title> el cub ic&ograve;nic de Gerrit Noordzij </title>
<link rel='icon' href='http://www.pliegos.net/maker/logoPliegOS_96x96.png' type='image/x-icon' />
<meta http-equiv='content-language' content='ca' />
<meta http-equiv='content-type'     content='text/html;charset=ISO-8859-1' />
<meta name='author'                 content='Marcantoni Malagarriga-Picas' />
<meta name='Description'            content='Dynamic Noordzij cube PDF generator for variable fonts' />
<meta name='keywords'               content='MultipleMaster, typography, PostScript, PDF, Open Source, AGPL-3.0' />
<meta name='robots'                 content='follow' />
<meta name='title'                  content='iconic Noordzij cube' />
<!-- Facebook Open Graph -->
<meta property='og:type'            content='website' />
<meta property='og:title'           content='el cub ic&ograve;nic de Gerrit Noordzij' />
<meta property='og:url'             content='https://pliegos.net/maker/GerritNoordzij/cubNoordzij.php' />
<meta property='og:site_name'       content='pliegos' />
<meta property='og:description'     content='Dynamic Noordzij cube PDF generator for variable fonts. Generador tipogr&agrave;fic del cub de Noordzij en PDF' />
<meta property='og:image'           content='https://pliegos.net/maker/sonarD2023/QR_SNRD2023_300x300.jpg' />
<meta property='og:image:type'      content='image/jpg' />
<meta property='og:image:width'     content='300' />
<meta property='og:image:height'    content='300' />
<meta property='og:image:alt'       content='el cub ic&ograve;nic de Gerrit Noordzij' />
<meta name='twitter:card'           content='summary_large_image' />
<meta name='twitter:url'            content='https://pliegos.net/maker/GerritNoordzij/cubNoordzij.php' />
<meta name='twitter:site' content='http://twitter.com/@femfum' />
<!-- m�xim 60 car�cters pel t�tol -->
<meta name='twitter:title'          content='iconic Noordzij cube' />
<!-- m�xim 126 car�cters per la descripci� -->
<meta name='twitter:description'    content='Dynamic Noordzij cube PDF generator for variable fonts. Generador tipogr&agrave;fic del cub de Noordzij en PDF' />
<meta name='twitter:image:src'      content='https://pliegos.net/maker/sonarD2023/QR_SNRD2023_300x300.jpg' />
</head>
<body>
";

if ($_SERVER['REQUEST_METHOD'] === 'GET')
{  // Si fem GET: passem el valor de les variables dins la mateixa URL

//ATENCI�: les variables NO poden comen�ar mai amb un num�ric!

 // esborrem les anteriors per si les mosques?
 putenv('xyz=');
 putenv('glif=');
 putenv('cos=');
// putenv('full=');

 // crida sense par�metres per l'execuci� �nica del prototip din�mic del cub de Noordzij
 // http://localhost/www.pliegos.net/maker/GerritNoordzij/cubNoordzij.php
 $xyz=$_GET['xyz'];
//echo($xyz.'<br>');
 $glif=$_GET['glif'];
//echo($glif.'<br>');
 $cos=$_GET['cos'];
//echo($cos.'<br>');
// $full=$_GET['full'];
//echo(mb_ord("$glif", 'ISO-8859-1') . '<br>');
//$aveure = IntlChar::ord("\u{2603}");
//echo(rawurlencode($glif));
//exit('<br>' . ' ...em veus?');
}
else
{  // Si fem POST: les variables vindran triades des d'index_##.php

 $xyz=$_POST['xyz'];
 //echo $vp;  // ensenyem vores de les p�gines?

 $glif=$_POST['glif'];
 //echo $nup;  // nUp

 $cos=$_POST['cos'];
 //echo $hv;  // orientaci�

// $full=$_POST['full'];
 //echo $full;  // full d'impressi�
// echo $_POST['tlab'];  // text a compondre
// exit(' ...bon dia!');
}

// minimitzem el tr�nsit de dades a trav�s de variables d'entorn i aix� ens estalviem d'escriure les dades a disc
// de manera que, un cop capturades les variables de la URL, en fem un putenv de cadascuna, per despr�s
// llegir-les de dins el .ps a trav�s de l'operador getenv del GS 

putenv("MRCT_xyz=$xyz");  // desem si ensenyem les vores de les p�gines a la variable d'entorn 
putenv("MRCT_glif=$glif");  // desem l'nup a la variable d'entorn 
putenv("MRCT_cos=$cos");  // desem l'orientaci� a la variable d'entorn 
//putenv("MRCT_full=$full");  // desem el format del full d'impressi� a la variable d'entorn 

// treballem amb l'hora del client i no pas amb la del servidor
//SNRD
/*
// L'UNIC METODE fiable per passar l'hora del client sera via variable GET/POST si apuntem a un index.html que
// activi el PHP de manera que si excitem els algorismes via QR funcioni (perque via URL segur que ho fa)
echo '<script type="text/javascript">
var horaminutsegon = new Date();
document.write
(
 ("0" + horaminutsegon.getHours()) . slice(-2) + ":" + ( "0 " + horaminutsegon.getMinutes()) . slice(-2) + ":" + ( "0" + horaminutsegon.getSeconds()) . slice(-2)
);
document.cookie="horaminutsegon";
</script>';
// exit($_COOKIE['horaminutsegon'].' ...en podem extraure l\'hora del client?');
$ficali = $_COOKIE['horaminutsegon'];
putenv("MRCT_qhe = $ficali");  // el valor de la galeta que duu l'hora del client en format (hh:mm:ss)
*/

//en tenim prou com a nom �nic?
$PDFunic = date("d"."B"."H"."i"."s");

//$somaPS = "/home/marcantoni/pliegos.net/maker/";  // path al ps al servidor www.pliegos.net del DreamHost
//$somaPS = "/var/www/wordpress/maker/plegaVeu/";  // path al ps al nou servidor www.pliegos.net de Teixidora
//$somaPS = "/Library/WebServer/Documents/www.pliegos.net/maker/plegaVeu/";  // path al ps al localhost del Macbook Air

//SNRD
//URLsnr
$somaPS = "/Library/WebServer/Documents/www.pliegos.net/maker/GerritNoordzij/";  // path al ps cap al localhost del MacbookAir
//$somaPS = "/var/www/wordpress/maker/GerritNoordzij/";  // path al ps cap al servidor de Teixidora


//$somaPDF = "/home/marcantoni/pliegos.net/maker/pdf/";  // path al pdf al servidor www.pliegos.net del DreamHost
//$somaPDF = "/var/www/wordpress/maker/plegaVeu/pdf/";  // path al pdf al nou servidor www.pliegos.net de Teixidora
//$somaPDF = "/Library/WebServer/Documents/www.pliegos.net/maker/plegaVeu/pdf/";  // path al pdf al localhost del Macbook Air

//SNRD
//URLsnr
//@EP el directori /pdf on s'allotgen els resultats ha de tenir tots els permisos! (si no peta el GS sense que ens digui perqu�)
$somaPDF = "/Library/WebServer/Documents/www.pliegos.net/maker/GerritNoordzij/pdf/";  // path al pdf cap al localhost del MacbookAir
//$somaPDF = "/var/www/wordpress/maker/GerritNoordzij/pdf/";  // path al pdf cap al servidor de Teixidora

//SNRD
//URLsnr
//$somaGS = "/usr/bin/";  // path a l'executable de Ghostscript al nou servidor www.pliegos.net de Teixidora
$somaGS = "/usr/local/bin/";  // path a l'executable de Ghostscript al localhost del Macbook Air


// EP! ens cal treure les www doncs el servidor de Teixidora t� ara un problema al WordPress que fa que bloqui l'acc�s URL
//$baseurlPDF = "http://pliegos.net/maker/plegaVeu/pdf/";  // base url al pdf al nou servidor www.pliegos.net de Teixidora
//$baseurlPDF = "http://localhost/www.pliegos.net/maker/plegaVeu/pdf/";  // base url al pdf al localhost del Macbook Air

//SNRD
//URLsnr
$baseurlPDF = "http://localhost/www.pliegos.net/maker/GerritNoordzij/pdf/";  // base url al pdf al localhost del MacbookAir
//EP! al servidor de Teixidora �s clau NO posar-hi les 3 www al davant, doncs si les duu d�na problemes al descarregar el PDF!
//$baseurlPDF = "http://pliegos.net/maker/GerritNoordzij/pdf/";  // base url al pdf al servidor de Teixidora


//$baseURL = "http://www.pliegos.net/maker";  // base url a la interf�cie del nou servidor www.pliegos.net de Teixidora
//$baseURL = "http://localhost/www.pliegos.net/maker";  // base url a la interf�cie del localhost del Macbook Air

//SNRD
//URLsnr
$baseURL = "http://localhost/www.pliegos.net/maker/GerritNoordzij/cubNoordzij.php";  // execuci� recursiva al localhost del MacbookAir
// EP! aqu� podem posar-hi o no les 3 www al davant
//$baseURL = "http://pliegos.net/maker/GerritNoordzij/cubNoordzij.php";  // execuci� recursiva al servidor de Teixidora


$PSapplet = $somaPS . "Noordzij_cub.ps";


//URLsnr
//$pdfnomes = $PDFunic . "_plegaVeu.pdf";
$pdfnomes = $PDFunic . "_cubDeNoordzij.pdf";


$pdfFile = $somaPDF . $pdfnomes;

// $command = "/usr/local/bin/gs -q -dBATCH -dNOPAUSE -dNOSAFER -sDEVICE=pdfwrite -sOutputFile=".$pdfFile." -c .setpdfwrite -f ".$PSapplet;  // servidor www2 de la UB
// GPL Ghostscript 8.62 (2008-02-29) al servidor www de la UB
// $command = "gs -q -dNOSAFER -o ".$pdfFile." -sDEVICE=pdfwrite -c .setpdfwrite -f ".$PSapplet;
// GPL Ghostscript 9.## del DreamHost de pliegos.net + localhost del MacBook Air

// EP �s fonamenal que la crida a l'executable (almenys al localhost del Macbook Air) hi hagi el path sencer!

//SNRD
// aquesta crida encara �s valida pel GS 9.27 del nou servidor de Teixidora
//$command = $somaGS . "gs -q -dNOSAFER -o '" . $pdfFile . "' -sDEVICE=pdfwrite -dAutoRotatePages=/None -c .setpdfwrite -f '" . $PSapplet . "'";

//SNRD
// EP crida a partir de la versi� GS 9.55 al localhost del MacBookAir
$command = $somaGS . "gs -q -dNOSAFER -o '" . $pdfFile . "' -sDEVICE=pdfwrite -dPDFSETTINGS=/prepress -dAutoRotatePages=/None -f '" . $PSapplet . "'";

//echo $command;
//exit(" <<<< EP!");

// temps d'espera frisso?
//echo("<center><img src='frisso.gif' /></center>");

// si posem </pre> ens llistar� els missatges respectant la sintaxi que ve del PS

if(false)
{
 echo '<pre>';
 // m�tode normal de llistat del prompt
 $LaDarrera = system($command, $ElQtorna);
 echo '</pre>';
}
else
{
// aquest �s un m�tode per capturar el prompt i evitar que surti
ob_start();
$LaDarrera = passthru($command, $ElQtorna);  // $LaDarrera queda buida
$prompt = ob_get_contents();
ob_end_clean();
}

// demostra com treballa amb la captura de la darrera linia i el parametre de tornada
// echo '</p><hr />La darrera Linia: ' . $LaDarrera . '<hr />El que ens torna: ' . $ElQtorna;
// $LaDarrera �s la darrera l�nia del prompt
// an�lisi d' $ElQtorna
// si torna 127 �s que el gs no s'ha executat?
// si torna 1 �s que hi ha hagut un ofendingcommand (error a l'execuci� del ps)
// si torna 0 �s que el .ps s'ha executat sense errors

// exit("...que ha fet?");

// com avaluem si s'ha generat el pdf correctament?
if ($ElQtorna == 127)
{  // el gs NO s'ha executat
 // exit("...sembla que el GS no s'ha executat");
 echo "<center><span style='color:#ff0000;font-family:monospace;font-size:24px'><br><br>&gt;&gt;&gt; l'int&egrave;rpret Ghostscript no s'ha executat &lt;&lt;&lt;</span>";
//SNRD
//URLsnr
 exit("<br><p><br><p><span style='color:#ff0000;font-family:monospace;font-size:24px'><a style='color:#ff0000;font-family:monospace;font-size:24px' href='mailto:marcantoni@femfum.com'>documenta'ns l'error via email, gr&agrave;cies!</a><br><br><a style='color:#ff0000;font-family:monospace;font-size:18px' href='$baseURL'>iconic Noordzij cube</a></center>");

echo "</body></html>";
}
{
 //      if (file_exists($pdfFile))
 if ($ElQtorna == 0)
 {
  // echo ($prompt);  // el prompt del .ps llistat pel gs
//  exit("...sembla que ho ha fet b�!");

// forcem la desc�rrega d'un PDF
//header('Content-type: application/pdf, text/html');
// nom del pdf per anomenar i desar
//header('Content-Disposition: attachment; filename=Fatarella18_ca.pdf');
// url
//readfile('http://femfum.com/OnEtsOncleGuillem/Fatarella18_ca.pdf');

  // forcem l'obertura del pdf a la mateixa finestra
  header("Location:" . $baseurlPDF . $pdfnomes);

//echo '<script type="text/javascript">window.open("http://localhost/www.pliegos.net/maker/'.$pdfnomes.'");</script>';

//           echo "<center><font color='#00ff00'>***** ginyB42 HA ENLLESTIT la feina correctament *****</font><br><p><br><p></center>";
//           $txerKB = ceil(filesize($pdfFile)/1024);
//           echo "</font><ul><font color='#00ff00'>Tiba't la composici&oacute;... <a href=$pdfFile TARGET='resource window'>$pdfFile ($txerKB Kb)</a>";
//           echo "<br><p><br><p><a href='$urlDtreball'> ...pots clicar aqu&iacute; per tornar a composar.</a></font></font></ul>";

// esborrem tots els fitxers del directori pdf que tinguin m�s de 24 hores
  $path="pdf";
  if (is_dir("$path") )
  {
   $manegal=opendir($path);
   while (false!==($file = readdir($manegal)))
   {
    if ($file != "." && $file != "..")
    {
     $Diff = (time() - filectime("$path/$file"))/60/60/24;
     if ($Diff > 1) unlink("$path/$file");
    }
   }
   closedir($manegal);
  }

 }
 else
 { // podem provocar errors executant sense interf�cie amb nom�s comandes via URL (captura GET)
  // aqu� llistem l'ERROR del prompt i demanem que s'envi�
  echo "<center><span style='color:#ff0000;font-family:monospace;font-size:24px'><br><br>&gt;&gt;&gt; ERROR d'execuci&oacute; de l'algorisme &lt;&lt;&lt;</span>";
  echo "<br><br><span style='color:#999999;font-family:monospace;font-size:24px'>".$prompt."</font><br></span>";
//SNRD
//URLsnr
  exit("<br><p><br><p><span style='color:#ff0000;font-family:monospace;font-size:24px'><a style='color:#ff0000;font-family:monospace;font-size:24px' href='mailto:marcantoni@femfum.com'>documenta'ns l'error via email, gr&agrave;cies!</a><br><br><a style='color:#ff0000;font-family:monospace;font-size:18px' href='$baseURL'>iconic Noordzij cube</a></center>");
 }

 echo "</body></html>";
}

?>
