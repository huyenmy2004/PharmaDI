<!-- MENU  -->
<?php require "../component/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tin tức</title>
    <style>
        .news-list{
            padding-bottom: 30px;
            background-color: #F4F7FC;
        }
        .news-breadcrumb:hover{
        cursor: pointer;
        }
        .news-detail{
            display: flex;
            flex-direction: column;
            background-color: #F8F8F8;
        }
        .news-breadcrumb{
            display: flex;
            padding-left: 80px;
        }
        .news-breadcrumb-black{
            display: flex;
            align-items: center;
            color: #505050;
            font-size: 14px;
            padding-top: 25px;
        }
        .news-breadcrumb-blue{
            color: #0071AF;
            display: flex;
            align-items: center;
            font-size: 14px;
            font-weight: 600;
            padding-top: 25px;
        }
        .news-list-posts{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .news-list-post{
            width: 28.5%;
            margin: 25px 15px 0px 20px;
        }
    </style>
</head>
<body>
    <div class="news-list">
        <div class="news-breadcrumb">
            <div class="news-breadcrumb-black">
                <span onclick="link('http://localhost/PharmaDI/layout/home.php')">Trang chủ</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.09327 3.6921C7.35535 3.46746 7.74991 3.49781 7.97455 3.75989L12.9745 9.59323C13.1752 9.82728 13.1752 10.1727 12.9745 10.4067L7.97455 16.24C7.74991 16.5021 7.35535 16.5325 7.09327 16.3078C6.83119 16.0832 6.80084 15.6886 7.02548 15.4266L11.6768 9.99997L7.02548 4.57338C6.80084 4.3113 6.83119 3.91674 7.09327 3.6921Z" fill="#505050"/>
                </svg>
            </div>
            <div class="news-breadcrumb-blue">
                <span>Tin tức</span>
            </div>
        </div>
        <div class="news-list-posts">
            <div class="news-list-post">
                <?php require "../component/news.php"; ?>
            </div>
            <div class="news-list-post">
                <?php require "../component/news.php"; ?>
            </div>
            <div class="news-list-post">
                <?php require "../component/news.php"; ?>
            </div>
            <div class="news-list-post">
                <?php require "../component/news.php"; ?>
            </div>
            <div class="news-list-post">
                <?php require "../component/news.php"; ?>
            </div>
            <div class="news-list-post">
                <?php require "../component/news.php"; ?>
            </div>
        </div>
    </div>
    <!-- FOOTER  -->
    <?php require_once "../component/footer.php"; ?>
</body>