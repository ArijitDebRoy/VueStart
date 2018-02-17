<template>
    <div class="fixed full-height full-width text-center margin-top-3x">
        <h2>Creating a vue form</h2>

        <div class="row">
            <form class="col s12">
                <div class="row">
                    <!--{{response.name}} {{response.email}}-->
                    <!--{{response.details | json}}-->
                    {{list | json}}
                    <div class="input-field col s6">
                        <input placeholder="Placeholder" v-model="response.metainfo.name" id="name" type="text" class="validate">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="email" type="text" class="validate" v-model="response.metainfo.email">
                        <label for="email">Email</label>
                    </div>
                </div>

                <ul class="collection">
                    <li class="collection-item" v-for="item in response.metainfo.details">
                        <div class="input-field col s6">
                            <input placeholder="Train Name" v-model="item.title" id="title{{$index}}" type="text" class="validate">
                            <label for="title{{$index}}">Train Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Train Price" v-model="item.price" id="price{{$index}}" type="text" class="validate">
                            <label for="price{{$index}}">Train Price</label>
                        </div>
                        <a v-if="$index == 0" class="btn-floating btn-large waves-effect waves-light green">
                            <i class="material-icons" @click="addRow()">add</i>
                        </a>
                        <a v-else class="btn-floating btn-large waves-effect waves-light red">
                            <i class="material-icons" @click="removeRow($index)">delete</i>
                        </a>
                    </li>
                </ul>

                <a class="waves-effect waves-light btn" @click="submitData()">button</a>
            </form>


            <ul class="collection">
                <li v-for="row in list" class="collection-item">
                    {{row.details}} > {{row.image}}
                </li>
            </ul>
        </div>
        <a v-link="{name:'dashboard'}">qqqqqqqqqqqqqqqqqqqqqqqqqqqqq</a>
        <a v-link="{name:'sat-course'}">SAT</a>
        <a v-link="{name:'act-course'}">ACT</a>
    </div>
</template>
<script>
    export default {
        components: {

        },
        data: function() {
            return {
                list: [],
                response: {
                    metainfo: {
                        name: '',
                        email: '',
                        details: [
                            {
                                title: '',
                                price: ''
                            }
                        ],
                    },
                    _token: $('meta[name=csrf_token]').attr('content')
                }
            };
        },
        ready: function() {
            let vm = this;
            vm.getListData();
        },
        methods: {
            addRow: function() {
                let vm = this;
                vm.response.metainfo.details.push(
                    {
                        title: '',
                        price: ''
                    }
                );
            },
            removeRow: function(index) {
                let vm = this;
                vm.response.metainfo.details.splice(index,1);
            },
            submitData: function(Response) {
                let vm = this;
                $.post('data/save',vm.response).then(function (response) {
                    if(response.status) {
                        M.toast({html: '<b>Saved your data</b>', classes: 'green'});
                        vm.getListData();
                    }
                    else
                        M.toast({html: '<b>Something went wrong</b>', classes: 'red'});
                });
            },
            getListData: function() {
                let vm = this;
                $.get('get/list').then(function (response) {
                    if(response.data.length > 0)
                        vm.list =  response.data;
                    else
                        M.toast({html: '<b>Something went wrong</b>', classes: 'red'});
                });
            }
        },
    }
</script>