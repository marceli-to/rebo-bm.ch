module.exports = {
  content: [
    './resources/**/*.antlers.html',
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './content/**/*.md'
  ],
  theme: {
    extend: {

			fontFamily: {
        'sans': ['urw-din-regular', 'arial', 'system-ui', '-apple-system', 'sans'],
        'sans-bold': ['urw-din-bold', 'arial', 'system-ui', '-apple-system', 'sans'],
        'capitalized': ['erbaum', 'ui-sans-serif', 'system-ui', '-apple-system', 'sans'],
      },

      fontSize: {
        xs: '0.875rem',   // 14px
        sm: '0.875rem',   // 14px
        base: '1rem',     // 16px
        md: '1.125rem',   // 18px
        lg: '1.5rem',     // 24px
        xl: '1.75rem',    // 28px
        '2xl': '2.25rem', // 36px
        '3xl': '3rem',    // 48px
        '4xl': '4rem',    // not in use
        '5xl': '5rem',    // not in use
      },

      colors: {
        'primary': '#B79A81',
      },

      backgroundImage: {
        'hero-pattern': "url('/img/hero-pattern.svg')",
      },

      borderRadius: {
        '4xl': '2.5rem',
      },

      boxShadow: {
        '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
        '4xl': '20px 30px 50px -15px rgba(0,0,0,0.3)',
      },

      zIndex: {
        '-1':   '-1',
        '10':   '10',
        '20':   '20',
        '30':   '30',
        '40':   '40',
        '50':   '50',
        '60':   '60',
        '70':   '70',
        '80':   '80',
        '90':   '90',
        '100': '100',
        '200': '200',
      }
    },

    spacing: {
      '0': '0px',
      '1': '5px',
      '2': '10px',
      '3': '15px',
      '4': '20px',
      '5': '25px',
      '6': '30px',
      '7': '35px',
      '8': '40px',
      '9': '45px',
      '10': '50px',
      '11': '55px',
      '12': '60px',
      '13': '65px',
      '14': '70px',
      '15': '75px',
      '16': '80px',
      '17': '85px',
      '18': '90px',
      '19': '95px',
      '20': '100px',
      '21': '105px',
      '22': '110px',
      '23': '115px',
      '24': '120px',
      '25': '125px',
      '26': '130px',
      '27': '135px',
      '28': '140px',
      '29': '145px',
      '30': '150px',
      '31': '155px',
      '32': '160px',
      '33': '165px',
      '34': '170px',
      '35': '175px',
      '36': '180px',
      '37': '185px',
      '38': '190px',
      '39': '195px',
      '40': '200px'
    }

  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
