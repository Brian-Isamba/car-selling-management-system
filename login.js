document.getElementById('myform').addEventListener('submit',function(event){
    event.preventDefault();
    let errors = [];
  
    let username = document.getElementById('username').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
  
    if (username.lenght < 3){
      errors.push('Username must be atleast 3 characters long.');
  
    }
    let emailPattern = /^[^\S@]+@[^\S@]+\.[^\S@]+$/;
    if (!emailPattern.test(email)){
      errors.push("please enter a valid email address.");
    }
  
    if (password.lenght < 6){
      errors.push('password must be at least 6 characters long.');
    }
    if (errors.lenght > 0){
      document.getElementById('error').innerHTML = errors.join('<br>');
    }else {
      document.getElementById('error').innerHTML = 'Form Submitted successfully!';
    }
  });
  