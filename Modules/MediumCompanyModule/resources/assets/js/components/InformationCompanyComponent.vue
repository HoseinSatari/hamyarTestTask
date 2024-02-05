<script setup>
// Importing necessary functions from Vue

import {ref} from "vue";


// Handling form submission
const submitHandler = async (data) => {

    // Sending a POST request to the server
    await axios.post('/informationCompany', {...data})
        .then(res => {
            // Redirecting to the next step upon successful submission
            window.location.href = '/diagnostics/2/intro';
        })
        .catch(err => {
            // Handling specific error status code
            if (err.statusCode == 403) {
                window.location.href = '/diagnostics/2/intro';
            }
        });

}

</script>

<template>
    <FormKit

        type="form"
        id="registration-example"
        form-class="border border-dark p-3"
        submit-label="Register"
        :incomplete-message="false"
        @submit="submitHandler"
        :actions="false"
    >
        <div class="row">

            <div class="form-group col-md-4">
                <FormKit
                    type="text"
                    name="company_name"
                    id="company_name"
                    label="نام سازمان"
                    input-class="form-control"
                    label-class="form-label"
                    validation="required"
                    :validation-messages="{required : 'فیلد نام سازمان اجباری است'} "
                    message-class="form-text text-danger"
                />
            </div>
            <div class="form-group col-md-4">
                <FormKit
                    type="text"
                    name="type_company"
                    id="type_company"
                    label="نوع سازمان (سهامی خاص ، خیریه و ...)"
                    input-class="form-control"
                    label-class="form-label"
                    validation="required"
                    :validation-messages="{required : 'فیلد نوع سازمان اجباری است'} "
                    message-class="form-text text-danger"
                />
            </div>
            <div class="form-group col-md-4">
                <FormKit
                    type="text"
                    name="register_number"
                    id="register_number"
                    label="شماره ثبت شرکت"
                    input-class="form-control"
                    label-class="form-label"
                    validation="required"
                    :validation-messages="{required : 'فیلد شماره ثبت شرکت اجباری است'} "
                    message-class="form-text text-danger"
                />
            </div>
            <div class="form-group col-md-4">
                <FormKit
                    type="text"
                    name="register_address"
                    id="register_address"
                    label="ادرس ثبت شده"
                    input-class="form-control"
                    label-class="form-label"
                    validation="required"
                    :validation-messages="{required : 'فیلد ادرس ثبت شده شرکت اجباری است'} "
                    message-class="form-text text-danger"
                />
            </div>
            <div class="form-group col-md-4">
                <FormKit
                    type="text"
                    name="sub_name_company"
                    id="sub_name_company"
                    label="نام فرعی شرکت ( درصورت وجود )"
                    input-class="form-control"
                    label-class="form-label"
                />
            </div>
            <div class="form-group col-md-4">
                <FormKit
                    type="text"
                    name="name_mother_company"
                    id="name_mother_company"
                    label="نام شرکت مادر ( درصورت وجود )"
                    input-class="form-control"
                    label-class="form-label"
                />
            </div>
            <div class="form-group col-md-4">
                <FormKit
                    type="text"
                    name="phone_number"
                    id="phone_number"
                    label="شماره تماس"
                    input-class="form-control"
                    label-class="form-label"
                    validation="required"
                    :validation-messages="{required : 'فیلد شماره تلفن شرکت اجباری است'} "
                    message-class="form-text text-danger"
                />
            </div>
            <div class="form-group col-md-4">
                <FormKit
                    type="text"
                    name="fax_number"
                    id="fax_number"
                    label="شماره فکس"
                    input-class="form-control"
                    label-class="form-label"
                    validation="required"
                    :validation-messages="{required : 'فیلد شماره فکس شرکت اجباری است'} "
                    message-class="form-text text-danger"
                />
            </div>
            <div class="form-group col-md-4">
                <FormKit
                    type="text"
                    name="url_website"
                    id="url_website"
                    label="آدرس وب سایت"
                    input-class="form-control"
                    label-class="form-label"
                    validation="required"
                    :validation-messages="{required : 'فیلد آدرس وب سایت شرکت اجباری است'} "
                    message-class="form-text text-danger"
                />
            </div>
            <div class="form-group col-md-4">
                <FormKit
                    type="text"
                    name="email"
                    id="email"
                    label="آدرس ایمیل"
                    input-class="form-control"
                    label-class="form-label"
                    validation="required|email"
                    :validation-messages="{required : 'فیلد آدرس ایمیل شرکت اجباری است', email: 'ادرس ایمیل معتبر نیست'} "
                    message-class="form-text text-danger"
                />
            </div>
            <div class="form-group col-md-4">
                <FormKit
                    type="text"
                    name="manger_name"
                    id="manger_name"
                    label="نام مدیر عامل"
                    input-class="form-control"
                    label-class="form-label"
                    validation="required"
                    :validation-messages="{required : 'فیلد نام مدیر عامل اجباری است'} "
                    message-class="form-text text-danger"
                />
            </div>
            <div class="form-group col-md-4">
                <FormKit
                    type="text"
                    name="employees_number"
                    id="employees_number"
                    label="تعداد کارکنان"
                    input-class="form-control"
                    label-class="form-label"
                    validation="required"
                    :validation-messages="{required : 'فیلد تعداد کارکنان اجباری است'} "
                    message-class="form-text text-danger"
                />
            </div>
            <div class="form-group col-md-12">
                <FormKit
                    type="text"
                    name="income_period"
                    id="income_period"
                    label="دوره درآمد شما ( چند ماهه)"
                    input-class="form-control"
                    label-class="form-label"
                    validation="required"
                    :validation-messages="{required : 'فیلد دوره درامد اجباری است'} "
                    message-class="form-text text-danger"
                />
            </div>
            <div class="form-group col-md-12">
                <label>لیست خطوط درامد :</label>
                <FormKit type="list" :value="[{}]" name="income_period[]" dynamic #default="{ items, node, value }">
                    <FormKit type="group"
                             v-for="(item, index) in items"
                             :key="item"
                             :index="index"
                    >
                        <div class="group row">
                            <div class="col-2">
                                <FormKit
                                    type="text"
                                    name="units_sold"
                                    label="واحد های فروخته شده"
                                    input-class="form-control"
                                    label-class="form-label"
                                    validation="required"
                                    :validation-messages="{required : 'فیلد واحد های فروخته شده اجباری است'} "
                                    message-class="form-text text-danger"
                                />
                            </div>
                            <div class="col-2">
                                <FormKit
                                    type="text"
                                    name="revenue_lines"
                                    label="خطوط درآمد"
                                    input-class="form-control"
                                    label-class="form-label"
                                    validation="required"
                                    :validation-messages="{required : 'فیلد خطوط درآمد اجباری است'} "
                                    message-class="form-text text-danger"
                                />
                            </div>
                            <div class="col-2">
                                <FormKit
                                    type="text"
                                    name="Income"
                                    label="درآمد"
                                    input-class="form-control"
                                    label-class="form-label"
                                    validation="required"
                                    :validation-messages="{required : 'فیلد درآمد اجباری است'} "
                                    message-class="form-text text-danger"
                                />
                            </div>
                            <div class="col-2">
                                <FormKit
                                    type="text"
                                    name="cost"
                                    label="هزینه"
                                    input-class="form-control"
                                    label-class="form-label"
                                    validation="required"
                                    :validation-messages="{required : 'فیلد هزینه اجباری است'} "
                                    message-class="form-text text-danger"
                                />
                            </div>
                            <div class="col-2">
                                <FormKit
                                    type="text"
                                    name="cost_per_unit"
                                    label="هزینه هر واحد"
                                    input-class="form-control"
                                    label-class="form-label"
                                    validation="required"
                                    :validation-messages="{required : 'فیلد هزینه هر واحد اجباری است'} "
                                    message-class="form-text text-danger"
                                />
                            </div>
                            <div class="col-2">
                                <button type="button" @click="() => node.input(value.filter((_, i) => i !== index))"
                                        class="border border-blue-600 text-blue-600">
                                    - حذف
                                </button>
                                <button type="button" @click="() => node.input(value.concat({}))"
                                        class="border border-blue-600 text-blue-600">
                                    + افزودن
                                </button>
                            </div>
                        </div>
                    </FormKit>


                </FormKit>

            </div>
            <FormKit
                type="submit"
                id="clicked"
                label="ثبت"
                input-class="btn btn-primary mt-3"
            />
        </div>
    </FormKit>
</template>
