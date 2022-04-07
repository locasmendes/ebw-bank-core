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

        const cpfMaskBehavior = function (val) {
            if ($('[name="person-type"]').length) {
                return $('[name="person-type"]:checked').val() === "pf"
                    ? "000.000.000-00"
                    : "00.000.000/0000-00";
            }
            return val.replace(/\D/g, "").length >= 12
                ? "00.000.000/0000-00"
                : "000.000.000-009";
        };
        const cpfOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(cpfMaskBehavior.apply({}, arguments), options);
            },
        };

        $('[name="cpf-cnpj"]').mask(cpfMaskBehavior, cpfOptions);
        $('[name="cpf"]').mask("000.000.000-00");
        $('[name="cep"]').mask("00000-000");
        $('[name="telefone"]').mask(SPMaskBehavior, spOptions);
    });
})(jQuery);
