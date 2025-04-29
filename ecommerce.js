// --- Product Data ---
const products = [
    {
      id: 1,
      name: "Pro Wireless Earbuds",
      category: "electronics",
      price: 129.99,
      description: "Experience crystal clear sound and unmatched comfort with our Pro Wireless Earbuds.",
      image: "https://images.pexels.com/photos/3780681/pexels-photo-3780681.jpeg",
      stock: 58,
      featured: true
    },
    {
      id: 2,
      name: "Smart Watch Series 5",
      category: "electronics",
      price: 299.99,
      description: "Stay connected and monitor your health with the Smart Watch Series 5.",
      image: "https://images.pexels.com/photos/437037/pexels-photo-437037.jpeg",
      stock: 42,
      featured: true
    },
    {
      id: 3,
      name: "Premium Laptop Backpack",
      category: "accessories",
      price: 79.99,
      description: "Carry your tech in style with our Premium Laptop Backpack.",
      image: "https://images.pexels.com/photos/1546003/pexels-photo-1546003.jpeg",
      stock: 74,
      featured: false
    },
    {
      id: 4,
      name: "Slim Minimalist Wallet",
      category: "accessories",
      price: 39.99,
      description: "Streamline your pocket with our Slim Minimalist Wallet.",
      image: "https://images.pexels.com/photos/2079458/pexels-photo-2079458.jpeg",
      stock: 128,
      featured: false
    }
  ];
  
  // --- Cart Functionality ---
  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  
  function updateCart() {
    const cartCount = document.querySelector('.cart-count');
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
  
    // Update cart count
    cartCount.textContent = cart.reduce((total, item) => total + item.quantity, 0);
  
    // Update cart items
    if (cartItems) {
      cartItems.innerHTML = cart.map(item => `
        <div class="cart-item">
          <img src="${item.image}" alt="${item.name}">
          <div class="cart-item-content">
            <h6 class="cart-item-title">${item.name}</h6>
            <div class="cart-item-price">$${(item.price * item.quantity).toFixed(2)}</div>
            <div class="cart-item-quantity">
              <button onclick="updateQuantity(${item.id}, ${item.quantity - 1})">-</button>
              <span>${item.quantity}</span>
              <button onclick="updateQuantity(${item.id}, ${item.quantity + 1})">+</button>
            </div>
          </div>
          <button class="cart-item-remove" onclick="removeFromCart(${item.id})">&times;</button>
        </div>
      `).join('');
    }
  
    // Update cart total
    if (cartTotal) {
      const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
      cartTotal.textContent = `$${total.toFixed(2)}`;
    }
  
    // Save cart
    localStorage.setItem('cart', JSON.stringify(cart));
  }
  
  function addToCart(product) {
    const existingItem = cart.find(item => item.id === product.id);
  
    if (existingItem) {
      existingItem.quantity += 1;
    } else {
      cart.push({ ...product, quantity: 1 });
    }
  
    updateCart();
    showCartSidebar();
  }
  
  function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    updateCart();
  }
  
  function updateQuantity(productId, newQuantity) {
    if (newQuantity < 1) {
      removeFromCart(productId);
      return;
    }
  
    const item = cart.find(item => item.id === productId);
    if (item) {
      item.quantity = newQuantity;
      updateCart();
    }
  }
  
  // --- Cart Sidebar ---
  const cartBtn = document.querySelector('.cart-btn');
  const cartSidebar = document.getElementById('cart-sidebar');
  const overlay = document.getElementById('overlay');
  const closeCart = document.querySelector('.close-cart');
  
  function showCartSidebar() {
    cartSidebar.classList.add('active');
    overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
  
  function hideCartSidebar() {
    cartSidebar.classList.remove('active');
    overlay.classList.remove('active');
    document.body.style.overflow = '';
  }
  
  if (cartBtn) cartBtn.addEventListener('click', showCartSidebar);
  if (closeCart) closeCart.addEventListener('click', hideCartSidebar);
  if (overlay) overlay.addEventListener('click', hideCartSidebar);
  
  // --- Featured Products ---
  const featuredProductsContainer = document.getElementById('featured-products');
  
  if (featuredProductsContainer) {
    const featuredProducts = products.filter(product => product.featured);
  
    featuredProductsContainer.innerHTML = featuredProducts.map(product => `
      <div class="product-card animate-on-scroll">
        <div class="product-image">
          <img src="${product.image}" alt="${product.name}">
          ${product.stock < 30 ? `<span class="product-badge">Limited Stock</span>` : ''}
        </div>
        <div class="product-content">
          <div class="product-category">${product.category}</div>
          <h3 class="product-title">${product.name}</h3>
          <div class="product-price">$${product.price.toFixed(2)}</div>
          <button class="btn btn-primary btn-block" onclick='addToCart(${JSON.stringify(product)})'>
            Add to Cart
          </button>
        </div>
      </div>
    `).join('');
  }
  
  // --- Initialize Cart ---
  updateCart();
  
  // --- Animation: Load + Scroll ---
  
  // Animate hero section on load
  document.addEventListener('DOMContentLoaded', () => {
    const hero = document.querySelector('.hero-content');
    const heroImage = document.querySelector('.hero-image');
  
    hero?.classList.add('fade-in-left');
    heroImage?.classList.add('fade-in-right');
  });
  
  // Intersection Observer for scroll animations
  const observerOptions = {
    threshold: 0.2
  };
  
  const scrollObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        observer.unobserve(entry.target); // Only animate once
      }
    });
  }, observerOptions);
  
  // Select all animated elements
  const animatedElements = document.querySelectorAll(
    '.section-header, .product-grid, .category-card, .promo-card, .features-grid, .about, .contact, .footer, .product-card'
  );
  
  animatedElements.forEach(el => scrollObserver.observe(el));
 // Headings ka array
 const headings = [
  "Elevate Your Lifestyle with Premium Products",
  "Discover the Future of Smart Accessories",
  "Style Meets Function in Every Product",
  "Unleash Your Potential with Our Tech"
];

let index = 0;
const headingElement = document.getElementById("main-heading");

setInterval(() => {
  index = (index + 1) % headings.length; // loop back to 0
  headingElement.style.opacity = 0; // fade out
  setTimeout(() => {
    headingElement.innerHTML = headings[index]; // change text
    headingElement.style.opacity = 1; // fade in
  }, 500);
}, 3000); // Change every 3 seconds  