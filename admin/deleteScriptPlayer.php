<?php
if (isset($_POST['deletePlayer'])) {
    $playerID = $_POST['player_id'];

    require('../templates/connect.php');

   
    mysqli_begin_transaction($connect);

    try {
        
        $deleteAwardsQuery = "DELETE FROM `wnba_awards_id` WHERE `player_id` = '" . mysqli_real_escape_string($connect, $playerID) . "'";
        $deleteAwards = mysqli_query($connect, $deleteAwardsQuery);

        
        $deletePlayerQuery = "DELETE FROM `wnba_drafts` WHERE `player_id` = '" . mysqli_real_escape_string($connect, $playerID) . "'";
        $deletePlayer = mysqli_query($connect, $deletePlayerQuery);

        
        if ($deleteAwards && $deletePlayer) {
            mysqli_commit($connect); 
            header("Location: playerAdmin.php"); 
            exit;
        } else {
            mysqli_rollback($connect); 
            echo "There was an error deleting the player or their awards: " . mysqli_error($connect);
        }
    } catch (Exception $e) {
        mysqli_rollback($connect); 
        echo "Error occurred: " . $e->getMessage();
    }
}
?>
