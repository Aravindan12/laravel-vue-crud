<?php
  
namespace App\DateHelper;
  
use Carbon\Carbon;
  
class DateHelper {
  
    public static function dateFormatYMD($date){

        echo Carbon::createFromFormat('m/d/Y', $date)
                ->format('Y-m-d');
    }

}