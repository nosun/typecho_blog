<?php $this->need('header.php'); ?> <header id="header" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>>


  <i id="btn-open-sidebar" class="fa fa-lg fa-bars"></i>
    <h1 class="header-title">
        <a class="header-title-link" href="<?php $this->options->siteUrl(); ?>" ><?php $this->options->title(); ?></a>
    </h1>
    
        
            <a  class="header-right-icon st-search-show-outputs"
                href="#about">
        
                <i class="fa fa-lg fa-search"></i>
            </a>
    
</header>

 <nav id="sidebar" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>>

<?php $this->need('sidebar.php'); ?>
</nav>

<?php if (isset($this->fields->fm)): ?>
<div class="post-header-cover
                    text-left
                    " style="background-image:url('<?php $this->fields->fm(); ?>');" data-behavior="3">
            
              <div class="post-header main-content-wrap text-center">
    
     <?php if (isset($this->fields->l)): ?><h1 itemprop="headline">
       <a class="link" href="<?php $this->fields->l(); ?>" target="_blank" itemprop="url"><?php $this->title() ?></a>
        </h1>

<?php else: ?>
          <h1 class="post-title" itemprop="headline">  <?php $this->title() ?>    </h1><?php endif; ?>
 
    <div class="post-meta">
    <time itemprop="datePublished" content="<?php $this->date('Y-m-j  H:i:s'); ?>">
	
		 <?php $this->date('M d,Y'); ?>
    	
    </time>
    
        <span>in </span>
    <a class="category-link" ><?php $this->category(',', true, '木有分类或者该分类已被删除'); ?></a>
<?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>
           <?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank">
     编辑</a>
<?php endif;?>
</div>
</div> </div><?php endif; ?>



   <div id="main" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>
                 class="
                        hasCoverMetaIn
                        ">



<article class="post" itemscope itemType="http://schema.org/BlogPosting">
    
<?php if (isset($this->fields->fm)): ?><?php else: ?>
<div class="post-header main-content-wrap text-left">
    
           <?php if (isset($this->fields->l)): ?><h1 itemprop="headline">
       <a class="link" href="<?php $this->fields->l(); ?>" target="_blank" itemprop="url"><?php $this->title() ?></a>
        </h1>

<?php else: ?>
          <h1 class="post-title" itemprop="headline">  <?php $this->title() ?>    </h1><?php endif; ?>
    
    <div class="post-meta">
        <time itemprop="datePublished" content="<?php $this->date('Y-m-j  H:i:s'); ?>">
             <?php $this->date('M d,Y'); ?>
        </time>
        <span>in </span>
        <a class="category-link" ><?php $this->category(',', true, '木有分类或者该分类已被删除'); ?></a>
         <?php if ($this->options->jsq == '0'): ?>
         <?php else: ?>
             <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?>
                 <?php endif; ?>
                 <?php if ($this->options->jsq == '2'): ?>
                     <?php $this->viewsNum(); ?>
                 <?php endif; ?>)
             </span>
        <?php endif; ?>
      <?php if($this->user->hasLogin()):?>
            <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" class="category-link"
               target="_blank">
                    编辑
            </a>
<?php endif;?>
</div>

</div>
<?php endif; ?>    
<div class="post-content markdown" itemprop="articleBody">
    <div class="main-content-wrap">
    <?php $this->content(); ?>
    <div style="float:right">
    <?php if (!empty($this->options->sidebarBlock) && in_array('bjq', $this->options->sidebarBlock)): ?>
    最后由 <?php $this->author() ?> 编辑于
        <?php echo gmdate('Y年m月d日 H:i', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?>
    <?php endif; ?>
    </div>
    </div>
</div>
    <div class="post-footer main-content-wrap">
        
            <div class="post-footer-tags">
                <span class="text-color-light text-small">
                    文章标签：</span><br/>


<nav class="tag tag--primary tag--small t-link" style=" display: inline-block;">  
<?php $this->tags('</nav><nav class="tag tag--primary tag--small t-link" style=" display: inline-block;">', true, ' <sx>无标签</sx>'); ?>

</nav>
                <?php if (!empty($this->options->sidebarBlock) && in_array('kp', $this->options->sidebarBlock)): ?>


    <div id="social">
        <div class="social-main">
            <span class="like">
                <a data-dialog="#popup-erwei" data-effect="effect-newspaper" title="跨屏浏览">&nbsp;跨屏浏览</a>
            </span>
            <span class="shang-p">
                <a data-dialog="#popup-shang" data-effect="effect-slide-top" title="赞助本站">赏</a>
            </span>
            <span class="share-s">
                <a data-dialog="#popup-share" data-effect="effect-newspaper" title="版权声明">&nbsp;版权声明</a>
            </span>
            <div class="clear"></div>
        </div>
    </div>
    <div class="popup effect-fade-scale" id="popup-erwei">
        <div class="popup-content">
            <center>
                <h3><i class="sidebar-button-icon fa fa-mobile-phone"></i>手机扫描下方二维码</h3>
                <div class="bdsharebuttonbox">
                    <img src="//pan.baidu.com/share/qrcode?w=200&h=200&url=<?php $this->permalink() ?>" alt="<?php $this->title() ?>"/>
                </div>
            </center>
        </div>
    </div>

    <div class="popup effect-fade-scale" id="popup-shang">
        <div class="popup-content">
            <center>
                    <h3>支付宝转账赞助本站</h3>
            <div class="bdsharebuttonbox">
            <img width="200" height="200"
                 <?php if ($this->options->zfbUrl){ ?>src="<?php $this->options->zfbUrl();?>"
                 <?php } else{ ?>
                     src="https://mobilecodec.alipay.com/show.htm?code=apx04121sgsu8ym0ho9wt59&picSize=L"
                 <?php };?> title="支付宝转账赞助"
                />
                <!--<p><img width="280" height="280" src="" title="微信转账赞助" /></p>--></div>
            </center>
        </div>
    </div>
    <div class="popup effect-fade-scale" id="popup-share">
        <div class="popup-content"><div class="bdsharebuttonbox">
            著作权归作者所有。<br>
            商业转载请联系作者获得授权，非商业转载请注明出处。<br>
            作者：<?php $this->author() ?><br>
            链接：<?php $this->permalink() ?><br>
        </div>
    </div>
</div>

<?php endif; ?> 
    </div>
    <div class="post-actions-wrap">
        <?php $this->need('parts/pagination.php'); ?>
        <?php $this->need('parts/social.php'); ?>
    </div>
    <div id="disqus_thread">
        <?php $this->need('comments.php'); ?>
    </div>
    </div>
</article>
<?php $this->need('footer.php'); ?>
