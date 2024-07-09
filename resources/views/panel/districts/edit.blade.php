@extends('panel.layouts.master')

@section('page-title', 'Districts/Edit')
@section('content')
<center>
    <h2 class="mb-5">{{sprintf('Edit District: %s', $district->name)}}</h2>
</center>

<form method="POST" action="{{route('district.update', ['id' => $district->id])}}">
    @csrf
    <div class="form-group mb-3">
        <label for="name">Name</label>
        <input required type="name" value="{{$district->name}}" class="form-control" id="name" name="name">
    </div>
    <div class="form-group mb-3">
        <label for="province_id">Province</label>
        <select class="form-control" onchange="loadDivisions(this.value)" id="province_id" name="province_id">
            <option value="{{null}}">Select Province *</option>
            @foreach (\App\Models\Province::where('is_capital', 0)->get() as $province)
                <option value="{{$province->id}}">{{$province->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="division_id">Division</label>
        <select required class="form-control" id="division_id" name="division_id">
            <option value="{{$district->getDivisionId()}}">{{$district->getDivisionName()}}</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="description">Description</label>
        <textarea class="form-control" value="{{$district->description}}" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="form-group mb-3">
        <center>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </center>
    </div>
</form>
@endsection

<script>
    function loadDivisions(province) {
        // console.log(province);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '<?php echo route('division.load')?>',
            type: 'GET',
            data: {
                provinceId: province
            },
            success: function(response) {
                // console.log(response);
                if(response.length > 0) {
                    var divisionSelect = document.getElementById('division_id');
                    divisionSelect.options.length = 0;
                    divisionSelect.setAttribute('required', true);

                    response.forEach(function(division) {
                        var option = document.createElement('option');
                        option.setAttribute('value', division.id);
                        option.textContent = division.name;
                        divisionSelect.append(option);
                    });
                } else {
                    var option = document.createElement('option');
                    option.setAttribute('value', null);
                    option.textContent = 'No divisions exists!';
                }
            },
            error: function(xhr, status, error) {
                console.log('Error while getting divisions: ', error);
            }
        });
    }
</script>