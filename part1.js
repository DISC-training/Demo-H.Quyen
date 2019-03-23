let change = () => {
  let input = document.getElementsByClassName('tag');
  let alert = document.getElementsByClassName('m-alert'); 
  for (let i=0; i<input.length;i++){
  if (input[i].value.trim()== '') {
    input[i].classList.add('border-danger');
    alert[i].classList.add('text-danger');
    alert[i].classList.remove('d-none');
    input[i].classList.remove('border-primary');
  } else {
    alert[i].classList.remove('text-danger');
    alert[i].classList.add('d-none');
    input[i].classList.remove('border-danger');
    input[i].classList.add('border-primary');
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
let transitions = () => {
  let tran = document.getElementsByClassName('before-click');
  
}
let clicked = () => {
  change();
  checked();
}