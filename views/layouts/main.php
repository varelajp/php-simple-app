<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?=$pageTitle?></title>
</head>
<body>
  <div class="container">
    <?=$this->insert('./layouts/partials/header', ['title' => $title])?>
    <main>
      <?=$this->section('content')?>
    </main>
    <?=$this->insert('./layouts/partials/footer')?>
  </div>
  <?=$this->section('scripts')?>
</body>
</html>