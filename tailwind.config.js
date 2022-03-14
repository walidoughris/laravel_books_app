module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
      colors:{
        darkBlue:{
          primary:"#9098D8",
          secondary:"#2B335B",
          ligth:'#242A4B',
          dark:'#1C213E'
        }
      },
      fill:['hover','focus']
    },
  },
  plugins: [],
}
