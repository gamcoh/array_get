function array_get(array $arr, callable $callback): array
{
  $newArr = [];
  foreach ($arr as $key => $value) {
    if ($callback($key, $value) === true) {
      $newArr[$key] = $value;
    }
  }
  return $newArr;
}
