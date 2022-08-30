// EX 1: Use 10 of Objects predefined methods and explain them.

//Array built-in methods

//<1>array.concat()
//used to merge two or more arrays. This method does not change the existing arrays, but instead returns a new array.
const array1 = ['a', 'b', 'c'];
const array2 = ['d', 'e', 'f'];
const array3 = array1.concat(array2);

console.log(array3);
// expected output: Array ["a", "b", "c", "d", "e", "f"]

// ================================================================================================================================
//<2>array.entries()
//returns a new Array Iterator object that contains the key/value pairs for each index in the array.
const array4 = ['a', 'b', 'c'];

const iterator1 = array4.entries();

console.log(iterator1.next().value);
// expected output: Array [0, "a"]

console.log(iterator1.next().value);
// expected output: Array [1, "b"]

// ================================================================================================================================
//<3>array.every()
//tests whether all elements in the array pass the test implemented by the provided function. It returns a Boolean value.
const isBelowThreshold = (currentValue) => currentValue < 40;

const array5 = [1, 30, 39, 29, 10, 13];

console.log(array5.every(isBelowThreshold));
// expected output: true

// ================================================================================================================================
//<4>array.fill()
//changes all elements in an array to a static value, from a start index (default 0) to an end index (default array.length). It returns the modified array.
const array6 = [1, 2, 3, 4];

// fill with 0 from position 2 until position 4
console.log(array6.fill(0, 2, 4));
// expected output: [1, 2, 0, 0]

// fill with 5 from position 1
console.log(array6.fill(5, 1));
// expected output: [1, 5, 5, 5]

console.log(array6.fill(6));
// expected output: [6, 6, 6, 6]

// ================================================================================================================================
//<5>array.filter()
//creates a shallow copy of a portion of a given array, filtered down to just the elements from the given array that pass the test implemented by the provided function.
const words = ['spray', 'limit', 'elite', 'exuberant', 'destruction', 'present'];

const result = words.filter(word => word.length > 6);

console.log(result);
// expected output: Array ["exuberant", "destruction", "present"]

// ================================================================================================================================
//<6>array.find()
//returns the first element in the provided array that satisfies the provided testing function. If no values satisfy the testing function, undefined is returned.
const array7 = [5, 12, 8, 130, 44];

const found = array7.find(element => element > 10);

console.log(found);
// expected output: 12

// ================================================================================================================================
//<7>array.indexOf()
// returns the first index at which a given element can be found in the array, or -1 if it is not present.
const beasts = ['ant', 'bison', 'camel', 'duck', 'bison'];

console.log(beasts.indexOf('bison'));
// expected output: 1

// start from index 2
console.log(beasts.indexOf('bison', 2));
// expected output: 4

console.log(beasts.indexOf('giraffe'));
// expected output: -1

// ================================================================================================================================
//<8>array.isArray()
// determines whether the passed value is an Array.
Array.isArray([1, 2, 3]);  // true
Array.isArray({ foo: 123 }); // false
Array.isArray('foobar');   // false
Array.isArray(undefined);  // false

// ================================================================================================================================
//<9>array.push()
// adds one or more elements to the end of an array and returns the new length of the array.
const animals = ['pigs', 'goats', 'sheep'];

const count = animals.push('cows');
console.log(count);
// expected output: 4
console.log(animals);
// expected output: Array ["pigs", "goats", "sheep", "cows"]

animals.push('chickens', 'cats', 'dogs');
console.log(animals);
// expected output: Array ["pigs", "goats", "sheep", "cows", "chickens", "cats", "dogs"]

// ================================================================================================================================
//<10>array.pop()
// removes the last element from an array and returns that element. This method changes the length of the array.
const plants = ['broccoli', 'cauliflower', 'cabbage', 'kale', 'tomato'];

console.log(plants.pop());
// expected output: "tomato"

console.log(plants);
// expected output: Array ["broccoli", "cauliflower", "cabbage", "kale"]

plants.pop();

console.log(plants);
// expected output: Array ["broccoli", "cauliflower", "cabbage"]