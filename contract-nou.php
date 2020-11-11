<!DOCTYPE html>
<html>
<head>
    <!-- Made by Mihai Ciufudean - Icey.ro -->
    <!--  Continut oferit de: viatadefreelacer.ro -->
    
<title>Creare contract nou</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://cdn.tiny.cloud/1/ilmt5rlenq2ge9vy0i3s8zr5b2d3apfytm42fc3kvl9jo1kz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container" style="height:50px;"></div>
<div id="Titlu formular" class="content-formular">
    <h2 style="text-align:center"> Contract nou</h2>
</div>
<div class="container">
<div id="formular-client">
    <form action="modele/contract.php" data-toggle="validator" method="post" role="form">
         <div class="form-row">
            <div class="form-group col-md-6">
                <label for="selectordata1">Data inceput</label>
                <input type="date" class="form-control hasDatepicker" id="selectordata1" name="data" placeholder="dd.mm.yyyy">
            </div>
            <div class="form-group col-md-6">
                <label for="nrcontract">Numar contract</label>
                <input type='text' class="form-control" id='selectordata1' name="nr_contract" placeholder="ICY101">
            </div>            
            <div class="form-group col-md-6">
                <label for="nume-firma">Nume Firma</label>
                <input type="text" class="form-control" id="nume-firma" name="nume_firma" placeholder="SC FIRMA MEA SRL">
            </div>
            <div class="form-group col-md-6">
                <label for="cif">Cif</label>
                <input type='text' class="form-control" id='cif' name="cif" placeholder="RO  / 2200555">
            </div>
            <div class="form-group col-md-6">
                <label for="reg-com">Reg. Com. </label>
                <input type="text" class="form-control" id="reg-com" name="reg_com" placeholder="J4343/343/2020">
            </div>
            <div class="form-group col-md-6">
                <label for="adrs">Adresa</label>
                <input type="text" class="form-control" id="adrs" name="adresa" placeholder="Strada Livezii,Nr. 2,Bl. 2,et.3">
            </div>
            <div class="form-group col-md-6">
                <label for="judet">Judet</label>
                <input type="text" class="form-control" id="judet" name="judet" placeholder="Sibiu">
            </div>
            <div class="form-group col-md-6">
                <label for="localitate">Localitea</label>
                <input type="text" class="form-control" id="localitate" name="localitate" placeholder="Sura Mare">
            </div>
            <div class="form-group col-md-6">
                <label for="reprezentant">Reprezentant legal</label>
                <input type="text" class="form-control" id="reprezentant" name="reprezentant" placeholder="Mihai Ciufudean">
            </div>
            <div class="form-group col-md-6">
                <label for="functiereprezentant">In calitate de</label>
                <select class="browser-default custom-select"  id="functiereprezentant" name="functiereprezentant">
                    <option selected>Selecteaza din lista</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Manager">Manager</option>
                    <option value="Client">Client</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail" class="control-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" data-error="Bruh, that email address is invalid" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="telefon">Telefon</label>
                <input type="tel" class="form-control" id="telefon" name="telefon" placeholder="0784418416">
            </div>
            <div class="form-group col-md-6">
                <label for="duratacontract">Durata contract (nr de zile sau luni)</label>
                <input type="text" class="form-control" id="duratacontract" name="duratacontract" placeholder="10 zile / o luna">
            </div>
            <div class="form-group col-md-6">
                <label for="duratacontract">Costuri aditionale ce nu sunt incluse</label>
                <input type="text" class="form-control" id="costuriaditionale" name="costuriaditionale" placeholder="Hosting / Buget Ads / domeniu / etc">
            </div>
            <div class="form-group col-md-6">
                <label for="duratacontract">Data / Metoda de facturare</label>
                <input type="text" class="form-control" id="datadefacturare" name="datadefacturare" placeholder="La finalizarea serviciilor / in fiecare 15 a lunii">
            </div>
            <div class="form-group col-md-6">
                <label for="reprezentant">Valoare contract</label>
                <input type="text" class="form-control" id="reprezentant" name="pret" placeholder="2000 lei">
            </div>

        </div>
        <div class="form-group">
        <div class="form-group" style="padding-bottom:10px;"><h4>Anexa la contract</h4></div>
            <label for="exampleFormControlTextarea1">Scrie mai jos ce include anexa</label>
            <textarea name="anexainclude"></textarea>
            <script>tinymce.init({
                selector:"textarea",
                placeholder:"TITLU SERVICIU - rand nou - adaugi ce include serviciu  - rand nou - a (daca e nevoie) adaugi OBSERVATII  - rand nou - adugi observatiile",
                plugins: ["advlist lists autolink lists media table "],
                toolbar: "'undo redo | styleselect | bold italic | alignleft aligncenter alignright | numlist bullist | casechange | code"
                });
            </script>
  </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top: 16px; margin-bottom: 150px;">Genereaza contractul</button>
    </form>
</div>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>
</html>


