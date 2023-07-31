
  // Получаем все элементы wishlist
  const wishlists = document.querySelectorAll(".wishlist-image");

  // Функция для удаления класса "active" у всех соседних элементов
  function removeActiveClass() {
    wishlists.forEach((wishlist) => {
      wishlist.classList.remove("active");
    });
  }

  // Функция для обработки клика на элемент wishlist
  function handleClick(event) {
    const wishlist = event.currentTarget;

    // Удаление класса "active" у всех соседних элементов
    removeActiveClass();

    // Добавление класса "active" к текущему элементу
    wishlist.classList.add("active");

    // Отмечаем чекбокс, который является дочерним элементом текущего элемента
    const checkbox = wishlist.querySelector("input[type='checkbox']");

    if (checkbox) {
      checkbox.checked = true;

      // Снимаем отметку чекбоксов у других элементов
      const otherWishlists = document.querySelectorAll(".wishlist:not(.active)");
      otherWishlists.forEach((otherWishlist) => {
        const otherCheckbox = otherWishlist.querySelector("input[type='checkbox']");
        if (otherCheckbox) {
          otherCheckbox.checked = false;
        }
      });
    }
  }

  // Добавляем обработчик клика для каждого элемента wishlist
  wishlists.forEach((wishlist) => {
    wishlist.addEventListener("click", handleClick);
  });

  
  
  // Получаем ссылку на чекбокс "Select all"
  const selectAllCheckbox = document.getElementById("IdsAllItems");

  // Получаем все остальные чекбоксы на странице (исключая чекбокс "Select all")
  const otherCheckboxes = document.querySelectorAll(".form-check-input:not(#IdsAllItems)");

  // Функция для обработки клика на чекбокс "Select all"
  function handleSelectAllClick() {
    // Получаем состояние чекбокса "Select all"
    const isChecked = selectAllCheckbox.checked;

    // Устанавливаем/снимаем отметку у всех остальных чекбоксов в соответствии с состоянием "Select all"
    otherCheckboxes.forEach((checkbox) => {
      checkbox.checked = isChecked;
    });
  }

  // Добавляем обработчик клика для чекбокса "Select all"
  selectAllCheckbox.addEventListener("click", handleSelectAllClick);




