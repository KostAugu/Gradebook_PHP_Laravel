@extends('layouts/app')

@section('content')
<h3 class="text-center">{{__('Lecture Edit Form')}}</h3>
<div class="entryform container w-80 p-3 mx-auto">
    <form method="post" action="{{ url('lectures', [$lecture->id]) }}">
    @csrf
    @method('PUT')
        <table class="table text-center">
            <tr>
                <th width="34.5%"><label>{{__('Name')}}</label></th>
                <td width="34.5%"><input type="text" name="name" value="{{ old('name', $lecture->name) }}"></td>
                <td width="31%"><span class="error">{{$errors->first('name')}}</span></td>                    
            </tr>
            <tr>
                <th width="34.5%"><label>{{__('Description')}}</label></th>
                <td width="34.5%"><input type="text" name="description" value="{{ old('description', $lecture->description) }}"></td>
                <td width="31%"><span class="error">{{$errors->first('description')}}</span></td>
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