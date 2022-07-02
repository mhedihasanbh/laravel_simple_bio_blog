@extends('master')
@section('head')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<link href="{{asset('/')}}css/styles.css" rel="stylesheet" />
@endsection
@section('content')
<div class="container"> 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Bio Here</h4>
                    <hr/>
                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Post Tittle</th>
                            <td>{{$singlePost->post_tittle }}</td>
                        </tr>
                        <tr>
                            <th>Post Image</th>
                            <td>
                                <img src="{{asset($singlePost->post_image)}}"/>
                            </td>
                        </tr>
                        <tr>
                            <th>Full Name</th>
                            <td>{{$singlePost->full_name }}</td>
                        </tr>
                        <tr>
                            <th>Profession</th>
                            <td>{{$singlePost->profession }}</td>
                        </tr>
                        <tr>
                            <th>Height</th>
                            <td>{{$singlePost->height }}</td>
                        </tr>
                        <tr>
                            <th>Weight</th>
                            <td>{{$singlePost->weight }}</td>
                        </tr>
                        <tr>
                            <th>Chest</th>
                            <td>{{$singlePost->chest }}</td>
                        </tr>
                        <tr>
                            <th>Waist</th>
                            <td>{{$singlePost->waist }}</td>
                        </tr>
                        <tr>
                            <th>Bicipes</th>
                            <td>{{$singlePost->bicipes }}</td>
                        </tr>
                        <tr>
                            <th>Eye Color</th>
                            <td>{{$singlePost->eyeColor }}</td>
                        </tr>
                        <tr>
                            <th>Hair Color</th>
                            <td>{{$singlePost->hairColor }}</td>
                        </tr>
                        <tr>
                            <th>Birth Date</th>
                            <td>{{$singlePost->birth_date }}</td>
                        </tr>
                        <tr>
                            <th>Age</th>
                            <td>{{$singlePost->age }}</td>
                        </tr>
                        <tr>
                            <th>Birth Place</th>
                            <td>{{$singlePost->birth_place }}</td>
                        </tr>
                        <tr>
                            <th>Zodic Sign</th>
                            <td>
                                {{$singlePost->zodic_sign }}
                            </td>
                        </tr>
                        <tr>
                            <th>Nationality</th>
                            <td>{{$singlePost->nationality }}</td>
                        </tr>
                        <tr>
                            <th>Home Town</th>
                            <td>{{$singlePost->home_town }}</td>
                        </tr>
                        <tr>
                            <th>Education Qulification</th>
                            <td>{{$singlePost->education_qualification }}</td>
                        </tr>
                        <tr>
                            <th>Father Name</th>
                            <td>{{$singlePost->father_name }}</td>
                        </tr>
                        <tr>
                            <th>Mother Name</th>
                            <td>{{$singlePost->mother_name }}</td>
                        </tr>
                        <tr>
                            <th>Sister Name</th>
                            <td>{{$singlePost->sister }}</td>
                        </tr>
                        <tr>
                            <th>Sister Name</th>
                            <td>{{$singlePost->brother }}</td>
                        </tr>
                        <tr>
                            <th>Regions</th>
                            <td>{{$singlePost->regions }}</td>
                        </tr>
                        <tr>
                            <th>Hobby</th>
                            <td>{{$singlePost->hobby }}</td>
                        </tr>
                        <tr>
                            <th>Material Status</th>
                            <td>{{ $singlePost->material_status }}</td>
                        </tr>
                        <tr>
                            <th>Affair</th>
                            <td>{{ $singlePost->affair }}</td>
                        </tr>
                        <tr>
                            <th>Wife/Husband</th>
                            <td>{{ $singlePost->wife }}</td>
                        </tr>
                        <tr>
                            <th>Wife/Husband Image</th>
                            <td>
                                <img src="{{asset($singlePost->wife_image)}}"/>
                            </td>
                        </tr>
                        <tr>
                            <th>Death Date</th>
                            <td>{{ $singlePost->death_date }}</td>
                        </tr>
                        <tr>
                            <th>Death Cause</th>
                            <td>{{ $singlePost->death_cause }}</td>
                        </tr>
                        <tr>
                            <th>Summary</th>
                            <td>{!! $singlePost->summary !!}</td>
                        </tr>
                        <tr>
                            <th>Facts</th>
                            <td>{!! $singlePost->facts!!}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection