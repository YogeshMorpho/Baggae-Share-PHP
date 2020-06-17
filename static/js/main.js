// Transfer to login
document.getElementById('login').onclick = e => {
  e.preventDefault();
  document.getElementsByClassName('signup-usr')[0].style.display = 'none';
  document.getElementsByClassName('login-usr')[0].style.display = 'flex';
  document.getElementById('login').style.backgroundColor = 'green';
  document.getElementById('signup').style.backgroundColor = 'black';
};

// Transfer to signup
document.getElementById('signup').onclick = e => {
  e.preventDefault();
  document.getElementsByClassName('login-usr')[0].style.display = 'none';
  document.getElementsByClassName('signup-usr')[0].style.display = 'flex';
  document.getElementById('login').style.backgroundColor = 'black';
  document.getElementById('signup').style.backgroundColor = 'green';
};

// Signup enevnt
document.getElementById('signup-btn').onclick = e => {
  // Add checks here
  e.preventDefault();
  document.getElementsByClassName('signup-usr')[0].style.display = 'none';
  document.getElementsByClassName('login-usr')[0].style.display = 'flex';
  document.getElementById('login').style.backgroundColor = 'green';
  document.getElementById('signup').style.backgroundColor = 'black';
};

// Login
document.getElementById('login-btn').onclick = e => {
  // Add checks here
  e.preventDefault();
  document.location.href = '/pages/dashboard.html';
};