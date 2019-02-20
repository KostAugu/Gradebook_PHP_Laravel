@extends('layouts/app')

@section('content')
<h3 class="text-center">{{__('Student Edit Form')}}</h3>
<div class="entryform container w-80 p-3 mx-auto">
    <form method="post" action="{{ url('students', [$student->id]) }}">
    @csrf
    @method('PUT')
        <table class="table text-center">
            <tr>
                <th width="34.5%"><label>{{__('Name')}}</label></th>
                <td width="34.5%"><input type="text" name="name" value="{{ old('name', $student->name) }}"></td>
                <td width="31%"><span class="error">{{$errors->first('name')}}</span></td>                    
            </tr>
            <tr>
                <th width="34.5%"><label>{{__('Surname')}}</label></th>
                <td width="34.5%"><input type="text" name="surname" value="{{ old('surname', $student->surname) }}"></td>
                <td width="31%"><span class="error">{{$errors->first('surname')}}</span></td>
            </tr>
            <tr>
                <th width="34.5%"><label>{{__('Email')}}</label></th>
                <td width="34.5%"><input type="text" name="email" value="{{ old('email', $student->email) }}"></td>
                <td width="31%"><span class="error">{{$errors->first('email')}}</span></td>
            </tr>
            <tr>
                <th width="34.5%"><label>{{__('Phone')}}</label></th>
                <td width="34.5%"><input type="text" name="phone" value="{{ old('phone', $student->phone) }}"></td>
                <td width="31%"><span class="error">{{$errors->first('phone')}}</span></td>
            </tr>               
            <tr>
                <td colspan="3">                            
                    <button class="btn btn-primary" id="dataEntry" type="submit">{{__('Edit')}}</button>
                </td>
            </tr>
        </table>    
    </form>
</div>
@endsection

