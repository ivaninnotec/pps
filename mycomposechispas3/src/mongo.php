<?php
    try {
            $m = new MongoDB\Driver\Manager('mongodb://root:pps@mongo:27017/admin');
            $filter  = [];
            $options = ['sort'=>array('_id'=>-1),'limit'=>3];
            $query = new MongoDB\Driver\Query($filter, $options);
            $cursor = $m->executeQuery('system.version', $query);
            echo "Hemos conectado con Mongo!";
}

    }
    catch (Throwable $e) {
        echo "Uh-Ooooh: " . $e->getMessage() . PHP_EOL;
    }
?>
