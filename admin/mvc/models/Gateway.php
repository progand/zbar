<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gateway
 *
 * @author user
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

abstract class Gateway {

    protected function query($query) {
        $connection = mysql_connect(DB_HOST, DB_USER, DB_PASS);
        mysql_query('set character set cp1251');
        mysql_select_db(DB_DATABASE, $connection);
        $sql_query = mysql_query($query);
        mysql_close($connection);
        return $sql_query;
    }

    protected function getSingle($query_result) {
        $single = mysql_fetch_array($query_result, MYSQL_ASSOC);
        mysql_free_result($query_result);
        return $single;
    }

    protected function getVector($query_result) {
        $vector = array();
        while ($row = mysql_fetch_array($query_result, MYSQL_NUM)) {
            $vector[] = $row[0];
        }
        mysql_free_result($query_result);
        return $vector;
    }
    
    protected function getMatrix($query_result) {
        $vector = array();
        while ($row = mysql_fetch_array($query_result, MYSQL_ASSOC)) {
            $vector[] = $row;
        }
        mysql_free_result($query_result);
        return $vector;
    }

}

?>
