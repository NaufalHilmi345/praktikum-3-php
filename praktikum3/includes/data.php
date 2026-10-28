<?php
// ============================================
// DATA TOKO (sementara disimpan di array)
// Pada Pertemuan 7, data ini akan dipindah ke database MySQL.
// ============================================

$namaToko = "Toko Serba Ada Rakun Pentung";

// Array multidimensi: kode produk => data produk (array asosiatif)
$produk = [
    "P001" => [
        "nama"     => "1 kotak Strawberry Merah Vonwacq",
        "kategori" => "Makanan",
        "harga"    => 30000,
        "diskon"   => 10,          // dalam persen
        "stok"     => 25,
        "ikon"     => "🍓",
    ],
    "P002" => [
        "nama"     => "1 tandan Pisang Kuning Dr Primitive",
        "kategori" => "Makanan",
        "harga"    => 60000,
        "diskon"   => 20,
        "stok"     => 10,
        "ikon"     => "🍌",
    ],
    "P003" => [
        "nama"     => "Kue Baking khas Genius Society #81",
        "kategori" => "Makanan",
        "harga"    => 800000,
        "diskon"   => 10,
        "stok"     => 10,
        "ikon"     => "🍰",
    ],
    "P004" => [
        "nama"     => "Kopi kustom Himeko",
        "kategori" => "Minuman",
        "harga"    => 5000,
        "diskon"   => 5,
        "stok"     => 100,
        "ikon"     => "☕",
    ],
    "P005" => [
        "nama"     => "Sepatu Terbang Asat Pramad",
        "kategori" => "Kerajinan",
        "harga"    => 100000,
        "diskon"   => 0,
        "stok"     => 2,
        "ikon"     => "🥾",
    ],
    "P006" => [
        "nama"     => "Topeng bekas Masked Fool",
        "kategori" => "Kerajinan",
        "harga"    => 32000,
        "diskon"   => 20,
        "stok"     => 8,
        "ikon"     => "🎭",
    ],
];

// Contoh pesanan pelanggan: kode produk => jumlah yang dibeli
$pesanan = [
    "P001" => 2,
    "P003" => 4,
    "P006" => 1,
    "P004" => 20,
    "P002" => 1,
];