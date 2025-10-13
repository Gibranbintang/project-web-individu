<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => " Info Gempa di indonesia",
            "slug" => "info-gempa-di-indonesia",
            "penulis" => "Gibran Bintanga",
            "isi" => "Gempa ringan mengguncang Jawa Barat, warga segera dievakuasi ke tempat aman"
        ],
        [
            "judul" => "Ukiran Sejarah Bola Indonesia",
            "slug" => "ukiran-sejarah-bola-indonesia",
            "penulis" => "suroso",
            "isi" => "Timnas U-23 berhasil lolos ke final setelah menang tipis lewat adu penalti."
        ],
        [
            "judul" => "Kabar Bensin terbaru",
            "slug" => "kabar-bensin-terbaru",
            "penulis" => "Kafka",
            "isi" => "Harga BBM turun serentak, masyarakat sambut gembira perubahan kebijakan pemerintah"
        ]
    ];

    public static function ambildata() {
        return Self::$data_berita;
    }

    public static function caridata($slug) {
        $data_beritas = Self::$data_berita;

        $new_berita = [];

     foreach ($data_beritas as $berita) {
        if ($berita["slug"] === $slug) {
            $new_berita = $berita; // $berita isinya array = [ "judul", "slug", "penulis", "isi"]
        }
      }
      return $new_berita;
    }   
}