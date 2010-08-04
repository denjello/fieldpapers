<h2>Об "Обходном листе"</h2>

<p>
    OpenStreetMap - вики-карта всего мира, которую может редактировать каждый. "Обходной лист" (Walking Papers) - это способ обновления OSM c помощью бумажных распечаток, которые облегчат ввод изменений полученных непосредственно на местности, и предоставляют удобный способ обмена картами с подписями. 
</p>
<p>
    "Обходной лист" - сервис, который воплощает идею использования бумажных карт ставшую реальностью после <a href="http://mike.teczno.com/notes/walking-papers.html"> первого эксперимента</a> в феврале. 
</p>

<h3>В OSM, есть три способа картировать</h3>

<p>
    Там, где какая-либо дорожная сеть в OSM отсутствует, люди устраивают так называемые "покартушки" - встречи, где они ходят, ездят на велосипедах и машинах с GPS по улицам. Треки, собираемые с помощью навигаторов, потом используются для того, чтобы по ним отрисовать разного рода дороги. 
</p>
<p>
    Неправильно нанесенные данные можно потом исправить не выходя из дома, используя один из редакторов данных OSM и спутниковые снимки. Эта работа может быть очень увлекательна, иногда даже <a href="http://en.wikipedia.org/wiki/Obsessive%E2%80%93compulsive_disorder">слишком</a>, и мы лично потратили многие часы на улучшение карты в наших окрестностях. 
</p>
<p>
    Есть также третья форма редактирования карты, для которой бумага походит лучшие способом. На бумагу можно записывать местоположение объектов, которые невозможно увидеть на снимках и которые бесполезно наносить пока нет дорог. Это объекты, подробности про которые можно узнать только на местности: фонари, магазины, туалеты, банкоматы, лестницы, кафе, рестораны, адреса и другие данные, которые делают OpenStreetMap сильным конкуретном других сервисов. 
</p>

<h3>Решаем проблему #3</h3>

<p>
    До настоящего времени, удобных методов картировать третьим методом не было. 
</p>
<p>
    "Обходной лист" - вебсайт и сервис созданные специально для решения этой проблемы. Этот сервис предоставляет карты OpenStreetMap для распечатки, на которых можно наносить дополнительную информацию. После сканирования, их можно оцифровывать используя обычный веб-редактор OSM Potlatch. Этот сервис создан для тех, кому не хочется заполнять свои карманы кучей устройств для записи всего вокруг них, то есть для обычного человека, который может захватить с собой бумажку специально для картирования или просто по дороге куда-нибудь. 
</p>
<p>
    Мы пытаемся совместить веб-авантюризм и старомодные нецифровые методы. Каждая карта обратно геокодируется используя функцию 
    <a href="http://www.flickr.com/services/api/flickr.places.findByLatLon.html">flickr.places.findByLatLon API Flickr</a>, которая выдает значимое название места для заданной географической области. Таким образом, вы можете посмотреть на коллекцию сканов других людей и, возможно, узнаете местность которую знаете и по которой можете помочь нанести объекты. Каждая распечатка и скан также сопровождаются (возможно несколько оптимистичным) обещанием отправить отпечаток по обычной почте, и принять возвращенную такой же почтой карту обратно. Так что, если вы хотите поиграть в неогеографических друзей по переписке или у вас просто нет сканера наш сервис может помочь. 
</p>

<h3>Контекст</h3>
<p>
    Этот проект был вдохновлен <a href="http://aaronland.info/">Aaron Cope из Flickr</a> и <a href="http://www.reallyinterestinggroup.com/">Ben / Russell / Tom из Really Interesting Group</a>, чьи <a href="http://bookcamp.pbworks.com/PaperCamp">Papercamp</a> / <a href="http://aaronland.info/talks/papernet/">Papernet</a> и <a href="http://www.reallyinterestinggroup.com/tofhwoti.html">Things Our Friends Have Written On The Internet 2008</a> помогли наполнить смыслом всю эту недо-цифровую, средневековую технологию.
</p>
<p>
    <a href="mailto:info@walking-papers.org">info@walking-papers.org</a>
    <br />
    <a href="http://github.com/migurski/paperwalking">http://github.com/migurski/paperwalking</a>
</p>
