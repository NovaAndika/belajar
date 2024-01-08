<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK 2 BanjarBaru</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    {{-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-primary fixed-top">
            <div class="container-fluid">
              <h3 class="text-light">SMKN 2 BANJARBARU</h3>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="offcanvas offcanvas-end text-bg-primary" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">SMKN 2 BANJARBARU</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#perkenalan-smk">Perkenalan SMK</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#jurusan">Jurusan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#profesi">Karir</a>
                    </li>
                    <li>
                        <button type="button" class="btn btn-dark mt-5"><a href="formulir.php" class="text-light">Daftar</a></button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <main  style="margin-top: 60px;">
        <section>          
           <div class="container-fluid p-0" style="margin-top: 30px; height: 740px; background-color: beige;">
             <!-- <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(134.245, 130.257, 128.977, 1)" offset="0%"></stop><stop stop-color="rgba(229.87, 229.87, 229.87, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,98L40,155.2C80,212,160,327,240,343C320,359,400,278,480,212.3C560,147,640,98,720,98C800,98,880,147,960,179.7C1040,212,1120,229,1200,253.2C1280,278,1360,310,1440,294C1520,278,1600,212,1680,179.7C1760,147,1840,147,1920,187.8C2000,229,2080,310,2160,310.3C2240,310,2320,229,2400,236.8C2480,245,2560,343,2640,383.8C2720,425,2800,408,2880,408.3C2960,408,3040,425,3120,383.8C3200,343,3280,245,3360,196C3440,147,3520,147,3600,122.5C3680,98,3760,49,3840,98C3920,147,4000,294,4080,351.2C4160,408,4240,376,4320,343C4400,310,4480,278,4560,228.7C4640,180,4720,114,4800,81.7C4880,49,4960,49,5040,65.3C5120,82,5200,114,5280,106.2C5360,98,5440,49,5520,89.8C5600,131,5680,261,5720,326.7L5760,392L5760,490L5720,490C5680,490,5600,490,5520,490C5440,490,5360,490,5280,490C5200,490,5120,490,5040,490C4960,490,4880,490,4800,490C4720,490,4640,490,4560,490C4480,490,4400,490,4320,490C4240,490,4160,490,4080,490C4000,490,3920,490,3840,490C3760,490,3680,490,3600,490C3520,490,3440,490,3360,490C3280,490,3200,490,3120,490C3040,490,2960,490,2880,490C2800,490,2720,490,2640,490C2560,490,2480,490,2400,490C2320,490,2240,490,2160,490C2080,490,2000,490,1920,490C1840,490,1760,490,1680,490C1600,490,1520,490,1440,490C1360,490,1280,490,1200,490C1120,490,1040,490,960,490C880,490,800,490,720,490C640,490,560,490,480,490C400,490,320,490,240,490C160,490,80,490,40,490L0,490Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(223.04, 199.256, 191.618, 1)" offset="0%"></stop><stop stop-color="rgba(220.763, 216.123, 205.867, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,392L40,351.2C80,310,160,229,240,163.3C320,98,400,49,480,98C560,147,640,294,720,294C800,294,880,147,960,106.2C1040,65,1120,131,1200,179.7C1280,229,1360,261,1440,236.8C1520,212,1600,131,1680,114.3C1760,98,1840,147,1920,147C2000,147,2080,98,2160,114.3C2240,131,2320,212,2400,277.7C2480,343,2560,392,2640,416.5C2720,441,2800,441,2880,375.7C2960,310,3040,180,3120,163.3C3200,147,3280,245,3360,236.8C3440,229,3520,114,3600,98C3680,82,3760,163,3840,196C3920,229,4000,212,4080,179.7C4160,147,4240,98,4320,122.5C4400,147,4480,245,4560,277.7C4640,310,4720,278,4800,285.8C4880,294,4960,343,5040,367.5C5120,392,5200,392,5280,326.7C5360,261,5440,131,5520,81.7C5600,33,5680,65,5720,81.7L5760,98L5760,490L5720,490C5680,490,5600,490,5520,490C5440,490,5360,490,5280,490C5200,490,5120,490,5040,490C4960,490,4880,490,4800,490C4720,490,4640,490,4560,490C4480,490,4400,490,4320,490C4240,490,4160,490,4080,490C4000,490,3920,490,3840,490C3760,490,3680,490,3600,490C3520,490,3440,490,3360,490C3280,490,3200,490,3120,490C3040,490,2960,490,2880,490C2800,490,2720,490,2640,490C2560,490,2480,490,2400,490C2320,490,2240,490,2160,490C2080,490,2000,490,1920,490C1840,490,1760,490,1680,490C1600,490,1520,490,1440,490C1360,490,1280,490,1200,490C1120,490,1040,490,960,490C880,490,800,490,720,490C640,490,560,490,480,490C400,490,320,490,240,490C160,490,80,490,40,490L0,490Z"></path></svg>  -->
            <div class="muka row d-flex align-items-center w-100">
                <div class="content1 w-25 ">
                    <img src="{{ asset('images/smk-milf-removebg-preview (1).png')}}" alt="" width="100%" height="400px">
                </div>
                <div class="content2 w-50">
                        <img src="{{asset('images/study-whitme.png')}}" alt="" width="100%" height="350px">
            
                    <div class="daftar d-flex justify-content-center align-content-center w-100">
                        <button type="button" class="btn btn-primary mt-5"><a href="formulir.php" class="text-light">Daftar</a></button>
                    </div>
                </div>
                <div class="content3 w-25">
                    <img src="{{asset('images/smk-boy-removebg-preview (1).png')}}" alt="" width="100%" height="400px">
                </div>
            </div>
           </div>
           
        </section>
        <section>
            <div class="container-fluid ">
                <div id="perkenalan-smk" class="mt-5">
                    <h1 class="fw-bold">Perkenalan SMK</h1>
                </div>
                <h2 style="text-align: center; font-style: italic; font-family: cursive;  margin: 5px; margin-top: 20px;">Karakteristik SMK</h2>
                <div class="perkenalan-smk">
                    <div class="keterangan-smk-1">
                        <ul style="list-style-type: none; margin: 5px; color: #000000;">
                            <li>1. Berorientasi pada kompetensi</li>
                            <li>2. Berbasis pada dunia kerja</li>
                            <li>3. Menggunakan pendekatan pembelajaran berbasis produk</li>
                            <li>4. Memiliki sarana dan prasarana yang memandai</li>
                            <li>5. Memiliki tenaga pendidikan yang kompeten</li>
                            <li>6. Memiliki program keahlian yang beragam</li>
                        </ul>
                    </div>
                    <img src="{{asset('images/perkenalan.png')}}" alt="" height="450px">
                    <div class="keterangan-smk-2 ">
                        <ul style="list-style-type: none; margin: 5px; color: #000000;">
                            <li>7 Memiliki sistem pembelajaran yang fleksibel </li>
                            <li>8 Memiliki kesempatan untuk melanjutkan ke perguruan tinggi</li>
                            <li>9 Memiliki peluang kerja yang tinggi </li>
                            <li>10 Memiliki biaya pendidikan yang terjankau</li>
                            <li>11 Memiliki dukungan dari pemerintah</li>
                            <li>12 memiliki peran penting dalam pembangunan bangsa </li>
                        </ul>
                    </div>
                </div>
                <div class="kelebihan-smk">
                    <h2 style="text-align: center; font-style: italic; font-family: cursive;  margin: 5px; margin-top: 20px;">Kelebihan SMK</h2>
                    
                    <div class="conten-kelebihan-smk">
                        <div class="kelebihan-smk-1 bg-light-subtle">
                            <p>SMK memiliki praktik kerja industri (PKL). PKL merupakan kesempatan bagi peserta didik SMK untuk belajar di dunia industri secara langsung. PKL dapat membantu peserta didik untuk mengembangkan keterampilan dan pengetahuan mereka.</p>
                        </div>
                        <div class="kelebihan-smk-2 bg-primary-subtle">
                            SMK memiliki sertifikasi kompetensi. Sertifikasi kompetensi merupakan bukti bahwa peserta didik SMK telah memiliki keterampilan dan pengetahuan yang dibutuhkan untuk bekerja di bidang tertentu. 
                        </div>
                        <div class="kelebihan-smk-3 bg-dark-subtle">
                            SMK memiliki alumni yang sukses. Banyak alumni SMK yang berhasil berkarir di berbagai bidang. Hal ini menunjukkan bahwa SMK dapat menjadi sarana untuk meraih kesuksesan.
                        </div>
                        <img src="../assets/ok-smk-removebg-preview.png " alt="guru" height="350px">
                    </div>
                </div>
                  <div class="halaman w-100 d-flex justify-content-center flex-column align-content-center">
                        <h1 style="font-style: italic; font-family: cursive;  margin: 5px; margin-top: 20px;">Halaman Sekolah</h1>
                    <div class="conten-prestasi mt-3">
                        <div id="carouselExampleCaptions" class="carousel slide">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="../assets/6.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Halaman Depan Sekolah</h5>
                                  <p>SMKN 2 BANJARBARU</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="../assets/8.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Lapangan Basket</h5>
                                  <p>Untuk Olahraga dan lomba lainnya.</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="../assets/9.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Lapangan Fustsal</h5>
                                  <p>Unutk kegiatan acara dan di sewakan.</p>
                                </div>
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                    <h1 style="font-style: italic; font-family: cursive;  margin: 5px; margin-top: 20px;">prestasi</h1>
                        <div class="conten-prestasi m-3">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="../assets/prestasi1 (1).jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <!-- <div class="carousel-item">
                                    <img src="../assets/prestasi2.jpg" class="d-block w-100" alt="...">
                                  </div> -->
                                  <div class="carousel-item">
                                    <img src="../assets/prestasi3.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <!-- <div class="carousel-item">
                                    <img src="../assets/prestasi4.jpg" class="d-block w-100" alt="...">
                                  </div> -->
                                  <div class="carousel-item">
                                    <img src="../assets/prestasi5.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="../assets/prestasi6.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="../assets/prestasi7.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                       
                  </div>
            </div>
        </section>
        <section>
          <div id="jurusan">
            <h1 >jurusan</h1>
            <div class="jurusan-content">
                <div id="TJKT" class="jurusan-contaier">
                   <h2>TJKT</h2>
                   <img src="../assets/tkj-background.jpg" alt="tkj-background">
                   <p>
                    Teknik Komputer dan Jaringan (TKJ) adalah jurusan yang mempelajari tentang perancangan, instalasi, konfigurasi, dan Jurusan ini cocok untuk Anda yang tertarik dengan teknologi komputer dan telekomunikasi.</p>
                    <div class="detail-jurusan">
                        
                    </div>
                </div>
                
                <div id="DPIB" class="jurusan-contaier">
                    <h2>DPIB</h2>
                    <img src="../assets/DPIB.png" alt="DPIB background" >
                    <P> jurusan DPIB akan mempelajari berbagai mata pelajaran yang berkaitan dengan dunia arsitektur dan konstruksi, seperti gambar teknik, pengukuran tanah, struktur bangunan, mekanika, dan listrik bangunan.</P>
                    
                </div>
                <div id="TO" class="jurusan-contaier">
                    <h2>TO</h2>
                    <img src="../assets/to-profile.jpg" alt="To background">
                    <p>
                        Jurusan TO adalah singkatan dari Teknologi Otomotif. Jurusan ini mempelajari tentang teknik otomotif, mulai dari mesin, transmisi, body, hingga elektronika. Peserta didik jurusan TO akan mempelajari berbagai mata pelajaran yang berkaitan dengan dunia otomotif.</p>
                        
                </div>
                <div id="TITL" class="jurusan-contaier">
                    <h2>TKTL</h2>
                    <img src="../assets/tktl-profile.jpg" alt="TKTL background">
                    <p>
                        TKTL adalah singkatan dari Teknologi Kontrol dan Instrumentasi. Jurusan ini mempelajari tentang teknik kontrol dan instrumentasi, mulai dari sistem kontrol, instrumentasi, hingga otomasi.</p>
                        
                </div>
                <div id="TET" class="jurusan-contaier">
                    <h2>TET</h2>
                    <img src="../assets/tet-profile.jpeg" alt="TET background">
                    <p>
                        Jurusan Teknologi Energi Terbarukan (TET) adalah jurusan yang mempelajari tentang teknologi yang memanfaatkan energi terbarukan, seperti energi matahari, angin, air, biomassa, dan panas bumi. </p>
                       
                </div>
                <div id="TKP" class="jurusan-contaier">
                    <h2>TKP</h2>
                    <img src="../assets/tkp2.jpeg" alt="TKP background">
                    <p>
                        Jurusan TKP adalah singkatan dari Teknik Konstruksi dan Perumahan. Jurusan ini mempelajari tentang perencanaan, pelaksanaan, dan pemeliharaan bangunan dan perumahan. </p>
                      
                    </div>
                </div>
            </div>    
        </section>
        <section>
            <div class="karir-smk2bjb w-100">
              <div id="profesi" class="d-flex justify-content-center align-content-center flex-column">
                <h1 style="text-align: center;" > Prospek Karir</h1>
                  <div class="container-profesi ">
                      <button onclick="showContent('tjkt-karir')" class="btn btn-primary">TJKT</button>
                      <button onclick="showContent('dpib-karir')" class="btn btn-primary">DPIB</button>
                      <button onclick="showContent('to-karir')" class="btn btn-primary">TO</button>
                      <button onclick="showContent('titl-karir')" class="btn btn-primary">TITL</button>
                      <button onclick="showContent('tet-karir')" class="btn btn-primary">TET</button>
                      <button onclick="showContent('tkp-karir')" class="btn btn-primary">TKP</button>
                </div> 
                <div id="tjkt-karir">                   
                        <h4 style="text-align: center;">TJKT</h4>
                    <div class="profesi-container">                    
                        <div class="karir">
                            <h2>Perusahaan Teknologi Informasi (TI)</h2>
                            <img src="../assets/microsoft.jpg" alt="">
                            <p> Banyak lulusan TKJ bekerja di perusahaan TI sebagai teknisi jaringan, administrator jaringan, atau administrator sistem. Mereka bertanggung jawab untuk merawat, mengelola, dan memperbaiki infrastruktur TI perusahaan.</p>                   
                        </div>
                        <div class="karir">
                            <h2>Perusahaan Keamanan Cyber</h2>
                            <img src="../assets/kasparky.jpg" alt="">
                            <p>Dalam era yang semakin terhubung secara digital, perusahaan keamanan siber memainkan peran penting dalam melindungi data dan sistem. Lulusan TKJ dapat bekerja di perusahaan keamanan siber untuk menganalisis ancaman siber dan mengembangkan solusi keamanan</p>
                        </div>
                        <div class="karir">
                            <h2>Penyedia Layanan Internet (ISP)</h2>
                            <img src="../assets/isp.jpg" alt="">
                            <p> ISP mempekerjakan teknisi jaringan untuk menjaga dan memperbaiki jaringan internet mereka. Lulusan TKJ dapat bekerja di departemen dukungan teknis ISP.</p>
                        </div>
                        <div class="karir">
                            <h2>Perusahaan Telekomunikasi</h2>
                            <img src="../assets/Perusahaan-Telekomunikasi.jpg" alt="">
                            <p>Perusahaan telekomunikasi memerlukan teknisi jaringan untuk mengelola jaringan telekomunikasi mereka. Lulusan TKJ dapat bekerja di sini untuk memastikan konektivitas yang lancar.</p>
                        </div>
                    </div>
                </div>


              <div id="dpib-karir">
                  <h4 style="text-align: center;">DPIB</h4>
                  <div class="profesi-container">                             
                      <div class="karir">
                      <h2>Desainer Bangunan</h2>
                      <img src="../assets/Desainer-Bangunan.jpg" alt="">
                      <p> Lulusan DPIB dapat bekerja sebagai desainer bangunan yang bertanggung jawab untuk merancang bangunan dan struktur menggunakan perangkat lunak desain seperti AutoCAD, Revit, atau perangkat lunak lainnya.</p>
                      </div>

                      <div class="karir">
                      <h2>Modeler 3D</h2>
                      <img src="../assets/Modeler-3D.jpg" alt="">
                      <p>Lulusan DPIB dapat menjadi modeler 3D yang menghasilkan model tiga dimensi dari bangunan, interior, atau elemen-elemen arsitektur lainnya. Pekerjaan ini sering melibatkan penggunaan perangkat lunak pemodelan 3D seperti SketchUp, Rhino, atau Blender.</p>
                      </div>

                      <div class="karir">
                      <h2>Drafter Bangunan</h2>
                      <img src="../assets/Drafter-Bangunan.jpg" alt="">
                      <p>Drafter bangunan menghasilkan gambar teknis dan rencana konstruksi berdasarkan desain yang telah dibuat oleh arsitek dan desainer. Mereka menggunakan perangkat lunak CAD (Computer-Aided Design) untuk membuat gambar teknis yang digunakan dalam proses konstruksi.</p>
                      </div>

                      <div class="karir">
                      <h2>BIM Coordinator</h2>
                      <img src="../assets/BIM-Coordinator.jpg" alt="">
                      <p> Building Information Modeling (BIM) Coordinator bertanggung jawab untuk mengoordinasikan proyek-proyek konstruksi yang menggunakan BIM. Mereka memastikan bahwa semua pemangku kepentingan, termasuk arsitek, insinyur, dan kontraktor, bekerja dengan data BIM yang akurat.</p>                   
                      </div>
                  </div>
              </div>
                <div id="to-karir">
                    <h4 style="text-align: center;">TEKNIK OTOMOTIF</h4>
                    <div class="profesi-container">                                        
                      <div class="karir">
                        <h2>Teknisi Otomotif</h2>
                        <img src="../assets/Teknisi-Otomotif.jpg" alt="">
                        <p>Teknisi otomotif memeriksa, merawat, dan memperbaiki kendaraan bermotor seperti mobil, motor, dan truk. Mereka mengidentifikasi masalah mekanis, mengganti suku cadang yang rusak, dan melakukan perawatan berkala. </p>
                        </div>

                    <div class="karir">
                        <h2>Spesialis Diagnostik</h2>
                        <img src="../assets/Automotive-Diagnostic-Specialist.jpg" alt="">
                        <p> Spesialis diagnostik memiliki keterampilan khusus dalam mengidentifikasi masalah kompleks pada kendaraan dengan menggunakan perangkat diagnostik canggih</p>
                        </div>

                    <div class="karir">
                        <h2>Teknisi Mesin Diesel</h2>
                        <img src="../assets/Teknisi-Mesin-Diesel.jpg" alt="">
                        <p>Teknisi mesin diesel mengkhususkan diri dalam perawatan dan perbaikan mesin diesel, yang biasanya digunakan dalam truk berat, kendaraan konstruksi, dan mesin industri.</p>
                    </div>
                    

                    <div class="karir">
                        <h2>Pemilik Bengkel</h2>
                        <img src="../assets/Pemilik-Bengkel.jpg" alt="">
                        <p> Jika Anda memiliki keterampilan bisnis, Anda dapat membuka bengkel otomotif Anda sendiri. Ini memerlukan pemahaman yang mendalam tentang operasi bisnis dan manajemen.</p>
                    </div>
                </div>
                </div>
                <div id="titl-karir">
                        <h4 style="text-align: center;">Teknik Instalasi Tenaga Listrik</h4>
                        <div class="profesi-container">                        
                            <div class="karir">
                            <h2>Teknisi Instalasi Listrik</h2>
                            <img src="../assets/Teknisi-Instalasi-Listrik.jpg" alt="">
                            <p>Teknisi instalasi listrik bertanggung jawab untuk merancang, menginstal, dan memelihara sistem listrik dalam berbagai bangunan dan fasilitas, termasuk rumah, gedung perkantoran, pabrik, dan lainnya.</p>
                            
                            </div>
                            <div class="karir">
                            <h2>Teknisi Perawatan Listrik</h2>
                            <img src="../assets/Teknisi-Perawatan-Listrik.jpg" alt="">
                            <p>Teknisi perawatan listrik melakukan pemeliharaan rutin dan perbaikan pada sistem listrik untuk memastikan kinerja yang optimal dan keamanan. Mereka juga dapat mengatasi gangguan listrik yang terjadi.</p>
                            
                            </div>
                            <div class="karir">
                            <h2>Teknisi Sistem Energi Terbarukan</h2>
                            <img src="../assets/Teknisi-Sistem-Energi-Terbarukan.jpg" alt="">
                            <p> Dalam era peningkatan penggunaan energi terbarukan, lulusan TITL dapat memilih untuk bekerja di bidang teknologi energi terbarukan, seperti panel surya atau turbin angin</p>                        
                            </div>
                            <div class="karir">
                            <h2>Teknisi Kendali Listrik</h2>
                            <img src="../assets/Electrical-Control-Technician.jpg" alt="">
                            <p>Teknisi kendali listrik bekerja dengan sistem kendali otomatis dan elektronik untuk mengoperasikan dan mengontrol peralatan dan mesin secara otomatis.</p>                      
                        </div>
                </div>
                </div>

                <div id="tet-karir">
                    <h4 style="text-align: center;">Teknik Energi Terbarukan </h4>
                    <div class="profesi-container">                     
                        <div class="karir">
                        <h2>Insinyur Energi Terbarukan</h2>
                        <img src="../assets/Renewable-Energy-Engineer.jpg" alt="">
                        <p>Insinyur energi terbarukan merancang, mengembangkan, dan memelihara infrastruktur yang menggunakan sumber energi terbarukan seperti panel surya, turbin angin, dan sistem bioenergi. Mereka juga memantau kinerja sistem dan melakukan pemeliharaan rutin.</p>
                          </div>
                        <div class="karir">
                            <h2>Spesialis Pemasangan Sistem Energi Terbarukan</h2>
                            <img src="../assets/Renewable-Energy-System-Installation-Specialist.jpg" alt="">
                            <p>Spesialis pemasangan sistem energi terbarukan terlibat dalam instalasi fisik dan pemasangan perangkat seperti panel surya, turbin angin, atau sistem panas bumi di lokasi proyek.</p>                         
                        </div>
                        <div class="karir">
                        <h2>Teknisi Turbin Angin</h2>
                        <img src="../assets/Wind-Turbine-Technician.jpg" alt="">
                        <p>Jika lulusan memiliki spesialisasi dalam turbin angin, mereka dapat bekerja dalam perawatan dan perbaikan turbin angin yang digunakan dalam produksi energi angin.</p>                       
                        </div>
                        <div class="karir">
                        <h2>Teknisi Sistem Panas Bumi</h2>
                        <img src="../assets/Geothermal-System-Technician.jpg" alt="">
                        <p>Jika lulusan memiliki spesialisasi dalam sistem panas bumi, mereka dapat bekerja dalam perawatan dan perbaikan sistem panas bumi yang digunakan untuk pengambilan energi panas bumi.</p>                       
                        </div>                   
                  </div>
                </div>
                
                  <div id="tkp-karir">
                    <h4 style="text-align: center;">Teknik Konstruksi dan Perumahan
                    </h4>
                    <div class="profesi-container">                     
                        <div class="karir">
                        <h2>Insinyur Konstruksi</h2>
                        <img src="../assets/Construction-Engineer.jpg" alt="">
                        <p>Insinyur konstruksi merencanakan, merancang, dan mengawasi proyek konstruksi, memastikan bahwa proyek tersebut memenuhi spesifikasi teknis dan persyaratan anggaran.</p>                       
                        </div>
                        <div class="karir">
                        <h2>Manajer Proyek Konstruksi</h2>
                        <img src="../assets/Construction-Project-Manager.jpg" alt="">
                        <p>Manajer proyek konstruksi mengelola seluruh proyek konstruksi, termasuk perencanaan, pengelolaan anggaran, pengawasan pekerjaan lapangan, dan koordinasi dengan pemangku kepentingan.</p>                        
                        </div>
                        <div class="karir">
                        <h2>Pengembang Properti</h2>
                        <img src="../assets/Property-Develope.jpg" alt="">
                        <p>Pengembang properti merencanakan dan mengelola pengembangan properti, termasuk perumahan, komersial, dan proyek properti lainnya.</p>                      
                        </div>
                        <div class="karir">
                        <h2>Asesor Kualitas Bangunan</h2>
                        <img src="../assets/Building-Quality-Assessor.jpg" alt="">
                        <p>Asesor kualitas bangunan memeriksa dan menilai kualitas konstruksi dan bangunan untuk memastikan bahwa mereka memenuhi standar dan peraturan yang berlaku.</p>                       
                        </div>
                    </div>
                </div>             
            </div> 
         </div>          
        </section>
        <section>
          <div class="QnA" >
            <h1 class="fs-2 text-bg-light text-center">Pertanyaan yang sering di ajukan!</h1>
            <div class="container-QnA d-flex d-flex justify-content-center mt-3">
                <div class="accordion accordion-flush col-md-6 " id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Apa fasilitas yang tersedia di SMK BanjarBaru?
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">SMK 2 BanjarBaru memiliki fasilitas yang memandai untuk mendukung proses pembelajarandan kegiatan siswa.Berikut fasilitas yang tersediadi smk 2 banjar baru <code>1. Laboratorium komputer 2. lapangan Olahraga 3. Mushola dan 4. kantin</code> fasilitas fasilitas ini disedialan unutk mendukung kegiatan belajar siswa dan meningkatkan kualitas pendidikan di SMK 2 BanjarBaru.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Bagaimana kesempatan kerja setelah lulus dari program keahlian tertentu di SMK 2 Banjarbari?
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">SMK menawarkan berbagai program keahlian yang relevan dengan kebutuhan  industri, sehingga lulusan smk memiliki keterampilan dan pengetahuan yang di butuhkan untuk berkerja.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Bagaimana kurikulum dan metode pembelajaran yang di terapkan di SMK ini?
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> SMK 2 Banjarbaru menawarkan metode pembelajaran berbasis project dan berbasis industri. Metode metode ini bertujuan untuk mempersiapkan siswa agar siap kerja di dunia industri.</div>
                      </div>
                    </div>
                  </div>
            </div>
            </div>
        </div> 
        </section>
    </main>
    <footer style="bottom: 0;">
      <div class="container-5 bg-primary-subtle">

        <div class="main-footer d-flex justify-content-center gap-4">

          <div class="main-footer-smk col-md-4 mt-5 ">
              <h3>SMKN 2 Banjarbaru</h3>
              <p>Jl. Nusantara Kelurahan No.1, RT.07/RW.05, <br>Locktabat Sel, Kec. BanjarBaru Selatan. <br>Banjar Baru, Kalimantan Selatan 7072</p>
          </div>
          <div class="col-md-1 mt-5 main-footer-profile">
              <h4>Pofile</h4>
              <p><a href="#jurusan" class="link-opacity-100-hover fst-italic">Jurusan</a></p>
              <p><a href="#perkenalan-smk" class="link-opacity-100-hover fst-italic">Pengenalan smk</a></p>
              <p><a href="#profesi" class="link-opacity-100-hover fst-italic">Profesi</a></p>

          </div>

          <div class="main-footer-informasi col-md-2 mt-5">
              <h4>Informasi</h1>
              <i class="bi bi-geo-alt-fill"></i><p>Banjar Baru, Kalimantan Selatan</p>
              <i class="bi bi-whatsapp"></i><p>(0511 4773452)</p>
              <i class="bi bi-browser-edge"></i><a href="http://smkn2banjarbaru.sch.id/">http://smkn2banjarbaru.sch.id/</a>
          </div>
          <div class="social-icons col-md-2 mt-5 gap-2">
              <h4>Social media</h4>
              <a href="https://www.youtube.com/@smknegeri2banjarbaru257"><img src="../assets/youtube-removebg-preview.png" alt="YouTube"></a>
              <a href="https://www.instagram.com/smkn2bjb/"><img src="../assets/ig-removebg-preview.png" alt="Instagram"></a>
              <a href="https://twitter.com/"><img src="../assets/twiter-removebg-preview.png" alt="Twitter"></a>
          </div>

      </div>                      
    </div>
        
    </footer>
    <script>function showContent(id) {
      document.getElementById('tjkt-karir').style.display = 'none';
      document.getElementById('dpib-karir').style.display = 'none';
      document.getElementById('to-karir').style.display = 'none';
      document.getElementById('titl-karir').style.display = 'none';
      document.getElementById('tet-karir').style.display = 'none';
      document.getElementById('tkp-karir').style.display = 'none';
      document.getElementById(id).style.display = 'block';
  }</script>

    <script src="../js/hamburger.js"></script>
    <script src="../js/img-geser.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>