// получаем элементы
let tabs = document.querySelectorAll('.operations__tab');// кнопки
let tabsContainer = document.querySelector('.operations__tab-container');// контейнер с кнопками
let tabsContent = document.querySelectorAll('.operations__content');// блоки контента


tabsContainer.addEventListener('click', function(event){// вешаем обработчик на контейнер с кнопками
    // console.log( event.target );
    let clicked = event.target.closest('.operations__tab');

    if(!clicked)return;
    //console.log(clicked);

    // убираем класс активности у кнопок
    tabs.forEach(function(tab){
        tab.classList.remove('operations__tab--active');
    });

    // убираем класс активности у блоков с информацией
    tabsContent.forEach(function(content){
        content.classList.remove('operations__content--active');
    });

    // добавляем кнопке, по которой нажали класс активности
    clicked.classList.add('operations__tab--active');

    // активируем нужный контент
    // console.log( clicked.dataset.tab );

    // получаем элемент соотвектствующий дата-атрибуту
    let targetContent = document.querySelector(`.operations__content--${clicked.dataset.tab}`);
    //console.log(targetContent);

    // показываем элемент на странице
    targetContent.classList.add('operations__content--active');



});