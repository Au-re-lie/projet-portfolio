

const images = document.querySelectorAll
(".images-container img.objet")

let options = {
	rootMargin: "-10% 0px",
	threshold:.5
}

function handleIntersect(entries){
	console.log(entries);

entries.forEach(entry => {
	if(entry.isIntersecting){
		entry.target.style.animation ='sac1 3s linear 0.5s alternate-reverse'
	  } else{ 
	  	entry.target.style.animation ='none'
	  }


	})	

}

const observer = new IntersectionObserver
(handleIntersect, options)


images.forEach( image => {

	observer.observe(image)
})







