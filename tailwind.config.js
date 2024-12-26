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
            colors: {
                "primary-1": "#333333",
                "primary-2": "#706C61",
                "primary-3": "#E1F4F3",
                "primary-4": "	#0000FF",
            },
            fontFamily: {
                'tt-old': [
                    'Old Standard TT', 'serif'
                ]
            },
            backgroundImage: {
                'hero-1': "url('/dist/img/frame-1.png')"
            }
        },
        variants: {
            extends: {
                display: ['group-focus'],
                opacity: ['group-focus'],
                inset: ['group-focus'],
            }
        },
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '4rem',
                '2xl': '6rem',
            },
        },
    },
    plugins: [],
};
