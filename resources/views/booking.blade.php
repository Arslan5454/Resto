@extends('layout')
@section('content')
<h1>Booking Table</h1>
<br>
@if(session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('status')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="booking_form">
    <form action="booking" method="post">

        @csrf
        <label>Select Date:</label>&nbsp;&nbsp;
        <i class="fa fa-calendar">&nbsp;&nbsp;&nbsp;<input type="text" name="date" id="datepicker" size="30" /></i>
        <br>
        <br>
        <label>Timing:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-clock-o"></i>
        &nbsp;&nbsp;&nbsp;
        <select class="clock text-field" id="ot_time" name="time">
            <option value="12:00 AM">12:00 AM</option>
            <option value="12:30 AM">12:30 AM</option>
            <option value="1:00 AM">1:00 AM</option>
            <option value="1:30 AM">1:30 AM</option>
            <option value="2:00 AM">2:00 AM</option>
            <option value="2:30 AM">2:30 AM</option>
            <option value="3:00 AM">3:00 AM</option>
            <option value="3:30 AM">3:30 AM</option>
            <option value="4:00 AM">4:00 AM</option>
            <option value="4:30 AM">4:30 AM</option>
            <option value="5:00 AM">5:00 AM</option>
            <option value="5:30 AM">5:30 AM</option>
            <option value="6:00 AM">6:00 AM</option>
            <option value="6:30 AM">6:30 AM</option>
            <option value="7:00 AM">7:00 AM</option>
            <option value="7:30 AM">7:30 AM</option>
            <option value="8:00 AM">8:00 AM</option>
            <option value="8:30 AM">8:30 AM</option>
            <option value="9:00 AM">9:00 AM</option>
            <option value="9:30 AM">9:30 AM</option>
            <option value="10:00 AM">10:00 AM</option>
            <option value="10:30 AM">10:30 AM</option>
            <option value="11:00 AM">11:00 AM</option>
            <option value="11:30 AM">11:30 AM</option>
            <option value="12:00 PM">12:00 PM</option>
            <option value="12:30 PM">12:30 PM</option>
            <option value="1:00 PM">1:00 PM</option>
            <option value="1:30 PM">1:30 PM</option>
            <option value="2:00 PM">2:00 PM</option>
            <option value="2:30 PM">2:30 PM</option>
            <option value="3:00 PM">3:00 PM</option>
            <option value="3:30 PM">3:30 PM</option>
            <option value="4:00 PM">4:00 PM</option>
            <option value="4:30 PM">4:30 PM</option>
            <option value="5:00 PM">5:00 PM</option>
            <option value="5:30 PM">5:30 PM</option>
            <option selected="selected" value="6:00 PM">6:00 PM</option>
            <option value="6:30 PM">6:30 PM</option>
            <option value="7:00 PM">7:00 PM</option>
            <option value="7:30 PM">7:30 PM</option>
            <option value="8:00 PM">8:00 PM</option>
            <option value="8:30 PM">8:30 PM</option>
            <option value="9:00 PM">9:00 PM</option>
            <option value="9:30 PM">9:30 PM</option>
            <option value="10:00 PM">10:00 PM</option>
            <option value="10:30 PM">10:30 PM</option>
            <option value="11:00 PM">11:00 PM</option>
            <option value="11:30 PM">11:30 PM</option>
        </select>
        </input>
        <br>
        <br>
        <label>Person:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-users"></i>
        &nbsp;&nbsp;&nbsp;
        <select class="text-field" id="ot_people" name="person">
            <option value="1">1 person</option>
            <option value="2">2 people</option>
            <option value="3">3 people</option>
            <option value="4">4 people</option>
            <option value="5">5 people</option>
            <option value="6">6 people</option>
            <option value="7">7 people</option>
            <option value="8">8 people</option>
            <option value="9">9 people</option>
            <option value="10">10 people</option>
            <option value="11">11 people</option>
            <option value="12">12 people</option>
            <option value="13">13 people</option>
            <option value="14">14 people</option>
            <option value="15">15 people</option>
            <option value="16">16 people</option>
            <option value="17">17 people</option>
            <option value="18">18 people</option>
            <option value="19">19 people</option>
            <option value="20">20 people</option>
        </select>
        <br>
        <br>
        <label>Seat:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-table"></i>
        &nbsp;&nbsp;&nbsp;
        <!-- Button trigger modal -->
        <button type="button" name="seat" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Select Table
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Select your seating option</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <label>Standard</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <br>
                        <br>
                        <label>Hight</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <br>
                        <br>
                        <label>Top</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <button type="submit"  class="btn btn-success">Submit</button>
    </form>
    <br>

    <div class='col-md-6'>
        <p>If your requested reservation time is unavailable, please call 905-633-7494 and we will do our best to
            accommodate your needs.</p>
    </div>

</div>
@stop