function highlighterAction() {
    document.getElementById("customDefaultId").classList.toggle("loaded");
    if(document.body.contains(document.getElementsByClassName("project-template")[0])){
        var newCalssName = document.getElementsByClassName("component__project")[0].ariaLabel;
        document.getElementsByClassName("project-template")[0].classList.add(newCalssName);
        document.getElementsByClassName("main-header")[0].classList.add(newCalssName);
    }   
}

function highlighter() {
    /*
      The short pause allows any required callback functions
      to execute before actually highlighting, and allows
      the JQuery $(document).ready wrapper to finish.
     */
    setTimeout(function() {
        highlighterAction();
    }, 200);
}

/*
  Only trigger the highlighter after document fully loaded.  This is
  necessary for cases where page load takes a significant length
  of time to fully load.
*/
if (document.readyState == 'complete') {
    highlighter();
} else {
    document.onreadystatechange = function () {
        if (document.readyState === "complete") {
            highlighter();
        }
    }
}

window.onbeforeunload = function(e) { highlighterAction() };