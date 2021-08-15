# BMKG API
Selamat datang di BMKG API.

API ini berisi infomasi gempa terkini di Indonesia dalam bentuk data `JSON`.

Berikut adalah panduan untuk menggukannya:

## Mulai Cepat
__Endpoint:__
```
http://feriirawan-api.herokuapp.com/list/bmkg/
```

__Response:__
```json
{
    "code": 200,
    "status": "success",
    "message": "Data gempa terkini",
    "author": "Feri irawan",
    "source": "BMKG",
    "gempa": [
        {
            "waktu_gempa": "04-06-21 20:45:15 WIB",
            "lintang": "0.38",
            "bujur": "126.28",
            "magnitudo": "5.4",
            "kedalaman": "10 Km",
            "wilayah": "128 km BaratDaya TERNATE-MALUT"
        },
        {
            "waktu_gempa": "03-06-21 17:09:58 WIB",
            "lintang": "0.35",
            "bujur": "126.22",
            "magnitudo": "6.1",
            "kedalaman": "10 Km",
            "wilayah": "135 km BaratDaya TERNATE-MALUT"
        }
    ]
}
```

Sangat mudah bukan?

## Dukungan
[![Saweria](https://img.shields.io/badge/saweria-orange?style=for-the-badge)](https://saweria.co/feriirawans)
##

__Catatan:__
Ini adalah API publik, gunakanlah dengan bijak :smile:
Terima kasih.

