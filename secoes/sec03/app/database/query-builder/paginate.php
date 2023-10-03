<?php 

function paginate(string|int $perPage = 10)
{
    global $query;

    if (isset($query['limit'])) {
        throw new Exception("A paginação não pode ser chamada com o LIMIT");
    }

    $rowCount = execute(rowCount:true);

    $page = filter_input(INPUT_GET,'page');

    $page = $page ?? 1;

    $query['currentPage'] = (int) $page;
    $query['pageCount'] = (int)ceil($rowCount / $perPage);
    $offset = ($page - 1) * $perPage;

    $query['paginate'] = true;
    $query['sql'] = "{$query['sql']} LIMIT {$perPage} offset {$offset}";
}

function render()
{

    global $query;

$pageCount = $query['pageCount'];
$currentPage = $query['currentPage'];
$maxLinks = 3;

$links = '<ul class="pagination justify-content-center">';

if($currentPage > 1)
{
    $previous = $currentPage - 1;
    $linkPage = http_build_query(array_merge($_GET, ['page' => $previous]));
    $first = http_build_query(array_merge($_GET, ['page' => 1]));

    $links .= "<li class='page-item'><a class='page-link' href='?{$first}'>Primeira</a></li>";
    $links .= "<li class='page-item'><a class='page-link' href='?{$linkPage}'>Anterior</a></li>";
}

$class = '';
for ($i= $currentPage - $maxLinks; $i <= $currentPage + $maxLinks; $i++) {
    if($i > 0 && $i <= $pageCount)
    {
        $class = $currentPage == $i ? 'active' : '';
        $linkPage = http_build_query(array_merge($_GET, ['page' => $i]));
    
        $links .= "<li class='page-item {$class}'><a class='page-link' href='?{$linkPage}'>{$i}</a></li>";
    }
}

if($currentPage < $pageCount)
{
    $next = $currentPage + 1;
    $linkPage = http_build_query(array_merge($_GET, ['page' => $next]));
    $last = http_build_query(array_merge($_GET, ['page' => $pageCount]));

    $links .= "<li class='page-item'><a class='page-link' href='?{$linkPage}'>Próxima</a></li>";
    $links .= "<li class='page-item'><a class='page-link' href='?{$last}'>Última</a></li>";
}

$links .= '</ul>';

return $links;
}

?>