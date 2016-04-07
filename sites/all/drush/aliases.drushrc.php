<?php


$aliases['dev'] = array(
	'uri'=> 'ctw2016.ccistaging.com',
	'root' => '/home/staging/subdomains/ctw2016/public_html',
	'remote-host'=> 'host.ccistudios.com',
	'remote-user'=> 'staging',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	),
	'ssh-options'=>'-p 37241'
);