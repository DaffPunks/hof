<?php

use Carbon\Carbon;

class AppHelper {

    public static function counter($d, $i)
    {
        return $d + ($i * 7);
    }
    public static function dayOfWeekend($index){
        switch ($index){
            case 0:
                return "Воскресенье";
            case 1:
                return "Понедельник";
            case 2:
                return "Вторник";
            case 3:
                return "Среда";
            case 4:
                return "Четверг";
            case 5:
                return "Пятница";
            case 6:
                return "Суббота";
        }
        return false;
    }
    public static function monthOfYear($timeItem){
        $day = Carbon::createFromFormat('Y-m-d H:i:s', $timeItem->time)->day;

        switch (Carbon::createFromFormat('Y-m-d H:i:s', $timeItem->time)->month ){
            case 1:
                return $day ." Января";
            case 2:
                return $day ." Февраля";
            case 3:
                return $day ." Марта";
            case 4:
                return $day ." Апреля";
            case 5:
                return $day ." Мая";
            case 6:
                return $day ." Июня";
            case 7:
                return $day ." Июля";
            case 8:
                return $day ." Августа";
            case 9:
                return $day ." Сентября";
            case 10:
                return $day ." Октября";
            case 11:
                return $day ." Ноября";
            case 12:
                return $day ." Декабря";
        };
    }
    public static function formatTime($timeItem){
        return Carbon::createFromFormat('Y-m-d H:i:s', $timeItem->time)->format('H.i');
    }
    public static function formatDate($timeItem){
        return Carbon::createFromFormat('Y-m-d H:i:s', $timeItem->time)->format('d.m');
    }
    public static function findProfileIndex($id, $array){
        for($i = 0; $i < count($array); $i++){
            if($array[$i]['id'] == $id)
                return $i;
        }
    }
}