<template>
    <AppLayout>
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg flex justify-center items-center">
         <table  class="space-x-2 sm:-my-px sm:ml-1 border-t border-blue-800"> 
                <thead>
                    <tr>                       
                        <th  class="border border-black-300">Nombre</th>
                        <th  class="border border-gray-300">descripcion</th>
                        <th   class="border border-gray-300"></th>
                    </tr>
                 </thead>
                <tbody  v-for="item in subjects" :key="item">
                     <tr>
                        <td class="border border-gray-300">{{ item.name_subjects }}</td>
                        <td class="border border-gray-300">{{ item.description }}</td>
                        <td>
                            <PrimaryButton  @click.prevent="add(item ,this.auth.user)">
                                 Agregar
                            </PrimaryButton>    
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
        axios
        
    },

    props: {
        subjects: Object,
        auth:{
            user:Array,
        }
    },
    methods: {
        add(id, teacher) {
            if (confirm('¿Seagregara una  nueva clase ?')) {
                axios.put(route('teache.update',[id]),{teacher}, {
                }).then(response => {

                    this.subjects = response.data;
                }).catch(err => {
                    this.error;
                })
            }

        },
    }


}
</script>