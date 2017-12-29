<div class="modal fade" id="pop-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content pop-content-1 text-center">
            <div class="modal-header pop-hearder-1">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
                <p></p>
            </div>
            <div class="modal-body pop-body-1">
                <div class="pop-1-input-group">
                    <div class="pop-1-input">
                        <input type="text" placeholder="请输入手机号">
                    </div>
                    <div class="pop-1-submit">
                        <input type="submit" value="提交">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function pop_1(tit,text) {
        $('.pop-hearder-1').find('h4').text(tit);
        $('.pop-hearder-1').find('p').text(text);
    }
</script>