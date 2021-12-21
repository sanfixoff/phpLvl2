<h1>Каталог</h1>


<div class="container">
    <div id="show-more-list">
        <div class="card-deck mb-3 text-center" style="display: flex; justify-content: space-between; flex-wrap: wrap;">
            <?php
            foreach($data["posts"] as $row){ ?>
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
            <?php } ?>
        </div>
    </div>
    <div class="show-more-button">
        <a data-page="1" data-max="<?php echo $data['pages']; ?>" id="show-more-btn" href="#">Показать еще</a>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(function(){
        $('#show-more-btn').click(function (){
            var $target = $(this);
            var page = $target.attr('data-page');
            page++;

            $.ajax({
                url: '/application/views/ajax.php?page=' + page,
                dataType: 'html',
                type: 'POST',
                data: {action: 'pages'},
                success: function(data){
                    $('#show-more-list .card-deck').append(data);
                }
            });

            $target.attr('data-page', page);
            if (page ==  $target.attr('data-max')) {
                $target.hide();
            }

            return false;
        });
    });
</script>