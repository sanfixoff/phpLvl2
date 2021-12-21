<?php
//print_r($_POST);
require ('../../config.php');
require_once ('../core/db.php');
require_once ('../core/model.php');
require ('../models/modelcatalog.php');
if ($_POST['action'] == 'pages') {
    getProductsByPage();
}

function getProductsByPage() {

    $limit = 25;
    $page = intval(@$_GET['page']);
    $page = (empty($page)) ? 1 : $page;
    $start = ($page != 1) ? $page * $limit - $limit : 0;
    $catalog = new ModelCatalog();
    $items = $catalog -> get_data($start, $limit);


    foreach ($items as $row) {
        ?>
        <div class="card mb-4 box-shadow" style="width: 24%;">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal"><?php echo $row['name'];?></h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title"><?php echo $row['price'];?> <small class="text-muted"> руб.</small></h1>
                <div><?php echo $row['description'];?></div>
                <br>
                <form action="/catalog/addbasket" method="POST">
                    <input type="hidden" name="id_product" value="<?php echo $row['id'];?>">
                    <input type="submit" class="btn btn-lg btn-block btn-outline-primary" value="Добавить в корзину">
                </form>
            </div>
        </div>
        <?php
    }
}