document.getElementById('chat-btn').onclick = r => {
  const val = document.getElementsByClassName('msg-box')[0].value;
  if(val.trim() !== '') {
    const newEle = document.createElement('p');
    newEle.textContent = `You: ${val}`;
    document.getElementsByClassName('chat-container')[0].appendChild(newEle);
    document.getElementsByClassName('msg-box')[0].value = '';
  }
}

var input = document.getElementsByClassName('msg-box')[0];
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById('chat-btn').click();
  }
});