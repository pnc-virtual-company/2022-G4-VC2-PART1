<template>
<div class="pop_up p-5 top-0 bg-[#00000080] w-full h-full fixed z-50">
    <div class="modal bg-white h-auto shadow-md rounded px-8 pt-6 pb-8 mt-6 mb-10 m-auto w-[50%] z-10">
        <form class="form">
            <p class="text-center text-primary text-2xl uppercase">Request Leave Form</p>
            <div class="mb-2 mt-6">
                <label class="block text-gray-700 text-[16px]    mb-1">
                    Leave Types
                </label>
                <div class="inline-block relative w-full">
                    <select class="block appearance-none w-full bg-white border border-gray-400 px-4 py-2 pr-8 rounded shadow leading-tight  focus:shadow-outline focus:outline-[#0081CA]" :class="{'border-red-500 bg-red-100':isSelectedType }" v-model="leaveType" @change="isSelectedType = false">
                        <option  value="Family's event">Family's Event</option>
                        <option value="Sick">Sick</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg v-if="isSelectedType" xmlns="http://www.w3.org/2000/svg" class="fill-curren h-5 w-5 absolute top-[10px] right-3 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                        <svg v-else class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>

            </div>
            <div class="mb-2 flex">
                <div class="w-[50%] m-1">
                    <label class="block text-gray-700 text-[16px] mb-1">
                        Start Date
                    </label>
                    <input class="shadow appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight  focus:shadow-outline focus:shadow-outline focus:outline-[#0081CA]" :class="{'border-red-500 bg-red-100':isStartDate }" v-model="startDate" @change="isStartDate = false" type="date" :min="inValidDate">

                </div>
                <div class="w-[50%] m-1">
                    <label class="block text-gray-700 text-[16px] mb-1">
                        Time of the day
                    </label>
                    <div class="inline-block relative w-full">
                        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight  focus:shadow-outline focus:outline-[#0081CA]" :class="{'border-red-500 bg-red-100':isStartTime }" v-model="startTime" @change="isStartTime = false">
                            <option selected value="Morning">Morning</option>
                            <option value="Afternoon">Afternoon</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg v-if="isStartTime" xmlns="http://www.w3.org/2000/svg" class="fill-curren h-5 w-5 absolute top-[10px] right-3 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            <svg v-else class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mb-2 flex">
                <div class="w-[50%] m-1">
                    <label class="block text-gray-700 text-[16px] mb-1">
                        End Date
                    </label>
                    <input class="shadow appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight  focus:shadow-outline focus:shadow-outline focus:outline-[#0081CA]" :class="{'border-red-500 bg-red-100':isEndDate }" v-model="endDate"  @change="isEndDate = false" type="date" :min="startDate">

                </div>

                <div class="w-[50%] m-1">
                    <label class="block text-gray-700 text-[16px] mb-1">
                        Time of the day
                    </label>
                    <div class="inline-block relative w-full">
                        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight  focus:shadow-outline focus:outline-[#0081CA]" :class="{'border-red-500 bg-red-100':isEndTime }" v-model="endTime"  @change="isEndTime = false">
                            <option selected value="Morning" >Morning</option>
                            <option value="Afternoon" >Afternoon</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg v-if="isEndTime" xmlns="http://www.w3.org/2000/svg" class="fill-curren h-5 w-5 absolute top-[10px] right-3 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            <svg v-else class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="inValid" class="alert text-red-600 w-full bg-red-200 p-2 rounded">Invalid Date</div>
            <div class="mb-2 px-1"  v-if="calculateDay ">
                <h1 v-if="isToMuchday && notAllowed" class=" text-red-600">You are not allowed to ask permission more than 2 days!</h1>
                <h1 v-if="isNoday && notAllowed" class=" text-red-600">No need to ask permission at the weekend!</h1>
                <h1 class="text-lg">Duration: <span :class="isAllowed?'text-green-500':'text-red-500'"> {{calculateDay}}</span></h1>
            </div>
            <div class="mb-2 w-full m-1 relative">
                <label class="block text-gray-700 text-[16px] mb-1">
                    Drop an reasonable
                </label>
                <textarea placeholder="Give your reason here" :class="{'border-red-500 bg-red-100':isReasonInputted }" class="block resize-none h-16 required:border-red-500 border shadow appearance-none border-gray-400 rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight  focus:shadow-outline focus:shadow-outline focus:outline-[#0081CA]" @change="isReasonInputted = false"  v-model="reason" cols="30" rows="10"></textarea>
                <svg v-if="isReasonInputted" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute top-[40px] right-3 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="flex  w-full mt-6 justify-end">
                <button class="bg-red-500 hover:bg-red-400  text-white py-2 px-4 rounded  focus:shadow-outline" type="button" @click="$emit('closePopup')">
                    Cancel
                </button>
                <button class="bg-primary hover:bg-blue-500 mx-2 text-white py-2 px-4 rounded  focus:shadow-outline" type="button" @click="requestLeave">
                    Send Request
                </button>
            </div>
        </form>
    </div>
</div>

</template>

<script>
    export default({
        props: {
            'user_id': Number,
            'user_email': String
        },
        emits: ['add-leave'],
        data(){
            return {
                leaveType: "",
                startDate: null,
                endDate: null,
                startTime: null,
                endTime: null,
                reason: "",
                isSelectedType: null,
                isStartDate: null,
                isStartTime: null,
                isEndDate: null,
                isEndTime: null,
                isReasonInputted: null,
                duration: 0,
                isDuration: null,
                inValid: false,   
                notAllowed: false,  
            }
        },
        methods: {
            requestLeave(){
                const linkToNotification = new URL(location.href).origin+'/leaves'
                if (this.checkFormRequest()){
                    let newRequest = {user_id: this.user_id, leave_type: this.leaveType, start_date: this.startDate, end_date: this.endDate, start_time: this.startTime, end_time: this.endTime, reason: this.reason, duration: this.duration, email: this.user_email, urlApp: linkToNotification}
                    return this.$emit('add-leave',newRequest)
                }else {
                    this.notAllowed = true;
                }
            },
            checkFormRequest(){
                this.isSelectedType = false;
                if (this.leaveType == ""){
                    this.isSelectedType =  true;
                }
                this.isStartDate = false
                if (this.startDate == null){
                    this.isStartDate = true
                }
                
                this.isStartTime = false
                if (this.startTime == null){
                    this.isStartTime = true
                }
                
                this.isEndDate = false
                if (this.endDate == null){
                    this.isEndDate = true
                }
                this.isEndTime = false
                if (this.endTime == null){
                    this.isEndTime = true
                }
                this.isReasonInputted = false
                if (this.reason.trim() == ""){
                    this.isReasonInputted = true
                }
                this.isDuration = false
                if (this.duration == 0 || this.duration > 2) {
                    this.isDuration = true
                }

                if (this.isSelectedType || this.isStartDate || this.isEndDate || this.isStartTime || this.isEndTime || this.isReasonInputted || this.inValid || this.isDuration){
                    return false;
                }else{
                    return true;
                }
            },
            getDateCount(start, end) {
                var count = 0;
                var cDate = +start;
                while (cDate <= +end) {
                    const dayOfWeek = new Date(cDate).getDay();
                    const isWeekend = (dayOfWeek === 6) || (dayOfWeek === 0);
                    if (!isWeekend) {
                        count += 1;
                    }
                    cDate = cDate + 24 * 60 * 60 * 1000                    
                }
                return count;
            },

        },
        computed:{
            calculateDay() {
                
                if ((this.startDate != null && this.endDate != null) &&(this.startTime != null && this.endTime != null)){

                    var start = new Date(this.startDate);
                    var end = new Date(this.endDate);
                    if (end - start > -1){
                        this.inValid = false
                        var diffDays = this.getDateCount(start, end);
                        if (diffDays > 0) {
                            if (this.startDate == this.endDate){
     
                                if (this.startTime == "Afternoon"){
                                    this.endTime = "Afternoon";
                                }
                                if ((this.startTime == "Morning" && this.endTime == "Morning") || (this.startTime == "Afternoon" && this.endTime == "Afternoon")){
                                    this.duration = 0.5
                                } else if (this.startTime == "Morning" && this.endTime == "Afternoon") {
                                    this.duration = 1
                                } else if (this.startTime == "Afternoon") {
                                    this.endTime = "Morning";
                                    this.duration = 0.5
                                }
                            } else {
                                if (diffDays == 1) {
                                    if (this.getDateCount(start,start)== 1) {
                                        if (this.startTime == "Morning") {
                                            this.duration = 1;
                                        }else {
                                            this.duration = 0.5;
                                        }
                                    }else {
                                        if (this.endTime == "Morning") {
                                            this.duration = 0.5;
                                        }else {
                                            this.duration = 1;
                                        }
                                    }
                                }else {
                                    if (this.getDateCount(start,start) == 0) {
                                        if (this.endTime == "Morning") {
                                            this.duration = diffDays - 0.5
                                        }else {
                                            this.duration = diffDays
                                        }
                                    }else if (this.getDateCount(end,end)== 0) {
                                        if (this.startTime == "Morning") {
                                            this.duration = diffDays
                                        }else {
                                            this.duration = diffDays - 0.5
                                        }  
                                    }else {
                                        if (this.startTime == "Morning" && this.endTime == "Afternoon"){
                                            this.duration = diffDays
                                        } else if (this.startTime == this.endTime){
                                            this.duration = diffDays - 0.5
                                        } else if (this.startTime == "Afternoon" && this.endTime == "Morning") {
                                            this.duration = diffDays - 1
                                        }
                                    }
                                }
                            }
                        }else {
                            this.duration = diffDays;
                        }
                        var day = this.duration
                        if (this.duration > 1){
                            day += " days"
                        }else{
                            day += " day"
                        }
                        return day
                    }else{
                        this.inValid = true
                    }
                }
                return false
            },

            inValidDate(){
                var date = new Date();
                var tday = date.getDate();
                var month = date.getMonth() + 1;
                var year = date.getUTCFullYear();
                if (tday < 10){
                    tday = "0" + tday
                }
                if (month < 10){
                    month = "0" + month
                }

                return year + "-" + month + "-" + tday
            },
            isAllowed() {
                if (this.duration > 0 && this.duration <= 2) {
                    return true
                }else {
                    return false
                }
            },
            isNoday() {
                if (this.duration == 0) {
                    return true
                }else {
                    return false
                }
            },
            isToMuchday() {
                if (this.duration > 2) {
                    return true
                }else {
                    return false
                }
            }

        }
    })
</script>
