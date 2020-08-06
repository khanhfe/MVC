<section class="wrapper login sf">
    <div class="d1 step1">
        <img src="public/img/i1.png">
        <span>Tra cứu thông tin đơn hàng</span>
        <form id="frmGetVerifyCode" onsubmit="return GetVerifyCode();" method="post" action="history/result">
            <input type="tel" id="txtPhoneNumber" name="txtPhoneNumber" placeholder="Nhập số điện thoại mua hàng" autocomplete="off" maxlength="10">
            <label class="hide"></label>
            <?php if(isset($data['result'])&&$data['result']=='true'){ ?>
            <label class="fail">Số điện thoại không đúng/ không tồn tại trong hệ thống</label>
            <?php } ?>
            <button type="submit" class="btn" name="btn-phone">Tiếp tục</button>
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
<script>
    $(document).ready(function() {
        $('form input').keyup(function(event) {
            if($(this).val().length>2){
                if (isNaN($(this).val())) {
                    $('form label').removeClass('hide')
                    $('form label.fail').remove()
                    $('form label').html("Số điện thoại không đúng định dạng")
                }else{
                    $('form label').addClass('hide')
                }
            }
        });
        $('.btn').css('cursor', 'pointer');   
    });
    function GetVerifyCode() {
        var phoneno = /^\d{10}$/
        Phone = document.getElementById('txtPhoneNumber').value
        if (Phone.length<10) {
            return false
        }
        else if (isNaN(Phone)) {
            return false
        }
        else {
            return true
            window.location.href= "/imobile/history";
        }
    }
</script>