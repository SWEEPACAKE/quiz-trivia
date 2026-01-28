<?php
include('includes/menu.inc.php');

$amount = $_GET['amount'];
$category = $_GET['category'];

$url = "https://opentdb.com/api.php?amount=$amount&category=$category&type=multiple";
$data = json_decode(file_get_contents($url), true);
$questions = $data['results'];
?>

<form action="result.php" method="POST">
    <?php 
    foreach ($questions as $index => $q) { 
        ?>
        <h3 class="mt-5 mb-3"><?= $q['question'] ?></h3>

        <?php
        // On constitue un tableau contenant toutes les mauvaises réponses puis on y ajoute la bonne et on le mélange. 
        $answers = $q['incorrect_answers'];
        $answers[] = $q['correct_answer'];
        shuffle($answers);

        foreach ($answers as $num => $answer) { 
            ?>
            <label>
                <input type="radio" class="form-check-input" name="q<?= $index ?>" value="<?= $answer ?>" id="q<?= $index . $num ?>" required>
                <label class="form-check-label" for="q<?= $index . $num?>">
                    <?= $answer ?>
                </label>
            </label><br>
        <?php 
        } 
        ?>

        <input type="hidden" name="correct<?= $index ?>" value="<?= $q['correct_answer'] ?>">
    <?php 
    } 
    ?>

    <input type="hidden" name="category" value="<?= $category ?>">
    <input type="hidden" name="total" value="<?= count($questions) ?>">

    <br>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
<?php
include('includes/footer.inc.php');
?>