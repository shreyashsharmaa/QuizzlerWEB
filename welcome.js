function  selectValue()
{  var selectedValue = document.getElementById("topic").value;
   var selectedDifficulty = document.getElementById("difficulty").value;
  localStorage.setItem("selectedValue",selectedValue);
  localStorage.setItem("selectedDifficulty",selectedDifficulty);
}
