let change = () => {
  let input = document.getElementsByClassName('tag');
  let alert = document.getElementsByClassName('alert'); 
  for (let i=0; i<input.length;i++){
  if (input[i].value.trim()== '') {
    input[i].classList.add('bd-red');
    alert[i].classList.add('fontsize_3');
    alert[i].classList.remove('hidden');
    input[i].classList.remove('bd-green');
  } else {
    alert[i].classList.remove('fontsize_3');
    alert[i].classList.add('hidden');
    input[i].classList.remove('bd-red');
    input[i].classList.add('bd-green');
  }}
}
let checked = () => {
  let input = document.getElementsByClassName('tag');
  for (let i=0; i<input.length;i++){
  if (i==6 || i==5){
    input[i].addEventListener("change", change);
  }
  input[i].addEventListener("keyup",change);
  }
}
let clicked = () => {
  change();
  checked();
}