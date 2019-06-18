<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <!-- Fonts -->
        <?php echo Html::style('resources/assets/css/style.css'); ?>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    <?php echo $__env->yieldContent('message'); ?>
                </div>
            </div>
        </div>
    </body>
</html>
