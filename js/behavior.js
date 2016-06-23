/* Consider looking into adding comment counts for Disqus--not sure how exactly it works. */
/* Remember to uncomment disqus page url */

document.addEventListener("DOMContentLoaded", function(event) {
    
    var thumbnailElement = document.getElementById("smart_thumbnail");
    var captionText = document.getElementById("caption_text");
    var introText = document.getElementById("intro_text");
    var exclamationMark = document.getElementById("exclam");
    
    thumbnailElement.addEventListener("click", function() {
        
        if (thumbnailElement.className == "") {
	       thumbnailElement.className = "small";
           captionText.innerHTML = "Click to expand.";
            introText.scrollIntoView();  
        }
        
        else {
            thumbnailElement.className = "";
            captionText.innerHTML = "Momoko from 3 AM Dangerous Zone / NEMU Youko";
        }
    });
    
});