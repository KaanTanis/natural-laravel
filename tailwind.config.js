const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

function withOpacityValue(variable) {
    return ({ opacityValue }) => {
        if (opacityValue === undefined) {
            return `rgb(var(${variable}))`
        }
        return `rgb(var(${variable}) / ${opacityValue})`
    }
}

module.exports = {
    content: [
        './resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                primary: {
                    '50':  withOpacityValue('--color-primary-50'),
                    '100': withOpacityValue('--color-primary-100'),
                    '200': withOpacityValue('--color-primary-200'),
                    '300': withOpacityValue('--color-primary-300'),
                    '400': withOpacityValue('--color-primary-400'),
                    '500': withOpacityValue('--color-primary-500'),
                    '600': withOpacityValue('--color-primary-600'),
                    '700': withOpacityValue('--color-primary-700'),
                    '800': withOpacityValue('--color-primary-800'),
                    '900': withOpacityValue('--color-primary-900')
                },
                danger: colors.red,
                success: colors.green,
                warning: colors.amber,
                brown: {
                    DEFAULT: '#4A3733',
                    '50': '#E4BCA8',
                    '100': '#927972',
                    '200': '#927972',
                    '300': '#826b65',
                    '400': '#745f5a',
                    '500': '#64504c',
                    '600': '#564340',
                    '700': '#4f3d3a',
                    '800': '#4a3835',
                    '900': '#4A3733'
                },
                "brown-light": '#E4BCA8',
                "brown-secondary": '#935A4E',
                "natural-white": '#FCFADD',
                "natural-wine": '#C55252',
                "natural-brown": '#A07D74',
                "natural-brown-light": '#FFF4E9',
                "natural-orange": '#FBA059',
                "natural-green": '#93C25D',
                "natural-brown-2": '#DFC2B2',
                "natural-brown-dark": '#4A3733',
            },
            fontFamily: {
                sans: ['DM Sans', ...defaultTheme.fontFamily.sans],
                newOrderBold: ['New Order Bold', ...defaultTheme.fontFamily.sans],
                newOrderRegular: ['New Order Regular', ...defaultTheme.fontFamily.sans],
                newOrderLight: ['New Order Light', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
