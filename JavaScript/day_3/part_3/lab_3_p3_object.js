// Use 10 of Objects predefined methods and explain them.

//Object built-in methods

//<1>Object.assign()
//Copies values from one or more object to one target object
const target = { a: 1, b: 2 };
const source = { b: 4, c: 5 };

const returnedTarget = Object.assign(target, source);


console.log(returnedTarget);
// expected output: Object { a: 1, b: 4, c: 5 }

// =============================================================================================================
//<2>Object.create()
//creates a new object, using an existing object as the prototype of the newly created object.
const person = {
    isHuman: false,
    printIntroduction: function () {
        console.log(`My name is ${this.name}. Am I human? ${this.isHuman}`);
    }
};

const me = Object.create(person);

me.name = 'Matthew'; // "name" is a property set on "me", but not on "person"
me.isHuman = true; // inherited properties can be overwritten

me.printIntroduction();
// expected output: "My name is Matthew. Am I human? true"

// =============================================================================================================
//<3>Object.defineProperties()
//defines new or modifies existing properties directly on an object, returning the object.
const object1 = {};

Object.defineProperties(object1, {
    property1: {
        value: 42,
        writable: true
    },
    property2: {}
});

console.log(object1.property1);
// expected output: 42

// =============================================================================================================
//<4>Object.defineProperty()
//defines a new property directly on an object, or modifies an existing property on an object, and returns the object.
const object2 = {};

Object.defineProperty(object2, 'property1', {
    value: 42,
    writable: false
});

object2.property1 = 77;
// throws an error in strict mode

console.log(object2.property1);
// expected output: 42

// =============================================================================================================
//<5>Object.entries()
//returns an array of a given object's own enumerable string-keyed property [key, value] pairs.
const object3 = {
    a: 'somestring',
    b: 42
};

for (const [key, value] of Object.entries(object3)) {
    console.log(`${key}: ${value}`);
}

// expected output:
// "a: somestring"
// "b: 42"

// =============================================================================================================
//<6>Object.freeze()
//method freezes an object. Freezing an object prevents extensions and makes existing properties non-writable and non-configurable.
const obj = {
    prop: 42
};

Object.freeze(obj);

obj.prop = 33;
// Throws an error in strict mode

console.log(obj.prop);
// expected output: 42

// =============================================================================================================
//<7>Object.freeze()
//transforms a list of key-value pairs into an object.
const entries = new Map([
    ['foo', 'bar'],
    ['baz', 42]
]);

const obj = Object.fromEntries(entries);

console.log(obj);
// expected output: Object { foo: "bar", baz: 42 }

// =============================================================================================================
//<8>Object.hasOwn()
//returns true if the specified object has the indicated property as its own property. If the property is inherited, or does not exist, the method returns false.
const object4 = {
    prop: 'exists'
};

console.log(Object.hasOwn(object4, 'prop'));
// expected output: true

console.log(Object.hasOwn(object4, 'toString'));
// expected output: false

console.log(Object.hasOwn(object4, 'undeclaredPropertyValue'));
// expected output: false

// =============================================================================================================
//<9>Object.is()
//determines whether two values are the same value.
Object.is('foo', 'foo');          // true
Object.is('foo', 'bar');          // false

// =============================================================================================================
//<10>Object.key()
//returns an array of a given object's own enumerable property names, iterated in the same order that a normal loop would.
const object5 = {
    a: 'somestring',
    b: 42,
    c: false
};

console.log(Object.keys(object5));
  // expected output: Array ["a", "b", "c"]