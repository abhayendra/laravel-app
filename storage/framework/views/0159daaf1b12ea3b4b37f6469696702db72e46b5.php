<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <!-- Fonts -->
        <style>
		     body{ margin:0; padding:0;background:#fedf01;}
            .error_wra{  padding:40px 15px;}
			.error_box{ max-width:1170px; margin:0 auto;}
            .error_matter{ width:50%; float:left;text-align:center;padding-right: 15px;box-sizing: border-box;}
            .error_image{ width:50%; float:left;}
			.error_image img{ max-width:100%;}
            .error_matter h2{ font-size:120px; font-weight:600; margin:15px 0; }
            .error_matter h3{ font-size:35px; font-weight:600; margin:15px 0 30px 0;}
            .error_matter p{ font-size:18px; font-weight:500; color:#000;}
            .clear{ clear:both;}
            @media (min-width: 320px) and (max-width: 480px) {
            .error_wra{ padding:10px 15px 40px 15px;}
            .error_matter{ width:100% !important; float:none; text-align:center;}
            .error_image{ width:100% !important;float:none;}
            }
            @media (max-width: 767px) {
            .error_matter{ width:60%; padding-right:15px; float:left;}
            .error_image{ width:40%; float:left;}
            .error_matter h2{ font-size:60px;}
            .error_matter h3{ font-size:25px; margin-bottom:10px;}
            .error_matter p{ font-size:14px; color:#000;}
            }
        </style>
    </head>
    <body>
        
                    <?php echo $__env->yieldContent('message'); ?>
               
    </body>
</html>
