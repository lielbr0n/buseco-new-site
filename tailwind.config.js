const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',

        /** for TW elements by larp */
        "./resources/**/*.js",
        "./node_modules/tw-elements/js/**/*.js"
    ],

    theme: {
        extend: {
            /**fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                
            },*/
            fontFamily: {
                sans: ['Roboto',...defaultTheme.fontFamily.sans],
              },
        },
       
    },

    /** 
     * for TW elements by larp 
     * darkMode havn't use it
    */
    darkMode: "class",
    plugins: [require("tw-elements/plugin.cjs")]
};
