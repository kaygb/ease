<?php
add_action('admin_head',function(){
	global $post;

	if(empty($post)){
		return;
	}
	?>

	<style type="text/css">
	#post_layout_options label{
	display:inline-block;
	width:156px;
	height:111px;
	background-repeat:no-repeat;
	background-size: contain;
	margin-right:10px;
	}

	#post_layout_options input{
		display: none;
	}

	<?php for ($i=1; $i<=3; $i++) { ?>

	#label_post_layout_<?php echo $i; ?>{	
	background-image: url(<?php echo get_stylesheet_directory_uri().'/static/images/set/single-'.$i.'.png';?>);
	}

	#post_layout_<?php echo $i; ?>:checked + #label_post_layout_<?php echo $i; ?> {
	border:1px solid #000;
	}

	<?php } ?>
	
	</style>
	<script type="text/javascript">
	jQuery(function($){
		$('tr#tr_header_img').hide();
		$('tr#tr_header_video_id').hide();
		
		$('body').on('change', '#post_layout_options input', function(){
			$('tr#tr_header_img').show();
			$('tr#tr_header_video_id').show();

			if ($(this).is(':checked')) {
				if($(this).val() != '2'){
					$('tr#tr_header_img').hide();
					$('tr#tr_header_video_id').hide();
				}
			} 
		});

		$('select#post_layout').change();
	});
	</script>
	<?php
});

add_filter('wpjam_post_post_options',function ($post_options){
	$post_options['layout-box'] = [
		'title'		=> '布局设置',
		'post_type'	=> 'post',
		'priority'	=> 'high',
		'fields'	=> [
			'feature_list'		=>['title'=>'特色列表形式',	'type'=>'checkbox',	'description'=>'在文章列表中以“特色形式”展示，醒目的展示效果，适合重点文章使用'],
			'post_layout'		=>['title'=>'布局',			'type'=>'radio',	'options'=>['1'=>'','2'=>'','3'=>''],	'show_admin_column'=>true],
			'header_img'		=>['title'=>'头图',			'type'=>'img',		'item_type'=>'url',	'description'=>'上传一张显示在文章顶部的图片'],
			'header_video_id'	=>['title'=>'腾讯视频id',		'type'=>'text',		'rows'=>4,	'description'=>'输入腾讯视频id，留空则不显示视频'],
		]
	];
	// $post_options['abstract-box'] = [
	// 	'title'		=> '摘要设置',
	// 	'post_type'	=> 'post',
	// 	'priority'	=> 'high',
	// 	'fields'	=> [
	// 		'post_abstract'	=>['title'=>'',	'type'=>'textarea',	'description'=>'自定义文章摘要，如留空，则自动调用文章首段文字...'],
			
	// 	]
	// ];

	return $post_options;
});