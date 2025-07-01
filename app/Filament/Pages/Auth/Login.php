<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Login as BaseLogin;

class Login extends BaseLogin
{
    // Здесь вы можете переопределить методы или добавить свою логику
    public function mount(): void
    {
        parent::mount();
dd(3333);
        // Например, добавить дополнительную логику перед отображением страницы
    }
}
