<p align="center" >
  <b>POINT UTAMA</b>
</p>

---

> #### PENGENALAN SOFTWARE TESTING
> - Software testing adalah salah satu disiplin ilmu dalam software engineering
> - tujuannya ialah untk memastikan kualitas kode
---
> #### UNIT TEST
> - Unit test adalah untuk menguji bagian kode program terkecil, biasanya untuk menguji sebuah method
> - unit test bisa digunakan untuk meningkatkan kualitas kode program kita
---
> #### PHPUNIT
> - PHPUNIT adalah salah satu framework untuk unit testing yang dimiliki php.
>
> Berikut kode untuk menginstall phpunit :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/f77f3bbc-ba32-445f-a054-758bcb4037d9)
>
> Berikut file phpunit :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/a07cc197-0bdd-4ca2-a66f-936f40ecac17)
---
> #### SETUP AUTLOAD
> - dengan adanya setup autoload kita tidak perlu melakukan use namespace lagi,kita bisa menggunakan namespace yang sama untuk folder sorce code dan folder unit test.
>
> Berikut kode setup autoload :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/490c510f-7bc9-4bbf-8b05-31e3d1c1857c)
---
> #### MEMBUAT UNIT TEST
> - Untuk membuat unit test, kita bisa membuat class turunan dari PHPUNIT\Framework\TestCase
>
> Berikut kode class counter :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/cc823f87-bbf5-4442-8010-0893fa034d66)
>
> Berikut kode test counter :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/0222d617-d1c4-49e5-99e9-f02f4db7e2aa)
---
> #### MENJALANKAN UNIT TEST
> - kita menjalakan unit test menggunakan binary file PHPUnit bernama phpunit
>
> Perintah menggunakanya :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/a087e386-ba65-42ec-bd88-171e754b5289)
>
> Perintah menjalankan unit test per method :
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/de1e3e31-0fff-40ae-8ea6-3723feae2b68)
---
> #### Assertions
> - Assertions adalah mengecek apakah sebuah kondisi sudah terpenuhi, jika kondisi tidak terpenuhi, maka unit testnya kita anggap gagal
>
> #### CLASS ASSERT
> - Untuk melakukan assertions kita bisa memanfaatkan class yang sudah disediakan oleh phpunit yaitu PHPUnit\Framework\Assert
> - Class assert berisi static function yang banyak sekali, dan bisa kita gunakan sesuai kebutuhan.
>
> Berikut kode menggunakan assert :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/efbb29e4-c512-4ab9-a3e5-3adacde396cd)
>
> #### ASSERT DI TESTCASE
> - saat kita membuat class unit test, maka kita wajib membuat class turunan dari class testcase
> - jadi secara tidak langsung, kita juga bisa menggunkana function function assertions langsung dari unit test menggunakan $this atau self
>
> Berikut kode assert di test case :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/2e923589-3a3e-4053-b60e-ddb88ee027eb)
---
> #### ANNOTATION
> - Annotation yaitu mendata atau informasi yang bisa dimasukkan kedalam source doe, dimana di php annotation ditempatkan pada doc block
>
> #### @test
> - @test merupakan annotation yang digunakan untuk menandakan bahwa function ini adalah sebuah unit test
> - dengan menambahkan @test, kita tidak perlu lagi membuat nama function selalu diawali dengan kata test
>
> Berikut kode @test :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/0dfc577c-8c38-49ba-b503-4aa28618c297)
---
> #### TEST DEPENDENCY
> - diphp unit kita bisa membuat unit test yang tergantung dari hasil unit test lainnya untuk melakukan itu kita bisa menggunakan annotation @depends namaUnittest
>
> Berikut kode test dependency :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/32f2db9d-b271-4e32-8e06-2bf36fcc88a3)
---
> #### DATA PROVIDER
> - PHPUnit mendukung fitur data provider, dimana kita bisa membuat unite test dengan parameter, dan datanya diprovide dari function lain
> - untuk melakukan ini, kita bisa menggunakan annotation @dataProvider provider function
>
> Berikut kode math class :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/22122c95-dcdb-4b71-ba06-65d2266fe35d)
>
> Berikut kode unit test math manual :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/2f5f7e7b-592f-4d6a-9148-c398f86e5135)
>
> Berikut kode unit test dengan data provider :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/baa8b758-042f-4a49-afb1-a2d20d22151e)
>
> Berikut kode data provider :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/43fd49d9-c8fe-4006-9dec-a45725959503)
>
> #### @testWith
> - Dengan menggunakan @testWith kita bisa mengirim data ke unit test tanpa harus membuat function, kita cukup memasukkan dalam doc saja.
>
> Berikut kode @testWith :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/0014f8f9-7603-468c-a46e-fbf1ab8d76b9)
---
> #### TEST EXCEPTION
> - PHPUnit memiliki fitur assertion untuk memastikan bahwa sebuah exception harus terjadi jika terjadi, maka unit test dianggap gagal
> - kita bisa menggunakan function Assert::expectException(ClassException::class) jika ingin memastikan bahwa sebuah unit test harus terjadi exception yang kita perkirakan
>
> Berikut kode class person :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/7bede9d3-3068-4239-baf7-be0c65bbb491)
>
> Berikut kode test exception :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/2202cb9b-9952-4e6d-92c3-cbdbfaeb0151)
---
> #### TEST OUTPUT
> - PHPUnit memiliki fitur untuk mendekteksi output, dengan demikian kita bisa memastikan bahwa output yang dihasilkan sesuai dengan yang kita inginkan.
> - Untuk melakukan itu, kita bisa menggunakan Assert::expectOutputString('string');
>
> Berikut kode say goodbye :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/b7f595a4-f763-472d-90e8-be9d4d2088c9)
>
> Berikut kode test output :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/beb5e04d-576d-4ca2-83d1-0d97e16a5c4d)
---
> #### FIXTURE
> - Salah satu yang memakan waktu saat membuat unit test adalah membuat kode awal yang berulang ulang sebelum unit test
> - hal ini dinamakan fixture
> - dengan menggunakan fitur fixture milik phpunit hal ini bisa dipermudah
>
> #### setUp() Function
> - function setup() merupkana function yang akan selalu dipanggil sebelum function unit test dieksekusi
> - function setUp() sangat cocok sekali untuk membuat kode yang kita inginkan sebelum unit test dijalankan
>
> Berikut function setUp() :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/eee414e5-08ad-49f1-880f-d87ba9bc3253)
>
> #### ANNOTATION @before
> - jika kita ingin membuat function dengan nama berbeda kita bisa menggunakan annotation @before
>
> Berikut kode annotation @before :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/310fc2d6-882e-42da-8f1c-824d2115a391)
>
> Berikut kode fixture :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/84dc042b-7b62-4f95-9e83-22c1f2477f4b)
>
> #### tearDown() Function :
> - function terdown() merupakan function yang akan selalu dipanggil setelah function unit test dieksekusi
>
> Berikut kode teardown() function :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/310300f8-75bb-44ec-96be-c824f7afcb74)
---
> #### INDEPENDENT UNIT TEST
> - Secara default, class unit test itu sebenarnya akan selalu dibuat sebelum function unit test dijalankan, jadi tidak menggunakan object unit test yang sama
> - begini cara berjalan unit test :
>   - membuat object unit test
>   - menjalankan fixture set up
>   - menjalankan function unit test
>   - menjalankan fixture tear down
>   - ulangi dari awal untuk function unit test selanjutnya
>  
> Berikut kode sharing dengan static :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/656304e4-a92d-4d90-af93-4162ac5ea111)
---
> #### INCOMPLETE TEST
> - Secara default jika tidak terdapat maslaha pada unit testnya, maka phpunit akan menggangap unit test tersebut sabagai unit test yang sukses
>
> Berikut kode test sukses walau belum selesai :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/2a3ad6c7-4e39-4f53-a3e5-10f66c8d2bf6)
>
> Berikut kode menandai incomplete test :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/1c336ead-e2b5-4b1b-8e2f-8ccc5ad64529)
---
> #### SKIP TEST
> - kadang ada masalah ketika membuat unit test sehingga kita ingin men disabled unit test yang sudah ada
>
> Berikut kode tanpa skip unit test :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/c51547fc-031c-4abf-822c-3c562ff59db9)
>
> Berikut kode skip test :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/d8f55065-1a19-4f2c-9604-63bf35a7ad16)
>
> Berikut kode only on windows :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/ae385ad5-2bea-4a57-95b5-e74aed5cc4d7)
>
> Berikut only for php >= 8 :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/b8a6a71f-f9c8-4bd1-9362-c67bfd0269b4)
---
> #### STUB
> - Saat akan membuat test untuk sebuah class, dan ternyata class tersebut butuh dependency object lain, maka kita bisa membuat object pengganti yang bisa kita konfigurasi agar sesuai dengan keinginan kita
> - teknik ini dinamakan stubbing, dan object pengganti yang kita buat disebut stub
>
> Berikut kode product :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/fa3d33c6-7d71-454a-b886-1f318ecfa45e)
>
> Berikut kode product repository :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/67d952e5-11ff-487e-bd53-c400bf6130b5)
>
> Berikut kode product service :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/1167d16c-b2c5-464f-8f40-498975938f4c)
>
> Berikut kode membuat stub :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/793e3cf0-76d6-4aa9-9b24-a7171b61afe6)
>
> berikut kode konfigurasi stub :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/35a62f2e-9d17-4c8d-99f1-7413f62595ea)
>
> berikut kode konfigurasi stub dengan map :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/3758bf81-f1bc-4e4a-856e-ba59332f95a4)
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/1c9fede1-ef91-436f-9ce8-c28d49b5d42a)
>
> berikut kode konfigurasi stub dengan callback :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/5c19c4ed-83d2-4f26-a6aa-1d56f85a2a1a)
>
> berikut kode product service test sukses :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/e0e0d3c4-342b-419a-a9e7-2930983493fe)
>
> berikut kode product service test gagal :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/5ac9a544-e358-4c44-a308-c247bcacf6d0)
---
> #### MOCK OBJECT
> - Mock object sama seperti stub, hanya saja pada mock object, kita bisa melakukan verifikasi berapa banyak sebuah method dipanggil
>
> Berikut service delete product :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/6aa047cb-1314-40d7-a405-98da3f03f8e8)
>
> berikut unit test delete dengan stub :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/a88aeba9-f4b0-47d5-9f2f-f964f4032e30)
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/0f213226-a512-4f30-b619-60955ab4b0b0)
>
> berikut kode perubahan service delete :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/59d66f0d-9286-4274-bdac-0ec65a813aa6)
>
> Berikut kode membuat mock object :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/8df549a4-08ff-49bb-82dd-ec6e8517b453)
>
> Berikut kode konfigurasi mock object :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/a693063a-6bee-42d7-96cc-1a617f1b70b5)
>
> berikut kode integrasi dengan mock object :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/172429ba-9ba0-4a4d-8f42-eec603d4e37a)
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/b18124b7-acf6-40b5-9bbd-5d0174c28a4e)
---
> #### CONFIGURATION
> - PHPUnit mendukung file konfigurasi, dimana kita bisa menambahkan konfigurasi untuk PHPUnit
> - file konfigurasi PHPUnit bentuknya adalah file XML, biasanya nama file nya adalah phpunit.xml
>
> Berikut contoh configuration :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/55dc10a7-7df9-402a-bb64-f327e7818727)
>
> #### MENJALANKAN PHPUNIT DAN CONFIGURATION
> setelah file configurationnya selesai, kita bisa menjalankan PHPUnit dengan perintah phpunit --configuration phpunit.xml
>
> berikut kode integrasi dengan composer script :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/3141a3eb-f704-4454-9095-2d415aab6593)
---
> #### TEST SUITE
> - Anggap saja test suite ini seperti group atau fitur dalam unit test
>
> Berikut configuration dengan test suite :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/c0349d67-8475-4712-b27f-1a86c95f3095)
>
> Berikut kode menjalankan test suite tertentu :
>
> ![image](https://github.com/mTakku/php-unit-test/assets/145539342/3c4dd7b4-cc6f-476e-a276-523e18ca2c59)
---

<p align="center" >
  <b>PERTANYAAN DAN CATATAN TAMBAHAN</b>
</p>

---

> - Apakah lbh baik menggunakan phpstorm untuk memakai code yang berhubungan dengan php

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>

> - PHPUnit menggunakan pernyataan untuk memberi tahu Anda apakah kode Anda berfungsi seperti yang diharapkan.






















































