<?php
/**
 * Implement the unique_names function. When passed two arrays of names,
 * it will return an array containing the names that appear in either or both arrays.
 * The returned array should have no duplicates.
 *
 * For example,
 * calling unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']) should return ['Emma', 'Olivia', 'Ava', 'Sophia'] in any order.
 *
 * @param array $array1
 * @param array $array2
 *
 * @return array
 */
function unique_names(array $array1, array $array2) : array
{
    return [];
}

$names = unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia