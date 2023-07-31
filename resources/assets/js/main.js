
  // Get all wishlist's items 
  const wishlists = document.querySelectorAll(".wishlist-image");

  // Function for removing the "active" class from all neighboring elements
  function removeActiveClass() {
    wishlists.forEach((wishlist) => {
      wishlist.classList.remove("active");
    });
  }

  // Function for processing a click on a wishlist item
  function handleClick(event) {
    const wishlist = event.currentTarget;

    // Removing the "active" class from all neighboring elements
    removeActiveClass();

    // Adding the "active" class to the current element
    wishlist.classList.add("active");

    // Check the checkbox that is a child of the current element
    const checkbox = wishlist.querySelector("input[type='checkbox']");

    if (checkbox) {
      checkbox.checked = true;

      // Uncheck the checkboxes of other elements
      const otherWishlists = document.querySelectorAll(".wishlist:not(.active)");
      otherWishlists.forEach((otherWishlist) => {
        const otherCheckbox = otherWishlist.querySelector("input[type='checkbox']");
        if (otherCheckbox) {
          otherCheckbox.checked = false;
        }
      });
    }
  }

  // Add a click handler for each wishlist item
  wishlists.forEach((wishlist) => {
    wishlist.addEventListener("click", handleClick);
  });

  // get a link to the "Select all" checkbox
  const selectAllCheckbox = document.getElementById("IdsAllItems");

  // Get all other checkboxes on the page (excluding the "Select all" checkbox)
  const otherCheckboxes = document.querySelectorAll(".form-check-input:not(#IdsAllItems)");

  // Function for processing a click on the "Select all" checkbox
  function handleSelectAllClick() {
    // Get the state of the "Select all" checkbox
    const isChecked = selectAllCheckbox.checked;

    // Set/uncheck all other checkboxes according to the "Select all" state
    otherCheckboxes.forEach((checkbox) => {
      checkbox.checked = isChecked;
    });
  }

  // Add a click handler for the "Select all" checkbox
  selectAllCheckbox.addEventListener("click", handleSelectAllClick);


  document.addEventListener('DOMContentLoaded', function() {
    // Находим все кнопки, которые вызывают модальное окно
    const modalButtons = document.querySelectorAll('.wishlist-button');

    // Перебираем кнопки и добавляем обработчик события на клик
    modalButtons.forEach((button) => {
        button.addEventListener('click', (event) => {
            // Получаем ID из атрибута data-bs-target кнопки
            const modalTarget = button.getAttribute('data-bs-target');
            const id = modalTarget.split('-')[1]; // Извлекаем ID из атрибута

            // Находим элемент с ID и обновляем содержимое модального окна
            const modalTitleElement = document.getElementById('modalTitle');
            const modalIdElement = document.getElementById('modalId');
           
        });
    });
});

  
  
  
  
  




