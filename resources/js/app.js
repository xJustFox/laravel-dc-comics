import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteSubmitButton = document.querySelectorAll('.delete-comic button[type="submit"]');

deleteSubmitButton.forEach(elem => {
    elem.addEventListener('click', function (event) {
        event.preventDefault();

        const title = elem.getAttribute('data-comic-title');

        const modal = document.getElementById('delete_comic_modal');

        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();

        const modalTitle = modal.querySelector('#modal-item-title');
        modalTitle.textContent = title;

        const buttonDelete = modal.querySelector('button.buttonDelete');
        buttonDelete.addEventListener('click', function(){
            elem.parentElement.submit();
        })
    })
});
