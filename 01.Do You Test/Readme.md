# Unit TEST
Ketika pertama kali install laravel maka bisa lgsg ditest dengan `php artisan test` yang nilainya passed 2 berasal dari /tests/Feature dan /tests/Unit bawaan dari laravel

## Perbedaan antara Folder Feature dan Folder Unit di folder tests

  Unit Test : - ketika functional yang sedikit maka memakai ini test atau logika yang ingin ditest.

  Feature Test: karena sebuah alur program yang berinteraksi dengan program, seperti Login, Register.

## Cara membuat Unit Test

  `php artisan make:test nameTest` => Feature Test

  `php artisan make:test nameTest -u` => Unit Test


## Nama File Test

  Wajib dengan prefix Test dibelakangnya, ShowHomePageTest.php .
  Wajib utk functionnya dengan prefix test, test_show_home_page() atau camelCase testShowHomePage()

  atau dengan menambahkan comment di atas sendiri dibawah class dengan ini tidak perlu menambahkan prefix test di nama functionnya.

  `/** @test */`

## Cara menjalankan test secara spesifik

  `php artisan test --filter name_function` menjalankan test secara spesifik function
  `php artisan test --filter nameClass` menjalankan test secara spesifik Class