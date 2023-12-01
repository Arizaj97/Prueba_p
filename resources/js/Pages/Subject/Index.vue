<template>

    <AppLayout>
        <div  class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8  py-4">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">    
                <div class="flex justify-center items-center mt-8">
                   <div  >
                    <table class=" sm:-my-px sm:ml-1 border-t border-black-800" v-if="auth.user.rol_id === 2 || auth.user.rol_id === 1" >
                        <thead>
                            <tr>
                                <th  class="border border-black-300">Nombre</th>
                                <th  class="border border-gray-300">descripcion</th>
                                <th  class="border border-gray-300">creditos del area</th>
                                <th   class="border border-gray-300"></th>
                            </tr>
                        </thead>
                        <tbody  v-for="item in subjects" :key="item">

                            <tr>
                                <td class="border border-gray-300">{{ item.name }}</td>
                                <td class="border border-gray-300">{{ item.description }}</td>
                                <td class=" border border-gray-300">{{ item.credits }}</td>
                                <td>
                                    <PrimaryButton  @click.prevent="add(item ,this.auth.user) ">
                                         Agregar
                                    </PrimaryButton>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class=" sm:-my-px sm:ml-1 border-t border-black-800" v-if="auth.user.rol_id === 3 || auth.user.rol_id === 1 " >
                        <thead>
                            <tr>
                                <th  class="border border-black-300">Nombre</th>
                                <th  class="border border-gray-300">descripcion</th>
                                <th  class="border border-gray-300">creditos del area</th>
                                <th  class="border border-gray-300">dictada por</th>
                                <th   class="border border-gray-300"></th>
                            </tr>
                        </thead>
                        <tbody  v-for="item in subjects" :key="item">

                            <tr>
                                <td class="border border-gray-300">{{ item.name }}</td>
                                <td class="border border-gray-300">{{ item.description }}</td>
                                <td class=" border border-gray-300">{{ item.credits }}</td>
                                <td class=" border border-gray-300">{{ item.name_teacher }}</td>
                                <td>
                                    <PrimaryButton  @click.prevent="add(item ,this.auth.user)" v-if="item.name_teacher !== '' ">
                                         Agregar
                                    </PrimaryButton>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    </div>
                </div>
            </div>
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
    },methods: {
        add(id, teacher) {    
            if (confirm('¿Seagregara una  nueva clase ?')) {
                axios.put(route('teache.update',[id]),{teacher},{
                  
                }).then(response => {
        
          this.subjects = response.data;
            }).catch(err=>{
                this.error ;
            })
        }
        
    },
}


}
</script>