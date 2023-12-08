# laravel-szamlazzhu

Implementation for Laravel which was made to support Szamlazz.hu Agent version of **3.4** and higher.

## Installation

```bash
composer require illionitgroup/laravel-szamlazzhu
```

## Introduction

This package supports the following methods:

- Invoice creation
- Invoice cancellation (reversing)
- Proforma invoice creation
- Proforma invoice deletion
- Receipt creation
- Receipt cancellation (reversing)

## Automatic PDF storing

Package can automatically save generated PDF files and store on the given disk. For further information about the
configuration possibilities please refer to the [configuration](doc/technical/config.md) documentation.

## Requirements

Supports Laravel: **5.5** / **6.*** / **7.*** / **8.*** / **9.*** / **10.***

## Documentations

The [official API](doc/official/Technical_Documentation_invoicing.pdf) documentation is also accessible in this
repository.