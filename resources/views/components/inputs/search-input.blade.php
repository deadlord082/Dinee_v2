<?php
$placeholder = $placeholder ?? 'Rechercher';
$action = $action ?? '';
?>
<form class="max-w-md mx-10 md:mx-auto md:w-100" method="POST" action="{{  $action  }}">
@csrf
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Rechercher</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="search" name="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50" placeholder="{{ $placeholder }}" />
        <button type="submit" class="hidden text-white absolute end-2.5 bottom-2.5 bg-dinee hover:bg-dinee-secondary focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2">Rechercher</button>
    </div>
</form>
