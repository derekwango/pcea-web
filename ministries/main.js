document.addEventListener('DOMContentLoaded', function() {
    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        
        header.addEventListener('click', () => {
            const isOpen = item.classList.contains('active');
            // Close all accordion items
            accordionItems.forEach(i => i.classList.remove('active'));
            // If the clicked item wasn't already open, open it
            if (!isOpen) {
                item.classList.add('active');
            }
        });
    });
});
