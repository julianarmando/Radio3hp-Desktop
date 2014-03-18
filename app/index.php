<!DOCTYPE HTML>
<html lang="es">
  <head>
    <title>Radio3HP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/jquery.mobile-1.2.1.min.css" />
    <link type="text/css" rel="stylesheet" href="css/styles.css" />
    <script type="text/javascript" charset="utf-8" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/jquery.mobile-1.2.1.min.js"></script>

  </head> 
  <body>  

    <div id="radio3hp" data-role="page" data-theme="a"  data-title="Radio3HP">
      <div data-role="header">
        <h1>Radio3HP</h1> 
      </div>
      <div data-role="content">

        <div id="logo">
            <center>
              <img src="img/logoradio3hp.png" />
            </center>
        </div>
          <center>
            <audio controls autoplay>
              <source src="http://radio.radio3hp.com:8001/3hpmain.mp3" type="audio/mpeg"> 
              <source src="http://radio.radio3hp.com:8001/3hpmain.ogg" type="audio/ogg">
            </audio>
          </center>
      </div> <!-- data-role /content -->
      <div data-role="footer" data-position="fixed">    
        <div data-role="navbar">
          <ul>
            <li><a href="#radio3hp" data-iconpos="top" data-icon="home">Radio</a></li>
            <li><a href="#programacion" data-iconpos="top" data-icon="grid">Programación</a></li>
            <li><a href="#acercade" data-iconpos="top" data-icon="star">Acerca de</a></li>
          </ul>
        </div><!-- /navbar -->
      </div><!-- /footer -->
    </div>


    <div id="acercade" data-role="page" data-theme="a" data-title="Radio3HP - Acerca de...">
      <div data-role="header">
        <h1>Acerca de...</h1> 
      </div>
      <div data-role="content">
        <p>Version: 1.1</p>
        <p>Fecha: 13 de Agosto de 2013</p>
        <p>Desarrollado por: Julian Bohorquez (@julianarmando)</p>
        <p>Radio3HP - @radio3hp - www.radio3hp.com</p>
      </div> <!-- data-role /content -->
      <div data-role="footer" data-position="fixed">    
        <div data-role="navbar">
          <ul>
            <li><a href="#radio3hp" data-iconpos="top" data-icon="home">Radio</a></li>
            <li><a href="#programacion" data-iconpos="top" data-icon="grid">Programación</a></li>
            <li><a href="#acercade" data-iconpos="top" data-icon="star">Acerca de</a></li>
          </ul>
        </div><!-- /navbar -->
      </div><!-- /footer -->
    </div>


    <div id="programacion" data-role="page" data-theme="a" data-content-theme="a">
      <div data-role="header" data-position="fixed">
        <h1>Programación</h1> 
      </div>
      <div data-role="content">

        <div data-role="collapsible-set" data-inset="false">
          <!-- Empieza el lunes -->
          <div data-role="collapsible">
            <h3>Lunes</h3>
            <div data-role="collapsible-set">

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Electronica (12 A.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Musica Electronica</p>
                <p>Hora: 12 am</p>
                <p>Duración : 8 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Hip Hop (8 A.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Hip Hop</p>
                <p>Hora: 8 am</p>
                <p>Duración : 4 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Pop (12 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Pop</p>
                <p>Hora: 12 pm</p>
                <p>Duración : 4 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Voces Unidas (4 P.M)</h3>
                <p>Dirigido por: ONU</p>
                <p>Genero: Informativo, Social</p>
                <p>Hora: 4 pm</p>
                <p>Duración : 1 hora.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Clasica (6 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Musica Clasica</p>
                <p>Hora: 6 pm</p>
                <p>Duración : 2 horas.</p>
              </div> 
              <!-- termina programa -->
                    
              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Rincon del United (8 P.M)</h3>
                <p>Dirigido por: Jonathan Muñoz Gomez</p>
                <p>Genero: Deportivo, Variado</p>
                <p>Hora: 8 pm</p>
                <p>Duración : 1 hora.</p>
              </div> 
              <!-- termina programa -->   

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Electronica (10 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Electronica</p>
                <p>Hora: 10 pm</p>
                <p>Duración : 2 horas.</p>
              </div> 
              <!-- termina programa -->
            
            </div>
          </div>
          <!-- Termina lunes -->
          <!-- ************************************************************************************************** -->
          <!-- Empieza el Martes -->
          <div data-role="collapsible">
            <h3>Martes</h3>
            <div data-role="collapsible-set">

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Electronica (12 A.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Musica Electronica</p>
                <p>Hora: 12 am</p>
                <p>Duración: 8 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Ska (8 A.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Ska</p>
                <p>Hora: 8 am</p>
                <p>Duración: 4 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Reggae en Español (12 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Reggae en Español, Roots, Dancehall</p>
                <p>Hora: 12 pm</p>
                <p>Duración: 4 horas.</p>
              </div> 
              <!-- termina programa -->
            
              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>English Reggae (4 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Reggae en Ingles</p>
                <p>Hora: 4 pm</p>
                <p>Duración: 1 hora.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Hacia el Sur en el Atlántico (5 P.M)</h3>
                <p>Dirigido por: Bea Esteban</p>
                <p>Genero: Podcast, Feminismo Pop</p>
                <p>Hora: 5 pm</p>
                <p>Duración: 1 hora.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>El Club de los Salseros (6 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Salsa</p>
                <p>Hora: 6 pm</p>
                <p>Duración: 2 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Construyendo Espacios (8 P.M)</h3>
                <p>Dirigido por: Miguel Alvis</p>
                <p>Genero: Variado</p>
                <p>Hora: 8 pm</p>
                <p>Duración: 1 hora.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Ixion Odyssey Trance-mission (10 P.M)</h3>
                <p>Dirigido por: Erwin Fonseca, Nicolás Gardeazábal</p>
                <p>Genero: Electrónica, Trance</p>
                <p>Hora: 10 pm</p>
                <p>Duración: 2 hora.</p>
              </div> 
              <!-- termina programa -->

            </div>
          </div>
          <!-- Termina Martes -->
          <!-- ************************************************************************************************** -->
          <!-- Empieza el Miercoles -->
          <div data-role="collapsible">
            <h3>Miércoles</h3>
            <div data-role="collapsible-set">

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Electronica (12 A.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Musica Electronica</p>
                <p>Hora: 12 am</p>
                <p>Duración : 8 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Neo Punk (8 A.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Neo Punk</p>
                <p>Hora: 8 am</p>
                <p>Duración : 4 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Heavy Metal (12 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Heavy Metal</p>
                <p>Hora: 12 pm</p>
                <p>Duración : 3 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Notideportivo (3 P.M)</h3>
                <p>Dirigido por: Jesús David Hurtado</p>
                <p>Genero: Deportivo, Variado</p>
                <p>Hora: 3 pm</p>
                <p>Duración : 1 hora.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Rock en Español (3 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Rock en Español</p>
                <p>Hora: 4 pm</p>
                <p>Duración : 2 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>El Club de los Salseros (6 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Salsa</p>
                <p>Hora: 6 pm</p>
                <p>Duración : 2 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Metal Army (8 P.M)</h3>
                <p>Dirigido por: Daniel Correal</p>
                <p>Genero: Metal, Glam</p>
                <p>Hora: 8 pm</p>
                <p>Duración : 4 horas.</p>
              </div> 
              <!-- termina programa -->
            
            </div>
          </div>
          <!-- Termina Miercoles -->
          <!-- ************************************************************************************************** -->
          <!-- Empieza el Jueves -->
          <div data-role="collapsible">
            <h3>Jueves</h3>
            <div data-role="collapsible-set">

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Electronica (12 A.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Musica Electronica</p>
                <p>Hora: 12 am</p>
                <p>Duración : 8 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Punk (8 A.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Punk</p>
                <p>Hora: 8 am</p>
                <p>Duración : 4 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Hardcore (12 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Hardcore, HxC Crust, HxC Old School</p>
                <p>Hora: 12 pm</p>
                <p>Duración : 3 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Rock (3 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Rock Variado</p>
                <p>Hora: 3 pm</p>
                <p>Duración : 5 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>El Ruedo (8 P.M)</h3>
                <p>Dirigido por: Juan David Ortiz</p>
                <p>Genero: Opinion, Análisis, Informativo</p>
                <p>Hora: 8 pm</p>
                <p>Duración : 1 hora.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Granada (9 P.M)</h3>
                <p>Dirigido por: Albert Murillo</p>
                <p>Genero: Rock, Metal, Punk, Ska, Reggae, Alternativo</p>
                <p>Hora: 9 pm</p>
                <p>Duración : 2 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Electronica (11 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Musica Electronica</p>
                <p>Hora: 11 pm</p>
                <p>Duración : 1 hora.</p>
              </div> 
              <!-- termina programa -->
            
            </div>
          </div>
          <!-- Termina Jueves -->
          <!-- ************************************************************************************************** -->
          <!-- Empieza el Viernes -->
          <div data-role="collapsible">
            <h3>Viernes</h3>
            <div data-role="collapsible-set">

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Electronica (12 A.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Musica Electronica</p>
                <p>Hora: 12 am</p>
                <p>Duración : 8 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Clasicos del Rock (8 A.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Rock Clasico</p>
                <p>Hora: 8 am</p>
                <p>Duración : 4 horas.</p>
              </div> 
              <!-- termina programa -->              

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>El Club de los Salseros (12 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Salsa</p>
                <p>Hora: 12 pm</p>
                <p>Duración : 4 horas.</p>
              </div> 
              <!-- termina programa -->
            
              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Voces Unidas (4 P.M)</h3>
                <p>Dirigido por: ONU</p>
                <p>Genero: Informativo, Social</p>
                <p>Hora: 4 pm</p>
                <p>Duración : 1 hora.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>El Club de los Salseros (5 P.M)</h3>
                <p>Dirigido por: Radio3HP </p>
                <p>Genero: Salsa</p>
                <p>Hora: 5 pm</p>
                <p>Duración : 3 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Rincon del United (8 P.M)</h3>
                <p>Dirigido por: Jonathan Muñoz Gomez</p>
                <p>Genero: Deportivo, Variado</p>
                <p>Hora: 8 pm</p>
                <p>Duración : 1 hora.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Electronica (9 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Musica Electronica</p>
                <p>Hora: 9 pm</p>
                <p>Duración : 3 horas.</p>
              </div> 
              <!-- termina programa -->


            </div>
          </div>
          <!-- Termina Viernes -->
          <!-- ************************************************************************************************** -->
          <!-- Empieza el Sabado -->
          <div data-role="collapsible">
            <h3>Sábado</h3>
            <div data-role="collapsible-set">

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Electronica (12 A.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Musica Electronica</p>
                <p>Hora: 12 am</p>
                <p>Duración : 8 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Hip Hop (8 A.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Hip Hop</p>
                <p>Hora: 8 am</p>
                <p>Duración : 4 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Rap (12 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Rap</p>
                <p>Hora: 12 pm</p>
                <p>Duración : 5 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Hacia el Sur en el Atlántico (5 P.M)</h3>
                <p>Dirigido por: Bea Esteban</p>
                <p>Genero: Podcast, Feminismo Pop</p>
                <p>Hora: 5 pm</p>
                <p>Duración : 1 hora.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Metal (6 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Metal</p>
                <p>Hora: 6 pm</p>
                <p>Duración : 2 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Metal Army (8 P.M)</h3>
                <p>Dirigido por: Daniel Correal</p>
                <p>Genero: Metal, Glam</p>
                <p>Hora: 8 pm</p>
                <p>Duración : 2 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Ixion Odyssey Trance-mission (10 P.M)</h3>
                <p>Dirigido por: Erwin Fonseca, Nicolás Gardeazábal</p>
                <p>Genero: Electrónica, Trance</p>
                <p>Hora: 10 pm</p>
                <p>Duración : 2 horas.</p>
              </div> 
              <!-- termina programa -->
            
            </div>
          </div>
          <!-- Termina Sabado -->
          <!-- ************************************************************************************************** -->
          <!-- Empieza el Domingo -->
          <div data-role="collapsible">
            <h3>Domingo</h3>
            <div data-role="collapsible-set">

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Electronica (12 A.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Musica Electronica</p>
                <p>Hora: 12 am</p>
                <p>Duración : 8 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Reggae en Español (8 A.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Reggae en Español, Roots, Dancehall</p>
                <p>Hora: 8 am</p>
                <p>Duración : 4 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>English Reggae (12 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Reggae en Ingles</p>
                <p>Hora: 12 pm</p>
                <p>Duración : 3 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>TraBel ES + Rock (3 P.M)</h3>
                <p>Dirigido por: Carlos Cazares</p>
                <p>Genero: Rock Español e Ingles</p>
                <p>Hora: 3 pm</p>
                <p>Duración : 1 hora.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Rock (4 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Rock Variado</p>
                <p>Hora: 4 pm</p>
                <p>Duración : 4 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>El Ruedo (7 P.M)</h3>
                <p>Dirigido por: Juan David Ortiz</p>
                <p>Genero: Opinion, Análisis, Informativo</p>
                <p>Hora: 7 pm</p>
                <p>Duración : 1 hora.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Rock (8 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Rock Variado</p>
                <p>Hora: 8 pm</p>
                <p>Duración : 2 horas.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Construyendo Espacios (10 P.M)</h3>
                <p>Dirigido por: Miguel Alvis</p>
                <p>Genero: Variado</p>
                <p>Hora: 10 pm</p>
                <p>Duración : 1 hora.</p>
              </div> 
              <!-- termina programa -->

              <!-- Programa -->
              <div data-role="collapsible" data-content-theme="a">
                <h3>Electronica (11 P.M)</h3>
                <p>Dirigido por: Radio3HP</p>
                <p>Genero: Electronica</p>
                <p>Hora: 11 pm</p>
                <p>Duración : 1 hora.</p>
              </div> 
              <!-- termina programa -->
            
            </div>
          </div>
          <!-- Termina Domingo -->


          
        </div>

      </div> <!-- data-role /content -->

      <div data-role="footer" data-position="fixed">    
        <div data-role="navbar">
          <ul>
            <li><a href="#radio3hp" data-iconpos="top" data-icon="home">Radio</a></li>
            <li><a href="#programacion" data-iconpos="top" data-icon="grid">Programación</a></li>
            <li><a href="#acercade" data-iconpos="top" data-icon="star">Acerca de</a></li>
          </ul>
        </div><!-- /navbar -->
      </div><!-- /footer -->

    </div>




	</body>
</html>