import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const plugin = require('tailwindcss/plugin');

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        forms,
        plugin(function({ addUtilities }) {
            addUtilities({
                '.text-outline-black': {
                    '-webkit-text-stroke': '2px black',
                },
                '.text-outline-white': {
                    '-webkit-text-stroke': '1px white',
                },
                '.text-outline-green': {
                    '-webkit-text-stroke': '1px #16a34a', /* Tailwind `green-600` */
                },
            });
        }),
    ],
};