<?php $this->layout('./layouts/main', ['pageTitle' => $pageTitle, 'title' => $title]) ?>
<p>Puedes escribir un mensaje a <b><?=$this->e($email)?></b></p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis dolorum dolor magni deleniti. Sint, cupiditate consectetur. Cum magni esse iusto dolores neque quia soluta nemo odit, debitis recusandae, eius nisi!</p>
<?php $this->start('scripts') ?>
<?=$this->insert('./layouts/partials/scripts')?>
<?php $this->stop() ?>
<?php $this->push('scripts') ?>
  <script src="./assets/js/contact.js"></script>
<?php $this->stop() ?>