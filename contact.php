<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'common-page/meta.php';?>

    <title>联系我们 - 储钰资产管理（上海）有限公司</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body data-nav-index="4">

<?php include 'common-page/header.php';?>

<?php include 'common-page/banner.php';?>

<section id="container" class="inner clearfix">

    <?php include 'common-page/side-left.php';?>

    <section id="main" class="pull-right">

        <p class="location">给我留言（带<span style="color: #ff0000;"> * </span>的项目是必须填写的)</p>

        <div id="box">

            <form id="msg-form" name="msg-form" action="?" method="post">
                <dl class="clearfix">
                    <dt><label for="company">公司名称：</label></dt>
                    <dd><input type="text" id="company" name="company" style="width: 332px;"><span class="require">*</span></dd>
                </dl>
                <dl class="clearfix">
                    <dt><label for="contact-name">联系人：</label></dt>
                    <dd><input type="text" id="contact-name" name="contact-name"><span class="require">*</span></dd>
                </dl>
                <dl class="clearfix">
                    <dt><label for="mobile">联系电话：</label></dt>
                    <dd><input type="text" id="mobile" name="mobile"><span class="require">*</span></dd>
                </dl>
                <dl class="clearfix">
                    <dt><label for="fax">联系传真：</label></dt>
                    <dd><input type="text" id="fax" name="fax"><span class="require">*</span></dd>
                </dl>
                <dl class="clearfix">
                    <dt><label for="email">E-mail：</label></dt>
                    <dd><input type="text" id="email" name="email"><span class="require">*</span></dd>
                </dl>
                <dl class="clearfix">
                    <dt><label for="msg-subject">留言主题：</label></dt>
                    <dd><input type="text" id="msg-subject" name="msg-subject" style="width: 332px;"><span class="require">*</span></dd>
                </dl>
                <dl class="clearfix">
                    <dt><label for="msg-content">留言内容：</label></dt>
                    <dd><textarea id="msg-content" name="msg-content" cols="58" rows="12"></textarea></dd>
                </dl>
                <dl class="clearfix">
                    <dt></dt>
                    <dd>
                        <button type="submit">提交留言</button>
                        <button type="reset">重写</button>
                    </dd>
                </dl>
            </form>

        </div>

    </section>

</section>

<?php include 'common-page/footer.php';?>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/layer/layer.js"></script>
<script src="js/common.js"></script>
<script src="js/contact.js"></script>

</body>
</html>