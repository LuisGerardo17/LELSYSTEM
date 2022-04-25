var file1=document.querySelector("#file");
var boton1=document.querySelector("#boton");
var espacio=document.querySelector("#espacio");


boton1.addEventListener("click",agregar);

function agregar(){

        const archivo=file1.files;  
        const cosa=archivo[0]
        let url=URL.createObjectURL(cosa)
        espacio.insertAdjacentHTML("beforeend",`<iframe name="iframe" src="${url}" height="500px" width="900px" class="my-3" frameborder="0"></iframe> <br>`)

        file1.value= "";
    
    
}