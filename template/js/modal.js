'use strict'

let btn = document.querySelector('.good-foto');
btn.addEventListener('click', showBox);

function showBox() {
    let cover = document.createElement('div');
    cover.classList.add('cover');
    document.body.appendChild(cover);

    let box = document.createElement('div');
    box.className = 'box animated bounceIn';
    document.body.appendChild(box);

    let close = document.createElement('a');
    close.classList.add('close');
    box.appendChild(close);
    close.innerHTML = 'X';

    let image = document.querySelector('image');
    let imagepath = image.getAttribute('xlink:href');

    let img = document.createElement('img');
    img.setAttribute('src', imagepath);
    box.appendChild(img);

    close.addEventListener('click', hideBox);

    cover.addEventListener('click', hideBox);

    document.addEventListener('keydown', function (e) {
        if (e.keyCode == 27) {
            hideBox();
        }
    })

    function hideBox() {
        document.body.removeChild(cover);
        document.body.removeChild(box);
    }


}

/*
1. 
при нажатии на кнопку добавить обработчик showBox

В обработчике showBox()
создать перекрывающий див с 
классом -cover
стилями
  background:rgba(0,0,0,0.5)
  position:fixed
  left: 0
  top: 0
  bottom: 0
  right: 0
  z-index: 9000
и добавить в body
Проверить!

2. Назначить div.cover  по клику на нем обработчик hideBox()
Примечание - это действие необходимо сделать в момент создания div.cover

3. В hideBox() удалить  div.cover

Проверить! см. Elements

4. Дополнить обработчик showBox() 
  
   Создать div с классами  'box animated bounceIn',
    и css
            background:#fff
            position:absolute 
            left:50%
            top:50%
             margin-left: -200px
             margin-top: -250px
            width:400px
            height:500px
            z-index: 9010

добавить в body
Проверить! 

5. Подключить библиотеку animate.css

6. Дополнить обработчик hideBox()
   удалить  div.box
   Проверить! см. Elements

7. Дополнить обработчик showBox() 
  
  Создать a с классом  'close',
  и css
          background:#B93737
          position:absolute 
          right:20px
          top:20px
          width:40px
          height:40px
          

добавить в div.box
Проверить! 

8. Для a.close добавить обработчик по клику hideBox();

9. Добавить возможность закрыть всплывающее окно при нажатии на ESC
    // при нажатии на ESC
    document.addEventListener('keydown',function(e) {
        if (e.keyCode == 27) { 
          hideBox();
        }
    })

10. Клонируйте форму и добавьте в div.box. Сделайте ее видимой.


*/