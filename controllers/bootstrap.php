<?php

$Tasker = [];

$Tasker['config'] = require 'config.php';

require 'controllers\DataBases\Connection.php';
require 'controllers\DataBases\QueryBuilder.php';

$Tasker['database'] = new QueryBuilder(
    Connection::make($Tasker['config']['database'])
);
