<?php
include('includes/menu.inc.php');
require 'db.php';

$scores = $pdo->query("SELECT * FROM scores ORDER BY created_at DESC")->fetchAll();
?>

<h1 class="mb-3">Historique des scores</h1>

<ul>
<?php foreach ($scores as $s) { ?>
    <li><?= date('d/m/Y H:i', strtotime($s['created_at'])) ?> — Catégorie <?= $s['category'] ?> — Score <?= $s['score'] ?></li>
<?php 
}
?>
</ul>

<?php
include('includes/footer.inc.php');
?>