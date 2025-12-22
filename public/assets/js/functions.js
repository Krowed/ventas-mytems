function notify(message, type = 'info', duration = 3000) {
    const container = document.getElementById('wa-toast-container');

    const toast = document.createElement('div');
    toast.className = `wa-toast ${type}`;

    const text = document.createElement('span');
    text.textContent = message;

    toast.appendChild(text);
    container.appendChild(toast);

    // ⏳ SALIDA CON BARRIDO
    setTimeout(() => {
        toast.classList.add('is-hiding');

        toast.addEventListener(
            'animationend',
            () => toast.remove(),
            { once: true }
        );
    }, duration);
}

// Helpers PRO
notify.success = (msg) => notify(msg, 'success');
notify.warning = (msg) => notify(msg, 'warning');
notify.error = (msg) => notify(msg, 'error');
notify.info = (msg) => notify(msg, 'info');