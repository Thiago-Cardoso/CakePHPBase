<?php

class Noticia extends AppModel {
	
	public $actsAs = array(
		'MeioUpload.MeioUpload' => array(
			'imagem' => array(
				// Campos opcionais
				'fields' => array(
					'dir' => 'imagem_folder',
					'filesize' => 'imagem_size',
				),
			)
		)
	);
}