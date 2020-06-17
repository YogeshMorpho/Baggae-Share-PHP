document.getElementsByClassName('select-close')[0].onclick = e => {
    window.onscroll = null;
  document.getElementsByClassName('seat-select')[0].style.display = 'none';
};

let arr = document.getElementsByClassName('flight-cont');
for (let i = 0; i < arr.length; ++i) {
  arr[i].onclick = e => {
    window.scrollTo(0, 0);
    window.onscroll = function () { window.scrollTo(0, 0); };
    document.getElementsByClassName('seat-select')[0].style.display = 'flex';
  }
};

let tabelArr = document.getElementsByTagName('td');
for (let i = 0; i < tabelArr.length; ++i) {
  tabelArr[i].onclick = e => {
    window.onscroll = null;
    document.location.href = '/pages/chat.html';
  };
}