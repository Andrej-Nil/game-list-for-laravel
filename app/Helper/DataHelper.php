<?php
namespace App\Helper;
use \Illuminate\Support\Carbon;
class DataHelper{

  public function getMonths() {
    return [
      'Январь','Февраль','Март','Апрель',
      'Май', 'Июнь','Июль','Август',
      'Сентябрь','Окрябрь','Ноябрь','Декабрь',
    ];
  }

  public function getCurrentDate() {
    return Carbon::now()->year;
  }
}
