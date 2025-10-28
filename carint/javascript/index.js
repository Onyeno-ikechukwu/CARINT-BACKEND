const more = document.querySelector('.nav2iii');
const options = document.querySelector('.nav3');

more.addEventListener('click', ()=>{
  if (options.style.display === "none") {
    options.style.display= "flex";
    more.style.textDecoration = "none";
  } else {
    options.style.display= "none";
    more.style.textDecoration = "underline";
  }
})