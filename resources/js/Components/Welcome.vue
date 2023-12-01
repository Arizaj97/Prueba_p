<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';


</script>

<template v-if="">
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <ApplicationLogo class="block h-12 w-auto" />

            <h1 class="mt-8 text-2xl font-medium text-red-900">   
                ¡Bienvenidos a la Universidad La del Norte!
            </h1>

            <p class="mt-6 text-gray-500 leading-relaxed">
                En nombre de toda la comunidad académica, es un placer darles la más cordial bienvenida
                 a nuestra querida institución. En la Universidad "La del Norte", nos enorgullece ser
                 un espacio donde la excelencia académica se encuentra con la diversidad y la innovación.
            </p>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                   </svg>
                    <h2 class="ms-3 text-xl font-semibold text-gray-900">
                        <a href="https://laravel.com/docs">Apoyo financiero</a>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Conozca las alternativas de financiación para estudiar un pregrado o posgrado en Uninorte. Becas, créditos, financiación y pagos.
                </p>

                <p class="mt-4 text-sm">
                  
                </p>
            </div>

            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                   </svg>
                    <h2 class="ms-3 text-xl font-semibold text-gray-900">
                        <a href="https://laracasts.com">Alianza</a>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    A través de esta alianza con CESA, en Bogotá, EAFIT, en Medellín e ICESI en Cali, compartimos valores fundamentales como la defensa de la democracia, las libertades individuales y de empresa, y el respeto por la vida.
                 </p>

                <p class="mt-4 text-sm">
                  
                </p>
            </div>

            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                     </svg>
                    <h2 class="ms-3 text-xl font-semibold text-gray-900">
                        <a href="https://tailwindcss.com/">Campus Seguro</a>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Aquí encontrarás toda la información en caso de requerir asesoría en temas de salud, psicología, soporte técnico, seguridad física, entre otros, así como recomendaciones para promover nuestro campus seguro.
                </p>
            </div>

            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                   </svg>
                    <h2 class="ms-3 text-xl font-semibold text-gray-900">
                        Calendario académico
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Si quieres estar al tanto de todo lo que pasa en la universidad y conocer las fechas importantes en el desarrollo de tus clases, debes llevar contigo el Calendario Académico y de Eventos Institucionales.</p>
            </div>
        </div>
    </div>
</template>
