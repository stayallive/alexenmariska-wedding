const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
export default {
    content:  [
        './config/**/*.php',
        'node_modules/preline/dist/*.js',
        './resources/**/*.{blade.php,html,js,vue}',
    ],
    darkMode: 'class',
    theme:    {
        extend:       {
            fontFamily: {
                'sans': ['"Josefin Sans"', ...defaultTheme.fontFamily.sans],
            },
        },
        borderRadius: {
            'card': '30px',
        },
    },
    plugins:  [
        require('preline/plugin'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
