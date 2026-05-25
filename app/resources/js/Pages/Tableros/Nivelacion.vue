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
                                <!-- Carpeta: múltiples archivos -->
                                <template v-if="item.archivos && item.archivos.length > 0">
                                    <div v-for="archivo in item.archivos" :key="archivo.id" class="mb-1">
                                        <a v-if="archivo.enlace" :href="archivo.enlace" target="_blank"
                                            class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-full justify-center">
                                            {{ archivo.titulo }}
                                        </a>
                                        <span v-else class="text-xs text-gray-400 italic">{{ archivo.titulo }}</span>
                                    </div>
                                </template>
                                <!-- Material único -->
                                <a v-else-if="item.enlace" :href="item.enlace" target="_blank"
                                    class="inline-flex items-center px-2.5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
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
                                <!-- Carpeta: múltiples archivos -->
                                <template v-if="item.archivos && item.archivos.length > 0">
                                    <div v-for="archivo in item.archivos" :key="archivo.id" class="mb-1">
                                        <a v-if="archivo.enlace" :href="archivo.enlace" target="_blank"
                                            class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-full justify-center">
                                            {{ archivo.titulo }}
                                        </a>
                                        <span v-else class="text-xs text-gray-400 italic">{{ archivo.titulo }}</span>
                                    </div>
                                </template>
                                <!-- Material único -->
                                <a v-else-if="item.enlace" :href="item.enlace" target="_blank"
                                    class="inline-flex items-center px-2.5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
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
