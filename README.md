# Solmatek Makina E-Ticaret Sitesi

Bu proje Laravel 12 ve Filament kullanılarak oluşturulmuş tam yönetilebilir bir e-ticaret sitesi örneğidir.

```
solmatek/
├── app/               # Laravel uygulaması
├── public/            # cPanel'de public_html altına taşınır
├── resources/         # Blade ve Tailwind dosyaları
├── routes/            # Uygulama rotaları
└── ...
```

Yönetim paneline `/adminPanel` adresinden erişebilirsiniz.

## B2B Özellikleri

- Bayi profili oluşturma ve onay süreci
- Ürüne özel bayi fiyatı tanımlayabilme
- Fiyatlar yalnızca onaylı bayilere gösterilir
- Sipariş ve sipariş kalemi yönetimi


## Diğer Özellikler
- Ürün ve kategori yönetimi
- Garanti BBVA POS entegrasyonu (örnek yapı)
- Admin panelde tüm içerikleri kontrol etme
- Uçan WhatsApp butonu
- Paylaşımı kolay online_migrate.php ile tek tuşla migrasyon
## Kurulum

1. PHP ve Composer kurulu olduğundan emin olun.
2. Laravel bağımlılıklarını yüklemek için:
```bash
cd solmatek
composer install
```
3. Ön yüz dosyaları için Node paketlerini yükleyin:
```bash
npm install
```
Ardından üretim için derleme yapın:
```bash
npm run build
```
4. Ortam dosyasını kopyalayıp uygulama anahtarını oluşturun:
```bash
cp .env.example .env
php artisan key:generate
```
5. Veritabanını hazırlayıp örnek verileri yükleyin:
```bash
php artisan migrate --seed
```
Eğer komut satırına erişiminiz yoksa `solmatek/online_migrate.php` dosyasını
tarayıcıdan çalıştırarak migrasyonları otomatik olarak gerçekleştirebilirsiniz.
Kullanımdan sonra güvenlik için bu dosyayı silmeyi unutmayın.
6. Yönetim paneline giriş için bir kullanıcı oluşturun:
```bash
php artisan make:filament-user --name="Admin" --email=admin@example.com --password=123456 --no-interaction
```
7. Geliştirme sunucusunu başlatmak için:
```bash
php artisan serve
```

Uygulama `http://localhost:8000` adresinde çalışacaktır.

Proje kodlari `solmatek` klasorundedir. cPanel'de `public_html` altina bu klasordeki `public` dizinini tasiyarak yayina alabilirsiniz.

## Yayına Hazırlık ve Test
Projeyi canlıya almadan önce aşağıdaki adımları izleyin:

1. Testleri çalıştırın:
```bash
php artisan test
```
2. Ön yüz dosyalarını üretim için derleyin:
```bash
npm run build
```
3. `.env` dosyasında veritabanı ve Garanti BBVA POS bilgilerinin doğru olduğundan emin olun.
4. `online_migrate.php` dosyasını kullandıysanız yayın öncesi silin.
5. `storage` ve `bootstrap/cache` klasörlerinin yazılabilir olduğundan emin olun.
Tüm adımlar tamamlandığında proje yayına hazırdır.
Tüm testler başarıyla geçtiğinde ve yapılandırmalar doğruysa siteyi canlıya alabilirsiniz.
