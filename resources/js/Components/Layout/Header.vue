<template>
    <header class="p-3 py-5 bg-gray-50 dark:bg-gray-800">

        <!--Desktop-->
        <!-- <ul class="flex items-center justify-between">
            <li>
                <input type="select" class="bg-slate-100 px-3 py-2 rounded-3xl" placeholder="Pesquisar">
            </li>
        </ul> -->

        <!--Mobile-->
        <ul class="flex items-center gap-x-2">
            <li>
                <button type="button" class="lg:hidden text-gray-500 hover:text-gray-600" data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Toggle navigation">
                    <svg class="w-5 h-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
            </li>
            <li>
                <input type="text" class="border-none rounded-md bg-gray-100" placeholder="Pesquisar">
            </li>
        </ul>
    </header>
</template>

