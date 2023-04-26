<?php
const jsonParams = 'params.json';

/**
 * @return array{dsn:string,username:string,password:string}
 */
function getConnectionParams(): array
{
    $json = file_get_contents(jsonParams);
    $users = json_decode($json, true);
    foreach ($users as $fields) {
        $params = $fields;
    }
    return $params;
}
