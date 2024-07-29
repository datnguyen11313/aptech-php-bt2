<?php

$Languages = array(
    "java" => array(
        "Ten" => "JAVA",
        "Year" => "1989",
        "Framework" => "Spring"
    ),
    "C#" => array(
        "Ten" => "C#",
        "Year" => "2004",
        "Framework" => array("Xamarin", "ASP.NET", "Entity Framework")
    ),
    "PHP" => array(
        "Ten" => "PHP",
        "Year" => "1996",
        "Framework" => array("Laravel", "Symfony")
    ),
    "Python" => array(
        "Ten" => "PYTHON",
        "Year" => "1999",
        "Framework" => array("Flask", "Django", "Pyramid")
    ),
    "Javascript" => array(
        "Ten" => "JAVASCRIPT",
        "Year" => "2000",
        "Framework" => array("React", "Angular", "VueJS")
    )
);


echo "<h1> Đây là đoạn chưa sắp xếp</h1>";
echo "<ul>";
foreach ($Languages as $NgonNgu) {
    echo "<li>";
    echo "{$NgonNgu['Ten']} - Year: {$NgonNgu['Year']}";
    echo "<ul>";
    if (is_array($NgonNgu['Framework'])) {
        foreach ($NgonNgu['Framework'] as $framework) {
            echo "<li>$framework</li>";
        }
    } else {
        echo "<li>{$NgonNgu['Framework']}</li>";
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";

echo"<hr>";

//    Đoạn mã đã sắp xếp
echo "<h1> Đây là đoạn đã được sắp xếp</h1>";

function Sapxep($a,$b){
        global $Languages;
        return strcmp($Languages[$a]['Ten'],$Languages[$b]['Ten']);
}
    $LanguagesCopy = $Languages; 

    uksort($LanguagesCopy, 'Sapxep'); 


echo "<ul>";
foreach ($Languages as $NgonNgu) {
    echo "<li>";
    echo "{$NgonNgu['Ten']} - Year: {$NgonNgu['Year']}";
    echo "<ul>";
    if (is_array($NgonNgu['Framework'])) {
        foreach ($NgonNgu['Framework'] as $framework) {
            echo "<li>$framework</li>";
        }
    } else {
        echo "<li>{$NgonNgu['Framework']}</li>";
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";
echo"<hr>";
  

// Thêm 2 ngôn ngữ vào 
echo "<h1> Thêm vô 2 ngôn ngữ</h1>";

$Languages["Golang"] = array(
    "Ten" => "GOLANG",
    "Year" => "2009",
    "Framework" => array("Gin", "Gorilla", "Echo")
);

$Languages["Ruby"] = array(
    "Ten" => "RUBY",
    "Year" => "2001",
    "Framework" => array("Rails", "Sinatra")
);
echo "<ul>";
foreach ($Languages as $NgonNgu) {
    echo "<li>";
    echo "{$NgonNgu['Ten']} - Year: {$NgonNgu['Year']}";
    echo "<ul>";
    if (is_array($NgonNgu['Framework'])) {
        foreach ($NgonNgu['Framework'] as $framework) {
            echo "<li>$framework</li>";
        }
    } else {
        echo "<li>{$NgonNgu['Framework']}</li>";
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";
echo"<hr>";



// Xóa ngôn ngữ Javascript

echo "<h1> Xóa Ngôn Ngữ Javascript </h1>";

unset($Languages['Javascript']);



echo "<ul>";
foreach ($Languages as $NgonNgu) {
    echo "<li>";
    echo "{$NgonNgu['Ten']} - Year: {$NgonNgu['Year']}";
    echo "<ul>";
    if (is_array($NgonNgu['Framework'])) {
        foreach ($NgonNgu['Framework'] as $framework) {
            echo "<li>$framework</li>";
        }
    } else {
        echo "<li>{$NgonNgu['Framework']}</li>";
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";
echo"<hr>";


// Câu 2


function cau2($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

echo "<h1>Câu 2</h1>";

$n=5;
cau2(5);
echo"<hr>";

// Câu 3

function cau3($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "# ";
        }
        echo "<br>";
    }
    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "# ";
        }
        echo "<br>";
    }
}

echo "<h1>Câu 3</h1>";

$n = 10;
cau3($n);

echo"<hr>";

// Câu 4


function soNguyenTo($number) {
    if ($number <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

echo "<h1>Câu 4.</h1>";

$number = 13;
if (soNguyenTo($number)) {
    echo "Số $number là số nguyên tố";
} else {
    echo "Số $number không phải là số nguyên tố";
}

echo"<hr>";

// Câu 5

function namNhuan($nam) {
    if (($nam % 4 == 0 && $nam % 100 != 0) || ($nam % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

echo "<h1>Câu 5</h1>";

$nam = 2000;
if (namNhuan($nam)) {
    echo "Năm $nam là năm nhuận";
} else {
    echo "Năm $nam không phải là năm nhuận";
}


?>





