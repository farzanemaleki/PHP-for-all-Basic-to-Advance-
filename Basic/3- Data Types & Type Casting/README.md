# Data Types & Type Casting
PHP has several built-in data types that are used to represent different types of values. 

- Scalar Types: Scalar types represent single values. PHP has four scalar types:
    . bool: true/false
    . int: 5, 10, -87
    . float: 8.4, 24.9, -79.933
    . string: "farzane", "maleki"

- Compound Types: Compound types represent collections of values. PHP has several compound types:
    . array: [1, 'nine', true]
    . object: [{'id1', 'name1', 'family1'}, {'id2', 'name2', 'family2'}]
    . callable:represents a function or method that can be called.
    . iterable: represents an object that can be iterated over using a foreach loop.

- Special Types
    . resource: represents an external resource, such as a database connection or file handle.
    . null: represents a variable with no value.


- You can determine the data type of a variable using the `gettype()` function or the `var_dump()` function.

## What is Type Hinting?

- Type Hinting is the practice of explicitly specifying the expected data type of function arguments. This allows you to enforce specific types in your code, which can help prevent errors and improve the reliability of your code.

- In strict type hinting, the strict_types declaration must be the very first statement in the script. You can enable strict type hinting in PHP using the following code:

    `declare(strict_types = 1);`

- Type casting in PHP is the process of converting a value from one data type to another. To cast a value to a particular data type, you can use one of several casting operators, such as (int), (float), or (string).
    .Note that type casting can sometimes result in data loss or unexpected behavior, so it should be used with caution.


