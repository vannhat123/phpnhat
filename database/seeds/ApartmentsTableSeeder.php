<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();
        \Illuminate\Support\Facades\DB::table('apartments')->insert([
            [
                'ten'=>'HD Apartment',
                'diachi'=>'Ha Dong',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>' Gần trung tâm thương mại',
                'thongtinchitiet'=>'Xây dựng 2014 2014',
                'hinhdaidien'=>'https://image.vtc.vn/files/ctv.tieudung1/2016/08/01/anh1-1648.jpg',
            ],
            [
                'ten'=>'Trieu Khuc',
                'diachi'=>'Trieu Khuc SỐ 5',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'Gần trung tâm thương mại',
                'thongtinchitiet'=>'Cạnh đại học GTVT',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQperDRlybOCNzZMOFc6GIKf8C-M0EqNlFKHngesVqSkuiaBhWGQ',
            ],
            [
                'ten'=>'Garden',
                'diachi'=>'Thanh Xuân',
                'giaban'=>'4trieu/m2',
                'thongtinchung'=>'Gần trung tâm thương mại, thoáng mát',
                'thongtinchitiet'=>'Gần Đại học hà nội',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8qFH17RpbNrJM5JSMEofvAJvg91N3KOa0VAE4JcWy2XnR9wZZ',
            ],
            [
                'ten'=>'Apple Ap',
                'diachi'=>'NGã Tư sở',
                'giaban'=>'12trieu/m2',
                'thongtinchung'=>'Gần trung tâm thương mại, vui chơi giải trí',
                'thongtinchitiet'=>'Gần Đại học Y',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmQWlNcGkFUa8pKGUqTx8M6GGALKhwNHPJRz81koR0sscTpr_8',
            ],
            [
                'ten'=>'Kaengnam',
                'diachi'=>'PHạm Hùng',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'Gần khu vui chơi giải trí',
                'thongtinchitiet'=>'Gần công viên nước',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbiifjQzJQvP-niCgzPsMZ1U3bZJZ8fj-N3g0cRetofZ6xQ_wbcw',
            ],
            [
                'ten'=>'Bắc Từ Liêm',
                'diachi'=>'ần khu vui chơi giải trí',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'Gần trung tâm thương mại',
                'thongtinchitiet'=>'ần khu vui chơi giải trí',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnjiqvK1f5XHfrTMdBTQ_aVXi_-WWLgJuIA1QTDZ9YhyYAjJDQFg',
            ],
            [
                'ten'=>'ần khu vui chơi giải trí',
                'diachi'=>'ần khu vui chơi giải trí',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'ần khu vui chơi giải trí',
                'thongtinchitiet'=>'ần khu vui chơi giải trí',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXqcesNQ7k8ZS9S29WTw_rFWCQ-8TaI-R3I5d4VezUsiC_fDdP8w',
            ],
            [
                'ten'=>'Đông Á',
                'diachi'=>'Xuân Thủy',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'Gần trung tâm thương mại',
                'thongtinchitiet'=>'Gần trung tâm thương mại',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROO4SdBveTf18Owt8b4pl4mYyNESAJ19cWn0ePcpWkLuzNzeiEIQ',
            ],
            [
                'ten'=>'Cầu GIấy',
                'diachi'=>'aaa',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'Gần trung tâm thương mại',
                'thongtinchitiet'=>'Gần trung tâm thương mại',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI2pfMqAWIxXXXhur0MKLqfbPxUAEXAbwou0n6uMZc9wDFZxvA',
            ],
            [
                'ten'=>'aa',
                'diachi'=>'aaa',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'Gần trung tâm thương mại',
                'thongtinchitiet'=>'Gần trung tâm thương mại',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgSkUcisN1cfQ05oiOhsb-hEk6NTXknWgbYOJHdzq0tZvqbKTUCQ',
            ],
            [
                'ten'=>'Chùa Bộc',
                'diachi'=>'aaa',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'Gần trung tâm thương mại',
                'thongtinchitiet'=>'Gần trung tâm thương mại',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS6amg-JF0lt6AZCwwyRT865L0AephqLbxGR0pzYHQRdfBGW-XjQ',
            ],
            [
                'ten'=>'aa',
                'diachi'=>'aaa',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'aaa',
                'thongtinchitiet'=>'aaa',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZHBFlSnKUak1nH_pV_VVrsC8TaOu_oj1tOOvbT8ahvJy3r4blgA',
            ], [
                'ten'=>'aa',
                'diachi'=>'aaa',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'aaa',
                'thongtinchitiet'=>'aaa',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRze7aCWXBOMOhk_7vfdF9KpzKLQHmzvz0hOa2ih9QK57-JGkXzbQ',
            ],
            [
                'ten'=>'aa',
                'diachi'=>'aaa',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'aaa',
                'thongtinchitiet'=>'aaa',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtorFYfrB0ZY7m6BaaKH0udEeWQWOLY-HRKzQlRJcmueK2z5fe',
            ],
            [
                'ten'=>'aa',
                'diachi'=>'aaa',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'aaa',
                'thongtinchitiet'=>'aaa',
                'hinhdaidien'=>'aaa',
            ],
            [
                'ten'=>'aa',
                'diachi'=>'aaa',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'aaa',
                'thongtinchitiet'=>'aaa',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxmvOJa_vU9zzCF7bfRQa0LP4QY1yEmoWqf7ghFJrSBKdQgQY-',
            ],
            [
                'ten'=>'aa',
                'diachi'=>'aaa',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'aaa',
                'thongtinchitiet'=>'aaa',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiw_FFCMqsElDqFkqlNQIjiKPdnBZIWXKAwPQTcyy-Gp4tJ0foIg',
            ],
            [
                'ten'=>'aa',
                'diachi'=>'aaa',
                'giaban'=>'5trieu/m2',
                'thongtinchung'=>'aaa',
                'thongtinchitiet'=>'aaa',
                'hinhdaidien'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0fgCrDQ9C7-E8zXgpRmtq5A3awvr52qsTk0QuXu_Qzsqdse8ybQ',
            ],
        ]);
    }
}
