function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

let numbers = [1, 2, 3, 4, 5];
let sum = calculateSum(numbers);
console.log(sum); // Output: 15

// The bug is introduced when the input array is empty
let emptyArray = [];
let sum2 = calculateSum(emptyArray);
console.log(sum2); // Output: 0

// The bug is that the function will return 0 when it should return an error or handle empty arrays more gracefully