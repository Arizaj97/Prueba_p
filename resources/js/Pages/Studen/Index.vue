<template>
  <AppLayout>
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg flex justify-center items-center">
      <table  class="space-x-2 sm:-my-px sm:ml-1 border-t border-blue-800">
        <thead>
          <tr>
            <th class="border border-black-300"></th>
            <th class="border border-black-300">Asignatura</th>
            <th class="border border-gray-300">Descripción</th>
            <th class="border border-gray-300">Créditos del área</th>
            <th class="border border-gray-300">Dictada por</th>
          </tr>
        </thead>
        <tbody v-for="item in subjects" :key="item.id">
          <tr>
            <td>
              <label class="flex items-center">
                <input type="checkbox" v-model="student" @change="selectSingleStudent(item)" :value="item" />
                <span class="ms-2 text-sm text-gray-600"></span>
              </label>
            </td>
            <td class="border border-gray-300">{{ item.name_subjects }}</td>
            <td class="border border-gray-300">{{ item.description }}</td>
            <td class="border border-gray-300">{{ item.credits }}</td>
            <td class="border border-gray-300">{{ item.name }}</td>
          </tr>
        </tbody>
      </table>
     </div>
     <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg flex justify-center items-center">
          <p>Total de Créditos Seleccionados: {{ totalCredits }}</p>

          <PrimaryButton @click="guardarDatos(student)" class="m-4">Guardar Datos</PrimaryButton>
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
    subjects: Object,
    auth: {
      user: Array,
    }
  },
  data() {
    return {
      student: [],

    }
  },
  methods: {
    guardarDatos(student) {
      if (this.totalCredits < 7) {
        alert("Debe seleccionar al menos 7 créditos.");
      } else if (this.hasDuplicateSubjects()) {
        alert("Error: No se pueden seleccionar asignaturas duplicadas.");
      } else {
        console.log(this.auth.user.id);
        axios.put(route('studen.update'), {
          student,
          id: this.auth.user.id

        }, {

        }).then(response => {
          window.location.reload();
          this.subjects = response.data;
        }).catch(err => {
          this.error;
          window.location.reload();
        })

      }
    },
    hasDuplicateSubjects() {
      const subjectSet = new Set();
      for (const item of this.student) {
        if (subjectSet.has(item.id_subjects)) {
          return true;
        }
        subjectSet.add(item.id_subjects);
      }

      return false;
    },

    selectsinglestudent() {
      for (var i = 0; i > this.student; i++) {
        console.log(this.student[i])
      }


    }

  },
  computed: {
    totalCredits() {
      return this.student.reduce((total, item) => total + item.credits, 0);
    },
  },
}
</script>