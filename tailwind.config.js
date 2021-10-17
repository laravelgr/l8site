const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.{js,ts,vue}',
    ],
    mode: 'jit',
    darkMode: false,
    theme: {
        extend: {
            fontFamily: {
                'nunito': ['Nunito', ...defaultTheme.fontFamily.sans],
            }
        }
    },
    variants: {},
    plugins: [],
}
