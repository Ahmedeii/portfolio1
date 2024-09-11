<?php

  /*
    Math Functions
=========<الناتج يكون عدد صحيح>==========
    1- abs(Number[Required])
    --- Absolute Value => Non Negative Value

=========<تطلع رقم عشوائي>============================
    2- mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])
    --- mt_getrandmax() => Show Largest Possible Random Value
    --- Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

=========<تطلع عدد int>=================================
    3- intdiv(dividend[Required], divisor[Required])
    --- Integer Division
    --- intdiv vs /
===========<باقي الاسمه يكون صحيح و من النوعdouble>=====================
    4- fmod(dividend[Required], divisor[Required])
    --- Floating Point Remainder (Modulo)
    --- fmod vs %
  */

  //    1- abs(Number[Required])

  echo abs(10) . "<br>";
  echo abs(0) . "<br>";
  echo abs(-20) . "<br>";

  //    2- mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])

  echo rand() . "<br>";
  echo mt_getrandmax() . "<br>";
  echo rand(50, 60) . "<br>";

  //    3- intdiv(dividend[Required], divisor[Required])

  echo 10 / 5 . "<br>";
  echo gettype(10 / 5) . "<br>";

  echo 11 / 5 . "<br>";
  echo gettype(11 / 5) . "<br>";

  echo intdiv(11, 5) . "<br>";
  echo gettype(intdiv(11, 5)) . "<br>";

  //    4- fmod(dividend[Required], divisor[Required])

  echo 11.5 % 5 . "<br>";
  echo gettype(11 % 5) . "<br>";

  echo fmod(11.5, 5) . "<br>";
  echo gettype(fmod(11.5, 5)) . "<br>";
echo "==================================== <br>";

  /*
  (2)
    Math Functions
==========<تقرب للاكبر>==============
    1- ceil(Number[Required])
    --- Round Up To Integer

    ==========<تقرب للاصغر>==============
    2- floor(Number[Required])
    --- Round Down To Integer

    ==========<تقرب للاصغر والاكبر على حسب معدي النص ام لا>==============
  3- round(Number[Required], Precision[Optional], Mode[Optional])
    --- Round Up To Integer
    --- Mode
    ------ PHP_ROUND_HALF_UP
    ------ PHP_ROUND_HALF_DOWN
    ------ PHP_ROUND_HALF_EVEN
    ------ PHP_ROUND_HALF_ODD

    - ceil, floor, round => Return Double
  */


//    1- ceil(Number[Required])
  echo ceil(5.99) . "<br>";
  echo ceil(5.49) . "<br>";
  echo ceil(5.10) . "<br>";
  echo ceil(5.01) . "<br>";
  echo ceil(-5.99) . "<br>"; // -5
  // 2- floor(Number[Required])
  echo floor(5.99) . "<br>";
  echo floor(5.49) . "<br>";
  echo floor(5.10) . "<br>";
  echo floor(5.01) . "<br>";
  echo floor(-5.99) . "<br>"; // -6

  // 3- round(Number[Required], Precision[Optional], Mode[Optional])

  echo round(5.99) . "<br>";
  echo round(5.50) . "<br>";
  echo round(5.49) . "<br>";
  echo round(5.10) . "<br>";

  echo round(5.99, 1) . "<br>"; // 6
  echo round(5.94, 1) . "<br>"; // 5.9
  echo round(5.995, 2) . "<br>"; // 6
  echo round(5.994, 1) . "<br>"; // 6
  echo round(5.994, 2) . "<br>"; // 5.99

  echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>";
  echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";
  echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_ODD) . "<br>";
  echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>";
  echo "==================================== <br>";

  /*
  (3 مش محاج تسجيل)
    Math Functions
=====<الجزر للرقم>==============
    1- sqrt(Number[Required])
    --- Square Root

=====<الرقم الاقل >==============
    2- min(array[Required]) || min(Values[Required])
    --- Find Lowest Value

=====<الرقم الاكبر>==============
    3- max(array[Required]) || min(Values[Required])
    --- Find Highest Value
  */

  echo sqrt(16) . "<br>"; // 4
  echo sqrt(25) . "<br>"; // 5
  echo sqrt(100) . "<br>"; // 10

  echo min(10, 20, -40, -30, 50) . "<br>"; // -40
  echo min([10, 20, -40, -30, 50]) . "<br>"; // -40

  echo "<pre>";
  //   هيطلع المصفوفه الاصغر هيقارن رقم برقم ال هيلاقي اصغر من تاني 
  print_r(min([1, 3, 5], [1, 2, 6]));
  echo "</pre>";

  echo max(10, 20, -40, -30, 50) . "<br>"; // 50
  echo max([10, 20, -40, -30, 50]) . "<br>"; // 50

  echo "<pre>";
  print_r(max([1, 3, 5], [1, 2, 6]));
  echo "</pre>";
  echo "==================================== <br>";


  /*
  (4)
    Filter Functions
======<تعرض جميع الفلاتر>===============
    1- filter_list()
    --- Returns A List Of All Supported Filters

======< للفتر id>===============
    2- filter_id(Filter_Name[Required])


======<بنستخدم جواها الفلتر>===============
    3- filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Filters A Variable With A Specified Filter
  */
//1- filter_list()
  echo "<pre>";
  print_r(filter_list());
  echo "</pre>";

//    2- filter_id(Filter_Name[Required])
  echo filter_id("boolean") . "<br>"; // 258


//3- filter_var(Value[Required], Filter[Optional], Options[Optional])
  $val = "on"; // True || 1 || "yes" || "on"

  if (filter_var($val, FILTER_VALIDATE_BOOL)) { // Or ID "258"

    echo "This Is True";

  } else {

    echo "This Is False";

  }
  echo "==================================== <br>";

  /*
    Filter Functions

==========< T or fبتاخد مننا الثلاث قيم دول عشان ترجع >==========
    1- filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

==========<filter bool>==========
    2------ FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
    ---------- Flag => FILTER_NULL_ON_FAILURE => False For [False, 0, No, Off, ""] Only

==========<filter url>==========
    3------ FILTER_VALIDATE_URL
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_PATH_REQUIRED
    ---------- Flag => FILTER_FLAG_QUERY_REQUIRED

==========<filter ip>==========
    4------ FILTER_VALIDATE_IP
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_IPV4
    ---------- Flag => FILTER_FLAG_IPV6

==========<filter mac>==========
    5------ FILTER_VALIDATE_MAC
    ---------- Flag => FILTER_NULL_ON_FAILURE
  */
//    2------ FILTER_VALIDATE_BOOL => [True, 1, Yes, On]

  $bool = "Elzero"; // True | 1 | "yes" | "on"

  var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));

  echo "<br>";

  //3------ FILTER_VALIDATE_URL

  $url = "https://elzero.org/?id=100";

  var_dump(filter_var($url, FILTER_VALIDATE_URL,
  ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));

  echo "<br>";
//    4------ FILTER_VALIDATE_IP

  $ip = "192.168.2.1";

  var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));

  echo "<br>";
//    5------ FILTER_VALIDATE_MAC
  $mac = "00:00:5e:00d:53:af";

  var_dump(filter_var($mac, FILTER_VALIDATE_MAC));
  echo "==================================== <br>";

  /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    1------ FILTER_VALIDATE_EMAIL
    ---------- Flag => FILTER_NULL_ON_FAILURE

    2------ FILTER_VALIDATE_INT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Int On Success

    3------ FILTER_VALIDATE_FLOAT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Float On Success
  */
  
  //1------ FILTER_VALIDATE_EMAIL
  $email = "o@nn.sa";

  var_dump(filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE));

  echo "<br>";
  //2------ FILTER_VALIDATE_INT
  $int = "90";

  var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
  ));

  echo "<br>";
  //3------ FILTER_VALIDATE_FLOAT
$float = "90.50";

  var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
  ));