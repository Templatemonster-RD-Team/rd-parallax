<h2 class="item1">FAQ: Вопросы и Ответы</h2>

<h5>
    Данная страница содержит ответы на самые частозадаваемые вопросы:
</h5>


<h5>
    <strong>
        У меня подергиваются слои параллакса при скроле. Что делать?
    </strong>
</h5>
<p>
    Скорее всего вы расположили сцену параллакса внутри секции с CSS Transform. Паралакс работает на основе
    Fixed отображения (position: fixed) для достижения 60fps. В случае его расположения внутри секции с заданным
    CSS Transform, в большинстве браузеров position: fixed начинает вести себя как position: absolute. С этим,
    к сожалению, ничего не поделаешь. Просто постарайтесь избегать расположения параллакса в секциях с CSS Transform
</p>

<h5>
    <strong>
        В IE не отображается часть HTML слоев параллакса. Как исправить?
    </strong>
</h5>
<p>
    Скорее всего вы расположили отдельные слои параллакса внутри блоков с заданным position: relative. К сожалению,
    браузер IE устроен так, что, при использовании связки absolute -> relative -> fixed и CSS Clip, расчет позиции
    блоков выполняется не правильно в самом браузере. Просто расположите свои relative блоки внутри слоев параллакса, а
    не наоборот.
</p>

<h5>
    <strong>
        Почему Parallax не работает в iOS Chrome?
    </strong>
</h5>
<p>
    Как это обычно бывает, реализация бразуеров отличается от платформы к платформе. В iOS Chrome устроен таким образом,
    что, при скролее страницы с помощью тача, полностью блокируется определение всех js событий. В связи с чем,
    отображение
    статичных элементов является более предпочтительным.
</p>

<h5>
    <strong>
        IE показывает достаточно слабую производительность при использовании параллакса.
    </strong>
</h5>
<p>
    Скорее всего, разработчики данного браузера попросту не расчитывает на то обилие интерактивности на странице,
    который принес нам
    веб на данный момент. Слабая производительность в данном браузере связана непосредтсвенно с его внутренней
    реализацией, и с этим
    ничего не поделаешь. Данный браузер показывает слабую произволдительность даже при использовании простой анимации,
    не говоря уже о
    сложных параллакс сценах.
</p>

