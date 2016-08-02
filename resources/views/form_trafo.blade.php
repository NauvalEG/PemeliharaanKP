<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>First Time</title>

  <!-- Referencing Bootstrap CSS that is hosted locally -->
  <link href='css/bootstrap.min.css' rel='stylesheet'>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!--<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.0/superhero/bootstrap.min.css" rel="stylesheet">-->
  <!--<link href="http://pemeliharaan.pdam-sby.go.id/css/bootstrap.min.css" rel="stylesheet">-->
  <style>
    body{
      max-width: 1024px;
      margin: 22px auto;
      background: url("img/stardust.png");
    }

    .centered-form .panel{
      background: rgba(255, 255, 255, 0.8);
      box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
    }

    .centered-form{
      margin-top: 60px;
    }
  </style>

  <style>
    .centered-form .panel{
      background: rgba(255, 255, 255, 0.8);
      box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
    }

    .centered-form{
      margin-top: 60px;
    }
  </style> 

</head>

<body>
<div class="row">
  <legend>Lembar Monitoring Transformator</legend>
</div>
  <div class="row">
      <div class="col-md-6">
       <div class="row">
        <div class="col-md-3">
         Nama Aset :
       </div>
       <div class="col-md-9">
        <input type="text" class="form-control input-sm" name="nama">
      </div>
    </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-3">
          Lokasi :
        </div>
        <div class="col-md-9">
         <input type="text" class="form-control input-sm" name="lokasi">
       </div>
     </div>
    </div>
  </div>  

  <div class="row">
      <div class="col-md-6">
       <div class="row">
        <div class="col-md-3">
         Tanggal :
        </div>
        <div class="col-md-9">
          <input type="text" class="form-control input-sm" name="tanggal">
        </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-3">
            Pelaksana :
          </div>
          <div class="col-md-9">
            <input type="text" class="form-control input-sm" name="pelaksana">
          </div>
        </div>
      </div>
  </div>
  <hr>   

<div class="row">
  <h4 align="center">Tegangan</h4>
</div>
<div class="row">
  <div class="col-md-6">
    <strong>Primer</strong>
  </div>
  <div class="col-md-6">
    <strong>Sekunder</strong>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        R-N :
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control input-sm" name="primerRN">
     </div>
   </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        R-S :
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control input-sm" name="primerRS">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        R-N :
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control input-sm" name="sekunderRN">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        R-S :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="sekunderRS">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        S-N :
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control input-sm" name="primerSN">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        S-T :
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control input-sm" name="primerST">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        S-N :
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control input-sm" name="sekunderSN">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        S-T :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="sekunderST">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        T-N :
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control input-sm" name="primerTN">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        R-T :
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control input-sm" name="primerR-T">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        T-N :
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control input-sm" name="sekunderTN">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        R-T :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="sekunderRT">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        Rata-rata LN :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="primerRataLN">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        Rata-rata LL :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="primerRataLL">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        Rata-rata LN :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="sekunderRataLN">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        Rata-rata LL :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="sekunderRataLL">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        %Ub LN :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="primerPersenLN">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        %Ub LL :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="primerPersenLL">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        %Ub LN :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="sekunderPersenLN">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        %Ub LL :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="sekunderPersenLL">
      </div>
    </div>
  </div>
</div>
<hr>

<div class="row">
  <h4 align="center">Arus</h4>
</div>
<div class="row">
  <div class="col-md-6">
    <strong>Primer</strong>
  </div>
  <div class="col-md-6">
    <strong>Sekunder</strong>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        R :
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control input-sm" name="primerR">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        S :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="primerS">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        R :
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control input-sm" name="sekunderR">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        S :
      </div>
      <div class="col-xs-6">
       <input class='form-control input-sm' type="text" name="sekunderS">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        T :
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control input-sm" name="primerT">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        N :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="primerN">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        T :
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control input-sm" name="sekunderT">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        N :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="sekunderN">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        Rata-rata (Phasa) :
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control input-sm" name="primerRataPhasa">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        %Ub (Phasa) :
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control input-sm" name="primerPersenPhasa">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        Rata-rata (Phasa) :
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control input-sm" name="sekunderRataPhasa">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        %Ub (Phasa) :
      </div>
      <div class="col-md-6">
       <input type="text" class="form-control input-sm" name="sekunderPersenPhasa">
      </div>
    </div>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-md-6"><h4 align='center'>Cos φ</h4></div>
  <div class="col-md-6"><h4 align='center'>Daya</h4></div>
</div>
<div class='row'>
  <div class="col-md-6">
    <div class="row">  
      <div class="col-md-3">
        Sebelum Kapasitor :
      </div>  
      <div class="col-md-3">
        <input class='form-control input-sm' type="text" name="cosSebelum">
      </div>
      <div class="col-md-3">
        Sesudah Kapasitor :
      </div>  
      <div class="col-md-3">
        <input class='form-control input-sm' type="text" name="cosSesudah">
      </div>
    </div>        
  </div>
  <div class="col-md-6">
    <strong>Primer</strong>
  </div>
</div>
<div class="row">
  <div class="col-md-6"></div>
  <div class="col-md-6">
    <div class="row">
        <div class="col-md-2">
          P (Kw) :
        </div>  
        <div class="col-xs-2">
          <input class='form-control input-sm' type="text" name="kw">
        </div>
        <div class="col-md-2">
          Q (Kvar)
        </div>  
        <div class="col-xs-2">
          <input class='form-control input-sm' type="text" name="kvar">
        </div>
        <div class="col-md-2">
          S (Kva) :
        </div>  
        <div class="col-xs-2">
          <input class='form-control input-sm' type="text" name="kva">
        </div>
      </div>
    </div>
</div><br>
<div class="row">
  <div class="col-md-6"></div>
  <div class="col-md-6">
    <strong>Sekunder</strong>  
  </div>
</div><br>
<div class="row">
  <div class="col-md-6"></div>
  <div class="col-md-6">
    <div class="row">
        <div class="col-md-2">
          P (Kw) :
        </div>  
        <div class="col-xs-2">
          <input class='form-control input-sm' type="text" name="kw">
        </div>
        <div class="col-md-2">
          Q (Kvar)
        </div>  
        <div class="col-xs-2">
          <input class='form-control input-sm' type="text" name="kvar">
        </div>
        <div class="col-md-2">
          S (Kva) :
        </div>  
        <div class="col-xs-2">
          <input class='form-control input-sm' type="text" name="kva">
        </div>
      </div>
    </div>
</div>
<hr>

<div class="row">
  <h4 align="center">Temperatur</h4>
</div>
<div class="row">
  <div class="col-md-2">
    Ambient Ruangan :
  </div>
  <div class="col-xs-2">
    <input class="form-control input-sm" type="text" name="ambient">
  </div>
</div><br>
<div class="row">
  <div class="col-md-6">
    <div class="row">
      <div class="col-md-6"><strong>Pole Primer</strong></div>
      <div class="col-md-6"><strong>Pole Sekunder</strong></div>
    </div>
  </div>
  <div class="col-md-6">
    <p align="center"><strong>Winding</strong></p>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="row">
          <div class="col-md-3">
            R :
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control input-sm" name="primerR">
          </div>
          <div class="col-md-3">
            R :
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control input-sm" name="sekunderR">
          </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="row">
      <div class="col-md-6">
        Thermometer Trafo :
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control input-sm" name="termoTrafo">
      </div>
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="row">
      <div class="col-md-3">
            S :
      </div>
      <div class="col-md-3">
            <input type="text" class="form-control input-sm" name="primerS">
      </div>
      <div class="col-md-3">
            S :
      </div>
      <div class="col-md-3">
            <input type="text" class="form-control input-sm" name="sekunderS">
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="row">
      <div class="col-md-6">
        Thermometer Laser (IR) :
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control input-sm" name="termoLaser">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="row">
      <div class="col-md-3">
            T :
      </div>
      <div class="col-md-3">
            <input type="text" class="form-control input-sm" name="primerT">
      </div>
      <div class="col-md-3">
            T :
      </div>
      <div class="col-md-3">
            <input type="text" class="form-control input-sm" name="sekunderT">
      </div>
    </div>
  </div>
  <div class="col-md-6">  </div>
</div><hr>

<div class="row">
  <div class="col-md-4"><h4 align="center">Warna Silica Gel (%)</h4></div>
  <div class="col-md-4"><h4 align="center">Level Oli (Visual)</h4></div>
  <div class="col-md-4"><h4 align="center">Suara/Kebisingan</h4></div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="row">
      <div class="col-md-6">
        Biru/Bagus :
      </div>
      <div class="col-xs-4">
        <input type="text" class="form-control input-sm" name="warnaGelBiru">
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label class="radio-inline">
        <input type="radio" name="levelOli" id="radioOli" value="1"> Kurang
    </label>
    <label class="radio-inline">
        <input type="radio" name="levelOli" id="radioOli" value="2"> Cukup
    </label>
    <label class="radio-inline">
        <input type="radio" name="levelOli" id="radioOli" value="3"> Berlebihan
    </label>
  </div>
  <div class="col-md-4">
    <div class="row">
      <div class="col-md-5">
        Alat ukur (dB) :
      </div>
      <div class="col-xs-4">
        <input class="form-control input-sm" type="text" name="dbTrafo">
      </div>
    </div>
  </div>
</div><br>
<div class="row">
  <div class="col-md-4">
        <div class="row">
      <div class="col-md-6">
        Putih/Lembab :
      </div>
      <div class="col-xs-4">
        <input type="text" class="form-control input-sm" name="warnaGelPutih">
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <h4 align="center">Kebocoran Packing/Oil Seal (Visual)</h4>
  </div>
  <div class="col-md-4">
    <div class="row">
      Indera Pendengaran :
      <label class="radio-inline">
        <input type="radio" name="dengarPompa" id="radioPompa" value="1"> Normal
      </label>
      <label class="radio-inline">
        <input type="radio" name="dengarPompa" id="radioPompa" value="2"> Tidak Normal
      </label>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="row">
      <div class="col-md-6">
        Hitam/Rusak :
      </div>
      <div class="col-xs-4">
        <input type="text" class="form-control input-sm" name="warnaGelHitam">
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label class="radio-inline">
        <input type="radio" name="oilSeal" id="radioSeal" value="1"> Baik
    </label>
    <label class="radio-inline">
        <input type="radio" name="oilSeal" id="radioSeal" value="2"> Tidak Baik
    </label>
  </div>
  <div class="col-md-4"></div>
</div>

</body>
</html>