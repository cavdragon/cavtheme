<?php

class Theme
{
    public static function init(): void
    {
        Setup::init();
        Menus::init();
        Header::init();
        Footer::init();
        Customizer::init();
    }
}