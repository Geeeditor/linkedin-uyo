import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
     content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                merriweather: ['Merriweather', 'sans'] // Define your custom font here
            },
            colors: {
                'brown-900': '#1a1615',
                'blue-500': '#1016a0',
                'purple-700': '#6b01d5',
                'purple-800': '#4e0e8d',
                'purple-900': '#360177'
            }
        },
    },
    plugins: [],
};
