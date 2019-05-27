<div class="sidebar-profile">
    <a href="/#about">
        <img class="sidebar-profile-picture"
             <?php if ($this->options->logoUrl){ ?>src="<?php $this->options->logoUrl(); ?>"
             <?php }else{ ?>src="<?php $this->options->themeUrl('image/avatar.jpg'); ?>"<?php }; ?>/> </a>
    <span class="sidebar-profile-name"><?php $this->options->title(); ?></span>
</div>
<ul class="sidebar-buttons">
    <li class="sidebar-button">
        <a class="sidebar-button-link " href="<?php $this->options->siteUrl(); ?>">
            <i class="sidebar-button-icon fa fa-lg fa-home"></i>
            <span class="sidebar-button-desc">
                主页
            </span>
        </a>
    </li>
    <li class="sidebar-button">
        <a class="sidebar-button-link " href="<?php $this->options->Categories(); ?>">
            <i class="sidebar-button-icon fa fa-lg fa-bookmark"></i>
               <span class="sidebar-button-desc">分类归档</span>
        </a>
    </li>
    <li class="sidebar-button">
        <a class="sidebar-button-link " href="<?php $this->options->Archive(); ?>" >
            <i class="sidebar-button-icon fa fa-lg fa-calendar"></i>
            <span class="sidebar-button-desc">时间归档</span>
        </a>
    </li>

    <li class="sidebar-button">
        <a class="sidebar-button-link st-search-show-outputs" href="/#about">
            <i class="sidebar-button-icon fa fa-lg fa-search"></i>
                <span class="sidebar-button-desc">搜索</span>
        </a>
    </li>
    <li class="sidebar-button">
        <a class="sidebar-button-link "
           href="<?php $this->options->about(); ?>">
            <i class="sidebar-button-icon fa fa-lg fa-info-circle"></i>
            <span class="sidebar-button-desc">关于</span>
        </a>
    </li>
</ul>

<ul class="sidebar-buttons">
    <li class="sidebar-button">
        <a class="sidebar-button-link " href="<?php $this->options->weibo(); ?>" target="_blank">
            <i class="sidebar-button-icon fa fa-lg fa-weibo"></i>
            <span class="sidebar-button-desc">微博</span>
        </a>
    </li>

    <li class="sidebar-button">
        <a class="sidebar-button-link " href="<?php $this->options->links(); ?>">
            <i class="sidebar-button-icon fa fa-lg fa-chain"></i>
            <span class="sidebar-button-desc">友链</span>
        </a>
    </li>
</ul>
