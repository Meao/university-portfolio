# [Marina Krivcon University Portfolio](https://meao.github.io/university-portfolio/)

## Задание 1. Юникод
Ниже находится рисунок с текстом на тибетском языке. Это один слог и одно слово из двух слогов. Последовательно выполните следующие три шага:
1. Пользуясь, например, вики-справкой, распознайте изображённые буквы.
2. Наберите эти буквы с помощью Юникода.
Например,  '\u0f7e' - это представление анусвары (кружочка) в JavaScript. Его код 0f7e
Или, например, греческая альфа: 03b1. См. гифку ниже рисунка 
Код	Символ	Название	HTML 16-чный	10-чный
U+0F00	ༀ	tibetan syllable om	&#xF00;	&#3840;
https://www.branah.com/unicode-converter
\u0f68\u0f7c\u0f7e\u0f0d\u0f0d 
\u0f42\u0f53\u0f66\u0f0b\u0f5a\u0f74\u0f63\u0f0b\u0f0d
3. Переведите хотя бы второе слово с использованием онлайн-словаря, скорее всего tibetan-english
ཨོཾ་	OT	[3146] 1) sku rdo rje sogs mtshon don mang po/ ... 2) sngags kyi mgo 'dren byed/ ...
RY	the seed syllable for the Body of all buddhas
གནས་ཚུལ་	JH-ENG	[abide-way]; mode of subsistence; way of subsistence; way of being; mode of existence; way of things; state of things; mode of abiding
OT	[1551] yul dang/ bya ba/ dngos po/ dus tshod sogs kyi babs sam yong stangs dang chags stangs/ ... dngos yod gnas tshul/ ... gnas tshul ngo ma/ ... gnas tshul dmigs bsal can/ ... gnas tshul rgyun ldan/ ... gnas tshul thor bu/ ... gnas tshul hril po/ ...
JH-ST	mtshan nyid/ rang bzhin/ gnas lugs/ yin lugs/ sdod lugs/ shis lugs/ yin tshul/ yin tshod/ gnas tshod/
JV, IW, RY	news
JV	how things are, manner of being, situation, condition, circumstances, existential self, reality, nature, being-in-itself, *, information, happenings, tidings, state of things, affairs, condition of life bodily or spiritually, story, account, history, *, event, situation, mode of being, manner of being, manner of existence, things that had happened, reports
IW, RB, RY	abiding mode
IW	1) [actual facts of] conditions/ circumstances/ situation, object; 2) *, information, issue; 3) * [of reality]; 4) subsistence, natural state/ mode; 5) the way it is, how things [really] are
RY	1) conditions, circumstances, situation. 2) information, *, account / statement of events. 3) * [of reality]. mode of subsistence, natural mode, actual condition, the way it is; mode of being; state. Comp. {snang tshul} the way things are, the mode of abiding. abiding condition, * [thd]. fact, reality http://www.thlib.org/reference/dictionaries/tibetan-dictionary/translate.php
4. Получившийся результат разместите в виде:
{"Ответ":"ααα"} 
{"Ответ":"ཨོཾ།། 
གནས་ཚུལ་།"} 

## Тема 1. Создание облака ключевых слов англоязычного текста по профессиональной тематике
1. Найдите текст на английском языке, посвященный разработке программных продуктов.
2. Выберите фрагмент текста (не менее 15 предложений).
3. Сделайте перевод этого фрагмента, используя две разные программы-переводчики (в качестве одной из них выберите Google Translate).
4. Выпишите незнакомые слова и определите их переводы с помощью https://www.lingvolive.com 
5. Сопоставьте переводы с результатами, выданными программами автоматического перевода.
6. Используйте инструмент построения облака слов (например, https://www.wordclouds.com/) для анализа этого текста. Выделите top-5 значимых слов текста:
7. Разместите отчёт (лог действий) в репозитории (веб-портфолио).
[отчёт (лог действий)](https://docs.google.com/document/d/1oePFJbq_rDQ6wZ3F59JbKnNqLU2QyjgjdIrKCbFYgOA/edit?usp=sharing)

## Тема 2. Создание сценария изучения онлайн-курса по иностранному языку
1. Выберите массовый открытый (публично и бесплатно доступный) курс по иностранному языку, например https://courses.edx.org/courses/coursev1:MandarinX+MX101x+3T2015/course/
2. Создайте схемы расположения материала в курсе и его learning sequence
3. Выполните несколько упражнений из состава курса
4. Примите участие в процедуре перекрестного оценивания заданий с другими участниками
5. Задайте вопрос на форуме курса о наилучшей последовательности изучения его материалов и дождитесь появления ответа; сделайте скриншот переписки.
6. Разместите отчёт (лог действий) в репозитории (веб-портфолио).
[отчёт (лог действий)](https://docs.google.com/document/d/1a5aTdBYhpP-ZuurGnn-io1bVRqx18g7T5JgULkRaOBk/edit?usp=sharing)

## Тема 3. Создание интерактивного HTML-элемента для озвучивания произношения англоязычных слов
1. Вам необходимо создать кнопку с транскрипцией английского слова, при нажатии на которую вы слышите озвучивание этого слова. Такая технология может быть эффективной для запоминания новых слов, их написания и произношения. Вот простая готовая разметка с встроенными сценарием для работы кнопки: Создайте новый борд в кодакторе и вставьте указанный код.
2. Убедитесь, что при нажатии на кнопку происходит воспроизведение звука.
3. Обратите внимание, что mp3-файл, содержащий озвучивание, и транскрипция взяты с сайта оксфордских словарей.
4. Сделайте по указанному образцу несколько подобных кнопок со словами, которые относятся к вашему глоссарию (профессиональному тезаурусу). помещается в поле типа «рисунок» в виде снэпшота
5. Примените каскадные стили для создания цвето-шрифтового оформления:
6. Разместите отчёт (лог действий) в репозитории (веб-портфолио). 
[отчёт](https://kodaktor.ru/audiobutton_12ae8)
[лог действий](https://github.com/Meao/university-portfolio/blob/master/web/audiobuttonoxford.png)

## Тема 4. Разработка сценария использования мобильного приложения Sounds of Speech
1. Установите приложение Sounds of Speech
2. Составьте полный список его разделов и функций
3. Сделайте аннотированные скриншоты экранов приложения
4. Опишите последовательность действий, необходимых для тренировки произношения дифтонгов с помощью данного приложения.
5. Разместите отчёт (лог действий) в репозитории (веб-портфолио).
[отчёт (лог действий)](https://docs.google.com/document/d/13mYVTmrUjvZK2VM9yPVphc1k-lYzBN676owzaB1Amqk/edit?usp=sharing)

2.  задания  инвариантной самостоятельной работы

1. [отчёт (лог действий)](https://docs.google.com/document/d/1oePFJbq_rDQ6wZ3F59JbKnNqLU2QyjgjdIrKCbFYgOA/edit?usp=sharing)
1. Создание интеллект-карты и облака тегов по теме «Изучение лексики с помощью электронных словарей»
2. Формирование отчета по выполнению задания (тема 1) и размещение его в портфолио.
2. [отчёт (лог действий)](https://docs.google.com/document/d/1a5aTdBYhpP-ZuurGnn-io1bVRqx18g7T5JgULkRaOBk/edit?usp=sharing)
1. Составление схемы онлайн-курса по иностранному языку
2. Формирование отчета по выполнению задания (тема 2) и размещение его в портфолио.
3.
1. Создание транскрипции иноязычных слов с помощью символов Unicode и интерактивного элемента «Аудиокнопка» [отчёт](https://kodaktor.ru/audiobutton_12ae8)
2. Создание анимационного ролика, объясняющего построение вопросительного предложения в английском языке
3. Формирование отчета по выполнению задания (тема 3) и размещение его в портфолио.
4. [отчёт (лог действий)](https://docs.google.com/document/d/13mYVTmrUjvZK2VM9yPVphc1k-lYzBN676owzaB1Amqk/edit?usp=sharing)
1. Составление схемы мобильного приложения по изучению фонетики иностранного языка и алгоритма работы с ним
2. Формирование отчета по выполнению задания (тема 4) и размещение его в портфолио.

3.  задания  вариантной самостоятельной работы 

1.
1. Разработка библиографического списка иноязычной литературы в соответствии с требованиями ГОСТ и примеров цитирования
2. Создание и размещение в репозитории автоматизированного перевода раздела документации инструмента создания облака тегов
2.
1. Разработка аннотированного списка электронных курсов по английскому языку на платформе Coursera [отчёт](https://docs.google.com/document/d/16CYj8r8v5zRKRCp7xeC-wVMJX5R_yt_PZvO6Co_rdGc/edit?usp=sharing)
2. Разработка аннотированного списка электронных курсов по иностранным языкам на отечественных платформах электронного обучения
3.
1. Подготовка презентации по системе кодирования Unicode [отчёт](https://drive.google.com/file/d/1BYQRLOVKqWVSSRqXpL8exGO4Krq9CLuI/view?usp=sharing)
2. Подготовка репозитория кода на английском языке
3. Создание интерактивного элемента на основе технологии Drag and drop
4. Запись скринкаста по вставке интерактивных элементов в страницу социальной сети
4.
1. Разработка аннотированного списка мобильных приложений по английскому языку [отчёт](https://docs.google.com/document/d/1jnzJy8Z2c2PNemTAvzyYSwWENX9Vv47O_t7QIFzJkiA/edit?usp=sharing)
2. Подготовка и размещение в репозитории аннотированного списка русскоязычных мобильных приложений по изучению иностранных языков

https://kodaktor.ru/?!=nodelist_18d59
