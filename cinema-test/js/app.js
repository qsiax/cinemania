const item01 = document.querySelector('.item-1'),
    item02 = document.querySelector('.item-2'),
    item03 = document.querySelector('.item-3'),
    item04 = document.querySelector('.item-4'),
    item05 = document.querySelector('.item-5'),
    item06 = document.querySelector('.item-6');

const screen01 = document.querySelector('.screen-01'),
    screen02 = document.querySelector('.screen-02'),
    screen03 = document.querySelector('.screen-03'),
    screen04 = document.querySelector('.screen-04'),
    screen05 = document.querySelector('.screen-05'),
    screen06 = document.querySelector('.screen-06');

const close06 = document.querySelector('#close-06');
    close05 = document.querySelector('#close-05'),
    close04 = document.querySelector('#close-04'),
    close03 = document.querySelector('#close-03'),
    close02 = document.querySelector('#close-02'),
    close01 = document.querySelector('#close-01');

const conf01 = document.querySelector('#conf-btn-01');

const closeForm = document.querySelector('#close-form');

const formConf = document.querySelector('.form__item');

item01.addEventListener('click', () => {
    screen01.classList.toggle('active')
})

item02.addEventListener('click', () => {
    screen02.classList.toggle('active')
})

item03.addEventListener('click', () => {
    screen03.classList.toggle('active')
})

item04.addEventListener('click', () => {
    screen04.classList.toggle('active')
})

item05.addEventListener('click', () => {
    screen05.classList.toggle('active')
})

item06.addEventListener('click', () => {
    screen06.classList.toggle('active')
})

close06.addEventListener('click', () => {
    screen06.classList.remove('active')
})
close05.addEventListener('click', () => {
    screen05.classList.remove('active')
})
close04.addEventListener('click', () => {
    screen04.classList.remove('active')
})
close03.addEventListener('click', () => {
    screen03.classList.remove('active')
})
close02.addEventListener('click', () => {
    screen02.classList.remove('active')
})
close01.addEventListener('click', () => {
    screen01.classList.remove('active')
})

conf01.addEventListener('click', () => {
    formConf.classList.add('active');
    screen01.classList.remove('active');
})

closeForm.addEventListener('click', () => {
    formConf.classList.remove('active');
})

document.getElementById("conf-btn-01").addEventListener("click", function() {
    const formItem = document.querySelector('.item-1');
    formItem.classList.add('armored');
    this.classList.add("armored");
    this.disabled = true;
      
      setTimeout(function() {
          document.getElementById("conf-btn-01").disabled = false;
      }, 3000);
    
  });