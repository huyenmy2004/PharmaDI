<style>
.compo-news{
    display: flex;
    flex-direction: column;
    width: 100%;
}
.compo-news:hover{
    cursor: pointer;
}
.news-img{
    display: flex;
    flex-direction: column;
    width: 100%;
    height: max-content;
}
.news-title{
    width: 90%;
    font-size: 14px;
    font-weight: 600;
    padding: 15px 0;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.news-content{
    width: 100%;
    height: 42px;
    font-size: 12px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
}
.show-more{
    color: #505050; 
    font-style: italic; 
    font-size: 12px; 
    outline: none;
    background-color: transparent;
    border: none;
    display: flex;
    justify-content: left;
    padding: 10px 0;
}
</style>
<div class="compo-news" onclick="link('http://localhost/PharmaDI/layout/news-detail.php')">
    <div class="news-img">
        <img src="../asset/image/news.png" alt="" >
        <div class="news-title">
            Riêng về chất lượng bệnh viện, ISO thường bị nhầm lẫn thành tiêu chuẩn chất lượng y tế quốc tế...êu chuẩn chất lượng y tế quốc tế...
        </div>
        <div class="news-content">
            Có một xu hướng ở một số BV lớn/trung bình ở Việt Nam hiện tại đó là họ đã đang và sẽ theo đuổi hệ thống QLCL ISO 9001:2008 và mới nhất là chuẩn ISO 9001:2015 để áp dụng cho công tác quản lý chất lượng của bệnh viện mình. Riêng tác giả có một góc nhìn hơi khác về chuẩn ISO trong hệ thống bệnh viện, và mong muốn được chia sẻ với anh em trên diễn đàn chúng ta để cùng thảo luận, trao đổi về một số tiêu chuẩn chất lượng y tế HOT ở thời điểm hiện tại nhá nhá nhá.
        </div>
        <button class="show-more">Xem thêm...</button>
    </div>
</div>
