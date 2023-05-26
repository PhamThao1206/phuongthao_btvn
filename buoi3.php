<?php
//5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function GTLN($x) {
    
    if ($x > 0) return ($x);
}
function GTNN($x) {
    if ($x < 0)
    return ($x);
}
$x = [0, 12, -34, 126];
echo ("GTLN là: " . GTLN($x[3])) . "<br>";
echo ("GTNN là: " . GTNN($x[2]));
//6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function arrangeString ($number){
    $numbers = array(5, 8, 0, 10, 2);
    sort($numbers);
      
    foreach( $numbers as $number) {
        echo "$number \n";
    }
    }
    echo arrangeString("5, 8, 0, 10, 2");
    echo "<br>";
//7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function calcFactorial ($n) {
    $giai_thua = 1;
    if ($n == 0 || $n == 1) {
        return $giai_thua;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $giai_thua *= $i;
        }
        return $giai_thua;
    }
}
$a = 5;
echo ("Giai thừa của " . $a . " là: " . calcFactorial ( $a ) . "<br>");
//8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function checkPrime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function show_prime($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(checkPrime($i))
            echo $i, '<br>';
    }
}
show_prime(25, 60);
//9.Viết chương trình PHP để tính tổng của các số trong một mảng.
function calcArray($a){
    return ($a);

}
$a = [1, 6, 5, 7];
echo "Tổng của mảng là: ". calcArray($a[0]+$a[1]+$a[2]+$a[3]);
echo "<br>";
//10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;
 
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        for($i = 2; $i < $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
 
echo ("10 số đầu tiên của dãy số fibonacci: ");
for($i = 0; $i < 10; $i ++) {
    echo (fibonacci ( $i ) . " ");
}
//11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function checkArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = strlen($number);
    
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }
    
    return $sum === $number;
}
$number = 153;
$result = checkArmstrongNumber($number);
echo "cau11 ";
echo $result ? 'Armstrong Number' : 'Not an Armstrong Number';
echo "<br>";

//12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($array, $element, $position) {
    array_splice($array, $position, 0, $element);
    return $array;
}
$array = [4, 2, 9, 10, 8];
$element = 6;
$position = 2;
$result = insertElement($array, $element, $position);
echo "cau12 ";
print_r($result);
echo "<br>";
//13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function deleteDuplicateElements($array) {
    return array_unique($array);
}
$array = [1, 2, 9, 5, 8, 9, 7];
$result = deleteDuplicateElements($array);
echo "cau13 ";
print_r($result);
echo "<br>";
//14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findElementPosition($array, $element) {
    $position = array_search($element, $array);
    return $position !== false ? $position : -1;
}
$array = [6, 2, 9, 8, 1];
$element = 9;
$result = findElementPosition($array, $element);
echo "cau14 ";
echo $result;
echo "<br>";
//15.Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($string){
    return strrev($string);
}
echo strrev("Hello world");
echo "<br>";
//16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function calcNumberOfElement($a){
    return ($a);

}
$a = [1, 6, 5, 7];
echo "Số lượng phần tử trong mảng là: ". calcNumberOfElement($a[0], $a[1], $a[2], $a[3]);
echo "<br>";
//17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function checkPalindrome($string)   
		{  
		  if ($string == strrev($string))  
			  return 1;  
		  else  
			  return 0;  
		}  
		echo checkPalindrome('SOS')."<br>";
        echo "<br>";
//18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countElement($array, $element) {
    return array_count_values($array)[$element] ?? 0;
}
$array = [4,2,4,5,8,4];
$element = 4;
$result = countElement($array, $element);
echo "cau 18 ";
echo $result;
echo "<br>";
//19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function arrangeString1 ($number){
    $numbers = array(6, 8, 0, -12, 1);
    rsort($numbers);
    foreach( $numbers as $number) {
        echo "$number \n";
    }
    }
    echo arrangeString1("6, 8, 0, -12, 1");
    echo "<br>";
//20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addElement($arr, $element, $position)
{
    if ($position === 'beginning') {
        // Thêm phần tử vào đầu mảng
        array_unshift($arr, $element);
    } elseif ($position === 'end') {
        // Thêm phần tử vào cuối mảng
        $arr[] = $element;
    }

    // Trả về mảng sau khi thêm phần tử
    return $arr;
}

// Mảng ban đầu
$array = [1, 2, 3, 4, 5];

// Phần tử cần thêm
$element = 10;

// Vị trí muốn thêm phần tử ('beginning' để thêm vào đầu, 'end' để thêm vào cuối)
$position = 'end';

// Gọi hàm addElementToArray để thêm phần tử vào mảng
$resultArray = addElement($array, $element, $position);

// In mảng sau khi thêm phần tử
print_r($resultArray);
//21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findNumber($x) {
    
    if ($x > 0) return ($x);
}
$x = [4, -15, 80, 10];
echo ("Số lớn thứ hai là: " . findNumber($x[3])) . "<br>";
//22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function USCLN($a, $b) {
    if ($b == 0) return $a;
    return USCLN($b, $a % $b);
}
function BSCNN($a, $b) {
    return ($a * $b) / USCLN($a, $b);
}
 
$a = 15;
$b = 40;
echo ("USCLN của $a và $b là: " . USCLN($a, $b)) . "<br>";
echo ("BSCNN của $a và  $b là: " . BSCNN($a, $b));
//23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function checkPerfectNumber ($n){
    $sum = 0;
    for ($i=1; $i<$n/2; $i++){
        if ($n%$i == 0)
        $sum+=$i;
    }
    if ($sum == $n){
        echo 'số'. $n. 'là số hoàn hảo';
    }
    else{
        echo 'số'. $n. 'không là số hoàn hảo';
    }
}
$n = 12;
echo (checkPerfectNumber($n));
echo "<br>";
//24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findOddNumber($x) {
    
    if ($x > 0) return ($x);
}
$x = [1, 13, 35, 27];
echo ("Số lẻ lớn nhất là: " . findOddNumber($x[2])) . "<br>";
//25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function checkPrimeNumber($n) {
    if ($n < 2) {
        return false;
    }
    $number = sqrt ( $n );
    for($i = 2; $i <= $number; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
 
echo ("Các số nguyên tố nhỏ hơn 100 là: <br>");
for($i = 0; $i < 100; $i ++) {
    if (checkPrimeNumber ( $i )) {
        echo ($i . " ");
    }
}
//26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findPositiveNumber($x) {
    
    if ($x > 0) return ($x);
}
$x = [1, 12, 34, 20];
echo ("Số dương lớn nhất là: " . findPositiveNumber($x[2])) . "<br>";
//27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findNegativeNumber($x) {
    
    if ($x < 0) return ($x);
}
$x = [-4, -15, -80, -10];
echo ("Số âm lớn nhất là: " . findNegativeNumber($x[0])) . "<br>";
//28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function calcOddSum($n){

    $sum = 0;
    for ($i = 1; $i <= $n; $i++){
        if ($i %2 != 0)
        $sum+=$i;
        return $sum;
    }
    }
    $n = 10;
    echo "Tổng là: " . calcOddSum($n);
    echo "<br>";
//29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquareNumbers($start, $end) {
    $perfectSquareNumbers = array();
    for ($i = $start; $i <= $end; $i++) {
        if (isPerfectSquare($i)) {
            $perfectSquareNumbers[] = $i;
        }
    }
    return $perfectSquareNumbers;
}
function isPerfectSquare($number) {
    $sqrt = sqrt($number);
    return ($sqrt * $sqrt) === $number;
}
$start = 1;
$end = 20;
$result = findPerfectSquareNumbers($start, $end);
echo "cau29 ";
print_r($result);
echo "<br>";
//30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function checkAtring($str, $sub){
    return strstr($str, $sub);
}
    $str = 'Hello world';
    $sub = 'world';
    echo strstr("Hello world", "world");
    echo "<br>";