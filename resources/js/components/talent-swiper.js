import Swiper, { HashNavigation } from "swiper";
import jQuery from "jquery";
// import Swiper styles

const validationRules = {
    min: function (input, min) {
        const str = input.value;

        if (typeof str !== "string") {
            return;
        }

        if (isNaN(min)) {
            console.warn("validation min must be a integer");
            return;
        }
        const minSize = parseInt(min);

        return [
            str.length >= minSize,
            `O :input deve ter no mínimo ${min} caracteres`,
        ];
    },
    equal: function (input, min) {
        const str = input.value;

        if (typeof str !== "string") {
            return;
        }

        if (isNaN(min)) {
            console.warn("validation min must be a integer");
            return;
        }
        const minSize = parseInt(min);

        return [str.length === minSize, `O :input deve ter ${min} caracteres`];
    },
    required: function (input, ignore) {
        const str = input.value;
        if (typeof str !== "string") {
            return;
        }

        return [str.length > 0, "O :input é obrigatório"];
    },
    email: function (input, ignore) {
        const str = input.value;

        if (typeof str !== "string") {
            return;
        }

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        return [emailRegex.test(str), "O :input está com formato incorreto"];
    },
    radio: function (wrapper, required) {
        const input = wrapper.querySelector("input:checked");

        return [!!input, "Selecione uma das opçoes"];
    },
    checkbox: function (wrapper, required) {
        const input = wrapper.querySelector("input:checked");

        return [!!input, "Selecione pelo menos uma das opções"];
    },
};

function validateFields(input) {
    if (input.getAttribute("validate") === null) {
        return true;
    }
    const rules = input.getAttribute("validate").split("|");

    for (const rule of rules) {
        const r = rule.split(":");
        const [pass, message] = validationRules[r[0]](input, r[1]);

        if (!pass) {
            const closest = input.closest(".input-wrapper");
            closest.classList.add("input-error");
            if (input.dataset.name) {
                closest.querySelector(".error-message").innerText =
                    message.replace(":input", input.dataset.name);
            }
        } else {
            input.closest(".input-wrapper").classList.remove("input-error");
        }

        return pass;
    }
}

const talentSwiper = () => {
    const swiper = new Swiper(".talent-swiper", {
        allowTouchMove: false,
        autoHeight: true,
        // hashNavigation: {
        //     watchState: true,
        // },
        // modules: [HashNavigation],
        on: {
            slideChange: (swiper) => {
                if (swiper.realIndex >= 7) {
                    document
                        .querySelector(".text-dados")
                        .classList.add("hidden");
                    document
                        .querySelector(".text-saber")
                        .classList.remove("hidden");
                } else {
                    document
                        .querySelector(".text-dados")
                        .classList.remove("hidden");
                    document
                        .querySelector(".text-saber")
                        .classList.add("hidden");
                }
                const target = jQuery("#talent-form");
                jQuery("html, body").animate(
                    {
                        scrollTop: target.offset().top - 100,
                    },
                    300,
                    "swing"
                );
            },
        },
    });

    const nextButtons = Array.from(document.querySelectorAll(".next-button"));

    for (const nextButton of nextButtons) {
        nextButton.addEventListener("click", function (e) {
            e.preventDefault();

            const parent = this.closest(".swiper-slide[data-hash]");

            const inputs = Array.from(
                parent.querySelectorAll(
                    "input, textarea, .radio-wrapper, .checkbox-wrapper"
                )
            );
            const validated = inputs.map(validateFields);

            if (validated.every((val) => val)) {
                swiper.slideNext();
            }
        });
    }

    const prevButtons = Array.from(document.querySelectorAll(".prev-button"));

    for (const prevButton of prevButtons) {
        prevButton.addEventListener("click", function (e) {
            e.preventDefault();

            swiper.slidePrev();
        });
    }
};

function filenameCurriculo() {
    const fileinput = document.querySelector("#curriculo");
    const filenameCurriculo = document.querySelector("#curriculo-filename");
    fileinput.addEventListener("change", function () {
        const filename = this.files[0].name;
        const filesize = this.files[0].size;
        const filetype = this.files[0].type;

        const maxFilesize = 1024 * 1024 * 4;
        if (filesize > maxFilesize) {
            filenameCurriculo.classList.remove("text-ebw-medium-grey");
            filenameCurriculo.classList.add("text-ebw-red");
            filenameCurriculo.innerText =
                "O arquivo não pode ser maior do que 4MB";
            this.value = "";
        } else {
            filenameCurriculo.classList.add("text-ebw-medium-grey");
            filenameCurriculo.classList.remove("text-ebw-red");
            filenameCurriculo.innerText = filename;
        }

        if (filetype !== "application/pdf") {
            filenameCurriculo.classList.remove("text-ebw-medium-grey");
            filenameCurriculo.classList.add("text-ebw-red");
            filenameCurriculo.innerText = "Utilize apenas arquivos em PDF";
            this.value = "";
        }
    });
}

if (!!document.querySelector(".talent-swiper")) {
    talentSwiper();
}
if (!!document.querySelector("#curriculo")) {
    filenameCurriculo();
}
