<?php

/* Made by:
* Mihai @ icey.ro
* facebook: mihai ciufudean
* Continut oferit de: viatadefreelacer.ro
*/



require_once ('../includes/mpdf/vendor/autoload.php');


//Luam datele din formular 
    $c_data = $_POST['data'];
    $c_contract = $_POST['nr_contract'];
    $c_firma = $_POST['nume_firma'];
    $c_cif = $_POST['cif'];
    $c_com = $_POST['reg_com'];
    $c_adresa = $_POST['adresa'];
    $c_judet = $_POST['judet'];
    $c_localitate = $_POST['localitate'];
    $c_repr = $_POST['reprezentant'];
    $c_functie= $_POST["functiereprezentant"];
    $c_email = $_POST['email'];
    $c_tel = $_POST['telefon'];
    $c_duratacontract = $_POST['duratacontract'];
    $c_costuriaditionale = $_POST['costuriaditionale'];
    $c_datametfact = $_POST["datadefacturare"];
    $c_pret = $_POST['pret'];
    $c_anexatext = $_POST['anexainclude'];


$html = "
<p style='text-align: center;'><strong>Contract de prestari servicii<br /></strong><strong>Nr. $c_data din data 29.10.2020</strong></p>
<p><strong>ICEY DESIGN SRL-D</strong><span style='font-weight: 400;'>, cu sediul in </span><strong>Sura Mare, str. Livezii, nr. 2</strong><span style='font-weight: 400;'>, judetul </span><strong>Sibiu</strong><span style='font-weight: 400;'>, CUI </span><strong>37683026</strong><span style='font-weight: 400;'>, </span><strong>J32/783/2017</strong><span style='font-weight: 400;'>, reprezentat de </span><strong>Mihai Andrei Ciufudean</strong><span style='font-weight: 400;'> in calitate de </span><strong>administrator</strong><span style='font-weight: 400;'>, pe de o parte,</span></p>
<p><span style='font-weight: 400;'>si</span></p>
<p><strong>$c_firma</strong><span style='font-weight: 400;'> , cu sediul in <strong>$c_adresa</strong></span><span style='font-weight: 400;'>&nbsp;judetul </span><strong>$c_judet</strong><span style='font-weight: 400;'>, CUI <strong>$c_cif</strong></span><span style='font-weight: 400;'>, </span>Reg. Com.&nbsp;<strong>$c_com</strong><span style='font-weight: 400;'>, reprezentat de <strong>$c_repr</strong></span><span style='font-weight: 400;'>&nbsp;in calitate de <strong>$c_functie</strong></span><span style='font-weight: 400;'>, pe de alta parte au convenit sa incheie prezentul contract avand urmatoarele clauze:</span></p>
<p><strong>Art. 1 Obiectul Contractului</strong></p>
<p><span style='font-weight: 400;'>Obiectul Contractului consta in prestarea seviciilor detaliate in Anexa 1 si / sau actele aditionale la contract, de catre Prestator in folosul Beneficiarului.</span></p>
<p><strong>Art. 3 Durata</strong></p>
<p><span style='font-weight: 400;'>3.1. Durata Contractului este de&nbsp; <strong>$c_duratacontract</strong></span><span style='font-weight: 400;'>&nbsp;din ziua semnarii.</span></p>
<p><span style='font-weight: 400;'>3.2. Termenul de mai sus poate fi extins prin acordul partilor, exprimat in scris / se va extinde automat cu perioade de 3 luni daca niciuna dintre Parti nu transmite o notificare de incetare cu minim 30 de zile inainte de expirarea duratei .</span></p>
<p><strong>Art. 4 Pret</strong></p>
<p><span style='font-weight: 400;'>4.1. Pretul Serviciilor este&nbsp; detaliat in Anexa 1 si / sau actele aditionale la Contract.</span></p>
<p><span style='font-weight: 400;'>4.2. Pretul va include doar realizarea serviciilor de catre Prestator in folosul Beneficiarului, fara costuri aditionale precum: hosting, abonamente, etc.</span></p>
<p><span style='font-weight: 400;'>4.3. Pretul va fi facturat de catre Prestator Beneficiarului la <strong>$c_datametfact</strong></span><strong>.</strong></p>
<p><span style='font-weight: 400;'>4.3. Pretul se va plati in termen de 5 zile lucratoare de la transmiterea facturii de catre Prestator catre Beneficiar pe e-mail, conform datelor bancare din preambul. Dupa expirarea acestui termen, Beneficiarul va datora penalitati de 0.5% per zi de intarziere, iar Prestatorul va putea suspenda prestarea Serviciilor pana la plata integrala a Pretului plus penalitati.</span></p>
<p><span style='font-weight: 400;'>4.4. In mod corespunzator, Prestatorul va datora penalitati de 0.5% per zi de intarziere din valoarea Serviciilor prestate cu intarziere, cu un termen de gratie de 5 zile lucratoare, fara ca penalitatile sa poate depasi pretul total al acestor Servicii.8</span></p>
<p><span style='font-weight: 400;'>4.5. In cazul intarzierii platii cu peste 20 zile lucratoare, Prestatorul va putea solicita incetarea Contractului din culpa Beneficiarului prin notificare de reziliere, cu efecte imediate si fara acordarea unui termen de preaviz.</span></p>
<p><strong>Art. 5 Drepturi si obligatii</strong></p>
<p><span style='font-weight: 400;'>5.1. Prestatorul:</span></p>
<ul>
<li style='font-weight: 400;'><span style='font-weight: 400;'>va livra Serviciile cu profesionalism, la termenele agreate, oferind toata atentia necesara solicitarilor transmise de Beneficiar</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>respecta instructiunile Beneficiarului cu privire la Servicii, in masura in care acestea sunt in mod obiectiv implementabile</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>&nbsp;va informa Beneficiarul la cerere cu privire la stadiul Proiectului, in masura in care aceste solicitari se realizeaza la intervale de timp rezonabile si nu afecteaza realizarea Proiectului</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>va rezolva, cat se poate de prompt, orice problema legata de Serviciile furnizate, daca acestea se datoreaza Prestatorului</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>va acoperi integral orice prejudiciu cauzat Beneficiarului prin incalcarea clauzelor contractului</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>nu poate ceda drepturile si obligatiile contractuale decat cu acordul expres, scris al celeilalte Parti</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>&nbsp;va pastra confidentalitatea datelor si informatiilor ce decurg din Contract pe toata durata acestuia, precum si dupa incetarea Contractului</span></li>
</ul>
<p><span style='font-weight: 400;'>5.2. Beneficiarul:</span></p>
<ul>
<li style='font-weight: 400;'><span style='font-weight: 400;'>va achita Pretul Serviciilor in termenii si conditiile mentionate in Contract</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>va analiza si va raspunde prompt la toate comunicarile transmise de Prestator, inclusiv, dar nelimitat la: informatii necesare Prestatorului pentru realizarea Proiectului, feedback cu privire la Serviciile realizate sau etape ale acestora, posibile cheltuieli suplimentare, evenimente neprevazute aparute pe masura realizarii Proiectului.</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>il va informa pe Prestator in timp util privind orice schimbare dorita cu privire la Proiect, schimbare care va fi aplicata doar dupa confirmarea Prestatorului si cu posibilele modificari ale conditiilor financiare </span></li>
</ul>
<ul>
<li style='font-weight: 400;'><span style='font-weight: 400;'>va respecta libertatea Prestatorului si dreptul sau de a a fi implicat in proiecte profesionale pentru alti clienti, fara a se aduce insa atingere indeplinirii de catre Prestator a Serviciilor conform Contractului</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>nu poate ceda drepturile si obligatiile contractuale decat cu acordul expres, scris al celeilalte Parti</span></li>
</ul>
<p><strong>Art. 6 Notificari</strong></p>
<p><span style='font-weight: 400;'>6.1. Toate notificarile sau cererile intre Parti se vor realiza doar in scris si vor fi transmise prin e-mail, curier, personal sau prin posta cu confirmare de primire, conform urmatoarelor date de contact:</span></p>
<p><strong>Prestator:</strong></p>
<ul>
<li style='font-weight: 400;'>persoana de contact: <strong>Mihai Ciufudean</strong></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>adresa de e-mail: </span><strong>mihaiciufudean@icey.ro</strong></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>adresa: adresa societatii din preambulul Contractului</span></li>
</ul>
<p><strong>Beneficiar:</strong></p>
<ul>
<li style='font-weight: 400;'><span style='font-weight: 400;'>persoana de contact: <strong>$c_repr</strong></span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>adresa de e-mail: <strong>$c_email</strong></span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>adresa: adresa societatii din preambulul Contractului</span></li>
</ul>
<p><span style='font-weight: 400;'>6.2.</span> <span style='font-weight: 400;'>Orice modificare a datelor de mai sus trebuie adusa la cunostinta celeilalte Parti. In caz contrar, orice comunicare la adresele sus-mentionate va fi considerata valabila.</span></p>
<p><span style='font-weight: 400;'>6.3 Comunicarile se vor realiza in timpul programului normal de lucru, 10.00-17.00. Orice comunicare realizata in afara acestui interval se va considera primita a doua zi, in timpul programului de lucru.</span></p>
<p><span style='font-weight: 400;'>6.4 Orice comunicari realizate fara respectarea dispozitiilor de mai sus, inclusiv, dar nelimitat la: conversatie telefonica, mesaje SMS, WhatsApp, Messenger, nu vor fi considerate valabile intre Parti.</span></p>
<p><strong>Art.7 Declaratiile partilor</strong></p>
<p><span style='font-weight: 400;'>Partile declara ca:</span></p>
<ul>
<li style='font-weight: 400;'><span style='font-weight: 400;'>nu se afla in stare de insolventa sau insolventa iminenta</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>indeplinesc toate conditiile legale pentru a putea incheia in mod valabil prezentul Contract</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>&nbsp;semnatarii Contractului au puteri legale de reprezentare</span></li>
</ul>
<ul>
<li style='font-weight: 400;'>
<ul>
<li style='font-weight: 400;'><span style='font-weight: 400;'>Contractul a fost negociat in integralitatea sa</span></li>
</ul>
<p><strong>Art. 8. Confidentialitate</strong></p>
<p><span style='font-weight: 400;'>8.1. In scopul acestui Contract, &bdquo;Informatii confidentiale&rdquo; sunt toate datele dezvaluite reciproc de catre Parti sau obtinute de o Parte de la cealaltă Parte &icirc;n cadrul executarii contractului, inclusiv perioada de negocieri anterioara semnarii. Aceste informatii confidentiale cuprind, inclusiv, dar fara a se limita la: datele si informatiile de orice natura, fie că acestea au fost transmise oral, &icirc;n scris sau prin mijloace electronice si indiferent de natura mediului sau de suportul care le contine.</span></p>
<p><span style='font-weight: 400;'>8.2. Informatiile dezvaluite de catre oricare dintre Parti sunt si raman proprietatea Partii transmitatoare sau a tertilor de la care acestea au fost obtinute in mod legal, cu exceptia celor convenite altfel prin prezentul Contract. Partile nu vor putea incalca, contesta, discuta sau disputa acest drept si vor lua toate masurile necesare ca informatiile sa nu intre &icirc;n posesia unor terti, prin orice mijloace, directe sau indirecte.&nbsp;</span></p>
<p><span style='font-weight: 400;'>8.3. Fara a aduce atingere prevederilor din Contract referitor la continutul si categoriile de Informatii Confidentiale, informatiile nu vor fi considerate confidenţiale dacă:</span></p>
<p><span style='font-weight: 400;'>sunt sau devin publice din motive care nu se datorează culpei Partilor</span></p>
<ul>
<li style='font-weight: 400;'><span style='font-weight: 400;'>in momentul in care devin publice, acestea erau deja cunoscute Partilor in cadrul acestui Contract si nu erau supuse niciunor restrictii in ceea ce priveste utilizarea sau dezvaluirea lor</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>erau deja in posesia Partilor inainte de incheierea acestui Contract fara incalcarea nici unor obligatii legale si nu sunt sub rezerva nici unor restrictii cu privire la utilizarea sau dezvaluirea lor</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>au fost dezvoltate independent de către Parti fara a se incalca prezentul Contract si nu intra in categoria Informatiilor Confidentiale.</span></li>
</ul>
<p><span style='font-weight: 400;'>8.4. Partile vor gestiona informatiile confidentiale cu toată atentia si nu vor dezvalui aceste informatii tertilor. Clauzele acestui Contract ca si orice anunturi publice cu privire la incheierea acestui Contract sunt strict confidentiale si nu pot fi facute publice de catre niciuna dintre Parti, total sau partial, in nicio situatie sau forma, fara acordul prealabil scris al celeilalte Parti.</span></p>
<p><strong>Art. 9 Protectia datelor cu caracter personal &ndash; GDPR</strong></p>
<p><span style='font-weight: 400;'>9.1. In cazul &icirc;n care oricare dintre Parti, in executarea Contractului, prelucreaza date cu caracter personal, astfel cum sunt acestea definite de Regulamentul UE 2016/679 si </span></p>
</li>
</ul>
<p><span style='font-weight: 400;'>orice alta legislatie &icirc;n vigoare privind angajatii, cocontractantii, partenerii de afaceri sau orice alte persoane fizice in legatura cu cealalta Parte (denumite &icirc;n continuare '</span><strong>Date personale</strong><span style='font-weight: 400;'>'), Partile sunt de acord şi garantează urmatoarele :</span></p>
<ul>
<li style='font-weight: 400;'><span style='font-weight: 400;'>sa respecte legislatia si normele juridice aplicabile serviciilor sale cu privire la protectia vietii private si a datelor cu caracter personal</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>sa prelucreze datele cu caracter personal numai &icirc;n masura in care acestea sunt necesare si daca sunt permise/impuse de lege</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>sa pastreze confidentialitatea datelor cu caracter personal</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>sa ia masurile tehnice, fizice si organizatorice de securitate adecvate pentru a proteja datele cu caracter personal impotriva pierderii, prelucrarii neautorizate sau ilicite</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>sa informeze cu promptitudine autoritatile abilitate si cocontractantul cu privire la orice incident de securitate existent sau suspectat a se produce, care implica datele cu caracter personal</span></li>
</ul>
<p><span style='font-weight: 400;'>9.2. In masura in care oricare dintre Parti permite unui (sub)contractant sa prelucreze datele cu caracter personal, Partea trebuie sa se asigure ca fiecare (sub)contractant va respecta o serie de obligatii care asigura un nivel similar de protectie ca si prezenta clauza, conform celor mentionate mai sus.</span></p>
<p><span style='font-weight: 400;'>9.3. La incetarea Contractului, Partile trebuie sa stearga sau sa distruga in regim de siguranta toate inregistrarile sau documentele care contin date cu caracter personal. Fiecare Parte accepta si confirma faptul ca este singurul raspunzator pentru orice prelucrare neautorizata sau nelegală sau pentru pierderea datelor cu caracter personal, in cazul in care nu reuseste sa stearga sau sa distruga la incetarea acordului datele cu caracter personal.</span></p>
<p><span style='font-weight: 400;'>9.4. Partea in culpa va despagubi cealalta parte, angajatii sau personalul sau pentru orice daune, amenzi, pierderi si creante care rezulta dintr-o incalcare a clauzelor din prezenta clauza, despagubiri ce vor fi stabilite printr-o hotarare judecatoreasca definitiva.</span></p>
<p><strong>Art. 10 Drepturile de autor</strong></p>
<p><span style='font-weight: 400;'>10.1. Drepturile de autor asupra Proiectului se vor transfera de la Prestator catre Beneficiar doar la momentul platii integrale a Pretului, chiar daca livrarea efectiva s-a realizat anterior acestui moment.</span></p>
<p><span style='font-weight: 400;'>10.2. Pana la la plata integrala a Pretului, Prestatorul va mentine drepturile de autor in totalitatea lor si va putea dispune de acestea dupa cum doreste, Beneficiarul putand sa utilizeze materialele livrate doar cu acordul scris, expres al Prestatorului.</span></p>
<p><span style='font-weight: 400;'>10.3. In cazul in care Beneficiarul intarzie plata Pretului fata de conditiile contractuale, Prestatorul isi poate retrage acordul oferit Beneficiarului de a utiliza materialele livrate.</span></p>
<ol start='11'>
<li><strong> Forta Majora</strong></li>
</ol>
<p><span style='font-weight: 400;'>11.1 Forta majora trebuie constatata de o autoritate competenta si exonereaza Partile de indeplinirea obligatiilor asumate prin Contract, pe toata perioada in care acesta actioneaza.</span></p>
<p><span style='font-weight: 400;'>11.2 Partea care invocă forta majora are obligatia de a notifica cealalta Parte in termen de 5 zile de la producerea situatiei cu privire la acest eveniment si de a lua toate masurile care ii stau la dispozitie in vederea limitarii consecintelor.</span></p>
<p><span style='font-weight: 400;'>11.3 Daca forta majora actioneaza sau se estimeaza ca va actiona o perioada mai mare de 6 luni, fiecare Parte va avea dreptul sa notifice celeilalte Parti incetarea de plin drept a Contractului si niciuna dintre Parti nu va putea pretinde celeilalte daune-interese.</span></p>
<p><strong>Art.12 Modificare si incetare</strong></p>
<p><span style='font-weight: 400;'>12.1.</span> <span style='font-weight: 400;'>Contractul poate fi modificat doar prin act aditional semnat de Parti.</span></p>
<p><span style='font-weight: 400;'>12.2. Contractul poate inceta:</span></p>
<ul>
<li style='font-weight: 400;'><span style='font-weight: 400;'>prin act aditional semnat de Parti</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>prin reziliere (incetare din vina uneia dintre Parti), la cererea oricarei Parti , daca Partea nu si-a indeplinit obligatiile contractuale, cu o notificare prealabila de 14 zile si dupa oferirea unui termen rezonabil de remediere a incalcarii contractuale&nbsp;</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>prin denuntare unilaterala (incetare fara vina vreunei Parti), la cererea oricarei Parti, cu o notificare prealabila de 14 zile</span></li>
<li style='font-weight: 400;'><span style='font-weight: 400;'>in orice alt caz prevazut de lege</span></li>
</ul>
<p><span style='font-weight: 400;'>12.3. Incetarea prezentului Contract nu va avea niciun efect asupra obligatiilor deja scadente intre Parti.</span></p>
<p><strong>Art. 13 Jurisdictie si lege aplicabila</strong></p>
<p><span style='font-weight: 400;'>13.1. Contractului i se aplica legislatia romana.</span></p>
<p><span style='font-weight: 400;'>13.2. Orice disputa legata de Contract se va solutiona prin intelegere amiabila, iar daca negocierile esueaza, incidentul va fi solutionat de instanta de judecata competenta corespunzatoare mun. Sibiu .</span></p>
<p><span style='font-weight: 400;'>&nbsp;</span></p>
<p><span style='font-weight: 400;'>Contractul se va incheia in 2 exemplare originale, cate unul pentru fiecare parte/prin semnare la distanta pe e-mail.</span></p>
<p><strong>Anexa 1</strong> <strong>&ndash; Lista servicii</strong><span style='font-weight: 400;'> este parte componenta a Contractului si se ataseaza la acesta.</span></p>
<p>&nbsp;</p>
<table style='width: 100%;'>
<tbody>
<tr style='width: 50%;'>
<td style='text-align: left;'><strong><em>ICEY DESIGN SRL</em></strong></td>
<td style='text-align: right;'><strong><em>$c_firma</em></strong></td>
</tr>
<tr style='width: 50%;'>
<td style='text-align: left;'><strong><em>Mihai Ciufudean</em></strong></td>
<td style='text-align: right;'><em><strong>$c_repr</strong></em></td>
</tr>
</tbody>
</table>
";

$html2="
<p style='text-align: center;'><strong>Anexa la Contractul cu nr<br />Nr. $c_contract / Data. $c_data</strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p style='text-align: left;'>$c_anexatext</p>
<p>&nbsp;</p>
<table style='width: 100%;'>
<tbody>
<tr style='width: 50%;'>
<td style='text-align: left;'><strong><em>ICEY DESIGN SRL</em></strong></td>
<td style='text-align: right;'><strong><em>$c_firma</em></strong></td>
</tr>
<tr style='width: 50%;'>
<td style='text-align: left;'><strong><em>Mihai Ciufudean</em></strong></td>
<td style='text-align: right;'><em><strong>$c_repr</strong></em></td>
</tr>
</tbody>
</table>
";

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
$mpdf->SetProtection(array('print'));
$mpdf->WriteHTML($html);
$mpdf->AddPageByArray(array(
    'condition' => 'NEXT-ODD',
    'ohname' => 'myHeader',
    'ehname' => '',
    'ohvalue' => 1,
    'ehvalue' => 1,
));
$mpdf->WriteHTML($html2);
$mpdf->Output("$c_data-$c_firma.pdf", "D");