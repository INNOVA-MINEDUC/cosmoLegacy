<script setup>
import {Head} from '@inertiajs/vue3';

defineProps(['libros'])
</script>

<template>
    <Head title="Idiomas Mayas" />

    <div
        class="bg-cover bg-center flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0 dark:bg-gray-900"
        style="background-image: url('fondo.png')"
    >
        <div class="relative overflow-x-auto sm:rounded-lg">

            <button class="bg-transparent text-gray-800 font-semibold py-4 rounded">
                <a href="/" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">&lt;- Regresar</a>
            </button>

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Grado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Materia
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Idioma
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Enlace
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                    v-for="(item, index) in libros.data"
                    :key="`idiomas-mayas-${item.id}`"
                >
                    <td class="px-6 py-4">
                        {{ item.libro?.grado }}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                        {{ item.libro?.materia }}
                    </th>
                    <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                        {{ item.idioma }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a :href="item.enlace" target="_blank" class="inline-flex items-center px-2.5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ver
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>

            <nav class="flex items-center flex-column flex-wrap md:flex-row justify-center pt-4"
                 aria-label="Table navigation">
                <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                    <li v-for="(page, index) in libros.links">
                        <a
                            :href="page.url"
                            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-blue-300 rounded-s-lg hover:bg-blue-300 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700"
                            :class="{'bg-blue-600 text-white dark:bg-blue-600 dark:text-white': page.active}"
                        >
                            {{ page.label }}
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</template>
