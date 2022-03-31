# laravel-magical-artisan
A package for easier use of laravel artisan


## Introduction

### Using this package, you can create multiple models with one command

## Instalation 

```bash
composer require mkhab7/laravel-magical-artisan
```

## Examples 

### Making multiple model on one command

```bash
php artisan magical:make-model Product Category Comment Order
```

### Using options

To set the option, you can use all the options that are used to build a model. Such as -a,-m,-f and the rest

```bash
php artisan magical:make-model Product Category Comment Order -m -f
```

