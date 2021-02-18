<?php
  require './vendor/autoload.php';

  use Carbon\Carbon;
  use Controller\Dates;

  $date = Carbon::now();
  echo $date->format("d M Y"). "<br>";

  Carbon::setLocale("es");
  $today    = Carbon::now();
  $tomorrow = $today->addDays(1);
  echo $tomorrow->isoFormat("dddd DD [de] MMMM"). "<br>";

  // include "./src/Controller/Dates.php";    //commented thanks to composer dump-autoload
  echo Controller\Dates::longDate(Controller\Dates::today()). "<br>";
  echo Dates::longDate(Dates::tomorrow());
