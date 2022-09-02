// -----------------------------------------------------------------------------
// This file contains all function that run panier
// -----------------------------------------------------------------------------


/// Panier 
const saveBasket = (basket) => {
    localStorage.setItem("Basket", JSON.stringify(basket))
}

const getBasket = () => {
    let basket = localStorage.getItem("Basket")
    if (basket  == null) {
        return "Panier vide";
    }
    else {
        return JSON.parse(basket)
    }
}

const addBasket = (product) => {
    let basket = getBasket()
    let foundProduct = basket.find(p => p.id == product.id)
    if(foundProduct != undefined) {
        foundProduct.quantity++
    }
    else {
        product.quantity = 1
        basket.push(product)
    }
    saveBasket(basket)
}

const removeFromBasket = (product) => {
    let basket = getBasket()
    basket = basket.filter(p => p.id != product.id)
    saveBasket(basket)
}

const changeQuantity = (product, quantity) => {
    let basket = getBasket()
    let foundProduct = basket.find(p => p.id == product.id)
    if (foundProduct != undefined) {
        foundProduct.quantity += quantity
        if(foundProduct.quantity <= 0) {
            removeFromBasket(foundProduct)
        }
        else {
            saveBasket(basket)
        }
    }
}

const getNumberProduct = () => {
    let basket = getBasket()
    let number = 0

    for(let product of basket) {
        number += product.quantity
    }
    return number
}


const getTotalPrice = () => {
    let basket = getBasket()
    let total = 0

    for(let product of basket) {
        total += product.quantity * product.Product_Price
    }
    return total
}
