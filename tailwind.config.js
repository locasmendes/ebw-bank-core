module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                ebw: {
                    primary: "#d63733",
                    secondary: "#1c120e",
                    form: "#afafb4",
                    title: "#5b5b5e",
                    input: "#c3c5ca",
                },
            },
            fontSize: {
                "5.5xl": "3.25rem",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
