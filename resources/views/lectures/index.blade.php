@extends('layouts/app')

@section('header')
    <h2 class="text-center">{{__('Lectures Data')}}</h2>
    <div class="container-fluid" id="frontDiv">
        <div style="height: 100px;">
            <form method="GET" class="float-left" action="{{url('lectures/create')}}"> 
                <button  id="add" type='submit' class='btn btn-success btn-lg'>{{__('Add new lecture')}}</button>
            </form>
            <!-- <button id="filter" type='button' class='btn btn-info btn-lg float-left'>{{__('Filter')}}</button> -->
        </div>
    </div>
@endsection


@section('content')
    <div class="container-fluid ">         
        {{ $lectures->links() }}   

        <div class="form-group float-right">
            <select class="btn btn-secondary" id="limitSelect" >
                <option value="10" @if ($per_page==10) selected @endif>10</option>
                <option value="20" @if ($per_page==20) selected @endif>20</option>
                <option value="30" @if ($per_page==30) selected @endif>30</option>
                <option value="40" @if ($per_page==40) selected @endif>40</option>
                <option value="50" @if ($per_page==50) selected @endif>50</option>
            </select>
        </div>
    </div>

    <div class="container w-75 p-3 mx-auto">
        <table id="datatable" class="table table-striped table-hover text-center" cellspacing="0" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th>{{__('No')}}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Description') }}</th>
                    <th>{{ __('Edit/Delete') }}</th>
                </tr>
            </thead>           

            <tbody>
                @foreach ($lectures as $lecture)
                <tr id="{{$lecture->id}}" class="dataRow">                               
                    <td><a href="{{ url('lectures', $lecture->id) }}">{{ $count++}}</a></td>
                    <td>{{ $lecture->name }}</td>
                    <td>{{ $lecture->description }}</td>
                    <td class="edit_delete_buttons">
                        <form method="get" action="{{ url('lectures', [$lecture->id, 'edit']) }}">
                            <button id="edit" type='submit' class='btn btn-warning btn-lg tableButton'><span>@icon('icon-edit')</span></button>
                        </form>
                        <form class="deleteRequest" method="post" action="{{ url('lectures', [$lecture->id]) }}">   
                            <button name="delete" type="submit" value="{{$lecture->id}}" id="delete" class='delete btn btn-danger btn-lg tableButton'  ><span>@icon('icon-trash')</span></button>
                        </form>
                    </td>
                </tr>
                @endforeach                    
            </tbody>
        </table>
    </div>    

    <div class="container-fluid float-right">     
        {{ $lectures->links() }}      
    </div>
    @include('includes/modalDeleteWindow')
@endsection


