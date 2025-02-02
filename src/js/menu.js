
window.addEventListener('click', (event) => {
    
    target = event.target;
    while (target != null && target != window.document)
    {
        if (target.id == 'h-menu') {

            menu = document.getElementById('mobile-menu');
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

    target = event.target;
    while (target != null && target != window.document)
    {
        if (target.id == 'mobile-menu') {

            menu = document.getElementById('mobile-menu');
            if (menu != null)
            {
                menu.classList.add('hidden');
            }
            break;
        }
        target = target.parentElement;
    }    

});

