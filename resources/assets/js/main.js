
const wishlists = document.querySelectorAll(".wishlist-image");

function removeActiveClass() {
    wishlists.forEach((wishlist) => {
        wishlist.classList.remove("active");
    });
}

function handleClick(event) {
    const wishlist = event.currentTarget;
    removeActiveClass();
    wishlist.classList.add("active");

    const radioInput = wishlist.querySelector("input[type='radio']");
    if (radioInput) {
        radioInput.checked = true;
    }

    submitFormWithWishlistId(event);
}

wishlists.forEach((wishlist) => {
    wishlist.addEventListener("click", handleClick);
});

function submitFormWithWishlistId(event) {
    event.preventDefault();
    const form = document.getElementById("wishlistForm");
    if (form) {
        form.submit();
    }
}

const selectAllCheckbox = document.getElementById("IdsAllItems");
const otherCheckboxes = document.querySelectorAll(
    ".form-check-input:not(#IdsAllItems)"
);

function handleSelectAllClick() {
    const isChecked = selectAllCheckbox.checked;
    otherCheckboxes.forEach((checkbox) => {
        checkbox.checked = isChecked;
    });
}

selectAllCheckbox.addEventListener("click", handleSelectAllClick);

/* document.addEventListener("DOMContentLoaded", function () {
    const modalButtons = document.querySelectorAll(".wishlist-button");
    modalButtons.forEach((button) => {
        button.addEventListener("click", (event) => {
            const modalTarget = button.getAttribute("data-bs-target");
            const id = modalTarget.split("-")[1];
            const modalTitleElement = document.getElementById("modalTitle");
            const modalIdElement = document.getElementById("modalId");
        });
    });
}); */
