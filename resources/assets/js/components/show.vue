<template>
<div class="container" style="margin-top: 10vh">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr style="background-color: #399cf9">
                <th colspan="11" class="text-center">Train Details</th>

            </tr>
            <tr style="background-color: #399cf9">
                <th class="text-center">Name</th>
                <th class="text-center">No.</th>
                <th class="text-center">Type</th>
                <th class="text-center">Desvription</th>
                <th class="text-center">Source Stn.</th>
                <th class="text-center">Departure Date</th>
                <th class="text-center">Departure Date</th>
                <th class="text-center">Days/Week</th>
                <th class="text-center">Route</th>
                <th class="text-center">Update</th>
                <th class="text-center">Delete</th>

            </tr>
            </thead>


            <tbody v-for="row in list">

            <!--{{list | json}}-->
            <tr >
                <td>{{ row.t_name }}</td>
                <td>{{ row.t_no }}</td>
                <td>{{ row.type }}</td>
                <td>{{ row.description }}</td>
                <td>{{ row.src }}</td>
                <td>{{ row.sdate }}</td>
                <td>{{ row.stime }}</td>
                <td>{{row.days}}</td>
                <td><button @click='routeShow(row.t_no,$event)' class="btn btn-default" style="background-color:#399cf9; color:white;" type="button"><i class="fa fa-road fa-fw"></i></button></td>
                <td><button @click='swalrt()' v-link="{name:'update', params:{no:row.t_no}}" class="btn btn-default" style="background-color:#399cf9; color:white;" type="button">Update</button></td>
                <td><button @click='deleteTrain(row.t_no)' class="btn btn-default" style="background-color:#399cf9; color:white;" type="button"><i class="fa fa-trash fa-fw"></i></button></td>
            </tr>
            <tr class="link" style="display: none">
            <!--<div class="table-responsive">-->
                <td colspan="11">
                <table class="table table-striped">
                    <thead>
                    <tr style="background-color: #0044b2">
                        <th colspan="4" ><a @click="hideRoute()" style="color: white;cursor: pointer"><i class="fa fa-minus-square fa-fw"></i>Route Details</a></th>

                    </tr>
                    <tr >
                        <th style="color: black" class="text-center">Station</th>
                        <th style="color: black" class="text-center">Arrival Time</th>
                        <th style="color: black" class="text-center">Departure Time</th>
                        <th style="color: black" class="text-center">Delete</th>
                    </tr>
                    </thead>


                    <tbody>


                    <tr v-for="route in routes">
                        <td class="text-center">{{ route.stn }}</td>
                        <td class="text-center">{{ route.atime }}</td>
                        <td class="text-center">{{ route.dtime }}</td>
                        <td class="text-center"><button @click='deleteRoute(route.id)' class="btn btn-default" style="background-color:#399cf9; color:white;" type="button"><i class="fa fa-trash fa-fw"></i></button></td>
                    </tr>

                    </tbody>
                </table>
            <!--</div>-->
                </td>

            </tr>

            </tbody>
        </table>
    </div>
    <div style="margin-top: 38.5vh">

    </div>
</div>
</template>
<script>
    export default {
        components: {
        },
        data: function() {
            return {
                list: [],
                routes: []
            };
        },
        ready: function() {
            this.getListData();



        },
        methods: {
            getListData: function() {
                let vm = this;
                $.get('get/list').then(function (response) {
                    if(response.data.length > 0)
                        vm.list =  response.data;
                });
            },
            deleteTrain: function(id) {
                let vm = this;
                $.post('del/'+id,{_token: $('meta[name=csrf_token]').attr('content')}).then(function () {
                   vm.getListData();
                });
            },
            routeShow: function(id,event) {
                let vm = this;
                //console.log(event.currentTarget);
                $('.link').hide();
                $(event.currentTarget).parent().parent().next('tr').slideDown("slow");

                $.get('route/'+id).then(function (response) {
                    if(response.length > 0)
                        vm.routes =  response;
                });
            },
            hideRoute: function () {
                $('.link').hide();
            },
            deleteRoute: function(id) {
                let vm = this;
                $.post('del/route/'+id,{_token: $('meta[name=csrf_token]').attr('content')}).then(function () {
                     vm.getListData();
                });
            },
            swalrt: function () {
                console.log('hello');
                swal({
                        title: 'Are you sure?',
                        text: 'You will not be able to recover this imaginary file!',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        closeOnConfirm: false
                    },
                    function() {
                        swal(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                    });
            }

        },
    }
</script>