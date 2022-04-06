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
        screens: {
            sm: "576px",
            md: "768px",
            lg: "992px",
            xl: "1140px",
            "2xl": "1400px",
        },
        fontFamily: {
            poppins: "Poppins",
        },
        fontSize: {
            ...defaultTheme.fontSize,
            "size-1.375": "1.375rem",
            "size-3.56": "3.56rem",
            "size-2.75": "2.75rem",
            "size-4.06": "4.06rem",
            "5.5xl": "3.25rem",
        },
        extend: {
            minHeight: {
                "620px": "620px",
                "400px": "400px",
            },
            maxWidth: {
                xs: "20.3rem",
            },
            spacing: {
                112: "28rem",
            },
            backgroundPosition: {
                "75%": "75%",
            },
            lineHeight: {
                tightest: "1.15",
                "super-tight": "0.85",
            },
            colors: {
                ebw: {
                    primary: "#d63733",
                    red: "#e23226",
                    secondary: "#1c120e",
                    third: "#494949",
                    "third-grey": "#585a59",
                    "medium-grey": "#424040",
                    "another-grey": "#727276",
                    fourth: "#dc514c",
                    form: "#afafb4",
                    title: "#5b5b5e",
                    input: "#c3c5ca",
                    grey: "#d5d5d5",
                    "dark-grey": "#282728",
                    "light-grey": "#d8dade",
                    "lightest-grey": "#e9e9e9",
                    search: "#071e57",
                },
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
