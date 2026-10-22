<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    kode_buku: '',
    judul: '',
    pengarang: '',
    stok: 0,
})

const submit = () => {
    form.post('/books')
}
</script>

<template>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-6">Tambah Data Buku</h1>

        <form @submit.prevent="submit" class="space-y-4">

            <div>
                <label>Kode Buku</label>
                <input
                    v-model="form.kode_buku"
                    type="text"
                    class="border p-2 w-full"
                />
                <div v-if="form.errors.kode_buku" class="text-red-500">
                    {{ form.errors.kode_buku }}
                </div>
            </div>

            <div>
                <label>Judul</label>
                <input
                    v-model="form.judul"
                    type="text"
                    class="border p-2 w-full"
                />
                <div v-if="form.errors.judul" class="text-red-500">
                    {{ form.errors.judul }}
                </div>
            </div>

            <div>
                <label>Pengarang</label>
                <input
                    v-model="form.pengarang"
                    type="text"
                    class="border p-2 w-full"
                />
                <div v-if="form.errors.pengarang" class="text-red-500">
                    {{ form.errors.pengarang }}
                </div>
            </div>

            <div>
                <label>Stok</label>
                <input
                    v-model="form.stok"
                    type="number"
                    min="0"
                    class="border p-2 w-full"
                />
                <div v-if="form.errors.stok" class="text-red-500">
                    {{ form.errors.stok }}
                </div>
            </div>

            <button
                type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded"
                :disabled="form.processing"
            >
                {{ form.processing ? 'Menyimpan...' : 'Simpan Buku' }}
            </button>

        </form>
    </div>
</template>