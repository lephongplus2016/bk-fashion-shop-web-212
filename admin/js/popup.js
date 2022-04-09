// Scripts for confirm, popup, alert v..v. maybe :> if I can
html_delete='';
html_notify = '';

function setConfirmDialog(title, message){
    html_delete = `
        <div class="confirm">
            <div class="confirm__window">
                <div class="confirm__titlebar">
                    <span class="confirm__title">${title}</span>
                    <button class="confirm__close">&times;</button>
                </div>
                <div class="confirm__content">${message}</div>
                <div class="confirm__buttons">
                    <button class="confirm__button confirm__button--ok confirm__button--fill">OK</button>
                    <button class="confirm__button confirm__button--cancel">Cancel</button>
                </div>
            </div>
        </div>
    `;
}

function openDeleteConfirm(ok_act = function (){}, cancel_act = function(){}){
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
            cancel_act();
        }
    });

    btnOk.addEventListener('click', () => {
        closeConfirm(confirmEl);
        ok_act();
    });

    [btnCancel, btnClose].forEach(el => {
        el.addEventListener('click', () => {
            closeConfirm(confirmEl);
            cancel_act();
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

function setNotificationDialog(ok_message){
    html_notify = `
        <div class="confirm">
            <div class="popup__window">
                <div class="popup__img">
                    <img src="../img/404-tick.png" alt="" width="100px">
                </div>
                <div class="confirm__content">${ok_message}</div>
                <div class="popup__buttons">
                    <button type="button" class="popup__button">Xác nhận</button>
                </div>
            <div>
        </div>`;
}

function openNotification(ok_act = function (){}){
    const template = document.createElement('template');
    template.innerHTML = html_notify;

    // Elements
    const confirmEl = template.content.querySelector('.confirm');
    const btnOk = template.content.querySelector('.popup__button');

    confirmEl.addEventListener('click', e => {
        if (e.target === confirmEl) {
            closeConfirm(confirmEl);
            ok_act();
        }
    });

    btnOk.addEventListener('click', () => {
        closeConfirm(confirmEl);
        ok_act();
    });

    document.body.appendChild(template.content);
}
