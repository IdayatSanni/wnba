<?php 
  require('../templates/connect.php');
        
?>
<!DOCTYPE html>
<html lang="en">


  <?php include('../templates/header.php') ?>
  
  
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-2">Add Players</h1>
        </div>
    </div>
    <div class="row">
        <?php require('../templates/connect.php'); ?>
    </div>
    <div class="row">
        <div class="col-md-5">
            <form method="POST" action="addPlayerScript.php">
                <div class="mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="number" class="form-control" id="year" name="year">
                    
                </div>
                <div class="mb-3">
                    <label for="player" class="form-label">Player Name</label>
                    <input type="text" class="form-control" id="player" name="player">
                    
                </div>
                <div class="mb-3">
                    <label for="round" class="form-label">Round Picked</label>
                    <input type="number" class="form-control" id="round" name="round">
                    
                </div>
                <div class="mb-3">
                    <label for="pick" class="form-label">Pick Number</label>
                    <input type="number" class="form-control" id="pick" name="pick">
                    
                </div>
                <div class="mb-3">
                    <label for="team" class="form-label">Team</label>
                    <input type="text" class="form-control" id="team" name="team">
                    
                </div>
                <div class="mb-3">
                    <label for="priorTeam" class="form-label">Prior Team</label>
                    <input type="text" class="form-control" id="priorTeam" name="prior_team">
                    
                </div>
                <div class="mb-3">
                    <label for="college" class="form-label">College</label>
                    <input type="text" class="form-control" id="college" name="college">
                    
                </div>
                <div class="mb-3">
                    <label for="tradeNotes" class="form-label">Trade Notes</label>
                    <input type="text" class="form-control" id="tradeNotes" name="trade_notes">
                    
                </div>
                <button type="submit" class="btn btn-primary" name="addPlayer">Submit</button>
            </form>
        </div>
    </div>
</div>
  
  
  <?php include('../templates/footer.php') ?>

</html>