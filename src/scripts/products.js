//
// * Fetcing API from db
// * Get objects
// * Adding user input
//

function guid() {
  function s4() {
    return Math.floor((1 + Math.random()) * 0x10000)
      .toString(16)
      .substring(1);
  }
  return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
}

if (!localStorage.getItem('user')) {
  localStorage.setItem('user', `${guid()}`);
}

fetch('http://localhost:5000/api/product', {
  method: 'GET', // or 'PUT'
  headers: new Headers({
    'Accept': 'application/json',
    'Content-Type': 'application/json'
  })
}).then(res => res.json())
.then(products => {
  for (const product of products){
    const productsList = document.querySelector('.productscontainer');
    productsList.innerHTML +=  `<div class="products ml-5 mr-5 p-0">
    <img class="img" src="${product.productImage}" alt="">
    <p>${product.name}</p>
    <p>${product.description}</p>
    <p>Price: ${product.price}$</p>
    <button class="AddCartButton btn btn-dark" type="button" value="${product.id}" name="button">Add to cart!</button>
    </div>`

    const AddCartButtons = document.querySelectorAll('.AddCartButton');
    Array.from(AddCartButtons).forEach(AddCartButton => {
      AddCartButton.addEventListener('click', () => {
        const cookie = localStorage.getItem('user');
        const cart =
        {
          "cartid": cookie, //Le cookie
          "productid": AddCartButton.value
        }
        fetch('http://localhost:5000/api/cart', {
          method: 'POST', // or 'PUT'
          body: JSON.stringify(cart),
          headers: new Headers({
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          })
        })
        // .then(res => res.json())
        // .then(response => console.log('Success:', response));
      })
    })
  }
});
