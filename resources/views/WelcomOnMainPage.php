<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/main.css" />
    <title>logo</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="maincontent">
        <header class="header">
          <div class="wrapper_body">
            <div class="body_header">
              <div class="logo__header_wrapper">
                <img src="./png/logo.png" alt="" class="logo__img" />
              </div>
            </div>
            <div class="wrapper__menu">
              <ul class="list__menu">
                <li class="menu__header__items">
                  <a href="#" class="menu_link">Главная</a>
                </li>
              </ul>
            </div>
            <div class="wrapper__contacts">
              <a href="tel: 89217010075" class="contact__nomber"
                >+79217010075</a
              >
            </div>
          </div>
        </header>
        <section class="hero">
          <div class="container_hero">
            <h1 class="title__hero">
              Добро пожаловать в место, где создаются
              <b class="grad">датасеты</b>
            </h1>
            <form action="POST" class="form_login">
              <div class="form__column">
                <details class="custom-select">
                  <summary class="radios">
                    <input
                      type="radio"
                      name="item"
                      id="default"
                      title="Auswählen..."
                      checked
                    />
                    <input type="radio" name="item" id="item1" title="Item 1" />
                    <input type="radio" name="item" id="item2" title="Item 2" />
                    <input type="radio" name="item" id="item3" title="Item 3" />
                    <input type="radio" name="item" id="item4" title="Item 4" />
                    <input type="radio" name="item" id="item5" title="Item 5" />
                  </summary>
                  <ul class="list">
                    <li class="item">
                      <label for="item1">
                        Item 1
                        <span></span>
                      </label>
                    </li>
                    <li class="item">
                      <label for="item2">Item 2</label>
                    </li>
                    <li class="item">
                      <label for="item3">Item 3</label>
                    </li>
                    <li class="item">
                      <label for="item4">Item 4</label>
                    </li>
                    <li class="item">
                      <label for="item5">Item 5</label>
                    </li>
                  </ul>
                </details>
                <a href="" class="btn btn--gr">
                  <img src="./png/play_logo.png" alt="" class="btn__img" />
                  <div class="btn__content">Вход</div>
                </a>
              </div>
              <div class="form__column">
                 <div class="title__colmn">
                    Для новых пользователей
                 </div>
                 <input type="text" class="input__form">
                 <a href="" class="btn btn--gr">
                    <img src="./png/play_logo.png" alt="" class="btn__img" />
                    <div class="btn__content">Вход</div>
                  </a>
              </div>
            </form>
          </div>
        </section>
      </div>
    </div>
  </body>
</html>