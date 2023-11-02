<?php
header('Content-type: application/json');

$people = array(
    'Rafsan' => array(
        'age' => 24,
        'location'=> 'Dhaka',
        'job'=> 'Web Developer',
    ),
    'Jaman' => array(
        'age' => 22,
        'location'=> 'Dhaka',
        'job'=> 'Web Developer',
    )
);
$return = array('exists' => false);

if(isset($_GET['name'])) {
    $name = trim($_GET['name']);
    if(isset($people[$name])) {
        $return['exists'] = true;
        $return['information'] = $people[$name];
    }
}
echo json_encode($return);
