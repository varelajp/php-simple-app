<?php $this->layout('./layouts/main', ['pageTitle' => $pageTitle, 'title' => $title]) ?>
<p>Bienvenidos!!</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis dolorum dolor magni deleniti. Sint, cupiditate consectetur. Cum magni esse iusto dolores neque quia soluta nemo odit, debitis recusandae, eius nisi!</p>
      <p>Este es un proyecto simple de ejemplo creado por <b><?=$creator?></b></p>
<?php $this->start('scripts') ?>
<?=$this->insert('./layouts/partials/scripts')?>
<?php $this->stop() ?>
<?php $this->push('scripts') ?>
  <script src="./assets/js/home.js"></script>
<?php $this->stop() ?>