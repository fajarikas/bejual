/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                montserrat: ["Montserrat", "sans-serif"],
                "chelsea-market": ['"Chelsea Market"', "cursive"],
            },
            colors: {
                "green-1": "#4A9C80",
                "grey-1": "#F5F5F5",
                biru: "#4D44B5",
                orange: "#FB7D5B",
                "biru-font": "#303972",
                "abu-font": "#C1BBEB",
                abu: "#A098AE",
                kuning: "#FCC43E",
                "background-color": "#F3F4FF",
                merah: "#C70039",
                hijau: "#186F65",
                "hijau-1": "#4CAF4F",
            },
        },
    },
    plugins: [],
};
