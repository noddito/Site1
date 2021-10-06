<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Невыполненая задача, Выполненая задача, Просроченная задача">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Список дел</title>
<link rel="stylesheet" href="Список-дел.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="Список-дел.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Список дел">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-grey-30 u-header u-header" id="sec-85a7"><div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">

        <h3 class="u-align-center u-headline u-text u-text-body-color u-text-1">
          <a href="/">Список дел</a>
        </h3>
      </div></header>
    <section class="u-clearfix u-gradient u-section-1" id="sec-d56d">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-50 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-radius-20 u-shape-round u-size-20 u-layout-cell-1">
                <div class="u-border-3 u-border-grey-80 u-container-layout u-container-layout-1">
                  <h2 class="u-align-center u-text u-text-1">Невыполненая задача</h2>
                  <div class="u-border-1 u-border-grey-75 u-clearfix u-custom-html u-opacity  u-custom-html-1">
                    <style>.NotReady {color:black }</style>
                    <p  class="NotReady" id="NotReady" name="NotReady">
                    <div>
                    <?php
                      $dsn = 'mysql:host=site;dbname=tasks';
                      $pdo = new PDO($dsn,'root','root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
                      $query = $pdo->query('SELECT not_ready_task,time,id FROM tasks WHERE (not_ready_task > 0) OR !(not_ready_task IS NULL) ORDER BY `id` DESC');
                      while($row = $query->fetch(PDO::FETCH_OBJ) ) 
                      {
                        echo '<li><b>'.$row->not_ready_task ,' ', $row->time.'</b><a href="/delete.php?id='.$row->id.'"><button class="u-border-none u-btn u-btn-round u-button-style u-grey-90 u-hover-grey-80 u-radius-15 u-btn-1">Удалить</button></a><a href="/complete.php?id='.$row->id.'"><button class="u-border-none u-btn u-btn-round u-button-style u-grey-90 u-hover-grey-80 u-radius-15 u-btn-1">Сделано</button></a><a href="/potracheno.php?id='.$row->id.'"><button class="u-border-none u-btn u-btn-round u-button-style u-grey-90 u-hover-grey-80 u-radius-15 u-btn-1">Провалено</button></a></li>';
                      }
                    ?>
                  </div>
                    </p>
                  </div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-radius-20 u-shape-round u-size-20 u-layout-cell-2">
                <div class="u-border-3 u-border-grey-80 u-container-layout u-container-layout-2">
                  <h2 class="u-align-center u-text u-text-2">Выполненая задача</h2>
                  <div class="u-border-1 u-border-grey-75 u-clearfix u-custom-html u-opacity u-custom-html-2">
                    <style></style>
                    <p id="Ready" name="Ready">
                      
 
                    <div>
                    <?php
                      $dsn = 'mysql:host=site;dbname=tasks';
                      $pdo = new PDO($dsn,'root','root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
                      $query = $pdo->query('SELECT completed_task,time FROM tasks WHERE (completed_task > 0) OR !(completed_task IS NULL) ORDER BY `id` DESC');
                      while($row = $query->fetch(PDO::FETCH_OBJ) and completed_task != NULL) 
                      {
                        if ( count(completed_task) != 0 ) {
                        echo '<li><b>'.$row->completed_task ,' ', $row->time.'</b></li>';}
                      }
                    ?>
                  </div>  
                    </p>
                  </div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-radius-20 u-shape-round u-size-20 u-layout-cell-3">
                <div class="u-border-3 u-border-grey-80 u-container-layout u-container-layout-3">
                  <h2 class="u-align-center u-text u-text-3">Просроченная задача</h2>
                  <div class="u-border-1 u-border-grey-75 u-clearfix u-custom-html u-opacity  u-custom-html-3">
                    <style></style>
                    <p id="Potracheno" name="Potracheno">
                                         <div>
                    <?php
                      $dsn = 'mysql:host=site;dbname=tasks';
                      $pdo = new PDO($dsn,'root','root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
                      $query = $pdo->query('SELECT not_completed_task,time FROM tasks WHERE (not_completed_task > 0) OR !(not_completed_task IS NULL) ORDER BY `id` DESC');
                      while($row = $query->fetch(PDO::FETCH_OBJ) and not_completed_task != NULL) 
                      {
                        if ( count(not_completed_task) != 0 ) {
                        echo '<li><b>'.$row->not_completed_task ,' ', $row->time.'</b></li>';}
                      }
                    ?>
                  </div> 
                                    


                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>






        <a href="#sec-a734" class="u-border-none u-btn u-btn-round u-button-style u-dialog-link u-grey-90 u-hover-grey-80 u-radius-15 u-btn-1">Добавить задачу</a>

      <?php
        echo '<a href="/deleteall.php" ><button class="u-border-none u-btn u-btn-round u-button-style u-grey-90 u-hover-grey-80 u-radius-15 u-btn-1">Очистить список</button></a>';

        ?>
        <div class="u-clearfix u-custom-html u-custom-html-4">
          <div id="current_date_time_block"></div>
          <script type="text/javascript"> /* функция добавления ведущих нулей */
    /* (если число меньше десяти, перед числом добавляем ноль) */
    function zero_first_format(value)
    {
        if (value < 10)
        {
            value='0'+value;
        }
        return value;
    }
    /* функция получения текущей даты и времени */
    function date_time()
    {
        var current_datetime = new Date();
        var day = zero_first_format(current_datetime.getDate());
        var month = zero_first_format(current_datetime.getMonth()+1);
        var year = current_datetime.getFullYear();
        return day+"."+month+"."+year;
    }
    /* выводим текущую дату и время на сайт в блок с id "current_date_time_block" */
    document.getElementById('current_date_time_block').innerHTML = date_time(); </script>
        </div>
      </div>
    </section>
    
    
  

  
  <section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-section-4" id="sec-a734">
      <div class="u-container-style u-dialog u-grey-30 u-opacity u-opacity-95 u-radius-35 u-shape-round u-dialog-1">
        <div class="u-container-layout u-container-layout-1">
          <div class="u-border-3 u-border-grey-80 u-container-style u-group u-radius-20 u-shape-round u-group-1">
            <div class="u-container-layout u-container-layout-2">
              <h3 class="u-text u-text-body-color u-text-1">Имя задачи:</h3>

              <form action="/send.php" method="POST">
              <div class="u-clearfix u-custom-html u-custom-html-1">
                <style>.task {color:black;}</style>
                <input id="not_ready_task" type="text" size="40" name ="not_ready_task" class="task">
              </div>
              <h3 class="u-text u-text-body-color u-text-2">Дата завершения:</h3>
              <div class="u-clearfix u-custom-html u-custom-html-2">
                <style>.Calendar {color:black;}</style>
                <input type="date" id="time" class="Calendar" name="time">
              </div>
              <input  class="u-btn u-btn-round u-button-style u-grey-90 u-hover-grey-80 u-radius-15" type="submit" name="SendTask" value="Добавить">
            </form>


            </div>
          </div>
        </div><button class="u-dialog-close-button u-icon u-icon-rectangle u-spacing-0 u-text-black u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1476"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-1476"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
      </div>
    </section>
    
<style>.u-section-4 {
  min-height: 1335px;
}

.u-section-4 .u-dialog-1 {
  width: 960px;
  min-height: 620px;
  margin: 68px auto 60px;
}

.u-section-4 .u-container-layout-1 {
  padding: 30px 30px 18px;
}

.u-section-4 .u-group-1 {
  width: 800px;
  min-height: 400px;
  margin: 85px 38px 0 auto;
}

.u-section-4 .u-container-layout-2 {
  padding: 28px 30px;
}

.u-section-4 .u-text-1 {
  margin: 0 554px 0 0;
}

.u-section-4 .u-custom-html-1 {
  height: auto;
  min-height: 90px;
  width: 734px;
  margin: 0 auto;
}

.u-section-4 .u-text-2 {
  margin: 5px 469px 0 0;
}

.u-section-4 .u-custom-html-2 {
  height: auto;
  min-height: 31px;
  width: 219px;
  margin: 0 515px 0 0;
}

.u-section-4 .u-btn-1 {
  font-weight: 700;
  font-size: 1.125rem;
  background-image: none;
  margin: 26px 352px 0 auto;
  padding: 10px 40px;
}

.u-section-4 .u-icon-1 {
  width: 47px;
  height: 47px;
  left: auto;
  top: 33px;
  position: absolute;
  right: 32px;
}

@media (max-width: 1199px) {
  .u-section-4 .u-dialog-1 {
    width: 940px;
    height: auto;
  }

  .u-section-4 .u-group-1 {
    margin-right: 38px;
  }

  .u-section-4 .u-text-1 {
    margin-right: 554px;
  }

  .u-section-4 .u-custom-html-1 {
    width: 734px;
  }

  .u-section-4 .u-text-2 {
    margin-right: 469px;
  }

  .u-section-4 .u-custom-html-2 {
    width: 160px;
    margin-right: 515px;
  }

  .u-section-4 .u-btn-1 {
    border-style: none;
    margin-right: 332px;
  }
}

@media (max-width: 991px) {
  .u-section-4 .u-dialog-1 {
    width: 720px;
  }

  .u-section-4 .u-group-1 {
    width: 660px;
    margin-right: 0;
  }

  .u-section-4 .u-text-1 {
    margin-right: 414px;
  }

  .u-section-4 .u-custom-html-1 {
    width: 600px;
  }

  .u-section-4 .u-text-2 {
    margin-right: 329px;
  }

  .u-section-4 .u-custom-html-2 {
    margin-right: 381px;
  }

  .u-section-4 .u-btn-1 {
    margin-right: 112px;
  }
}

@media (max-width: 767px) {
  .u-section-4 .u-dialog-1 {
    width: 540px;
  }

  .u-section-4 .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
  }

  .u-section-4 .u-group-1 {
    width: 520px;
  }

  .u-section-4 .u-container-layout-2 {
    padding-left: 10px;
    padding-right: 10px;
  }

  .u-section-4 .u-text-1 {
    margin-right: 314px;
  }

  .u-section-4 .u-custom-html-1 {
    width: 500px;
  }

  .u-section-4 .u-text-2 {
    margin-right: 229px;
  }

  .u-section-4 .u-custom-html-2 {
    margin-right: 281px;
  }

  .u-section-4 .u-btn-1 {
    margin-right: 0;
  }
}

@media (max-width: 575px) {
  .u-section-4 .u-dialog-1 {
    width: 340px;
  }

  .u-section-4 .u-group-1 {
    width: 320px;
  }

  .u-section-4 .u-text-1 {
    margin-right: 114px;
  }

  .u-section-4 .u-custom-html-1 {
    width: 300px;
  }

  .u-section-4 .u-text-2 {
    margin-right: 29px;
  }

  .u-section-4 .u-custom-html-2 {
    margin-right: 81px;
  }
}</style></body>
</html>