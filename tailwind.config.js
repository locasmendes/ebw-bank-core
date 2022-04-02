const defaultTheme = require("tailwindcss/defaultTheme");
module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    darkMode: false, // or 'media' or 'class'
    safeList: [
        "bg-opacity-100",
        "hover:bg-opacity-80",
        "text-white",
        "hover:bg-opacity-40",
        "bg-opacity-0",
        "text-ebw-fourth",
    ],
    theme: {
        fontFamily: {
            poppins: "Poppins",
        },
        backgroundPosition: {
            ...defaultTheme.backgroundPosition,
            "75%": "75%",
        },
        extend: {
            minHeight: {
                "620px": "620px",
                "400px": "400px",
            },
            spacing: {
                112: "28rem",
            },
            colors: {
                ebw: {
                    primary: "#d63733",
                    red: "#e23226",
                    secondary: "#1c120e",
                    third: "#494949",
                    "medium-grey": "#424040",
                    fourth: "#dc514c",
                    form: "#afafb4",
                    title: "#5b5b5e",
                    input: "#c3c5ca",
                    grey: "#d5d5d5",
                    "dark-grey": "#282728",
                    "light-grey": "#d8dade",
                },
            },
            fontSize: {
                "5.5xl": "3.25rem",
            },
            boxShadow: {
                custom: "0 0 40px 20px rgb(0 0 0 / 30%)",
            },
        },
    },
    variants: {
        extend: {
            justifyContent: ["even"],
        },
    },
    plugins: [],
};
