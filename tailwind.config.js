/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './config/**/*.php',
        './resources/**/*.{blade.php,html,js,vue}',
    ],
    theme:   {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
