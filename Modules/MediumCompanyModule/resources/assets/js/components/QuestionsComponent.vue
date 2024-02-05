<template>
    <!-- Main container for the form -->
    <div class="d-flex flex-column ">
        <!-- FormKit component for the main form -->
        <FormKit type="form" form-class="border border-dark p-3" :incomplete-message="false" @submit="submitHandler"
                 :actions="false">


            <!-- FormKit component for the list of questions -->
            <FormKit type="list" name="questions" dynamic #default="{ items, node, value }">
                <!-- Loop through categories and display questions -->
                <div v-for="(cat, catindex) in questionsWithCategories" :key="catindex">
                    <h2 v-text="cat.title"></h2>
                    <!-- Group of questions within a category -->
                    <div class="row form-group border border-dark p-3">
                        <!-- FormKit group for individual question -->
                        <FormKit type="group" v-for="(item, index) in cat.questions" :key="item" :index="index">
                            <!-- Hidden field for question ID -->
                            <FormKit name="id" type="hidden" :value="item.id"/>
                            <!-- Select input for the question -->
                            <FormKit type="select" :label="item.question" placeholder="انتخاب کنید"
                                     input-class="form-control" name="value"
                                     :options="{
                            0: 'چالش جدی',
                            1: 'بسیار ناخوشایند',
                            2: 'ناخوشایند',
                            3: 'نیاز به توجه دارد',
                            4: 'میتواند بهتر شود',
                            5: 'میانگین',
                            6: 'قبل قبول',
                            7: 'منطقی',
                            8: 'خوب',
                            9: 'خیلی خوب',
                            10: 'عالی',
                        }"
                                     validation="required"
                                     message-class="form-text text-danger"
                                     :validation-messages="{
                            required: 'لطفا انتخاب کنید',
                        }"
                            />
                        </FormKit>
                    </div>
                </div>
                <!-- Submit button -->
                <FormKit type="submit" id="clicked" label="ثبت" input-class="btn btn-primary mt-3"/>
            </FormKit>

        </FormKit>
    </div>
</template>

<script setup>
// Importing necessary functions from Vue
import {onBeforeMount, ref} from "vue";

// Creating a reactive reference for the list of questions with categories
const questionsWithCategories = ref([])

// Fetching data before mounting the component
onBeforeMount(async () => {
    await axios.get('/diagnostics/2/getQuestionsWithCategoryMIDCOM')
        .then(res => {
            questionsWithCategories.value = res.data.result
        })
        .catch(e => console.log(e))
})

// Handling form submission
async function submitHandler(data) {
    await axios.post('/diagnostics/2/insertAnswerMIDCOM', {...data})
        .then(res => {
            // Redirecting to the next step upon successful submission
            window.location.href = '/diagnostics/2/step/2';
        })
        .catch(e => console.log(e))
}
</script>
