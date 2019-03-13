<?php

require_once 'config.php';

class Infra {
    
    public static function converterDataMySQL2Brazil($dataMysql) {
        return date('d/m/Y',strtotime($dataMysql));
    }
    
    public static function converterDataBanco2Brazil($dataMysql) {
        return date('d/m/Y',strtotime($dataMysql));
    }

    public static function converterDataHoraBanco2Brazil($dataMysql) {
        return date('d/m/Y H:i:s',strtotime($dataMysql));
    }

    public static function converterDataBrazil2Banco($dataBrazil) {
        $array = explode("/", $dataBrazil);
        $array = array_reverse($array);
        $str = implode($array, "/");
        return date("Y-m-d", strtotime($str));
    }

    public static function getDataAtual2Brazil() {
        return date("d/m/Y");
    }

    public static function getDataHoraAtual2Brazil() {
        return date("d/m/Y H:i:s");
    }

    public static function getDataAtual2Banco() {
        return date("Y-m-d");
    }

    public static function getDataHoraAtual2Banco() {
        return date("Y-m-d H:i:s");
    }

    public static function tratarTextoUtf8Banco($texto) {
        return utf8_decode(trim($texto));
    }
    
    public static function tratarTextoUtf8Formulario($texto) {
        return utf8_encode(trim($texto));
    }
    
    public static function converterParaMonetario($valor) {
        return number_format($valor, 2, '.', '');
    }

    public static function xd($obj) {

        $debug = debug_backtrace();
        $calledLine = $debug[0]['line'];
        $calledFile = $debug[0]['file'];
        echo "<div style='background-color:#bcb2ff; border:1px #666666 solid; text-align:left;'>";
        echo "<pre>";
        echo "{$calledFile} - {$calledLine}<br/><br/>";
        print_r($obj);
        echo "</pre>";
        echo "</div>";
        die();
    }

    /* FUNCAO UTIL PARA DEBUG SEM  DIE */

    public static function x($obj) {

        $debug = debug_backtrace();
        $calledLine = $debug[0]['line'];
        $calledFile = $debug[0]['file'];
        echo "<div style='background-color:#F38630; border:1px #666666 solid; text-align:left;'>";
        echo "<pre>";
        echo "{$calledFile} - {$calledLine}<br/><br/>";
        print_r($obj);
        echo "</pre>";
        echo "</div>";
    }


}
