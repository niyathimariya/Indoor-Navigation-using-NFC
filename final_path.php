<?php
$numberToName = array(
    '0' => 'HOD_room',
    '1' => 'J2',
    '2' => 'IT218',
    '3' => 'IT217',
    '4' => 'J7',
    '5' => 'J4',
    '6' => 'IT208',
    '7' => 'IT209'
);

if (isset($_GET['result'])) {
    $encodedResult = $_GET['result'];
    $result = json_decode(urldecode($encodedResult), true);

    // Now you have the $result array from final_2.php
    // You can use it to populate the $allPaths array
    $allPaths = $result;
   // print_r($allPaths);
     //   print_r($allPaths);
} else {
    // If the result is not available, you can set default values or handle the case accordingly
    $allPaths = array(
        array('5', '6', '16'),
        array('16', '7', '8'),
        array('8', '17', '10', '11')
        
    );
}

$convertedPaths = array();

foreach ($allPaths as $path) {
    $convertedPath = array();
    foreach ($path as $node) {
        if (isset($numberToName[$node])) {
            $convertedPath[] = $numberToName[$node];
        }
    }
    $convertedPaths[] = $convertedPath;
}
   // print_r($convertedPaths);
$firstNode = $convertedPaths[0][0];
$lastNodes = array();
$intermediateNodes = array();

foreach ($convertedPaths as $path) {
    $lastNode = end($path);
    $lastNodes[] = $lastNode;

    $intermediatePath = array_slice($path, 1, -1);
    $intermediateNodes = array_merge($intermediateNodes, $intermediatePath);
}

$first_node = array($firstNode);
$last_node = array_unique($lastNodes);
$intermediate_array = array_diff(array_unique($intermediateNodes), $first_node, $last_node);

$intermediate_array_names = array_values($intermediate_array); // Extract only the values (node names)

$result = array(
    'first_node' => $first_node,
    'last_node' => $last_node,
    'intermediate_array' => $intermediate_array_names // Use the modified array with only node names
);

/*$result = array(
    $first_node,
     $last_node,
     $intermediate_array_names );*/
     print_r(json_encode($result));
$encodedResultParameter = urlencode(json_encode($result));
header("Location: final_path_map.html?result=" . $encodedResultParameter);
//exit();


?>
