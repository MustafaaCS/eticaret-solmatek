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

## Kurulum

1. PHP ve Composer kurulu olduğundan emin olun.
2. Laravel bağımlılıklarını yüklemek için:
```bash
cd solmatek
composer install
```
3. Ortam dosyasını kopyalayıp uygulama anahtarını oluşturun:
```bash
cp .env.example .env
php artisan key:generate
```
4. Veritabanını hazırlayıp örnek verileri yükleyin:
```bash
php artisan migrate --seed
```
5. Yönetim paneline giriş için bir kullanıcı oluşturun:
```bash
php artisan make:filament-user --name="Admin" --email=admin@example.com --password=123456 --no-interaction
```
6. Geliştirme sunucusunu başlatmak için:
```bash
php artisan serve
```

Uygulama `http://localhost:8000` adresinde çalışacaktır.

Proje kodlari `solmatek` klasorundedir. cPanel'de `public_html` altina bu klasordeki `public` dizinini tasiyarak yayina alabilirsiniz.
