<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Кривцун ИВТ портфолио</title>
  <!-- This adds font icons -->
  <script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- Bulma Version 0.9.1 <link rel="stylesheet" type="text/css" href="bulma/css/bulma.css"> -->
  <link href="https://cdnout.com/bulma/css/bulma.min.css" rel="stylesheet" media="all">
  <script>
      document.addEventListener("DOMContentLoaded", () => {
          const burger = document.querySelector(".navbar-burger")
          const menu = document.querySelector(".navbar-menu")
          burger.addEventListener("click", () => {
              burger.classList.toggle("is-active")
              menu.classList.toggle("is-active")
          })
      })
  </script>
</head>

<body>
  <!-- Navigation bar -->
  <nav class="navbar is-primary is-fixed-top">
    <div class="navbar-brand">
      <div class="navbar-burger burger" data-target="navbarMenu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div id="navbarMenu" class="navbar-menu">
      <div class="navbar-end">
        <a class="navbar-item" href="#top">
          <span class="icon">
            <i class="fas fa-file-alt"></i>
          </span>
          <span>Резюме</span>
        </a>
        <a class="navbar-item" href="#about">
          <span class="icon">
            <i class="fas fa-info"></i>
          </span>
          <span>Обо мне</span>
        </a>
        <a class="navbar-item" href="#portfolio">
          <span class="icon">
            <i class="fas fa-th-list"></i>
          </span>
          <span>Портфолио</span>
        </a>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <section class="hero is-primary is-fullheight is-fullheight-with-navbar" id="top">
    <div class="hero-body">
      <div class="container">
        <h1 class="title is-1">
          Разработчик на Python 
            <br>
            &
            <br>
            постановщик задач
        </h1>
        <h2 class="subtitle is-3">
          Марина Кривцун 
        </h2>
        <br>
        <div class="buttons has-addons ">
            <a href="https://meao.github.io/university-portfolio/" class="button ">Github</a>
            <a href="http://linkedin.com/in/marina-krivtsoun-9a40a6167/" class="button ">LinkedIn</a>
            <a href="https://herzen-portfolio.acrodis.ru/go.php?key=2911536659978695" class="button ">Портфолио Acrodis Герцена</a>
            <a href="https://spb.hh.ru/resume/86e9a497ff0458e7a60039ed1f6e793676446f" class="button ">HeadHunter</a>
            <a href="https://git.herzen.spb.ru/163890" class="button ">Git Герцена</a>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="section" id="about">

    <div class="columns has-same-height is-gapless">
      <div class="column">
        <!-- Py -->
        <div class="card has-text-centered">
          <div class="card-content">
            <p class="title is-3">
                <span class = "has-text-primary">
                    <i class="fas fa-laptop-code fa-3x"></i>
                </span>
            </p>
            <h3 class="title is-4">Разработчик на Python </h3>

            <div class="content">
            <h4 class="is-3">
                <span class = "has-text-primary">Любимые инструменты</span> 
            </h4>
                <p>Numpy</p>
                <p>Django </p>
                <p>Chatterbot</p>
                <p>Blender</p>
                <p>VSCode</p>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <!-- Mgt -->
        <div class="card has-text-centered">
          <div class="card-content">
            <p class="title is-3">
                <span class = "has-text-primary">
                    <i class="fas fa-user-tie fa-3x"></i>
                </span>
            </p>
            <h3 class="title is-4">Постановщик задач </h3>

            <div class="content">
            <h4 class="is-3">
                <span class = "has-text-primary">RU – EN – FR</span> 
            </h4>
                <p>8 лет</p>
                <p>Анализ </p>
                <p>Формулировка</p>
                <p>Перевод</p>
                <p>Scrum</p>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <!-- Skills -->
        <div class="card has-text-centered">
          <div class="card-content skills-content">
            <p class="title is-3">
                <span class = "has-text-primary">
                    <i class="fas fa-tasks fa-3x"></i>
                </span>
            </p>
            <h3 class="title is-4">Другие навыки</h3>
            <div class="content">
              
              <a href="https://www.sololearn.com/Certificate/1080-229310/pdf/" class="button ">C#</a>
              <a href="https://www.sololearn.com/Certificate/1023-229310/pdf/" class="button ">CSS</a>
              <a href="https://www.coursera.org/account/accomplishments/certificate/BKVJAU727GHA?utm_medium=certificate&utm_source=link&utm_campaign=copybutton_certificate" class="button ">Machine Learning</a>
              <a href="https://www.sololearn.com/Certificate/1060-229310/pdf/" class="button ">SQL</a>
              <a href="https://www.sololearn.com/Certificate/1082-229310/pdf/" class="button ">jQuery</a>
              <a href="https://www.sololearn.com/Certificate/1014-229310/pdf/" class="button ">HTML</a>
              <a href="https://www.sololearn.com/Certificate/1024-229310/pdf/" class="button ">JavaScript</a>
              <a href="https://intuit.ru/verifydiplomas/101302205" class="button ">Autocad</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="section" id="portfolio">
    <div class="container">
      <div class="section-heading">
        <h3 class="title is-2">Портфолио</h3>
      </div>
      <br>

      <div class="container portfolio-container">
        <div class="columns">
          <div class="column is-6">
            <!-- best -->
            <div class="card">
              <div class="card-content has-text-centered">
                <h4 class="subtitle is-5 "><span class = "has-text-primary">Мои лучшие проекты и достижения</span> </h4>
              </div>
            </div>
            <!-- time -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Сайт и чатбот для управления временем </span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Chatterbot</span>
                    <span class="tag is-default">Django</span>
                    <span class="tag is-default">Bulma</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="Diplom/TimeEstim/screens/indexbigscreen.png" alt="TimeEstim screenshot">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="https://time-estim.herokuapp.com/" class="card-footer-item">Site</a>
                <a href="https://github.com/Meao/TimeEstim" class="card-footer-item">Github</a>
                <a href="Diplom/TimeEstim" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- bpy -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>3D график с фейерверком </span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Blender python</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="InternshipsEtc/BlenderTutorialHerzen/3dchartbpy480.gif" alt="3D movie">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="https://github.com/Meao/blender_mod/blob/master/MKtest.py" class="card-footer-item">Github</a>
                <a href="InternshipsEtc/BlenderTutorialHerzen" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- diet -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Моделирование задачи о диете </span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Numpy</span>
                    <span class="tag is-default">Django</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="Homework/Calcul_Модуль_Технологии_и_методы_вычислений/Технологии_компьютерного_моделирования/diet/dietscreenshot.png" alt="Diet model screenshot">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="https://github.com/Meao/dietapp" class="card-footer-item">Github</a>
                <a href="Homework/Calcul_Модуль_Технологии_и_методы_вычислений/Технологии_компьютерного_моделирования/diet" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- 3D Herzen -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>AR 3D план основного кампуса РГПУ</span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Unity</span>
                    <span class="tag is-default">C#</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="Homework/Prog_Модуль_Системное_и_прикладное_программное_обеспечение/Инженерная_и_компьютерная_графика/AR_Krivcun_Svistunova/AR.png" alt="AR 3D screenshot">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="https://github.com/Meao/university-portfolio/tree/master/graph" class="card-footer-item">Github</a>
                <a href="Homework/Prog_Модуль_Системное_и_прикладное_программное_обеспечение/Инженерная_и_компьютерная_графика/AR_Krivcun_Svistunova" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- predator -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span> Учебная практика EPAM Systems, 3D симуляция стратегии «хищник-жертва» с модельными микроорганизмами в чашке Петри </span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Internship</span>
                    <span class="tag is-default">AI</span>
                    <span class="tag is-default">Unity</span>
                    <span class="tag is-default">C#</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="InternshipsEtc/EPAM/predator.gif" alt="predator-victim movie">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="https://github.com/Meao/unity-predator-victim" class="card-footer-item">Github</a>
                <a href="InternshipsEtc/EPAM" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- ML -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span> Курс по машинному обучению от университета Stanford на coursera </span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Octave</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="InternshipsEtc/StanfordCoursera/certificate.png" alt="certificate screenshot">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="InternshipsEtc/StanfordCoursera" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- Get Ahead -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span> Программа Google Get Ahead, технические проблемы, живые тренинги на YouTube и
интервью для избранных
студентов-программистов региона EMEA</span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Python</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image is-flex" style="justify-content: center;">
                  <img src="InternshipsEtc/GoogleGetAhead/GGA.png" alt="Google certificate screenshot" style="max-width:320px;">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="InternshipsEtc/GoogleGetAhead" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- translator landing -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Страница переводчика на 3 языках, с динамичным подсчетом цены перевода </span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">jQuery</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image is-flex" style="justify-content: center;">
                  <img src="Homework/Ing_Модуль_Информационные_ресурсы_и_средства_профессиональной_деятельности_инженера/Управление_программными_проектами/site.png" alt="Translator landing screenshot" style="max-width:500px;">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="https://meao.github.io/translator-adaptive/index-fr.html" class="card-footer-item">Site</a>
                <a href="https://github.com/Meao/translator-adaptive" class="card-footer-item">Github</a>
                <a href="Homework/Ing_Модуль_Информационные_ресурсы_и_средства_профессиональной_деятельности_инженера/Управление_программными_проектами/translator-adaptive" class="card-footer-item">Local</a>
              </footer>
            </div>

          </div>
          <div class="column is-6">
            <!-- uni -->
            <div class="card">
              <div class="card-content has-text-centered">
                <h4 class="subtitle is-5 "><span class = "has-text-primary">Другие учебные проекты и дисциплины</span> </h4>
              </div>
            </div>
            <!-- analyse -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Модуль "Технологии и методы вычислений"</span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Numpy</span>
                    <span class="tag is-default">Scipy</span>
                    <span class="tag is-default">Excel</span>
                    <span class="tag is-default">Google sheets</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <ul>
                    <li>Анализ данных</li>
                    <li>Вычислительная математика</li>
                    <li>Информационные технологии в решении задач оптимизации</li>
                    <li>Технологии компьютерного моделирования: Тема курсовой работы: Модель "задачи о диете"</li>
                </ul>
              </div>
              <footer class="card-footer">
                <a href="https://github.com/Meao/dietapp" class="card-footer-item">Dietapp - Github</a>
                <a href="Homework/Calcul_Модуль_Технологии_и_методы_вычислений" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- mgt engineer -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Модуль "Информационные ресурсы и средства профессиональной деятельности инженера"</span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Jupyter notebook</span>
                    <span class="tag is-default">Numpy</span>
                    <span class="tag is-default">Pandas</span>
                    <span class="tag is-default">Julia</span>
                    <span class="tag is-default">LMS Wordpress</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <ul>
                    <li>Управление программными проектами: Тема курсовой работы: Управление проектом по редизайну мультиязычного сайта переводчика</li>
                    <li>Практикум по программированию</li>
                    <li>Организация электронной образовательной среды: Тема курсовой работы: Развёртывание LMS на основе CMS Wordpress</li>
                </ul>
              </div>
              <footer class="card-footer">
                <a href="https://github.com/Meao/translator-adaptive" class="card-footer-item">Tranlator - Github</a>
                <a href="Homework/Ing_Модуль_Информационные_ресурсы_и_средства_профессиональной_деятельности_инженера" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- mathphys -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Модуль "Информационные технологии в математике и физике"</span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Maxima</span>
                    <span class="tag is-default">Excel</span>
                    <span class="tag is-default">HTML</span>
                    <span class="tag is-default">CSS</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <ul>
                    <li>Основы компьютерной алгебры</li>
                    <li>Информационные технологии в математике</li>
                    <li>Информационные технологии </li>
                    <li>Информационные технологии в физике: Тема курсовой работы: Исследование температурного поля одномерной пластины с использованием средств информационных технологий</li>
                </ul>
              </div>
              <footer class="card-footer">
                <a href="https://sites.google.com/site/krivcunmarinait/home/1-kurs/2-semestr/it?authuser=0" class="card-footer-item">IT - Google site</a>
                <a href="Homework/IT_Модуль_Информационные_технологии_в_математике_и_физике" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- EVM -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Модуль "Организация ЭВМ"</span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Windows</span>
                    <span class="tag is-default">Assembler</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <ul>
                    <li>ЭВМ и периферийные устройства: Научные публикации: Использование презентаций при преподавании курса ЭВМ и ПУ
ITSIT 2018 С. 61-62</li>
                    <li>Сети и телекоммуникации </li>
                    <li>Введение в нанотехнологии  </li>
                    <li>Защита информации  </li>
                    <li>Электротехника, электроника и схемотехника  </li>
                    <li>Физические основы микроэлектроники  </li>
                </ul>
              </div>
              <footer class="card-footer">
                <a href="Homework/HardwPhys_Модуль_Организация_ЭВМ" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- logic -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Модуль "Дискретные структуры"</span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">JavaScript</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <ul>
                    <li>Дискретная математика для программистов </li>
                    <li>Алгоритмы и анализ сложности </li>
                </ul>
              </div>
              <footer class="card-footer">
                <a href="https://github.com/Meao/08112017/blob/master/krivsun" class="card-footer-item">JS - Github</a>
                <a href="Homework/Logic_Модуль_Дискретные_структуры" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- logic -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Модуль "Естественно-математический"</span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Pascal</span>
                    <span class="tag is-default">Lazarus</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <ul>
                    <li>Информатика </li>
                    <li>Математика </li>
                    <li>Физика </li>
                    <li>Математические основы компьютерной графики </li>
                </ul>
              </div>
              <footer class="card-footer">
                <a href="Homework/Maths_Модуль_Естественно_математический" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- IT mgt -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Модуль "Информационные технологии в управлении в IT-компании"</span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Archimate</span>
                    <span class="tag is-default">UML</span>
                    <span class="tag is-default">IDEF</span>
                    <span class="tag is-default">BPWin</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <ul>
                    <li>Основы бизнес-информатики </li>
                    <li>IT-менеджмент </li>
                    <li>Информационные технологии в экономике и управлении </li>
                    <li>IT-рекрутмент </li>
                    <li>Информационные технологии оценки персонала </li>
                </ul>
              </div>
              <footer class="card-footer">
                <a href="Homework/Mgt_Модуль_Информационные_технологии_в_управлении_в_IT_компании" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- PO -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Модуль "Системное и прикладное программное обеспечение"</span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Python</span>
                    <span class="tag is-default">Autocad</span>
                    <span class="tag is-default">SQL</span>
                    <span class="tag is-default">Flask</span>
                    <span class="tag is-default">C</span>
                    <span class="tag is-default">Pascal</span>
                    <span class="tag is-default">VBScript</span>
                    <span class="tag is-default">C++</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <ul>
                    <li>Программирование </li>
                    <li>Операционные системы: Научные конференции: Модель информационного портала поддержки деятельности организаций стран Евразийского Экономического Союза</li>
                    <li>Базы данных </li>
                    <li>Инженерная и компьютерная графика </li>
                </ul>
              </div>
              <footer class="card-footer">
                <a href="https://github.com/Meao/university-portfolio/blob/master/python/python.md" class="card-footer-item">Python - Github</a>
                <a href="Homework/Prog_Модуль_Системное_и_прикладное_программное_обеспечение" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- IT -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Модуль "Информационные технологии"</span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">JavaScript</span>
                    <span class="tag is-default">LaTeX</span>
                    <span class="tag is-default">Docker</span>
                    <span class="tag is-default">OAuth</span>
                    <span class="tag is-default">Archimate</span>
                    <span class="tag is-default">UML</span>
                    <span class="tag is-default">Canva</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <ul>
                    <li>Интегрированные издательские системы и технологии </li>
                    <li>Информационные технологии в изучении иностранных языков </li>
                    <li>Техника и технологии представления и публикации информации </li>
                    <li>Информационные технологии и системы бизнес-аналитики </li>
                    <li>Основы корпоративного электронного обучения </li>
                    <li>Прикладные информационные технологии </li>
                </ul>
              </div>
              <footer class="card-footer">
                <a href="https://github.com/Meao/university-portfolio/blob/master/web/lang/language.md" class="card-footer-item">Languages - Github</a>
                <a href="Homework/Модуль_Информационные_технологии" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- issledov -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Модуль "Учебно-исследовательский"</span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">Colab Notebooks</span>
                    <span class="tag is-default">Scilab</span>
                    <span class="tag is-default">QGIS</span>
                    <span class="tag is-default">SAGA</span>
                    <span class="tag is-default">PowerPoint</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <ul>
                    <li>Визуализация данных и инфографика </li>
                    <li>Геоинформационные системы </li>
                    <li>Инженерия знаний </li>
                    <li>Информационные средства и технологии инженерных и научных рассчетов </li>
                    <li>Мировые информационные ресурсы и цифровые библиотеки </li>
                    <li>Социальные и профессиональные вопросы информатики и ИТ </li>
                </ul>
              </div>
              <footer class="card-footer">
                <a href="https://colab.research.google.com/drive/1pr-ap91M99817yFOwiX6_bwMlU8sN5zv?usp=sharing" class="card-footer-item">Credit ML - Google Colab</a>
                <a href="Homework/Модуль_Учебно-исследовательский" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- web -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Модуль "Проектирование и разработка веб-решений"</span>
                  <span class="is-pulled-right">
                    <span class="tag is-default">XML</span>
                    <span class="tag is-default">Git</span>
                    <span class="tag is-default">Eslint</span>
                    <span class="tag is-default">JSON</span>
                    <span class="tag is-default">PHP</span>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <ul>
                    <li>Проектирование и разработка веб-решений </li>
                </ul>
              </div>
              <footer class="card-footer">
                <a href="https://github.com/Meao/mailer" class="card-footer-item">Mailer - Github</a>
                <a href="Homework/Web_Модуль_Проектирование_и_разработка_веб_решений" class="card-footer-item">Local</a>
              </footer>
            </div>
            <!-- human -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Гуманитарные предметы и модули</span>
                </p>
              </header>
              <div class="card-content">
                <ul>
                    <li>Правоведение </li>
                    <li>Языки </li>
                    <li>Здоровьесберегающий </li>
                    <li>Историко_философский </li>
                </ul>
              </div>
              <footer class="card-footer">
                <a href="Homework/Humanitarian" class="card-footer-item">Local</a>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="section-heading">
      <p>
        Марина Кривцун 2021.
      </p>
    </div>
  </footer>
</body>

</html>
