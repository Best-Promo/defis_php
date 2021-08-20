<?php
class Defisd
{
    //Compte le nombre d'entrée dans un tableau
    public static function countValue($arr)
    {
        return count($arr); 
    }
    
    //Récupérer le contenu du fichier
    public static function readFile($file)
    {
        return file_get_contents($file);
    }
    
    //Supprimer les espaces avant et après
    public static function deleteSpace($txt)
    {
        return trim($txt);
    }
    
    //Supprimer les espaces avant et après
    public static function checkMoreTen($arr)
    {
        return array_filter($arr, function($val){
            if($val > 10){
                return $val;
            }
        });
    }
    
    //Supprimer les espaces avant et après
    public static function sendDiff($arr1, $arr2)
    {
        return array_diff($arr1, $arr2);
    }
}
