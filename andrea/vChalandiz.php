<?php
// print_r($_POST);

foreach ($_POST["frmComm"] as $commune) {
    # code...
    $_SESSION["communes"] = $commune ;
}
if (isset($_SESSION["commune"])) {
    # code...
}