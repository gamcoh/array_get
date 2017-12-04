# array_get
sort an array in order to get only the values or the keys or both that match the given pattern in the callback function

## Example 

    $a = ['foo' => 45, 'bar' => 34, 'foo_bar' => 'Hello', 45 => true];

    $b = array_get($a, function ($key, $value) {
      return strpos($key, 'foo') !== false;
    });

    // $b equals to : ['foo' => 45, 'foo_bar' => 'Hello']
