# Lambang Provinsi & Kabupaten Seluruh Indonesia - API
Halo kawan-kawan selemat datang di repository *Lambang Provinsi & Kabupaten Seluruh Indonesia - API by Feri irawan*

Dibuat dengan &hearts; dan PHP (bukan Pemberian Harapan Palsu :laughing:)

## Website Dokumentasi

[![Lihat Dokumentasi](https://img.shields.io/badge/Lihat%20Dokumentasi-blue?style=for-the-badge)](http://feriirawan-api.herokuapp.com/docs/list/lambang-daerah-indonesia/)


## Lambang Provinsi
__Endpoint:__
```
https://feriirawan-api.herokuapp.com/list/symbols/province/200
```
- Angka `200` setelah `province` adalah ukuran semua lambang dalam satuan _pixel._

__Response:__
```json
{
    "status": "success",
    "message": "Daftar Lambang Provinsi di Seluruh Indonesia",
    "author": "Feri irawan",
    "source": "Wikipedia",
    "repository": "https://github.com/feri-irawan/API/tree/main/list/lambang-provinsi-indonesia#readme",
    "lambang": [
        {
            "index": 1,
            "title": "Nanggru00f6e Aceh Darussalam",
            "url": "https://feriirawan-api.herokuapp.com/list/symbols/province/1/200"
                                                                               ^ ^^^
        },
        {
            "index": 2,
            "title": "Sumatera Utara",
            "url": "https://feriirawan-api.herokuapp.com/list/symbols/province/2/200"
                                                                               ^ ^^^    
        }
    ]
}
```

- Angka pertama setelah `province` adalah index provinsi (1 sampai 34)
- Angka `200` setelah index provinsi adalah ukuran lambang dalam satuan _pixel._

__Contoh Lambang:__

<div align="center">
<img width="100" alt="Lambang Nanggru00f6e Aceh Darussalam" src="https://feriirawan-api.herokuapp.com/list/symbols/province/1/200"/>
<img width="100" alt="Jakarta" src="https://feriirawan-api.herokuapp.com/list/symbols/province/11/200"/>
<img width="100" alt="Lambang Sulawesi Selatan" src="https://feriirawan-api.herokuapp.com/list/symbols/province/29/200"/>
</div>

<br>

## Lambang Kabupaten
__Endpoint:__
```
https://feriirawan-api.herokuapp.com/list/symbols/regency/200
```
- Angka `200` setelah `regency` adalah ukuran semua lambang dalam satuan _pixel._

__Response:__
```json
{
    "status": "success",
    "message": "Daftar Lambang Kabupaten di Seluruh Indonesia",
    "author": "Feri irawan",
    "source": "Wikipedia",
    "repository": "https://github.com/feri-irawan/API/tree/main/list/lambang-provinsi-indonesia#readme",
    "lambang": [
        {
            "index": 1,
            "title": "Kabupaten Aceh Barat",
            "url": "https://feriirawan-api.herokuapp.com/list/symbols/regency/1/200"
                                                                              ^ ^^^
        },
        {
            "index": 2,
            "title": "Kabupaten Aceh Barat Daya",
            "url": "https://feriirawan-api.herokuapp.com/list/symbols/regency/2/200"
                                                                              ^ ^^^
        }
    ]
}
```

- Angka pertama setelah `regency` adalah index kabupaten (1 sampai 514)
- Angka `200` setelah index kabupaten adalah ukuran lambang dalam satuan _pixel._

__Contoh Lambang:__
<div align="center">
<img width="100" alt="Kabupaten Aceh Barat" src="https://feriirawan-api.herokuapp.com/list/symbols/regency/1/200"/>
<img width="100" alt="Kabupaten Aceh Barat Daya" src="https://feriirawan-api.herokuapp.com/list/symbols/regency/2/200"/>
<img width="100" alt="Kabupaten Bulukumba" src="https://feriirawan-api.herokuapp.com/list/symbols/regency/380/200"/>
</div>

## Dukungan
[![Saweria](https://img.shields.io/badge/saweria-orange?style=for-the-badge)](https://saweria.co/feriirawans)
##

__Catatan:__
Ini adalah API publik, gunakanlah dengan bijak :smile:
Terima kasih.
