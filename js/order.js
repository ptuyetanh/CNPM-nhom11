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
    var trcontent = '<tr><td> <img src="'+productImg+'" style="width: 70px; align-items: center;" class="card-img-top" alt="..."><span class="title">'+productName+'</span></td><td><p class="price"><span>'+productPrice+'</span><sup>đ</sup></p></td><td><input style="width: 30px; outline: none; text-align: center;" type="number" value="1" min="1"></td<td style="cursor: pointer;"><span class="cart-delete">Xóa</span></td></tr>'
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
        // totalB = totalA.toLocaleString('de-DE')
        totalC = totalC + totalA
        totalD = totalC.toLocaleString('de-DE')
       
    }
    var cartTotalA = document.querySelector(".cart .price-total span")
    cartTotalA.innerHTML = totalD
    console.log(cartTotalA)
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
            console.log(cartItemB)
        })
    }
}
