<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/commands/BaseCommand.php';


class IndexCommand extends BaseCommand
{

    public function process()
    {
        $this->display("index");
    }

}
