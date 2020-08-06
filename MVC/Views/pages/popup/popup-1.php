<style type="text/css" media="screen">
    .pop-delete {
        position: fixed;
        left: 0;
        top: 0;
        background: rgba(0,0,0,.7);
        z-index: 1000;
        width: 100%;
        height: 100%;
        display: none;
    }.pop-delete>div {
        width: 330px;
        background-color: #fff;
        padding: 30px;
        border-radius: 6px;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        height: 125px;
    }.pop-delete>div>i {
        position: absolute;
        right: 15px;
        top: 15px;
        cursor: pointer;
        z-index: 2;
    }.pop-delete>div>* {
        display: block;
        text-align: center;
        margin-bottom: 25px;
    }.icon-close {
        width: 19px;
        height: 19px;
        background: transparent url('public/img/icon/icon-close.png') no-repeat center top;
        background-size: 19px 19px!important;
    }.pop-delete.order>div>p {
        text-align: left;
    }.pop-delete.order>div.reason-cancel {
        height: 390px;
    }.pop-delete>div.reason-cancel>* {
        margin-bottom: 15px;
    }.pop-delete>div.reason-cancel>.note-reason {
        margin-bottom: 15px;
        text-align: left;
        padding: 0;
    }#txtEditorReason {
        display: block;
        overflow: hidden;
        width: 97%;
        background: #fff;
        min-height: 100px !important;
        border: 1px solid #dadada;
        border-radius: 4px;
        padding: 10px 1.5%;
        font-size: 14px;
        color: #333;
        outline: none;
    }
    .pop-delete>div>a {
        display: inline-block;
        vertical-align: top;
        width: 40%;
        height: 35px;
        line-height: 35px;
        border-radius: 4px;
    }.pop-delete.order>div>a {
        width: 48%;
        margin: auto;
    }.pop-delete>div>a.fl {
        color: #288ad6;
        border: 1px solid #288ad6;
        margin-left: 7%;
    }.pop-delete>div>a.fr {
        float: right;
        color: #fff;
        border: 1px solid #288ad6;
        margin-right: 7%;
        background-color: #288ad6;
    }.pop-delete.order>div.reason-cancel>em {
        margin-top: 20px;
        text-align: center;
    }.pop-delete.order>div>a {
        width: 48%;
        margin: auto;
    }.hide{
        display: none !important;
    }.pop-delete>div>b {
        font-size: 18px;
    }.pop-delete.order.success>div {
        width: 322px;
    }.pop-delete>div.reason-cancel>* {
        margin-bottom: 15px;
    }.pop-delete.order>div>p {
        text-align: left;
    }.pop-delete.order.success>div>a {
        float: none;
        margin-bottom: 15px;
        display: block;
    }.pop-delete.order.success>div>.auto-close {
        color: #e10c00;
        text-align: center;
        margin-bottom: -10px;
    }
</style>
<div class="pop-delete order">
    <div class="reason-cancel">
        <i class="icon-close"></i>
        <h2>HỦY ĐƠN HÀNG</h2>
        <p>iMobile.com mong nhận được sự góp ý của anh/chị để phục vụ được tốt hơn.</p>
        <div class="note-reason">
            <label class="cancel">
                <input type="radio" id="1" name="reason" value="1"> Đổi ý, không mua nữa
            </label><br><br>

            <label class="findanother">
                <input type="radio" name="reason" value="2"> Tìm thấy giá rẻ hơn ở chỗ khác
            </label><br><br>

            <label class="changeproduct">
                <input type="radio" name="reason" value="3"> Muốn thay đổi sản phẩm trong đơn hàng (màu sắc, số lượng,...)
            </label><br><br>

            <label class="other">
                <input type="radio" name="reason" value="4"> Lý do khác
            </label>
        </div>
        <div class="content-reason hide">
            <textarea id="txtEditorReason" class="txtEditor" placeholder="Nhập lý do khác..."></textarea>
        </div>
        <a href="javascript:;" class="fl">ĐÓNG</a>
        <a href="javascript:void(0)" onclick="return Validate()" class="fr">XÁC NHẬN HỦY</a>
        <div class="clr"></div>
        <em>Lưu ý: Quà khuyến mãi có thể thay đổi theo thời điểm đặt hàng</em>
    </div>
    <div>
        <b>Hủy đơn hàng thành công</b>
        <p>Đơn hàng đã được hủy thành công</p>
        <a href="javascript:Redirect();" class="fl">ĐÓNG</a>
        <span class="auto-close">Thông báo sẽ tự động đóng trong <span id="time">5</span> giây</span>
    </div>
</div>
<script>
    jQuery(document).ready(function() {
        $('.pop-delete>div:last-child').css('display', 'none');
        $('.btn-cancel').click(function(event) {
            $('.pop-delete').css('display', 'block');
        });
        $('a.fl,.icon-close').click(function(event) {
            $('.pop-delete').css('display', 'none');
        });
        $('.other').click(function(event) {
            if($('.content-reason').hasClass('hide')){ 
                $('.content-reason').removeClass('hide')
                $('.pop-delete.order>div.reason-cancel').css('height', 'fit-content');
            }
        });
        $('.cancel,.findanother,.changeproduct').click(function(event) {
            $('.content-reason').addClass('hide')
        });
    });
    let id ;
    var reason = "";
    function DelOrder($id) {
        return id = $id;
    }
    function Validate() {
        if ($('input').is(':checked')) {
            if($('.other input').is(':checked')&&$('#txtEditorReason').val()==""){
                alert("Quý khách chưa nhập lý do.")
            }else{
                if ($('.other input').is(':checked')) {
                    reason = $('#txtEditorReason').val()
                }else{
                    reason = $('input:checked').attr('value')
                }
                $('.pop-delete').addClass('success')
                $('.pop-delete div:first-child').css('display', 'none');
                $('.pop-delete>div:last-child').css({
                    'display': 'block',
                    'height': 'fit-content'
                });
                Confirm();
            }
        }else{
            alert("Quý khách chưa chọn lý do.")
        }
    }
    function Confirm(){
        var realtime = document.getElementById('time').innerHTML;
        parseInt(realtime);
        var pause = setInterval(runtime,1000)
        function runtime(){
            realtime-=1;
            document.getElementById('time').innerHTML = realtime;
            if (realtime==0) { window.location.href= "/imobile/history/DelOrder/"+id+"/"+reason+"" ; clearInterval(pause) }
        }
    }
    function Redirect(){
        window.location="/imobile/history/DelOrder/"+id+"/"+reason+"";
    }
</script>