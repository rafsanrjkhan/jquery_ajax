<?php
header('Content-type: application/json');
$results = array(
    "count" => 10,
    "results" =>array("Result One", "Result Two", "Result Three")
);

echo json_encode($results);
?>
<!-- {
    "name": 3,
    "names": ["Rafsan", "Jaman", "Khan"],
    "count": 10,
    "results": ["Result One", "Result Two", "Result Three"]
} -->