function roundGrade(grade) {
    // Calculate the nearest multiple of 5
    const nearestMultiple = Math.ceil(grade / 5) * 5;
  
    // Check the difference between the grade and the nearest multiple
    const difference = nearestMultiple - grade;
  
    // Round up if the difference is less than 3
    return difference < 3 && grade >= 38 ? nearestMultiple : grade;
  }
  
  // Example usage
  // The first index is number of student
  const input = [4, -1, 67, 38, 33];
  const numberStudent = input.shift();
  const roundedGrades = [];
  
  if (numberStudent < 1 || numberStudent > 60) {
      console.log("Number of Student must be between 1 and 60");
  }
  else if (numberStudent != input.length){
      console.log("Number of Student and total input grades not same")
  }
  else{
      let isError = false
      for(let i = 0; i < numberStudent; i++){
          if (input[i] >= 0 && input[i] <= 100){
              const rounded = roundGrade(input[i])
              roundedGrades.push(rounded);
          } else {
              console.log(`Student ${i + 1} the grade less than 0 or more than 100`);
              isError = true;
              break;
          }
          
      }
      if (!isError){
          console.log(roundedGrades); // Output: [75, 67, 40, 33]
      }
      
  }
  