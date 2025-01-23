function calculateSum(numbers) {
  if (numbers === null || numbers.length === 0) {
    throw new Error('The input array cannot be empty or null');
  }
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

let numbers = [1, 2, 3, 4, 5];
let sum = calculateSum(numbers);
console.log(sum); // Output: 15

// Test for empty array
let emptyArray = [];
try {
  let sum2 = calculateSum(emptyArray);
  console.log(sum2);
} catch (error) {
  console.error(error.message); // Output: The input array cannot be empty or null
}

// Test for null array
let nullArray = null;
try {
  let sum3 = calculateSum(nullArray);
  console.log(sum3);
} catch (error) {
  console.error(error.message); // Output: The input array cannot be empty or null
}
