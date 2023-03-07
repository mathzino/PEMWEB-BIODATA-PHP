<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>fairusss.</title>
    <link rel="icon" type="image/png" href="avatar.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  </head>
  <body>
  <?php 
    $firstname = "M Fairus";
    $lastname = "Rama.";
    $fullname = "Muhammad Fairus Ramadhani";
    $desc = "Hello, I'm a college student studying Informatics with a focus on software development. I'm also a freelance front-end and software developer, taking on projects to develop custom solutions for clients. My focus is
    specifically on exploring the different frameworks that are used in software development such as React JS, React Native, and Express JS. While React JS and React Native are ideal for application development, Express JS is
    commonly used as a backend framework for developing web applications. Ultimately, my objective is to gain a robust understanding of the principles of software engineering and cultivate the necessary skills to become a skilled
    software developer.";
    $nama_website="fairusss";
    $tl = '29-11-2002';
    $major = "Informatics Stud.";
    $npm = "21081010090";
    $dob = new DateTime($tl);
    $now = new DateTime();
    $difference = $now->diff($dob);

    ?>
    <nav>
      <div class="navbar1">
        <div class="namenavbar">
          <div>
            <p class="myname"><?php echo $nama_website?><span class="dot">.</span></p>
          </div>
        </div>
        <div class="containerlogo">
          <a href="https://twitter.com/Mathzino_">
            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M20.3358 2.80845C19.5871 3.13812 18.7938 3.35573 17.9817 3.45428C18.8368 2.94032 19.477 2.13432 19.7842 1.18511C18.9917 1.64761 18.1133 1.98428 17.1783 2.17178C16.5615 1.51214 15.7441 1.07463 14.853 0.927198C13.962 0.779765 13.0472 0.930655 12.2508 1.35644C11.4543 1.78222 10.8207 2.45907 10.4484 3.28188C10.076 4.10469 9.9858 5.02742 10.1917 5.90678C6.78333 5.74595 3.76417 4.10845 1.74167 1.63511C1.37399 2.25996 1.18222 2.97264 1.18667 3.69761C1.18667 5.12261 1.91167 6.37511 3.01 7.11095C2.35905 7.09023 1.72248 6.91423 1.15333 6.59761V6.64761C1.15296 7.5946 1.48022 8.51256 2.07959 9.24574C2.67895 9.97893 3.51351 10.4822 4.44167 10.6701C3.84025 10.8313 3.21034 10.8555 2.59833 10.7409C2.86177 11.556 3.37305 12.2684 4.06085 12.7789C4.74864 13.2893 5.57863 13.5724 6.435 13.5884C4.98461 14.7267 3.19373 15.3445 1.35 15.3426C1.025 15.3426 0.700833 15.3234 0.375 15.2868C2.25476 16.4904 4.44043 17.1293 6.6725 17.1276C14.2167 17.1276 18.3375 10.8809 18.3375 5.47345C18.3375 5.29845 18.3375 5.12345 18.325 4.94845C19.13 4.36917 19.8244 3.64996 20.375 2.82511L20.3358 2.80845Z"
                fill="white"
                fill-opacity="0.92"
              />
            </svg>
          </a>
          <a href="https://github.com/mathzino">
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M10.375 0.247559C4.85 0.247559 0.375 4.72506 0.375 10.2476C0.375 14.6667 3.24 18.4142 7.2125 19.7351C7.7125 19.8292 7.89583 19.5201 7.89583 19.2542C7.89583 19.0167 7.8875 18.3876 7.88333 17.5542C5.10167 18.1576 4.515 16.2126 4.515 16.2126C4.06 15.0584 3.4025 14.7501 3.4025 14.7501C2.49667 14.1301 3.4725 14.1426 3.4725 14.1426C4.47667 14.2126 5.00417 15.1726 5.00417 15.1726C5.89583 16.7017 7.345 16.2601 7.91667 16.0042C8.00667 15.3576 8.26417 14.9167 8.55 14.6667C6.32917 14.4167 3.995 13.5567 3.995 9.72506C3.995 8.63339 4.3825 7.74173 5.02417 7.04173C4.91167 6.78923 4.57417 5.77256 5.11167 4.39506C5.11167 4.39506 5.94917 4.12673 7.86167 5.42006C8.66167 5.19756 9.51167 5.08756 10.3617 5.08256C11.2117 5.08756 12.0617 5.19756 12.8617 5.42006C14.7617 4.12673 15.5992 4.39506 15.5992 4.39506C16.1367 5.77256 15.7992 6.78923 15.6992 7.04173C16.3367 7.74173 16.7242 8.63339 16.7242 9.72506C16.7242 13.5667 14.3867 14.4126 12.1617 14.6584C12.5117 14.9584 12.8367 15.5717 12.8367 16.5084C12.8367 17.8467 12.8242 18.9217 12.8242 19.2467C12.8242 19.5092 12.9992 19.8217 13.5117 19.7217C17.5125 18.4101 20.375 14.6601 20.375 10.2476C20.375 4.72506 15.8975 0.247559 10.375 0.247559Z"
                fill="white"
                fill-opacity="0.92"
              />
            </svg>
          </a>
        </div>
      </div>
    </nav>
    <main class="main">
      <section class="container">
        <article class="introcontainer">
          <div class="major">
            <p>Informatics <span class="">Stud.</span></p>
          </div>
          <div class="name">
            <p><?php echo $firstname?></p>
            <p class=" "><?php echo $lastname?></p>
          </div>

          <div class="intro">
            <p>
            <?php echo $desc?>
            </p>
          </div>
          <div class="linkpersonalsite">
            <a href="https://fairusss.site/">
              <p>my personal site</p>
            </a>
          </div>
        </article>
        <figure class="figurecontainer">
          <div class="background-animate bganimate">
            <div class="avatarContainer">
              <img src="./avatar.png" width="420" height="420px" class="" />
            </div>
          </div>
        </figure>
      </section>
      <!--  -->
      <section class="containerbiodata">
        <h1 class="titlebiodata">Biodata</h1>
        <div class="containertable1">
          <table class="" style="width: 100%; border-collapse: collapse">
            <tr class="">
              <td class="thformat">Nama</td>
              <td class=""><?php echo $fullname?></td>
            </tr>
            <tr class="">
              <td class="thformat">Universitas</td>
              <td class="">UPN "Veteran" Jawa Timur</td>
            </tr>
            <tr class="">
              <td class="thformat">Major</td>
              <td class="">Informatics</td>
            </tr>
            <tr class="">
              <td class="thformat">NPM</td>
              <td class="">21081010090</td>
            </tr>
            <tr class="">
              <td class="thformat">Umur</td>
              <td class=""><?php echo $difference->y?></td>
            </tr>
            <tr class="">
              <td class="thformat">Tanggal Lahir</td>
              <td class=""><?php echo $tl?></td>
            </tr>
          </table>
        </div>
      </section>
      <!--contact  -->
      <section class="containerbiodata">
        <h1 class="titlebiodata">Contact</h1>
        <div class="containertable1">
          <table class="" style="width: 100%; border-collapse: collapse">
            <tr class="">
              <th class="thformat">Social Media</th>
              <th class="text-left">URL</th>
            </tr>
            <tr class="bordertop">
              <td class="thformat">Twitter</td>
              <td class="">
                <a href="https://twitter.com/Mathzino_ "> twitter.com/Mathzino_ </a>
              </td>
            </tr>
            <tr class="">
              <td class="thformat">Instagram</td>
              <td class="">
                <a href="https://instagram.com/fairusmfr"> instagram.com/fairusmfr </a>
              </td>
            </tr>
            <tr class="">
              <td class="thformat">Linkedin</td>
              <td class="">
                <a href="https://linkedin.com/in/muhammad-fairus-ramadhani-4895481b1/"> linkedin.com/in/muhammad-fairus-ramadhani-4895481b1/</a>
              </td>
            </tr>
          </table>
        </div>
      </section>
    </main>
    <footer>
      <p class="">© 2023 created by fairusss.</p>
    </footer>
  </body>
</html>
