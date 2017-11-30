<?php
    include("header.php");	

    //var_dump($_POST);
    
    echo "<h3>Bestelling maken stap 2</h3>";
    
   
    echo "<form action='bijbestellen_database.php' method='post'>";
    get_medicijnen();

function get_medicijnen(){
    global $conn;
    $query = 'select * from medicijnen order by naam';
    $result = mysqli_query($conn, $query);
    //var_dump($result);
    while($record = mysqli_fetch_assoc($result)){
        echo "<label class='nopadding nomargin medicijn_naam' data-toggle='tooltip' title='".$record['types']."--".$record['beschrijving']."'>".$record['naam']."<input name='medicijn[]' value='".$record['id']."' class='checkbox' type='checkbox'></label><br>";
    }
}
    
    echo "<button type='submit' class='btn login_btn'>Bijbestellen</button>";
    echo "</form>";

include("footer.php");

?>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>