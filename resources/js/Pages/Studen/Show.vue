<template>
    <AppLayout>
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg flex justify-center items-center">
            <table  class="space-x-2 sm:-my-px sm:ml-1 border-t border-blue-800">
                <thead>
                    <tr>
                        <th class="border border-gray-300">Estudiante
                        </th>
                        <th class="border border-gray-300">Asignatura</th>
                        <th class="border border-gray-300">Profesor</th>
                    </tr>
                </thead>
                <tbody v-for="test in quey" :key="test.id">
                    <tr>
                        <td class="border border-gray-300" v-for="te in test.student" :key="te.id">{{ te.name }}</td>
                        <td class="border border-gray-300" v-for="te in test.teacher" :key="te.id">{{ te.name }}</td>
                        <td class="border border-gray-300" v-for="te in test.subject" :key="te.id">{{ te.name_subjects }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import axios from 'axios';
export default {
    components: {
        Head,
        AppLayout,
        PrimaryButton,
        axios,


    },
    props: {
        quey: Array,
    },
   
}
</script>