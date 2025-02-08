
window.addEventListener('click', (event) => {
    
    target = event.target;
    while (target != null && target != window.document)
    {
        if ('toggle' in target.dataset) {

            menu = document.getElementById(target.dataset.toggle);
            if (menu != null)
            {
                if (menu.classList.contains('hidden')) {
                    menu.classList.remove('hidden');
                } else {
                    menu.classList.add('hidden');
                }
            }
            break;
        }
        target = target.parentElement;
    }

});

