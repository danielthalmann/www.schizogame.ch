const Carousel = function (items, options) {

    items.forEach((item) => {
        item.el.classList.add('absolute');
        item.el.classList.add('inset-0');
    });

    const translateClasses = ['translate-x-0', 'translate-x-full', '-translate-x-full'];

    function setTranslate(item, translateClass) {
        item.el.classList.remove(...translateClasses);
        item.el.classList.add(translateClass);
    }

    // direction: 1 = next, -1 = previous, 0 = no animation
    function showItem(position, direction = 0) {

        position = ((position % items.length) + items.length) % items.length;

        const item = items.find((item) => item.position === position);
        if (!item) {
            throw new Error(`Item with position ${position} not found`);
        }

        const itemCurrent = items.find((item) => item.position === currentPosition);
        const animate = direction !== 0 && itemCurrent && itemCurrent !== item;

        // Hide all items except the outgoing and incoming ones
        items.forEach((other) => {
            if (other !== item && (!animate || other !== itemCurrent)) {
                other.el.classList.add('hidden');
            }
        });

        if (animate) {
            // Place the incoming item on the correct side without transition
            item.el.style.transition = 'none';
            setTranslate(item, direction > 0 ? 'translate-x-full' : '-translate-x-full');
            item.el.classList.remove('hidden');
            item.el.offsetWidth; // force reflow so the starting position is applied
            item.el.style.transition = '';

            // Slide the outgoing item out on the opposite side
            setTranslate(itemCurrent, direction > 0 ? '-translate-x-full' : 'translate-x-full');
        }

        // Show the selected item
        setTranslate(item, 'translate-x-0');
        item.el.classList.remove('hidden');

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
        currentPosition = showItem(currentPosition + 1, 1);
        if (typeof options.onNext === 'function') {
            options.onNext(currentPosition);
        }
    });
    
    options.prevEl?.addEventListener('click', () => {                 
        currentPosition = showItem(currentPosition - 1, -1);
        if (typeof options.onPrev === 'function') {
            options.onPrev(currentPosition);
        }
    });

    if (options.indicators && options.indicators.items) {
        options.indicators.items.forEach((indicator) => {
            indicator.el.addEventListener('click', () => {
                currentPosition = showItem(indicator.position, Math.sign(indicator.position - currentPosition));
            });
        });
    }

    let timerId = null;

    function startTimer() {
        if (options.interval && options.interval > 0) {
            timerId = setInterval(() => {
                currentPosition = showItem(currentPosition + 1, 1);
            }, options.interval);
        }
    }
    function stopTimer() {
        if (timerId) {
            clearInterval(timerId);
            timerId = null;
        }
    }

    if (options.interval && options.interval > 0 && options.autoPauseOnHover !== false) {
        carouselElement.addEventListener('mouseenter', stopTimer);
        carouselElement.addEventListener('mouseleave', startTimer);
    }

    startTimer();

    return this;

}


const carouselElement = document.getElementById('carousel');

if (!carouselElement) {
    console.info('Carousel element not found');
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
        defaultPosition: 0,
        interval: 8000,
        autoPauseOnHover: false,

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


