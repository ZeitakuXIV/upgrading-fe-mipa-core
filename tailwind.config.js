/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      // Custom breakpoints explanation for learning
      // sm: '640px' - Small tablets dan landscape phones
      // md: '768px' - Tablets (ini yang kita pakai untuk 2-column layout)
      // lg: '1024px' - Desktop (ini yang kita pakai untuk 3-column layout)
      // xl: '1280px' - Large desktop
      // 2xl: '1536px' - Extra large desktop
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('daisyui'),
  ],

  // DaisyUI config untuk learning
  daisyui: {
    themes: [
      "light",
      "dark",
      "cupcake",
      "emerald",
      // Multiple themes agar mahasiswa bisa experiment
    ],
    base: true,
    styled: true,
    utils: true,
  },
}
