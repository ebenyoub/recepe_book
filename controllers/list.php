<?php

require 'config/dbconnect.php';

$contacts = liste($bdd);

$template = 'list';
require 'views/layout.html.php';

?>