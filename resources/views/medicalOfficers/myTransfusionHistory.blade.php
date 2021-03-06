@extends('layouts.medicalOfficer.master')
@section('title','My transfusion history')
@section('content')
    <div class="row">
        <div class="col-sm-7 col-6">
            <h4 class="page-title">{{auth()->user()->name}}'s Blood Transfusion History</h4>
        </div>
        <div class="col-sm-5 col-6 text-right m-b-30">
{{--            <a href="edit-profile.html" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>--}}
        </div>
    </div>
    <div class="card-box profile-header">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-view">
                    <div class="profile-img-wrap">
                        <div class="profile-img">
{{--                            <a href="#"><img class="avatar" src="{{asset($donor->image)}}" alt=""></a>--}}
                        </div>
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="profile-info-left">
                                    <h3 class="user-name m-t-0 mb-0">Name: {{ ' '.auth()->user()->name}}</h3>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <span class="title">BMA Approval No:</span>
                                        <span class="text">{{auth()->user()->bmo_no}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Email:</span>
                                        <span class="text">{{auth()->user()->email}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Address:</span>
                                        <span class="text">{{ auth()->user()->address }}</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        @foreach($transfusions as $cc=>$trans)
            <div class="col-md-12">
                <div class="profile-view">
                    <div class="profile-basic">
                        <div class="row page-sub-title">TransfusionInfo {{$cc+1}}</div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="profile-info-left">
                                    <h3 class="user-name m-t-0 mb-0"></h3>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <span class="title">Date:</span>
                                        <span class="text">{{date_format($trans->created_at,'Y-m-d')}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Transfusion Type:</span>
                                        <span class="text">{{$trans->transfusion_type}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Donor Name:</span>
                                        <span class="text">{{$donors[$cc]->name}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$transfusions->render()}}
    </div>

@endsection
