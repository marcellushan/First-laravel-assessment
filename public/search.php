<?php
///* Attempt MySQL server connection. Assuming you are running MySQL
//server with default setting (user 'root' with no password) */
//$link = mysqli_connect("127.0.0.1", "marc", "F1agstaff", "assessment");
//
//// Check connection
//if($link === false){
//    die("ERROR: Could not connect. " . mysqli_connect_error());
//}
//$_REQUEST['term'] = 'che';
//if(isset($_REQUEST['term'])){
//    // Prepare a select statement
//    $sql = "SELECT * FROM courses WHERE name LIKE ?";
//    if($stmt = mysqli_prepare($link, $sql)){
//        // Bind variables to the prepared statement as parameters
//        mysqli_stmt_bind_param($stmt, "s", $param_term);
//
//        // Set parameters
//        $param_term = $_REQUEST['term'] . '%';
//
//        // Attempt to execute the prepared statement
//        if(mysqli_stmt_execute($stmt)){
//            $result = mysqli_stmt_get_result($stmt);
//
//            // Check number of rows in the result set
//            if(mysqli_num_rows($result) > 0){
//                // Fetch result rows as an associative array
//                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
//                    echo "<a href='http://localhost:8888/lfrc/public/family/". $row["id"] . "'' >" . $row["name"] . "</a>";
//                    echo "<br>";
//                }
//            } else{
//                echo "<p>No matches found</p>";
//            }
//        } else{
//            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//        }
//    }
//
//    // Close statement
//    mysqli_stmt_close($stmt);
//}
//
//// close connection
//mysqli_close($link);
//?>

<?php
$dbHost = '127.0.0.1';
$dbUsername = 'marc';
$dbPassword = 'F1agstaff';
$dbName = 'assessment';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
// $query = $db->query("SELECT * FROM skills WHERE skill LIKE '%".$searchTerm."%' ORDER BY skill ASC");
$query = $db->query("SELECT * FROM courses WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['name'];
}
//return json data
echo json_encode($data);
?>
