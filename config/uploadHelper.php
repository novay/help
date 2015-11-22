<?php 
	return [
		'validateFile' =>[
			'image'=>  [
				'rule'=>function ($file)
				{
					$imageMime = ['jpeg', 'png', 'bmp', 'jpg'];
					return in_array($file->guessExtension(),$imageMime);
				},
				'message'=>'File harus berformat jpeg, png, bmp atau jpg'
			]
		]
	];