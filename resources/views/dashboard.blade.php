@extends('layouts.app')
@section('content')
    <div id="frame">
        @include('layouts.sidebar')
        <div class="content">
            <div class="loader d-none">
                <div class="loader-inner">
                    <l-bouncy size="45" speed="1.75" color="black"></l-bouncy>
                </div>
            </div>
            <div class="contact-profile">
                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                <p class="user_name"></p>
                <div class="social-media">

                </div>
            </div>
            <div class="messages">
                <ul>
                    <li class="sent">
                        <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                        <p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!
                        </p>
                    </li>
                    <li class="replies">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <p>When you're backed against the wall, break the god damn thing down.</p>
                    </li>
                    <li class="replies">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <p>Excuses don't win championships.</p>
                    </li>
                    <li class="sent">
                        <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                        <p>Oh yeah, did Michael Jordan tell you that?</p>
                    </li>
                    <li class="replies">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <p>No, I told him that.</p>
                    </li>
                    <li class="replies">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <p>What are your choices when someone puts a gun to your head?</p>
                    </li>
                    <li class="sent">
                        <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                        <p>What are you talking about? You do what they say or they shoot you.</p>
                    </li>
                    <li class="replies">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <p>Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do
                            any one of a hundred and forty six other things.</p>
                    </li>
                </ul>
            </div>
            <div class="message-input">
                <div class="wrap">
                    <input type="text" placeholder="Write your message..." />
                    <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>
@endsection
