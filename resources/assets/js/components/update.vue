<template>
    <center>
        <div class="container" style="margin-top: 13vh">
            <div class="row tab">
                <div class="col-xs-offset-2" >

                    <div class="col-xs-1">
                        <button class="btn btn-default tablinks"  onclick="openResult(event,'first',id)" id="t1" style="background-color:#399cf9"></button>
                    </div>
                    <div class="col-xs-3" style="margin-top: -5px" >
                        <hr style="height:2px; background-color: black;"/>

                    </div>
                    <div class="col-xs-1">
                        <button class="btn btn-default tablinks" onclick="openResult(event,'second',id)" id="t2"></button>
                    </div>
                    <div class="col-xs-3" style="margin-top: -5px">
                        <hr style="height:2px; background-color: black;"/>

                    </div>
                    <div class="col-xs-1">
                        <button class="btn btn-default tablinks"  onclick="openResult(event,'third',id)" id="t3"></button>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <hr/>
    <hr/>
    <div class="row">
        <!--{{trainList | json}}-->
        <!--{{days | json}}-->
        <!--&lt;!&ndash;{{routeList | json}}&ndash;&gt;-->
        <!--{{response|json}}-->

        <div class="col-xs-2 col-xs-offset-1">
            <img :src="train_img" alt="msg" class="img-responsive" style="width:50px; height:50px">
        </div>
        <div class="col-xs-7">
            <marquee><p>lorem impsum lorem impsum lorem impsum lorem impsum</p></marquee>
        </div>
        <div class="col-xs-2" >
            <img :src="train_img" alt="msg" class="img-responsive" style="width:50px; height:50px">
        </div>
    </div>
    <form id="entry" v-for="train in trainList">
        <section id="first" style="display: block" class="tabcontent">
            <center><p style="font-size: 20px">BASIC DETAILS</p></center>
            <div class="container">

                <div class="row" style="margin-top:4.5vh">
                    <div class="col-lg-4 col-lg-offset-1">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-train  fa-fw"></i></span>
                            <input v-model="response.t_name" class="form-control" type="text" name="t_name" id="t_name" placeholder="Train Name" value="{{train.t_name}}" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-minus-square fa-fw"></i></span>
                            <input v-model="response.t_no" class="form-control" type="text" name="t_no" id="t_no" placeholder="Train Number" value="{{train.t_no}}" disabled/>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group">
                            <select v-model="response.type" name="type" class="selectpicker show-tick" id="type" title="---Select Train Type---">
                                <option value="Duronto">Duronto</option>
                                <option value="Rajdhani">Rajdhani</option>
                                <option value="Superfast">Superfast</option>
                                <option value="Local">Local</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="form-group">
                            <textarea v-model="response.description" class="form-control" name="desc" id="desc" placeholder="Description of the Train" rows="5">{{train.description}}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <center>
                <button id="t1btn" class="btn btn-default" style="background-color:#399cf9; color:white;margin-left:-20px;margin-top: 14vh" type="button" >Next</button>
            </center>
        </section>

        <section id="second" style="display:none" class="tabcontent">
            <center><p style="font-size: 20px">STARTING DETAILS</p></center>
            <div class="container">
                <div class="row" style="margin-top:5vh">
                    <div class="col-lg-4 col-lg-offset-1">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-train  fa-fw"></i></span>
                            <input v-model="response.src" class="form-control" type="text" name="src" id="src" placeholder="Source Station" value="{{train.src}}"/>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            <input v-model="response.sdate" class="form-control" type="text" name="sdate" id="sdate" placeholder="Strat Date" data-provide="datetimepicker" value="{{train.sdate}}"/>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            <input v-model="response.stime" class="form-control" type="text" name="stime" id="stime" placeholder="Strat Time" data-provide="datetimepicker" value="{{train.stime}}"/>
                        </div>
                    </div>

                </div>

                <div class="row" style="margin-top:5vh">
                    <center><p style="font-size: 15px">Days/week :</p></center>
                    <div class="col-lg-10 col-lg-offset-3">

                        <label class="checkbox-inline">
                            <input v-model="response.days" type="checkbox" value="Sunday" name="days[]">Sunday
                        </label>
                        <label class="checkbox-inline">
                            <input v-model="response.days" type="checkbox" value="Monday"  name="days[]">Monday
                        </label>
                        <label class="checkbox-inline">
                            <input v-model="response.days" type="checkbox" value="Tuesday"  name="days[]">Tuesday
                        </label>
                        <label class="checkbox-inline">
                            <input v-model="response.days" type="checkbox" value="Wednesday"  name="days[]">Wednesday
                        </label>
                        <label class="checkbox-inline">
                            <input v-model="response.days" type="checkbox" value="Thursday"  name="days[]">Thursday
                        </label>
                        <label class="checkbox-inline">
                            <input v-model="response.days" type="checkbox" value="Friday"  name="days[]">Friday
                        </label>
                        <label class="checkbox-inline">
                            <input v-model="response.days" type="checkbox" value="Saturday"  name="days[]">Saturday
                        </label>
                    </div>
                    <br>
                    <center><label>You have already these days checked {{train.days}}</label></center>

                </div>
            </div>
            <center>
                <button id="t2btn" class="btn btn-default" style="background-color:#399cf9; color:white;margin-left:-20px;margin-top:7vh" type="button" >Next</button>
            </center>
            <div style="margin-top: 23vh">

            </div>
        </section>

        <section id="third" style="display:none" class="tabcontent">
            <center><p style="font-size: 20px">ROUTES DETAILS</p></center>
            <div class="container" >

                <!--<div class="row" style="margin-top:5vh"  v-for="routeedit in routeList">-->
                    <!---->
                    <!--<div class="col-lg-4 col-lg-offset-1">-->
                        <!--<div class="input-group">-->
                            <!--<span class="input-group-addon"><i class="fa fa-train  fa-fw"></i></span>-->
                            <!--<input v-model="response.routes.stn" class="form-control" type="text" name="stn" id="stn{{$index}}" placeholder="Station" value="{{routeedit.stn}}"/>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="col-lg-2">-->
                        <!--<div class="input-group">-->
                            <!--<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>-->
                            <!--<input v-model="response.routes.atime" class="form-control atime" type="text" name="atime" id="atime{{$index}}"  placeholder="Arrival Time" data-provide="datepicker" value="{{routeedit.atime}}"/>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="col-lg-2">-->
                        <!--<div class="input-group">-->
                            <!--<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>-->
                            <!--<input v-model="response.routes.dtime" class="form-control dtime" type="text" name="dtime" id="dtime{{$index}}"  placeholder="Departure Time" data-provide="datepicker" value="{{routeedit.dtime}}"/>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div v-else class="col-lg-2">-->
                        <!--<button class="btn btn-default" style="background-color:#399cf9; color:white" type="button" @click="removeRow($index)">Del</button>-->
                    <!--</div>-->

                <!--</div>-->

                <div  v-for="route in response.routes">
                <div class="row" style="margin-top:5vh" id="inp_wrap">
                    <div class="col-lg-4 col-lg-offset-1">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-train  fa-fw"></i></span>
                            <input v-model="route.stn" class="form-control" type="text" name="stn" id="stn{{$index}}" placeholder="Station" />
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            <input v-model="route.atime" class="form-control atime" type="text" name="atime" id="atime{{$index}}"  placeholder="Arrival Time" data-provide="datepicker" />
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            <input v-model="route.dtime" class="form-control dtime" type="text" name="dtime" id="dtime{{$index}}"  placeholder="Departure Time" data-provide="datepicker"/>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <button id="add" class="btn btn-default" style="background-color:#399cf9; color:white" type="button" @click="addRow()">Add</button>
                    </div>
                    <div class="col-lg-1">
                        <button id="del" class="btn btn-default" style="background-color:#399cf9; color:white" type="button" @click="removeRow($index)">Del</button>
                    </div>

                </div>
                </div>

            </div>

            <center>
                <button id="t3btn" class="btn btn-default" style="background-color:#399cf9; color:white;margin-left:-20px;margin-top:10.5vh" type="button" @click="updateData(train.t_no)">Update</button>
            </center>
            <div style="margin-top: 30vh">

            </div>
        </section>
    </form>
    <div style="margin-top: 12vh">

    </div>

</template>

<script>
    export default {
        components: {
        },
        data: function() {
            return {
                train_img:'img/msg.png',
                trainList: [],
                routeList: [],
                days:[],
                response: {
                    t_name: '',
                    t_no: '',
                    description:'',
                    type:'',
                    src:'',
                    sdate:'',
                    stime:'',
                    days: [],
                    routes: [
                        {
                            stn: '',
                            atime: '',
                            dtime: ''
                        }
                    ],
                    _token: $('meta[name=csrf_token]').attr('content')
                }
            }
        },
        ready: function() {
            $('#sdate').datetimepicker({
                useCurrent: false, //Important! See issue #1075
                format: 'YYYY-MM-DD'
            });

            $('#stime').datetimepicker({
                useCurrent: false, //Important! See issue #1075
                format: 'hh:mm:ss A'
            });

            this.fetchData();



        },
        methods: {
            addRow: function() {
                let vm = this;
                vm.response.routes.push(
                    {
                        stn: '',
                        atime: '',
                        dtime: ''
                    }
                );
            },
            removeRow: function(index) {
                let vm = this;
                vm.response.routes.splice(index,1);
            },

            updateData: function (id) {
                $.get('data/update/'+id,this.response).then(function (response) {
                    console.log(response);
                });
            },

            fetchData: function () {
                let vm = this;
                let uid = this.$route.params.no;
                console.log(uid);
                $.get('data/fetch/'+uid).then(function (response) {
                    // console.log(response);
                    if(response.data.length > 0) {

                        vm.trainList = response.data;
                        // setTimeout(function(){
                        //     vm.response.days = vm.trainList.days.split(",");
                        // },10);


                    }
                    if(response.route.length > 0){
                        vm.routeList = response.route;
                        vm.response.routes=vm.routeList;
                        vm.addRow();

                    }
                });
            }

        },
    }
</script>