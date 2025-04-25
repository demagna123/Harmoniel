document.addEventListener("DOMContentLoaded", function () {
  // Filtrage des produits
  const filterButtons = document.querySelectorAll(".filter-btn");
  const products = document.querySelectorAll(".produit");

  filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
      // Active le bouton cliqué
      filterButtons.forEach((btn) => btn.classList.remove("active"));
      button.classList.add("active");

      const filter = button.textContent.toLowerCase();

      // Filtre les produits
      products.forEach((product) => {
        if (filter === "tous" || product.dataset.category.includes(filter)) {
          product.style.display = "block";
        } else {
          product.style.display = "none";
        }
      });
    });
  });

  // Panier fonctionnel
  const addToCartButtons = document.querySelectorAll(".add-to-cart");
  const cartCount = document.querySelector(".cart-count");
  let count = 0;

  addToCartButtons.forEach((button) => {
    button.addEventListener("click", () => {
      count++;
      cartCount.textContent = count;

      // Animation feedback
      button.innerHTML = '<i class="fas fa-check"></i>';
      setTimeout(() => {
        button.innerHTML = '<i class="fas fa-cart-plus"></i>';
      }, 1000);
    });
  });
});
