<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

const form = useForm({
    name: '',
    email: '',
    phone:'' ,
    city: '',
    document: '',
    password: '',
    password_confirmation: '',
    rol_id:'',
    semester:'0',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Register" />

    <AuthenticationCard>
        <template #logo>
            <ApplicationLogo class="block h-11 w-auto"/>
        </template>

        <form @submit.prevent="submit">

            <div>
                <InputLabel for="name" value="nombre" />
                <TextInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="name"
                />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="phone" value="telefono" />
                <TextInput
                    id="phone"
                    v-model="form.phone"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    pattern="[0-9]+" 
                    autocomplete="phone"
                />
                <InputError class="mt-2" :message="form.errors.phone" />
            </div>

            <div class="mt-4">
                <InputLabel for="document" value="documento de identidad">
                </InputLabel>
                <TextInput
                    id="document"
                    v-model="form.document"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    pattern="[0-9]+" 
                    autocomplete="document"
                    :message="solo"
                    
                />
                <InputError class="mt-2" :message="form.errors.document"/>
            </div>

            <div class="mt-4">
                <InputLabel for="city" value="ciudad" />
                <TextInput
                    id="city"
                    v-model="form.city"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="city"
                />
                <InputError class="mt-2" :message="form.errors.city" />
            </div>

                        
            <div class="  input-form mt-4 grid">
                
                <label class=" items-center justify-center y-center">area de estudio:</label>

                <select class="form-control mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                             v-model="form.rol_id">
                            <option value="">Seleccione…</option>
                            <option value="1">Estudiante</option>
                            <option value="2">Profesor y administrativos</option>
                </select>
            </div>

            <div class="   mt-4 grid" v-if="form.rol_id === '1'"> 
                
                <label class=" items-center justify-center y-center">Semestre:</label>

                <select class=" mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                         v-model="form.semester">
                            <option value="0">Seleccione semestre…</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                </select>
            </div>


            <div class="mt-4">
                <InputLabel for="email" value="Email" />
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
                    autocomplete="username"
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />
                <TextInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="new-password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />
                <TextInput
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="new-password"
                />
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature" class="mt-4">
                <InputLabel for="terms">
                    <div class="flex items-center">
                        <Checkbox id="terms" v-model:checked="form.terms" name="terms" required />

                        <div class="ms-2">
                            I agree to the <a target="_blank" :href="route('terms.show')" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Privacy Policy</a>
                        </div>
                    </div>
                    <InputError class="mt-2" :message="form.errors.terms" />
                </InputLabel>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Already registered?
                </Link>

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
</template>
