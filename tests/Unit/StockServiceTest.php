<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Services\StockService;
use PHPUnit\Framework\Attributes\Test; // Pastikan atribut Test diimpor

class StockServiceTest extends TestCase
{
    #[Test]
    public function it_calculates_final_stock_correctly()
    {
        $stockService = new StockService();

        // Menghitung stok akhir dengan 100 barang masuk dan 40 barang keluar
        $finalStock = $stockService->calculateFinalStock(100, 40);

        // Menambahkan pesan kustom dalam bahasa Indonesia
        $this->assertEquals(60, $finalStock, 'Stok akhir seharusnya 60, tetapi hasilnya adalah ' . $finalStock);
    }

    #[Test]
    public function it_returns_zero_when_no_stock_in_and_out()
    {
        $stockService = new StockService();

        // Menghitung stok akhir dengan 0 barang masuk dan 0 barang keluar
        $finalStock = $stockService->calculateFinalStock(0, 0);

        // Menambahkan pesan kustom dalam bahasa Indonesia
        $this->assertEquals(0, $finalStock, 'Stok akhir seharusnya 0 ketika tidak ada barang yang masuk atau keluar');
    }
}

