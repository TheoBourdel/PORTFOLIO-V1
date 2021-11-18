// Click burger menu
$('#burger').click(function(){
    $('aside').css('right','0');
    $('aside').css('transition','0.5s ease');

    $('.opacity').css('display', 'initial');
});

$('.opacity').click(function(){ // sortie burger-menu
    $('aside').css('right', '-250px');
    $(this).css('display', 'none');
});

$('.mobile-link').click(function(){ // sortie burger menu sur lien
    $('aside').css('right', '-250px');
    $('.opacity').css('display', 'none');
});



const switchThemeBtn = document.querySelector('.darkMod')
let toggleTheme = 0;
var btnIcon = document.getElementById("btn-icon");
switchThemeBtn.addEventListener('click', (event) =>{
  if (toggleTheme === 0) {
    document.documentElement.style.setProperty('--degrade-color', 'linear-gradient(to right bottom, #28313b, #303944, #38424e, #404b57, #485461)');
	  document.documentElement.style.setProperty('--background-color', '#191919');
	  document.documentElement.style.setProperty('--text-color', 'white');
	  document.documentElement.style.setProperty('--logo-color', 'white');
	  btnIcon.setAttribute("class", "fas fa-moon fa-2x");
    toggleTheme++;
  } else {
	  document.documentElement.style.setProperty('--degrade-color', 'linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab)');
		document.documentElement.style.setProperty('--background-color', 'white');
		document.documentElement.style.setProperty('--text-color', '#494949');
		document.documentElement.style.setProperty('--logo-color', '#494949');
		btnIcon.setAttribute("class", "fas fa-sun fa-2x");
    toggleTheme--;
  }
})



window.addEventListener('scroll', (event) =>{
  let scroll = this.scrollY;
  console.log(scroll);

  const fleche = document.querySelector(".fa-arrow-up");
  if (this.scrollY > 2570) {
    fleche.style.color = "white";
  } else {
    fleche.style.color = "var(--logo-color)";
  }
  const flecheContainer = document.querySelector(".fleche");
  if (this.scrollY > 100) {
    flecheContainer.style.display = "block";
  } else {
    flecheContainer.style.display = "none";
  }
})










