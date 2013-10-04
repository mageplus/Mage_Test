Mage_Test
=========

Test framework and test suite for Magento

## Installation

### 1. Add to your composer.json

    "require-dev": {
        "mageplus/magetest": "dev-master"
    },
    
Until this gets added to packagist, you'll need to configure the repository as well:

    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/kalenjordan/Mage_Test"
        }
    ],

Then run `composer update`.

### 2. Then configure it

You'll need to create a copy of your database for the tests to run against.

    mysqladmin -u{username} -p{password} create {database_name}_phpunit
    mysqldump -u{username} -p{password} {database_name} > var/{database_name}.sql
    mysql -u{username} -p{password} {database_name}_phpunit < var/{database_name}.sql

Now, setup your local.xml:

    cp app/etc/local.xml.phpunit.template app/etc/local.xml.phpunit

And drop your database credentials and such in.

### 3. Run it

Then run this from your Magento root.

    vendor/bin/phpunit UnitTests.php