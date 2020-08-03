<section class="wrapper login sf">
    <div class="d1 step1">
        <img src="/MVC/public/img/i1.png">
        <span>Tra cứu thông tin đơn hàng</span>
        <form id="frmGetVerifyCode" onsubmit="return GetVerifyCode();">
            <input type="tel" name="txtPhoneNumber" placeholder="Nhập số điện thoại mua hàng" autocomplete="off" maxlength="10">
            <label class="hide"></label>
            <button type="submit" class="btn">Tiếp tục</button>
        </form>
    </div>
    <!-- <div class="d2 step2 hide">
        <span class="s1">Mã xác nhận đã được gửi đến số điện thoại <b></b></span>
        <span class="s2 hide">Mã xác nhận đã được gửi lại</span>
        <form id="frmSubmitVerifyCode" onsubmit="return SubmitVerifyCode()">
            <input type="tel" name="txtOTP" placeholder="Nhập mã xác nhận gồm 4 chữ số" maxlength="4">
            <label class="hide"></label>
            <button type="submit" class="btn">Tiếp tục</button>
        </form>
        <a class="resend-sms" href="javascript:"></a>
    </div> -->
</section>