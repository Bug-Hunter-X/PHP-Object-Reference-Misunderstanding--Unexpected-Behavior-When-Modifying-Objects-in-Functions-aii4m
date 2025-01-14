To correctly modify the original object, avoid reassigning `$obj` within the function. Instead, directly modify the properties of the object passed as an argument:

```php
class MyClass {
    public $value = 10;
}

function modifyObject(MyClass &$obj) {
    // Notice the & for pass by reference
    $obj->value = 20; // Modifies the original object
}

$myObj = new MyClass();
modifyObject($myObj);
echo $myObj->value; // Outputs 20
```

By using `&` before `$obj` in the function's parameter list, we ensure that `modifyObject` works directly on the original object, leading to the expected modification.