<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/MySmarty.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/BaseCommand.php';


class ReportsCommand extends BaseCommand
{

    public function process()
    {                
        $this->smarty->display("reports.tpl");
    }    

}
