import defaultTheme from 'tailwindcss/defaultTheme';
import colors from 'tailwindcss/colors';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
         './vendor/filament/**/*.blade.php',
        './vendor/pxlrbt/filament-activity-log/resources/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                danger: colors.red,
                primary: colors.blue,
                success: colors.emerald,
                warning: colors.orange,
                buttercup: {
                    '50': '#fdfde9',
                    '100': '#fdfbc4',
                    '200': '#fbf38d',
                    '300': '#f9e54b',
                    '400': '#f5d31a',
                    '500': '#f1c40f',
                    '600': '#c59009',
                    '700': '#9d670b',
                    '800': '#825211',
                    '900': '#6f4314',
                    '950': '#412307',
                },
                jade: {
                    '50': '#eefff5',
                    '100': '#d7ffea',
                    '200': '#b2ffd7',
                    '300': '#76ffb9',
                    '400': '#33f593',
                    '500': '#09de73',
                    '600': '#00cc66',
                    '700': '#04914b',
                    '800': '#0a713f',
                    '900': '#0a5d36',
                    '950': '#00341c',
                },
                matisse: {
                    '50': '#f2f9fd',
                    '100': '#e5f0f9',
                    '200': '#c5e1f2',
                    '300': '#92c9e7',
                    '400': '#58add8',
                    '500': '#3292c5',
                    '600': '#2274a5',
                    '700': '#1d5d87',
                    '800': '#1c5070',
                    '900': '#1c445e',
                    '950': '#132c3e',
                },
                voodoo: {
                    transparent: 'transparent',
                    current: 'currentColor',
                    '50': '#faf8fb',
                    '100': '#f5f1f6',
                    '200': '#ebe1ed',
                    '300': '#dcc9de',
                    '400': '#c6a9c9',
                    '500': '#ac85b0',
                    '600': '#906792',
                    '700': '#775378',
                    '800': '#5c415d',
                    '900': '#533c53',
                    '950': '#322032',
                },

            },
        },
    },

    plugins: [forms, typography],
};
