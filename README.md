<h1>Paybacksystem</h1>
<p>Beispiel: <a href="http://www.vereins-partner.de/">Beispiel eines Frontend</a>
</p> 

<h2>Installierte Programme / Templets</h2>
<ul>
  <li>Insallation Laravel 8.* mit jetstream 2.* , livewire 2.* teams  und tailwindcss
  <a href="https://jetstream.laravel.com/2.x/introduction.html"></a>
  <a href="https://jetstream.laravel.com/2.x/stacks/livewire.html"></a></li>
  <li><a href="https://boxicons.com/">boxicons </a></li>
  <li><a href="https://tailwindcss.com/">Tailwindcss</a></li>
  <li><a href="https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/">BootstrapMade.com </a></li>
  <li>.htaccess für 1und1 Server</li>
</ul>

<h2>Benötigte Lizenzen</h2>
Es wird eine Lizenz für
<a href="https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/">Anyar - v2.1.0 von bootstrapmade</a>
benötigt.

<h2>Installation</h2>
<ul>
   <li>git clone https://github.com/kube-csc/paybacksystem.git</li>
   <li>composer.phar install</li>
   <li>.env Datei ausfüllen (Es werden auch Informationen über den Verein abgefragt.)</li>
   <li>composer.phar install</li>
   <li>anlegen der "bildmaterial.blade.php" im Ordner "paybacksystem\resources\views\_partials\" mit der Vorlage "bildmaterial_example.blade.php" und Verwende Bilder Quellen eingeben</li>
   <li>anlegen der "recht.blade.php" im Ordner "paybacksystem\resources\views\_partials\" mit der Vorlage "recht_example.blade.php" und Haftungsauschluss / Urheberrechte auf der Impressumseite eingeben</li>    
   <li>anlegen der "termsOfUse.blade.php" im Ordner "paybacksystem\resources\views\_partials\" mit der Vorlage "termsOfUse_example.blade.php" und Nutzungsbedingungen / DSGVO eingeben</li>       
   <li>php artisan migrate:fresh --seed Datenbank</li>
</ul>

<h2>Update</h2>
<ul>
   <li>git pull origin main</li>
</ul>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
