<?
 
        if (isset($_POST['btn-confirm'])) {
 
            $firstName= $_POST['fName'];
            $lastName = $_POST['lName'];
            $submit = $_POST['submit-btn'];
            if ($check=='on') $check = 1;
 
 
            if ($check == 1 && empty($partner)) {
 
               $check = true;
            }
        }
 
        ?>

//третье домашнее задание

//первое

let max = 99;
let count = 1;

next: while (count <= max) {
    count++;
    for (let i = 2; i < count; i++) {
        if (count % i == 0) {
            continue next;
        }
    }

    console.log(count);

}

//второе

let products = [
    ['shirt', 4000, 5],
    ['boots', 2000, 1],
    ['shorts', 1000, 6],
];

function countBasketPrice(arr) {
    let productSum = 0;

    for (let i = 0; i < arr.length; i++) {
        productSum += (checkPrice(arr[i]));
    }

    return productSum;
}

function checkPrice(multi) {
    let price = multi[1] * multi[2];
    return price;
}

//третье

for (let x = 0; x < 10; console.log(x++)) { }

//четвертое

let newResult = '';
for (let i = 1; i <= 20; i++) {
    console.log(newResult += "*");
}