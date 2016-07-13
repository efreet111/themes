<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gettext Test</title>
</head>

<body>
<?php

// Plural gettext function
function _p($singular,$plural,$number) {
	return sprintf(ngettext($singular, $plural, abs($number)), $number);
}


// Idioma
//$lang = 'es_ES';
$lang = 'pt_BR';

// Dominio
$text_domain = '/camaleon_v3/themes/';

// Dependiendo de tu OS putenv/setlocale configurarán tu idioma.
putenv('LC_ALL='.$lang);
setlocale(LC_ALL, $lang);

// La ruta a los archivos de traducción
bindtextdomain($text_domain, './locale' ); 

// El codeset del textdomain
bind_textdomain_codeset($text_domain, 'UTF-8'); 

// El Textdomain
textdomain($text_domain);

// Cadena de texto de prueba
echo _("Hello World");

echo "<br />\n";

echo _p("You have %d message","You have %d messages",1);

echo "<br />\n";

echo _p("You have %d message","You have %d messages",25);


?><br />
</body>
</html>