import './bootstrap';

document.getElementById('dropdownNavbarLink').addEventListener('click', function(e){
  e.stopPropagation();
  document.getElementById('dropdownNavbar').classList.toggle('hidden');
});

document.addEventListener('click', function(){
  document.getElementById('dropdownNavbar').classList.add('hidden');
});

document.getElementById('dropdownNavbar').addEventListener('click', function(e){
  e.stopPropagation();
});
