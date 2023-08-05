var menu = document.querySelector('.menu-items');
var myProfile = document.querySelector('.item7');
var personalInfo = document.querySelector('.profile');
function getPersonalInfo() {
  console.log("called");
  personalInfo.classList.toggle('showInfo');
  myProfile.classList.toggle('add-shadow');
}
function getMenu() {
    console.log("function called");
    menu.classList.toggle('show');
    menu.classList.toggle('hide');
}
window.addEventListener('scroll', () => {
    const element = document.querySelector('.intro-head');
    const element1 = document.querySelectorAll('.left-img1');
    const element2 = document.querySelector('.right-img1');
    const element3 = document.querySelector('.about-foodlab');
    const element4 = document.querySelector('.useful-info');
    const element5 = document.querySelector('.footer-copyright');
    if (isElementInViewport(element))
      element.classList.add('animated');
    if (isElementInViewport(element1[0]))
        element1[0].classList.add('animated');
    if (isElementInViewport(element1[1]))
        element1[1].classList.add('animated');
    if (isElementInViewport(element2))
        element2.classList.add('animated');
    if (isElementInViewport(element3))
        element3.classList.add('animated');
    if (isElementInViewport(element4))
      element4.classList.add('animated');
    if (isElementInViewport(element5))
      element5.classList.add('animated');

  });
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }