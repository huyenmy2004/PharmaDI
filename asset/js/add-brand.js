document.addEventListener("DOMContentLoaded", function () {
    const addBrandForm = document.getElementById("add-brand-form");

    addBrandForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const brandNameInput = document.getElementById("brand-name");
        const brandDescriptionInput = document.getElementById("brand-description");

        const brandName = brandNameInput.value;
        const brandDescription = brandDescriptionInput.value;

        // Gọi hàm xử lý thêm sản phẩm mới ở đây
        addNewBrand(brandName, brandDescription);

        // Xóa dữ liệu trong form sau khi thêm thành công
        brandNameInput.value = "";
        brandDescriptionInput.value = "";
    });
});

function addNewBrand(name, description) {
    // Tương tự như trong ví dụ trước, bạn có thể thêm sản phẩm mới vào phần "manage-brand" ở đây.
    // Đoạn mã trong hàm này sẽ giống với mã trong ví dụ trước.
}
