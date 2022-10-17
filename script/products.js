
function createProductElement(product) {
    if (!product) return;

    try {
        const productTemplate = document.getElementById('productTemplate')
        if (!productTemplate) return

        const childElement = productTemplate.content.firstElementChild.cloneNode(true)
        if (!childElement) return

        //update content
        const nameProduct = childElement.querySelector('[data-id="name"]')
        if (nameProduct) nameProduct.textContent = product.title

        const priceProduct = childElement.querySelector('[data-id="price"]')
        if (priceProduct) priceProduct.textContent = product.id

        const salePrice = childElement.querySelector('[data-id="priceSale"]')
        if (salePrice) salePrice.textContent = product.userId




        return childElement

    } catch (error) {
        throw new Error('failed to create product item', error)
    }

}


function renderProduct(productList) {
    if (!Array.isArray(productList) || productList.length == 0) return;

    const parentElement = document.getElementById('parent')
    if (!parentElement) return;

    productList.forEach((product) => {
        const childElement = createProductElement(product)
        parentElement.appendChild(childElement)
    })

}



(() => {
    fetch('https://jsonplaceholder.typicode.com/posts')
        .then(res => res.json())
        .then(data => {
            renderProduct(data)
        })
})()