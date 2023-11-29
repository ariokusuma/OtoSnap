/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {},
        colors: {
            bekgron : '#212121',
            hijau_hover : '#B8C9B8',
            abu : '#EDEDED',
            abu2 : '#6C6C6C',
            oren : '#F24E1E',
            oren2 : '#FBCABB',


            biru: '#0e76d8',
            biru2: '#1165b5',
            biru3: '#DBE9FE',

            abu: '#e0dbd6',
            abu2: '#E8E8E8',
            bekgron: '#f0f0f0',

        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
    }

