const productDisplay = document.querySelector(".product");
let preview = document.querySelectorAll(".prev1");

preview.forEach(prev => {
     prev.addEventListener('click', event => {
        const clickedImageSrc = event.target.getAttribute('src');
    
        const largeImage = document.createElement('img');
        largeImage.src = clickedImageSrc;
        
        productDisplay.innerHTML = '';
        productDisplay.appendChild(largeImage);
            
     });
    
});




