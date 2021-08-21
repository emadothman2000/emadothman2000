<?php




$x = 1016322;

while ($x <= 1994950) {

  if ($x == 1016322) {
    $file = fopen("student1.json", "a+");
    fwrite($file, "[");
    fclose($file);
  }


  $postdata = http_build_query(
    array(
      'seating_no' => $x
    )
  );

  $opts = array(
    'http' =>
    array(
      'method' => 'POST',
      'header' => 'Content-type: application/x-www-form-urlencoded',
      'content' => $postdata
    )
  );

  $context = stream_context_create($opts);
  $response = file_get_contents("https://natega.youm7.com/Home/Result", false, $context);
  // // Get NAme
  $startScrapName = explode('<span class="formatt active" id="tab-list-active">الأسم:</span>', $response);
  $endscrapeName = explode('</span>', $startScrapName[1]);
  $name = str_replace("<span>", "", $endscrapeName[0]);


  // Get school

  $startScrapschool = explode('<span class="formatt" id="tab">المدرسة :</span>', $response);
  $endscrapeschool = explode('</span>', $startScrapschool[1]);
  $school = str_replace("<span>", "", $endscrapeschool[0]);


  // Get Edarah

  $startScrapedarah = explode('<span class="formatt" id="tab">الأدارة التعليمية :</span>', $response);
  $endscrapeedarah = explode('</span>', $startScrapedarah[1]);
  $edarah = str_replace("<span>", "", $endscrapeedarah[0]);


  // 0000000000
  $startScrapestatus = explode('<span class="formatt" id="tab">حالة الطالب :</span>', $response);
  $endscrapestatus = explode('</span>', $startScrapestatus[1]);
  $status = str_replace("<span>", "", $endscrapestatus[0]);

  // 0000000
  $startScrapeshoba = explode('<span class="formatt" id="tab" value="">الشعبة :</span>', $response);
  $endscrapeshoba = explode('</span>', $startScrapeshoba[1]);
  $shoba = str_replace("<span>", "", $endscrapeshoba[0]);

  // 00000000000
  $startScrapeArabic = explode('<span class="formatt2">اللغة العربية :</span>', $response);
  $endscrapeArabic = explode('</span>', $startScrapeArabic[1]);
  $ar = str_replace('<span class="formatt4">', "", $endscrapeArabic[0]);

  // 0000000
  $startScrapeE = explode('<span class="formatt2">اللغة الأجنبية الأولى :</span>', $response);
  $endscrapeE = explode('</span>', $startScrapeE[1]);
  $e = str_replace('<span class="formatt4">', "", $endscrapeE[0]);

  // 0000
  $startScrapeLang2 = explode('<span class="formatt2">اللغة الأجنبية الثانية :</span>', $response);
  $endscrapeLang2 = explode('</span>', $startScrapeLang2[1]);
  $lang2 = str_replace('<span class="formatt4">', "", $endscrapeLang2[0]);

  // 00000000
  $startScrapeM1 = explode('<span class="formatt2">مجموع الرياضيات البحتة :</span>', $response);
  $endscrapeM1 = explode('</span>', $startScrapeM1[1]);
  $M1 = str_replace('<span class="formatt4">', "", $endscrapeM1[0]);

  // 000000000
  $startScrapeH = explode('<span class="formatt2">التاريخ :</span>', $response);
  $endscrapeH = explode('</span>', $startScrapeH[1]);
  $H = str_replace('<span class="formatt4">', "", $endscrapeH[0]);

  // 000000000
  $startScrapeG = explode('<span class="formatt2">الجغرافيا :</span>', $response);
  $endscrapeG = explode('</span>', $startScrapeG[1]);
  $G = str_replace('<span class="formatt4">', "", $endscrapeG[0]);

  // 0000000
  $startScrapeph = explode('<span class="formatt2">الفلسفة والمنطق :</span>', $response);
  $endscrapeph = explode('</span>', $startScrapeph[1]);
  $ph = str_replace('<span class="formatt4">', "", $endscrapeph[0]);

  // 0000000
  $startScrapespirt = explode('<span class="formatt2">علم النفس والاجتماع :</span>', $response);
  $endscrapespirt = explode('</span>', $startScrapespirt[1]);
  $spirit = str_replace('<span class="formatt4">', "", $endscrapespirt[0]);

  // 00000000
  $startScrapeCh = explode('<span class="formatt2">الكيمياء :</span>', $response);
  $endscrapeCh = explode('</span>', $startScrapeCh[1]);
  $ch = str_replace('<span class="formatt4">', "", $endscrapeCh[0]);

  // 0000000

  $startScrapePi = explode('<span class="formatt2">الأحياء :</span>', $response);
  $endscrapePi = explode('</span>', $startScrapePi[1]);
  $Pi = str_replace('<span class="formatt4">', "", $endscrapePi[0]);

  // 000000
  $startScrapeGeo = explode('<span class="formatt2">الجيولوجيا وعلوم البيئة :</span>', $response);
  $endscrapeGeo = explode('</span>', $startScrapeGeo[1]);
  $Geo = str_replace('<span class="formatt4">', "", $endscrapeGeo[0]);

  // 000000000
  $startScrapeMath2 = explode('<span class="formatt2">الرياضيات التطبيقية :</span>', $response);
  $endscrapeMath2 = explode('</span>', $startScrapeMath2[1]);
  $M2 = str_replace('<span class="formatt4">', "", $endscrapeMath2[0]);

  // 000000000
  $startScrapephis = explode('<span class="formatt2">الفيزياء :</span>', $response);
  $endscrapephis = explode('</span>', $startScrapephis[1]);
  $phis = str_replace('<span class="formatt4">', "", $endscrapephis[0]);

  // 00000000
  $startScrapetotal = explode('<span class="formatt2">مجموع الدرجات :</span>', $response);
  $endscrapetotal = explode('</span>', $startScrapetotal[1]);
    $total = str_replace('<span class="formatt4">', "", $endscrapetotal[0]); 


  // 00000000
  $startScrapePre = explode('<span class="formatt3">النسبة المئوية</span>', $response);
  $endscrapetoPre = explode('</li>', $startScrapePre[1]);
  $Pre = str_replace('<span class="formatt4">', "", $endscrapetoPre[0]);
  $Pre1 = str_replace('<h1>', "", $Pre);
  $Pre2 = str_replace('</h1>', "", $Pre1);
  $PreF = str_replace('%', "", $Pre2);

  // 00000000
  $startScrapeRe = explode('<span class="formatt2">التربية الدينية :</span>', $response);
  $endscrapeRe = explode('</span>', $startScrapeRe[1]);
  $Re = str_replace('<span class="formatt4">', "", $endscrapeRe[0]);

  // 00000000
  $startScrapeCountry = explode('<span class="formatt2">التربية الوطنية :</span>', $response);
  $endscrapeCountry = explode('</span>', $startScrapeCountry[1]);
  $Country = str_replace('<span class="formatt4">', "", $endscrapeCountry[0]);

  // 00000000
  $startScrapeEco = explode('<span class="formatt2">الاقتصاد والإحصاء :</span>', $response);
  $endscrapeEco = explode('</span>', $startScrapeEco[1]);
  $Eco = str_replace('<span class="formatt4">', "", $endscrapeEco[0]);


  // Write To The Json File

  $file = fopen("student1.json", "a+");
  fwrite(
    $file,
    '{"Name":"' . $name . '",
    "seat":"' . $x . '",
    "sch":"' . $school . '",
    "edarah":"' . $edarah . '",
    "status":"' . $status . '",
    "shoba":"' . $shoba . '",
    "ar":"' . $ar . '",
    "e":"' . $e . '",
    "lang2":"' . $lang2 . '",
    "m1":"' . $M1 . '",
    "h":"' . $H . '",
    "g":"' . $G . '",
    "ph":"' . $ph . '",
    "spirt":"' . $spirit . '",
    "ch":"' . $ch . '",
    "bi":"' . $Pi . '",
    "geo":"' . $Geo . '",
    "m2":"' . $M2 . '",
    "phi":"' . $phis . '",
    "re":"' . $Re . '",
    "co":"' . $Country . '",
    "eco":"' . $Eco . '",
    "Pre":' . $PreF . ',
    "Total":' . $total . '},'
  );
  fclose($file);


  if ($x == 1994950) {
    $file = fopen("student1.json", "a+");
    fwrite($file, "]");
    fclose($file);
  }

  // Increase X By 1
 print("seat : ".$x."\n Total : ". $total);
  $x++;
 
}


die;
