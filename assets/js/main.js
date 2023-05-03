document.getElementById('burger-btn-open').addEventListener('click', function(){
  document.getElementById('burger__menu').classList.add('--show');
});
document.getElementById('burger-btn-hide').addEventListener('click', function(){
  document.getElementById('burger__menu').classList.remove('--show');
});

//Скролл

  function scrollTo(element) {
    window.scroll({
        left: 0,
        top: element.offsetTop,
        behavior: 'smooth'
    })
}

var button1 = document.querySelector('.scrollTo1');
var button2 = document.querySelector('.scrollTo2');
var button3 = document.querySelector('.scrollTo3');

var aboutUs = document.querySelector('#aboutUs');
var order = document.querySelector('#order');

button1.addEventListener('click' , () => {
    scrollTo(aboutUs);
});

button2.addEventListener('click' , () => {
  scrollTo(aboutUs);
});

button3.addEventListener('click' , () => {
    scrollTo(order);
});
