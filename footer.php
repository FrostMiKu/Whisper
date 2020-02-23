<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="px3">
 <footer id="footer" style="display:block;">
            <div class="footer-left">
                Copyright © <?php echo date('Y'); ?> By <a href="http://www.typecho.org" target="_blank" rel="nofollow">Typecho</a> & <a href="https://blog.frostmiku.com" target="_blank">FrostMiKu</a>
            </div>
            <div class="footer-right">
                <a href="http://beian.miit.gov.cn" target="_blank" rel="nofollow" style="text-decoration:none;">X ICP 备 xxxxxxx 号</a>
            </div>
        </footer>
		</div>
		<link rel="stylesheet" href="<?php $this->options->themeUrl('lib/font-awesome/css/font-awesome.min.css'); ?>">
		 <script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
        <?php if ($this->is('index')) : ?>
		<script src="<?php $this->options->themeUrl('lib/typed.js'); ?>"></script>
		<script async src="//busuanzi.ibruce.info/busuanzi/2.3/busuanzi.pure.mini.js"></script>
		<script>	
$(function () {
  $.get("<?php $this->options->siteUrl();?><?php echo date('Ymd').'.json';?>", function (data) {
    var data = data.data;
    // var str =  data.content+'\n'
    // + data.translation+"\n---- "
    // +data.author +'\n'
    var str =  data.content+'\n'
    + data.translation+"\n---- "
    
    var options = {
      strings: [ 
        str + "Who??^1000",
        str + "It's me^2000",
        str +'Haha, make a joke',
        str +data.author,
      ],
      typeSpeed: 20,
      startDelay:300,
      // loop: true,
    }
    var typed = new Typed(".description .typed", options);
  })
});
</script>
		<?php endif; ?>
		<?php if ($this->is('post')) : ?>
		<link rel="stylesheet" href="<?php $this->options->themeUrl('css/lightbox.min.css'); ?>">
		<script src="<?php $this->options->themeUrl('js/lightbox.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/pangu.min.js'); ?>"></script>
		<script src="<?php $this->options->themeUrl('lib/highlight.min.js'); ?>"></script>
		<script>
      $('#post-content img').wrap(function () {
      return '<a href="' + this.src + '" title="' + this.alt + '" data-lightbox="roadtrip"></a>';
      });
		</script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
    <?php endif; ?>
    <script>
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
        navigator.serviceWorker.register('<?php $this->options->themeUrl('/sw.js'); ?>').then(function(registration) {
          console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
          console.log('ServiceWorker registration failed: ', err);
        });
        });
      }
    </script>
    <script>pangu.spacingPage();</script>
		<?php $this->footer(); ?>
    </body>
</html>
