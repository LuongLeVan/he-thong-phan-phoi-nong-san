const navbar = document.getElementById('ftco-navbar')
const btn = document.getElementById('btn-back-to-top')
const handleScroll = () => {
    if(window.scrollY >=200){
      navbar.classList.add('navbarfixed')
      btn.classList.add('backtop')
      btn.classList.remove('blocked-btn')
    }else{
      navbar.classList.remove('navbarfixed')
      btn.classList.remove('backtop')
      btn.classList.add('blocked-btn')

    }
     

  }
 
  const handleBackToTop = () => {
    window.scrollTo({top: 0, behavior: 'smooth'});

  }

  window.addEventListener('scroll',handleScroll);
  btn.addEventListener('click',handleBackToTop)