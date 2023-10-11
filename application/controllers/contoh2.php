<?php
class contoh2 extends CI_Controller {
    public function index(){
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuri Nuryanti Personal Website</title>
</head>

<body>
    <nav>
        <a href="datadiri.html">DATA DIRI</a> |
        <a href="dataakademik.html">DATA AKADEMIK</a> |
        <a href="contact.html">KOMENTAR</a> 
    </nav>

    <hr />

    <header style="text-align: center;">
        <img src="image/Delia.jpg" width="200" height="200" style="border-radius: 50%;"/>
        <h1>Nuri Nuryanti</h1>
    </header>

    <hr />

    <article style="text-align: center;">
        <h2>ABOUT ME</h2>
        <p>
            Hi, saya Nuri Nuryanti, Saya sedang belajar di Universitas Bina Sarana Informatika
            Jurusan Sistem Informasi semester 3!
        </p>
    </article>

    <div style="max-width: 600px; margin: 3em auto">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Motivasi Untuk Kuliah</th>
                    <th>Keinginan setelah lulus kuliah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <ul>
                            <li>Biar dapet uang jajan wkwkwk</li>
                            <li>Biar banyak temen donggg</li>
                            <li>Jajannnn</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Ofc kerja di tempat yang aku mau</li>
                            <li>Bisa beli mobil dan rumah sendiri hahaha</li>
                            <li>Soon deh yang lain</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <hr>
    <footer style="text-align: center;">
        <p>Copyright &copy; 2020 Salma Aulia.</p>
    </footer>
</body>
</html>
<?php
    }
}