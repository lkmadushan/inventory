<template>
    <form novalidate class="form-horizontal" role="form" @submit.prevent="submitForm" method="post">
        <tabs>
            <tab header="General">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group form-group-sm">
                            <label for="employee_status" class="col-sm-4 control-label">Employee Status</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="employee_status"
                                        v-model="user.employee_status">
                                    <option selected value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="user_type" class="col-sm-4 control-label">User Type</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="user_type"
                                        v-model="user.user_type">
                                    <option selected value="1">Regular User</option>
                                    <option value="2">Administrator</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="employee_id" class="col-sm-4 control-label">Employee Id</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="employee_id"
                                       v-model="user.employee_id"
                                       placeholder="Employee Id">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['employee_id']">{{ errors['employee_id'] }}</span>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="first_name" class="col-sm-4 control-label">First Name</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="first_name"
                                       v-model="user.first_name"
                                       required
                                       placeholder="First Name">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['first_name']">{{ errors['first_name'] }}</span>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="last_name" class="col-sm-4 control-label">Last Name</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="last_name"
                                       v-model="user.last_name"
                                       placeholder="Last Name">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['last_name']">{{ errors['last_name'] }}</span>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="title" class="col-sm-4 control-label">Title</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="title"
                                       v-model="user.title"
                                       required
                                       placeholder="Title">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['title']">{{ errors['title'] }}</span>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="department" class="col-sm-4 control-label">Department</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="department"
                                       v-model="user.department"
                                       required
                                       placeholder="Department">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['department']">{{ errors['department'] }}</span>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="home_phone" class="col-sm-4 control-label">Home Phone</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="home_phone"
                                       v-model="user.home_phone"
                                       value=""
                                       placeholder="Home Phone">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['home_phone']">{{ errors['home_phone'] }}</span>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="mobile_phone" class="col-sm-4 control-label">Mobile Phone</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="mobile_phone"
                                       v-model="user.mobile_phone"
                                       placeholder="Mobile Phone">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['mobile_phone']">{{ errors['mobile_phone'] }}</span>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group form-group-sm">
                            <label for="email" class="col-sm-4 control-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="email"
                                       v-model="user.email"
                                       v-validate="email"
                                       placeholder="Email Address">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['email']">{{ errors['email'] }}</span>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="primary_address" class="col-sm-4 control-label">Primary Address</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="primary_address"
                                       v-model="user.primary_address"
                                       placeholder="Primary Address">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['primary_address']">{{ errors['primary_address'] }}</span>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="city" class="col-sm-4 control-label">City</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="city"
                                       v-model="user.city"
                                       placeholder="City">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['city']">{{ errors['city'] }}</span>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="state" class="col-sm-4 control-label">State</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="state"
                                       v-model="user.state"
                                       placeholder="State">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['state']">{{ errors['state'] }}</span>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="country" class="col-sm-4 control-label">Country</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="country"
                                       v-model="user.country"
                                       placeholder="Country">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['country']">{{ errors['country'] }}</span>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="postal_code" class="col-sm-4 control-label">Postal Code</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="postal_code"
                                       v-model="user.postal_code"
                                       placeholder="Postal Code">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['postal_code']">{{ errors['postal_code'] }}</span>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="name" class="col-sm-4 control-label">Username</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="name"
                                       v-model="user.name"
                                       placeholder="Username">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['name']">{{ errors['name'] }}</span>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="password" class="col-sm-4 control-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password"
                                       class="form-control"
                                       id="password"
                                       v-model="user.password"
                                       placeholder="Password">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['password']">{{ errors['password'] }}</span>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="password_confirm" class="col-sm-4 control-label">Confirm Password</label>
                            <div class="col-sm-8">
                                <input type="password"
                                       class="form-control"
                                       id="password_confirm"
                                       v-model="user.password_confirm"
                                       placeholder="Confirm Password">
                            </div>
                            <div class="col-sm-4">
                                <span class="text-danger" v-show="errors['password_confirm']">{{ errors['password_confirm'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </tab>

        </tabs>
        <button type="submit"
                class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Save User</button>
    </form>
</template>

<script>
    export default {
        props: {
            callback: {
                type: Function,
                required: true
            },

            user: {
                type: Object,
                default: Object
            },

            errors: {
                type: Object,
                default: Object
            }

        },

        components: {
            'tab': VueStrap.tab,
            'tabs': VueStrap.tabset
        },

        methods: {
            submitForm() {
                return this.callback(this.user);
            }
        }
    }
</script>
