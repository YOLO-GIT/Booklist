/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./dist/*.{html,js}", "./*.{html,js}", "./node_modules/flowbite/**/*.js", "./**/*.{html,js}"],
    theme: {
        extend: {
            fontFamily: {
                'body': [
                    'Inter',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'system-ui',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    'Apple Color Emoji',
                    'Segoe UI Emoji',
                    'Segoe UI Symbol',
                    'Noto Color Emoji'
                ],
                'sans': [
                    'Inter',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'system-ui',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    'Apple Color Emoji',
                    'Segoe UI Emoji',
                    'Segoe UI Symbol',
                    'Noto Color Emoji'
                ]
            }
        },
        plugins: [
            require('flowbite/plugin'),
            require('@tailwindcss/forms')
        ],
    }
}