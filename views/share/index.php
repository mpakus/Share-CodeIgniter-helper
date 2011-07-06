<?
$url	= 'http://rockufa.ru';
$text	= 'Best Rock Portal Ever';
$image	= 'http://rockufa.ru/forum/Smileys/rockufa/qut.gif';
?>
<p>
	<a href="<?=share_url('twitter',	array('url'=>$url, 'text'=>$text, 'via'=>'mpak666'))?>">Share to Twitter</a>
	<a href="<?=share_url('facebook',	array('url'=>$url, 'text'=>$text))?>">Share to Facebook</a>
	<a href="<?=share_url('buzz',		array('url'=>$url, 'image'=>$image, 'text'=>$text))?>">Share to Google Buzz</a>
	<a href="<?=share_url('vkontakte',	array('url'=>$url))?>">Share to Vkontakte</a>
</p>
<p>
	<?=share_button('twitter',	array('url'=>$url, 'text'=>$text, 'via'=>'mpak666', 'type'=>'iframe'))?>
	<?=share_button('facebook',	array('url'=>$url, 'text'=>$text))?>
	<?=share_button('buzz',		array('url'=>$url, 'image'=>$image, 'text'=>$text))?>
	<?=share_button('vkontakte',array('url'=>$url))?>
</p>