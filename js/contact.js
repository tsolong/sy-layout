(function ($) {

    $(function () {
        
        function checkInput(el, msg) {
            var el = $(el);
            if($.trim(el.val()) == ''){
                el.focus();
                layer.msg(msg, function () {
                });
                return false;
            }else{
                return true;
            }
        }

        $('#msg-form').on('submit', function () {
            return checkInput('#company', '请填写公司名称') &&
                checkInput('#contact-name', '请填写联系人') &&
                checkInput('#mobile', '请填写联系电话') &&
                checkInput('#fax', '请填写联系传真') &&
                checkInput('#email', '请填写E-mail') &&
                checkInput('#msg-subject', '请填留言主题');
        });

    });

})(jQuery);