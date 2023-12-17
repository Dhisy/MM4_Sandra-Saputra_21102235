<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sandra Saputra</title>
  <link rel="icon" href="../practice 4/1666451548755.jpg" />

  <style type="text/css">
    .style1 {
      font-size: 16px;
      line-height: 1.5em;
    }

    * {
      box-sizing: border-box;
    }

    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    [class*="col-"] {
      float: left;
      padding: 15px;
    }

    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

    body {
      font-family: "Poppins", sans-serif;
    }

    .header {
      border-radius: 20px;
      background-color: #845ec2;
      color: #ffffff;
      padding: 40px;
      font-size: 10px;
      text-align: center;
      font-size: 1em;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 300px;
      background-color: #f1f1f1;
      box-shadow: inset 7px 7px 2px 2px rgb(250, 249, 249),
        7px 7px 2px 2px rgb(250, 249, 249);
    }

    li a {
      border-radius: 5px;
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
      text-align: center;
    }

    li a.active {
      background-color: #845ec2;
      color: white;
    }

    li a:hover:not(.active) {
      background-color: #845ec2;
      opacity: 60%;
      color: white;
    }

    .aside {
      border-radius: 20px;
      background-color: #845ec2;
      padding: 15px;
      color: #ffffff;
      text-align: center;
      font-size: 14px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12),
        0 1px 2px rgba(0, 0, 0, 0.24);
      border-radius: 30px;
      box-shadow: inset 7px 7px 2px 2px rgb(250, 249, 249),
        7px 7px 2px px rgb(250, 249, 249);
    }

    .footer {
      border-radius: 20px;
      background-color: #845ec2;
      color: #ffffff;
      text-align: center;
      font-size: 16px;
      padding: 18px;
    }

    /* For mobile phones: */
    [class*="col-"] {
      width: 100%;
    }

    @media only screen and (min-width: 600px) {

      /* For tablets: */
      .col-s-1 {
        width: 8.33%;
      }

      .col-s-2 {
        width: 16.66%;
      }

      .col-s-3 {
        width: 25%;
      }

      .col-s-4 {
        width: 33.33%;
      }

      .col-s-5 {
        width: 41.66%;
      }

      .col-s-6 {
        width: 50%;
      }

      .col-s-7 {
        width: 58.33%;
      }

      .col-s-8 {
        width: 66.66%;
      }

      .col-s-9 {
        width: 75%;
      }

      .col-s-10 {
        width: 83.33%;
      }

      .col-s-11 {
        width: 91.66%;
      }

      .col-s-12 {
        width: 100%;
      }
    }

    @media only screen and (min-width: 768px) {

      /* For desktop: */
      .col-1 {
        width: 8.33%;
      }

      .col-2 {
        width: 16.66%;
      }

      .col-3 {
        width: 25%;
      }

      .col-4 {
        width: 33.33%;
      }

      .col-5 {
        width: 41.66%;
      }

      .col-6 {
        width: 50%;
      }

      .col-7 {
        width: 58.33%;
      }

      .col-8 {
        width: 66.66%;
      }

      .col-9 {
        width: 75%;
      }

      .col-10 {
        width: 83.33%;
      }

      .col-11 {
        width: 91.66%;
      }

      .col-12 {
        width: 100%;
      }

      .rounded-image {
        border-radius: 100px;
        -webkit-border-radius: 100px;
        -moz-border-radius: 100px;
      }
    }
  </style>
</head>

<body>
  <div class="header">
    <h1>
      <strong>Sandra Saputra | 21102235 | MM4</strong>
    </h1>
  </div>

  <div class="row">
    <div class="col-3 col-s-3 menu">
      <ul>
        <li><a class="active" href="#home">PHP Dasar Menu</a></li>
        <li><a href="php/syntax.php">PHP Syntax</a></li>
        <li><a href="php/variables.php">PHP Variable</a></li>
        <li><a href="php/echo_print.php">PHP Echo / Print</a></li>
        <li><a href="php/data.php">PHP Data Types</a></li>
        <li><a href="php/strings.php">PHP String</a></li>
        <li><a href="php/numbers.php">PHP Number</a></li>
        <li><a href="php/math.php">PHP Math</a></li>
        <li><a href="php/constants.php">PHP Constants</a></li>
        <li><a href="php/magic_constants.php">PHP Magic Constants</a></li>
        <li><a href="php/operators.php">PHP Operators</a></li>
        <li><a href="php/if_else_elseif.php">PHP If...Else</a></li>
        <li><a href="php/switch.php">PHP Switch</a></li>
        <li><a href="php/loops.php">PHP Loops</a></li>
        <li><a href="php/functions.php">PHP Functions</a></li>
        <li><a href="php/arrays.php">PHP Arrays</a></li>
        <li><a href="php/superglobals.php">PHP Superglobals</a></li>
        <li><a href="php/regex.php">PHP RegEx</a></li>
      </ul>
    </div>

    <div class="col-6 col-s-9">
      <h1 style="text-align: justify" ;>
        <center>PHP</center>
      </h1>
      <p class="style1" style="text-align: justify">
      <h2>Mata Kuliah Pemrograman Web: PHP Dasar</h2>
      <p>
        Bahasa pemrograman berbasis web yang memiliki file dengan extensi
        file.php dan tidak dapat diakses tanpa adanya web server adalah PHP. Menurut
        Hidayatullah dan Kawistara dalam bukunya yang berjudul Pemrograman Web
        (2017:223) mengemukakan bahwa “PHP Hypertext Preprocessor adalah suatu
        bahasa scripting khususnya digunakan untuk web development”. PHP memiliki
        sifat server side scripting sehingga untuk menjalankan PHP harus menggunakan
        web server.
      </p>

      <p>
        Menurut Sibero (2013:49) mengatakan bahwa “PHP adalah pemrograman
        Interpreter yaitu proses penerjemahan baris kode sumber menjadi kode mesin
        yang dimengerti komputer secara langsung pada saat baris kode dijalankan”.
        Penjelasan di atas dapat disimpulkan bahwa bahasa pemrograman PHP
        adalah bahasa pemrograman yang dapat digunakan oleh pengguna untuk
        mengembangkan kode-kode fungsi PHP sesuai dengan kebutuhannya.
      </p>

      <p>Sumber:
        <a href="https://repository.bsi.ac.id/index.php/unduh/item/1103/File_10-Bab-II-Landasan-Teori.pdf.#:~:text=2.1.2.&text=Menurut%20Hidayatullah%20dan%20Kawistara%20dalam%20bukunya%20yang%20berjudul%20Pemrograman%20Web,khususnya%20digunakan%20untuk%20web%20development%E2%80%9D.">PHP</a>
      </p>

      </p>
    </div>

    <div class="col-3 col-s-12">
      <div class="aside">
        <h2>Tentang Saya</h2>
        <img class="rounded-image" src="../aset/DSC_9164.JPG" alt="SanS Photo's" width="150" height="150" align="middle" />
        <h2>
          <center><strong>Sandra Saputra</strong></center>
        </h2>
        <p class="style1">
          Saya Sandra Saputra biasa dipanggil Sandra,
          saya lahir di Bekasi pada tanggal 20 Maret 2003,
          sekarang saya merantau di kota Purwokerto dan saya 
          memiliki hobi nonton anime, saya sangat suka sekali 
          traveling bersama teman-teman dan hunting kulineran,
          serta saya memiliki cita-cita menjadi seorang traveller.
        </p>
      </div>
    </div>
  </div>

  <div class="footer">
    <p>
      <strong>Sandra Saputra Copyright &copy;
        <script>
          document.write(new Date().getFullYear());
        </script>
        All rights reserved.
      </strong>
    </p>
  </div>

  </body>
</html>