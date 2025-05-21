// Get references to the modal, download button, close button, search bar, and sermon list
const modal = document.getElementById("sermonModal");
const downloadButton = document.getElementById("downloadButton");
const closeButton = document.querySelector(".close-button");
const searchBar = document.getElementById("searchBar");
const sermonList = document.getElementById("sermonList");
const sermons = sermonList.getElementsByTagName("li");

// Function to show the modal and prevent body scrolling
function showModal() {
    modal.style.display = "flex";
    document.body.classList.add("no-scroll");
}

// Function to hide the modal and allow body scrolling
function hideModal() {
    modal.style.display = "none";
    document.body.classList.remove("no-scroll");
}

// Show modal only when download button is clicked
downloadButton.addEventListener("click", showModal);

// Hide modal when close button is clicked
closeButton.addEventListener("click", hideModal);

// Hide modal if the user clicks outside the modal content
window.addEventListener("click", (event) => {
    if (event.target === modal) {
        hideModal();
    }
});

// Filter the sermon list based on the search input
searchBar.addEventListener("input", () => {
    const searchText = searchBar.value.toLowerCase();
    
    for (const sermon of sermons) {
        const title = sermon.textContent.toLowerCase();
        
        // Show or hide each sermon based on the search text
        if (title.includes(searchText)) {
            sermon.style.display = ""; // Show the item
        } else {
            sermon.style.display = "none"; // Hide the item
        }
    }
});

document.getElementById('searchBar').addEventListener('input', function () {
    let filter = this.value.toUpperCase();
    let list = document.getElementById('sermonList');
    let items = list.getElementsByTagName('li');
    
    for (let i = 0; i < items.length; i++) {
        let text = items[i].textContent || items[i].innerText;
        items[i].style.display = text.toUpperCase().includes(filter) ? '' : 'none';
    }
});

