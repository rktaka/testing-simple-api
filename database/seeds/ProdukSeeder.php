<?php

use Illuminate\Database\Seeder;
use App\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produk1 = new Produk;
        $produk1-> part_number="PRT-1";
        $produk1-> nama_produk="Spare Part 1";
        $produk1-> qty="2";
        $produk1-> save();
    }
}
