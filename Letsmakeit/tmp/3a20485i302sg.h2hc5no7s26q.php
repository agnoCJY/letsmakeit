<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= ($html_title) ?></title>
    <link rel="icon" href="static/img/black_logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="static/css/index.css">

</head>
<body style= "background: #EBEEF2">
<header>
    <div class="float-left box-border h-32 w-32 p-4 ...">
        <a href="<?= ($BASE) ?>/"><img  class="logo" src="static/img/sparkslogo.png"></a>
    </div>
    <div class="box-border pt-8 pr-10 ...">
        <ul class="flex flex-row-reverse">
            <li class="box-border w-50 p-4 ..."><a href="https://media.ed.ac.uk/media/Global%20Recipe%20Collection/1_pzuyjr1r">VIDEO</a></li>
            <li class="box-border w-50 p-4 ..."><a href="static/DWD 750 words text Report-1st submission.pdf">REPORT</a></li>
            <?php if ($SESSION['userName']=='UNSET'): ?>
                
                    <li class="box-border w-50 p-4 ..." id="menu_a" style="color:#F23D4C"><a href="<?= ($BASE) ?>/login">LOG IN</a></li>
                
                <?php else: ?>
                    <li class="box-border w-50 p-4 ..." id="menu_a" style="color:#F23D4C"><a href="<?= ($BASE) ?>/user_info">Hi, <?= ($SESSION['userName']) ?></a></li>
                
            <?php endif; ?>      
            <?php if ($SESSION['userName']=='UNSET'): ?>
                
                    <li class="box-border w-50 p-4 ..." id="menu_a" style="color:#F23D4C"><a href="<?= ($BASE) ?>/login">SHARE RECIPE</a></li>
                
                <?php else: ?>
                    <li class="box-border w-50 p-4 ..." id="menu_a" style="color:#F23D4C"><a href="<?= ($BASE) ?>/share_recipe?step=1">SHARE RECIPE</a></li>
                
            <?php endif; ?>      
            <li class="box-border w-50 p-4 ..."><a href="<?= ($BASE) ?>/viewrecipe-navigate">VIEW RECIPE</a></li>
            <li class="box-border w-50 p-4 ..."><a href="<?= ($BASE) ?>/"><u><b>HOME</b></u></a></li>
        </ul>
    </div>
</header>
<div class="container">
<!--    <div class="bg-fixed ..." style="background-image: url('static/img/pexels-daria-shevtsova-1030973.png');">-->
    <div class="background">
        <img  src="static/img/pexels-daria-shevtsova-1030973.png">
    </div>

    <div class="flex flex-col ...">
        <div id="title_en"><b>GLOBAL GOURMET SPARKS</b></div>
        <div class="title-pt">Uma centelha de inspira????o dos alimentos globais</div>
        <div class="title-zh">?????????????????????????????????</div>
    </div>
    <div class="line"></div>
    <div class="intro-title">SHARE & NAVIGATE</div>
    <div class="intro">Global Gourmet Sparks is a website for everyone who fancies about world-foods. This site also
        allows users to share authentic recipes from all over the world and also be inspired by navigating others
        country???s recipes. </div>
</div>
</body>


</html>


