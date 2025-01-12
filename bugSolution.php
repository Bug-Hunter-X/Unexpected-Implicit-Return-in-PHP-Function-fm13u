function myFunc() {
  // ... some code ...
  if (someCondition) {
    return;
  }
  // ... more code that should not execute if someCondition is true ...
}
function myFuncSolution() {
  // ... some code ...
  $result = null;
  if (someCondition) {
    $result = 'Condition is true';
  } else {
    $result = 'Condition is false';
  }
    // more code that should execute irrespective of the conditional statement
  return $result; 
} 