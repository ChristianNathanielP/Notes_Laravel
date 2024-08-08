import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
const textFillStroke = require('tailwindcss-text-fill-stroke');
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                fredoka: ["Fredoka", "sans-serif"],
                pattrick_hand: ["Patrick Hand", "cursive"]
            },
            colors: {
                bg_biru: '#003285',
                kuning: '#FFDA78',
                orangee: '#FF7F3E',
                biru1: '#83B4FF',
                biru2: '#63A1FF',
                putih: '#F5FFE4'
            },
        },
    },

    plugins: [
        forms,
        textFillStroke(),
        require('daisyui'),
    ],
};
