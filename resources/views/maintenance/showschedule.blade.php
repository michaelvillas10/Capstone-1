
@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')  
@section('content')
<section id="middle">
    <header id="page-header">
        <h1>NEW SCHEDULE</h1>
    </header>
<br><br>
<div class="container">
    <div class="col-md-4">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
    </div>
    <div class='col-md-4'>
        <div class="form-group">
            <div>
                <label>Start time and date</label>
            </div>
            <div class='input-group date' >
                <input id='datetimepicker6' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-md-4'>
        <div class="form-group">
            <div>
                <label>End time and Date</label>
            </div>
            <div class='input-group date'>
                <input id='datetimepicker7' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <center>
    <div class="footer"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-green"/>Save changes
      </div></center>
</div>
</section>  
@stop