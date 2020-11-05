function exibir_categoria(categorias) {
    let produtos = document.getElementsByClassName('produto')

    for(var i = 0; i < produtos.length; i++){

        if(produtos[i].classList.contains(categorias)){
            produtos[i].style.display = "block";
        }else{
            produtos[i].style.display = "none";
        }
    }
}

let imagensProdutos = document.querySelectorAll(".produto")
imagensProdutos.forEach((img)=>{
    img.addEventListener("mousemove", ()=>{
        img.style.transform = "scale(1.5)";
        img.style.zIndex = "1000";
    })
    img.addEventListener("mouseleave", ()=>{
        img.style.transform = "scale(1)";
        img.style.zIndex = "unset";
    })
})

