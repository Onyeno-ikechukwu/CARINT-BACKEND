document.querySelector(".row").addEventListener('click', ()=>{
  const pwd = document.querySelector(".pwd");
  const pwd2 = document.querySelector(".pwd2");
  const con = document.querySelector(".confirm");
  const pass = document.querySelector(".password");
  if (pwd !== pwd2) {
    con.innerHTML = "password do not march";   
    console.log("hello");
    
  } 
  if (pwd.value < 5 || !/[A-Z]/.test(pwd.value)) {
    pass.innerHTML = "put a strong password";
  }
})

