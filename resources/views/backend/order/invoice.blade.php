<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')
    <!-- Your html goes here -->
    <div class='panel panel-default'>
        <div class='panel-heading'>Edit Form</div>
        <div class='panel-body'>
            <div class='form-group'>
                <label>Name</label>
                <p>{{$order->name}}</p>
            </div>
            </form>
        </div>
    </div>
@endsection