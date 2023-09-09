<?php
// Query builder

$query = [];

require 'query-builder/paginate.php';
require 'query-builder/read.php';
require 'query-builder/order.php';
require 'query-builder/where.php';
require 'query-builder/limit.php';
require 'query-builder/execute.php';
require 'query-builder/search.php';
require 'query-builder/join.php';

//No Query Builder
require 'no-query-builder/create.php';
require 'no-query-builder/read.php';
require 'no-query-builder/update.php';
require 'no-query-builder/delete.php';

?>