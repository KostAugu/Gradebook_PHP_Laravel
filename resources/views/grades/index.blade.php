@extends('layouts/app')

@section('header')
    <h2 class="text-center">{{__('Grades Entry Form')}}</h2>
@endsection

@section('content')
<div class="entryform container w-80 mx-auto">
    <form method="post" action="{{ url('grades') }}">
    @csrf
        <table class="table text-center">
            <tr class="d-flex">
                <th class="w-50"><label>{{__('Lecture')}}</label></th>
                <td class="w-50">            
                    <select name="lecture_id" class="w-100" id="lectures" >
                        <option value="" selected disabled>{{ __('Select lecture') }}</option>
                        @foreach ($lectures as $lecture)
                        <option value="{{$lecture->id}}">{{$lecture->name}}</option>
                        @endforeach
                    </select> 
                </td>
            </tr>
            <tr class="d-flex">
                <th class="w-50"><label>{{__('Student')}}</label></th>
                <td class="w-50">
                    <select name="student_id" class="w-100" id="students" >
                        <option value="" selected disabled>{{ __('Select student') }}</option>                
                        @foreach ($students as $student)
                        <option value="{{$student->id}}">{{$student->name . " " . $student->surname}}</option>
                        @endforeach
                    </select>         
                </td>       
            </tr>            
            <tr class="d-flex">
                <th class="w-50"><label>{{__('Grade')}}</label></th>
                <td class="w-50">
                    <input class="w-100" type="text" name="grade" value="{{ old('grade') }}">
                </td>
            </tr>             
            <tr>
                <td colspan="3">                            
                    <button class="btn btn-primary" id="dataEntry" type="submit">{{__('Add')}}</button>
                </td>
            </tr>
        </table>    
    </form>
</div>
@endsection