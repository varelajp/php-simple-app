<?php $this->layout('./layouts/main', ['pageTitle' => $pageTitle, 'title' => $title]) ?>
<article>
        <h2><?=$this->e($article['title'])?></h2>
        <p><?=$this->e($article['content'])?></p>
      </article>
<?php $this->start('scripts') ?>
<?=$this->insert('./layouts/partials/scripts')?>
<?php $this->stop() ?>
<?php $this->push('scripts') ?>
  <script src="./assets/js/article.js"></script>
<?php $this->stop() ?>