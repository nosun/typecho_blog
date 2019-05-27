<ul class="post-actions post-action-share">
    <li class="post-action hide-lg hide-md hide-sm">
        <a class="post-action-btn btn btn--default btn-open-shareoptions"  href="#btn-open-shareoptions">
            <i class="fa fa-share-alt"></i>
        </a>
    </li>
    <li class="post-action hide-xs">
        <a class="post-action-btn btn btn--default tooltip--top" target="new" data-tooltip="分享至QQ空间" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>&site=<?php $this->options->title(); ?>/&pics=<?php showThumbnail($this); ?>">
            <i class="fa fa-qq"></i>
        </a>
    </li>
    <li class="post-action hide-xs">
        <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至新浪微博" href="http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>/&appkey=<?php $this->options->title(); ?>/&title=<?php $this->title() ?>&pic=<?php showThumbnail($this); ?>">
            <i class="fa fa-weibo"></i>
        </a>
    </li>

    <li class="post-action">

        <a class="post-action-btn btn btn--default"  href="#" onclick="gotoTop();return false;">

            <i class="fa fa-arrow-up"></i>
        </a>
    </li>
</ul>