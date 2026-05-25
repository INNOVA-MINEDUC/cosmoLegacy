<script setup>
import { Head } from "@inertiajs/vue3";

defineProps({
    evaluacion: { type: Array, required: true },
    intervencion: { type: Array, required: true }
});
</script>

<template>
    <Head title="Estrategia de Nivelación de los Aprendizajes" />

    <div class="bg-cover bg-center flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0 dark:bg-gray-900" style="background-image: url('/fondo.png')">
        <div class="w-full max-w-7xl px-4 lg:px-8 mb-8 mt-8">
            <button class="bg-transparent text-gray-800 font-semibold py-4 rounded mb-2">
                <a href="/" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">&lt;- Regresar</a>
            </button>

            <!-- Kit de Evaluación -->
            <div class="relative overflow-x-auto sm:rounded-lg shadow-md mb-12">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Estrategia de Nivelación de los Aprendizajes
                        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                            1. Kit de Evaluación
                        </p>
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-16">No.</th>
                            <th scope="col" class="px-6 py-3">Material</th>
                            <th scope="col" class="px-6 py-3 text-center w-32">Enlace</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                            v-for="(item, index) in evaluacion"
                            :key="`eval-${item.id}`"
                        >
                            <td class="px-6 py-4">{{ index + 1 }}</td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ item.titulo }}</th>
                            <td class="px-6 py-4 text-center">
                                <!-- Carpeta: desplegable -->
                                <details v-if="item.archivos && item.archivos.length > 0" class="text-left">
                                    <summary class="cursor-pointer inline-flex items-center gap-1.5 px-3 py-2 text-sm font-medium text-blue-700 bg-blue-50 border border-blue-200 rounded-lg hover:bg-blue-100 dark:text-blue-300 dark:bg-blue-900/30 dark:border-blue-700 dark:hover:bg-blue-900/50 select-none list-none">
                                        <svg class="size-3.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" /></svg>
                                        Ver archivos ({{ item.archivos.length }})
                                    </summary>
                                    <div class="mt-2 space-y-1.5 min-w-max">
                                        <template v-for="archivo in item.archivos" :key="archivo.id">
                                            <a v-if="archivo.enlace" :href="archivo.enlace" target="_blank"
                                                class="flex items-center gap-1.5 px-2.5 py-1.5 text-xs text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded dark:text-gray-300 dark:hover:text-blue-300 dark:hover:bg-blue-900/20 transition-colors">
                                                <svg class="size-3 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" /></svg>
                                                {{ archivo.titulo }}
                                            </a>
                                            <span v-else class="flex items-center gap-1.5 px-2.5 py-1.5 text-xs text-gray-400 dark:text-gray-500">
                                                <svg class="size-3 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" /></svg>
                                                {{ archivo.titulo }}
                                            </span>
                                        </template>
                                    </div>
                                </details>
                                <!-- Material único -->
                                <a v-else-if="item.enlace" :href="item.enlace" target="_blank"
                                    class="inline-flex items-center px-2.5 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Ver
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Kit de Intervención -->
            <div class="relative overflow-x-auto sm:rounded-lg shadow-md mb-12">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Estrategia de Nivelación de los Aprendizajes
                        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                            2. Kit de Intervención
                        </p>
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-16">No.</th>
                            <th scope="col" class="px-6 py-3">Material</th>
                            <th scope="col" class="px-6 py-3 text-center w-32">Enlace</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                            v-for="(item, index) in intervencion"
                            :key="`int-${item.id}`"
                        >
                            <td class="px-6 py-4">{{ index + 1 }}</td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ item.titulo }}</th>
                            <td class="px-6 py-4 text-center">
                                <!-- Carpeta: desplegable -->
                                <details v-if="item.archivos && item.archivos.length > 0" class="text-left">
                                    <summary class="cursor-pointer inline-flex items-center gap-1.5 px-3 py-2 text-sm font-medium text-blue-700 bg-blue-50 border border-blue-200 rounded-lg hover:bg-blue-100 dark:text-blue-300 dark:bg-blue-900/30 dark:border-blue-700 dark:hover:bg-blue-900/50 select-none list-none">
                                        <svg class="size-3.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" /></svg>
                                        Ver archivos ({{ item.archivos.length }})
                                    </summary>
                                    <div class="mt-2 space-y-1.5 min-w-max">
                                        <template v-for="archivo in item.archivos" :key="archivo.id">
                                            <a v-if="archivo.enlace" :href="archivo.enlace" target="_blank"
                                                class="flex items-center gap-1.5 px-2.5 py-1.5 text-xs text-gray-700 hover:text-blue-700 hover:bg-blue-50 rounded dark:text-gray-300 dark:hover:text-blue-300 dark:hover:bg-blue-900/20 transition-colors">
                                                <svg class="size-3 shrink-0 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" /></svg>
                                                {{ archivo.titulo }}
                                            </a>
                                            <span v-else class="flex items-center gap-1.5 px-2.5 py-1.5 text-xs text-gray-400 dark:text-gray-500">
                                                <svg class="size-3 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" /></svg>
                                                {{ archivo.titulo }}
                                            </span>
                                        </template>
                                    </div>
                                </details>
                                <!-- Material único -->
                                <a v-else-if="item.enlace" :href="item.enlace" target="_blank"
                                    class="inline-flex items-center px-2.5 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Ver
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</template>
