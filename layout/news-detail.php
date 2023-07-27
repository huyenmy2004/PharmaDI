<!-- MENU  -->
<?php require "../component/header.php"; ?>
<head>
    <title>Chi tiết tin tức</title>
    <style>
        .news-breadcrumb:hover{
            cursor: pointer;
        }
        .news-detail{
            display: flex;
            flex-direction: column;
            background-color: #F4F7FC;
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
        .news-detail-post{
            display: flex;
            justify-content: center;
            margin: 30px;
        }
        .news-detail-content{
            display: flex;
            flex-direction: column;
            width: 67%;
            color: #505050;
            height: max-content;
            font-size: 14px;
            border-radius: 10px;
            margin-right: 30px;
            background-color: white;
            padding: 20px;
            >img{
                width: 100%;
                height: max-content;
                padding-bottom: 30px;
                border-radius: 8px;
            }
        }
        .news-detail-more-post{
            display: flex;
            flex-direction: column;
            width: 23%;
        }
        .news-title{
            width: 60px;
            font-size: 14px;
            font-weight: 600;
            padding: 15px 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
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
                <span onclick="link('http://localhost/PharmaDI/layout/news-list.php')">Tin tức</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.09327 3.6921C7.35535 3.46746 7.74991 3.49781 7.97455 3.75989L12.9745 9.59323C13.1752 9.82728 13.1752 10.1727 12.9745 10.4067L7.97455 16.24C7.74991 16.5021 7.35535 16.5325 7.09327 16.3078C6.83119 16.0832 6.80084 15.6886 7.02548 15.4266L11.6768 9.99997L7.02548 4.57338C6.80084 4.3113 6.83119 3.91674 7.09327 3.6921Z" fill="#505050"/>
                </svg>
            </div>
            <div class="news-breadcrumb-blue">
                <span>REVIEW 5 THUỐC TRỊ MỤN HIỆU QUẢ TỐT NHẤT HIỆN NAY</span>
            </div>
        </div>
        <div class="news-detail-post">
            <div class="news-detail-content">
                <img src="../asset/image/news-img.png" alt="">
                <span style="font-weight: 600; padding-bottom: 20px; font-size: 18px; ">REVIEW 5 THUỐC TRỊ MỤN HIỆU QUẢ TỐT NHẤT HIỆN NAY</span>
                <div class="news-detail-insdie">
                    Thuốc trị mụn là một trong những giải pháp trị mụn đơn giản, tiết kiệm
                    chi phí nhất. Nhưng thực tế hiệu quả sử dụng thuốc trị mụn dạng viên như này có tốt không? 
                    Có an toàn cho sức khỏe người dùng hay có tác dụng phụ nào không? Để giúp các bạn có thể điều 
                    trị mụn tốt và nhanh nhất, trong bài viết này mình sẽ giải đáp các vấn đề trên nhé!
                    <br><br>
                    Mụn trứng cá thường xuất hiện trong độ tuổi dậy thì ở nam và nữ. Vậy mụn trứng cá là gì? Hiểu rõ về dấu hiệu nhận biết, nguyên nhân gây mụn sẽ đóng vai trò quan trọng trong việc điều trị và ngăn ngừa mụn trứng cá.
                    Novolinda có phải kem trộn không?
                    “Thuốc Novolinda có phải là kem trộn không?” là một trong những câu hỏi mà nhiều người thắc mắc. Câu trả lời là Novolinda không phải kem trộn. Đây là thuốc kết hợp hai loại kháng sinh khác nhau đó là Clindamycin và Metronidazole. 2 hoạt chất này có tác dụng điều trị mụn trứng cá do nhiễm vi khuẩn, do đó Novolinda là thuốc chứ không phải kem trộn.
                </div>
            </div>
            <div class="news-detail-more-post">
                <span style="padding: 0 0 20px 0px; font-weight: 600; color: #505050; font-size: 20px">Tin tức khác</span>
                <div>
                    <?php require "../component/news.php"; ?>
                </div>
                <button class="show-more" onclick="link('http://localhost/PharmaDI/layout/news-list.php')" style="font-style: normal; font-weight: 600; font-size: 14px; justify-content:right">
                    Xem tất cả
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.09327 3.6921C7.35535 3.46746 7.74991 3.49781 7.97455 3.75989L12.9745 9.59323C13.1752 9.82728 13.1752 10.1727 12.9745 10.4067L7.97455 16.24C7.74991 16.5021 7.35535 16.5325 7.09327 16.3078C6.83119 16.0832 6.80084 15.6886 7.02548 15.4266L11.6768 9.99997L7.02548 4.57338C6.80084 4.3113 6.83119 3.91674 7.09327 3.6921Z" fill="#505050"/>
                    </svg>
            </button>
            </div>
        </div>
    </div>
</body>
<!-- FOOTER  -->
<?php require_once "../component/footer.php"; ?>
