<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head,useForm, usePage  } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

defineProps({
    title: String,
});

const form = useForm({
    name_subjects:'',
    description:'',
    credits:'',
    knowledge_area:'',
    name_teacher:'',
    type:'',
});
</script>
<template>
    <AppLayout title="Dashboard">


        <Head title="CREAR" />



        <template #header>
            <h1 class="font-semibold text-xl text-blue-800 leading-tight"> Crear una nueva clase</h1>
        </template>
        <div class="py-1">
        </div>


        <form @submit.prevent="form.post(route('teache.store'))" class="mt-6 space-y-6">
            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div>

                            <InputLabel for="name_subjects" value="" />

                            <span>
                                <h4>Nombre</h4>
                            </span>

                            <TextInput id="name_subjects"
                            type="text" 
                            class="mt-1 block w-full" 
                            v-model="form.name_subjects" 
                            required
                            autofocus autocomplete="name_subjects" />
                            <InputError class="mt-2" :message="form.errors.name_subjects" />
                        </div>
                        <div>

                            <InputLabel for="description" value="" />
                            <span>
                                <h4>descripcion</h4>
                            </span>
                            <TextInput id="description"
                                 type="text" 
                                 class="mt-1 block w-full" 
                                 v-model="form.description"
                                required
                                autofocus autocomplete="description" />
                            <InputError :message="form.errors.description" class="mt-2" />
                        </div>

                         <div>

                            <InputLabel for="knowledge_area" value="" />
                            <span>
                                <h4>area de conocimiento</h4>
                            </span>
                            <TextInput id="knowledge_area"
                                 type="text"
                                class="mt-1 block w-full"
                                v-model="form.knowledge_area" 
                                required
                                 
                                autofocus autocomplete="knowledge_area" />

                                <InputError :message="form.errors.knowledge_area" class="mt-2" />
                        </div>

                         <div>

                            <InputLabel for="credits" value="" />
                            <span>
                                <h4>creditos</h4>
                            </span>
                            <TextInput 
                            id="credits"
                            type="text" 
                            class="mt-1 block w-full"
                            v-model="form.credits"
                            pattern="[0-9]+"
                             required
                            autofocus autocomplete="credits" />

                            <InputError :message="form.errors.credits" class="mt-2" />
                        </div>

                        <div class="  input-form mt-4 grid">
                
                            <label class=" items-center justify-center y-center">Mododulo</label>

                            <select class="form-control mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                         v-model="form.type">
                                        <option value="">Seleccione…</option>
                                        <option value="1">Obligatorio</option>
                                        <option value="2">Electivo</option>
                            </select>

                        </div>

                        <div class="flex items-center gap-4 py-6">
                            <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing">
                                CREAR
                            </PrimaryButton>

                            <Transition enter-active-class="transition ease-in-out" enter-from-class="opacity-0"
                                leave-active-class="transition ease-in-out" leave-to-class=" opacity-0">

                                <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">CREADO CON EXITO.</p>
                            </Transition>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </AppLayout>
</template>