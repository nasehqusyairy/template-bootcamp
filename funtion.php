<?php
$nama = "pais";
$tahun_lahir = 2005;
echo "halo, nama saya $nama, saya lahir pada tahun $tahun_lahir <br>";

if ($tahun_lahir > 2005) {
    echo "TUA<br>";
} else {
    echo "BOCIL<br>";
}

$students = [1, 2, 3, 4, 5];
$students2 = [
    [
        "nama" => "pais",
        "tahun_lahir" => 2005
    ],
    [
        "nama" => "pais1",
        "tahun_lahir" => 2006
    ]
];

// perulangan dengan for
for ($i = 0; $i < count($students); $i++) {
    echo $students[$i] . "<br>";
}
?>

<ul>
<?php
// perulangan dengan foreach array asosiatif
foreach ($students2 as $s) {
    ?>
    <li>
        <?php echo $s['nama'],$s['tahun_lahir']; ?>
    </li>
    <?php
}
?>
</ul>
