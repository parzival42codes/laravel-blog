
# Development
- php artisan event:list

## ToDo:
- leasot 'app/**/*.php' ( https://github.com/pgilad/leasot )

## Language

php artisan translation:list-missing-translation-keys
php artisan translation:sync-translations
php artisan translation:sync-translations database file all
php artisan translation:sync-translations file database all

# Database

## Migrate Database
- php artisan migrate:fresh
- php artisan customMigrate:migrateDirectories
- php artisan db:seed


## Backup and Restore Database

- php artisan db:dbLocalBackup
- php artisan db:dbLocalRestore

# Vendor

- ./vendor/bin/phpstan analyse
- php artisan insights
- phpmd app/Http/Controllers text ./laravelmd.xml
