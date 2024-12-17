<style>
@font-face {
  font-family: 'Erbaum-Book';
  src: url('{{ url("/") }}/css/fonts/Erbaum-Book.ttf') format("truetype");
  font-weight: normal;
  font-style: normal; 
}

@font-face {
  font-family: 'Erbaum-Light';
  src: url('{{ url("/") }}/css/fonts/Erbaum-Light.ttf') format("truetype");
  font-weight: normal;
  font-style: normal; 
}


@font-face {
  font-family: 'URWDIN-Light';
  src: url('{{ url("/") }}/css/fonts/URWDIN-Light.ttf') format("truetype");
  font-weight: normal;
  font-style: normal; 
}

body {
  color: #000000;
  font-size: 9pt;
  font-family: 'Erbaum-Regular', Helvetica, Arial, sans-serif;
  font-weight: normal;
  line-height: 1;
  text-rendering: optimizeLegibility;
}

h1,
strong {
  font-family: 'Erbaum-Book', Helvetica, Arial, sans-serif;
  font-weight: normal;
}

h1 {
  font-family: 'Erbaum-Book', Helvetica, Arial, sans-serif;
  color: #ba9a80;
  font-size: 26pt;
  font-weight: normal;
  text-transform: uppercase;
  margin: 0;
  line-height: 1;
}

h2, h3 {
  font-family: 'Erbaum-Book', Helvetica, Arial, sans-serif;
  color: #000000;
  font-size: 10pt;
  font-weight: normal;
  text-transform: uppercase;
  margin: 0;
  line-height: 1;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

td {
  padding: 0;
  vertical-align: top;
}

th {
  font-family: 'Erbaum-Regular', Helvetica, Arial, sans-serif;
  font-weight: normal;
  text-align: left;
}

img {
  border: 0;
  vertical-align: middle;
}

table {
  width: 100%;
}

table td {
  text-align: left;
  vertical-align: top;
}

p {
  font-family: 'URWDIN-Light', Helvetica, Arial, sans-serif;
  font-weight: normal;
  color: #000000;
  font-size: 10pt;
  margin: 0 0 4mm 0;
  line-height: 1;
}

ul, li {
  margin: 0;
  padding: 0;
}

li {
  margin-left: 4mm;
}

sup {
  font-size: 6pt;
}

/* Helpers */
.align-right {
  text-align: right;
}

.align-left {
  text-align: left;
}

.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}

/* Header */
.header {
  width: 100%; 
  height: 24mm;
}

.header img {
  display: block;
  height: auto;
  width: 100%;
}

.footer {
  font-size: 8.7pt;
  bottom: 0;
  left: 1mm;
  padding-top: 1mm;
  position: fixed;
  z-index: 100;
}

.footer_byline {
  font-family: 'Erbaum-Light', Helvetica, Arial, sans-serif;
  font-size: 8.5pt;
}

.highlight {
  color: #ba9a80;
}

.break {
  page-break-after: always;
}

.page-title {
  margin-left: 28mm;
  margin-top: -5mm;
}

.page-visual {
  position: relative;
  margin-top: 7mm;
  height: 72mm;
}

.page-visual img {
  display: block;
  position: relative;
  z-index: 5;
}

.page-visual__pattern {
  position: absolute;
  top: 5mm;
  left: -12mm;
  width: 30mm;
  height: 74mm;
  z-index: 1;
}

.page-content {
  margin-top: 5mm;
  padding-top: 6mm;
  width: 173mm;
}

</style>