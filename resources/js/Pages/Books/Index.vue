<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
    books: {
        type: Array,
        default: () => []
    }
})
</script>

<template>
    <div class="p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">
                Data Buku
            </h1>

            <Link
                :href="route('books.create')"
                class="bg-blue-500 text-white px-4 py-2 rounded"
            >
                Tambah Buku
            </Link>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">
                            No
                        </th>
                        <th class="border border-gray-300 px-4 py-2">
                            Kode Buku
                        </th>
                        <th class="border border-gray-300 px-4 py-2">
                            Judul
                        </th>
                        <th class="border border-gray-300 px-4 py-2">
                            Pengarang
                        </th>
                        <th class="border border-gray-300 px-4 py-2">
                            Tahun
                        </th>
                        <th class="border border-gray-300 px-4 py-2">
                            Stok
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr
                        v-for="(book, index) in books"
                        :key="book.id"
                    >
                        <td class="border border-gray-300 px-4 py-2">
                            {{ index + 1 }}
                        </td>

                        <td class="border border-gray-300 px-4 py-2">
                            {{ book.kode_buku }}
                        </td>

                        <td class="border border-gray-300 px-4 py-2">
                            {{ book.judul }}
                        </td>

                        <td class="border border-gray-300 px-4 py-2">
                            {{ book.pengarang }}
                        </td>

                        <td class="border border-gray-300 px-4 py-2">
                            {{ book.tahun }}
                        </td>

                        <td class="border border-gray-300 px-4 py-2">
                            {{ book.stok }}
                        </td>
                    </tr>

                    <tr v-if="books.length === 0">
                        <td
                            colspan="6"
                            class="border border-gray-300 px-4 py-4 text-center"
                        >
                            Belum ada data buku.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>