# Locations Pro Demo Site

## Setup
1. Load Git submodules: `git submodule init && git submodule update`
2. Copy `env.example` to `.env` and customize for environment if necessary
3. Install October Drivers plugin
4. Add copy of Locations Pro plugin to `plugins/aspendigital/locations`
5. Seed database with demo data: `php artisan locations:demo:seed 25000` (for 25,000 random places)

## License
This demo is available under the [MIT License](LICENSE.md).

The Locations Pro plugin (not included in this repository) is available commercially.