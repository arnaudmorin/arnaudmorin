<?
file_put_contents('/tmp/dump.log', var_export(array($_SERVER, file_get_contents('php://input')), true), FILE_APPEND);

