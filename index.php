<?php
/**
 * 这是typecho系统的一套默认皮肤。你可以在<a href="http://typecho.org">typecho的官方网站</a>获得更多关于此皮肤的信息
 * 
 * @package Typecho Default Theme 
 * @author typecho
 * @version 1.0.0
 * @link http://typecho.org
 */?>
<?php $this->need('header.php'); ?>
		<div id="banner" class="jumbotron hidden-xs">
			<div class="container text-center">
				<h1><?php $this->options->title() ?></h1>
				<p><?php $this->options->headerSay() ?></p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
		<?php $this->need('crumbs.php'); ?>

			<div class="content-main">
				<?php while($this->next()): ?>
				<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
				<h4><small><?php $this->category(','); ?> <?php $this->date('Y年n月j日'); ?> <?php $this->commentsNum('%d 条评论'); ?></small></h4>
				<?php $this->excerpt(200,' ······'); ?>
				<?php endwhile; ?>
			</div>
			<ul class="pager">
				<li class="previous"><?php $this->pageLink('&larr; Older') ?></li>
				<li class="next"><?php $this->pageLink('Newer &rarr;','next') ?></li>
			</ul>
		</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>