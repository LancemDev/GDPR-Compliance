<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="bumblebee" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="min-h-screen font-sans antialiased bg-base-200/50 dark:bg-base-200">

        <x-mary-nav sticky full-width>
 
            <x-slot:brand>
                {{-- Drawer toggle for "main-drawer" --}}
                <label for="main-drawer" class="lg:hidden mr-3">
                    <x-mary-icon name="o-bars-3" class="cursor-pointer" />
                </label>
     
                {{-- Brand --}}
                <div>GDPR Compliance</div>
            </x-slot:brand>
     
            {{-- Right side actions --}}
            <x-slot:actions>
                <x-mary-theme-toggle darkTheme="dracula" lightTheme="retro" />
                <x-mary-button label="Messages" icon="o-envelope" link="###" class="btn-ghost btn-sm" responsive />
                <x-mary-button label="Notifications" icon="o-bell" link="###" class="btn-ghost btn-sm" responsive />
                <x-mary-button label="Logout" icon="o-power" link="/logout" class="btn-ghost btn-sm" responsive />
                {{-- <x-mary-button label="Logout" icon="o-power" link="/logout" class="btn-ghost btn-sm" responsive /> --}}
            </x-slot:actions>
        </x-mary-nav>
     
        {{-- MAIN --}}
        <x-mary-main full-width>
            {{-- SIDEBAR --}}
            <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-100 lg:bg-inherit">
     
                
                {{-- MENU --}}
                <x-mary-menu activate-by-route>
     
                    {{-- User
                    @if($user = auth()->user())
                        <x-mary-menu-separator />
     
                        <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="-mx-2 !-my-2 rounded">
                            <x-slot:actions>
                                <x-mary-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="logoff" no-wire-navigate link="/logout" />
                            </x-slot:actions>
                        </x-mary-list-item>
     
                        <x-mary-menu-separator />
                    @endif --}}
     
                    <x-mary-menu-item title="Dashboard" icon="o-home" link="/dashboard" />
                    <x-mary-menu-item title="Privacy Policy" icon="o-sparkles" link="/privacy-policy" />
                    <x-mary-menu-item title="Consent Management" icon="o-sparkles" link="/consent-management" />
                    <x-mary-menu-item title="Data Mapping" icon="o-sparkles" link="/data-mapping" />
                    <x-mary-menu-item title="Risk Assessment and DPIA" icon="o-sparkles" link="/risk-assessment" />
                    <x-mary-menu-item title="Data Subject Rights" icon="o-sparkles" link="/data-subject-requests" />
                    <x-mary-menu-item title="Data Incident Management" icon="o-sparkles" link="/incident-response" />
                    
                    <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
                        <x-mary-menu-item title="Wifi" icon="o-wifi" link="####" />
                        <x-mary-menu-item title="Archives" icon="o-archive-box" link="####" />
                    </x-mary-menu-sub>
                </x-mary-menu>
            </x-slot:sidebar>
     
            {{-- The `$slot` goes here --}}
            <x-slot:content>
                {{ $slot }}
            </x-slot:content>
        </x-mary-main>
     
        {{-- Toast --}}
        <x-mary-toast />
        <livewire:chatty />
    </body>
</html>
