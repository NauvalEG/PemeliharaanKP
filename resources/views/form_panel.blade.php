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
  <legend>Lembar Monitoring Panel</legend>
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
  <div class="col-md-4">
    <h4 align="center">Kebersihan Ruangan</h4>
  </div>
  <div class="col-md-4">
    <h4 align="center">Suara / Kebisingan</h4>
  </div>
  <div class="col-md-4">
    <h4 align="center">Temperatur Ruangan</h4>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <label class="radio-inline">
        <input type="radio" name="bersih" id="bersihPanel" value="1"> Bersih
      </label>
      <label class="radio-inline">
        <input type="radio" name="bersih" id="bersihPanel" value="2"> Sedang
      </label>
      <label class="radio-inline">
        <input type="radio" name="bersih" id="bersihPanel" value="3"> Kotor
      </label>
  </div>
  <div class="col-md-4">
    <div class="row">
      <div class="col-md-5">
        Alat ukur (dB) :
      </div>
      <div class="col-xs-4">
        <input class="form-control input-sm" type="text" name="dbPompa">
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="row">
      <div class="col-md-6">
        Ambient Ruangan :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="ambient">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    
  </div>
  <div class="col-md-4">
Indera Pendengaran :<br>
    <label class="radio-inline">
      <input type="radio" name="dengarPanel" id="dengar" value="1"> Normal
      </label>
      <label class="radio-inline">
        <input type="radio" name="dengarPanel" id="dengar" value="2"> Tidak Normal
      </label>
  </div>
  <div class="col-md-4">
    <div class="row">
      <div class="col-md-6">
        Rata-rata Suhu Ruangan :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="rataSuhu">
      </div>
    </div>
  </div>
</div><hr>


<div class="row">
  <div class="col-md-6">
    <h4 align="center">Kondisi Panel</h4>
  </div>
  <div class="col-md-6">
    <h4 align="center">Peralatan dengan Suhu Ekstrim</h4>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    Peralatan Rusak : 
      <label class="radio-inline">
        <input type="radio" name="dengarPompa" id="radioPompa" value="1"> Normal
      </label>
      <label class="radio-inline">
        <input type="radio" name="dengarPompa" id="radioPompa" value="2"> Tidak Normal
      </label>
  </div>
  <div class="col-md-6"></div>
</div>
<div class="row">
  <div class="col-md-6">
    <table class="table table-bordered">
  ...
    </table>
  </div>
  <div class="col-md-6">
    <table class="table table-bordered">
  ...
    </table>
  </div>
</div><hr>

<div class="row">
  <h4>Kuat Arus Elektromotor (A)</h4>
</div>
<div class="row">
  <textarea class="form-control" rows="3"></textarea>
</div>

</body>
</html>