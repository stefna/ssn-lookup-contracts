# Stefna SSN Lookup Contracts

Contracts and interfaces for implementing people and Social Security Number (SSN) lookup services in PHP.

## Overview

`stefna/ssn-lookup-contracts` provides standardized interfaces and exceptions to make it easier to write and swap 
different implementations for looking up people by their SSN (e.g., national registries or third-party lookup APIs).

Key interfaces:
- `Stefna\SsnLookup\LookupService`: Primary service interface defining `lookup(Ssn $ssn): Person`.
- `Stefna\SsnLookup\Entities\Person`: Extends base person contracts (`BasePerson`, `PersonWithAddress`, `PersonWithDoB`).
- `Stefna\SsnLookup\Entities\Address`: Contract for address retrieval (`getZipCode()`, `getCity()`, `getStreetAddress()`).
- `Stefna\SsnLookup\Exceptions\SsnLookupException`: Base exception for lookup errors.
- `Stefna\SsnLookup\Exceptions\PersonNotFound`: Exception thrown when a person cannot be found.

## Requirements

- **PHP:** `^8.0`
- **Dependencies:** `stefna/person-contracts` (`^1.0 || ^2.0`)

## Installation

Install the package via Composer:

```bash
composer require stefna/ssn-lookup-contracts
```

## Usage

Implement `Stefna\SsnLookup\LookupService` in your concrete lookup adapter:

```php
<?php

declare(strict_types=1);

use Stefna\PersonContract\Values\Ssn;
use Stefna\SsnLookup\Entities\Person;
use Stefna\SsnLookup\Exceptions\PersonNotFound;
use Stefna\SsnLookup\Exceptions\SsnLookupException;
use Stefna\SsnLookup\LookupService;

class CustomLookupService implements LookupService
{
    /**
     * @throws SsnLookupException
     */
    public function lookup(Ssn $ssn): Person
    {
        // Implementation logic to look up person data...
        // If not found:
        // throw PersonNotFound::withSsn($ssn);
    }
}
```

## Development & Scripts

The repository includes scripts for code quality and static analysis:

- **Run static analysis (PHPStan):**
  ```bash
  composer run-script check:static-analyze
  # or directly:
  ./vendor/bin/phpstan
  ```

- **Check code style (PHP_CodeSniffer):**
  ```bash
  composer run-script check:codestyle
  # or directly:
  ./vendor/bin/phpcs -n -s src
  ```

- **Fix code style automatically (PHP Code Beautifier and Fixer):**
  ```bash
  composer run-script fix:codestyle
  # or directly:
  ./vendor/bin/phpcbf --colors src
  ```

## Project Structure

```text
.
├── composer.json           # Composer package configuration and scripts
├── phpcs.xml               # PHP_CodeSniffer configuration
├── phpstan.neon            # PHPStan static analysis configuration
├── LICENSE.md              # MIT License
├── README.md               # Project documentation
└── src/
    ├── Entities/
    │   ├── Address.php     # Address interface
    │   └── Person.php      # Person interface contract
    ├── Exceptions/
    │   ├── PersonNotFound.php      # Thrown when person is not found
    │   └── SsnLookupException.php  # Base exception interface/class
    └── LookupService.php   # Main lookup service contract
```

## Contributing

We are always happy to receive feedback, bug reports, and contributions. Please feel free to open an issue or submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.
