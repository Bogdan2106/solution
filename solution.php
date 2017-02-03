<?

//1.	Написать ф-цию подсчета количества true в массиве:
$array = [true, true, true, false,
    true, true, true, true ,
    true, false, true, false,
    true, false, false, true ,
    true, true, true, true ,
    false, false, true, true ];

$count = 0;
function name($array,$count)
{
    foreach ($array as $value) {
        if ($value) $count++;
    }
     return $count;
}

/*
 * 4.	Написать ф-цию, которая возращает сумму переданных в нее аргументов.
 *  Будем передавать сугубо числа

sum(1,2,3,4) => returns 10
	sum(1,-2);     => returns -1
	sum();         => returns 0
*/

function sum(){
    $arg_list = func_get_args();
    $sum = 0;
    foreach ($arg_list as $item) {
        $sum += $item;
    }
    return $sum;
}

/*
6.	Написать ф-цию удаляющую первую и последнюю букву в строке
	remove(‘Ukraine’)  => ‘krain’;
*/

function cutStr($string){
    return substr($string, 1, strlen($string)-2);
}

/*
8.	Написать ф-цию преобразующую число в массив чисел в обратном порядке
	numberToReverseArray(568823) => [3, 2, 8, 8, 6, 5];
*/

function numberToReverseArray($number){
    return array_reverse(str_split($number));
}

/*
9.	Банкомат позволяет вводить только 4-х или 6-ти значный PIN состоящий только из цифр.
Написать ф-цию checkPin(), которая проверяет верность введенного пинкода и возвращает true или false:
 * */

function checkPin($code){
    return preg_match('/^[0-9]{4|6}$/', $code) ? true : false;
}

/*
10.	Написать ф-цию которая определяет украинского оператора мобильной связи.
Номер должен соответствовать точной маске +38-xxx-xxx-xx-xx.
Возможные варианты операторов 066,050 - МТС; 098,067 - Киевстар.
Если введен неверный номер или нет такого оператора,то вывести “Invalide numbe”r.

checkOperator(‘+38-098-204-23-50’) => ‘Kievstar’;
checkOperator(‘+38-0875-204-23-50’) => Invalide number;

 * */

function checkNumber($number){

    $pattern = '/^\+38\-0(66|50|98|67)\-[0-9]{3}(\-[0-9]{2}){2}$/';
    if(!preg_match($pattern, $number)){
        echo "Invalide number";
    } else {
        if(preg_match('/^\+38\-0(66|50)/', $number)){
            echo "МТС";
        } else {
            echo "Kievstar";
        }
    }
}

