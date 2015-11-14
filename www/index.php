<?php
if ($handle = opendir('.')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && $entry != "blank.html" && strpos($entry, "html")) {
            $entries[]="$entry\n";
        }
    }
    closedir($handle);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<style>
		html,body{height: 100%;}
		body{display: table;width: 100%;}
		.wrapAll{display: table-row;height: 100%;}
		.index-header{background-color: #dff0d8;min-height: 60px;padding: 5px 0;}
		.page-header{font-weight: 400;color: #0083A6;}
		.index-list li{margin-bottom: 5px;}
		.page-count{font-size: 16px;color: #000}
		.index-footer{display: table-cell;padding: 15px 0;}
		.get-in-touch-btn{position: fixed;z-index: 180;width: 60px;height: 60px;bottom: 20px;overflow-y: hidden;right: 30px;text-align: center;background:rgba(255, 255, 255, 0.8);border: solid 1px rgba(0, 171, 215, 0.42);-webkit-border-radius: 50%;-moz-border-radius: 50%;-ms-border-radius: 50%;border-radius: 50%;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;}
		.get-in-touch-btn .envelop-icon{width: 36px; height: 36px;display: inline-block;vertical-align: top;margin-top: 11px;background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAbCAYAAACJISRoAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAhFJREFUeNpiYBgFgw0wwlmrrykAyQQqmbuAIVTrAYzDgiSxH4gVqGSJPRA7YrMEZMEHsGSo1gWyjF59zQDqWBTAhMYXAOL5QMUCFFggQMiSDVAf7SfJIoja/Uhm4LXkIjQsibcI1QJHqBl4LWGAxgdxFiEsUMAXl0xYNRNjEboFELECoN4GIHYkbAnCokAgNsCwCLsPAoC4Hyg3nzifICw6ACQTUSxCWGAAdgRmECWgW8RCMGJDtRYANTGAkzYigg3AloMcsfpaAjTzOcBzO8QikN5Ewj5BtgjhIwMoGxRs96GWgywA+boQajDMon7ifILqowfQzBYPjYML0CBDzxsToeWgAWmWQMAFpPj4AMXrocHJAC+WIGo+gH1GhiXrYa5DKj4aobQ81PWIjAlNFCwYpefqaw0wjvyvNwwbtmbos7MzCWh5rWqEhv0DqMEbgIZ8QErWDUjmoGRMZEtAGuuRUglD1dUFDCfufGFQFud4AE1Jisj1BJagfIAtWTPiCpdXhUYNTx98q+fgZbkgK89ZePPe13o+LpYLqrMvFZJaQGNNwl9qTR1+fv9bLybF0ai56Irh44ff+0/d/uLw/tNvA3KqGRYsFoCKin5BUTZHnubTB57nGvQ/efTdwFGT74CMHGciVepNkC+AWADKTniQpvf/ZYFhAXUaEpiWGYALPGBaB/roAgMtAMhH1DILIMAA5NrIbOzoj4sAAAAASUVORK5CYII=) center no-repeat;background-size: contain;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;}
		.page-count{width: 40px;height: 40px;color: #fff;background: red;border-radius: 50%;overflow: hidden;text-align: center;line-height: 40px;}
	</style>
</head>
<body>




	<div class="wrapAll">
		<header class="index-header">
			<div class="container clearfix">
				<a href="//frontjet.com" class="pull-left">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAAAwCAYAAACWqXFuAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA4FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpmYTA2NjI3NC1iYjdlLTZmNDQtYTM5MC00MTJlYTAwZDk2MGIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjVFQjlDODQ1Q0VBMTFFNEI2QkM5NEZDRjU3MzIzNEEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjVFQjlDODM1Q0VBMTFFNEI2QkM5NEZDRjU3MzIzNEEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDA3YzA0NjktMzk4MC00ZWUxLTk4N2MtNmMwZjAyM2FiOWVjIiBzdFJlZjpkb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6MGMzNWI3MDgtYTU0Zi0xMTc3LWIwNDAtOGY2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" alt="" class="img-responsive">
				</a>
			</div>
		</header>
		<div class="container">
			<div class="index-container">
				<h1 class="page-header">
				<?php if (count($entries) > 0) : ?>
					<span class="pull-right page-count"><?php echo count($entries) ?></span>
				<?php endif; ?></h1>

				<?php if (count($entries) > 0) : ?>
				<ol class="index-list">
					<?php foreach ($entries as $dir):?>
					<li><a href="<?php echo $dir ;?>" target="_blank"><?php echo $dir ;?></a></li>
					<?php endforeach; ?>
				</ol>
				<?php else: ?>
					<p class="alert alert-danger text-danger">Nothing to show</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<footer class="index-footer text-center">
		&copy; <?php echo date("Y"); ?> <a href="//frontjet.com/"> Frontjet LLC</a>
	</footer>
	<a href="mailto:hello@frontjet.com" class="get-in-touch-btn">
		<i class="envelop-icon"></i>
	</a>
</body>
</html>