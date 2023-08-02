<!-- MENU  -->
<?php require "../component/header.php"; ?>
<?php require "../component/product.php"; ?>
<head>
    <title>Chi tiết sản phẩm</title>
    <style>
        span:hover{
            cursor: pointer;
        }
        .prod-breadcrumb:hover {
            cursor: pointer;
        }

        .prod-breadcrumb {
            display: flex;
            margin: 10px 80px 0 80px;
        }

        .prod-breadcrumb-black {
            display: flex;
            align-items: center;
            color: #505050;
            font-size: 14px;
            padding-top: 15px;
        }

        .prod-breadcrumb-blue {
            color: #0071AF;
            display: flex;
            align-items: center;
            font-size: 14px;
            font-weight: 600;
            padding-top: 15px;
        }
        .prod-info{
            display: flex;
            justify-content: space-between;
            margin: 30px 80px;
        }
        .prod-info-detail{
            width: 60%;
            background-color: white;
            border-radius: 10px;
            padding: 50px;
        }
        .title-lowercase{
            padding: 15px 0 10px 30px;
            font-weight: 600;
            color: #505050;
        }
        .prod-info-prod{
            background-color: white;
            border-radius: 10px;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            
        }
        .prod-info-top{
            display: flex;
        }
        .prod-info-top-right{
            display: flex;
            flex-direction: column;
        }
        .prod-info-top-content{
            display: flex;
            flex-direction: column;
            width: 100%
        }
        .prod-info-img{
            display: flex;
            justify-content: center;
            overflow: hidden;
            max-width: 40%;
            height: max-content;
            >img {
                width: 400px;
                height: auto;
            }
        }
        .plus-number{
            display: flex;
            margin: 0 0 5px 0;
            >button{
                display: flex;
                justify-content: center;
                align-items: center;
                border: 1px solid #d8d8d8;
                background-color: transparent;
                width: 40px;
            }
            >input{
                border-top: 1px solid #d8d8d8;
                border-bottom: 1px solid #d8d8d8;
                outline: 0;
                border-left: 0;
                border-right: 0;
                width: 80px;
                padding: 5px;
            }
        }
        .prod-info-top-button{
            margin-top: 10px;
            >form{
                >button{
                    padding: 10px 16px;
                    border-radius: 6px;
                    background-color: #0071AF;
                    border: transparent;
                    font-size: 12px;
                    color: white;
                    width: 300px;
                    margin: 10px 0;
                }
            }
        }
        .prod-descript-active{
            font-size: 14px;
            font-weight: 600;
            color:#505050;
            margin-right: 15px;
            padding-bottom: 10px;
            border-bottom: 3px solid #0071AF;
        }
        .prod-descript-deactive{
            font-size: 14px;
            font-weight: 600;
            color:#505050;
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <div style="display: flex; flex-direction: column; background-color: #F4F7FC">
        <div class="prod-breadcrumb">
            <div class="prod-breadcrumb-black">
                <span onclick="link('http://localhost/PharmaDI/layout/home.php')">Trang chủ</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.09327 3.6921C7.35535 3.46746 7.74991 3.49781 7.97455 3.75989L12.9745 9.59323C13.1752 9.82728 13.1752 10.1727 12.9745 10.4067L7.97455 16.24C7.74991 16.5021 7.35535 16.5325 7.09327 16.3078C6.83119 16.0832 6.80084 15.6886 7.02548 15.4266L11.6768 9.99997L7.02548 4.57338C6.80084 4.3113 6.83119 3.91674 7.09327 3.6921Z"
                        fill="#505050" />
                </svg>
                <span onclick="link('http://localhost/PharmaDI/layout/home.php')">Sản phẩm</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.09327 3.6921C7.35535 3.46746 7.74991 3.49781 7.97455 3.75989L12.9745 9.59323C13.1752 9.82728 13.1752 10.1727 12.9745 10.4067L7.97455 16.24C7.74991 16.5021 7.35535 16.5325 7.09327 16.3078C6.83119 16.0832 6.80084 15.6886 7.02548 15.4266L11.6768 9.99997L7.02548 4.57338C6.80084 4.3113 6.83119 3.91674 7.09327 3.6921Z"
                        fill="#505050" />
                </svg>
            </div>
            <div class="prod-breadcrumb-blue">
                <span>Tên sản phẩm</span>
            </div>
        </div>
        <div class="prod-info">
            <div class="prod-info-detail">
                <div class="prod-info-top">
                    <div class="prod-info-img">
                        <img src="../asset/image/prod.jpg" alt="">
                    </div>
                    <div class="prod-info-top-right">
                        <div class="prod-info-top-content">
                            <span style="font-size: 12px; padding: 5px 0; color: #505050">Dạng thuốc tiêm</span>
                            <span style="font-size: 18px; padding: 5px 0; font-weight: 600; color: #505050">Lipitor 20mg Nén Pfizer (H/30v)Pfizer (H/30v)Pfizer (H/30v)</span>
                            <span style="font-size: 12px; padding-bottom: 5px; color: #505050">Hộp 3 vỉ x 10 viên nén bao phim</span>
                            <span style="font-size: 12px; padding-bottom: 5px; color: #505050">Quốc gia: Pháp</span>
                            <span style="padding: 5px 10px; background-color: #EFFAFF; font-size: 12px; border-radius: 20px; width: fit-content; margin-bottom: 30px;">Máu, Huyết Học</span>
                            <div class="prod-price">
                                <span style="padding-top: 5px; font-size: 24px; color: #0071AF; font-weight: 600; letter-spacing: 1px;">400.000đ</span>
                                <span style="font-size: 12px; text-decoration: line-through; color: #505050;">473.300đ</span>
                            </div>
                        </div>
                        <div class="prod-info-top-button">
                            <form action="">
                                <div class="plus-number">
                                    <button>
                                        <svg width="11" height="3" viewBox="0 0 11 3" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 1.62295C11 2.49263 10.4317 2.67285 9.73077 2.67285L1.26923 2.67227C0.568254 2.67227 1.50475e-08 2.49215 8.74709e-08 1.62247C1.59894e-07 0.752783 0.568255 0.572645 1.26923 0.572645L9.73077 0.572646C10.4317 0.572646 11 0.753261 11 1.62295Z"
                                                fill="#505050" />
                                        </svg>
                                    </button>
                                    <input type="number">
                                    <button>
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99942 0.323242C6.82784 0.323242 6.99951 0.919798 6.99951 1.65569L6.99896 10.5386C6.99896 11.2745 6.82739 11.8711 5.99896 11.8711C5.17053 11.8711 4.99894 11.2745 4.99894 10.5386L4.99894 1.65569C4.99894 0.919798 5.17099 0.323242 5.99942 0.323242Z"
                                                fill="#505050" />
                                            <path
                                                d="M11.499 6.09658C11.499 6.96627 10.9308 7.14648 10.2298 7.14648L1.76825 7.14591C1.06728 7.14591 0.499023 6.96579 0.499024 6.0961C0.499024 5.22642 1.06728 5.04628 1.76825 5.04628L10.2298 5.04628C10.9308 5.04628 11.499 5.22689 11.499 6.09658Z"
                                                fill="#505050" />
                                        </svg>
                                    </button>
                                </div>
                                <button type="submit">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr style="border: 1px solid #d8d8d8">
                <div class="prod-info-bottom">
                    <div class="prod-descript-title">
                        <span class="prod-descript-active" id="descript" onclick="toggleSelectDescript('descript', '<?php echo 'eccv' ?>')">Mô tả sản phẩm</span>
                        <span class="prod-descript-deactive" id="1" onclick="toggleSelectDescript('1', '<?php echo 'ecdfsfsdfsdfcv' ?>')">Thành phần</span>
                        <span class="prod-descript-deactive" id="2" onclick="toggleSelectDescript('2', '<?php echo 'ecdsfsdfcv' ?>')">Liều dùng</span>
                    </div>

                    <div style="font-size: 14px; color: #505050; margin-top: 30px" id="content">
                        eccv
                    </div>
                </div>
            </div>
            <div style="width: 30%;">
                <div style="padding-bottom: 20px; background-color: white; border-radius: 10px; padding: 20px">
                    <div style="display: flex; justify-content: space-between; ">
                        <img src="../asset/image/brand.png" alt="">
                        <span style="padding: 5px 10px; color: #505050; border: 1px solid #d8d8d8; border-radius: 20px; font-size: 12px;">09 sản phẩm</span>
                    </div>
                    <div style="font-size: 13px; margin-top: 20px">Arkopharma là Thương hiệu Thực phẩm bảo vệ sức khỏe Số 1 tại Pháp Theo số liệu nghiên cứu thị trường bởi IQVIA 9/2021.</div>
                </div>
                <div class="prod-info-prod">
                    <div class="title-lowercase">Sản phẩm cùng thương hiệu</div>
                    <div style=" padding: 10px 30px">
                        <div style="margin-bottom: 10px">
                            <div class="prod">
                                <div class="prod-img">
                                    <img src="../asset/image/prod.jpg" alt="product">
                                </div>
                                <div class="product-detail">
                                    <span style="font-weight: 600; font-size: 12px; padding: 5px 0; max-width: 90%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Nước Uống Chống Say Tàu Xe Donsung (H/30c/30ml) </span>
                                    <span style="font-weight: 500; font-size: 12px;">Hộp 30 chai x 30ml</span>
                                    <span style="font-weight: 600; font-size: 16px; color: #0071AF; padding: 5px 0;">99.000đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- FOOTER  -->
<?php require "../component/footer.php"; ?>
<script>
    function toggleSelectDescript(id, content){
        document.querySelector('.prod-descript-active').classList.toggle('prod-descript-deactive')
        document.querySelector('.prod-descript-active').classList.toggle('prod-descript-active')
        document.getElementById(id).classList.toggle('prod-descript-active')
        document.getElementById(id).classList.toggle('prod-descript-deactive')
        document.getElementById('content').innerHTML  = content
    }
</script>