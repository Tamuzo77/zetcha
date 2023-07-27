/** @type {import('tailwindcss').Config} */
export const content = [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
];
export const theme = {
    extend: {
        container:{
            center:true,
            padding:{
              default:'50px',
              md:"70px"
            }
          }
    },
};
export const plugins = [];