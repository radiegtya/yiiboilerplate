<?php

class VFormatter extends CWidget{
    
    /**
     * format number to rupiah
     * @param type $number
     * @return type
     */
    public static function getRupiah($number){
        return number_format($number,0,",",".");
    }
    
    public static function getReadmore($text){
        $text = explode('[excerpt]', $text);        
        $excerpt = $text[0];        
        return $excerpt;
    }
    
    public static function getView($text){
        $excerpt = str_replace('[excerpt]', '', $text);
        return $excerpt;
    }
    
    public static function getSeo($title){
        $regex = array(':', '\\', '/', '*', '+', '_',' ','%');
        $title = str_replace($regex, '-', $title);
        return $title;
    }
    
    public static function getClear($title){
        $regex = array(':', '\\', '/', '*', '+', '_',' ','%','-');
        $title = str_replace($regex, '', $title);
        $title = strtolower($title);
        return $title;
    }
    
    public static function formatDate($oldDate, $divider = '/', $dividerTo = '-') {
        $arr = explode($divider, $oldDate);
        $newDate = $arr[2] . $dividerTo . $arr[1] . $dividerTo . $arr[0];
        return str_replace(' ', '', $newDate);
    }
}