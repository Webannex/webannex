<?php
if(count($dataprovider)>0):

	foreach($dataprovider as $data):
	
	$file = Yii::getPathOfAlias('webroot').DS.'upload'.DS.Yii::app()->getModule('file')->uploadFolder.DS.$data->folder.DS.$this->type.DS;
	
	if(Yii::app()->cFile->set($file.$data->file)->exists)
		$img = '<img alt = "'.strip_tags($data->description).'" class = "j-lazy" src = "/upload/'.Yii::app()->getModule('file')->uploadFolder.'/'.$data->folder.'/'.$this->type.'/'.$data->file.'"/>';
	else
		continue;
	?>
		<a href = "/upload/<?=Yii::app()->getModule('file')->uploadFolder;?>/<?=$data->folder;?>/original/<?=$data->file;?>">
			<?=$img;?>
		</a>
	<?php endforeach;	
	JS::add('gallery_init', "gallery_init();");
endif;
?>

