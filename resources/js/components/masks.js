import jQuery from "jquery";
import "jquery-mask-plugin";

(function ($) {
    $(function () {
        const SPMaskBehavior = function (val) {
            return val.replace(/\D/g, "").length === 11
                ? "(00) 00000-0000"
                : "(00) 0000-00009";
        };
        const spOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            },
        };

        $('[name="phone"]').mask(SPMaskBehavior, spOptions);
        console.log($('[name="person-type"]:checked').val());
        const cpfMaskBehavior = function (val) {
            return $('[name="person-type"]:checked').val() === "pf"
                ? "000.000.000-00"
                : "00.000.000/0000-00";
        };
        const cpfOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(cpfMaskBehavior.apply({}, arguments), options);
            },
        };

        $('[name="cpf-cnpj"]').mask(cpfMaskBehavior, cpfOptions);
    });
})(jQuery);
