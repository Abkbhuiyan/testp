@extends('layouts.medicalOfficer.master')
@section('title','Check Donor Eligibility')
@section('content')
    <div class="row">
        <div class="col-sm-7 col-6">
            <h4 class="page-title">{{$donor->name}}'s Profile</h4>
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
                            <a href="#"><img class="avatar" src="{{asset($donor->image)}}" alt=""></a>
                        </div>
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="profile-info-left">
                                    <h3 class="user-name m-t-0 mb-0">{{$donor->name}}</h3>
                                    <small class="text-muted">@if($lastDonation >=120){{ 'Eligible for Donation' }}@else{{'Not Eligible'}}@endif</small>
                                    <div class="staff-id">@if($donationCount<=0){{'Never Donated'}}@else{{ 'Donated '.$donationCount.' times!' }} @endif</div>
                                    @if($lastDonation >=120 || $donationCount<=0 )
                                     <div class="staff-msg">
                                         <a href="{{route('medicalOfficer.donor.newSerology',$donor->id)}}" class="btn btn-primary">Serology</a>
                                         <a href="{{route('medicalOfficer.donor.newTransfusion',$donor->id)}}" class="btn btn-primary">Transfusion</a>
                                     </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <span class="title">Last Donation Date:</span>
                                        <span class="text">{{$donor->last_donation_date}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Last Donated:</span>
                                        <span class="text">@if($donationCount<=0){{'Never Donated'}}@else{{ $lastDonation.' Days Before' }} @endif</span>
                                    </li>
                                    <li>
                                        <span class="title">Blood Group:</span>
                                        <span class="text">{{ $bloodGroup->group_name.' '.$bloodGroup->rh_factor }}</span>
                                    </li>

                                    <li>
                                        <span class="title">Phone:</span>
                                        <span class="text"><a href="#">{{$donor->phone}}</a></span>
                                    </li>
                                    <li>
                                        <span class="title">Email:</span>
                                        <span class="text"><a href="#">{{$donor->email}}</a></span>
                                    </li>
                                    <li>
                                        <span class="title">Birthday:</span>
                                        <span class="text">{{$donor->dob}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Address:</span>
                                        <span class="text">$donor->address</span>
                                    </li>
                                    <li>
                                        <span class="title">Gender:</span>
                                        <span class="text">$donor->gender</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="profile-tabs">--}}
{{--        <ul class="nav nav-tabs nav-tabs-bottom">--}}
{{--            <li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">About</a></li>--}}
{{--            <li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-toggle="tab">Profile</a></li>--}}
{{--            <li class="nav-item"><a class="nav-link" href="#bottom-tab3" data-toggle="tab">Messages</a></li>--}}
{{--        </ul>--}}

{{--        <div class="tab-content">--}}
{{--            <div class="tab-pane show active" id="about-cont">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="card-box">--}}
{{--                            <h3 class="card-title">Education Informations</h3>--}}
{{--                            <div class="experience-box">--}}
{{--                                <ul class="experience-list">--}}
{{--                                    <li>--}}
{{--                                        <div class="experience-user">--}}
{{--                                            <div class="before-circle"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="experience-content">--}}
{{--                                            <div class="timeline-content">--}}
{{--                                                <a href="#/" class="name">International College of Medical Science (UG)</a>--}}
{{--                                                <div>MBBS</div>--}}
{{--                                                <span class="time">2001 - 2003</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="experience-user">--}}
{{--                                            <div class="before-circle"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="experience-content">--}}
{{--                                            <div class="timeline-content">--}}
{{--                                                <a href="#/" class="name">International College of Medical Science (PG)</a>--}}
{{--                                                <div>MD - Obstetrics & Gynaecology</div>--}}
{{--                                                <span class="time">1997 - 2001</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card-box mb-0">--}}
{{--                            <h3 class="card-title">Experience</h3>--}}
{{--                            <div class="experience-box">--}}
{{--                                <ul class="experience-list">--}}
{{--                                    <li>--}}
{{--                                        <div class="experience-user">--}}
{{--                                            <div class="before-circle"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="experience-content">--}}
{{--                                            <div class="timeline-content">--}}
{{--                                                <a href="#/" class="name">Consultant Gynecologist</a>--}}
{{--                                                <span class="time">Jan 2014 - Present (4 years 8 months)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="experience-user">--}}
{{--                                            <div class="before-circle"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="experience-content">--}}
{{--                                            <div class="timeline-content">--}}
{{--                                                <a href="#/" class="name">Consultant Gynecologist</a>--}}
{{--                                                <span class="time">Jan 2009 - Present (6 years 1 month)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="experience-user">--}}
{{--                                            <div class="before-circle"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="experience-content">--}}
{{--                                            <div class="timeline-content">--}}
{{--                                                <a href="#/" class="name">Consultant Gynecologist</a>--}}
{{--                                                <span class="time">Jan 2004 - Present (5 years 2 months)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="tab-pane" id="bottom-tab2">--}}
{{--                Tab content 2--}}
{{--            </div>--}}
{{--            <div class="tab-pane" id="bottom-tab3">--}}
{{--                Tab content 3--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
