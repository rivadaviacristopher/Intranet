<?php
$this->get('agenda', function($arg){
	echo 'pagina da agenda de contato';
});

$this->get('agenda/{id}', function($arg){
	echo 'pagina de um contato especifico';
});
