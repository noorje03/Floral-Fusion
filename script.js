// Sample data for products
var products = [
    { id: 1, name: "white bouquet", price: 100.99, count: 0, image: "./images/flower1.jpg" },
    { id: 2, name: "Red bouquet", price: 109.99, count: 0, image: "./images/flower2.jpg" },
    { id: 3, name: "White flowers", price: 180.99, count: 0, image: "./images/flower3.jpg" },
    { id: 4, name: "colorful bouquet", price: 170.99, count: 0, image: "./images/flower4.jpg" },
    { id: 5, name: "colorful bouquet", price: 300.99, count: 0, image: "./images/flower5.jpg" },
    { id: 6, name: "pink bouquet", price: 75.99, count: 0, image: "./images/flower6.jpg" },
    { id: 7, name: "light pink bouquet", price: 200.99, count: 0, image: "./images/flower7.jpg" },
    { id: 8, name: "new colorful bouquet", price: 150.99, count: 0, image: "./images/flower8.jpg" },
    { id: 9, name: "purple and yellow", price: 200.99, count: 0, image: "./images/flower9.jpg" }
];

// Function to display products in the table
function displayProducts() {
    var tableBody = document.getElementById("selectedItems");
    tableBody.innerHTML = ''; // Clear previous entries
    products.sort((a, b) => b.count - a.count); // Sort products by count

    var totalPrice = 0;
    products.forEach(function(product) {
        var row = tableBody.insertRow();
        row.insertCell(0).textContent = product.id;

        var imgCell = row.insertCell(1);
        var img = document.createElement("img");
        img.src = product.image;
        img.alt = product.name;
        img.width = 50;
        img.height = 50;
        imgCell.appendChild(img);

        row.insertCell(2).textContent = product.name;
        row.insertCell(3).textContent = product.price;

        var countCell = row.insertCell(4);
        var countInput = document.createElement("input");
        countInput.type = "number";
        countInput.min = "0";
        countInput.value = product.count;
        countInput.dataset.productId = product.id;
        countInput.addEventListener("change", function(event) {
            var productId = parseInt(event.target.dataset.productId);
            var selectedProduct = products.find(p => p.id === productId);
            selectedProduct.count = parseInt(event.target.value);
            updateTotalPrice();
        });
        countCell.appendChild(countInput);
        totalPrice += product.price * product.count;
    });

    document.getElementById("totalPrice").textContent = "Total Price: $" + totalPrice.toFixed(2);
}

// Function to update total price
function updateTotalPrice() {
    var totalPrice = products.reduce((total, product) => total + product.price * product.count, 0);
    document.getElementById("totalPrice").textContent = "Total Price: $" + totalPrice.toFixed(2);
    document.getElementById("forcard").value = totalPrice.toFixed(2);
}

// Function to show modal
function showModalConfirm() {
    var modal = document.getElementById("modal");
    var totalPrice = products.reduce((total, product) => total + product.price * product.count, 0);
    document.getElementById("totalPriceModal").textContent = "Total Price: $" + totalPrice.toFixed(2);
    modal.style.display = "block";
}

// Function to close modal
function closeModalConfirm() {
    var modal = document.getElementById("modal");
    modal.style.display = "none";
    document.getElementById('purchaseForm').submit(); 
}

// Function to show modal thank you
function showModalThankYou() {
    var modal = document.getElementById("modalDone");
    var totalPrice = products.reduce((total, product) => total + product.price * product.count, 0);
    document.getElementById("totalPriceModal").textContent = "Total Price: $" + totalPrice.toFixed(2);
    modal.style.display = "block";
}

// Function to close modal thank you and redirect to the homepage
function closeModalThankYou() {
    console.log(document.getElementById("forcard").value);
    var modal = document.getElementById("modalDone");
    modal.style.display = "none";
    document.getElementById('purchaseForm').submit(); // Suhaib was here

  }
  


// Call the function to display products when the page loads
window.onload = function() {
    displayProducts();

    // Add event listener to the buy button
    document.getElementById("buyButton").addEventListener("click", function() {
        showModalConfirm();
    });

    // Add event listener to the close button in the confirmation modal
    document.querySelector("#modal .close-button").addEventListener("click", function() {
        closeModalConfirm();
    });

    // Add event listener to the form submission in the confirmation modal
    document.getElementById("purchaseForm").addEventListener("submit", function(event) {
        event.preventDefault();
        // Check if the phone number starts with "07" and has 10 digits
        var phoneNumber = document.getElementById("phone").value;
        if (/^07\d{8}$/.test(phoneNumber)) {
            showModalThankYou();
        } else {
            alert("Please enter a valid phone number starting with '07' and having 10 digits.");
        }
        console.log(phoneNumber);
    });

    // Add event listener to the close button in the thank you modal
    document.querySelector("#modalDone .close-button").addEventListener("click", function() {
        closeModalThankYou();
    });
};
