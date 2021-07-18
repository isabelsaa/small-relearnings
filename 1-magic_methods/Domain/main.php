<?php
require 'Toot.php';


$toot = new Toot(1, "hello world", ['retoot'=>1, 'favourite'=>2]);

var_dump($toot);