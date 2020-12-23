const colors = require('tailwindcss/colors');

module.exports = {
    purge: {
        mode: "layers",
        content: [
            './resources/**/*.blade.php',
            './resources/**/*.js',
            './resources/**/*.vue',
        ]
    },
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                rose: colors.rose,
                teal: colors.teal,
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
