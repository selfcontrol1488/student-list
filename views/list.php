<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    <?php
        include "../app/models/TableDataGateway/AbiturientDataGateway.php";
        include "../app/config.php";

        $abiturientDataGateway = new AbiturientDataGateway();
        $abiturientDataGateway->setConnection();
        $per_page = $countofview;
        //получаем номер страницы и значение для лимита 
        $cur_page = 1;
        if (isset($_GET['page']) && $_GET['page'] > 0) 
        {
            $cur_page = $_GET['page'];
        }
        $start = ($cur_page - 1) * $per_page;

        /* Проверка GET-переменной */
        if (isset($_GET['search'])) $search=$_GET['search']; else $search='';
        $sort = @$_GET['sort'];
        if(!empty($sort)) {
            if (array_key_exists($sort, $sort_list)) {
                $sort_sql = $sort_list[$sort];
            } else {
                $sort_sql = reset($sort_list);
            }
            if(!empty($search)) {
                $lastestsAbiturients = $abiturientDataGateway->getSortFindFields($start, $per_page, $sort_sql, $search);
            }
            else {
                $lastestsAbiturients = $abiturientDataGateway->getSortFields($start, $per_page, $sort_sql); 
            }
        }
        else {
            if(!empty($search)) {
                $lastestsAbiturients = $abiturientDataGateway->findFields($start, $per_page, $search); 
            }
            else {
                $lastestsAbiturients = $abiturientDataGateway->getFields($start, $per_page); 
            }
        }

        $sortlink = '';

        function sort_link_th($title, $a, $b) {
            $sort = @$_GET['sort'];
            $page = @$_GET['page'];
            if ($sort == $a) {
                $GLOBALS['sortlink'] = '&sort=' . @$_GET['sort'];
                if(!empty($GLOBALS['search'])) {
                    return '<a class="active" href="?search='. $GLOBALS['search'] .'&page='. $page .'&sort=' . $b . '">' . $title . ' <i>▲</i></a>';
                }
                else {
                    return '<a class="active" href="?page='. $page .'&sort=' . $b . '">' . $title . ' <i>▲</i></a>';
                }
            } elseif ($sort == $b) {
                $GLOBALS['sortlink'] = '&sort=' . @$_GET['sort'];
                if(!empty($GLOBALS['search'])) {
                    return '<a class="active" href="?search='. $GLOBALS['search'] .'&page='. $page .'&sort=' . $a . '">' . $title . ' <i>▼</i></a>';
                }
                else {
                    return '<a class="active" href="?page='. $page .'&sort=' . $a . '">' . $title . ' <i>▼</i></a>';
                }   
            } else {
                $GLOBALS['sortlink'] = '&sort=' . @$_GET['sort'];
                if(!empty($GLOBALS['search'])) {
                    return '<a href="?search='. $GLOBALS['search'] .'&page='. $page .'&sort=' . $a . '">' . $title . '</a>'; 
                }
                else {
                    return '<a href="?page='. $page .'&sort=' . $a . '">' . $title . '</a>'; 
                }  
            }
        }
    ?>
        <div class="table-responsive">
            <table class="table table-striped table-dark table-bordered"">
            <tr>
			    <td>Список абитуриентов</td>
			    <td>Поиск</td>
                <td>
                    <form class = "searchForm" name="searchForm" method="get" action="list.php">
                        <input type="text" name="search">
			            <input type="submit"  class="btn btn-primary" value="[Найти]">
                    </form>
                </td>
                <td>
                    <a href="../index.php"  class="btn btn-primary">Форма регистрации/редактирования</a>
                </td>
		    </tr>
            </table>
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-dark table-bordered">
            <?php if (!empty($GLOBALS['search'])): ?>
                Показаны только абитуриенты, найденные по запросу «<?php echo($GLOBALS['search'])?>». 
            <?php endif; ?>
            <tr>
                <th><?php echo sort_link_th('Имя', 'name_asc', 'name_desc'); ?></th>
                <th><?php echo sort_link_th('Фамилия', 'surname_asc', 'surname_desc'); ?></th>
                <th><?php echo sort_link_th('Номер группы', 'groupNumber_asc', 'groupNumber_desc'); ?></th>
                <th><?php echo sort_link_th('Количество баллов', 'amount_asc', 'amount_desc'); ?></th>
            </tr>
        <?php foreach ($lastestsAbiturients as $abiturient): ?>
            <tr>
                <td><?php echo $abiturient['name'] ?></td>
                <td><?php echo $abiturient['surname'] ?></td>
                <td><?php echo $abiturient['groupNumber'] ?></td>
                <td><?php echo $abiturient['amount'] ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
        </div>
        <?php if (!empty($GLOBALS['search'])): ?>
        <form action="list.php">
            <button type="submit" class="btn btn-primary mb-3">[Показать всех абитуриентов]</button>
        </form>
        <?php endif; ?>
    <?php
        include "../app/config.php";
        include "../app/models/Pager.php";
        if(isset($_GET['search'])) {
            $Pager = new Pager($count, $countofview, 'list.php?search='.$GLOBALS['search'].'&page={1}');
        }
        else {
            $Pager = new Pager($count, $countofview, 'list.php?page={1}');
        }  
    ?>

    
    <ul class="pagination">
        <?php for($i = 1; $i<=$Pager->getTotalPages(); $i++) { ?>
            <?php if ($i == $GLOBALS['cur_page']): ?>
                <li  class="page-item active"><a class="page-link" href="list.php?search=<?=$GLOBALS['search']?>&page=<?=$i.$GLOBALS['sortlink'];?>"><?=$i;?></a> </li>
            <?php continue; ?>
            <?php endif; ?> 
            <li  class="page-item"><a class="page-link" href="list.php?search=<?=$GLOBALS['search']?>&page=<?=$i.$GLOBALS['sortlink'];?>"><?=$i;?></a> </li>
        <?php } ?> 
    </ul>
</body>
</html>