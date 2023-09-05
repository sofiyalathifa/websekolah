<?php
class Blog_model 
{
    private $blog = [
        [
            "nama" => "Ivans Zuwanta, S.Kom",
            "matpel" => "Basis Data",
            "kode" => "39"
        ],
        [
            "nama" => "Fikrotu Dwi Faudatuzzahro, S.Pd",
            "matpel" => "Pemrograman Web dan Perangkat Bergerak",
            "kode" => "57"
        ],
        [
            "nama" => "Estri Handayani, S.Pd",
            "matpel" => "Pemrograman Berorientasi Objek",
            "kode" => "42"
        ],
        [
            "nama" => "Labib Fayumi, S.Pd",
            "matpel" => "Produk Kreatif dan Wirausaha",
            "kode" => "79"
        ]
        ];
        public function getAllBlog()
        {
            return $this->blog;
        }
}