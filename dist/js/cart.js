const realPirce = document.querySelector('.cart__des__real__price').innerHTML
document.querySelector('.cart__des__real__price').innerHTML = realPirce.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
const btnDecrease = document.querySelector('.qty-decrease')
const btnIncrease = document.querySelector('.qty-increase')
const price =  document.querySelector('.cart__description-part4_price').innerHTML
document.querySelector('.cart__description-part4_price').innerHTML = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
const input = document.querySelector('.qty-input')
const provisional = document.querySelector('.right__amount_provisional').innerHTML
document.querySelector('.right__amount_provisional').innerHTML = provisional.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")

const money = document.querySelector('.right__amount__price-fee').innerHTML
document.querySelector('.right__amount__price-fee').innerHTML = money.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")


btnDecrease.addEventListener('click', () => {
    input.value--
    const value = input.value
    document.querySelector('.cart__description-part4_price').innerHTML = (price * value).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    document.querySelector('.right__amount_provisional').innerHTML = (provisional  * value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
    document.querySelector('.right__amount__price-fee').innerHTML =( money  * value).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")


})
btnIncrease.addEventListener('click', () => {
    input.value++
    const value = input.value
    document.querySelector('.cart__description-part4_price').innerHTML = (price * value).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    document.querySelector('.right__amount_provisional').innerHTML = (provisional  * value).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    document.querySelector('.right__amount__price-fee').innerHTML = (money  * value).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")

})