@extends('fontEnd.master')

@section('content')

    <div class="contact">
        <div class="container">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            <div class="contact-page">
                <div class="contact-info">
                    <h2 class="tittle">CONTACT</h2>
                </div>
                <div class="contact-form">
                    <form method="post" action="{{url('message/send')}}">
                        {{csrf_field()}}
                        <input type="text" placeholder="Name" name="name">
                        <input type="text" placeholder="Email" name="email">
                        <input type="text" placeholder="Telephone" name="contract">
                        <textarea name="message" placeholder="Message" required=""></textarea>
                        <input type="submit" value="SEND" >
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection