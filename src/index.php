<?php
include('includes/menu.inc.php');
?>
<h1>Quiz Open Trivia DB</h1>

<form action="quiz.php" method="GET">
    <div class="row my-4">
        <div class="col-12 col-md-6">
            <label>Catégorie :</label>
            <select name="category" class="form-control">
                <option value="18">Sciences: Computers</option>
                <option value="23">History</option>
                <option value="22">Geography</option>
            </select>
        </div>
        <div class="col-12 col-md-6">
            <label>Nombre de questions :</label>
            <input type="number" name="amount" value="5" min="1" max="10" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Démarrer le quiz</button>
</form>
<?php
include('includes/footer.inc.php');
?>
    
