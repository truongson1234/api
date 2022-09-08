<table cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td width="30%" align="center" class="border-right-gray" >
            <img src="/img/logo-medici.png" width="90px">
        </td>
        <td width="2%">
        </td>
        <td width="68%" align="left">
            <span class="font-10 bold color-gray">Hotline:</span><span class="font-10 color-gray">1900 34 34</span><br>
            <span class="font-10 bold color-gray">Website:</span><span class="font-10 color-gray">www.baohiem.medici.vn</span><br>
            <span class="font-10 bold color-gray">Địa chỉ:</span><br>
            <span class="font-8 color-gray">HN: Tầng 7, Tòa nhà Peakview, số 36 Hoàng Cầu, P. Ô Chợ Dừa, Q. Đống Đa, TP Hà Nội</span><br>
            <span class="font-8 color-gray">HCM: Tầng 11, Lim Tower III, 29A Nguyễn Đình Chiểu, Quận 1, TP. Hồ Chí Minh</span>

        </td>
    </tr>
    <tr>
        <td class="border-bottom-gray" width="100%"></td>
    </tr>
    <tr>
        <td width="32%"></td>
        <td width="68%" align="center" class="font-italic">
            <br>
            <br>
            Hà Nội, ngày {{ substr($date_approve,0,2) }} tháng {{ substr($date_approve,3,2) }} năm {{ substr($date_approve,6,4) }}
        </td>
    </tr>
</table>
<br>
<br>
<br>
<table cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td width="100%" align="center">
            <span class="center bold font-16">THƯ MỜI HỢP TÁC KINH DOANH</span>
        </td>
    </tr>
</table>
<br>
<br>
<br>
<table cellpadding="12" cellspacing="0" border="0">
    <tr>
        <td>
            <span>
                Kính gửi: {{ $sex }} {{ $name }} – CMND/CCCD: {{ $id_card_number }}
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
            CÔNG TY CỔ PHẦN TẬP ĐOÀN MEDICI (gọi tắt là Công ty Medici) vui mừng thông báo {{ $sex }} đã xuất sắc vượt qua các vòng phỏng vấn của Công ty MEDICI. Chúng tôi đã rất ấn tượng với kinh nghiệm chuyên môn cùng những kỹ năng và uy tín của {{ $sex }}.
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                Bằng thư này Công ty MEDICI chính thức xác nhận và gửi tới {{ $sex }} Thư mời hợp tác tư vấn, phân phối sản phẩm với những điều khoản, điều kiện cơ bản đã được thống nhất như sau:
            </span>
        </td>
    </tr>
    <tr>
        <td width="30%" align="left"><span>Chức danh bổ nhiệm:</span></td>
        <td  width="70%" align="left"><span>{{ $level }}</span></td>
    </tr>
    <tr>
        <td width="30%" align="left"><span>Báo cáo trực tiếp cho:</span></td>
        <td  width="70%" align="left"><span>{{ $parent }}</span></td>
    </tr>
    <tr>
        <td width="30%" align="left"><span>Phạm vi tuyển dụng:</span></td>
        <td  width="70%" align="left"><span>Được quyền tuyển dụng không giới hạn số lượng SD, SM, FC trên khắp các tỉnh thành toàn quốc.</span></td>
    </tr>
    <tr>
        <td width="30%" align="left"><span>Loại hợp đồng:</span></td>
        <td  width="70%" align="left"><span>Hợp đồng hợp tác tư vấn và phân phối sản phẩm, với thời hạn một năm và sẽ tự động gia hạn mỗi năm.</span></td>
    </tr>
    <tr>
        <td width="30%" align="left"><span>Ngày bắt đầu làm việc</span></td>
        <td  width="70%" align="left"><span>{{ $sex }} có thể bố trí bắt đầu tuyển dụng xây hệ thống kinh doanh ngay khi nhận được thư mời hợp tác này hoặc trước ngày {{ $expire }}.</span></td>
    </tr>
    <tr>
        <td width="30%" align="left"><span>Thu nhập hàng tháng:</span></td>
        <td  width="70%" align="left"><span>Áp dụng theo cơ Chế thù lao dành cho {{ $level_2 }} quy định tại Phụ lục gửi kèm dưới đây.</span></td>
    </tr>
    <tr>
        <td width="30%" align="left"><span>Thu nhập thực lĩnh:</span></td>
        <td  width="70%" align="left"><span>Thu nhập trên kết quả kinh doanh trừ các khoản thuế thu nhập cá nhân theo quy định của Pháp luật.</span></td>
    </tr>
</table>
{{-- page 2 --}}
<table cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td width="17%" align="center" >
            <img src="/img/logo-medici.png" width="70px">
        </td>
        <td width="83%" align="left"></td>
    </tr>
</table>
<br>
<br>
<table cellpadding="10" cellspacing="0" border="0">
    <tr>
        <td class="font-12 bold" width="100%" align="left">ĐIỀU KIỆN ĐỂ ĐƯỢC BỔ NHIỆM CHÍNH THỨC</td>
    </tr>
    <tr>
        <td align="left">
            Trong 4 tháng đầu tiên {{ $sex }} cần hoàn thành các chỉ tiêu tối thiểu về tuyển dụng và bổ nhiệm hệ thống kinh doanh như sau:
        </td>
    </tr>
</table>
<table cellpadding="7" cellspacing="0" border="1">
    <tr>
        <td class="bold" width="50%" align="center"><span>CẤP QUẢN LÝ TRONG HỆ THỐNG</span></td>
        <td class="bold" width="50%" align="center" ><span>YÊU CẦU</span><br><span>(4 tháng đầu tiên)</span></td>
    </tr>
    <tr>
        <td width="50%" align="center">Giám đốc vùng – RD</td>
        <td width="50%" align="center">Tổng nhân sự là 8 thành viên đạt chuẩn
Hoặc >= 125 triệu P.FYP tháng đầu tiên
của gói hỗ trợ khởi nghiệp
        </td>
    </tr>
</table>
<table cellpadding="5" cellspacing="0" border="0">
    <tr>
        <td width="100%" align="left">
            <span>
                <strong>Ghi chú: Chi tiết vui lòng tham khảo Thông báo nội bộ số 211110_TDBNQLTT đính kèm.</strong>
            </span>
        </td>
    </tr>
    <tr>
        <td width="100%" align="left">
            <span class="bold">ĐIỀU KHOẢN CHUNG:</span>
        </td>
        
    </tr>
    <tr>
        <td width="100%" align="left">
            <span>
                1. {{ $sex }} đồng ý rằng ngay khi ký kết hợp đồng hợp tác tư vấn và phân phối sản phẩm với Công ty, {{ $sex }} sẽ tuân thủ những quy định hiện hành của Công ty được thông báo trên cổng thông tin dành cho thành viên (Web/Portal) và tuân thủ quy định của Pháp luật.
            </span>
        </td>
    </tr>
    <tr>
        <td width="100%" align="left">
            <span>
                2. Thư này được gửi theo thư điện tử do {{ $sex }} cung cấp trên Đơn đăng ký thành viên MEDICI. Nếu {{ $sex }} còn có bất kỳ câu hỏi nào về nội dung của thư mời vui lòng liên hệ ngay với Quản lý trực tiếp của mình hoặc gửi thư điện tử theo địa chỉ: hethong@medici.vn
            </span>
        </td>
    </tr>
    <tr>
        <td width="100%" align="left">
            <span>
                3. Trước ngày {{ $expire }}, {{ $sex }} cần giới thiệu nộp một hợp đồng bảo hiểm nhân thọ với doanh số cá nhân từ <b>10 triệu P.FYP kèm 3 sản phẩm bổ trợ hoặc đạt doanh số tối thiểu 10 triệu phí bảo hiểm phi nhân thọ thực thu => </b>Ban giám đốc Medici sẽ phê duyệt cấp mã số nội bộ Medici và bổ nhiệm tạm thời.
                <br>Chúng tôi rất chào đón {{ $sex }} sớm đứng trong đội ngũ kinh doanh của Công ty MEDICI và rất tin tưởng sự hợp tác này sẽ thành công tốt đẹp, lâu dài.<br>
            </span>
        </td>
    </tr>
</table>
<br>
<table cellpadding="3" cellspacing="0" border="0">
    <tr>
        <td align="left" width="50%">
            <span>Trân trọng,</span>
        </td>
    </tr>
    <tr>
        <td align="center" width="50%">
            <span><img src="/img/ceo-ngo.png" width="230px" height="120px"></span>
        </td>
    </tr>
    <tr>
        <td align="center" width="30%">
            <span class="bold"> Ngô Đức Anh </span>  
            <br>
            <span>Chủ tịch HĐQT</span>
        </td>
    </tr>
</table>
<br>
<br>
<br>
<br>
{{-- page 3 --}}
<table cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td width="17%" align="center" >
            <img src="/img/logo-medici.png" width="70px">
        </td>
        <td width="83%" align="left"></td>
    </tr>
</table>
<table cellpadding="3" cellspacing="0" border="0">
    <tr>
        <td width="100%" align="center" ><span class="font-12 bold">PHỤ LỤC</span></td>
    </tr>
    <tr>
        <td width="100%" align="center" ><span class="font-12 bold">CƠ CHẾ THÙ LAO DÀNH CHO GIÁM ĐỐC VÙNG</span></td>
    </tr>
    <tr>
        <td width="100%" align="center" ><span>(Ban hành kèm theo Thông báo nội bộ số 30.02_CSTLHTKD và số 211110_GHTKN)</span></td>
    </tr>
</table>
<br>
<br>
<table cellpadding="3" cellspacing="0" border="0">
    <tr>
        <td width="100%" align="left" >
            <span>
                Trích theo Thông báo nội bộ số 30.22_CSTLHTKD và Thông báo nội bộ số 211110_ GHTKN , gồm các Thu nhập sau:
            </span>
        </td>
    </tr>
    <tr>
        <td width="100%" align="left" >
            <span>
                <b> Thu nhập dành cho Giám đốc vùng (RD)</b> gồm những khoản sau:
            </span>
        </td>
    </tr>
    <tr>
        <td width="100%" align="left" >
            <span>
                <b> Thu nhập 1: </b>Từ bán cá nhân là <b>58% P.FYP</b>
            </span>
        </td>
    </tr>
    <tr>
        <td width="100%" align="left" >
            <span>
                <b> Thu nhập 2:</b> Từ quản lý trực tiếp toàn hệ thống của SD (Cấp 3)
            </span>
        </td>
    </tr>
</table>
<br>
<table cellpadding="10" cellspacing="0" border="1">
    <tr>
        <td width="100%" align="center" >
            <span>
                Thu nhập = 8% x Tổng P.FYP toàn hệ thống SD trực tiếp báo cáo RD
            </span>
        </td>
    </tr>
</table>
<br>
<table cellpadding="5" cellspacing="0" border="0">
    <tr>
        <td width="100%" align="left" >
            <span>
                <b>Thu nhập 3:</b> Từ quản lý trực tiếp toàn hệ thống của SM (Cấp 2)
            </span>
        </td>
    </tr>
</table>
<br>
<br>
<table cellpadding="10" cellspacing="0" border="1">
    <tr>
        <td width="100%" align="center" >
            <span>
                Thu nhập = 18% x Tổng P.FYP toàn hệ thống SM báo cáo trực tiếp RD
            </span>
        </td>
    </tr>
</table>
<table cellpadding="10" cellspacing="0" border="0">
    <tr>
        <td width="100%" align="left" >
            <span>
                <b>Thu nhập 4:</b> Từ quản lý trực tiếp toàn hệ thống của FC (Cấp 1)
            </span>
        </td>
    </tr>
</table>

<table cellpadding="10" cellspacing="0" border="1">
    <tr>
        <td width="100%" align="center" >
            <span>
                Thu nhập = 28% x Tổng P.FYP toàn hệ thống FC báo cáo trực tiếp RD
            </span>
        </td>
    </tr>
</table>
<table cellpadding="3" cellspacing="0" border="0">
    <tr>
        <td width="100%" align="left" >
            <span>
                <b>Thu nhập 5:</b> Từ phí tái tục năm thứ hai của hợp đồng bảo hiểm nhân thọ
            </span>
        </td>
    </tr>
    <tr>
        <td width="100%" align="left" >
            <span>
            Hoa hồng tái tục từ phí bảo hiểm năm thứ hai của những hợp đồng cá nhân đã
            bán hoặc đang phục vụ được tính tương tự như mục 2.1.2 Thu nhập 2 của Tư vấn
            viên – FC
             </span>
        </td>
    </tr>
</table>
<br>
<table cellpadding="3" cellspacing="0" border="0">
    <tr>
        <td width="100%" align="left" >
            <span>
                <b>Thu nhập 6: Gói hỗ trợ khởi nghiệp</b>
            </span>
        </td>
    </tr>
    <tr>
        <td width="100%" align="left" >
            <span>
            - Gói hỗ trợ khởi nghiệp dành cho RD  là: <strong>240 triệu</strong>
            </span>
        </td>
    </tr>
    <tr>
        <td width="100%" align="left" >
            <span>
            - Cấp RD sẽ nhận được gói hỗ trợ khởi nghiệp tương ứng nếu đạt chỉ tiêu theo
                từng tháng hoạt động như sau:
            </span>
        </td>
    </tr>
</table>
<table border="1">  
    <tr>
        <th rowspan="2" align="center"><strong>Thời gian</strong></th>
        <th colspan="2" align="center"><strong>Chỉ tiêu</strong></th>
        <th rowspan="2" align="center"><strong>Hỗ trợ</strong></th>
    </tr>
    <tr>
        <td align="center"><strong>P.FYP/tháng<br>
        (Phí nhân thọ)</strong>
        </td>
        <td align="center"><strong>P.FYP lũy kế<br>
        (Phí nhân thọ)</strong>
        </td>
    </tr>
    <tr>
        <td align="center">Tháng đầu tiên</td>
        <td align="center">125,000,000</td>
        <td align="center">125,000,000</td>
        <td align="center">10,000,000</td>
    </tr>
    <tr>
        <td align="center">Tháng thứ 2</td>
        <td align="center">159,000,000</td>
        <td align="center">284,000,000 </td>
        <td align="center">15,000,000</td>
    </tr>
    <tr>
        <td align="center">Tháng thứ 3</td>
        <td align="center">186,000,000</td>
        <td align="center">470,000,000 </td>
        <td align="center">20,000,000</td>
    </tr>
    <tr>
        <td align="center">Tháng thứ 4</td>
        <td align="center">210,000,000 </td>
        <td align="center">680,000,000</td>
        <td align="center">20,000,000</td>
    </tr>
    <tr>
        <td align="center">Tháng thứ 5</td>
        <td align="center">231,000,000 </td>
        <td align="center">911,000,000 </td>
        <td align="center">20,000,000</td>
    </tr>
    <tr>
        <td align="center">Tháng thứ 6</td>
        <td align="center">252,000,000</td>
        <td align="center">1,163,000,000 </td>
        <td align="center">20,000,000</td>
    </tr>
    <tr>
        <td align="center">Tháng thứ 7</td>
        <td align="center">285,000,000</td>
        <td align="center">1,718,000,000</td>
        <td align="center">20,000,000</td>
    </tr>
    <tr>
        <td align="center">Tháng thứ 8</td>
        <td align="center">300,000,000</td>
        <td align="center">2,018,000,000 </td>
        <td align="center">21,000,000</td>
    </tr>
    <tr>
        <td align="center">Tháng thứ 9</td>
        <td align="center">300,000,000  </td>
        <td align="center">2,018,000,000</td>
        <td align="center">22,000,000</td>
    </tr>
    <tr>
        <td align="center">Tháng thứ 10</td>
        <td align="center">315,000,000</td>
        <td align="center">2,333,000,000</td>
        <td align="center">23,000,000</td>
    </tr>
    <tr>
        <td align="center">Tháng thứ 11</td>
        <td align="center">330,000,000 </td>
        <td align="center">2,663,000,000</td>
        <td align="center">24,000,000</td>
    </tr>
    <tr>
        <td align="center">Tháng thứ 12</td>
        <td align="center">337,000,000</td>
        <td align="center">3,000,000,000</td>
        <td align="center">25,000,000</td>
    </tr>
    <tr>
        <td align="center"><strong>TỔNG</strong></td>
        <td align="center"><strong>3,000,000,000</strong></td>
        <td align="center"><strong>3,000,000,000</strong></td>
        <td align="center"><strong>240,000,000</strong></td>
    </tr>      
</table>
<br>
<table cellpadding="3" cellspacing="0" border="0">
    <tr>
        <td width="100%" align="left" >
            <span>
                Các qui định chung về gói khởi nghiệp Medici Anh/Chị tham khảo thêm memo
            </span>
            <br>
            <span>
                211110_GHTKN – Gói hỗ trợ khởi nghiệp Medici
            </span>
        </td>
    </tr>
</table>
<style>
    .border-bottom-gray {
        border-bottom:0.5px solid #a8a8a8
    }
    .border-right-gray {
        border-right:0.5px solid #a8a8a8
    }
    .color-gray{
        color : #a8a8a8;
    }
    .font-10{
        font-size: 11px;
    }
    .font-8{
        font-size: 8px;
    }
    .font-11 {
        font-size: 11px;
    }
    .font-12 {
        font-size: 12.5px;
    }
    .font-16 {
        font-size: 16px;
    }
    .bold {
        font-weight: bold;
    }

    .left {
        text-align: left;
    }

    .right {
        text-align: right;
    }

    .center {
        text-align: center;
    }
    .left {
        text-align: left !important;
    }
    .border-td-bottom {
        border-bottom: 1px solid #333;
    }
    .font-italic {
        font-style: italic;
    }
</style>