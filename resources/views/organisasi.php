<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>organisasi</title>
    <style type="text/css">
        *{
            margin: 0 ;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            background-color: #2f5167;
            color: #fff;
            height: 50px

        }

        .logo {
            margin: 20px;
            float: left;
        }

        a{
            text-decoration: none;
            float: right;
            margin: 20px;
            color:  #fff;
        }

        .OSIS img{
            border: 10px 50px solid #efefef; 
            position: relative; 
            overflow: hidden; 
            background: #2f5167;
            margin:20px auto;
            width: 350px;
            height: 450px;
            display: flex;
            overflow: hidden;
            width: 300px;
            height: 400px; 
        }
        .OSIS h1,h3{
            position: relative; 
            overflow: hidden;
            margin:20px auto;
            text-align: center;
        }
        .ekskul img{
            height: 250px;
            width: 250px;
            margin-top: 10px;  
        }
        .ekskul {
            display: flex;
        }
        .ekskul h1{
            text-align: center;
        }
        .ekskul h3{
        
        }
        .Pramuka,.PMR,.Paskibra{
            margin:0 10%;
        }
    </style>
</head>
<body>
<div class="header">
        <div class="logo">
            SMKN 2 SUKABUMI
        </div>
        <div class="list-group">
            <a href="./daftar">Daftar</a>
            <a href="./jurusan">Kompetensi Keahlian</a>
            <a href="./organisasi">Organisasi</a>
            <a href="./profile">Profile</a>
            <a href="./beranda">Beranda</a>
        </div>
    </div>
    <div class="OSIS">
        <h1>    Organisasi Intra Sekolah </h1>
        <img src="https://www.smkn63jkt.sch.id/wp-content/uploads/2018/11/logo-osis.jpg">
        <h3>    Organisasi Intra Sekolah dianggotai oleh seluruh siswa-siswi SMK NEGERI 2 SUKABUMI sedangkan pengurus Organisasi ini merupakan orang-orang terpilih yang termasuk siswa-siswi SMK NEGERI 2 SUKABUMI. Tujuan didirikannya OSIS adalah untuk melatih siswa dalam berorganisasi dengan baik dan menjalankan kegiatan sekolah yang berhubungan dengan siswa. OSIS dibentuk dengan tujuan pokok: Menghimpun ide, pemikiran, bakat, kreativitas, serta minat para siswa ke dalam salah satu wadah yang bebas dari berbagai macam pengaruh negative dari luar sekolah. </h3>
    </div>
    <div class="ekskul">
        <div class="Pramuka">
         <h1>Pramuka</h1>
         <img src="https://i.pinimg.com/originals/fe/7a/95/fe7a95abb8efecb6e8a37ece29cbe75a.png">
         <h3>PRAJA MUDA KARANA</h3>
        </div>
        <div class="PMR">
         <h1>PMR</h1>
         <img src="https://2.bp.blogspot.com/-WA2WLzyzOTQ/U3BgtDPbBhI/AAAAAAAAAbY/DKgWAZQv5aA/s1600/LOGO+-+PMI.png">
         <h3>PALANG MERAH REMAJA</h3>
        </div>
        <div class="Paskibra">
        <h1>Paskira</h1>
        <img src="https://rekreartive.com/wp-content/uploads/2019/04/Logo-Paskibra-Sekolah-Warna.jpg">
        <h3>PASUKAN PENGIBAR BENDERA</h3>  
        </div>
    </div>
</body>
</html>