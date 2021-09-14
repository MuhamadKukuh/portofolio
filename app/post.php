<?php

namespace App;


class post 
{
    private static $blog_post = [
        [
        "titles"=>"judul pertama",
        "slug"=>"Sub Judul",
        "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam eligendi voluptates saepe magnam blanditiis praesentium ex cum quidem ducimus eum ad dolore cupiditate adipisci minima eius velit corrupti facilis quis, repudiandae iusto. In voluptate, facilis minima dolores similique deserunt dignissimos soluta porro, ipsam ratione fugiat, rerum corrupti pariatur sequi vel explicabo laborum. Consectetur magnam vel ducimus enim praesentium aliquid, vero at ad, similique repellendus tenetur, assumenda eius accusamus perspiciatis quo. Sint reprehenderit saepe impedit harum temporibus, aliquid, quasi repudiandae iusto culpa molestiae, voluptates in assumenda voluptatem architecto dolores doloribus ullam earum. Cum quis, natus hic voluptas at quam tenetur incidunt?",
        "lord"=>"email : mkukuhsetiadi@gmail.com",
        "alamat"=>"Alamat :Jln.Sukamenak, Gang Saluyu Selatan, RT02/RW09",
        "nomor"=>"No tlp: 085748965758",
        "nama" => "Muhamad Kukuh Setiadi",
        "foto" => "https://avatarfiles.alphacoders.com/218/thumb-218936.jpg",
        "porto" => " Saya Anak Pertama dari 2 bersaudara. Sekarang saya Berumur 16tahun, Saya Bersekolah Di SMK MAHAPUTRA CERDAS UTAMA Kelas XI jurusan RPL. Saya Tinggal dan Lahir di Bandung Alamat saya: Kec.Margahuyu Jln. Sukamenak Gang Saluyu Selatan RT02/09."
        ]
    ];
    public static function all()
    {
        return self::$blog_post;
    }
}
