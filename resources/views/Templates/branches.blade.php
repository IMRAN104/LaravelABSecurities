@extends('Templates.base')
@section('title')
    Branches
@endsection
@push('styles')
    <link href="{{ asset('css/branches.css') }}" rel="stylesheet">
@endpush

@section('body')

<div class="branches-page">
    <div class="container">
        <div class="branches-page-header">
            <div class="branches-page-header-text">Our Branches</div>
        </div>
        <div class="row branches-page-row">
            <div class="col-sm-12 col-md-6 col-lg-6 brances-page-col">
                <p style="font-size: 24px; font-weight: 500; color: black;">Dhaka Office</p>
                <p>adresss goes here</p>
                <p>Email : absl@abbl.com</p>
                <p>Phone: +88-02-9566266, +88-02-9553939,</p>
                <p>Fax : +88-02-9553773</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 brances-page-col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.2842372104665!2d90.42002037820748!3d23.72783739257096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85a8fe863b9%3A0x60d60d8f51ae8855!2sAB%20Securities%20Limited!5e0!3m2!1sen!2sbd!4v1579323547981!5m2!1sen!2sbd"
                            width="100%"
                            height="100%"
                            frameborder="0"
                            style="border:0"
                            allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="branches-page-row">
            <div class="brances-page-col">
                <p style="font-size: 24px; font-weight: 500; color: black;">Chattogram Office</p>
                <p>adresss goes heree</p>
                <p>adresss goes heree</p>
                <p>Email : murshedar@abbl.com</p>
                <p>Phone: +88-031-2512790-2,</p>
                <p>Fax : +88-031-2512794</p>
            </div>
            <div class="brances-page-col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.2842372104665!2d90.42002037820748!3d23.72783739257096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85a8fe863b9%3A0x60d60d8f51ae8855!2sAB%20Securities%20Limited!5e0!3m2!1sen!2sbd!4v1579323547981!5m2!1sen!2sbd"
                            width="100%"
                            height="100%"
                            frameborder="0"
                            style="border:0"
                            allowfullscreen=""></iframe>
            </div>            
        </div>
        <div class="branches-page-row">
            <div class="brances-page-col">
                <p style="font-size: 24px; font-weight: 500; color: black;">Sylhet Office</p>
                <p>adresss goes heree</p>
                <p>adresss goes heree</p>
                <p>Email : murshedar@abbl.com</p>
                <p>Phone: +88-031-2512790-2,</p>
                <p>Fax : +88-031-2512794</p>
            </div>
            <div class="brances-page-col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.2842372104665!2d90.42002037820748!3d23.72783739257096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85a8fe863b9%3A0x60d60d8f51ae8855!2sAB%20Securities%20Limited!5e0!3m2!1sen!2sbd!4v1579323547981!5m2!1sen!2sbd"
                            width="100%"
                            height="100%"
                            frameborder="0"
                            style="border:0"
                            allowfullscreen=""></iframe>
            </div>            
        </div>
    </div>
</div>


@endsection

