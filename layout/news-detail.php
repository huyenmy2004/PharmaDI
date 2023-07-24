<!-- MENU  -->
<?php require "../component/header.php"; ?>
<head>
    <title>Chi tiết tin tức</title>
    <style>
        body{
            font-family: "Inter";
        }
        .news-breadcrumb:hover{
            cursor: pointer;
        }
        .news-detail{
            display: flex;
            flex-direction: column;
        }
        .news-breadcrumb{
            display: flex;
            padding-left: 30px;
        }
        .news-breadcrumb-black{
            display: flex;
            align-items: center;
            color: #505050;
            font-size: 14px;
        }
        .news-breadcrumb-blue{
            color: #0071AF;
            display: flex;
            align-items: center;
            font-size: 14px;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="news-detail">
        <div class="news-breadcrumb">
            <div class="news-breadcrumb-black">
                <span onclick="link('http://localhost/PharmaDI/layout/home.php')">Trang chủ</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.09327 3.6921C7.35535 3.46746 7.74991 3.49781 7.97455 3.75989L12.9745 9.59323C13.1752 9.82728 13.1752 10.1727 12.9745 10.4067L7.97455 16.24C7.74991 16.5021 7.35535 16.5325 7.09327 16.3078C6.83119 16.0832 6.80084 15.6886 7.02548 15.4266L11.6768 9.99997L7.02548 4.57338C6.80084 4.3113 6.83119 3.91674 7.09327 3.6921Z" fill="#505050"/>
                </svg>
            </div>
            <div class="news-breadcrumb-black">
                <span>Tin tức</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.09327 3.6921C7.35535 3.46746 7.74991 3.49781 7.97455 3.75989L12.9745 9.59323C13.1752 9.82728 13.1752 10.1727 12.9745 10.4067L7.97455 16.24C7.74991 16.5021 7.35535 16.5325 7.09327 16.3078C6.83119 16.0832 6.80084 15.6886 7.02548 15.4266L11.6768 9.99997L7.02548 4.57338C6.80084 4.3113 6.83119 3.91674 7.09327 3.6921Z" fill="#505050"/>
                </svg>
            </div>
            <div class="news-breadcrumb-blue">
                <span>Tên sản phẩm nè</span>
            </div>
        </div>
        <div class=""></div>
    </div>
</body>
<!-- FOOTER  -->
<?php require_once "../component/footer.php"; ?>
