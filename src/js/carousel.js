const Carousel = function (items, options) {

    items.forEach((item) => {
        item.el.classList.add('absolute');
        item.el.classList.add('inset-0');
    });

    function showItem(position) {

        if (position < 0) {
            position = items.length - 1;
        }

        position = position % items.length;

        const item = items.find((item) => item.position === position);
        const itemPrev = items.find((item) => item.position === (position - 1 + items.length) % items.length);
        const itemNext = items.find((item) => item.position === (position + 1) % items.length);
        if (!item || !itemPrev || !itemNext) {
            throw new Error(`Item with position ${position} not found`);
        }

        // Hide all items
        items.forEach((item) => {
            item.el.classList.add('hidden');
            item.el.classList.remove('translate-x-0');
            item.el.classList.remove('translate-x-full');
            item.el.classList.remove('-translate-x-full');
            item.el.classList.remove('z-30');
            item.el.classList.remove('z-20');
            item.el.classList.remove('z-10');
        });

//        itemPrev.el.classList.add('-translate-x-full');
//        item.el.classList.add('translate-x-0');
//        itemNext.el.classList.add('translate-x-full');
        
        if (position + items.length > items.length + currentPosition) {
            itemPrev.el.classList.add('-translate-x-full');
            item.el.classList.add('translate-x-0');
            

            itemPrev.el.classList.add('z-30');
            item.el.classList.add('z-20');
            itemNext.el.classList.add('z-10');
        } else {
            
            item.el.classList.add('translate-x-0');
            itemNext.el.classList.add('translate-x-full');

            itemPrev.el.classList.add('z-10');
            item.el.classList.add('z-20');
            itemNext.el.classList.add('z-30');
        }        

        // Show the selected item
        itemPrev.el.classList.remove('hidden');
        item.el.classList.remove('hidden');
        itemNext.el.classList.remove('hidden');
        
        // Update indicators
        if (options.indicators && options.indicators.items) {
            options.indicators.items.forEach((indicator) => {
                if (indicator.position === position) {
                    indicator.el.classList.add(...options.indicators.activeClasses.split(' '));
                    indicator.el.classList.remove(...options.indicators.inactiveClasses.split(' '));
                } else {
                    indicator.el.classList.remove(...options.indicators.activeClasses.split(' '));
                    indicator.el.classList.add(...options.indicators.inactiveClasses.split(' '));
                }
            });
        }

        // Call onChange callback
        if (typeof options.onChange === 'function') {
            options.onChange(position);
        }

        return position;
    }

    let currentPosition = options.defaultPosition || 0;
    
    currentPosition = showItem(currentPosition);

    options.nextEl?.addEventListener('click', () => {
        currentPosition = showItem(currentPosition + 1);
        if (typeof options.onNext === 'function') {
            options.onNext(currentPosition);
        }
    });
    
    options.prevEl?.addEventListener('click', () => {                 
        currentPosition = showItem(currentPosition - 1);
        if (typeof options.onPrev === 'function') {
            options.onPrev(currentPosition);
        }
    });

    if (options.indicators && options.indicators.items) {
        options.indicators.items.forEach((indicator) => {
            indicator.el.addEventListener('click', () => {
                currentPosition = showItem(indicator.position);
            });
        });
    }

    return this;

}


const carouselElement = document.getElementById('carousel');

if (!carouselElement) {
    throw new Error('Carousel element not found');
} else {

    const items = [];

    carouselElement.querySelectorAll('[data-carousel-item]').forEach((item, index) => {
        items.push({
            position: index,
            el: item,
        });
    });

    const indicatorItems = [];

    carouselElement.querySelectorAll('[data-carousel-slide-to]').forEach((item, index) => {
        indicatorItems.push({
            position: index,
            el: item,
        });
    });

    // options with default values
    const options = {
        carouselElement: carouselElement,
        defaultPosition: 1,
        interval: 3000,

        indicators: {
            activeClasses: 'bg-white',
            inactiveClasses:
                'bg-white/50 hover:bg-white',
            items: indicatorItems,
        },
        nextEl : carouselElement.querySelector('[data-carousel-next]'),
        prevEl : carouselElement.querySelector('[data-carousel-prev]'),
        // callback functions
        onNext: () => {
            console.log('next slider item is shown');
        },
        onPrev: () => {
            console.log('previous slider item is shown');
        },
        onChange: () => {
            console.log('new slider item has been shown');
        },
    };

    const carousel = new Carousel(items, options);
    
}


