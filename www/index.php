<?php 
$parent_dir = basename(dirname(__DIR__));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $parent_dir ;?></title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<style>
		html,body{height: 100%;}
		body{display: table;width: 100%;}
		.wrapAll{display: table-row;height: 100%;}
		.index-header{background-color: #dff0d8;min-height: 60px;padding: 5px 0;}
		.page-header{text-transform: capitalize;font-weight: 400;color: #0083A6;}
		.index-list li{margin-bottom: 5px;}
		.page-count{font-size: 16px;color: #000}
		.index-footer{display: table-cell;padding: 15px 0;}
		.get-in-touch-btn{position: fixed;z-index: 180;width: 60px;height: 60px;bottom: 20px;overflow-y: hidden;right: 30px;text-align: center;background:rgba(255, 255, 255, 0.8);border: solid 1px rgba(0, 171, 215, 0.42);-webkit-border-radius: 50%;-moz-border-radius: 50%;-ms-border-radius: 50%;border-radius: 50%;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;}
		.get-in-touch-btn .envelop-icon{width: 36px; height: 36px;display: inline-block;vertical-align: top;margin-top: 11px;background: url(img/envelop.svg) center no-repeat;background-size: contain;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;}
	</style>
</head>
<body>
	<?php
	$rootDir = opendir(__DIR__.DIRECTORY_SEPARATOR);
	$dirArray = [];
	while($element = readdir($rootDir)) {
	  if ((substr($element, 0, 1) != ".") && strrpos($element, '.htm')) {
		$dirArray[] = $element;
	  }
	}
	closedir($rootDir);
	$projectCount = count($dirArray) ;
	if ($projectCount > 0) { sort($dirArray); }
	?>
	<div class="wrapAll">
		<header class="index-header">
			<div class="container clearfix">
				<a href="" class="pull-left">
					<img src="img/frontjet.png" alt="" class="img-responsive">
				</a>
			</div>
		</header>
		<div class="container">
			<div class="index-container">
				<h1 class="page-header">
					<?php echo $parent_dir ;?>
					<span class="pull-right page-count"><?php echo ($projectCount > 0)? $projectCount : "No"; ?> Page</span>
				</h1>
				<ol class="index-list">
				<?php if ($projectCount > 0) : ?>
					<?php foreach ($dirArray as $dir):?>
					<li><a href="<?php echo $dir ;?>" target="_blank"><?php echo $dir ;?></a></li>
					<?php endforeach; ?>
				<?php else: ?>
					<li><span>Nothing here, start adding projects to your server.</span></li>
				<?php endif; ?>
				</ol>
			</div>
		</div>
	</div>
	<footer class="index-footer text-center">
		©<?php echo date("Y"); ?> <a href="//frontjet.com/">Frontjet LLC</a> 
	</footer>
	<a href="mailto:hello@frontjet.com" class="get-in-touch-btn">
		<i class="envelop-icon"></i>
	</a>
</body>
</html>