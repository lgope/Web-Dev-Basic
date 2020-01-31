// print message on the webpage
document.write('Hello World from JavaScript!<br><br>');

// Datatypes
document.write('<br>Datatypes (JavaScript has three types of data,)<br>');
document.write(`Numbers : 123, 32.32 <br>
Strings : “Meher”, “Krishna Patel”, “123” <br>
Boolean : true, false <br>`);

// variable example
var your_name = 'Lakshman Gope';
var age = 20;
document.getElementById(
  'p_name'
).innerHTML = `Hello ${your_name}<br>Age : ${age}`;

// prompt
// var x = prompt('enter a number');
// document.write(`2 *  ${x}  = ${2 * x} <br>`);

/***
 * Operators
 */

// Arithmetic operators
document.write('<br>// Arithmetic operators : ');
document.write('<br>// Addition (+) <br>');
document.write(` 2 + 2 = ${2 + 2} <br>`);

document.write('<br>// Subtraction (-) <br>');
document.write(` 7 - 1 = ${7 - 1} <br>`);

document.write('<br>// Division (/) <br>');
document.write(` 20 / 5 = ${20 / 5} <br>`);

document.write('<br>// Remainder (%) <br>');
document.write(` 20 % 7 = ${20 % 7} <br>`);

document.write('<br>// Multiplication (*) <br>');
document.write(` 1 * 2 = ${1 * 2} <br>`);

document.write('<br>// Exponentiation (**) <br>');
document.write(` 1 ** 2 = ${1 ** 2} <br>`);
document.write(` 2 ** 1 = ${2 ** 1} <br>`);
document.write(` 2 ** 2 = ${2 ** 2} <br>`);
document.write(` 2 ** 8 = ${2 ** 8} <br>`);
document.write(` 8 ** 2 = ${8 ** 2} <br>`);
// Assignment operators
// Comparison operators
// Conditional operator
// Logical operators
// Bitwise operators

document.write('<br>// Conversion <br>');

// String to number conversion
document.write(`4 + Number('4.4') = ${4 + Number('4.4')} <br><br>`);

// int conversion
document.write(
  `4 + parseInt('4.4') = ${4 + parseInt('4.4')} (string to int) <br>`
); // string to int
document.write(
  `4 + parseInt(4.4) = ${4 + parseInt(4.4)} (float to int) <br><br>`
); // float to int

// Convert to float
document.write(
  `4 + parseFloat('4.4') = ${4 +
    parseFloat('4.4')} (Converting string to float using parseFloat) <br><br>`
); // parseFloat

// Math
document.write('// Math<br>');
document.write('pi = ', Math.PI, '<br>');
document.write('e = ', Math.E, '<br>');
document.write(
  "similarly we can use 'abs', 'floor', 'ceil' and 'round' etc. <br>"
);
document.write('random number : ', Math.ceil(Math.random() * 20), '<br><br>'); // enter random number

// String
document.write('// String<br>');
document.write('meher'.toUpperCase(), '<br>'); // uppercase

document.write('Lowercase'.toLowerCase(), '<br>'); // lowercase
document.write('small'.small(), '<br>'); // small
document.write('bold'.bold(), '<br>'); // bold
document.write('deleted'.strike(), '<br>'); // strike
document.write('Font Size 5em'.fontsize('5em'), '<br>'); // strike
document.write('Link'.link('https://www.google.com/'), '<br>'); // link
document.write('Multiple'.fontcolor('red').fontsize('12em'), '<br>'); // multiple

// Arrays
document.write('<br>// Arrays<br>');
var arr = [15, 30, 'Lakshman'];
for (a in arr) document.write(arr[a], ' ');
document.write('<br>');
document.write(arr.pop(), '<br>'); // remove last element
arr.push('Krishna'); // add element to end
document.write(arr.pop(), '<br>');
document.write(`lenght of array: , ${arr.length} <br>`);

// Control structure, loops and functions
document.write('<br>// Control structure, loops and functions<br>');

// if-else
document.write('// if-else<br>');

var age = 20;
if (age > 3 && age < 6) {
  document.write(`Age : ${age} <b> go to kindergarten</b>`);
} else if (age >= 6 && age < 18) {
  document.write(`Age : ${age} <b> go to school</b>`);
} else {
  document.write(`Age : ${age} <b> go to college</b>`);
}

document.write('<br>');

// switch-case
document.write('<br>// switch-case <br>');
var grade = 'A';
document.write(`Grade ${grade} : `);
switch (grade) {
  case 'A':
    document.write('Very good grade!');
    break;
  case 'B':
    document.write('Good grade!');
    break;
  default:
    // if grade is neither 'A' nor 'B'
    document.write('Please Enter correct grade');
}
document.write('<br>');

// For loop
document.write('<br>// For Loop <br>');
document.write(`Code :<br> for (i = 5; i >= 0; i--) { <br>
    document.write(i + ' ');<br>
  }<br> Output : `);

for (i = 5; i >= 0; i--) {
  document.write(i + ' ');
}
document.write('<br>');

// While loop
document.write('<br> // While loop <br>');
document.write(`Code :<br> var x = 0; <br>
while (x < 5) {<br>
  document.write(x + ' '); <br>
  x++; <br>
}<br> Output : `);

var x = 0;
while (x < 5) {
  document.write(x + ' ');
  x++;
}
document.write('<br>');

// do-while
document.write('<br> // do-while <br>');
document.write(`Code :<br> x = 0;<br>
do {<br>
    document.write(x + ' ');<br>
    x++;<br>
} while (x < 3);<br><br> Output : `);

x = 0;
do {
  document.write(x + ' ');
  x++;
} while (x < 3);
document.write('<br>');

// for-in loop
document.write('<br> // for-in loop <br>');
document.write(`Code :<br> arr = [10, 12, 31]; // array <br>
for (a in arr) { <br>
  document.write(arr[a] + ' '); <br>
} <br><br>Output : `);

arr = [10, 12, 31]; // array
for (a in arr) {
  document.write(arr[a] + ' ');
}
document.write('<br>');

// Continue and break
document.write('<br> // Continue <br>');

document.write(`Code :<br> for (i = 5; i >= 0; i--) {<br>
    if (i == 3) {<br>
      // skip 3<br>
      continue;<br>
    }<br>
    document.write(i + ' ');<br>
  } <br><br>Output : `);
for (i = 5; i >= 0; i--) {
  if (i == 3) {
    // skip 3
    continue;
  }
  document.write(i + ' ');
}
document.write('<br>');

// break
document.write('<br> // Break <br>');

document.write(`Code :<br> for (i = 5; i >= 0; i--) {<br>
    if (i == 3) {<br>
        // exit loop when i=3
      break;<br>
    }<br>
    document.write(i + ' ');<br>
  } <br><br>Output : `);

for (i = 5; i >= 0; i--) {
  if (i == 3) {
    // exit loop when i=3
    break;
  }
  document.write(i + ' ');
}
document.write('<br>');

// Functions
document.write('<br> // Functions <br>');
function add2Num(num1, num2) {
  // function definition
  return num1 + num2;
}
sum = add2Num(4, 5); // function call
document.write('4 + 5 = ' + sum);
document.write('<br>');
