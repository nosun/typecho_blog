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
  <a class="category-link" > <?php $this->title() ?></a>
            <?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>
<?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank">
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
        
    <a class="category-link" > <?php $this->title() ?></a>
 <?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>     
<?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank">
      编辑</a>
<?php endif;?>
    
</div>
</div>
<?php endif; ?>    
    <div class="post-content markdown" itemprop="articleBody">
        <div class="main-content-wrap" id="yl">
         <?php $this->content(); ?>
        </div>
    </div>
    <div class="post-footer main-content-wrap">
           <div class="post-footer-tags"> </div>
        <div class="post-actions-wrap">
            <?php $this->need('parts/pagination.php'); ?>
            <?php $this->need('parts/social.php'); ?>
        </div>
<div id="disqus_thread">
    <?php $this->need('comments.php'); ?>
</div>
        
    </div>
</article>
	<?php $this->need('footer.php'); ?><?php if (isset($this->fields->li)): ?>
<style>
.fen{
 display: block;
}
@media only screen and (min-width:1024px){
.fen{
  float: left;
    width: 364px;
   white-space:nowrap; 
    text-overflow: ellipsis;
    overflow: hidden;
}
}
</style>

<script>
$('#yl ul li').each(function(){
  $(this).addClass('fen')
})  

</script>
<?php endif; ?> 
