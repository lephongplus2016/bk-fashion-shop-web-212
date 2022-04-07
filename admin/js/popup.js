// Scripts for confirm, popup, alert v..v. maybe :> if I can
const html_delete = `
        <div class="confirm">
            <div class="confirm__window">
                <div class="confirm__titlebar">
                    <span class="confirm__title">Delete</span>
                    <button class="confirm__close">&times;</button>
                </div>
                <div class="confirm__content">Bạn có chắc chắn muốn xóa dòng này?</div>
                <div class="confirm__buttons">
                    <button class="confirm__button confirm__button--ok confirm__button--fill">OK</button>
                    <button class="confirm__button confirm__button--cancel">Cancel</button>
                </div>
            </div>
        </div>
    `;

function openDeleteConfirm(id){
    const template = document.createElement('template');
    template.innerHTML = html_delete;

    // Elements
    const confirmEl = template.content.querySelector('.confirm');
    const btnClose = template.content.querySelector('.confirm__close');
    const btnOk = template.content.querySelector('.confirm__button--ok');
    const btnCancel = template.content.querySelector('.confirm__button--cancel');

    confirmEl.addEventListener('click', e => {
        if (e.target === confirmEl) {
            closeConfirm(confirmEl);
            // Cancel action
        }
    });

    btnOk.addEventListener('click', () => {
        closeConfirm(confirmEl);
        // OK action
        location.assign(`?deleteId=${id}`);
    });

    [btnCancel, btnClose].forEach(el => {
        el.addEventListener('click', () => {
            closeConfirm(confirmEl);
            // Cancel action
        });
    });

    document.body.appendChild(template.content);
}

function closeConfirm(confirmEl){
    confirmEl.addEventListener('animationend', () => {
        document.body.removeChild(confirmEl);
    });
    confirmEl.classList.add('confirm--close');
}