import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
		 './vendor/laravel/jetstream/**/*.blade.php',
		 './storage/framework/views/*.php',
		 './resources/views/**/*.blade.php',
		 "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
	],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
		forms,
		typography,
		require("daisyui")
	],
	daisyui: {
		themes: [
		  "light",
		  "dark",
		  "cupcake",
		  "bumblebee",
		  "emerald",
		  "corporate",
		  "synthwave",
		  "retro",
		  "cyberpunk",
		  "valentine",
		  "halloween",
		  "garden",
		  "forest",
		  "aqua",
		  "lofi",
		  "pastel",
		  "fantasy",
		  "wireframe",
		  "black",
		  "luxury",
		  "dracula",
		  "cmyk",
		  "autumn",
		  "business",
		  "acid",
		  "lemonade",
		  "night",
		  "coffee",
		  "winter",
		  "dim",
		  "nord",
		  "sunset",
		],
	  },

	  darkMode: 'class',
};
