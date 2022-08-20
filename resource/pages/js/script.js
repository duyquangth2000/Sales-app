// -------Menu item---------
const toP = document.querySelector(".top")
window.addEventListener("scroll",function(){
    const x = this.pageYOffset;
    if(x>1){toP.classList.add("active")}
    else {
        toP.classList.remove("active")
    }
})
// ---------Meunu-Slidebar-cartegory---------
const itemSlidebar = document.querySelectorAll(".cartegory-left-li")
itemSlidebar.forEach(function(menu,index){
    menu.addEventListener("click",function(){
        menu.classList.toggle("block")
    })
})

// -------------Product----------------
const bigImg = document.querySelector(".product-content-left-big-img img")
const smallImg = document.querySelectorAll(".product-content-left-small-img img")
smallImg.forEach(function(imgItem,X){
    imgItem.addEventListener("click", function(){
        bigImg.src = imgItem.src
    })
})




const gioithieu = document.querySelector(".gioithieu")
const chitiet = document.querySelector(".chitiet")
const baoquan = document.querySelector(".baoquan")
if(gioithieu){
    gioithieu.addEventListener("click", function(){
      document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "block" 
      document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none" 
      document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none" 
    })
}
if(chitiet){
    chitiet.addEventListener("click", function(){
      document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "none" 
      document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block" 
      document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none" 
    })
}
if(baoquan){
    baoquan.addEventListener("click", function(){
      document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "none" 
      document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none" 
      document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block" 
    })
}

const butTon = document.querySelector(".product-content-right-bottom-top")
if(butTon){
    butTon.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
    })
}

