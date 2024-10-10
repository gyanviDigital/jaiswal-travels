 <!-- Booking Start -->

 <form action="{{url('enquery-done')}}" method="post">
                                @csrf
                          
                <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                           
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" name="Destination" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="Gorakhpur">Gorakhpur</option>
                                        <option value="Locknow">Locknow</option>
                                        <option value="Kusinagar">Kusinagar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input required type="text" name="depart_date" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input required type="text" name="return_date" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select name="Duration" class="custom-select px-4" style="height: 47px;">
                                        <option selected>Duration</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Pokhra">Pokhra</option>
                                        <option value="Muktinath">Muktinath</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input required type="number" name="phone" class="form-control p-4 datetimepicker-input" placeholder="Phone no." data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                   
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>