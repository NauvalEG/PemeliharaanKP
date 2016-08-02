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
  <legend>Lembar Monitoring Pompa dan Elektromotor</legend>
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
  <h4 align="center">Input Elektromotor (V)</h4>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        R/U-N :
      </div>
      <div class="col-md-8">
       <input type="text" class="form-control input-sm" name="RUN1">
     </div>
   </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        T/W-N :
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control input-sm" name="TWN">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        R-S :
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control input-sm" name="RS">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        Rata-rata LN :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="rataLN">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        S/V-N :
      </div>
      <div class="col-md-8">
       <input type="text" class="form-control input-sm" name="SVN">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        X-N :
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control input-sm" name="XN">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        R-T :
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control input-sm" name="RT">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        Rata-rata LL :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="rataLL">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        R/U-N :
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control input-sm" name="RUN2">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        Z-N :
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control input-sm" name="ZN">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        S-T :
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control input-sm" name="ST">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        %Ub LN :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="persenUbLN">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">   </div>
  <div class="col-md-3">   </div>
  <div class="col-md-3">   </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-6">
        %Ub LL :
      </div>
      <div class="col-xs-6">
        <input class='form-control input-sm' type="text" name="persenUbLL">
      </div>
    </div>
  </div>
</div>
<hr>

<div class="row">
  <h4 align="center">Kuat Arus Elektromotor (A)</h4>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        R :
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control input-sm" name="R">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-7">
        Arus Rata-rata :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="rataArus1">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        U :
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control input-sm" name="U">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-7">
        Arus Rata-rata :
      </div>
      <div class="col-xs-5">
       <input class='form-control input-sm' type="text" name="rataArus2">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        S :
      </div>
      <div class="col-md-8">
       <input type="text" class="form-control input-sm" name="S">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-7">
        Unbalance Arus :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="ubArus1">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        V :
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control input-sm" name="V">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-7">
        Unbalance Arus :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="ubArus2">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        T :
      </div>
      <div class="col-md-8">
       <input type="text" class="form-control input-sm" name="T">
      </div>
    </div>
  </div>
  <div class="col-md-3">   </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        W :
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control input-sm" name="W">
      </div>
    </div>
  </div>
  <div class="col-md-3">   </div>
</div>
<div class="row">
  <div class="col-md-3">   </div>
  <div class="col-md-3">   </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        X :
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control input-sm" name="X">
      </div>
    </div>
  </div>
  <div class="col-md-3">   </div>
</div>
<div class="row">
  <div class="col-md-3">   </div>
  <div class="col-md-3">   </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        Y :
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control input-sm" name="Y">
      </div>
    </div>
  </div>
  <div class="col-md-3">   </div>
</div>
<div class="row">
  <div class="col-md-3">   </div>
  <div class="col-md-3">   </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-4">
        Z :
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control input-sm" name="Z">
      </div>
    </div>
  </div>
  <div class="col-md-3">   </div>
</div><hr>

<div class="row">
  <div class="col-md-6"><h4 align='center'>Cos φ</h4></div>
  <div class="col-md-6"><h4 align='center'>Daya</h4></div>
</div>
<div class='row'>
  <div class="col-md-6">
    <div class="row">  
      <div class="col-md-4">
        Sebelum Kapasitor :
      </div>  
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="cosSebelum">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        Sesudah Kapasitor :
      </div>  
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="cosSesudah">
      </div>
    </div>        
  </div>
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
</div><hr>

<div class="row">
  <h4 align="center">Vibrasi (mm/s)</h4>
</div>
<div class="row">
  <div class="col-md-6">
    <p class="text-center"><strong>Radial</strong></p>
  </div>
  <div class="col-md-6">
    <p class="text-center"><strong>Axial </strong></p>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <b>Horizontal</b>
  </div>
  <div class="col-md-3">
    <b>Vertical</b>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        1 :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibHor1">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        1 :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibVer1">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        1 :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibAxi1">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        2 :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibAxi2">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        2 :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibHor2">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        2 :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibVer2">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        3a :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibAxi3a">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        3b :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibAxi3b">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        3a :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibHor3a">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        3a :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibVer3a">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        4 :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibAxi4">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        5 :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibAxi5">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        3b :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibHor3b">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        3b :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibVer3b">
      </div>
    </div>
  </div>
  <div class="col-md-3">  </div>
  <div class="col-md-3">  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        4 :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibHor4">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        4 :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibVer4">
      </div>
    </div>
  </div>
  <div class="col-md-3">  </div>
  <div class="col-md-3">  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        5 :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibHor5">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-3">
        5 :
      </div>
      <div class="col-xs-5">
        <input class='form-control input-sm' type="text" name="vibVer5">
      </div>
    </div>
  </div>
  <div class="col-md-3">  </div>
  <div class="col-md-3">  </div>
</div><hr>

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
  <div class="col-md-4">
    <p align="center"><strong>Elektromotor</strong></p>
  </div>
  <div class="col-md-4">
    <p align="center"><strong>Joint Sambungan</strong></p>
  </div>
  <div class="col-md-4">
    <p align="center"><strong>Pompa</strong></p>
  </div>
</div>
<div class="row">
  <b>Bearing</b>
</div>
<div class="row">
  <div class="col-md-2"><p align="center"><b>1</b></p></div>
  <div class="col-md-2"><p align="center"><b>2</b></p></div>
  <div class="col-md-2"><p align="center"><b>3a</b></p></div>
  <div class="col-md-2"><p align="center"><b>3b</b></p></div>
  <div class="col-md-2"><p align="center"><b>4</b></p></div>
  <div class="col-md-2"><p align="center"><b>5</b></p></div>
</div>
<div class="row">
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">
        Horisontal :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempElmoHor1">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">
        Horisontal :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempElmoHor2">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">
        Horisontal :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempJointHor3a">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">
        Horisontal :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempJointHor3b">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">
        Horisontal :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempPompaHor4">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">
        Horisontal :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempPompaHor5">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">
        Vertikal :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempElmoVer1.1">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">
        Vertikal :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempElmoVer2.1">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">
        Vertikal :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempJointVer3a.1">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">
        Vertikal :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempJointVer3b.1">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">
        Vertikal :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempPompaVer4.1">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">
        Vertikal :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempPompaVer5.1">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempElmoVer1.2">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempElmoVer2.2">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempJointVer3a.2">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempJointVer3b.2">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempPompaVer4.2">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6">      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="tempPompaVer5.2">
      </div>
    </div>
  </div>
</div><br>
<div class="row">
  <b>Winding</b>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="row">
      <div class="col-xs-6">
        Thermometer Elmo :
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="termoElmo">
      </div>
    </div>
  </div>  
  <div class="col-md-4">
    <div class="row">
      <div class="col-xs-6">
        Thermometer Portable
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="termoPortable">
      </div>
    </div>
  </div>
  <div class="col-md-4">  </div>
  <div class="col-md-4">  </div>
</div><hr>
<div class="row">
  <h4 align="center">Suara / Kebisingan</h4>
</div>
<div class="row">
  <div class="col-md-6">
    <p align="center"><b>Elektromotor</b></p>
  </div>
  <div class="col-md-6">
    <p align="center"><b>Pompa</b></p>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="row">
      <div class="col-md-4">
        Alat ukur (dB) :
      </div>
      <div class="col-xs-4">
        <input class="form-control input-sm" type="text" name="dbElmo">
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="row">
      <div class="col-md-4">
        Alat ukur (dB) :
      </div>
      <div class="col-xs-4">
        <input class="form-control input-sm" type="text" name="dbPompa">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="row">
      Indera Pendengaran :
      <label class="radio-inline">
        <input type="radio" name="dengarElmo" id="radioElmo" value="1"> Normal
      </label>
      <label class="radio-inline">
        <input type="radio" name="dengarElmo" id="radioElmo" value="2"> Tidak Normal
      </label>
    </div>
  </div>
  <div class="col-md-6">
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
</div><hr>

<div class="row">
  <div class="col-md-4">
    <h4 align="center">Tekanan Pompa (kg/cm3)</h4>
  </div>
  <div class="col-md-4"></div>
  <div class="col-md-4"></div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="row">
      <div class="col-xs-3">
        Suction :
      </div>
      <div class="col-xs-3">
        <input class="form-control input-sm" type="text" name="pompaSuct">
      </div>
      <div class="col-xs-3">
        Discharge :
      </div>
      <div class="col-xs-3">
        <input class="form-control input-sm" type="text" name="pompaDisc">
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="row">
      <div class="col-xs-6">
        <strong>Total Debit(lt/dt) :</strong>
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="debit">
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="row">
      <div class="col-xs-5">
        <strong>Putaran RPM :</strong>
      </div>
      <div class="col-xs-6">
        <input class="form-control input-sm" type="text" name="rpm">
      </div>
    </div>
  </div>
</div><hr>

<div class="row">
  <h4 align="center">Bukaan Valve (%)</h4>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-5">
        Nomor 1 :
      </div>
      <div class="col-md-7">
       <input type="text" class="form-control input-sm" name="valve1">
     </div>
   </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-5">
        Nomor 5 :
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control input-sm" name="valve5">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-5">
        Nomor 9 :
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control input-sm" name="valve9">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-5">
        Nomor 12 :
      </div>
      <div class="col-xs-7">
        <input class='form-control input-sm' type="text" name="valve12">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-5">
        Nomor 2 :
      </div>
      <div class="col-md-7">
       <input type="text" class="form-control input-sm" name="valve2">
     </div>
   </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-5">
        Nomor 6 :
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control input-sm" name="valve6">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-5">
        Nomor 10 :
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control input-sm" name="valve10">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-5">
        Nomor 13 :
      </div>
      <div class="col-xs-7">
        <input class='form-control input-sm' type="text" name="valve13">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-5">
        Nomor 3 :
      </div>
      <div class="col-md-7">
       <input type="text" class="form-control input-sm" name="valve3">
     </div>
   </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-5">
        Nomor 7 :
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control input-sm" name="valve7">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-5">
        Nomor 11 :
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control input-sm" name="valve11">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-5">
        Nomor 14 :
      </div>
      <div class="col-xs-7">
        <input class='form-control input-sm' type="text" name="valve14">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-5">
        Nomor 4 :
      </div>
      <div class="col-md-7">
       <input type="text" class="form-control input-sm" name="valve4">
     </div>
   </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-5">
        Nomor 8 :
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control input-sm" name="valve8">
      </div>
    </div>
  </div>
  <div class="col-md-3"></div>
  <div class="col-md-3"></div>
</div>

</body>
</html>