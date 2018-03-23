@extends('layouts.app')
@section('content')
<div class="center_box cb">
    <div class="uo_tabs cf">
        <a href="#"><span>profile</a>
        <a href="#"><span>Reviews</span></a>
        <a href="#"><span>orders</span></a>
        <a href="#" class="active"><span>My Address</span></a>
        <a href="#"><span>Settings</span></a>
    </div>
    <div class="page_content bg_gray">
        <div class="uo_header">
            <div class="wrapper cf">
                <div class="wbox ava">
                    <figure><img src="img/imgc/user_ava_1_140.jpg" alt="Helena Afrassiabi" /></figure>
                </div>
                <div class="main_info">
                    <h1>Helena Afrassiabi</h1>
                    <div class="midbox">
                        <h4>560 points</h4>
                        <div class="info_nav">
                            <a href="#">Get Free Points</a>
                            <span class="sepor"></span>
                            <a href="#">Win iPad</a>
                        </div>
                    </div>
                    <div class="stat">
                        <div class="item">
                            <div class="num">30</div>
                            <div class="title">total orders</div>
                        </div>
                        <div class="item">
                            <div class="num">14</div>
                            <div class="title">total reviews</div>
                        </div>
                        <div class="item">
                            <div class="num">0</div>
                            <div class="title">total gifts</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uo_body">
            <div class="wrapper">
                <div class="uofb cf">
                    <div class="l_col adrs">
                        <h2>Add New Address</h2>

                        <form action="" method="POST" action="{{ route('address.store') }}">
                            {{ csrf_field() }}
                            <div class="field">
                                <label>Name *</label>
                                <input id="name" type="text"  name="name" value="{{ old('email') }}" class="vl_empty" required autofocus>
                                
                            </div>
                            <div class="field">
                                <label>Your city *</label>
                                <select name='city' class="vl_empty">
                                   <option class="plh"></option>
                                   @foreach($addresses as $address)
                                   <option value="{{$address->city}}">{{$address->city}}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="field">
                            <label>Your area *</label>
                            <select name="area">
                                <option class="plh"></option>
                                @foreach($addresses as $address)
                                 <option value="{{$address->area}}">{{$address->area}}</option>
                                  @endforeach
                            </select>
                        </div>

                        <div class="field">
                            <label>Street</label>
                            <input id="street" type="text"  name="street" value="{{ old('street') }}" class="vl_empty" required autofocus>
                        </div>
                        <div class="field">
                            <label>House # </label>
                            <input id="house" type="text"  name="house" value="{{ old('email') }}" class="vl_empty" required autofocus palceholder="House Name / Number">
                        </div>

                        <div class="field">
                            <label class="pos_top">Additional information</label>
                            <textarea name="info"></textarea>
                        </div>

                        <div class="field">
                            <input type="submit" value="add address" class="green_btn" />
                        </div>
                    </form>
                </div>

                <div class="r_col">
                    <h2>My Addresses</h2>                                   

                    <div class="uo_adr_list">
                        @foreach ($addresses as $address)
                        <div class="item">
                            <h3>{{$address->name}}</h3>
                            <p>{{$address->city}}, {{$address->area}}, {{$address->street}}, {{$address->house}}, {{$address->info}}</p>
                            <div class="actbox">
                                <a href="#" class="bcross"></a>
                            </div>
                        </div>
                        @endforeach 
                                        <!-- <div class="item">
                                            <h3>HOME Address</h3>
                                            <p>Dubai, Business Bay Area, Sheikh Zayed Road, Single </p>
                                            <div class="actbox">
                                                <a href="#" class="bcross"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <h3>Work Address</h3>
                                            <p>Dubai, Business Bay Area, Sheikh Zayed Road, Single<br/>Business Tower, Suite 2204</p>
                                            <div class="actbox">
                                                <a href="#" class="bcross"></a>
                                            </div>
                                        </div>        -->                               
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection