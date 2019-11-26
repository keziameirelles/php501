<?php

require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::CreateHelperSet($entityManager);