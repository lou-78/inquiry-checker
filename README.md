# Inquiry Checker (Laravel Project)

This is a simple web application built with Laravel to analyze and manage customer inquiries.

## Overview

The goal of this project is to simulate a small system that processes business inquiries and provides basic analysis.

It allows users to:
- submit an inquiry
- analyze its content
- view saved messages

## Features

- inquiry submission form
- automatic message analysis
- saved messages history
- simple dark UI

## Tech Stack

- PHP
- Laravel
- Blade
- SQLite

## How to run the project

```bash
git clone https://github.com/lou-78/inquiry-checker.git
cd inquiry-checker
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
