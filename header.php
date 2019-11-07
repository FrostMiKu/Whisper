<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="initial-scale=1,width=device-width,minimum-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="wap-font-scale" content="no">
		<meta http-equiv="Cache-Control" content="no-transform"/>
		<meta http-equiv="Cache-Control" content="no-siteapp"/>
        <meta name="description" itemprop="description" content="<?php $this->options->description() ?>">
        <meta name="keywords" content="<?php $this->options->keywords() ?>">
		<meta property="og:type" content="blog"/>
        <meta property="og:locale" content="zh_CN">
        <meta property="og:image" content="<?php if($this->options->logoimg): ?><?php $this->options->logoimg();?><?php else : ?><?php $this->options->themeUrl('images/logo.png'); ?><?php endif; ?>">
        <meta property="og:site_name" content="<?php $this->options->title(); ?>">
		 <?php if ($this->is('index')): ?>
		<meta property="og:url" content="<?php $this->options->siteUrl();?>"/>
		<meta property="og:title" content="<?php $this->options->title();?>"/>
		<meta property="og:author" content="<?php $this->author->name();?>"/>
		<meta property="og:description" content="<?php $this->options->description();?>"/>
		<?php endif;?>
		<?php if ($this->is('post') || $this->is('page')): ?>
		<meta property="og:url" content="<?php $this->permalink();?>"/>
		<meta property="og:title" content="<?php $this->title();?> - <?php $this->options->title();?>"/>
		<meta property="og:author" content="<?php $this->author();?>"/>
		<meta property="og:description" content="<?php $this->description();?>"/>
		<meta property="og:release_date" content="<?php $this->date(); ?>"/>
		<?php endif;?>
        <?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
		<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
        <?php if($this->options->favicon): ?><link rel="shortcut icon" href="<?php $this->options->favicon();?>"><?php endif; ?>
        <?php if($this->options->appleicon): ?><link rel="apple-touch-icon" sizes="180x180" href="<?php $this->options->appleicon();?>"><?php endif; ?>
        <link rel="manifest" href="<?php $this->options->themeUrl('/manifest.json'); ?>">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
        <script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
        <script>
            document.addEventListener("error", function(e) {
                var elem = e.target;
                if (elem.tagName.toLowerCase() == 'img') {
                    elem.style.display = 'none'
                }
            }, true);
            
        </script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/katex.min.css" integrity="sha384-zB1R0rpPzHqg7Kpt0Aljp8JPLqbXI3bhnPWROx27a9N0Ll6ZP/+DiW/UqRcLbRjq" crossorigin="anonymous">
    	<!-- The loading of KaTeX is deferred to speed up page rendering -->
		<script defer src="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/katex.min.js" integrity="sha384-y23I5Q6l+B6vatafAwxRu/0oK/79VlbSz7Q9aiSZUvyWYIYsd+qj+o24G5ZU2zJz" crossorigin="anonymous"></script>
    	<!-- To automatically render math in text elements, include the auto-render extension: -->
    	<script defer src="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/contrib/auto-render.min.js" integrity="sha384-kWPLUVMOks5AQFrykwIup5lo0m3iMkkHrD0uJ4H5cjeGihAutqP0yW0J6dpFiVkI" crossorigin="anonymous"
        onload="renderMathInElement(document.body);"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.5.0/tocbot.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.5.0/tocbot.css">

    </head>