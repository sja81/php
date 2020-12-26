<?php
htmlspecialchars();
ucwords();
parse_url();

// composer dump-autoload

try {
    $pdo = new PDO('mysql:host=localhost;dbname=mytodo','username', 'password');
} catch(PDOException $e) {

}

$stmt = $pdo->prepare('select * from todos');
$stmt->execute();
$stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->fetchAll(PDO::FETCH_CLASS,'Task');

return $this->callAction(...explode('@',string));

function callAction($controller, $action) 
{

}

use App\Core\{Router, Request}; from PHP7+
