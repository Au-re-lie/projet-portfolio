const navigation = document.querySelector('nav');

window.addEventListener('scroll', () => {
if(window.scrollY > 50){
	navigation.classList.add('anim-nav');
} else {
	navigation.classList.remove('anim-nav');
}
})