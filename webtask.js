// Scroll animation
const animatedElements = document.querySelectorAll('.animate__animated');

function showOnScroll() {
    animatedElements.forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight - 50) {
            el.classList.add('animate__fadeInUp');
        } else {
            el.classList.remove('animate__fadeInUp');
        }
    });
}

// Looping effect
window.addEventListener('scroll', showOnScroll);
window.addEventListener('load', showOnScroll);

// Product Data
const products = [
    { id: 1, name: "Wireless Earphones", price: 29.99, img: "https://source.unsplash.com/400x300/?earphones" },
    { id: 2, name: "Fast Charger", price: 19.99, img: "https://source.unsplash.com/400x300/?charger" },
    { id: 3, name: "Smart Watch", price: 99.99, img: "https://source.unsplash.com/400x300/?smartwatch" },
    { id: 4, name: "Bluetooth Speaker", price: 49.99, img: "https://source.unsplash.com/400x300/?speaker" },
    { id: 5, name: "Gaming Headphones", price: 59.99, img: "https://source.unsplash.com/400x300/?gamingheadset" },
    { id: 6, name: "Power Bank", price: 39.99, img: "https://source.unsplash.com/400x300/?powerbank" }
  ];
  
  let cart = [];
  
  // Load Products
  function loadProducts(productArray) {
    const productList = document.getElementById('product-list');
    productList.innerHTML = '';
  
    productArray.forEach(product => {
      productList.innerHTML += `
        <div class="col-md-4 animate__animated animate__fadeInUp">
          <div class="card shadow">
            <img src="${product.img}" class="card-img-top" alt="${product.name}">
            <div class="card-body text-center">
              <h5 class="card-title">${product.name}</h5>
              <p class="card-text">$${product.price.toFixed(2)}</p>
              <button class="btn btn-primary" onclick="addToCart(${product.id})">Add to Cart</button>
            </div>
          </div>
        </div>
      `;
    });
  }
  
  loadProducts(products);
  
  // Add to Cart
  function addToCart(id) {
    const product = products.find(p => p.id === id);
    cart.push(product);
    document.getElementById('cart-count').innerText = cart.length;
  }
  
  // Cart Popup
  document.getElementById('cartBtn').addEventListener('click', () => {
    let cartModal = new bootstrap.Modal(document.getElementById('cartModal'));
    let cartItems = document.getElementById('cart-items');
  
    if (cart.length === 0) {
      cartItems.innerHTML = 'Your cart is empty.';
    } else {
      cartItems.innerHTML = cart.map(item => `<p>${item.name} - $${item.price.toFixed(2)}</p>`).join('');
    }
  
    cartModal.show();
  });
  
  // Sort Products
  document.getElementById('sort-products').addEventListener('change', function() {
    const value = this.value;
    if (value === "low") {
      const sorted = [...products].sort((a, b) => a.price - b.price);
      loadProducts(sorted);
    } else if (value === "high") {
      const sorted = [...products].sort((a, b) => b.price - a.price);
      loadProducts(sorted);
    } else {
      loadProducts(products);
    }
  });
  // Product loading and cart already exists
// New Scroll Reveal Animation
function revealOnScroll() {
    const reveals = document.querySelectorAll(".reveal");

    for (let i = 0; i < reveals.length; i++) {
        const windowHeight = window.innerHeight;
        const elementTop = reveals[i].getBoundingClientRect().top;
        const elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", revealOnScroll);
