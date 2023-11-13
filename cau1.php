Viết một chương trình PHP để kiểm tra xem một số nguyên dương nào đó có phải là số nguyên tố hay không.<br>
Tạo một hàm isPrime nhận một số nguyên dương và trả về true nếu nó là số nguyên tố, ngược lại trả về false.<br>
Sử dụng hàm để hiển thị danh sách các số nguyên tố từ 1 đến 100.<br>
<?php
function isPrime($n) {
    if ($n <= 1) {
        return false;
    }

    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

for ($i = 2; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
?>

