@extends('panel.layouts.master')

@section('page-title', 'Union Councils/Edit')
@section('content')
<center>
    <h2 class="mb-5">{{sprintf('Edit Union Council: %s', $unionCouncil->name)}}</h2>
</center>

<form method="POST" action="{{route('union-council.update', ['id' => $unionCouncil->id])}}">
    @csrf
    <div class="form-group mb-3">
        <label for="name">Name</label>
        <input required type="name" value="{{$unionCouncil->name}}" class="form-control" id="name" name="name">
    </div>
    <div class="form-group mb-3">
        <label for="code">Code</label>
        <input required type="name" value="{{$unionCouncil->code}}" class="form-control" id="code" name="code">
    </div>
    <div class="form-group mb-3">
        <label for="province_id">Province</label>
        <select class="form-control" onchange="loadDivisions(this.value)" id="province_id" name="province_id">
            <option value="{{null}}">Select Province *</option>
                @foreach (\App\Models\Province::all() as $province)
                    @if ($province->name == $unionCouncil->province()->value('name'))
                        <option selected value="{{$province->id}}">{{$province->name}}</option>
                    @else
                        <option value="{{$province->id}}">{{$province->name}}</option>
                    @endif
                @endforeach
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="division_id">Division</label>
        <select class="form-control" onchange="loadDistricts(this.value)" id="division_id" name="division_id">

        </select>
    </div>
    <div class="form-group mb-3">
        <label for="district_id">District</label>
        <select class="form-control" onchange="loadTehsils(this.value)" id="district_id" name="district_id">

        </select>
    </div>
    <div class="form-group mb-3">
        <label for="tehsil_id">Tehsil</label>
        <select class="form-control" id="tehsil_id" name="tehsil_id">
            <option value="{{$unionCouncil->getParentId()}}">{{$unionCouncil->getParentName()}}</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="description">Description</label>
        <textarea class="form-control" value="{{$unionCouncil->description}}" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="form-group mb-3">
        <center>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </center>
    </div>
</form>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var province = document.getElementById('province_id').value;
        checkProvince(province);
        // checkProvince(province);
    });

    function checkProvince(province) {
        // console.log(province);
        if (province == '<?php echo $unionCouncil->getParentId() ?>') {
            document.getElementById('division_id').disabled = true;
            document.getElementById('division_id').value = null;
            document.getElementById('district_id').disabled = true;
            document.getElementById('district_id').value = null;
            document.getElementById('tehsil_id').disabled = true;
            document.getElementById('tehsil_id').value = null;
        } else {
            document.getElementById('division_id').disabled = false;
            document.getElementById('district_id').disabled = false;
            document.getElementById('tehsil_id').disabled = false;
        }
    }

    function loadDivisions(province) {
        // console.log(province);
        if (province == '<?php echo \App\Models\Province::where('is_capital', 1)->first()->getAttribute('id') ?>') {
            document.getElementById('division_id').disabled = true;
            document.getElementById('division_id').value = null;
            document.getElementById('district_id').disabled = true;
            document.getElementById('district_id').value = null;
            document.getElementById('tehsil_id').disabled = true;
            document.getElementById('tehsil_id').value = null;
        } else {
            document.getElementById('division_id').disabled = false;
            document.getElementById('district_id').disabled = false;
            document.getElementById('tehsil_id').disabled = false;
            
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
    }
    
    function loadDistricts(division) {
        console.log(division);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '<?php echo route('district.load')?>',
            type: 'GET',
            data: {
                divisionId: division
            },
            success: function(response) {
                // console.log(response);
                if(response.length > 0) {
                    var districtSelect = document.getElementById('district_id');
                    districtSelect.options.length = 0;
                    districtSelect.setAttribute('required', true);

                    response.forEach(function(district) {
                        var option = document.createElement('option');
                        option.setAttribute('value', district.id);
                        option.textContent = district.name;
                        districtSelect.append(option);
                    });
                } else {
                    var option = document.createElement('option');
                    option.setAttribute('value', null);
                    option.textContent = 'No districts exists!';
                }
            },
            error: function(xhr, status, error) {
                console.log('Error while getting districts: ', error);
            }
        });
    }

    function loadTehsils(district) {
        console.log(district);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '<?php echo route('tehsil.load')?>',
            type: 'GET',
            data: {
                districtId: district
            },
            success: function(response) {
                // console.log(response);
                if(response.length > 0) {
                    var tehsilSelect = document.getElementById('tehsil_id');
                    tehsilSelect.options.length = 0;
                    tehsilSelect.setAttribute('required', true);

                    response.forEach(function(tehsil) {
                        var option = document.createElement('option');
                        option.setAttribute('value', tehsil.id);
                        option.textContent = tehsil.name;
                        tehsilSelect.append(option);
                    });
                } else {
                    var option = document.createElement('option');
                    option.setAttribute('value', null);
                    option.textContent = 'No tehsils exists!';
                }
            },
            error: function(xhr, status, error) {
                console.log('Error while getting tehsils: ', error);
            }
        });
    }
</script>