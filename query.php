<?php

require __DIR__ . "/vendor/autoload.php";

$calculator = new FreetimersCase\Calculator(72);

if (isset($_GET['meter']) && $_GET['meter']) {
    echo json_encode(
        $calculator->calculate($_GET['meter'])
    );
}
