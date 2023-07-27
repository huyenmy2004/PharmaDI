<style>
    @keyframes sign-animation {
        from {opacity: 1;}
        to {opacity: 0;}
    }
    .slow-motion{
        animation-name: sign-animation;
        animation-duration: 1s;
    }
    .sign-in-bgr{
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.4);
        height: 100vh;
        width: 100vw;
        position: fixed;
        z-index: 2;
    }
    .sign-in{
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        width: 500px;
        height: max-content;
        >button{
            padding: 12px 30px;
            border-radius: 25px;
            background-color: #15A5E3;
            border: 0;
            color: white;
            font-size: 16px;
            margin: 20px 0 10px;
        }
    }
    input:focus-within{
        border: 1px solid #0071AF;
    }
    .hide{
        display: none;
    }
    .sign-in-input{
        position: relative;
        padding: 5px;
        >span{
            position: absolute;
            left: 23px;
            font-size: 14px;
            background-color: white;
            padding: 0 5px;
        }
        >input{
            width: 400px;
            height: 35px;
            padding: 20px 18px;
            border-radius: 8px;
            margin: 10px;
            font-size: 14px;
            border: 1px solid #d8d8d8;
            outline-style: none;
        }
        >svg{
            position: absolute;
            right: 30px;
            top: 28px;
        }
    }
    svg:hover{
        cursor: pointer;
    }
</style>
<body>
    <div class="sign-in-bgr hide">
        <div action="" class="sign-in">
            <span style="font-size:28px; color: #0071AF; font-weight: 600; width: max-content; margin:20px 0 20px 0;">ĐĂNG NHẬP</span>
            <div class="sign-in-input">
                <span>Tên đăng nhập</span>
                <input type="text" name="username" placeholder="Nhập tên tài khoản...">
            </div>
            <div class="sign-in-input">
                <span>Mật khẩu</span>
                <input type="password" id="pass" name="pass" placeholder="Nhập mật khẩu...">
                <svg onclick="showPass('pass')" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7215 4.73297C17.0071 4.85535 17.1393 5.18603 17.017 5.47157L16.4999 5.24999C17.017 5.47157 17.017 5.47144 17.017 5.47157L17.0164 5.47283L17.0156 5.47469L17.0132 5.48021L17.0052 5.49827C16.9985 5.51337 16.9889 5.53453 16.9764 5.5613C16.9515 5.61481 16.9149 5.6908 16.8666 5.78561C16.77 5.97509 16.6256 6.2405 16.4313 6.55234C16.1121 7.06462 15.6543 7.70823 15.0464 8.34763L15.7727 9.07387C15.9924 9.29354 15.9924 9.6497 15.7727 9.86937C15.553 10.089 15.1969 10.089 14.9772 9.86937L14.2268 9.11893C13.732 9.53345 13.1646 9.92252 12.5213 10.2422L13.2214 11.3182C13.3909 11.5786 13.3171 11.927 13.0567 12.0965C12.7963 12.2659 12.4479 12.1922 12.2785 11.9318L11.4616 10.6764C10.8771 10.8672 10.2442 10.997 9.56244 11.0435V12.375C9.56244 12.6857 9.3106 12.9375 8.99994 12.9375C8.68928 12.9375 8.43744 12.6857 8.43744 12.375V11.0435C7.77667 10.9984 7.16182 10.8751 6.59237 10.6938L5.78681 11.9318C5.61738 12.1922 5.26895 12.266 5.00855 12.0965C4.74816 11.9271 4.67443 11.5787 4.84386 11.3183L5.52817 10.2666C4.87988 9.94998 4.30786 9.56262 3.80882 9.14868L3.08808 9.86942C2.86841 10.0891 2.51226 10.0891 2.29259 9.86942C2.07292 9.64975 2.07292 9.29359 2.29259 9.07392L2.98541 8.3811C2.36699 7.73633 1.90144 7.08491 1.57708 6.56599C1.37988 6.25052 1.23345 5.98173 1.13541 5.78976C1.08636 5.69371 1.04933 5.6167 1.02403 5.56247C1.01137 5.53535 1.00165 5.5139 0.994811 5.4986L0.986716 5.48031L0.984284 5.47473L0.98347 5.47284L0.983163 5.47213C0.983106 5.472 0.982924 5.47157 1.49994 5.24999L0.983163 5.47213C0.860788 5.18659 0.992821 4.85535 1.27836 4.73297C1.56367 4.6107 1.89404 4.74265 2.01666 5.02771C2.01662 5.02761 2.0167 5.02781 2.01666 5.02771L2.01738 5.02935L2.02193 5.03964C2.02635 5.04953 2.03355 5.06542 2.04354 5.08685C2.06354 5.12972 2.09472 5.19468 2.13732 5.2781C2.22259 5.44506 2.35321 5.6852 2.53104 5.96969C2.88775 6.54035 3.42868 7.28031 4.1667 7.96619C4.81613 8.56972 5.61194 9.12566 6.56374 9.49185C7.2796 9.76726 8.08903 9.93749 8.99994 9.93749C9.93123 9.93749 10.7565 9.75956 11.4843 9.4731C12.4303 9.10074 13.2207 8.54118 13.865 7.93648C14.5921 7.25397 15.1251 6.52136 15.4765 5.95739C15.6517 5.67622 15.7804 5.43919 15.8644 5.27449C15.9064 5.19221 15.9371 5.12817 15.9568 5.08593C15.9666 5.06481 15.9737 5.04916 15.9781 5.03942L15.9825 5.02931L15.9829 5.02841C15.9829 5.02849 15.983 5.02834 15.9829 5.02841M16.7215 4.73297C16.4361 4.61063 16.1054 4.74302 15.9829 5.02841L16.7215 4.73297ZM2.01666 5.02771C2.01662 5.02761 2.0167 5.02781 2.01666 5.02771V5.02771Z" fill="#505050"/>
                </svg>
            </div>
            <button>Đăng nhập</button>
            <div style="display: flex; font-size:14px; padding: 20px">
                <span>Bạn chưa có tài khoản?</span>
                <span style="padding-left: 5px; color: #0071AF; font-weight: 600">Đăng ký ngay</span>
            </div>
        </div>
    </div>
</body>
