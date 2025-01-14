In PHP, a common yet subtle error arises when dealing with references and objects, especially within functions or methods.  Consider this scenario:

```php
class MyClass {
    public $value = 10;
}

function modifyObject(MyClass $obj) {
    $obj = new MyClass(); // Creates a *new* object
    $obj->value = 20;     // Modifies the *new* object
}

$myObj = new MyClass();
modifyObject($myObj);
echo $myObj->value; // Still outputs 10!
```

The issue is that inside `modifyObject`, we're not modifying the original object passed by reference; instead, we're creating a *new* object, assigning it to the local `$obj` variable (which is passed by value). The original `$myObj` remains unchanged.