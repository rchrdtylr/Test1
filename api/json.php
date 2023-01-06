<?php

$res = [
    'result' => 'OK',
    'message' => ''
];

$func = $_REQUEST['func'] ?? null;
switch ($func) {
    case 'index':
        $res['message'] = 'Index';
        break;        
    default:
        $res['message'] = 'No func selected';
        break;
}

header('Content-type: application/json');
echo json_encode($res, JSON_PRETTY_PRINT);
exit(0);