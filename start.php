<?php

Autoloader::map(array(
	'Httpful\Bootstrap' => Bundle::path('httpful').'bootstrap.php',
	'Httpful\Http'      => Bundle::path('httpful').'http.php',
	'Httpful\Httpful'   => Bundle::path('httpful').'httpful.php',
	'Httpful\Mime'      => Bundle::path('httpful').'mime.php',
	'Httpful\Request'   => Bundle::path('httpful').'request.php',
	'Httpful\Response'  => Bundle::path('httpful').'response.php',
	'Httpful\Handlers\CsvHandler'           => Bundle::path('httpful').'handlers/csvhandler.php',
	'Httpful\Handlers\FormHandler'          => Bundle::path('httpful').'handlers/formhandler.php',
	'Httpful\Handlers\JsonHandler'          => Bundle::path('httpful').'handlers/jsonhandler.php',
	'Httpful\Handlers\MimeHandlerAdapter'   => Bundle::path('httpful').'handlers/mimehandleradapter.php',
	'Httpful\Handlers\XHtmlHandler'         => Bundle::path('httpful').'handlers/xhtmlhandler.php',
	'Httpful\Handlers\XmlHandler'           => Bundle::path('httpful').'handlers/xmlhandler.php',
));

$handlers = array(
    \Httpful\Mime::JSON => new \Httpful\Handlers\JsonHandler(),
    \Httpful\Mime::XML  => new \Httpful\Handlers\XmlHandler(),
    \Httpful\Mime::FORM => new \Httpful\Handlers\FormHandler(),
    \Httpful\Mime::CSV  => new \Httpful\Handlers\CsvHandler(),
);

foreach ($handlers as $mime => $handler) {
    Httpful\Httpful::register($mime, $handler);
}

class_alias('Httpful\Request', 'Httpful');