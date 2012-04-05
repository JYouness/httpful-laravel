<?php

Autoloader::map(array(
	'Httpful\Http'      => Bundle::path('httpful').'http.php',
	'Httpful\Mime'      => Bundle::path('httpful').'mime.php',
	'Httpful\Request'   => Bundle::path('httpful').'request.php',
	'Httpful\Response'  => Bundle::path('httpful').'response.php',
));

class_alias('Httpful\Request', 'Httpful');