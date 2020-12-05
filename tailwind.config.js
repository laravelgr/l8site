const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/views/**/*.php',
    ],
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
