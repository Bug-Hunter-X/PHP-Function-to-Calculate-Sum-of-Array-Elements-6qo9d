# PHP Function to Calculate Sum of Array Elements

This repository contains a PHP function that calculates the sum of elements in an array. It also demonstrates a bug in the original function and its solution.

## Bug

The original function does not correctly handle empty arrays. It returns 0 instead of throwing an error or indicating that the array is empty. 

## Solution

The solution provided addresses the bug by adding a check for an empty array before calculating the sum. It throws an exception if the array is empty, providing more robust error handling.