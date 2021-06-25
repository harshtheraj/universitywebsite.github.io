// slecting all the elememnt

const slectBox = document.querySelector(".select-box");
slectXBtn = slectBox.querySelector(".playerX"),
slectOBtn = slectBox.querySelector(".playerO");

window.onload = ()=>{
    //once window loaded

    slectXBtn.onclick = ()=>{
        selectBox.classList.add("hide"); //hide the select box when clicked
    }
}