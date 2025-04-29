<?php
namespace App\Services;

class StockService
{
    // Fungsi untuk menghitung stok akhir berdasarkan barang yang masuk dan keluar
    public function calculateFinalStock(int $stockIn, int $stockOut): int
    {
        // Menghitung stok akhir dengan mengurangi stok yang keluar dari stok yang masuk
        return $stockIn - $stockOut;
    }
}
