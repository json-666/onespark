var scrollDir;

function isInViewport(el, direction){
    if(document.body.contains(el)){
        const rect = el.getBoundingClientRect();
        if(direction == "true"){
            //console.log(rect.bottom > 300);
            return (rect.bottom > 300);
        }else{
            return (rect.top - window.innerHeight <= -450);
        }
    }
}

function anotherIsInViewport(el){
    const rect = el.getBoundingClientRect();
    if(Math.abs(rect.top) - rect.height < -100){
        return true;
    }
    else{
        return false;
    }
}

var transform = 0;

function change(){
    var square = document.getElementById("aboutUs");
    var widget = document.getElementsByClassName("widget")[0];
    if(anotherIsInViewport(square) && square.classList.contains("is-in-viewport")){

        if(scrollDir == "true"){
            transform = transform - 95;
        }
        else{
            transform = transform + 95;
        }
        var translate = "translateY("+transform+"px)";
        //widget.style.transform = translate;
        //console.log(translate);
    }
}
window.onwheel = change;
window.addEventListener('scroll', function(e){

    if(this.oldScroll > this.scrollY){
        scrollDir = "true";
        nextElement = document.getElementsByClassName("before-in-viewport")[0];
    }
    else{
        scrollDir = "false";
        nextElement = document.getElementsByClassName("next-in-viewport")[0];
    }
    
    //console.log(anotherIsInViewport(square));

    this.oldScroll = this.scrollY;

    if(isInViewport(nextElement, scrollDir)){
        if(scrollDir == "true"){
            nextID = document.getElementsByClassName("before-in-viewport")[0].getAttribute("aria-rowcount");
            nextID--;

            document.getElementsByClassName("is-in-viewport")[0].classList.add("next-in-viewport");
            document.getElementsByClassName("is-in-viewport")[0].classList.remove("is-in-viewport");

            document.getElementsByClassName("before-in-viewport")[0].classList.add("is-in-viewport");
            document.getElementsByClassName("before-in-viewport")[0].classList.remove("before-in-viewport");

            if(nextID != -1){
                document.getElementsByTagName("section")[nextID].classList.add("before-in-viewport");
            }
            
            var className = "item__color__"+document.getElementsByClassName("next-in-viewport")[0].getAttribute("aria-label");
            document.getElementsByTagName("body")[0].classList.remove(className);
            className = "item__color__"+document.getElementsByClassName("is-in-viewport")[0].getAttribute("aria-label");
            document.getElementsByTagName("body")[0].classList.add(className);
        }
        if(scrollDir == "false"){
            
            nextID = document.getElementsByClassName("next-in-viewport")[0].getAttribute("aria-rowcount");
            nextID++;

            if(nextID > 2){
                document.getElementsByClassName("before-in-viewport")[0].classList.remove("before-in-viewport");
            }

            document.getElementsByClassName("is-in-viewport")[0].classList.add("before-in-viewport");
            document.getElementsByClassName("is-in-viewport")[0].classList.remove("is-in-viewport");

            document.getElementsByClassName("next-in-viewport")[0].classList.add("is-in-viewport");
            document.getElementsByClassName("next-in-viewport")[0].classList.remove("next-in-viewport");

            document.getElementsByTagName("section")[nextID].classList.add("next-in-viewport");

            var className = "item__color__"+document.getElementsByClassName("before-in-viewport")[0].getAttribute("aria-label");
            document.getElementsByTagName("body")[0].classList.remove(className);
            className = "item__color__"+document.getElementsByClassName("is-in-viewport")[0].getAttribute("aria-label");
            document.getElementsByTagName("body")[0].classList.add(className);
        }
    }
});
