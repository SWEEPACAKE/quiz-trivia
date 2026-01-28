<?php
include('includes/menu.inc.php');
require 'db.php';

$score = 0;
$total = $_POST['total'];

for ($i = 0; $i < $total; $i++) {
    if ($_POST["q$i"] === $_POST["correct$i"]) {
        $score++;
    }
}

$stmt = $pdo->prepare("INSERT INTO scores (category, score) VALUES (?, ?)");
$stmt->execute([$_POST['category'], $score]);
?>

<h1 class="mb-3">Résultats</h1>
<p>Score : <?= $score ?> / <?= $total ?></p>

<?php
include('includes/footer.inc.php');
?>