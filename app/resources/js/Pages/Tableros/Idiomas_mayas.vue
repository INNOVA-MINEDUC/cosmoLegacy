<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import {Head, Link} from '@inertiajs/vue3';
import { ref } from 'vue'

const parentMessage = ref('Parent')
const items = ref([])

defineProps(['libros', 'url_return'])
</script>

<template>
        <Head title="Idiomas Mayas" />

        <div
            class="bg-cover bg-center flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0 dark:bg-gray-900"
            style="background-image: url('../../fondo.png')"
        >
            <div class="relative overflow-x-auto sm:rounded-lg">

                <button class="bg-transparent text-gray-800 font-semibold py-4  rounded">
                    <a :href="`/${url_return}`" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><- Regresar</a>
                </button>

<!--                <pre>{{ libros.data }}</pre>-->

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
                            Enlace
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Idioma
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                        v-for="(item, index) in libros.data"
                        :key="`preprimaria-${item.id}`"
                    >
<!--                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                {{ item.id }}
                            </div>
                        </td>-->
                        <td class="px-6 py-4">
                            {{ item.libro.grado }}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ item.libro.materia }}
                        </th>
                        <td class="px-6 py-4">
                            <a :href="item.enlace" target=”_blank” class="inline-flex items-center px-2.5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Ver
                            </a>
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ item.idioma }}
                        </td>
                    </tr>
                    </tbody>
                </table>
                <nav class="flex items-center flex-column flex-wrap md:flex-row justify-center pt-4"
                     aria-label="Table navigation">
<!--                <span
                    class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Listando <span
                    class="font-semibold text-gray-900 dark:text-white">1-7</span> de <span
                    class="font-semibold text-gray-900 dark:text-white">1000</span></span>-->
                    <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                        <li v-for="(page, index) in libros.links">
                            <a
                                :href="page.url"
                                class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-blue-300 rounded-s-lg hover:bg-blue-300 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 "
                                :class="{'bg-blue-600 text-white dark:bg-blue-600 dark:text-white': page.active}"
                            >
                                {{ page.label}}
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

<!--            {{ libros }}-->

        </div>

    <!--    <Link
            :href="route('welcome')"
            class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
        >
            <- Regresar
        </Link>-->

</template>
