
<?php

session_start();
ini_set('memory_limit', '-1');
set_time_limit(600);
error_reporting(0);
if (isset($_GET['selected_items'])) 
{
    $selectedItems = $_GET['selected_items'];
    // Convert the comma-separated string to an array of items
    $selectedItemsArray = explode(",", $selectedItems);
}


$nodeNamesToNumber = array(
'HOD_room' => '0',
'J2' => '1',
'IT218' => '2',
'IT217' => '3',
'J7' => '4',
'J4' => '5',
'IT208' => '6',
'IT209' => '7'

    );

    foreach ($selectedItemsArray as $nodeName) {
        if (isset($nodeNamesToNumber[$nodeName])) {
            $nodesToTraverse[] = $nodeNamesToNumber[$nodeName];
        }
    }
//$nodesToTraverse=json_encode($nodesToTraverse1);

    // Now $nodesToTraverse contains the selected node numbers in numeric format
    //print_r($nodesToTraverse);

function dijkstra($graph, $start, $end) {
    $numVertices = count($graph);
    $distances = array_fill(0, $numVertices, INF);
    $visited = array_fill(0, $numVertices, false);
    $previous = array_fill(0, $numVertices, null);

    $distances[$start] = 0;

    while (true) {
        $closestVertex = null;
        $shortestDistance = INF;

        for ($v = 0; $v < $numVertices; $v++) {
            if (!$visited[$v] && $distances[$v] < $shortestDistance) {
                $closestVertex = $v;
                $shortestDistance = $distances[$v];
            }
        }

        if ($closestVertex === null || $closestVertex === $end) {
            break;
        }

        $visited[$closestVertex] = true;

        for ($v = 0; $v < $numVertices; $v++) {
            if (!$visited[$v] && $graph[$closestVertex][$v] !== INF) {
                $distance = $distances[$closestVertex] + $graph[$closestVertex][$v];
                if ($distance < $distances[$v]) {
                    $distances[$v] = $distance;
                    $previous[$v] = $closestVertex;
                }
            }
        }
    }

    $path = array();
    $current = $end;

    while ($current !== null) {
        array_unshift($path, $current);
        $current = $previous[$current];
    }

    return $path;
}

// Example usage:

$adjacencyMatrix = [
    [0, 2, 1000, 1000, 1000, 1000, 1000, 1000],
    [2, 0, 1.5, 1000, 1000, 1000, 1000, 1000],
    [1000, 1.5, 0, 1, 1000, 1000, 1000, 1000],
    [1000, 1000, 1, 0, 1, 1000, 1000, 1000],
    [1000, 1000, 1000, 1, 0, 2.5, 1000, 1000],
    [1000, 1000, 1000, 1000, 2.5, 0, 1.5, 1000],
    [1000, 1000, 1000, 1000, 1000, 1.5, 0, 1],
     [1000, 1000, 1000, 1000, 1000, 1000, 1, 0]
];

$startNode = 0;
print_r($nodesToTraverse );

$currentNode = $startNode;

$result = array();

foreach ($nodesToTraverse as $node) {
    $path = dijkstra($adjacencyMatrix, $currentNode, $node);
    $result[] = $path;
    $currentNode = $node;
}

$output = array( $result);
/*foreach ($output as $element) {
    echo $element . " ";
}*/

$nestedArray=$result;
echo json_encode($result);

// Pass the resultant array to final_path.php using a URL parameter
$encodedResult = json_encode($result);
$encodedResultParameter = urlencode($encodedResult);
echo "<script>window.location.href = 'final_path.php?result={$encodedResultParameter}';</script>";
exit();

/*session_start();
//error_reporting(E_ALL);

require("distance1.php");
include("con.php");

if (isset($_GET['selected_items'])) 
{
  $selectedItems = $_GET['selected_items'];
  // Convert the comma-separated string to an array of items
  $selectedItemsArray = explode(",", $selectedItems);
  
  // Do something with the selected items, e.g., display them on the page
    $nodesToTraverse =$selectedItemsArray;
     // echo"fsiofvnsf";
}

function dijkstra($graph, $start, $end) {
    $numVertices = count($graph);
    $distances = array_fill(0, $numVertices, 1000);
    $visited = array_fill(0, $numVertices, false);
    $previous = array_fill(0, $numVertices, null);

    $distances[$start] = 0;

    while (true) {
        $closestVertex = null;
        $shortestDistance = 1000;

        for ($v = 0; $v < $numVertices; $v++) {
            if (!$visited[$v] && $distances[$v] < $shortestDistance) {
                $closestVertex = $v;
                $shortestDistance = $distances[$v];
            }
        }

        if ($closestVertex === null || $closestVertex === $end) {
            break;
        }

        $visited[$closestVertex] = true;

        for ($v = 0; $v < $numVertices; $v++) {
            if (!$visited[$v] && $graph[$closestVertex][$v] !== 1000) {
                $distance = $distances[$closestVertex] + $graph[$closestVertex][$v];
                if ($distance < $distances[$v]) {
                    $distances[$v] = $distance;
                    $previous[$v] = $closestVertex;
                }
            }
        }
    }

    $path = array();
    $current = $end;

    while ($current !== null) {
        array_unshift($path, $current);
        $current = $previous[$current];
    }

    return $path;
}

$startNode = 0;
//$nodesToTraverse = array(1, 3, 4,5,8);

$result = array();

foreach ($nodesToTraverse as $node) {
    $path = dijkstra($adjacencyMatrix, $currentNode, $node);
    $result[] = $path;
    $currentNode = $node;
}
*/
//header("Location: final_path.php?result=" . urlencode(json_encode($result)) . "&nestedArray=" . urlencode(json_encode($result)));
//exit();

?>
