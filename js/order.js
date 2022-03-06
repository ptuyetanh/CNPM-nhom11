const btn = document.querySelectorAll(".menu .btn-add")
// console.log(btn)
btn.forEach(function(button, index){
    button.addEventListener("click",function(event){{
    var btnItem = event.target
    var product = btnItem.parentElement.parentElement
    var productImg = product.querySelector("img").src
    var productName = product.querySelector("h5").innerText
    var productPrice = product.querySelector("span").innerText
    // console.log(productImg,productName,productPrice)
    addcart(productImg, productName, productPrice)

    }})
})
function addcart(productImg,productName,productPrice){
    var addtr = document.createElement("tr")
    var cartItem = document.querySelectorAll("tbody tr")
    for (var i=0; i < cartItem.length; i++){
        var productT = document.querySelectorAll(".title")
        if(productT[i].innerHTML == productName){
        alert("Sản phẩm của bro đã có trong giỏ hàng rồi")
        return
        }
    }
    var trcontent = '<tr class="order-table row"><td class="table-cell col order-cell-1"> <img src="'+productImg+'" style="width: 70px;" class="card-img-top" alt="..."><span class="title">'+productName+'</span></td><td class="table-cell col order-cell-2"><p class="price"><span>'+productPrice+'</span><sup>đ</sup></p></td><td class="table-cell col-2 order-cell-3"><input style="width: 30px; outline: none; text-align: center;" type="number" value="1" min="1"></td><td class="table-cell col order-cell-4" style="cursor: pointer;"><span class="cart-delete col-2 ">Xóa</span></td></tr>'
    addtr.innerHTML = trcontent
    var cartTable = document.querySelector("tbody")
    // console.log(cartTable)
    cartTable.append(addtr)
    carttotal()
    deleteCart()
}
//---------------------------------- Total price ----------------------------------------
function carttotal(){
    var cartItem = document.querySelectorAll("tbody tr")
    var totalC = 0
    for (var i=0; i < cartItem.length; i++){
    var inputValue = cartItem[i].querySelector("input").value
    // console.log(inputValue)
    var productPrice = cartItem[i].querySelector(".price span").innerText
    // console.log(productPrice)
    totalA = inputValue*productPrice*1000
    totalC = totalC + totalA
    }
    var cartTotalA = document.querySelector(".cart .price-total span")
    cartTotalA.innerHTML = totalC.toLocaleString('de-DE')
    inputchange()
}
//--------------------------------- Delete cart ----------------------------------------
function deleteCart(){
    var cartItem = document.querySelectorAll("tbody tr")
    for (var i=0; i < cartItem.length; i++){
        var productT = document.querySelectorAll(".cart-delete")
        productT[i].addEventListener("click", function(event){
            var cartDelete = event.target
            var cartItemB = cartDelete.parentElement.parentElement
            cartItemB.remove()
            carttotal()
            // console.log(cartItemB)
        })
    }
}
function inputchange(){
    var cartItem = document.querySelectorAll("tbody tr")
    for (var i=0; i < cartItem.length; i++){
        var inputValue = cartItem[i].querySelector("input")
        inputValue.addEventListener("change",function(){
            carttotal()
        })
    }
}
const cartbtn = document.querySelector(".bi-x-circle")
const cartshow = document.querySelector(".shopping-cart")
cartshow.addEventListener("click",function(){
    document.querySelector(".cart").style.right = "0"
})