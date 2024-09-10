<?php
$barang = [
    [
        'nama_barang' => 'pasta gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'sabun mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 5,
    ],
    [
        'nama_barang' => 'aloevera',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ]
];

$totalHarga = 0;
echo "Daftar Belanjaan:<br><br>";

foreach ($barang as $item) {
    $subtotal = $item['harga_barang'] * $item['jumlah_beli'];
    $totalHarga += $subtotal;

    // untuk menampilan barang, dkk
    echo $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") : " . number_format($subtotal, 0,) .  "<br>";
}

echo "<br><strong>Total harga yang harus dibayar: Rp " . number_format($totalHarga, 0,) . "</strong><br>";

