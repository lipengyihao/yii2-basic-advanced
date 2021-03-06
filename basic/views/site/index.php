<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$this->registerLinkTag([
    'rel' => 'stylesheet',
    'href' => '/yii2-sa/dada.css',
]);
?>
<?php $this->beginContent('@app/views/layouts/test.php'); ?>

<?php $this->endContent(); ?>

<?php $this->beginBlock('block1'); ?>

block1的内容。。。。。。。。。。
<?php echo  Yii::getVersion();?>
<?php $this->endBlock(); ?>

<div class="site-index">
    The controller ID is: <?= $this->context->id ?>
    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
<?php
    $header = Yii::$app->request->headers; //为 yii\web\Header\Collection 对象
    //返回Accept header值
    $accept = $header->get('Accept');
    echo "<br/>";
    echo $accept;
    echo $header->get('host');
    echo "<br/>";
    var_dump($header);


?>
<div class="alert alert-info">
    <div><label for="">代理商:</label><?=Yii::$app->request->userAgent;?></div>
    <div><label for="">客户端主机:</label><?=Yii::$app->request->userHost;?></div>

    <div><label for="">客户端主机:</label><?=Yii::$app->request->getUserHost();?></div>
    <div><label for="">客户端主机:</label><?=Yii::$app->request->headers->get('host');?></div>
    <div><label for="">客户端ip:</label><?=Yii::$app->request->getUserIP();?></div>
    <div><label for="">客户端ip:</label><?=Yii::$app->request->userIP;?></div>
</div>
<div class="alert alert-success">
    <?=Yii::$app->request->contentType;?>
</div>
<div class="alert alert-danger">
    <?php var_dump(Yii::$app->request->acceptableContentTypes);?>
</div>
<?php
Yii::$app->response->content = 'hello world!';
?>