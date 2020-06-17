document.getElementsByClassName('ham')[0].onclick = e => {
  e.preventDefault();
  document.getElementsByClassName('sidebar-container')[0].style.display = 'block';
  document.getElementsByClassName('ham')[0].style.visibility = 'hidden';
}

document.getElementsByClassName('close-btn')[0].onclick = e => {
  e.preventDefault();
  document.getElementsByClassName('sidebar-container')[0].style.display = 'none';
  document.getElementsByClassName('ham')[0].style.visibility = 'visible';
}

document.getElementsByClassName('chat')[0].onclick = e => {
  e.preventDefault();
  document.getElementsByClassName('chatbar-container')[0].style.display = 'block';
  document.getElementsByClassName('chat')[0].style.visibility = 'hidden';
}

document.getElementsByClassName('chat-close-btn')[0].onclick = e => {
  e.preventDefault();
  document.getElementsByClassName('chatbar-container')[0].style.display = 'none';
  document.getElementsByClassName('chat')[0].style.visibility = 'visible';
}
