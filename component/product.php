<style>
    body{
    font-family: "Roboto";
    height: 100vh;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    }
    .prod{
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
        border: 1px solid #d8d8d8;
        border-radius: 6px;
        margin-bottom: 15px;
    }
    .prod-img{
        display: flex;
        width: 25%;
        height: max-content;
        >img{
            width: 100%;
        }
    }
    .prod-detail{
        display: flex;
        flex-direction: column;
        width: 100%;
        padding: 10px;
        color: #505050
    }
</style>
</head>
<body>
    <div class="prod">
        <div class="prod-img">
            <img src="../asset/image/prod.jpg" alt="product">
        </div>
        <div class="prod-detail">
            <span style="font-weight: 600; font-size: 12px; padding: 5px 0; text-overflow: ellipsis;">Nước Uống Chống Say Tàu Xe Donsung (H/30c/30ml)</span>
            <span style="font-weight: 500; font-size: 12px;">Hộp 30 chai x 30ml</span>
            <span style="font-weight: 600; font-size: 16px; color: #0071AF; padding: 5px 0;">99.000đ</span>
        </div>
    </div>
</body>
</html>