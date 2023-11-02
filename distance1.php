<?php
include("login.php");

// Perform the SQL query to retrieve the graph as adjacency matrix
$query = "SELECT n.Node_Id AS Source_node, m.Node_Id AS Target_node, IF(e.Connected = 1, e.Cost, 1000) AS Cost
         FROM node_table AS n
          JOIN edge_table AS e ON n.Node_Id = e.Source_node
          JOIN node_table AS m ON e.Target_node = m.Node_Id";

$result = $conn->query($query);

// Create an empty adjacency matrix
$adjacencyMatrix = [];

// Iterate over the result set and populate the adjacency matrix
while ($row = $result->fetch_assoc()) {
    $sourceNodeId = $row['Source_node'];
    $targetNodeId = $row['Target_node'];
    $weight = $row['Cost'];

    // Set the weight in the adjacency matrix
    $adjacencyMatrix[$sourceNodeId][$targetNodeId] = $weight;
}

 //Output the adjacency matrix
/*echo "[";
foreach ($adjacencyMatrix as $row) {
    echo "[";
    foreach ($row as $value) {
        echo $value . ", ";
    }
    echo "],";
}
echo "]";

/*

include("con.php");
// Perform the SQL query to retrieve the graph as adjacency matrix
$query = "SELECT n.Node_Id AS Source_node, m.Node_Id AS Target_node, IF(e.Connected = 1, e.Cost, 0) AS Cost
          FROM node_table AS n
          JOIN edge_table AS e ON n.Node_Id = e.Source_node
          JOIN node_table AS m ON e.Target_node = m.Node_Id";

$result = $conn->query($query);

// Create an empty adjacency matrix
$adjacencyMatrix = [];

// Iterate over the result set and populate the adjacency matrix
while ($row = $result->fetch_assoc()) {
    $sourceNodeId = $row['Source_node'];
    $targetNodeId = $row['Target_node'];
    $weight = $row['Cost'];

    // Set the weight in the adjacency matrix
    $adjacencyMatrix[$sourceNodeId][$targetNodeId] = $weight;
}

$file = fopen("adjacency_matrix.txt", "w");
if ($file) {
    // File opened successfully, continue writing
    fwrite($file, serialize($adjacencyMatrix));
    fclose($file);
    echo "Adjacency matrix exported successfully.";
} else {
    // File opening failed, display the error
    $error = error_get_last();
    echo "Failed to open the file for writing. Error: " . $error['message'];
}
*/
?>


