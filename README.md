# php-dropzone-ffmpeg-video-upload

### Kullanımı
Dropzone upload yapılması için verilen videoyu 240p, 360p, 480p, 720p, 1080p olarak çıktı veriyor ve bu çıktıyı direk sunucuya ekliyor ek olarak da sıkıştırma yapıyor.

  - Video Kompres
  - Video Boyutlandırma

### Önemli Bilgi: 
Bu sistemi yeni geliştirmeye başladım vakit buldukça yeni özellikler katmaya başlayacağım misal FFMPEG UI arayüzü ekleme planlarım var. Ek olarak da bilgim yettiği kadar basit anlatım ile FFMPEG kullanımı nasıl olur diye küçük bir dokümanda ekleyeceğim.

### Kurulum

*  [FFMPEG] Windows indirme linki : https://ffmpeg.zeranoe.com/builds/

> İndirilen zip arşivini C dizini altına ffmpeg adında yeni klasör açarak bu klasör içerisine çıkarıyoruz.
```sh
ffmpeg -i C:\Users\Downloads\1.mp4 -ss 00:00:01.00 -vframes 1 -vf scale=1920:1080 out.jpg
```
> Yukarıdaki örnekdeki gibi terminal veya cmd'de ffmpeg keyi ile doğrudan kullanmak istiyorsanız şu adımları izleyin; 

> Bilgisayarım özellikler bölümüne girdikten sonra Gelişmiş Sistem Ayarlarını açıyoruz Ortam Değişkenlerine tıklıyoruz
> Sistem değişkenleri bölümünde PATH i bulup çift tıklıyoruz açılan pencerede yeni butonuna tıklayarak C:\ffmpeg\bin  dosya yolunu veriyoruz yani arşivden nereye çıkardıysanız o dosya yolunu veriyorsunuz ekliyoruz ve tamama tıklıyoruz

> Kurulum bittikten sonra projeyi çalıştırıp kullanabilirsiniz kod bloklarının ne anlama geldiği yorum satırları ile belirtilmiştir.
> Projeyi indirdikten sonra projenin ana dizinine " video " isminde bir klasör oluşturun






   [FFMPEG]: <https://ffmpeg.zeranoe.com/builds/>
 


